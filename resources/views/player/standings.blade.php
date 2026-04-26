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
                        "primary": "#0f5238",
                        "primary-container": "#2d6a4f",
                        "secondary": "#4059aa",
                        "secondary-container": "#8fa7fe",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
                        "outline-variant": "#bfc9c1",
                        "error": "#ba1a1a",
                        "tertiary-container": "#865400",
                    },
                    fontFamily: {
                        headline: ["Manrope"],
                        body: ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .font-headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 flex flex-col p-6 overflow-y-auto bg-slate-50/80 backdrop-blur-md shadow-xl font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">sports_soccer</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Elite Academy League</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">leaderboard</span><span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">groups</span><span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">sports_soccer</span><span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">query_stats</span><span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">school</span><span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Create Match</span>
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">settings</span><span>Settings</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">help</span><span>Support</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- TopNavBar -->
    <header class="fixed top-0 right-0 left-0 flex justify-between items-center h-16 px-8 ml-64 bg-white/80 backdrop-blur-xl z-40 font-['Manrope'] font-medium text-sm border-none">
        <div class="flex items-center gap-8 flex-1">
            <div class="relative w-96 max-w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search players..." type="text" id="search-input" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-100 rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right">
                    <p id="nav-user-name" class="font-bold leading-none">Loading...</p>
                    <p id="nav-user-team" class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">--</p>
                </div>
                <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary" src="https://ui-avatars.com/api/?name=Player&background=0f5238&color=fff" />
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Hero Header -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-primary text-white p-8">
                <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                    <img class="w-full h-full object-cover transform scale-125 rotate-12" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=800&h=400&fit=crop" />
                </div>
                <div class="relative z-10 max-w-lg">
                    <span class="uppercase tracking-[0.3em] font-bold text-primary-fixed-dim opacity-80 text-xs">Season 2024/25 Progress</span>
                    <h2 class="text-4xl font-extrabold font-headline mt-2 mb-4 leading-tight">Player Performance Rankings</h2>
                    <p class="text-primary-fixed leading-relaxed opacity-90 mb-6" id="hero-stats">Loading player statistics...</p>
                    <div class="flex gap-4">
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Top Scorer</p>
                            <p id="top-scorer" class="text-xl font-bold mt-1">--</p>
                        </div>
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Most Assists</p>
                            <p id="top-assists" class="text-xl font-bold mt-1">--</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow-sm flex flex-col justify-between">
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

        <!-- Player Rankings -->
        <div class="mb-8 flex items-end justify-between flex-wrap gap-4">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Player Power Rankings</h3>
                <p class="text-on-surface-variant mt-1">Based on goals, assists, and match ratings</p>
            </div>
            <div class="flex gap-2">
                <select id="team-filter" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-slate-50 transition-colors">
                    <option value="all">All Teams</option>
                </select>
                <button id="export-data" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span> Export CSV
                </button>
            </div>
        </div>

        <!-- Rankings Table -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                            <th class="py-5 px-6 w-16">Rank</th>
                            <th class="py-5 px-4">Player</th>
                            <th class="py-5 px-4">Team</th>
                            <th class="py-5 px-4 text-center">Goals</th>
                            <th class="py-5 px-4 text-center">Assists</th>
                            <th class="py-5 px-4 text-center">Matches</th>
                            <th class="py-5 px-4 text-center">Avg Rating</th>
                            <th class="py-5 px-6 text-right">Points</th>
                        </tr>
                    </thead>
                    <tbody id="rankings-table-body" class="divide-y divide-slate-100">
                        <tr>
                            <td colspan="8" class="py-12 text-center text-outline">Loading player rankings...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-6 flex items-center justify-between bg-slate-50/50 flex-wrap gap-4">
                <p id="table-info" class="text-sm text-on-surface-variant">Loading...</p>
                <div class="flex gap-2">
                    <button id="prev-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-slate-50 transition-colors disabled:opacity-50" disabled>
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <span id="page-info" class="px-3 py-1 text-sm font-semibold">Page 1</span>
                    <button id="next-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allPlayers = [];
        let teamsMap = {};
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
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders()
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function loadAllData() {
            try {
                const user = await fetchAPI('/current-user');
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Player';
                document.getElementById('nav-user-avatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Player')}&background=0f5238&color=fff&size=40`;

                const [playersRes, teamsRes, matchEventsRes, matchStatsRes, gradesRes, subjectsRes] = await Promise.all([
                    fetchAPI('/player').catch(() => []),
                    fetchAPI('/team').catch(() => []),
                    fetchAPI('/match-events').catch(() => []),
                    fetchAPI('/match-stats').catch(() => []),
                    fetchAPI('/grade').catch(() => []),
                    fetchAPI('/subject').catch(() => [])
                ]);

                const teams = Array.isArray(teamsRes) ? teamsRes : (teamsRes.data || []);
                teams.forEach(t => teamsMap[t.id] = t);
                console.log(teams)

                const userTeam = teams.find(t => t.id === user.team_id);
                document.getElementById('nav-user-team').innerText = userTeam?.name || 'Academy';
                console.log(userTeam)

                const events = Array.isArray(matchEventsRes) ? matchEventsRes : (matchEventsRes.data || []);
                const goalsByPlayer = {};
                const assistsByPlayer = {};

                events.forEach(event => {
                    if (event.type === 'goal') {
                        goalsByPlayer[event.player_id] = (goalsByPlayer[event.player_id] || 0) + 1;
                    }
                });

                const stats = Array.isArray(matchStatsRes) ? matchStatsRes : (matchStatsRes.data || []);
                const ratingByPlayer = {};
                const matchesByPlayer = {};
                const matchesPlayed = {};
                events.forEach(event => {
                    matchesPlayed[event.player_id] = (matchesPlayed[event.player_id] || 0) + 1;
                });

                const playersArray = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);

                console.log("Players data:", playersArray);

                if (!playersArray || playersArray.length === 0) {
                    console.error("No players data available");
                    return;
                }
                allPlayers = await Promise.all(playersArray.map(async (p) => {
                    const team = teamsMap[p.team_id];
                    const playerName = p.name || `Player ${p.id}`;
                    console.log("Processing player:", playerName, p);
                    return {
                        id: p.id,
                        user_id: p.user_id,
                        name: playerName,
                        team_id: p.team_id,
                        team_name: team?.name || 'Free Agent',
                        class_group: team?.class_group || 'N/A',
                        jersey_number: p.jersey_number,
                        is_eligible: p.is_eligible,
                        goals: goalsByPlayer[p.id] || 0,
                        matches: matchesPlayed[p.id] || 0,
                        rating: 7.0,
                    };
                }));

                allPlayers.sort((a, b) => b.goals - a.goals || a.matches - b.matches);
                console.log(allPlayers)



                updateHeroStats();

                await loadAcademicLeaders(gradesRes, subjectsRes);

                // Populate team filter
                const teamsList = [...new Set(allPlayers.map(p => p.team_name).filter(t => t && t !== 'Free Agent'))];
                const teamFilter = document.getElementById('team-filter');
                teamsList.forEach(team => {
                    const option = document.createElement('option');
                    option.value = team;
                    option.textContent = team;
                    teamFilter.appendChild(option);
                });

                renderTable();

                async function getPlayer(id) {
                    console.log("Getting user for ID:", id);
                    const users = await fetchAPI('/users').catch(() => []);
                    const usersArray = Array.isArray(users) ? users : (users.data || []);
                    return usersArray.find(e => e.id === id && e.role === 'player');
                }

                setupEventListeners();



            } catch (err) {
                console.error("Failed to load data:", err);
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="8" class="py-12 text-center text-outline">Failed to load data. Please check your connection.</td></tr>';
            }
        }

        function updateHeroStats() {
            const topScorer = [...allPlayers].sort((a, b) => b.goals - a.goals)[0];

            document.getElementById('top-scorer').innerHTML = topScorer ? `${topScorer.name} (${topScorer.goals})` : '--';
            document.getElementById('hero-stats').innerHTML = `Tracking ${allPlayers.length} active players across the league.`;
        }

        async function loadAcademicLeaders(gradesRes, subjectsRes) {
            const container = document.getElementById('academic-leaders');
            const grades = Array.isArray(gradesRes) ? gradesRes : (gradesRes.data || []);
            console.log("Grades data:", grades);
            const subjects = Array.isArray(subjectsRes) ? subjectsRes : (subjectsRes.data || []);
            const subjectMap = new Map(subjects.map(s => [s.id, s.name]));

            if (grades.length === 0) {
                container.innerHTML = '<div class="text-center text-outline py-4">No grade data available</div>';
                return;
            }

            const playerAvg = {};

            grades.forEach(g => {
                if (!playerAvg[g.player_id]) {
                    playerAvg[g.player_id] = {
                        sum: 0,
                        count: 0
                    };
                }
                console.log(playerAvg[g.player_id])
                playerAvg[g.player_id].sum += parseInt(g.score);
                console.log(g)
                playerAvg[g.player_id].count++;
            });

            const topStudents = Object.entries(playerAvg)
                .map(([pid, data]) => ({
                    pid,
                    avg: data.sum / data.count
                }))
                .sort((a, b) => b.avg - a.avg)
                .slice(0, 3);

            const playersMap = new Map(allPlayers.map(p => [p.id, p.name]));

            container.innerHTML = topStudents.map((student, idx) => `
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full ${idx === 0 ? 'bg-amber-100 text-amber-800' : 'bg-slate-100 text-slate-600'} flex items-center justify-center text-xs font-bold">${idx + 1}</div>
                        <span class="text-sm font-medium">${playersMap.get(student.pid) || `Student ${student.pid}`}</span>
                    </div>
                    <span class="px-2 py-1 bg-emerald-50 text-emerald-700 rounded-full text-[10px] font-bold">${student.avg.toFixed(1)}%</span>
                </div>
            `).join('');
        }

        function getFilteredPlayers() {
            if (currentFilter === 'all') return allPlayers;
            return allPlayers.filter(p => p.team_name === currentFilter);
        }

        function calculatePoints(player) {
            return (player.goals * 20) + ((player.assists || 0) * 10) + (player.matches * 5);
        }

        function renderTable() {
            const filtered = getFilteredPlayers();
            const total = filtered.length;
            const maxPage = Math.ceil(total / itemsPerPage);
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pagePlayers = filtered.slice(start, end);

            document.getElementById('table-info').innerHTML = `Showing ${start + 1}-${Math.min(end, total)} of ${total} players`;
            document.getElementById('page-info').innerHTML = `Page ${currentPage} of ${maxPage || 1}`;
            document.getElementById('prev-page').disabled = currentPage === 1;
            document.getElementById('next-page').disabled = currentPage === maxPage || maxPage === 0;

            if (pagePlayers.length === 0) {
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="8" class="py-12 text-center text-outline">No players found</td></tr>';
                return;
            }

            const userTeamName = currentUser?.team_name ? teamsMap.get(currentUser.team_id)?.name : null;

            document.getElementById('rankings-table-body').innerHTML = pagePlayers.map((player, idx) => {
                const absoluteRank = filtered.findIndex(p => p.id === player.id) + 1;
                const isUserTeam = player.team_name === userTeamName;
                console.log(player)
                const points = calculatePoints(player);
                const ratingColor = player.rating >= 8 ? 'text-emerald-600' : (player.rating >= 7 ? 'text-amber-600' : 'text-red-600');

                return `
                    <tr class="${isUserTeam ? 'bg-emerald-50/30 hover:bg-emerald-50/50' : 'hover:bg-slate-50'} transition-colors">
                        <td class="py-4 px-6 font-headline font-bold text-xl ${isUserTeam ? 'text-primary' : 'text-slate-400'}">${absoluteRank}</td>
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white text-sm font-bold">${player.name.charAt(0)}</div>
                                <div>
                                    <p class="font-bold text-on-surface">${player.name}</p>
                                    <p class="text-xs text-on-surface-variant">#${player.jersey_number || '--'} · ${player.class_group}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="text-sm ${isUserTeam ? 'font-bold text-primary' : 'text-on-surface-variant'}">${escapeHtml(player.team_name)}</span>
                            ${isUserTeam ? '<p class="text-[9px] text-primary/60 uppercase font-bold mt-0.5">Your Team</p>' : ''}
                        </td>
                        <td class="py-4 px-4 text-center font-bold text-lg">${player.goals}</td>
                        <td class="py-4 px-4 text-center font-bold text-lg">${player.assists || 0}</td>
                        <td class="py-4 px-4 text-center">${player.matches}</td>
                        <td class="py-4 px-4 text-center">
                            <span class="px-2 py-1 rounded-full text-xs font-bold ${ratingColor} bg-slate-100">${player.rating.toFixed(1)}</span>
                        </td>
                        <td class="py-4 px-6 text-right font-headline font-bold text-xl text-primary">${points}</td>
                    </tr>
                `;
            }).join('');
        }

        function setupEventListeners() {
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
                const filtered = getFilteredPlayers();
                const maxPage = Math.ceil(filtered.length / itemsPerPage);
                if (currentPage < maxPage) {
                    currentPage++;
                    renderTable();
                }
            });

            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('#rankings-table-body tr');
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(term) ? '' : 'none';
                });
            });

            document.getElementById('export-data').addEventListener('click', () => {
                const filtered = getFilteredPlayers();
                let csv = "Rank,Player Name,Team,Goals,Assists,Matches,Rating,Points\n";
                filtered.forEach((p, idx) => {
                    csv += `${idx + 1},"${p.name}","${p.team_name}",${p.goals},${p.assists || 0},${p.matches},${p.rating},${calculatePoints(p)}\n`;
                });
                const blob = new Blob([csv], {
                    type: 'text/csv'
                });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = `player_rankings_${new Date().toISOString().split('T')[0]}.csv`;
                a.click();
                URL.revokeObjectURL(url);
            });
        }

        function escapeHtml(str) {
            if (!str) return '';
            return String(str).replace(/[&<>]/g, m => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;'
            } [m]));
        }



        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('rankings-table-body').innerHTML = '<tr><td colspan="8" class="py-12 text-center text-outline">Please login to view player rankings</td></tr>';
                return;
            }
            loadAllData();
        });
    </script>
</body>

</html>