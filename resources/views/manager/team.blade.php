@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-team'])

@section('title', 'Team Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Team Management
            </h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Internal Management & Tactical Command</p>
        </div>
        <div class="flex gap-3">
            <div class="flex flex-col items-end">
                <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Season
                    Win Rate</span>
                <span class="text-2xl font-black text-primary">84%</span>
            </div>
            <div class="h-10 w-px bg-outline-variant/30 mx-2"></div>
            <div class="flex flex-col items-end">
                <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Academic
                    Avg.</span>
                <span class="text-2xl font-black text-secondary">A-</span>
            </div>
        </div>
    </section>

    <!-- Bento Grid Layout -->
    <div class="grid grid-cols-12 gap-6">
        <!-- Tactical Summary Card (Spans 4) -->
        <div class="col-span-12 lg:col-span-4 space-y-6">
            <div
                class="bg-surface-container-lowest rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <span class="material-symbols-outlined text-8xl"
                        style="font-variation-settings: 'FILL' 1;">strategy</span>
                </div>
                <h3 class="font-headline text-xl font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">analytics</span>
                    Tactical Summary
                </h3>
                <div class="space-y-4 relative z-10">
                    <div class="p-4 bg-primary/5 rounded-xl border-l-4 border-primary">
                        <p class="text-xs font-bold text-primary uppercase tracking-wider mb-1">Current System
                        </p>
                        <p class="text-lg font-bold text-on-surface">4-3-3 High Press</p>
                        <p class="text-sm text-on-surface-variant mt-1">Focusing on wide-play transitions and
                            high defensive line maintenance.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-surface-container-low p-3 rounded-xl text-center">
                            <span
                                class="text-[10px] block text-on-surface-variant font-bold uppercase mb-1">Attacking</span>
                            <span class="text-xl font-black text-on-surface">High</span>
                        </div>
                        <div class="bg-surface-container-low p-3 rounded-xl text-center">
                            <span
                                class="text-[10px] block text-on-surface-variant font-bold uppercase mb-1">Width</span>
                            <span class="text-xl font-black text-on-surface">Wide</span>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-outline-variant/20">
                        <button
                            class="w-full text-primary font-bold text-sm flex items-center justify-center gap-1 py-2 hover:bg-primary/5 rounded-lg transition-colors">
                            Edit Tactical Board
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Attendance Logs Widget -->
            <div class="bg-surface-container-low rounded-[1.5rem] p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-headline text-lg font-bold">Attendance</h3>
                    <span
                        class="text-xs font-bold text-on-surface-variant bg-surface-container-highest px-3 py-1 rounded-full">Last
                        7 Days</span>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-on-surface-variant">Mon Training</span>
                        <div class="flex gap-1">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-error"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                        </div>
                        <span class="text-sm font-bold">94%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-on-surface-variant">Tue Match Prep</span>
                        <div class="flex gap-1">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                        </div>
                        <span class="text-sm font-bold">100%</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-on-surface-variant">Wed Academic</span>
                        <div class="flex gap-1">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-error"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                        </div>
                        <span class="text-sm font-bold">88%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Roster List (Spans 8) -->
        <div
            class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-[1.5rem] shadow-sm border border-outline-variant/10 overflow-hidden">
            <div class="p-6 border-b border-outline-variant/10 flex justify-between items-center">
                <div>
                    <h3 class="font-headline text-xl font-bold">Player Roster</h3>
                    <p class="text-sm text-on-surface-variant">Manage squad depth and performance trends</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="bg-surface-container-low p-2 rounded-lg hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
                    </button>
                    <button
                        class="bg-surface-container-low p-2 rounded-lg hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-on-surface-variant">download</span>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low/50">
                        <tr>
                            <th
                                class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Player</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Position</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Current Form</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Attendance</th>
                            <th
                                class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                                Academic</th>
                            <th class="px-4 py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/5">
                        <!-- Player rows will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
            <div id="pagination-container" class="p-6 bg-surface-container-low/50 border-t border-outline-variant/10 flex justify-between items-center">
                <!-- Pagination controls will be inserted here -->
            </div>
        </div>
        <!-- Session Feedback & Notes (Bottom Section) -->
        <div class="col-span-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-surface-container-high rounded-[1.5rem] p-6 flex flex-col justify-between">
                <div>
                    <span class="material-symbols-outlined text-secondary mb-3">history_edu</span>
                    <h4 class="font-headline font-bold text-on-surface">Coaching Journal</h4>
                    <p class="text-sm text-on-surface-variant mt-2">"High-intensity drills showed marked
                        improvement in stamina. Need to focus on defensive corners."</p>
                </div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant mt-4">Last
                    Update: 2h ago</p>
            </div>
            <div class="bg-surface-container-high rounded-[1.5rem] p-6 flex flex-col justify-between">
                <div>
                    <span class="material-symbols-outlined text-primary mb-3">fitness_center</span>
                    <h4 class="font-headline font-bold text-on-surface">Medical Room</h4>
                    <p class="text-sm text-on-surface-variant mt-2">2 players currently on modified training.
                        Ethan showing minor fatigue in right calf.</p>
                </div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant mt-4">3 active
                    alerts</p>
            </div>
            <div id="next-fixture-section" class="bg-primary rounded-[1.5rem] p-6 flex flex-col justify-between text-on-primary">
                <div>
                    <span class="material-symbols-outlined text-primary-fixed-dim mb-3">event_available</span>
                    <h4 class="font-headline font-bold">Next Fixture</h4>
                    <p class="text-sm opacity-80 mt-2">Vs. South Academy (A)<br />Kickoff: Sat 10:00 AM</p>
                </div>
                <div class="mt-4 flex -space-x-2">
                    <img alt=""
                        class="w-6 h-6 rounded-full border-2 border-primary ring-2 ring-primary object-cover"
                        data-alt="small icon thumbnail of a player"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpw1lZtlgYusx1WEMYho6XwrTHTyIyvtJaHDARQ9EeVC9OQsfPcLeGRV773lquvjV8QX4HAdobYUd6ydYrRf_8tT57SE4BRWCObomOwTqGSy7lglKDNUkqeufUH9T7TdugK9ttF6TcFb6DhEfdVD48sc601zUqN838a1UZpRFDN0OK69OGS-cq7pjqEOwzpkJ-AmpkaXKou8kXrm5JwFiuijEbLwvCSKjZZ1IGmA5jZ4Fpeqz4GJ2e_KEmeVCH2ZcdbQsDeNn3YMY" />
                    <img alt=""
                        class="w-6 h-6 rounded-full border-2 border-primary ring-2 ring-primary object-cover"
                        data-alt="small icon thumbnail of a player"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUGcO5sH1Bb7LwQO4DzQLLHV3ObyCWgJkKopQZYKLGYp5NFS2OgabRNTb_Jt82O9KwHcp5qGoCSdLPJnWIcaf44IB8gmR-CQ0auBzaKsIKOwOVkFCrdVQQ6h0ovODQCZahZpGHXfZNEPWfiVHy0Mc25V9jITJZFwLoVeLafsPjOAXGKbW-zvc7KaoDPMY4Bm3yZeqi-uD5U_mjxwhVUmN55IbdsTThZzKtCYZja1jwwJ3nkPdxwUZQP9I9p6suih0R4PCgb_gCsrE" />
                    <img alt=""
                        class="w-6 h-6 rounded-full border-2 border-primary ring-2 ring-primary object-cover"
                        data-alt="small icon thumbnail of a player"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmOfRGTmdlAqGpu5Mz-W6ryesf9gPrNZXEI9YQ0WV3VVnKZHlxWlrLnMAiQnA_DG8e2gqKGr9MyBc8FgyE3UZgqtnj85nUdu4YAYsUE1qeCMwNmTjiX_el-ATlHBSv4ruQU9scuJLI5X433T3cARvlNH5zEQGWWiXmieaDU1zrqAW-cQlS8HjGr0PeX3ZqCOJ4a_MmDdOuv4vJgoUPvWpfXlXYEVJbXvvkHmDbfeypXoSomxEFz3BvqQDCOzh5LUQov0SZizI3Dwk" />
                    <div
                        class="w-6 h-6 rounded-full bg-primary-container text-[8px] flex items-center justify-center font-bold">
                        +18</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const API_BASE = 'http://127.0.0.1:8000/api';
    let currentUser = null;
    let currentTeam = null;
    let teamPlayers = [];
    let matches = [];
    let currentPage = 1;
    let playersPerPage = 10;
    let totalPlayers = 0;

    async function loadTeamData() {
        try {
            // Load current user and team
            currentUser = await fetchAPI('/current-user');
            console.log('User data:', currentUser);

            if (currentUser.team) {
                currentTeam = currentUser.team;
                console.log('Team loaded:', currentTeam);
            } else {
                console.log('No team found for coach');
                currentTeam = null;
            }

            // Update header with team info
            document.querySelector('h2').innerText = currentTeam?.name || 'Team Management';
            document.getElementById('nav-user-name').innerText = currentUser.name?.split(' ')[0] || 'Coach';
            document.getElementById('nav-user-avatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(currentUser.name || 'Coach')}&background=0f5238&color=fff&size=32`;

            // Load team players
            const playersRes = await fetchAPI('/player');
            const allPlayers = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);
            teamPlayers = allPlayers.filter(p => p.team_id === currentTeam?.id);

            // Enhance players with user data
            for (let player of teamPlayers) {
                try {
                    const userData = await fetchAPI(`/users/${player.user_id}`);
                    player.user = userData;
                } catch(e) {
                    console.log('Failed to load user data for player:', player.user_id, e);
                }
            }

            // Load matches for stats
            const matchesRes = await fetchAPI('/matches');
            matches = Array.isArray(matchesRes) ? matchesRes : (matchesRes.data || []);

            // Update UI
            updateTeamStats();
            renderPlayerRoster();
            updateNextMatch();
            updateAttendanceData();

        } catch(err) {
            console.error("Failed to load team data:", err);
            showError('Failed to load team data. Please refresh the page.');
        }
    }

    function updateTeamStats() {
        // Calculate win rate from matches
        const teamMatches = matches.filter(m => 
            (m.home_team_id === currentTeam?.id || m.away_team_id === currentTeam?.id) &&
            m.status === 'completed'
        );
        
        const wins = teamMatches.filter(m => 
            (m.home_team_id === currentTeam?.id && m.home_score > m.away_score) ||
            (m.away_team_id === currentTeam?.id && m.away_score > m.home_score)
        ).length;
        
        const winRate = teamMatches.length > 0 ? Math.round((wins / teamMatches.length) * 100) : 0;
        
        // Calculate academic average
        const academicGrades = ['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D+', 'D', 'D-', 'F'];
        const gradePoints = { 'A+': 4.0, 'A': 4.0, 'A-': 3.7, 'B+': 3.3, 'B': 3.0, 'B-': 2.7, 'C+': 2.3, 'C': 2.0, 'C-': 1.7, 'D+': 1.3, 'D': 1.0, 'D-': 0.7, 'F': 0.0 };
        
        // This would need to be calculated from actual grade data
        const academicAvg = 'A-'; // Placeholder
        
        // Update stats display
        document.querySelector('.text-2xl.font-black.text-primary').innerText = `${winRate}%`;
        document.querySelector('.text-2xl.font-black.text-secondary').innerText = academicAvg;
    }

    function renderPlayerRoster() {
        const tbody = document.querySelector('tbody');
        totalPlayers = teamPlayers.length;
        
        if (totalPlayers === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="6" class="px-6 py-8 text-center text-outline">
                        No players found in your team
                    </td>
                </tr>
            `;
            document.getElementById('pagination-container').innerHTML = '';
            return;
        }

        // Calculate pagination
        const startIndex = (currentPage - 1) * playersPerPage;
        const endIndex = startIndex + playersPerPage;
        const paginatedPlayers = teamPlayers.slice(startIndex, endIndex);

        tbody.innerHTML = paginatedPlayers.map(player => {
            const position = player.position || 'MID';
            const form = (Math.random() * 3 + 7).toFixed(1); // Placeholder form calculation
            const attendance = Math.round(Math.random() * 30 + 70); // Placeholder attendance
            const academicGrade = ['A+', 'A', 'A-', 'B+', 'B', 'B-'][Math.floor(Math.random() * 6)]; // Placeholder grade
            
            let formColor = 'bg-primary';
            if (form < 7.5) formColor = 'bg-secondary';
            if (form < 7.0) formColor = 'bg-error';
            
            let academicColor = 'bg-tertiary-container text-on-tertiary-container';
            if (academicGrade.startsWith('B')) academicColor = 'bg-surface-container text-on-surface-variant';
            if (academicGrade.startsWith('C') || academicGrade.startsWith('D')) academicColor = 'bg-error-container text-on-error-container';

            return `
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">
                                    ${player.user?.name?.charAt(0) || 'P'}
                                </div>
                                <span class="absolute -bottom-1 -right-1 bg-primary text-on-primary text-[8px] font-bold px-1 rounded-sm">
                                    ${player.jersey_number || '?'}
                                </span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">${player.user?.name || `Player ${player.id}`}</p>
                                <p class="text-xs text-on-surface-variant">Squad Member</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm font-medium text-on-surface-variant">${position}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <div class="w-16 h-2 bg-surface-container-highest rounded-full overflow-hidden">
                                <div class="${formColor} h-full rounded-full" style="width: ${(form / 10) * 100}%"></div>
                            </div>
                            <span class="text-xs font-bold text-primary">${form}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-sm text-on-surface">${attendance}%</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="${academicColor} text-[10px] font-bold px-3 py-1 rounded-full">${academicGrade}</span>
                    </td>
                    <td class="px-4 py-4">
                        <button class="opacity-0 group-hover:opacity-100 transition-opacity p-1 text-slate-400 hover:text-primary" onclick="viewPlayerDetails(${player.id})">
                            <span class="material-symbols-outlined text-lg">more_vert</span>
                        </button>
                    </td>
                </tr>
            `;
        }).join('');
        
        // Render pagination controls
        renderPagination();
    }

    function updateNextMatch() {
        const now = new Date();
        const nextMatch = matches.find(m => {
            const matchDate = new Date(m.match_date || m.date);
            return matchDate > now && (m.home_team_id === currentTeam?.id || m.away_team_id === currentTeam?.id);
        });

        const nextMatchSection = document.getElementById('next-fixture-section');
        
        if (nextMatch) {
            const isHome = nextMatch.home_team_id === currentTeam?.id;
            const opponent = isHome ? nextMatch.away_team?.name || 'Opponent' : nextMatch.home_team?.name || 'Opponent';
            const date = new Date(nextMatch.match_date || nextMatch.date);
            
            nextMatchSection.innerHTML = `
                <div class="flex flex-col justify-between text-on-primary">
                    <div>
                        <span class="material-symbols-outlined text-primary-fixed-dim mb-3">event_available</span>
                        <h4 class="font-headline font-bold">Next Fixture</h4>
                        <p class="text-sm opacity-80 mt-2">Vs. ${opponent} (${isHome ? 'H' : 'A'})<br />Kickoff: ${date.toLocaleDateString()} ${date.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</p>
                    </div>
                    <div class="mt-4 flex -space-x-2">
                        ${teamPlayers.slice(0, 3).map(player => `
                            <div class="w-6 h-6 rounded-full bg-primary-container text-[8px] flex items-center justify-center font-bold border-2 border-primary ring-2 ring-primary">
                                ${player.user?.name?.charAt(0) || 'P'}
                            </div>
                        `).join('')}
                        <div class="w-6 h-6 rounded-full bg-primary-container text-[8px] flex items-center justify-center font-bold border-2 border-primary ring-2 ring-primary">
                            +${teamPlayers.length - 3}
                        </div>
                    </div>
                </div>
            `;
        } else {
            nextMatchSection.innerHTML = `
                <div class="flex flex-col justify-between text-on-primary">
                    <div>
                        <span class="material-symbols-outlined text-primary-fixed-dim mb-3">event_available</span>
                        <h4 class="font-headline font-bold">No Upcoming Matches</h4>
                        <p class="text-sm opacity-80 mt-2">Check schedule for future fixtures</p>
                    </div>
                </div>
            `;
        }
    }

    function updateAttendanceData() {
        // Update attendance logs with placeholder data
        const attendanceData = [
            { day: 'Mon Training', rate: 94 },
            { day: 'Tue Match Prep', rate: 100 },
            { day: 'Wed Academic', rate: 88 }
        ];

        const attendanceContainer = document.querySelector('.space-y-3');
        attendanceContainer.innerHTML = attendanceData.map(session => `
            <div class="flex items-center justify-between">
                <span class="text-sm text-on-surface-variant">${session.day}</span>
                <div class="flex gap-1">
                    ${Array(5).fill(0).map((_, i) => 
                        `<span class="w-2 h-2 rounded-full ${i < Math.floor(session.rate / 20) ? 'bg-primary' : 'bg-error'}"></span>`
                    ).join('')}
                </div>
                <span class="text-sm font-bold">${session.rate}%</span>
            </div>
        `).join('');
    }

    function viewPlayerDetails(playerId) {
        console.log('View player details:', playerId);
        // Could open a modal or navigate to player details page
        alert(`Player details for ID: ${playerId}. This would open a detailed player view.`);
    }

    function renderPagination() {
        const container = document.getElementById('pagination-container');
        const totalPages = Math.ceil(totalPlayers / playersPerPage);
        
        if (totalPages <= 1) {
            container.innerHTML = '';
            return;
        }

        let paginationHTML = '<div class="flex items-center gap-2">';
        
        // Previous button
        if (currentPage > 1) {
            paginationHTML += `
                <button onclick="previousPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                    Previous
                </button>
            `;
        } else {
            paginationHTML += `
                <button disabled class="px-3 py-1 text-sm font-medium text-on-surface-variant/50 bg-surface-container-low rounded-lg flex items-center gap-1 cursor-not-allowed">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
                    Previous
                </button>
            `;
        }

        // Page numbers
        const maxVisiblePages = 5;
        let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        if (endPage - startPage < maxVisiblePages - 1) {
            startPage = Math.max(1, endPage - maxVisiblePages + 1);
        }

        if (startPage > 1) {
            paginationHTML += `
                <button onclick="goToPage(1)" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">1</button>
            `;
            if (startPage > 2) {
                paginationHTML += `<span class="px-2 text-sm text-on-surface-variant">...</span>`;
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            if (i === currentPage) {
                paginationHTML += `
                    <button class="px-3 py-1 text-sm font-medium text-on-primary bg-primary rounded-lg">${i}</button>
                `;
            } else {
                paginationHTML += `
                    <button onclick="goToPage(${i})" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">${i}</button>
                `;
            }
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                paginationHTML += `<span class="px-2 text-sm text-on-surface-variant">...</span>`;
            }
            paginationHTML += `
                <button onclick="goToPage(${totalPages})" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">${totalPages}</button>
            `;
        }

        // Next button
        if (currentPage < totalPages) {
            paginationHTML += `
                <button onclick="nextPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors flex items-center gap-1">
                    Next
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </button>
            `;
        } else {
            paginationHTML += `
                <button disabled class="px-3 py-1 text-sm font-medium text-on-surface-variant/50 bg-surface-container-low rounded-lg flex items-center gap-1 cursor-not-allowed">
                    Next
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </button>
            `;
        }

        paginationHTML += '</div>';
        
        // Add page info
        paginationHTML += `
            <div class="text-sm text-on-surface-variant">
                Showing ${((currentPage - 1) * playersPerPage) + 1} to ${Math.min(currentPage * playersPerPage, totalPlayers)} of ${totalPlayers} players
            </div>
        `;

        container.innerHTML = paginationHTML;
    }

    function goToPage(page) {
        currentPage = page;
        renderPlayerRoster();
        renderPagination();
    }

    function nextPage() {
        const totalPages = Math.ceil(totalPlayers / playersPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderPlayerRoster();
            renderPagination();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderPlayerRoster();
            renderPagination();
        }
    }

    // Initialize on page load
    window.addEventListener('DOMContentLoaded', loadTeamData);
</script>
@endsection
