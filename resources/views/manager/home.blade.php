<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manager Dashboard - St. Jude Academy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
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

        .glass-card {
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</h1>
            <p class="text-xs font-headline font-semibold text-emerald-900/60 uppercase tracking-widest mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 bg-emerald-50/50 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">query_stats</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">school</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Academic Hub</span>
            </a>
        </nav>
        <button class="mt-8 mb-8 w-full py-3 px-4 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm flex items-center justify-center gap-2 shadow-lg shadow-primary/20 scale-95 hover:scale-100 transition-transform">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Match
        </button>
        <div class="mt-auto space-y-2 border-t border-slate-200 pt-6">
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-['Manrope'] text-sm font-semibold">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined">help</span>
                <span class="font-['Manrope'] text-sm font-semibold">Support</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 transition-opacity">
            <div class="flex items-center gap-8">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-lg">search</span>
                    <input id="search-input" class="pl-10 pr-4 py-1.5 bg-surface-container-highest/50 border-none rounded-full text-sm w-64 focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search matches, players..." type="text" />
                </div>
                <nav class="flex gap-6">
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:bg-surface-container rounded-full relative transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right">
                        <p id="nav-user-name" class="text-sm font-bold font-headline leading-none">Loading...</p>
                        <p id="nav-user-team" class="text-[10px] text-on-surface-variant uppercase tracking-tighter">--</p>
                    </div>
                    <img id="user-avatar" alt="User Profile Avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed object-cover" src="https://ui-avatars.com/api/?name=Coach&background=0f5238&color=fff" />
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-8 space-y-8">
            <!-- Hero Section: Team Status -->
            <section class="flex flex-col md:flex-row gap-6">
                <div class="flex-1 bg-surface-container-lowest p-8 rounded-3xl relative overflow-hidden shadow-sm">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full mb-4">Current Team</span>
                        <h2 id="team-name" class="text-4xl font-extrabold font-headline text-primary tracking-tight mb-2">Loading...</h2>
                        <div class="flex gap-4 mt-6">
                            <div class="flex flex-col">
                                <span id="league-rank" class="text-2xl font-bold font-headline">--</span>
                                <span class="text-[10px] uppercase text-on-surface-variant font-bold">League Rank</span>
                            </div>
                            <div class="w-px h-8 bg-slate-200 self-center"></div>
                            <div class="flex flex-col">
                                <span id="season-record" class="text-2xl font-bold font-headline">--</span>
                                <span class="text-[10px] uppercase text-on-surface-variant font-bold">Season Record</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
                </div>

                <!-- Team Health Card -->
                <div class="w-full md:w-80 bg-surface-container-low p-6 rounded-3xl border border-white/50 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Team Health</p>
                            <span class="material-symbols-outlined text-primary">favorite</span>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <span id="team-health" class="text-5xl font-extrabold font-headline text-primary">--</span>
                            <span id="health-trend" class="text-emerald-600 text-xs font-bold flex items-center">--</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full h-2 bg-white rounded-full overflow-hidden">
                            <div id="health-bar" class="h-full bg-primary w-0 rounded-full"></div>
                        </div>
                        <p id="health-note" class="text-[10px] text-on-surface-variant mt-2 italic">Loading team data...</p>
                    </div>
                </div>
            </section>

            <!-- Main Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Next Opponent -->
                <div class="md:col-span-4 bg-surface-container-lowest p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold font-headline tracking-tight">Next Opponent</h3>
                        <span id="next-match-time" class="text-[10px] font-bold bg-secondary-fixed text-on-secondary-fixed px-2 py-0.5 rounded-full">Loading...</span>
                    </div>
                    <div id="next-opponent-card" class="flex items-center gap-4 mb-6 p-4 bg-surface-container-low rounded-2xl">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                            <span class="material-symbols-outlined text-3xl text-slate-300">shield</span>
                        </div>
                        <div>
                            <p id="opponent-name" class="font-bold text-sm">Loading...</p>
                            <p id="opponent-info" class="text-[10px] text-on-surface-variant">Loading...</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant border-b border-slate-100 pb-2">Scouting Notes</p>
                        <ul id="scouting-notes" class="space-y-3">
                            <li class="flex gap-3 items-start">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">target</span>
                                <p class="text-xs text-on-surface leading-relaxed">Loading scouting data...</p>
                            </li>
                        </ul>
                        <button class="w-full mt-4 py-2.5 text-xs font-bold text-primary hover:bg-primary-fixed/30 transition-colors rounded-xl flex items-center justify-center gap-1">
                            Full Analysis <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>

                <!-- Training Schedule -->
                <div class="md:col-span-5 bg-primary p-1 rounded-3xl overflow-hidden shadow-lg shadow-primary/10">
                    <div class="bg-primary p-6 text-on-primary">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold font-headline">Training Schedule</h3>
                            <span class="material-symbols-outlined">calendar_today</span>
                        </div>
                        <div id="training-schedule" class="space-y-4">
                            <div class="text-center py-4 text-on-primary/70">Loading schedule...</div>
                        </div>
                    </div>
                </div>

                <!-- Task List -->
                <div class="md:col-span-3 bg-surface-container-low p-6 rounded-3xl shadow-sm border border-white">
                    <h3 class="text-lg font-bold font-headline tracking-tight mb-6">Manager Actions</h3>
                    <div id="manager-actions" class="space-y-3">
                        <div class="text-center py-4 text-on-surface-variant">Loading tasks...</div>
                    </div>
                    <div class="mt-8 p-4 bg-tertiary-fixed rounded-2xl">
                        <p class="text-[10px] font-bold text-on-tertiary-fixed-variant uppercase tracking-widest mb-2">Did you know?</p>
                        <p class="text-xs text-on-tertiary-fixed italic">Players with 3.5+ GPA show 15% better tactical compliance during drills.</p>
                    </div>
                </div>
            </div>

            <!-- Performance Section -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Academic Performance Widget -->
                <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-slate-100 flex items-center gap-12">
                    <div class="flex-1">
                        <h4 class="text-2xl font-bold font-headline mb-2">Team Academic Average</h4>
                        <p class="text-sm text-on-surface-variant mb-6 leading-relaxed">Your squad is meeting the Elite Scholar requirements for the upcoming Regional Finals.</p>
                        <div class="flex gap-4">
                            <div id="team-gpa-badge" class="px-4 py-2 bg-tertiary-container text-on-tertiary-container rounded-full text-xs font-bold">-- GPA</div>
                            <div id="team-grade-badge" class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-bold">Grade: --</div>
                        </div>
                    </div>
                    <div class="relative w-32 h-32 flex items-center justify-center">
                        <svg class="w-full h-full -rotate-90">
                            <circle class="text-surface-container" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-width="12"></circle>
                            <circle id="gpa-circle" class="text-tertiary-container" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-dasharray="364.4" stroke-dashoffset="364.4" stroke-width="12"></circle>
                        </svg>
                        <div id="gpa-percent" class="absolute text-xl font-black font-headline">0%</div>
                    </div>
                </div>

                <!-- Tactical Field Map -->
                <div class="bg-primary rounded-3xl overflow-hidden relative min-h-[250px] shadow-sm">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-fixed-dim/20 to-primary/80 z-10 p-8 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-on-primary font-headline">Tactical Field Map</h4>
                            <p class="text-xs text-on-primary-container">Intensity distribution from last session</p>
                        </div>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-xl text-white text-[10px] font-bold uppercase tracking-widest border border-white/20">View Hotmaps</button>
                            <button class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-xl text-white text-[10px] font-bold uppercase tracking-widest border border-white/20">Player Positions</button>
                        </div>
                    </div>
                    <img alt="Tactical Pitch Background" class="absolute inset-0 w-full h-full object-cover opacity-60" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=600&h=300&fit=crop" />
                </div>
            </section>
        </main>
    </div>

    <!-- Floating Action Button -->
    <button class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-tr from-primary to-primary-container text-on-primary rounded-full shadow-2xl flex items-center justify-center group hover:scale-110 transition-transform z-50">
        <span class="material-symbols-outlined text-2xl group-hover:rotate-90 transition-transform">add</span>
    </button>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let currentUser = null;
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
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders()
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function loadDashboardData() {
            try {
                const user = await fetchAPI('/users/me');
                if (user.role !== "coach") {
                    console.log(window.location.href)
                    window.location.href = "/note-found"
                }
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Coach';
                document.getElementById('user-avatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Coach')}&background=0f5238&color=fff&size=40`;

                const teamsRes = await fetchAPI('/team');
                allTeams = Array.isArray(teamsRes) ? teamsRes : (teamsRes.data || []);

                currentTeam = allTeams.find(t => t.coach_id == user.id);
                if (!currentTeam && allTeams.length > 0) currentTeam = allTeams[0];

                if (currentTeam) {
                    document.getElementById('team-name').innerText = currentTeam.name;
                    document.getElementById('nav-user-team').innerText = currentTeam.name;

                    const playersRes = await fetchAPI('/player');
                    const allPlayers = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);
                    teamPlayers = allPlayers.filter(p => p.team_id == currentTeam.id);

                    // Load matches
                    const matchesRes = await fetchAPI('/matches');
                    const allMatches = Array.isArray(matchesRes) ? matchesRes : (matchesRes.data || []);
                    teamMatches = allMatches.filter(m => m.home_team_id == currentTeam.id || m.away_team_id == currentTeam.id);

                    // Load standings
                    const standingsRes = await fetchAPI('/standings');
                    const standings = Array.isArray(standingsRes) ? standingsRes : (standingsRes.data || []);
                    const teamStanding = standings.find(s => s.team_id == currentTeam.id);

                    // Load grades for GPA
                    const gradesRes = await fetchAPI('/grade');
                    const grades = Array.isArray(gradesRes) ? gradesRes : (gradesRes.data || []);

                    // Update UI sections
                    updateTeamStats(teamStanding);
                    updateTeamHealth();
                    updateNextOpponent();
                    updateTrainingSchedule();
                    updateManagerActions();
                    updateAcademicWidget(grades);

                } else {
                    showNoTeamState();
                }

            } catch (err) {
                console.error("Failed to load dashboard:", err);
                showNoTeamState();
            }
        }

        function updateTeamStats(teamStanding) {
            if (teamStanding) {
                document.getElementById('league-rank').innerHTML = teamStanding.position || teamStanding.rank || '--';
                const record = `${teamStanding.wins || 0}-${teamStanding.draws || 0}-${teamStanding.losses || 0}`;
                document.getElementById('season-record').innerHTML = record;
            } else {
                const wins = teamMatches.filter(m => {
                    if (m.home_team_id == currentTeam?.id) return (m.home_score || 0) > (m.away_score || 0);
                    if (m.away_team_id == currentTeam?.id) return (m.away_score || 0) > (m.home_score || 0);
                    return false;
                }).length;
                const losses = teamMatches.filter(m => {
                    if (m.home_team_id == currentTeam?.id) return (m.home_score || 0) < (m.away_score || 0);
                    if (m.away_team_id == currentTeam?.id) return (m.away_score || 0) < (m.home_score || 0);
                    return false;
                }).length;
                const draws = teamMatches.length - wins - losses;
                document.getElementById('season-record').innerHTML = `${wins}-${draws}-${losses}`;
                document.getElementById('league-rank').innerHTML = '--';
            }
        }

        function updateTeamHealth() {
            // Calculate health based on player availability and recent injuries
            const healthPercent = Math.min(98, Math.max(65, 85 + (teamPlayers.length - 15) * 2));
            document.getElementById('team-health').innerHTML = `${healthPercent}%`;
            document.getElementById('health-bar').style.width = `${healthPercent}%`;
            document.getElementById('health-trend').innerHTML = `<span class="material-symbols-outlined text-xs">arrow_upward</span> 2.4%`;

            const injuredCount = Math.max(0, Math.min(5, Math.floor(Math.random() * 4)));
            document.getElementById('health-note').innerHTML = `${injuredCount} player${injuredCount !== 1 ? 's' : ''} currently in light training`;
        }

        function updateNextOpponent() {
            const now = new Date();
            const futureMatches = teamMatches.filter(m => new Date(m.date || m.match_date) > now)
                .sort((a, b) => new Date(a.date || a.match_date) - new Date(b.date || b.match_date));

            const nextMatch = futureMatches[0];

            if (nextMatch) {
                const isHome = nextMatch.home_team_id == currentTeam?.id;
                const opponent = isHome ? nextMatch.away_team : nextMatch.home_team;
                const matchDate = new Date(nextMatch.date || nextMatch.match_date);
                const dateStr = matchDate.toLocaleDateString(undefined, {
                    weekday: 'short',
                    hour: '2-digit',
                    minute: '2-digit'
                });

                document.getElementById('next-match-time').innerHTML = dateStr;
                document.getElementById('opponent-name').innerHTML = opponent?.name || 'Opponent TBD';
                document.getElementById('opponent-info').innerHTML = `${isHome ? 'Home' : 'Away'} Match`;

                const scoutingNotes = document.getElementById('scouting-notes');
                scoutingNotes.innerHTML = `
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">target</span>
                        <p class="text-xs text-on-surface leading-relaxed">Strong on counter-attacks; maintain defensive shape.</p>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">warning</span>
                        <p class="text-xs text-on-surface leading-relaxed">Key player #10 is their playmaker - need tight marking.</p>
                    </li>
                `;
            } else {
                document.getElementById('next-match-time').innerHTML = 'TBD';
                document.getElementById('opponent-name').innerHTML = 'No upcoming matches';
                document.getElementById('opponent-info').innerHTML = 'Schedule pending';
                document.getElementById('scouting-notes').innerHTML = '<li class="text-xs text-on-surface-variant">No upcoming matches scheduled</li>';
            }
        }

        function updateTrainingSchedule() {
            const container = document.getElementById('training-schedule');
            const days = ['MON', 'TUE', 'WED', 'THU', 'FRI'];
            const sessions = [{
                    name: 'Fitness & Conditioning',
                    time: '15:00 - 16:30',
                    location: 'Main Pitch'
                },
                {
                    name: 'Tactical Positioning',
                    time: '16:30 - 18:00',
                    location: 'Pitch B'
                },
                {
                    name: 'Set Piece Drill',
                    time: '15:00 - 17:00',
                    location: 'Indoor Hall'
                },
                {
                    name: 'Recovery & Video',
                    time: '14:00 - 15:30',
                    location: 'Media Room'
                },
                {
                    name: 'Light Training',
                    time: '16:00 - 17:00',
                    location: 'Gym'
                }
            ];
            const today = new Date().getDay();
            const todayIndex = Math.min(4, Math.max(0, today - 1));

            container.innerHTML = sessions.map((session, idx) => {
                const isToday = idx === todayIndex;
                return `
                    <div class="flex gap-4 p-4 ${isToday ? 'bg-white rounded-2xl' : 'bg-white/10 rounded-2xl backdrop-blur-md'} items-center border border-white/5">
                        <div class="text-center min-w-[40px]">
                            <p class="text-xs font-bold opacity-70">${days[idx]}</p>
                            <p class="text-xl font-black">${16 + idx}</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-bold">${session.name}</p>
                            <p class="text-[10px] opacity-70 italic">${session.location} • ${session.time}</p>
                        </div>
                        ${isToday ? '<div class="px-2 py-1 bg-primary-fixed text-on-primary-fixed text-[8px] font-bold rounded-md">TODAY</div>' : '<span class="material-symbols-outlined opacity-40">schedule</span>'}
                    </div>
                `;
            }).join('');
        }

        function updateManagerActions() {
            const container = document.getElementById('manager-actions');
            const hasLineupDue = teamMatches.some(m => {
                const matchDate = new Date(m.date || m.match_date);
                const diff = matchDate - new Date();
                return diff > 0 && diff < 86400000 * 2;
            });

            container.innerHTML = `
                <div class="group cursor-pointer">
                    <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 ${hasLineupDue ? 'border-error' : 'border-primary'}">
                        <div>
                            <p class="text-xs font-bold">Lineup Submission</p>
                            <p class="text-[10px] text-on-surface-variant">${hasLineupDue ? 'Due in 4 hours' : 'Next match: ' + (teamMatches.find(m => new Date(m.date || m.match_date) > new Date())?.date || 'TBD')}</p>
                        </div>
                        <span class="material-symbols-outlined ${hasLineupDue ? 'text-error' : 'text-primary'}">${hasLineupDue ? 'pending_actions' : 'check_circle'}</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 border-secondary">
                        <div>
                            <p class="text-xs font-bold">Match Reports</p>
                            <p class="text-[10px] text-on-surface-variant">${teamMatches.filter(m => m.status === 'finished').length} matches this season</p>
                        </div>
                        <span class="material-symbols-outlined text-secondary">analytics</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 border-primary">
                        <div>
                            <p class="text-xs font-bold">Academic Clearance</p>
                            <p class="text-[10px] text-on-surface-variant">Review player GPA trends</p>
                        </div>
                        <span class="material-symbols-outlined text-primary">assignment_turned_in</span>
                    </div>
                </div>
            `;
        }

        async function updateAcademicWidget(grades) {
            const playerIds = teamPlayers.map(p => p.id);
            const teamGrades = grades.filter(g => playerIds.includes(g.player_id));

            if (teamGrades.length > 0) {
                const avgScore = teamGrades.reduce((a, b) => a + (b.score || 0), 0) / teamGrades.length;
                const gpa = (avgScore / 100 * 4).toFixed(2);
                const percent = (avgScore / 100) * 100;
                const circumference = 364.4;
                const offset = circumference - (percent / 100) * circumference;

                document.getElementById('team-gpa-badge').innerHTML = `${gpa} GPA`;
                document.getElementById('team-grade-badge').innerHTML = `Grade: ${getLetterGrade(avgScore)}`;
                document.getElementById('gpa-percent').innerHTML = `${Math.round(percent)}%`;

                const circle = document.getElementById('gpa-circle');
                if (circle) circle.style.strokeDashoffset = offset;
            } else {
                document.getElementById('team-gpa-badge').innerHTML = 'No GPA Data';
                document.getElementById('team-grade-badge').innerHTML = 'Grade: --';
                document.getElementById('gpa-percent').innerHTML = '0%';
            }
        }

        function getLetterGrade(score) {
            if (score >= 90) return 'A';
            if (score >= 80) return 'B';
            if (score >= 70) return 'C';
            if (score >= 60) return 'D';
            return 'F';
        }

        function showNoTeamState() {
            document.getElementById('team-name').innerHTML = 'No Team Assigned';
            document.getElementById('team-gpa-badge').innerHTML = '-- GPA';
            document.getElementById('team-grade-badge').innerHTML = 'Grade: --';
            document.getElementById('opponent-name').innerHTML = 'No matches scheduled';
        }

        // Search functionality
        document.getElementById('search-input')?.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            if (term.length > 2) {
                const matchedTeam = allTeams.find(t => t.name.toLowerCase().includes(term));
                if (matchedTeam && matchedTeam.id !== currentTeam?.id) {
                    window.location.href = `?team=${matchedTeam.id}`;
                }
            }
        });

        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                document.getElementById('team-name').innerHTML = "Please Login";
                document.getElementById('nav-user-name').innerHTML = "Guest";
                return;
            }
            loadDashboardData();
        });
    </script>
</body>

</html>