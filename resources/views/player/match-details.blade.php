<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Match Prep | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .pitch-grid {
            background-image: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.1) 0%, transparent 1%),
                linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 100% 100%, 20px 20px, 20px 20px;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl z-50">
        <div class="mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                    <p class="text-[10px] font-headline tracking-widest text-primary opacity-70 uppercase">Elite Academy League</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 group" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 group" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 group" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 text-emerald-700 font-bold border-r-4 border-emerald-700 transition-all duration-300" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 group" href="#">
                <span class="material-symbols-outlined">query_stats</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 group" href="#">
                <span class="material-symbols-outlined">school</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-2 pt-6 border-t border-outline-variant/10">
            <button class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary py-3 px-4 rounded-xl font-headline font-bold text-sm mb-6 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Create Match
            </button>
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
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8">
            <div class="flex items-center gap-8">
                <div class="relative group">
                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                        <span class="material-symbols-outlined text-lg">search</span>
                    </span>
                    <input id="search-input" class="bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-sm w-64 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all" placeholder="Search matches, players..." type="text" />
                </div>
                <nav class="flex items-center gap-6">
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="font-['Manrope'] font-medium text-sm text-emerald-700 font-bold border-b-2 border-emerald-700 pb-1" href="#">Schedule</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-surface-container-low rounded-full transition-colors relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/20">
                    <div class="text-right">
                        <p id="nav-user-name" class="text-xs font-bold text-on-surface">Loading...</p>
                        <p id="nav-user-role" class="text-[10px] text-on-surface-variant uppercase tracking-tighter">--</p>
                    </div>
                    <img id="nav-user-avatar" alt="User Profile Avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary/10" src="https://ui-avatars.com/api/?name=Player&background=0f5238&color=fff" />
                </div>
            </div>
        </header>
        
        <!-- Content Canvas -->
        <div class="p-8 max-w-7xl mx-auto space-y-8">
            <!-- Hero Header Section -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div id="match-hero-card" class="lg:col-span-2 relative overflow-hidden rounded-[2rem] bg-primary text-on-primary p-8 min-h-[320px] flex flex-col justify-end">
                    <div class="absolute inset-0 z-0 opacity-40">
                        <img alt="Match background" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=800&h=400&fit=crop" />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/60 to-transparent"></div>
                    </div>
                    <div class="relative z-10 space-y-4">
                        <div class="flex items-center gap-3">
                            <span id="match-badge" class="bg-primary-container text-on-primary-container text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Loading...</span>
                            <span id="match-datetime" class="text-on-primary/60 text-xs font-medium">--</span>
                        </div>
                        <div id="match-teams-container" class="flex items-center gap-8">
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3 flex items-center justify-center">
                                    <span class="text-white font-headline font-bold text-xl">H</span>
                                </div>
                                <span class="font-headline font-bold text-sm tracking-tight">Home</span>
                            </div>
                            <div class="text-4xl font-headline font-extrabold italic opacity-30">VS</div>
                            <div class="flex flex-col items-center gap-2 text-right">
                                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3 flex items-center justify-center">
                                    <span class="text-white font-headline font-bold text-xl">A</span>
                                </div>
                                <span class="font-headline font-bold text-sm tracking-tight">Away</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal Momentum Card -->
                <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-1">Match Readiness</p>
                            <h3 class="text-2xl font-headline font-extrabold text-on-surface">Peak Condition</h3>
                        </div>
                        <div class="w-12 h-12 bg-primary-fixed text-on-primary-fixed rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined">bolt</span>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-semibold text-on-surface-variant">Fatigue Level</span>
                            <span id="fatigue-value" class="text-xs font-bold text-primary">--</span>
                        </div>
                        <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                            <div id="fatigue-bar" class="h-full bg-primary w-0"></div>
                        </div>
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-semibold text-on-surface-variant">Focus Index</span>
                            <span id="focus-value" class="text-xs font-bold text-secondary">--</span>
                        </div>
                        <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                            <div id="focus-bar" class="h-full bg-secondary w-0"></div>
                        </div>
                    </div>
                    <div id="coach-note" class="mt-8 p-4 bg-tertiary-fixed/30 rounded-2xl flex items-center gap-3">
                        <span class="material-symbols-outlined text-tertiary">psychology</span>
                        <p class="text-xs text-on-tertiary-fixed-variant leading-relaxed">Loading coach notes...</p>
                    </div>
                </div>
            </section>
            
            <!-- Tactical Formation & Position (Shown only when match exists) -->
            <section id="tactical-section" class="grid grid-cols-1 lg:grid-cols-5 gap-8 hidden">
                <div class="lg:col-span-3 bg-primary rounded-[2.5rem] p-6 relative overflow-hidden shadow-2xl shadow-primary/20">
                    <div class="pitch-grid absolute inset-0 opacity-20"></div>
                    <div class="relative z-10 h-[450px] flex flex-col">
                        <div class="flex justify-between items-center mb-8 px-4">
                            <h3 class="font-headline text-lg font-bold text-on-primary">Formation: <span id="formation-name">4-3-3</span></h3>
                            <span id="formation-role" class="text-[10px] font-bold text-on-primary/60 border border-on-primary/20 px-3 py-1 rounded-full uppercase">Loading...</span>
                        </div>
                        <div class="flex-1 relative">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-12 border-2 border-on-primary/20 border-t-0"></div>
                            <div class="absolute top-[15%] left-0 w-full flex justify-around px-12">
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">LW</div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">ST</div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">RW</div>
                            </div>
                            <div class="absolute top-[45%] left-0 w-full flex justify-around px-8">
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">LCM</div>
                                <div class="relative">
                                    <div class="w-14 h-14 rounded-full bg-secondary-container shadow-[0_0_30px_rgba(143,167,254,0.5)] flex items-center justify-center ring-4 ring-on-primary/20">
                                        <span id="user-position-abbr" class="font-headline font-extrabold text-on-secondary-container">CAM</span>
                                    </div>
                                    <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap text-[10px] font-bold text-secondary-fixed bg-secondary/80 px-2 py-0.5 rounded-full">YOU</div>
                                </div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">RCM</div>
                            </div>
                            <div class="absolute bottom-[15%] left-0 w-full flex justify-around px-4">
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">LB</div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">CB</div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">CB</div>
                                <div class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">RB</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary">track_changes</span>
                            <h3 class="font-headline font-bold text-on-surface">Personal Match Goals</h3>
                        </div>
                        <div id="match-goals-container" class="space-y-4">
                            <div class="text-center text-outline py-4">Loading goals...</div>
                        </div>
                    </div>
                    <div id="scouting-card" class="bg-surface-container-high rounded-[2rem] p-8 border border-white/40">
                        <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-3">Opponent Intel</p>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-white/40 rounded-xl">
                                <span class="text-xs font-semibold">Key Player</span>
                                <span id="opponent-key-player" class="text-xs font-bold text-error">Loading...</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/40 rounded-xl">
                                <span class="text-xs font-semibold">Recent Form</span>
                                <div id="opponent-form" class="flex gap-1">--</div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/40 rounded-xl">
                                <span class="text-xs font-semibold">League Position</span>
                                <span id="opponent-position" class="text-xs font-bold">--</span>
                            </div>
                        </div>
                        <button class="w-full mt-4 py-2 text-xs font-bold text-primary hover:underline flex items-center justify-center gap-1">
                            View Full Scouting Report
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </section>
            
            <!-- Prep Checklist -->
            <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-secondary to-on-secondary-fixed-variant rounded-[2rem] p-8 text-on-secondary flex flex-col justify-center items-center text-center">
                    <span class="material-symbols-outlined text-4xl mb-4">timer</span>
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-70 mb-1">Kickoff In</p>
                    <p id="countdown-timer" class="text-3xl font-headline font-black">--:--:--</p>
                    <button class="mt-6 px-6 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-md rounded-full text-xs font-bold transition-all">Sync Calendar</button>
                </div>
            </section>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        
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

        let nextMatch = null;
        let currentUser = null;
        let countdownInterval = null;

        async function loadMatchData() {
            try {
                // Load user profile
                const user = await fetchAPI('/current-user');
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Player';
                document.getElementById('nav-user-role').innerText = user.position || user.role || 'Athlete';
                const avatarUrl = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Player')}&background=0f5238&color=fff&size=40`;
                document.getElementById('nav-user-avatar').src = avatarUrl;
                
                // Load matches and find next upcoming match for user's team
                const matches = await fetchAPI('/matches');
                const matchesArray = Array.isArray(matches) ? matches : (matches.data || []);
                
                const now = new Date();
                const userTeamId = user.team_id;
                
                const upcomingMatches = matchesArray.filter(m => {
                    const matchDate = new Date(m.match_date || m.scheduled_at || m.date);
                    return matchDate > now && (m.home_team_id === userTeamId || m.away_team_id === userTeamId);
                }).sort((a, b) => new Date(a.match_date || a.scheduled_at) - new Date(b.match_date || b.scheduled_at));
                
                nextMatch = upcomingMatches[0];
                
                if (nextMatch) {
                    // Show tactical section
                    document.getElementById('tactical-section').classList.remove('hidden');
                    renderMatchHero(nextMatch, userTeamId);
                    renderScoutingInfo(nextMatch);
                    startCountdown(nextMatch.match_date || nextMatch.scheduled_at);
                    await loadPersonalGoals();
                } else {
                    // No upcoming match - hide tactical section and show message
                    document.getElementById('tactical-section').classList.add('hidden');
                    showNoMatchState();
                }
                
                // Load readiness stats
                await loadReadinessStats();
                
            } catch(err) {
                console.error("Failed to load match data:", err);
                document.getElementById('tactical-section').classList.add('hidden');
                showNoMatchState();
            }
        }
        
        function renderMatchHero(match, userTeamId) {
            const isHome = match.home_team_id === userTeamId;
            const homeTeam = match.home_team?.name || match.home_team_name || 'Home Team';
            const awayTeam = match.away_team?.name || match.away_team_name || 'Away Team';
            const homeShort = homeTeam.substring(0, 2).toUpperCase();
            const awayShort = awayTeam.substring(0, 2).toUpperCase();
            
            document.getElementById('match-teams-container').innerHTML = `
                <div class="flex flex-col items-center gap-2">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3 flex items-center justify-center">
                        <span class="text-white font-headline font-bold text-xl">${homeShort}</span>
                    </div>
                    <span class="font-headline font-bold text-sm tracking-tight">${escapeHtml(homeTeam)}</span>
                </div>
                <div class="text-4xl font-headline font-extrabold italic opacity-30">VS</div>
                <div class="flex flex-col items-center gap-2 text-right">
                    <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3 flex items-center justify-center">
                        <span class="text-white font-headline font-bold text-xl">${awayShort}</span>
                    </div>
                    <span class="font-headline font-bold text-sm tracking-tight">${escapeHtml(awayTeam)}</span>
                </div>
            `;
            
            const matchDate = new Date(match.match_date || match.scheduled_at || match.date);
            const formattedDate = matchDate.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: 'numeric' });
            const formattedTime = matchDate.toLocaleTimeString(undefined, { hour: '2-digit', minute: '2-digit' });
            document.getElementById('match-datetime').innerText = `${formattedDate} • ${formattedTime} • ${match.venue || 'Home Stadium'}`;
            document.getElementById('match-badge').innerText = `Matchday ${match.matchday || match.round || '—'}`;
            
            // Update formation
            const formation = currentUser?.formation || match.formation || '4-3-3';
            document.getElementById('formation-name').innerText = formation;
            document.getElementById('formation-role').innerText = currentUser?.position || 'Central Midfielder';
            document.getElementById('user-position-abbr').innerText = currentUser?.position_abbr || 'CAM';
        }
        
        function showNoMatchState() {
            document.getElementById('match-badge').innerText = 'No Upcoming Matches';
            document.getElementById('match-datetime').innerText = 'Check back later for schedule';
            document.getElementById('match-teams-container').innerHTML = `
                <div class="flex flex-col items-center gap-2 w-full">
                    <div class="w-20 h-20 bg-white/10 backdrop-blur-md rounded-2xl p-3 flex items-center justify-center mx-auto">
                        <span class="material-symbols-outlined text-4xl text-white">event_busy</span>
                    </div>
                    <span class="font-headline font-bold text-sm tracking-tight">No match scheduled</span>
                    <span class="text-xs text-on-primary/70">Take this time to rest and train</span>
                </div>
            `;
            document.getElementById('match-teams-container').classList.add('justify-center');
            document.getElementById('match-teams-container').classList.remove('gap-8');
            
            document.getElementById('countdown-timer').innerHTML = '--:--:--';
            
            // Update coach note
            const coachNote = document.querySelector('#coach-note p');
            if (coachNote) {
                coachNote.innerText = 'No upcoming matches. Keep training hard and stay ready for selection!';
            }
        }
        
        async function loadPersonalGoals() {
            try {
                const stats = await fetchAPI('/match-stats');
                const goalsContainer = document.getElementById('match-goals-container');
                if (stats && stats.length > 0) {
                    const recentStats = Array.isArray(stats) ? stats.slice(0, 3) : [];
                    goalsContainer.innerHTML = recentStats.map((stat, idx) => `
                        <div class="group p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-lowest transition-all hover:shadow-lg cursor-pointer border border-transparent hover:border-primary/10">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                    <span class="font-headline font-extrabold">${String(idx + 1).padStart(2, '0')}</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface mb-1">Match Impact Target</h4>
                                    <p class="text-xs text-on-surface-variant leading-relaxed">Target: ${stat.goals || 0} goals, ${stat.assists || 0} assists. Rating target: ${(stat.rating || 7.0).toFixed(1)}</p>
                                </div>
                            </div>
                        </div>
                    `).join('');
                } else {
                    goalsContainer.innerHTML = `
                        <div class="group p-4 bg-surface-container-low rounded-2xl">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                    <span class="font-headline font-extrabold">01</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface mb-1">Final Third Creativity</h4>
                                    <p class="text-xs text-on-surface-variant leading-relaxed">Attempt 3+ progressive passes into the penalty area.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group p-4 bg-surface-container-low rounded-2xl">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                    <span class="font-headline font-extrabold">02</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface mb-1">Defensive Transition</h4>
                                    <p class="text-xs text-on-surface-variant leading-relaxed">Recover defensive position within 5 seconds of turnover.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group p-4 bg-surface-container-low rounded-2xl">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                    <span class="font-headline font-extrabold">03</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface mb-1">Set Piece Presence</h4>
                                    <p class="text-xs text-on-surface-variant leading-relaxed">Be target for second balls at edge of box during corners.</p>
                                </div>
                            </div>
                        </div>
                    `;
                }
            } catch(e) {
                console.warn("Could not load personal goals", e);
            }
        }
        
        async function loadReadinessStats() {
            try {
                const stats = await fetchAPI('/match-stats');
                if (stats && stats.length > 0) {
                    const avgRating = stats.reduce((a, b) => a + (b.rating || 0), 0) / stats.length;
                    const fatigue = Math.max(5, Math.min(30, 25 - Math.floor(avgRating * 1.5)));
                    const focus = Math.min(98, 75 + Math.floor(avgRating * 2.5));
                    
                    document.getElementById('fatigue-value').innerHTML = `${fatigue}% (Low)`;
                    document.getElementById('fatigue-bar').style.width = `${fatigue}%`;
                    document.getElementById('focus-value').innerHTML = `${focus}% (High)`;
                    document.getElementById('focus-bar').style.width = `${focus}%`;
                } else {
                    document.getElementById('fatigue-value').innerHTML = '15% (Low)';
                    document.getElementById('fatigue-bar').style.width = '15%';
                    document.getElementById('focus-value').innerHTML = '85% (High)';
                    document.getElementById('focus-bar').style.width = '85%';
                }
            } catch(e) {
                console.warn("Could not load readiness stats", e);
            }
        }
        
        async function renderScoutingInfo(match) {
            try {
                const opponentId = match.home_team_id === currentUser?.team_id ? match.away_team_id : match.home_team_id;
                if (opponentId) {
                    const opponent = await fetchAPI(`/team/${opponentId}`);
                    document.getElementById('opponent-key-player').innerText = opponent.key_player || opponent.captain || 'TBD';
                    document.getElementById('opponent-position').innerHTML = opponent.league_position || '#4';
                }
            } catch(e) {
                document.getElementById('opponent-key-player').innerText = 'Scouting data loading...';
            }
            
            // Mock form display
            const forms = ['W', 'W', 'D', 'L', 'W'];
            const formHtml = forms.map(f => {
                const color = f === 'W' ? 'bg-emerald-500' : (f === 'D' ? 'bg-slate-400' : 'bg-error');
                return `<span class="w-4 h-4 ${color} rounded-full flex items-center justify-center text-[8px] text-white font-bold">${f}</span>`;
            }).join('');
            document.getElementById('opponent-form').innerHTML = formHtml;
        }
        
        function startCountdown(matchDateTime) {
            if (!matchDateTime) return;
            const targetDate = new Date(matchDateTime);
            
            if (countdownInterval) clearInterval(countdownInterval);
            
            function updateCountdown() {
                const now = new Date();
                const diff = targetDate - now;
                
                if (diff <= 0) {
                    document.getElementById('countdown-timer').innerHTML = "00:00:00";
                    if (countdownInterval) clearInterval(countdownInterval);
                    return;
                }
                
                const hours = Math.floor(diff / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (3600000)) / (1000 * 60));
                const seconds = Math.floor((diff % 60000) / 1000);
                
                document.getElementById('countdown-timer').innerHTML = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }
            
            updateCountdown();
            countdownInterval = setInterval(updateCountdown, 1000);
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
                console.warn("No auth token found - please login");
                showNoMatchState();
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('nav-user-role').innerText = "Please login";
                document.getElementById('tactical-section').classList.add('hidden');
                return;
            }
            loadMatchData();
        });
    </script>
</body>
</html>