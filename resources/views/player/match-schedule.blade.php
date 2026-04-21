<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Match Schedule | The Scholastic Pitch</title>
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
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 flex flex-col p-6 overflow-y-auto z-50">
        <div class="mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined">school</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic font-headline">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 font-semibold tracking-widest uppercase">Elite Academy League</p>
            </div>
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-emerald-700 font-bold border-r-4 border-emerald-700 bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm group" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">school</span>
                Academic Hub
            </a>
        </nav>
        <div class="mt-auto space-y-1">
            <button class="w-full mb-6 py-3 px-4 rounded-xl bg-gradient-to-r from-primary to-primary-container text-white font-headline text-sm font-bold shadow-md hover:opacity-90 transition-opacity">
                Create Match
            </button>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group" href="#">
                <span class="material-symbols-outlined">help</span>
                Support
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-0">
            <div class="flex items-center gap-6">
                <div class="relative group">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400">search</span>
                    <input class="pl-10 pr-4 py-1.5 bg-surface-container-highest rounded-full border-none focus:ring-2 focus:ring-primary text-sm w-64 transition-all" placeholder="Search matches or venues..." type="text" />
                </div>
                <nav class="flex items-center gap-8 font-['Manrope'] font-medium text-sm">
                    <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="text-emerald-700 font-bold border-b-2 border-emerald-700 pb-2" href="#">Schedule</a>
                    <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-surface-variant">
                    <div class="text-right">
                        <p id="nav-user-name" class="text-sm font-bold text-on-surface">Loading...</p>
                        <p id="nav-user-role" class="text-[10px] font-semibold text-primary uppercase">--</p>
                    </div>
                    <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary-fixed" src="https://ui-avatars.com/api/?name=Player&background=0f5238&color=fff" />
                </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <div class="p-8 max-w-7xl mx-auto space-y-12">
            <!-- Hero Title Section -->
            <section class="space-y-2">
                <p class="text-on-surface-variant font-label font-bold uppercase tracking-widest text-xs">Your Personal Calendar</p>
                <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Match Day Logistics</h2>
            </section>
            
            <!-- Featured Match (Next Up) - Dynamic -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="featured-match-section">
                <div id="featured-match-card" class="lg:col-span-2 relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary to-primary-container p-8 text-white shadow-2xl">
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-20 pointer-events-none">
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=800&h=400&fit=crop" />
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-between gap-8">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1">
                                <span id="featured-badge" class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-xs font-bold uppercase tracking-wider">Loading...</span>
                                <h3 id="featured-title" class="text-3xl font-headline font-bold mt-4">Loading match data...</h3>
                            </div>
                            <div class="flex flex-col items-end">
                                <div id="featured-time" class="text-4xl font-headline font-black italic">--:--</div>
                                <p class="text-on-primary-container text-xs font-medium uppercase tracking-tighter">Kick-off</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6" id="featured-details">
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">directions_bus</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Departure</p>
                                <p class="text-sm font-bold">--:--</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">checkroom</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Kit Color</p>
                                <p class="text-sm font-bold">--</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">location_on</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Venue</p>
                                <p class="text-sm font-bold truncate">--</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">nutrition</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Pre-Match Meal</p>
                                <p class="text-sm font-bold">--</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Venue Map Widget -->
                <div class="bg-surface-container-lowest rounded-[2rem] p-6 shadow-xl shadow-on-surface/5 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <h4 class="font-headline font-bold text-lg">Match Venue</h4>
                        <span class="text-secondary font-label text-xs font-bold cursor-pointer hover:underline">Get Directions</span>
                    </div>
                    <div class="flex-grow overflow-hidden rounded-2xl relative min-h-[200px] bg-surface-container">
                        <div class="w-full h-full bg-surface-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-4xl text-outline">map</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent flex flex-col justify-end p-4">
                            <p id="venue-name" class="font-bold text-sm">Venue name</p>
                            <p id="venue-address" class="text-xs text-on-surface-variant">Address will appear here</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Schedule List -->
            <section class="space-y-6">
                <div class="flex items-center justify-between border-b-2 border-surface-container pb-4">
                    <h3 class="text-2xl font-headline font-bold">Next Fixtures</h3>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 rounded-xl bg-surface-container-high text-on-surface text-xs font-bold hover:bg-surface-container-highest transition-colors">Calendar View</button>
                        <button class="px-4 py-2 rounded-xl bg-surface-container-high text-on-surface text-xs font-bold hover:bg-surface-container-highest transition-colors">Sync iCal</button>
                    </div>
                </div>
                <div id="fixtures-list" class="space-y-4">
                    <div class="text-center text-outline py-8">Loading fixtures...</div>
                </div>
            </section>
            
            <!-- Kit Requirements Bento Grid Section -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-surface-container-lowest p-8 rounded-[2rem] shadow-xl shadow-on-surface/5 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">inventory_2</span>
                        </div>
                        <h3 class="text-xl font-headline font-bold">Essential Kit Bag</h3>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">check_circle</span><span class="text-sm font-medium">Academy Tracksuit (Full)</span></div>
                            <span class="text-[10px] font-bold text-on-surface-variant uppercase">Mandatory</span>
                        </li>
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary">check_circle</span><span class="text-sm font-medium">Both SG &amp; FG Boots</span></div>
                            <span class="text-[10px] font-bold text-on-surface-variant uppercase">Required</span>
                        </li>
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3"><span class="material-symbols-outlined text-secondary">info</span><span class="text-sm font-medium">GPS Performance Vest</span></div>
                            <span class="text-[10px] font-bold text-on-secondary-container uppercase">Charged</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-[2rem] shadow-xl shadow-on-surface/5 space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">analytics</span>
                        </div>
                        <h3 class="text-xl font-headline font-bold">Academic Requirements</h3>
                    </div>
                    <div id="academic-alert" class="p-4 rounded-2xl bg-tertiary-fixed/30 border-l-4 border-tertiary">
                        <p class="text-xs font-bold text-tertiary uppercase mb-2">Academic Eligibility Alert</p>
                        <p class="text-sm text-on-surface leading-relaxed font-medium">Loading academic requirements...</p>
                    </div>
                    <button class="w-full py-3 rounded-xl border-2 border-surface-variant text-sm font-bold hover:bg-surface-container-low transition-colors">
                        View Academic Portal
                    </button>
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

        let allMatches = [];
        let currentUser = null;

        function formatMatchDate(dateString) {
            if (!dateString) return { month: '--', day: '--', time: '--:--' };
            const date = new Date(dateString);
            const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return {
                month: months[date.getMonth()],
                day: date.getDate(),
                time: date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })
            };
        }

        async function loadMatchData() {
            try {
                // Load user profile
                const user = await fetchAPI('/users/me');
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Player';
                document.getElementById('nav-user-role').innerText = user.position || user.role || 'Athlete';
                const avatarUrl = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Player')}&background=0f5238&color=fff&size=40`;
                document.getElementById('nav-user-avatar').src = avatarUrl;
                
                // Load matches
                const matchesResponse = await fetchAPI('/matches');
                const matchesArray = Array.isArray(matchesResponse) ? matchesResponse : (matchesResponse.data || []);
                allMatches = matchesArray;
                
                if (allMatches.length === 0) {
                    showNoMatchesState();
                } else {
                    // Find next upcoming match
                    const now = new Date();
                    const upcomingMatches = allMatches.filter(m => {
                        const matchDate = new Date(m.match_date || m.scheduled_at || m.date);
                        return matchDate > now;
                    }).sort((a, b) => new Date(a.match_date || a.scheduled_at) - new Date(b.match_date || b.scheduled_at));
                    
                    const nextMatch = upcomingMatches[0] || allMatches[0];
                    renderFeaturedMatch(nextMatch);
                    renderFixturesList(allMatches);
                }
                
                // Load academic requirements
                await loadAcademicRequirements();
                
            } catch(err) {
                console.error("Failed to load match data:", err);
                showNoMatchesState();
            }
        }
        
        function showNoMatchesState() {
            // Featured match card - show no match message
            document.getElementById('featured-badge').innerText = 'No Upcoming Matches';
            document.getElementById('featured-title').innerHTML = 'No matches scheduled at this time';
            document.getElementById('featured-time').innerHTML = '--:--';
            document.getElementById('featured-details').innerHTML = `
                <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10 col-span-4 text-center">
                    <p class="text-sm">Check back later for fixture updates</p>
                </div>
            `;
            document.getElementById('venue-name').innerText = 'No venue info';
            document.getElementById('venue-address').innerText = 'No matches scheduled';
            
            // Fixtures list
            const fixturesList = document.getElementById('fixtures-list');
            fixturesList.innerHTML = `
                <div class="bg-surface-container-low rounded-2xl p-8 text-center">
                    <span class="material-symbols-outlined text-5xl text-outline mb-3">event_busy</span>
                    <p class="text-on-surface-variant font-medium">No fixtures found</p>
                    <p class="text-xs text-outline mt-1">Your team schedule will appear here once matches are scheduled</p>
                </div>
            `;
        }
        
        function renderFeaturedMatch(match) {
            const isHome = match.home_team_id === currentUser?.team_id;
            const homeTeam = match.home_team?.name || match.home_team_name || 'Home Team';
            const awayTeam = match.away_team?.name || match.away_team_name || 'Away Team';
            const matchTitle = isHome ? `${homeTeam} vs ${awayTeam}` : `${awayTeam} vs ${homeTeam}`;
            const matchDate = new Date(match.match_date || match.scheduled_at);
            const timeStr = matchDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            const dateStr = matchDate.toLocaleDateString(undefined, { weekday: 'long', month: 'long', day: 'numeric' });
            
            document.getElementById('featured-badge').innerHTML = `Upcoming • ${dateStr}`;
            document.getElementById('featured-title').innerHTML = matchTitle;
            document.getElementById('featured-time').innerHTML = timeStr;
            
            // Calculate departure time (2.5 hours before kickoff)
            const departure = new Date(matchDate);
            departure.setHours(matchDate.getHours() - 2, matchDate.getMinutes() - 30);
            const departureStr = departure.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            // Meal time (3 hours before)
            const mealTime = new Date(matchDate);
            mealTime.setHours(matchDate.getHours() - 3);
            const mealStr = mealTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            
            document.getElementById('featured-details').innerHTML = `
                <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                    <span class="material-symbols-outlined text-primary-fixed mb-2">directions_bus</span>
                    <p class="text-[10px] text-primary-fixed uppercase font-bold">Departure</p>
                    <p class="text-sm font-bold">${departureStr}</p>
                </div>
                <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                    <span class="material-symbols-outlined text-primary-fixed mb-2">checkroom</span>
                    <p class="text-[10px] text-primary-fixed uppercase font-bold">Kit Color</p>
                    <p class="text-sm font-bold">${isHome ? 'Home (Green/White)' : 'Away (Navy)'}</p>
                </div>
                <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                    <span class="material-symbols-outlined text-primary-fixed mb-2">location_on</span>
                    <p class="text-[10px] text-primary-fixed uppercase font-bold">Venue</p>
                    <p class="text-sm font-bold truncate">${match.venue || 'Academy Stadium'}</p>
                </div>
                <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                    <span class="material-symbols-outlined text-primary-fixed mb-2">nutrition</span>
                    <p class="text-[10px] text-primary-fixed uppercase font-bold">Pre-Match Meal</p>
                    <p class="text-sm font-bold">${mealStr}</p>
                </div>
            `;
            
            // Update venue info
            document.getElementById('venue-name').innerText = match.venue || 'Academy Stadium';
            document.getElementById('venue-address').innerText = match.venue_address || 'Venue address TBD';
        }
        
        function renderFixturesList(matches) {
            const fixturesList = document.getElementById('fixtures-list');
            
            if (!matches || matches.length === 0) {
                fixturesList.innerHTML = `
                    <div class="bg-surface-container-low rounded-2xl p-8 text-center">
                        <span class="material-symbols-outlined text-5xl text-outline mb-3">event_busy</span>
                        <p class="text-on-surface-variant font-medium">No fixtures found</p>
                    </div>
                `;
                return;
            }
            
            // Sort matches by date (upcoming first)
            const sortedMatches = [...matches].sort((a, b) => {
                const dateA = new Date(a.match_date || a.scheduled_at);
                const dateB = new Date(b.match_date || b.scheduled_at);
                return dateA - dateB;
            });
            
            fixturesList.innerHTML = sortedMatches.map(match => {
                const isHome = match.home_team_id === currentUser?.team_id;
                const homeTeam = match.home_team?.name || match.home_team_name || 'Home';
                const awayTeam = match.away_team?.name || match.away_team_name || 'Away';
                const matchDisplay = isHome ? `${homeTeam} vs ${awayTeam}` : `${awayTeam} vs ${homeTeam}`;
                const dateInfo = formatMatchDate(match.match_date || match.scheduled_at);
                const tournament = match.tournament || match.league || 'League Match';
                const kit = isHome ? 'Home (Green/White)' : 'Away (Navy)';
                const transport = isHome ? 'MEET AT HUB' : 'BUS DEPARTURE';
                const transportTime = isHome ? '2 hours before' : dateInfo.time;
                
                return `
                    <div class="group bg-surface-container-low hover:bg-surface-container-lowest p-5 rounded-2xl transition-all duration-300 flex flex-wrap md:flex-nowrap items-center gap-6">
                        <div class="w-16 h-16 rounded-2xl bg-white flex flex-col items-center justify-center text-on-surface shadow-sm border border-surface-variant/20">
                            <span class="text-xs font-bold text-primary uppercase">${dateInfo.month}</span>
                            <span class="text-2xl font-black font-headline">${dateInfo.day}</span>
                        </div>
                        <div class="flex-grow flex items-center justify-between gap-8">
                            <div class="flex-1">
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">${tournament}</p>
                                <div class="flex items-center gap-4">
                                    <span class="font-headline font-bold text-lg ${!isHome ? 'text-primary' : ''}">${isHome ? homeTeam : awayTeam}</span>
                                    <span class="text-on-surface-variant font-bold italic">vs</span>
                                    <span class="font-headline font-bold text-lg ${isHome ? 'text-primary' : ''}">${isHome ? awayTeam : homeTeam}</span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-col items-center px-8 border-x border-surface-variant/30">
                                <span class="material-symbols-outlined text-secondary text-sm">checkroom</span>
                                <p class="text-xs font-bold mt-1">Kit</p>
                                <p class="text-[10px] text-on-surface-variant">${kit}</p>
                            </div>
                            <div class="text-right flex flex-col gap-1">
                                <p class="font-headline font-extrabold text-lg">${dateInfo.time}</p>
                                <div class="flex items-center gap-1 justify-end text-on-surface-variant">
                                    <span class="material-symbols-outlined text-xs">${isHome ? 'apartment' : 'local_shipping'}</span>
                                    <span class="text-[10px] font-bold">${transport}: ${transportTime}</span>
                                </div>
                            </div>
                        </div>
                        <button class="w-full md:w-auto px-6 py-2.5 rounded-xl bg-surface-container-highest text-on-surface text-sm font-bold group-hover:bg-primary group-hover:text-white transition-all">Details</button>
                    </div>
                `;
            }).join('');
        }
        
        async function loadAcademicRequirements() {
            try {
                const grades = await fetchAPI('/grade');
                const alertDiv = document.getElementById('academic-alert');
                
                if (grades && grades.length > 0) {
                    const avgScore = grades.reduce((a, b) => a + (b.score || 0), 0) / grades.length;
                    if (avgScore < 70) {
                        alertDiv.innerHTML = `
                            <p class="text-xs font-bold text-tertiary uppercase mb-2">⚠️ Academic Eligibility Alert</p>
                            <p class="text-sm text-on-surface leading-relaxed font-medium">
                                Your current average (${avgScore.toFixed(1)}%) is below the recommended threshold. Please connect with academic support.
                            </p>
                        `;
                    } else {
                        alertDiv.innerHTML = `
                            <p class="text-xs font-bold text-primary uppercase mb-2">✅ Academic Standing: Good</p>
                            <p class="text-sm text-on-surface leading-relaxed font-medium">
                                Your academic average is ${avgScore.toFixed(1)}%. You maintain eligibility for all fixtures.
                            </p>
                        `;
                    }
                } else {
                    alertDiv.innerHTML = `
                        <p class="text-xs font-bold text-tertiary uppercase mb-2">📚 Academic Requirements</p>
                        <p class="text-sm text-on-surface leading-relaxed font-medium">
                            No grade records found. Please complete your courses to maintain athletic eligibility.
                        </p>
                    `;
                }
            } catch(e) {
                console.warn("Could not load academic requirements", e);
            }
        }
        
        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                console.warn("No auth token found - please login");
                showNoMatchesState();
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('nav-user-role').innerText = "Please login";
                return;
            }
            loadMatchData();
        });
    </script>
</body>
</html>