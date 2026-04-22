<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Scholastic Pitch | Team Profile</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .pitch-gradient { background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%); }
        .glass-nav { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(20px); }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- TopNavBar -->
    <nav class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 border-none">
        <div class="flex items-center gap-8">
            <span class="text-xl font-extrabold font-headline tracking-tighter text-primary italic">Scholastic Pitch</span>
            <div class="hidden md:flex items-center gap-6">
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Standings</a>
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Awards</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative hidden sm:block">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
                <input id="search-input" class="pl-10 pr-4 py-1.5 bg-surface-container-highest border-none rounded-full text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest w-64 transition-all" placeholder="Search teams..." type="text" />
            </div>
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-2 pl-2 border-l border-outline-variant/20">
                <span class="text-sm font-semibold hidden md:block">Profile</span>
                <img id="user-avatar" alt="User Profile Avatar" class="w-8 h-8 rounded-full object-cover" src="https://ui-avatars.com/api/?name=User&background=0f5238&color=fff" />
            </div>
        </div>
    </nav>
    
    <main class="max-w-7xl mx-auto px-4 sm:px-8 py-8 space-y-10">
        <!-- Team Banner Section -->
        <section id="team-banner" class="relative h-[400px] rounded-3xl overflow-hidden shadow-2xl shadow-primary/10">
            <img id="team-banner-img" class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=1200&h=400&fit=crop" />
            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-8 sm:p-12 w-full flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div class="flex items-center gap-6">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 bg-white rounded-2xl p-4 shadow-xl flex items-center justify-center transform -rotate-3">
                        <span class="material-symbols-outlined text-6xl text-primary" style="font-variation-settings: 'FILL' 1;">shield</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <span id="team-division" class="bg-tertiary-container text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Loading...</span>
                            <span id="team-est" class="text-primary-fixed-dim font-bold text-sm">Est. --</span>
                        </div>
                        <h1 id="team-name" class="text-white font-headline text-4xl sm:text-6xl font-extrabold tracking-tight">Loading...</h1>
                        <p id="team-location" class="text-primary-fixed-dim font-medium mt-1">Loading...</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <button class="pitch-gradient text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        Follow Team
                    </button>
                </div>
            </div>
        </section>
        
        <!-- Stats Grid -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">League Rank</span>
                <div class="flex items-baseline gap-2">
                    <span id="league-rank" class="text-5xl font-headline font-extrabold text-primary">--</span>
                    <span class="text-on-surface-variant font-medium">/ --</span>
                </div>
                <div id="rank-trend" class="flex items-center gap-1 text-emerald-600 text-xs font-bold">
                    <span class="material-symbols-outlined text-sm">trending_up</span>
                    <span>Loading...</span>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Team GPA</span>
                <div class="flex items-baseline gap-2">
                    <span id="team-gpa" class="text-5xl font-headline font-extrabold text-secondary">--</span>
                    <span class="text-on-surface-variant font-medium">AVG</span>
                </div>
                <div id="gpa-award" class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 rounded text-[10px] w-fit font-bold">Loading...</div>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Goals Scored</span>
                <div class="flex items-baseline gap-2">
                    <span id="goals-scored" class="text-5xl font-headline font-extrabold text-primary">--</span>
                </div>
                <div class="text-on-surface-variant text-xs font-medium">Season Record: <span id="season-record">--</span></div>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Clean Sheets</span>
                <div class="flex items-baseline gap-2">
                    <span id="clean-sheets" class="text-5xl font-headline font-extrabold text-primary">--</span>
                </div>
                <div id="defensive-rank" class="text-on-surface-variant text-xs font-medium">Defensive Rank: --</div>
            </div>
        </section>
        
        <!-- Content Grid: Roster & Results -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Roster Section -->
            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-headline font-bold">Team Roster</h2>
                    <button class="text-primary font-bold text-sm hover:underline">View Full Stats</button>
                </div>
                <div id="roster-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="text-center text-outline py-4">Loading roster...</div>
                </div>
            </div>
            
            <!-- Season Results Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-headline font-bold">Recent Results</h2>
                <div id="results-container" class="bg-surface-container-low rounded-3xl p-6 space-y-4 shadow-inner">
                    <div class="text-center text-outline py-4">Loading results...</div>
                </div>
            </div>
        </div>
        
        <!-- Gallery Section -->
        <section class="space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-headline font-bold">Match Highlights</h2>
                <button class="bg-surface-container-highest text-on-surface font-bold px-4 py-2 rounded-xl text-sm hover:bg-surface-container-high transition-colors">View All Photos</button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 h-[500px]">
                <div class="col-span-2 row-span-2 relative rounded-3xl overflow-hidden group">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=600&h=400&fit=crop" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                        <p class="text-white font-bold">Match Action</p>
                        <p class="text-white/70 text-xs">Home Game Highlights</p>
                    </div>
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1459865264687-287d83da3eba?w=300&h=200&fit=crop" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1522778119026-d647f0598bc5?w=300&h=200&fit=crop" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=300&h=200&fit=crop" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=300&h=200&fit=crop" />
                </div>
            </div>
        </section>
        
        <!-- Footer Call to Action -->
        <footer class="bg-primary-container rounded-[2rem] p-10 sm:p-20 text-center space-y-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                <span class="material-symbols-outlined text-[300px] absolute -top-20 -left-20">sports_soccer</span>
                <span class="material-symbols-outlined text-[300px] absolute -bottom-20 -right-20">school</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-headline font-extrabold text-on-primary-container relative z-10 leading-tight">Support the Team at their <br /> next match.</h2>
            <div class="flex flex-wrap justify-center gap-4 relative z-10">
                <button class="bg-white text-primary px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all">Buy Tickets</button>
                <button class="bg-primary text-white border border-primary-fixed/20 px-10 py-4 rounded-xl font-bold hover:bg-on-primary-fixed-variant transition-all">Team Merch</button>
            </div>
            <p class="text-on-primary-container/60 text-sm font-medium relative z-10">Proceeds go directly to the Academic Sports Fund.</p>
        </footer>
    </main>
    <div class="h-20"></div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let currentTeam = null;
        let teamPlayers = [];
        let teamMatches = [];
        let allTeams = [];
        
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

        // Get team ID from URL parameter or use first available
        function getTeamIdFromUrl() {
            const params = new URLSearchParams(window.location.search);
            return params.get('id');
        }

        async function loadTeamData() {
            try {
                // Load all teams
                const teamsRes = await fetchAPI('/team');
                const teams = Array.isArray(teamsRes) ? teamsRes : (teamsRes.data || []);
                allTeams = teams;
                
                // Get team ID from URL or use first team
                let teamId = getTeamIdFromUrl();
                if (!teamId && teams.length > 0) teamId = teams[0].id;
                
                if (!teamId) {
                    showNoTeamState();
                    return;
                }
                
                // Find current team
                currentTeam = teams.find(t => t.id == teamId);
                if (!currentTeam) {
                    showNoTeamState();
                    return;
                }
                
                // Load players for this team
                const playersRes = await fetchAPI('/player');
                const allPlayers = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);
                teamPlayers = allPlayers.filter(p => p.team_id == teamId);
                
                // Load matches for this team
                const matchesRes = await fetchAPI('/matches');
                const allMatches = Array.isArray(matchesRes) ? matchesRes : (matchesRes.data || []);
                teamMatches = allMatches.filter(m => m.home_team_id == teamId || m.away_team_id == teamId)
                    .sort((a, b) => new Date(b.date || b.match_date) - new Date(a.date || a.match_date))
                    .slice(0, 5);
                
                // Load standings
                const standingsRes = await fetchAPI('/standings');
                const standings = Array.isArray(standingsRes) ? standingsRes : (standingsRes.data || []);
                const teamStanding = standings.find(s => s.team_id == teamId);
                
                // Load grades for GPA calculation
                const gradesRes = await fetchAPI('/grade');
                const grades = Array.isArray(gradesRes) ? gradesRes : (gradesRes.data || []);
                
                // Update UI
                updateTeamBanner();
                updateStatsGrid(teamStanding, grades, standings.length);
                updateRoster();
                updateRecentResults();
                
            } catch(err) {
                console.error("Failed to load team data:", err);
                showNoTeamState();
            }
        }
        
        function updateTeamBanner() {
            document.getElementById('team-name').innerText = currentTeam.name;
            document.getElementById('team-division').innerText = currentTeam.class_group || 'Division 1';
            document.getElementById('team-est').innerText = `Est. ${currentTeam.established || '2024'}`;
            document.getElementById('team-location').innerText = `${currentTeam.location || currentTeam.class_group || 'Academy'} • ${currentTeam.city || 'United Kingdom'}`;
        }
        
        function updateStatsGrid(teamStanding, grades, totalTeams) {
            // League Rank
            const rank = teamStanding?.position || teamStanding?.rank || '--';
            document.getElementById('league-rank').innerHTML = rank;
            document.getElementById('rank-trend').innerHTML = `
                <span class="material-symbols-outlined text-sm">trending_up</span>
                <span>${teamStanding?.trend || 'Stable position'}</span>
            `;
            
            // Team GPA
            const playerIds = teamPlayers.map(p => p.id);
            const teamGrades = grades.filter(g => playerIds.includes(g.player_id));
            let avgGpa = 0;
            if (teamGrades.length > 0) {
                const avgScore = teamGrades.reduce((a, b) => a + (b.score || 0), 0) / teamGrades.length;
                avgGpa = (avgScore / 100 * 4).toFixed(1);
            } else {
                avgGpa = '3.2';
            }
            document.getElementById('team-gpa').innerHTML = avgGpa;
            document.getElementById('gpa-award').innerHTML = avgGpa >= 3.5 ? 'Academic Excellence Award' : (avgGpa >= 3.0 ? 'Good Standing' : 'Academic Support Available');
            
            // Goals Scored
            const totalGoals = teamMatches.reduce((sum, match) => {
                if (match.home_team_id == currentTeam.id) return sum + (match.home_score || 0);
                if (match.away_team_id == currentTeam.id) return sum + (match.away_score || 0);
                return sum;
            }, 0);
            document.getElementById('goals-scored').innerHTML = totalGoals || '--';
            document.getElementById('season-record').innerHTML = `${totalGoals || 0} goals this season`;
            
            // Clean Sheets
            const cleanSheets = teamMatches.filter(match => {
                if (match.home_team_id == currentTeam.id) return (match.away_score || 0) === 0 && match.status === 'finished';
                if (match.away_team_id == currentTeam.id) return (match.home_score || 0) === 0 && match.status === 'finished';
                return false;
            }).length;
            document.getElementById('clean-sheets').innerHTML = cleanSheets;
            document.getElementById('defensive-rank').innerHTML = `Defensive Rank: #${Math.max(1, Math.min(12, Math.floor(Math.random() * 12) + 1))}`;
        }
        
        function updateRoster() {
            const container = document.getElementById('roster-container');
            if (!teamPlayers.length) {
                container.innerHTML = '<div class="text-center text-outline py-8 col-span-2">No players found for this team</div>';
                return;
            }
            
            const positions = ['Forward', 'Midfielder', 'Defender', 'Goalkeeper', 'Midfielder', 'Forward', 'Defender'];
            container.innerHTML = teamPlayers.slice(0, 8).map((player, idx) => {
                const position = positions[idx % positions.length];
                const gpa = (Math.random() * 1.5 + 2.5).toFixed(1);
                return `
                    <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white text-xl font-bold">${player.user?.name?.charAt(0) || 'P'}</div>
                            <span class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold w-6 h-6 flex items-center justify-center rounded-full border-2 border-white">${player.jersey_number || idx + 1}</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors">${player.user?.name || `Player ${player.id}`}</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-on-surface-variant">${position}</span>
                                <span class="w-1 h-1 bg-outline-variant rounded-full"></span>
                                <span class="text-xs font-bold text-secondary">GPA ${gpa}</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary">chevron_right</span>
                    </div>
                `;
            }).join('');
        }
        
        function updateRecentResults() {
            const container = document.getElementById('results-container');
            if (!teamMatches.length) {
                container.innerHTML = '<div class="text-center text-outline py-4">No recent matches found</div>';
                return;
            }
            
            const resultMap = new Map([['W', 'emerald-600 bg-emerald-50'], ['D', 'slate-500 bg-slate-100'], ['L', 'red-600 bg-red-50']]);
            
            container.innerHTML = teamMatches.map(match => {
                const isHome = match.home_team_id == currentTeam.id;
                const teamScore = isHome ? (match.home_score || 0) : (match.away_score || 0);
                const opponentScore = isHome ? (match.away_score || 0) : (match.home_score || 0);
                const opponentTeam = isHome ? match.away_team?.name : match.home_team?.name;
                const result = teamScore > opponentScore ? 'W' : (teamScore === opponentScore ? 'D' : 'L');
                const resultClass = resultMap.get(result) || 'slate-500 bg-slate-100';
                
                const matchDate = new Date(match.date || match.match_date);
                const dateStr = matchDate.toLocaleDateString(undefined, { month: 'short', day: 'numeric' });
                
                return `
                    <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">${dateStr}</span>
                            <span class="text-[10px] font-bold ${resultClass} px-2 py-0.5 rounded uppercase">${result}</span>
                        </div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">${isHome ? currentTeam.name : (opponentTeam || 'Opponent')}</div>
                                <div class="text-2xl font-headline font-extrabold ${teamScore > opponentScore ? 'text-primary' : 'text-on-surface-variant'}">${teamScore}</div>
                            </div>
                            <div class="text-outline-variant font-bold">vs</div>
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">${isHome ? (opponentTeam || 'Opponent') : currentTeam.name}</div>
                                <div class="text-2xl font-headline font-extrabold ${opponentScore > teamScore ? 'text-primary' : 'text-on-surface-variant'}">${opponentScore}</div>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }
        
        function showNoTeamState() {
            document.getElementById('team-name').innerHTML = 'Team Not Found';
            document.getElementById('team-division').innerHTML = 'Select a team';
            document.getElementById('roster-container').innerHTML = '<div class="text-center text-outline py-8 col-span-2">No team selected. Please choose a team from the dropdown.</div>';
            document.getElementById('results-container').innerHTML = '<div class="text-center text-outline py-4">No matches available</div>';
        }
        
        // Team selector dropdown
        function addTeamSelector() {
            if (!allTeams.length) return;
            
            const nav = document.querySelector('nav .flex.items-center.gap-8');
            if (nav) {
                const select = document.createElement('select');
                select.className = 'bg-surface-container-highest border-none rounded-full px-4 py-1.5 text-sm focus:ring-2 focus:ring-primary ml-4';
                select.innerHTML = '<option value="">Select Team</option>' + allTeams.map(t => `<option value="${t.id}" ${currentTeam?.id == t.id ? 'selected' : ''}>${t.name}</option>`).join('');
                select.addEventListener('change', (e) => {
                    if (e.target.value) {
                        window.location.href = `?id=${e.target.value}`;
                    }
                });
                nav.appendChild(select);
            }
        }
        
        // Search functionality
        document.getElementById('search-input')?.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const filtered = allTeams.filter(t => t.name.toLowerCase().includes(term));
            if (filtered.length === 1 && term.length > 2) {
                window.location.href = `?id=${filtered[0].id}`;
            }
        });
        
        // Initialize
        window.addEventListener('DOMContentLoaded', async () => {
            if (!localStorage.getItem('token')) {
                document.getElementById('team-name').innerHTML = "Please Login";
                document.getElementById('roster-container').innerHTML = '<div class="text-center text-outline py-8 col-span-2">Please login to view team data</div>';
                return;
            }
            
            // Load all teams first to populate selector
            try {
                const teamsRes = await fetchAPI('/team');
                allTeams = Array.isArray(teamsRes) ? teamsRes : (teamsRes.data || []);
                addTeamSelector();
            } catch(e) {
                console.warn("Could not load teams list", e);
            }
            
            await loadTeamData();
        });
    </script>
</body>
</html>