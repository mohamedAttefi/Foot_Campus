@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-schedule'])

@section('title', 'Team Schedule | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Team Schedule</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Manage match fixtures and training sessions
            </p>
        </div>
        <div class="flex gap-3">
            <button onclick="showCalendarView()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl shadow-sm hover:bg-surface-container-high transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">calendar_month</span>
                Calendar View
            </button>
            <button onclick="showAddMatchModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add Match
            </button>
        </div>
    </section>

    <!-- Schedule Overview -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">event</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="upcomingMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Upcoming Matches</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">fitness_center</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="trainingSessions">0</p>
                    <p class="text-sm text-on-surface-variant">Training Sessions</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">today</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="thisWeek">0</p>
                    <p class="text-sm text-on-surface-variant">This Week</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex gap-3">
                <button onclick="filterSchedule('all')" class="filter-btn px-4 py-2 bg-primary text-on-primary rounded-lg font-bold text-sm">
                    All Events
                </button>
                <button onclick="filterSchedule('matches')" class="filter-btn px-4 py-2 bg-surface-container-highest text-on-surface-variant rounded-lg font-bold text-sm">
                    Matches
                </button>
                <button onclick="filterSchedule('training')" class="filter-btn px-4 py-2 bg-surface-container-highest text-on-surface-variant rounded-lg font-bold text-sm">
                    Training
                </button>
            </div>
            <div class="flex-1">
                <input id="monthFilter" type="month" class="px-4 py-2 bg-surface-container-highest rounded-lg border border-outline-variant/10 focus:border-primary focus:outline-none">
            </div>
        </div>
    </div>

    <!-- Schedule Timeline -->
    <div id="scheduleTimeline" class="space-y-6">
        <!-- Schedule items will be loaded here -->
    </div>
</div>
@endsection

@section('scripts')
<script>
    let allEvents = [];
    let filteredEvents = [];
    let currentFilter = 'all';
    let currentUser = null;
    let currentTeam = null;

    async function loadScheduleData() {
        try {
            const [matches, userData] = await Promise.all([
                fetchAPI('/matches'),
                fetchAPI('/current-user')
            ]);
            
            currentUser = userData;
            currentTeam = userData?.team;
            
            const matchesArray = Array.isArray(matches) ? matches : (matches.data || []);
            
            // Filter matches for current team
            const teamMatches = currentTeam ? 
                matchesArray.filter(match => match.home_team_id === currentTeam.id || match.away_team_id === currentTeam.id) : 
                matchesArray;
            
            // Convert matches to events and add training sessions
            allEvents = [
                ...teamMatches.map(match => ({
                    id: match.id,
                    type: 'match',
                    title: `Match vs ${match.away_team?.name || 'Opponent'}`,
                    date: match.date || match.match_date,
                    time: match.time || '15:00',
                    venue: match.venue || 'Home Stadium',
                    isHome: match.home_team_id === currentTeam?.id,
                    opponent: match.away_team || match.home_team
                })),
                // Generate mock training sessions
                ...generateTrainingSessions()
            ];
            
            filteredEvents = allEvents;
            updateStats();
            renderSchedule();
        } catch (error) {
            console.error('Error loading schedule data:', error);
            document.getElementById('scheduleTimeline').innerHTML = '<div class="text-center text-error py-8">Failed to load schedule</div>';
        }
    }

    function generateTrainingSessions() {
        const sessions = [];
        const today = new Date();
        
        for (let i = 0; i < 8; i++) {
            const date = new Date(today);
            date.setDate(today.getDate() + i);
            
            // Skip weekends for training
            if (date.getDay() !== 0 && date.getDay() !== 6) {
                sessions.push({
                    id: `training-${i}`,
                    type: 'training',
                    title: 'Team Training',
                    date: date.toISOString().split('T')[0],
                    time: '16:00',
                    venue: 'Training Ground',
                    isHome: true
                });
            }
        }
        
        return sessions;
    }

    function updateStats() {
        const now = new Date();
        const upcoming = allEvents.filter(event => new Date(event.date) > now);
        const training = allEvents.filter(event => event.type === 'training');
        
        // Events this week
        const weekStart = new Date(now);
        weekStart.setDate(now.getDate() - now.getDay());
        const weekEnd = new Date(weekStart);
        weekEnd.setDate(weekStart.getDate() + 6);
        
        const thisWeekEvents = allEvents.filter(event => {
            const eventDate = new Date(event.date);
            return eventDate >= weekStart && eventDate <= weekEnd;
        });
        
        document.getElementById('upcomingMatches').textContent = 
            upcoming.filter(e => e.type === 'match').length;
        document.getElementById('trainingSessions').textContent = training.length;
        document.getElementById('thisWeek').textContent = thisWeekEvents.length;
    }

    function renderSchedule() {
        const container = document.getElementById('scheduleTimeline');
        
        if (filteredEvents.length === 0) {
            container.innerHTML = '<div class="text-center text-outline py-8">No events scheduled</div>';
            return;
        }
        
        // Sort events by date
        filteredEvents.sort((a, b) => new Date(a.date) - new Date(b.date));
        
        // Group events by date
        const eventsByDate = {};
        filteredEvents.forEach(event => {
            const date = event.date;
            if (!eventsByDate[date]) {
                eventsByDate[date] = [];
            }
            eventsByDate[date].push(event);
        });
        
        container.innerHTML = Object.entries(eventsByDate).map(([date, events]) => {
            const dateObj = new Date(date);
            const isToday = date === new Date().toISOString().split('T')[0];
            
            return `
                <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-2 h-12 rounded-full ${isToday ? 'bg-primary' : 'bg-outline-variant'}"></div>
                        <div>
                            <h3 class="font-headline font-bold text-lg text-on-surface">
                                ${dateObj.toLocaleDateString('en-US', { weekday: 'long', month: 'long', day: 'numeric' })}
                            </h3>
                            ${isToday ? '<span class="text-xs font-bold text-primary">Today</span>' : ''}
                        </div>
                    </div>
                    
                    <div class="space-y-3 ml-5">
                        ${events.map(event => `
                            <div class="flex items-center justify-between p-4 bg-surface-container-highest rounded-xl">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-xl flex items-center justify-center ${
                                        event.type === 'match' ? 'bg-primary/10' : 'bg-secondary/10'
                                    }">
                                        <span class="material-symbols-outlined ${
                                            event.type === 'match' ? 'text-primary' : 'text-secondary'
                                        } text-xl">
                                            ${event.type === 'match' ? 'sports_soccer' : 'fitness_center'}
                                        </span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface">${event.title}</p>
                                        <p class="text-sm text-on-surface-variant">
                                            <span class="material-symbols-outlined text-sm">schedule</span> ${event.time}
                                            <span class="material-symbols-outlined text-sm ml-2">location_on</span> ${event.venue}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    ${event.type === 'match' ? `
                                        <span class="text-xs font-bold ${event.isHome ? 'text-primary' : 'text-error'}">
                                            ${event.isHome ? 'HOME' : 'AWAY'}
                                        </span>
                                    ` : ''}
                                    <button onclick="viewEventDetails('${event.id}')" class="text-xs font-bold text-primary bg-primary/10 px-3 py-1 rounded-lg hover:bg-primary/20 transition-colors">
                                        Details
                                    </button>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
        }).join('');
    }

    function filterSchedule(filter) {
        currentFilter = filter;
        
        if (filter === 'all') {
            filteredEvents = allEvents;
        } else if (filter === 'matches') {
            filteredEvents = allEvents.filter(e => e.type === 'match');
        } else if (filter === 'training') {
            filteredEvents = allEvents.filter(e => e.type === 'training');
        }
        
        // Apply month filter if set
        const monthFilter = document.getElementById('monthFilter').value;
        if (monthFilter) {
            filteredEvents = filteredEvents.filter(e => e.date.startsWith(monthFilter));
        }
        
        // Update button styles
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('bg-primary', 'text-on-primary');
            btn.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
        });
        event.target.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
        event.target.classList.add('bg-primary', 'text-on-primary');
        
        renderSchedule();
    }

    function showCalendarView() {
        alert('Calendar view coming soon!');
    }

    function showAddMatchModal() {
        alert('Add match functionality coming soon!');
    }

    function viewEventDetails(eventId) {
        const event = allEvents.find(e => e.id === eventId);
        if (event && event.type === 'match') {
            window.location.href = `/manager/match-details/${eventId}`;
        } else {
            alert(`Event details for ${eventId} coming soon!`);
        }
    }

    // Month filter listener
    document.getElementById('monthFilter').addEventListener('change', () => {
        filterSchedule(currentFilter);
    });

    window.addEventListener('DOMContentLoaded', loadScheduleData);
</script>
@endsection
