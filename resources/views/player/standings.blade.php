<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Player Stats | The Scholastic Pitch</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-fixed-variant": "#264191",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#2a1700",
                        "tertiary-container": "#865400",
                        "secondary-fixed": "#dce1ff",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-secondary-container": "#1d3989",
                        "inverse-on-surface": "#eff1f3",
                        "surface-tint": "#2c694e",
                        "on-surface-variant": "#404943",
                        "tertiary-fixed": "#ffddb8",
                        "inverse-surface": "#2d3133",
                        "primary-container": "#2d6a4f",
                        "on-secondary-fixed": "#00164e",
                        "on-background": "#191c1e",
                        "secondary-container": "#8fa7fe",
                        "on-surface": "#191c1e",
                        "surface-bright": "#f7f9fb",
                        "error": "#ba1a1a",
                        "surface-variant": "#e0e3e5",
                        "tertiary-fixed-dim": "#ffb95f",
                        "background": "#f7f9fb",
                        "on-primary-container": "#a8e7c5",
                        "outline": "#707973",
                        "outline-variant": "#bfc9c1",
                        "primary-fixed": "#b1f0ce",
                        "primary": "#0f5238",
                        "primary-fixed-dim": "#95d4b3",
                        "on-tertiary": "#ffffff",
                        "secondary": "#4059aa",
                        "on-tertiary-container": "#ffd29e",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#95d4b3",
                        "on-primary-fixed": "#002114",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b6c4ff",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#663f00",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary-fixed-variant": "#0e5138",
                        "surface-container": "#eceef0",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-fixed-variant": "#653e00"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    fontFamily: {
                        headline: ["Manrope"],
                        body: ["Inter"],
                        label: ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">sports_soccer</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Elite Academy League</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                <span>Create Match</span>
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">settings</span>
                    <span>Settings</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">help</span>
                    <span>Support</span>
                </a>
            </div>
        </div>
    </aside>
    
    <!-- TopNavBar -->
    <header class="fixed top-0 right-0 left-0 flex justify-between items-center h-16 px-8 ml-64 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl z-40 font-['Manrope'] font-medium text-sm border-none">
        <div class="flex items-center gap-8 flex-1">
            <div class="relative w-96 max-w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full bg-surface-container-highest border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search players, teams, or results..." type="text" id="search-input" />
            </div>
            <nav class="hidden lg:flex items-center gap-6">
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-surface-container rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
                <div class="text-right">
                    <p id="nav-user-name" class="font-bold leading-none">Loading...</p>
                    <p id="nav-user-team" class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">--</p>
                </div>
                <img id="nav-user-avatar" alt="User Profile Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary-fixed" src="https://ui-avatars.com/api/?name=Player&background=0f5238&color=fff" />
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Hero Header Context -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-primary text-white p-8">
                <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                    <img alt="Football pitch texture" class="w-full h-full object-cover transform scale-125 rotate-12" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=800&h=400&fit=crop" />
                </div>
                <div class="relative z-10 max-w-lg">
                    <span class="label-md uppercase tracking-[0.3em] font-bold text-primary-fixed-dim opacity-80">Season 2024/25 Progress</span>
                    <h2 class="text-4xl font-extrabold font-headline mt-2 mb-4 leading-tight">Player Performance Rankings</h2>
                    <p class="text-primary-fixed leading-relaxed opacity-90 mb-6" id="hero-stats">Loading player statistics...</p>
                    <div class="flex gap-4">
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Top Scorer</p>
                            <p id="top-scorer" class="text-xl font-bold mt-1">--</p>
                        </div>
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Top Assists</p>
                            <p id="top-assists" class="text-xl font-bold mt-1">--</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="font-headline text-lg font-bold">Academic Standings</h3>
                    <p class="text-sm text-on-surface-variant">Top Academic Performers</p>
                </div>
                <div id="academic-leaders" class="space-y-4 my-6">
                    <div class="text-center text-outline py-4">Loading...</div>
                </div>
                <button class="w-full text-secondary font-bold text-sm hover:underline text-left flex items-center gap-2">
                    View Academic Hub
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>
        
        <!-- Standings Section -->
        <div class="mb-8 flex items-end justify-between flex-wrap gap-4">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Player Power Rankings</h3>
                <p class="text-on-surface-variant mt-1">Combined Performance Matrix: On-Pitch × Academic Score</p>
            </div>
            <div class="flex gap-2">
                <select id="team-filter" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-surface-container transition-colors">
                    <option value="all">All Teams</option>
                </select>
                <button id="export-pdf" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span>
                    Export Data
                </button>
            </div>
        </div>
        
        <!-- Standings Table Container -->
        <div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-surface-container uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant">
                            <th class="py-6 px-8 w-16">Rank</th>
                            <th class="py-6 px-4">Player Details</th>
                            <th class="py-6 px-4">Academy Team</th>
                            <th class="py-6 px-4 text-center">Goals</th>
                            <th class="py-6 px-4 text-center">Assists</th>
                            <th class="py-6 px-4 text-center">Rating</th>
                            <th class="py-6 px-8 text-right">League Pts</th>
                         </tr>
                    </thead>
                    <tbody id="rankings-table-body" class="divide-y divide-surface-container-low">
                        <tr><td colspan="7" class="py-12 text-center text-outline">Loading player rankings...</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="p-8 flex items-center justify-between bg-surface-container-low/50 flex-wrap gap-4">
                <p id="table-info" class="text-sm text-on-surface-variant">Loading...</p>
                <div class="flex gap-2">
                    <button id="prev-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-surface-container transition-colors" disabled>
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <span id="page-info" class="px-3 py-1 text-sm font-semibold">Page 1</span>
                    <button id="next-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allPlayers = [];
        let currentUser = null;
        let currentPage = 1;
        let currentFilter = 'all';
        const itemsPerPage = 10;
        
        function getHeaders() {
            const token = localStorage.getItem('token');
            return {
                'Authorization': token ? `Bearer ${token}` : '',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
        }

        async function fetchAPI(endpoint) {
            const response = await fetch(`${API_BASE}${endpoint}`, { headers: getHeaders() });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        function calculateLeaguePoints(player) {
            const goals = player.goals || 0;
            const assists = player.assists || 0;
            const rating = player.rating || 7.0;
            return Math.floor((goals * 25) + (assists * 15) + (rating * 10));
        }

        async function loadPlayerData() {
            try {
                // Load user profile
                const user = await fetchAPI('/users/me');
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Player';
                document.getElementById('nav-user-team').innerText = user.team_name || user.school || 'Academy';
                const avatarUrl = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Player')}&background=0f5238&color=fff&size=40`;
                document.getElementById('nav-user-avatar').src = avatarUrl;
                
                // Load all players
                const playersResponse = await fetchAPI('/player');
                const playersArray = Array.isArray(playersResponse) ? playersResponse : (playersResponse.data || []);
                
                // Load match stats to enrich player data
                const statsResponse = await fetchAPI('/match-stats');
                const statsArray = Array.isArray(statsResponse) ? statsResponse : (statsResponse.data || []);
                
                // Aggregate stats by player
                const playerStatsMap = new Map();
                statsArray.forEach(stat => {
                    const playerId = stat.player_id;
                    if (!playerStatsMap.has(playerId)) {
                        playerStatsMap.set(playerId, { goals: 0, assists: 0, ratingSum: 0, matchCount: 0 });
                    }
                    const pStats = playerStatsMap.get(playerId);
                    pStats.goals += stat.goals || 0;
                    pStats.assists += stat.assists || 0;
                    pStats.ratingSum += stat.rating || 0;
                    pStats.matchCount++;
                });
                
                // Build player objects with stats
                allPlayers = playersArray.map(player => {
                    const stats = playerStatsMap.get(player.id) || { goals: 0, assists: 0, ratingSum: 0, matchCount: 0 };
                    const avgRating = stats.matchCount > 0 ? stats.ratingSum / stats.matchCount : 7.0;
                    return {
                        id: player.id,
                        name: player.name,
                        position: player.position || 'Midfielder',
                        team_id: player.team_id,
                        team_name: player.team_name || 'Academy',
                        avatar: `https://ui-avatars.com/api/?name=${encodeURIComponent(player.name || 'Player')}&background=0f5238&color=fff&size=48`,
                        goals: stats.goals,
                        assists: stats.assists,
                        rating: parseFloat(avgRating.toFixed(1)),
                        league_points: calculateLeaguePoints({ goals: stats.goals, assists: stats.assists, rating: avgRating })
                    };
                });
                
                // Sort by league points
                allPlayers.sort((a, b) => b.league_points - a.league_points);
                
                // Update hero stats
                if (allPlayers.length > 0) {
                    const topScorer = [...allPlayers].sort((a, b) => b.goals - a.goals)[0];
                    const topAssists = [...allPlayers].sort((a, b) => b.assists - a.assists)[0];
                    document.getElementById('top-scorer').innerText = topScorer ? `${topScorer.name} (${topScorer.goals})` : '--';
                    document.getElementById('top-assists').innerText = topAssists ? `${topAssists.name} (${topAssists.assists})` : '--';
                    document.getElementById('hero-stats').innerHTML = `Tracking ${allPlayers.length} active players across the league.`;
                }
                
                // Load academic data for top performers
                await loadAcademicLeaders();
                
                // Populate team filter
                const teams = [...new Set(allPlayers.map(p => p.team_name).filter(t => t))];
                const teamFilter = document.getElementById('team-filter');
                teams.forEach(team => {
                    const option = document.createElement('option');
                    option.value = team;
                    option.textContent = team;
                    teamFilter.appendChild(option);
                });
                
                // Render table
                renderTable();
                
                // Setup event listeners
                document.getElementById('team-filter').addEventListener('change', (e) => {
                    currentFilter = e.target.value;
                    currentPage = 1;
                    renderTable();
                });
                
                document.getElementById('prev-page').addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        renderTable();
                    }
                });
                
                document.getElementById('next-page').addEventListener('click', () => {
                    const filteredPlayers = getFilteredPlayers();
                    const maxPage = Math.ceil(filteredPlayers.length / itemsPerPage);
                    if (currentPage < maxPage) {
                        currentPage++;
                        renderTable();
                    }
                });
                
                document.getElementById('search-input').addEventListener('input', (e) => {
                    const searchTerm = e.target.value.toLowerCase();
                    const rows = document.querySelectorAll('#rankings-table-body tr');
                    rows.forEach(row => {
                        const playerName = row.querySelector('.player-name')?.textContent.toLowerCase() || '';
                        const teamName = row.querySelector('.team-name')?.textContent.toLowerCase() || '';
                        if (playerName.includes(searchTerm) || teamName.includes(searchTerm)) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                });
                
                document.getElementById('export-pdf').addEventListener('click', () => {
                    exportToCSV();
                });
                
            } catch(err) {
                console.error("Failed to load player data:", err);
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">Failed to load player data. Please check your connection.</td></tr>';
            }
        }
        
        function getFilteredPlayers() {
            if (currentFilter === 'all') return allPlayers;
            return allPlayers.filter(p => p.team_name === currentFilter);
        }
        
        function renderTable() {
            const filteredPlayers = getFilteredPlayers();
            const totalPlayers = filteredPlayers.length;
            const maxPage = Math.ceil(totalPlayers / itemsPerPage);
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pagePlayers = filteredPlayers.slice(start, end);
            
            document.getElementById('table-info').innerHTML = `Showing ${start + 1}-${Math.min(end, totalPlayers)} of ${totalPlayers} players`;
            document.getElementById('page-info').innerHTML = `Page ${currentPage} of ${maxPage || 1}`;
            document.getElementById('prev-page').disabled = currentPage === 1;
            document.getElementById('next-page').disabled = currentPage === maxPage || maxPage === 0;
            
            if (pagePlayers.length === 0) {
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">No players found</td></tr>';
                return;
            }
            
            const userTeamName = currentUser?.team_name;
            
            document.getElementById('rankings-table-body').innerHTML = pagePlayers.map((player, idx) => {
                const absoluteRank = filteredPlayers.findIndex(p => p.id === player.id) + 1;
                const isUserTeam = player.team_name === userTeamName;
                const rowClass = isUserTeam ? 'bg-primary/5 hover:bg-primary/10' : 'hover:bg-surface-container-low';
                const rankColor = isUserTeam ? 'text-primary/40 group-hover:text-primary' : 'text-on-surface/20 group-hover:text-primary';
                const rankNumber = String(absoluteRank).padStart(2, '0');
                
                // Generate form bars based on rating
                const ratingPercent = Math.min(95, Math.max(20, (player.rating / 10) * 100));
                
                return `
                    <tr class="${rowClass} transition-colors group relative">
                        ${isUserTeam ? '<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>' : ''}
                        <td class="py-5 px-8 font-headline font-extrabold text-2xl ${rankColor} transition-colors">${rankNumber}</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img src="${player.avatar}" class="w-12 h-12 rounded-2xl object-cover ring-4 ${isUserTeam ? 'ring-primary/20' : 'ring-transparent group-hover:ring-outline-variant/30'} transition-all" />
                                <div>
                                    <p class="font-bold text-on-surface player-name">${escapeHtml(player.name)}</p>
                                    <p class="text-xs text-on-surface-variant">${player.position} · U18</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            ${isUserTeam ? `
                                <div class="flex flex-col">
                                    <span class="text-sm font-bold text-primary flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                                        ${escapeHtml(player.team_name)}
                                    </span>
                                    <span class="text-[10px] uppercase font-bold text-primary/60 mt-1">Your Team</span>
                                </div>
                            ` : `
                                <span class="text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                    ${escapeHtml(player.team_name)}
                                </span>
                            `}
                        </td>
                        <td class="py-5 px-4 text-center font-bold">${player.goals}</td>
                        <td class="py-5 px-4 text-center font-bold">${player.assists}</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center">
                                <div class="w-16 h-16 relative">
                                    <svg class="w-16 h-16 transform -rotate-90">
                                        <circle cx="32" cy="32" r="28" fill="none" stroke="#e0e3e5" stroke-width="4"/>
                                        <circle cx="32" cy="32" r="28" fill="none" stroke="#0f5238" stroke-width="4" stroke-dasharray="${ratingPercent * 1.76} 176" stroke-linecap="round"/>
                                    </svg>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="text-sm font-bold">${player.rating}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">${player.league_points}</td>
                    </tr>
                `;
            }).join('');
        }
        
        async function loadAcademicLeaders() {
            try {
                const grades = await fetchAPI('/grade');
                const container = document.getElementById('academic-leaders');
                
                if (grades && grades.length > 0) {
                    const sortedGrades = [...grades].sort((a, b) => (b.score || 0) - (a.score || 0)).slice(0, 3);
                    container.innerHTML = sortedGrades.map((grade, idx) => `
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full ${idx === 0 ? 'bg-tertiary-fixed text-on-tertiary-fixed' : 'bg-surface-container text-on-surface-variant'} flex items-center justify-center text-xs font-bold">${idx + 1}</div>
                                <span class="text-sm font-medium">${escapeHtml(grade.subject_name || grade.name || `Student ${grade.user_id}`)}</span>
                            </div>
                            <span class="px-2 py-1 bg-tertiary-container/10 text-tertiary-container rounded-full text-[10px] font-bold">${(grade.score || 0).toFixed(1)}%</span>
                        </div>
                    `).join('');
                } else {
                    container.innerHTML = '<div class="text-center text-outline py-4">No grade data available</div>';
                }
            } catch(e) {
                console.warn("Could not load academic leaders", e);
                document.getElementById('academic-leaders').innerHTML = '<div class="text-center text-outline py-4">Academic data unavailable</div>';
            }
        }
        
        function exportToCSV() {
            const filteredPlayers = getFilteredPlayers();
            let csvContent = "Rank,Player Name,Team,Goals,Assists,Rating,League Points\n";
            filteredPlayers.forEach((player, idx) => {
                csvContent += `${idx + 1},"${player.name}","${player.team_name}",${player.goals},${player.assists},${player.rating},${player.league_points}\n`;
            });
            
            const blob = new Blob([csvContent], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `player_rankings_${new Date().toISOString().split('T')[0]}.csv`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
        
        function escapeHtml(str) {
            if (!str) return '';
            return String(str).replace(/[&<>]/g, function(m) {
                if (m === '&') return '&amp;';
                if (m === '<') return '&lt;';
                if (m === '>') return '&gt;';
                return m;
            });
        }
        
        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                console.warn("No auth token found");
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">Please login to view player rankings</td></tr>';
                return;
            }
            loadPlayerData();
        });
    </script>
</body>
</html>