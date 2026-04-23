<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Matches Management | The Scholastic Pitch</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Admin Panel</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.users') }}">
                <span class="material-symbols-outlined">people</span><span>Users</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.teams') }}">
                <span class="material-symbols-outlined">groups</span><span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="{{ route('admin.matches') }}">
                <span class="material-symbols-outlined">sports_soccer</span><span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.academic') }}">
                <span class="material-symbols-outlined">school</span><span>Academic</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button onclick="openCreateMatchModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Schedule Match</span>
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
                <input id="search-input" class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search matches..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-100 rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right">
                    <p id="nav-user-name" class="font-bold leading-none">Admin</p>
                    <p id="nav-user-role" class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">Administrator</p>
                </div>
                <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary" src="https://ui-avatars.com/api/?name=Admin&background=0f5238&color=fff" />
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Header -->
        <div class="mb-8 flex items-end justify-between flex-wrap gap-4">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Matches Management</h3>
                <p class="text-on-surface-variant mt-1">Schedule and manage all matches</p>
            </div>
            <div class="flex gap-2">
                <select id="status-filter" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-slate-50 transition-colors">
                    <option value="all">All Status</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="live">Live</option>
                    <option value="finished">Finished</option>
                </select>
                <button onclick="exportMatches()" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span> Export CSV
                </button>
            </div>
        </div>

        <!-- Matches Table -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                            <th class="py-5 px-6">Match</th>
                            <th class="py-5 px-4">Date & Time</th>
                            <th class="py-5 px-4">Location</th>
                            <th class="py-5 px-4">Score</th>
                            <th class="py-5 px-4">Status</th>
                            <th class="py-5 px-4">Season</th>
                            <th class="py-5 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="matches-table-body" class="divide-y divide-slate-100">
                        <tr>
                            <td colspan="7" class="py-12 text-center text-outline">Loading matches...</td>
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

    <!-- Create Match Modal -->
    <div id="create-match-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Schedule New Match</h3>
            <form id="create-match-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Home Team</label>
                    <select name="home_team_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Home Team</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Away Team</label>
                    <select name="away_team_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Away Team</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Date</label>
                    <input type="date" name="date" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Time</label>
                    <input type="time" name="time" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Location</label>
                    <input type="text" name="location" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Season</label>
                    <select name="season_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Season</option>
                    </select>
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeCreateMatchModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Schedule Match
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allMatches = [];
        let allTeams = [];
        let allSeasons = [];
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

        async function fetchAPI(endpoint, options = {}) {
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders(),
                ...options
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function loadMatches() {
            try {
                const [matches, teams, seasons] = await Promise.all([
                    fetchAPI('/matches'),
                    fetchAPI('/team'),
                    fetchAPI('/season')
                ]);
                
                allMatches = Array.isArray(matches) ? matches : [];
                allTeams = Array.isArray(teams) ? teams : [];
                allSeasons = Array.isArray(seasons) ? seasons : [];
                
                renderMatches();
                populateSelects();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load matches:", err);
                document.getElementById('matches-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">Failed to load matches. Please check your connection.</td></tr>';
            }
        }

        function getFilteredMatches() {
            if (currentFilter === 'all') return allMatches;
            return allMatches.filter(m => m.status === currentFilter);
        }

        function renderMatches() {
            const filtered = getFilteredMatches();
            const total = filtered.length;
            const maxPage = Math.ceil(total / itemsPerPage);
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageMatches = filtered.slice(start, end);

            document.getElementById('table-info').innerHTML = `Showing ${start + 1}-${Math.min(end, total)} of ${total} matches`;
            document.getElementById('page-info').innerHTML = `Page ${currentPage} of ${maxPage || 1}`;
            document.getElementById('prev-page').disabled = currentPage === 1;
            document.getElementById('next-page').disabled = currentPage === maxPage || maxPage === 0;

            if (pageMatches.length === 0) {
                document.getElementById('matches-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">No matches found</td></tr>';
                return;
            }

            document.getElementById('matches-table-body').innerHTML = pageMatches.map(match => {
                const homeTeam = allTeams.find(t => t.id === match.home_team_id);
                const awayTeam = allTeams.find(t => t.id === match.away_team_id);
                const season = allSeasons.find(s => s.id === match.season_id);
                
                const statusColors = {
                    scheduled: 'bg-blue-50 text-blue-700',
                    live: 'bg-red-50 text-red-700',
                    finished: 'bg-green-50 text-green-700'
                };

                const statusColor = statusColors[match.status] || 'bg-slate-50 text-slate-700';

                return `
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                <div class="text-center">
                                    <p class="font-bold text-sm">${homeTeam ? homeTeam.name : 'Team A'}</p>
                                    <p class="text-xs text-on-surface-variant">vs</p>
                                    <p class="font-bold text-sm">${awayTeam ? awayTeam.name : 'Team B'}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-sm">
                            ${new Date(match.date).toLocaleDateString()}<br>
                            <span class="text-xs text-on-surface-variant">${match.time}</span>
                        </td>
                        <td class="py-4 px-4 text-sm">${match.location}</td>
                        <td class="py-4 px-4 text-center font-bold">
                            ${match.home_score} - ${match.away_score}
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-2 py-1 rounded-full text-xs font-bold ${statusColor}">${match.status}</span>
                        </td>
                        <td class="py-4 px-4 text-sm text-on-surface-variant">${season ? season.name : 'Season'}</td>
                        <td class="py-4 px-6 text-right">
                            <button onclick="editMatch(${match.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button onclick="deleteMatch(${match.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function populateSelects() {
            const homeSelect = document.querySelector('select[name="home_team_id"]');
            const awaySelect = document.querySelector('select[name="away_team_id"]');
            const seasonSelect = document.querySelector('select[name="season_id"]');

            allTeams.forEach(team => {
                const homeOption = document.createElement('option');
                homeOption.value = team.id;
                homeOption.textContent = team.name;
                homeSelect.appendChild(homeOption);

                const awayOption = document.createElement('option');
                awayOption.value = team.id;
                awayOption.textContent = team.name;
                awaySelect.appendChild(awayOption);
            });

            allSeasons.forEach(season => {
                const option = document.createElement('option');
                option.value = season.id;
                option.textContent = season.name;
                seasonSelect.appendChild(option);
            });
        }

        function setupEventListeners() {
            document.getElementById('status-filter').addEventListener('change', (e) => {
                currentFilter = e.target.value;
                currentPage = 1;
                renderMatches();
            });

            document.getElementById('prev-page').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderMatches();
                }
            });

            document.getElementById('next-page').addEventListener('click', () => {
                const filtered = getFilteredMatches();
                const maxPage = Math.ceil(filtered.length / itemsPerPage);
                if (currentPage < maxPage) {
                    currentPage++;
                    renderMatches();
                }
            });

            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('#matches-table-body tr');
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(term) ? '' : 'none';
                });
            });

            document.getElementById('create-match-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const matchData = Object.fromEntries(formData);
                
                try {
                    await fetchAPI('/matches', {
                        method: 'POST',
                        body: JSON.stringify(matchData)
                    });
                    closeCreateMatchModal();
                    loadMatches();
                } catch (err) {
                    console.error("Failed to create match:", err);
                    alert("Failed to create match. Please try again.");
                }
            });
        }

        function openCreateMatchModal() {
            document.getElementById('create-match-modal').classList.remove('hidden');
        }

        function closeCreateMatchModal() {
            document.getElementById('create-match-modal').classList.add('hidden');
            document.getElementById('create-match-form').reset();
        }

        function exportMatches() {
            const filtered = getFilteredMatches();
            let csv = "Home Team,Away Team,Date,Time,Location,Score,Status,Season\n";
            filtered.forEach(match => {
                const homeTeam = allTeams.find(t => t.id === match.home_team_id);
                const awayTeam = allTeams.find(t => t.id === match.away_team_id);
                const season = allSeasons.find(s => s.id === match.season_id);
                csv += `"${homeTeam ? homeTeam.name : 'Team A'}","${awayTeam ? awayTeam.name : 'Team B'}","${new Date(match.date).toLocaleDateString()}","${match.time}","${match.location}","${match.home_score}-${match.away_score}","${match.status}","${season ? season.name : 'Season'}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `matches_${new Date().toISOString().split('T')[0]}.csv`;
            a.click();
            URL.revokeObjectURL(url);
        }

        function editMatch(matchId) {
            console.log('Edit match:', matchId);
            // Implement edit functionality
        }

        function deleteMatch(matchId) {
            if (confirm('Are you sure you want to delete this match?')) {
                console.log('Delete match:', matchId);
                // Implement delete functionality
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadMatches();
        });
    </script>
</body>

</html>
