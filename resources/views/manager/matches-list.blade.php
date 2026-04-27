@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-matches-list'])

@section('title', 'Matches List | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Match Schedule</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Manage upcoming and completed matches
            </p>
        </div>
        <div class="flex gap-3">
            <button onclick="showCreateMatchModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Schedule Match
            </button>
        </div>
    </section>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">event</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Total Matches</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">upcoming</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="upcomingMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Upcoming</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">emoji_events</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="winRate">0%</p>
                    <p class="text-sm text-on-surface-variant">Win Rate</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">trending_up</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="form">0</p>
                    <p class="text-sm text-on-surface-variant">Current Form</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex gap-3">
                <button onclick="filterMatches('all')" class="filter-btn px-4 py-2 bg-primary text-on-primary rounded-lg font-bold text-sm">
                    All Matches
                </button>
                <button onclick="filterMatches('upcoming')" class="filter-btn px-4 py-2 bg-surface-container-highest text-on-surface-variant rounded-lg font-bold text-sm">
                    Upcoming
                </button>
                <button onclick="filterMatches('completed')" class="filter-btn px-4 py-2 bg-surface-container-highest text-on-surface-variant rounded-lg font-bold text-sm">
                    Completed
                </button>
            </div>
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input id="searchInput" type="text" placeholder="Search matches..." 
                           class="w-full pl-10 pr-4 py-2 bg-surface-container-highest rounded-lg border border-outline-variant/10 focus:border-primary focus:outline-none">
                </div>
            </div>
        </div>
    </div>

    <!-- Matches List -->
    <div id="matchesList" class="space-y-4">
        <!-- Matches will be loaded here -->
    </div>
</div>
@endsection

@section('scripts')
<script>
    let allMatches = [];
    let filteredMatches = [];
    let currentFilter = 'all';
    let currentUser = null;
    let currentTeam = null;

    async function loadMatchesData() {
        try {
            const [matches, userData] = await Promise.all([
                fetchAPI('/matches'),
                fetchAPI('/current-user')
            ]);
            
            allMatches = Array.isArray(matches) ? matches : (matches.data || []);
            currentUser = userData;
            currentTeam = userData?.team;
            
            // Filter matches for current team
            if (currentTeam) {
                allMatches = allMatches.filter(match => 
                    match.home_team_id === currentTeam.id || match.away_team_id === currentTeam.id
                );
            }
            
            filteredMatches = allMatches;
            updateStats();
            renderMatches();
        } catch (error) {
            console.error('Error loading matches data:', error);
            document.getElementById('matchesList').innerHTML = '<div class="text-center text-error py-8">Failed to load matches</div>';
        }
    }

    function updateStats() {
        document.getElementById('totalMatches').textContent = allMatches.length;
        
        const now = new Date();
        const upcoming = allMatches.filter(match => {
            const matchDate = new Date(match.date || match.match_date);
            return matchDate > now;
        });
        document.getElementById('upcomingMatches').textContent = upcoming.length;
        
        const completed = allMatches.filter(match => {
            const matchDate = new Date(match.date || match.match_date);
            return matchDate <= now;
        });
        
        const winRate = completed.length > 0 ? 
            (completed.filter(m => m.result === 'win').length / completed.length * 100) : 0;
        document.getElementById('winRate').textContent = winRate.toFixed(0) + '%';
        
        // Calculate current form (last 5 matches)
        const recentMatches = completed.slice(-5).reverse();
        const form = recentMatches.slice(0, 5).map(m => {
            if (m.result === 'win') return 'W';
            if (m.result === 'loss') return 'L';
            if (m.result === 'draw') return 'D';
            return '-';
        }).join(' ');
        document.getElementById('form').textContent = form || '-';
    }

    function renderMatches() {
        const container = document.getElementById('matchesList');
        
        if (filteredMatches.length === 0) {
            container.innerHTML = '<div class="text-center text-outline py-8">No matches found</div>';
            return;
        }
        
        container.innerHTML = filteredMatches.map(match => {
            const isHome = match.home_team_id === currentTeam?.id;
            const opponent = isHome ? match.away_team : match.home_team;
            const matchDate = new Date(match.date || match.match_date);
            const isCompleted = matchDate <= new Date();
            
            let resultBadge = '';
            if (isCompleted) {
                if (match.result === 'win') {
                    resultBadge = '<span class="px-2 py-1 bg-primary-container text-primary text-xs font-bold rounded-full">W</span>';
                } else if (match.result === 'loss') {
                    resultBadge = '<span class="px-2 py-1 bg-error-container text-error text-xs font-bold rounded-full">L</span>';
                } else {
                    resultBadge = '<span class="px-2 py-1 bg-surface-container-highest text-on-surface-variant text-xs font-bold rounded-full">D</span>';
                }
            } else {
                resultBadge = '<span class="px-2 py-1 bg-tertiary-container text-tertiary text-xs font-bold rounded-full">UPCOMING</span>';
            }
            
            return `
                <div class="bg-surface-container-low rounded-2xl p-6 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">
                                    ${currentTeam?.name ? currentTeam.name.charAt(0).toUpperCase() : 'H'}
                                </div>
                                <p class="text-sm font-bold text-on-surface mt-1">${isHome ? currentTeam?.name || 'Home' : 'Away'}</p>
                            </div>
                            
                            <div class="text-center">
                                <p class="text-2xl font-black text-on-surface">${match.score || 'vs'}</p>
                                <p class="text-xs text-on-surface-variant">${matchDate.toLocaleDateString()}</p>
                            </div>
                            
                            <div class="text-center">
                                <div class="w-16 h-16 rounded-xl bg-surface-container-highest flex items-center justify-center text-on-surface font-bold">
                                    ${opponent?.name ? opponent.name.charAt(0).toUpperCase() : 'A'}
                                </div>
                                <p class="text-sm font-bold text-on-surface mt-1">${opponent?.name || 'Away'}</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col items-end gap-2">
                            ${resultBadge}
                            <button onclick="viewMatchDetails(${match.id})" class="text-xs font-bold text-primary bg-primary/10 px-3 py-1 rounded-lg hover:bg-primary/20 transition-colors">
                                Details
                            </button>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-outline-variant/20">
                        <div class="flex items-center justify-between text-xs text-on-surface-variant">
                            <span><span class="material-symbols-outlined text-sm">location_on</span> ${match.venue || 'TBD'}</span>
                            <span><span class="material-symbols-outlined text-sm">schedule</span> ${matchDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</span>
                        </div>
                    </div>
                </div>
            `;
        }).join('');
    }

    function filterMatches(filter) {
        currentFilter = filter;
        const now = new Date();
        
        if (filter === 'all') {
            filteredMatches = allMatches;
        } else if (filter === 'upcoming') {
            filteredMatches = allMatches.filter(match => {
                const matchDate = new Date(match.date || match.match_date);
                return matchDate > now;
            });
        } else if (filter === 'completed') {
            filteredMatches = allMatches.filter(match => {
                const matchDate = new Date(match.date || match.match_date);
                return matchDate <= now;
            });
        }
        
        // Update button styles
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('bg-primary', 'text-on-primary');
            btn.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
        });
        event.target.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
        event.target.classList.add('bg-primary', 'text-on-primary');
        
        renderMatches();
    }

    function showCreateMatchModal() {
        alert('Create Match functionality coming soon!');
    }

    function viewMatchDetails(matchId) {
        window.location.href = `/manager/match-details/${matchId}`;
    }

    // Search functionality
    document.getElementById('searchInput').addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        filteredMatches = allMatches.filter(match => {
            const homeTeam = match.home_team?.name || '';
            const awayTeam = match.away_team?.name || '';
            const venue = match.venue || '';
            return homeTeam.toLowerCase().includes(searchTerm) || 
                   awayTeam.toLowerCase().includes(searchTerm) || 
                   venue.toLowerCase().includes(searchTerm);
        });
        renderMatches();
    });

    window.addEventListener('DOMContentLoaded', loadMatchesData);
</script>
@endsection
