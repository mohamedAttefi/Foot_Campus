<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Player Dashboard | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0f5238",
                        "primary-container": "#2d6a4f",
                        "on-primary": "#ffffff",
                        "secondary": "#4059aa",
                        "secondary-container": "#8fa7fe",
                        "secondary-fixed": "#dce1ff",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
                        "outline-variant": "#bfc9c1",
                        "error": "#ba1a1a",
                        "tertiary-container": "#865400",
                        "on-tertiary-container": "#ffd29e",
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            vertical-align: middle;
        }

        /* custom loader animation */
        .loader {
            width: 20px;
            height: 20px;
            border: 2px solid #e2e8f0;
            border-top: 2px solid #0f5238;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            display: inline-block;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .stat-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl z-50">
        <div class="mb-10">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic font-headline">The
                Scholastic Pitch</h1>
            <p class="text-[10px] tracking-[0.2em] text-on-surface-variant font-bold uppercase mt-1">Elite Academy
                League</p>
        </div>
        <nav class="flex-grow space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 text-emerald-700 font-bold border-r-4 border-emerald-700 text-sm bg-emerald-50/50"
                href="{{ route('player.home') }}"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="{{ route('player.standings') }}"><span
                    class="material-symbols-outlined">leaderboard</span><span>League Table</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="{{ route('player.team-details') }}"><span
                    class="material-symbols-outlined">groups</span><span>Teams</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="{{ route('player.match-schedule') }}"><span
                    class="material-symbols-outlined">sports_soccer</span><span>Matches</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="{{ route('player.academic-results') }}"><span
                    class="material-symbols-outlined">school</span><span>Academic Hub</span></a>
        </nav>
        <div class="mt-auto pt-6 border-t border-outline-variant/10 space-y-2">
            <button onclick="window.location.href='{{ route('player.match-schedule') }}'"
                class="w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg hover:scale-[0.98] transition-transform">Create
                Match</button>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 text-sm" href="{{ route('player.profile') }}"><span
                    class="material-symbols-outlined">settings</span><span>Settings</span></a>
        </div>
    </aside>

    <main class="ml-64 min-h-screen">
        <header
            class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8">
            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                    <span class="material-symbols-outlined text-lg">search</span>
                </span>
                <input class="pl-10 pr-4 py-1.5 bg-slate-100 border-none rounded-full w-64 text-xs"
                    placeholder="Search league..." type="text" />
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right">
                    <p id="user-display-name" class="text-xs font-bold text-on-surface">—</p>
                    <p id="user-display-role" class="text-[10px] text-on-surface-variant">Player</p>
                </div>
                <img id="user-avatar" alt="Avatar" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/10"
                    src="https://ui-avatars.com/api/?name=User" />
                <button onclick="logout()" class="p-2 text-slate-500 hover:text-red-600 transition-colors" title="Logout">
                    <span class="material-symbols-outlined">logout</span>
                </button>
            </div>
        </header>

        <div class="p-8 space-y-8">
            <section class="flex flex-col md:flex-row gap-8 items-end">
                <div class="flex-grow">
                    <span class="text-[10px] font-bold tracking-[0.3em] text-primary uppercase mb-2 block">Performance
                        Overview</span>
                    <h2 id="welcome-message" class="text-4xl font-extrabold font-headline tracking-tight">Welcome back.
                    </h2>
                    <p class="text-on-surface-variant mt-1">Your match readiness is at <span
                            class="text-primary font-bold">94%</span>.</p>
                </div>
                <div
                    class="bg-primary-container text-on-primary px-6 py-4 rounded-2xl flex items-center gap-4 shadow-lg">
                    <span class="material-symbols-outlined text-3xl">verified</span>
                    <div>
                        <p class="text-[10px] uppercase font-bold opacity-80">League Status</p>
                        <p class="text-lg font-headline font-bold leading-tight">Eligible</p>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Next Match Card (dynamic) -->
                <div class="md:col-span-8 bg-white rounded-[2rem] p-8 shadow-sm relative overflow-hidden">
                    <h3 class="text-2xl font-headline font-extrabold mb-6">My Next Match</h3>
                    <div id="next-match-container" class="flex items-center justify-between">
                        <div class="text-center flex-1">
                            <div
                                class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <span class="material-symbols-outlined text-slate-500">shield</span>
                            </div>
                            <span id="user-team" class="font-bold text-sm">—</span>
                        </div>
                        <div class="italic font-black text-2xl text-slate-300">VS</div>
                        <div class="text-center flex-1">
                            <div
                                class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <span class="material-symbols-outlined text-slate-500">shield</span>
                            </div>
                            <span id="opponent-team" class="font-bold text-sm text-slate-500">—</span>
                        </div>
                    </div>
                    <div id="next-match-status" class="text-center mt-4 text-xs text-on-surface-variant italic"></div>
                </div>

                <!-- Academic GPA card -->
                <div
                    class="md:col-span-4 bg-gradient-to-br from-secondary/10 to-secondary-fixed/30 rounded-[2rem] p-8 border border-secondary/20">
                    <h3 class="text-xl font-headline font-bold text-secondary">Academic GPA</h3>
                    <div class="py-6">
                        <div id="gpa-value" class="text-6xl font-black text-secondary">—</div>
                        <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                            <div id="gpa-progress" class="bg-secondary h-full transition-all duration-700"
                                style="width: 0%"></div>
                        </div>
                        <p id="gpa-meta" class="text-xs text-slate-500 mt-3"></p>
                    </div>
                </div>

                <!-- Season Impact: Goals & Assists -->
                <div class="md:col-span-5 bg-slate-100 rounded-[2rem] p-8 flex flex-col gap-6">
                    <h3 class="text-xl font-headline font-bold">Season Impact</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border-b-4 border-primary stat-card">
                            <p class="text-[10px] font-bold text-slate-500 uppercase">Goals</p>
                            <p id="total-goals" class="text-4xl font-black">0</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border-b-4 border-secondary stat-card">
                            <p class="text-[10px] font-bold text-slate-500 uppercase">Assists</p>
                            <p id="total-assists" class="text-4xl font-black">0</p>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-slate-400 mt-1">
                        <span>⚽ match performance</span>
                        <span>📊 career stats</span>
                    </div>
                </div>

                <!-- Match Ratings chart (dynamic) -->
                <div class="md:col-span-7 bg-white rounded-[2rem] p-8 shadow-sm">
                    <h3 class="text-xl font-headline font-bold mb-8">Match Ratings</h3>
                    <div id="ratings-chart" class="flex items-end justify-between gap-4 h-32">
                        <div class="text-sm text-slate-400 w-full text-center">Loading ratings...</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let token = localStorage.getItem('token');

        function getHeaders() {
            const storedToken = localStorage.getItem('token');
            const activeToken = storedToken || token;
            return {
                'Authorization': `Bearer ${activeToken}`,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
        }

        function logout() {
            localStorage.removeItem('token');
            window.location.href = '/login';
        }
        let currentUser = null;
        let currentTeamId = null;
        let currentTeamName = "";
        async function fetchAPI(endpoint, options = {}) {
            const url = endpoint.startsWith('http') ? endpoint : `${API_BASE}${endpoint}`;
            const response = await fetch(url, {
                ...options,
                headers: {
                    ...getHeaders(),
                    ...options.headers
                }
            });
            if (!response.ok) {
                if (response.status === 401) {
                    console.warn("Authentication failed. Redirecting to login...");
                    logout();
                    return;
                }
                const errorText = await response.text();
                throw new Error(`API Error ${response.status}: ${errorText.substring(0, 100)}`);
            }
            return response.json();
        }
        async function loadUserProfile() {
            if (!getHeaders().Authorization) {
                console.warn("No auth token found. Dashboard will be limited.");
                document.getElementById('welcome-message').innerText = "Welcome back, Guest.";
                document.getElementById('user-display-name').innerText = "Guest User";
                document.getElementById('user-display-role').innerText = "Spectator";
                return null;
            }
            try {
                const user = await fetchAPI('/current-user');
                currentUser = user;
                const firstName = user.name ? user.name.split(' ')[0] : 'Player';
                document.getElementById('welcome-message').innerHTML = `Welcome back, ${firstName}.`;
                document.getElementById('user-display-name').innerText = user.name || 'Athlete';
                if (user.role) document.getElementById('user-display-role').innerText = user.role;
                if (user.team_id) currentTeamId = user.team_id;
                if (currentTeamId) {
                    try {
                        const teamData = await fetchAPI(`/team/${currentTeamId}`);
                        currentTeamName = teamData.name || teamData.team_name || "Your Team";
                        document.getElementById('user-team').innerText = currentTeamName;
                    } catch (err) {
                        console.warn("Could not fetch team details:", err);
                        document.getElementById('user-team').innerText = "My Academy";
                    }
                } else {
                    document.getElementById('user-team').innerText = "Unaffiliated";
                }
                const avatarName = user.name ? encodeURIComponent(user.name) : "Player";
                document.getElementById('user-avatar').src = `https://ui-avatars.com/api/?name=${avatarName}&background=0f5238&color=fff&bold=true`;
                return user;
            } catch (err) {
                console.error("Failed to load user:", err);
                document.getElementById('welcome-message').innerText = "Welcome back.";
                document.getElementById('user-display-name').innerText = "Player";
                return null;
            }
        }

        async function loadMatchStats() {
            try {
                const stats = await fetchAPI('/match-stats');
                if (!Array.isArray(stats)) return {
                    totalGoals: 0,
                    totalAssists: 0,
                    recentRatings: []
                };
                let totalGoals = 0,
                    totalAssists = 0;
                const ratingsList = [];
                stats.forEach(stat => {
                    totalGoals += (stat.goals || 0);
                    totalAssists += (stat.assists || 0);
                    if (stat.rating !== undefined && stat.rating !== null) {
                        ratingsList.push({
                            rating: stat.rating,
                            match_id: stat.match_id,
                            date: stat.created_at
                        });
                    }
                });
                document.getElementById('total-goals').innerText = totalGoals.toString();
                document.getElementById('total-assists').innerText = totalAssists.toString();
                const sortedRatings = ratingsList.sort((a, b) => (b.date || 0) - (a.date || 0)).slice(0, 6);
                return {
                    totalGoals,
                    totalAssists,
                    recentRatings: sortedRatings.reverse()
                };
            } catch (err) {
                console.error("Failed to load match stats:", err);
                document.getElementById('total-goals').innerText = "0";
                document.getElementById('total-assists').innerText = "0";
                return {
                    totalGoals: 0,
                    totalAssists: 0,
                    recentRatings: []
                };
            }
        }

        function renderRatingsChart(recentRatings) {
            const container = document.getElementById('ratings-chart');
            if (!container) return;
            if (!recentRatings.length) {
                container.innerHTML = '<div class="flex items-center justify-center w-full h-full text-slate-400 text-sm">No recent match ratings available</div>';
                return;
            }
            container.innerHTML = '';
            recentRatings.forEach((item, idx) => {
                let ratingValue = item.rating;
                let heightPercent = Math.min(Math.max((ratingValue / 10) * 100, 0), 100);
                const barWrapper = document.createElement('div');
                barWrapper.className = "flex-1 flex flex-col items-center justify-end h-full relative group";
                barWrapper.innerHTML = `
                    <div class="w-full bg-primary/10 rounded-t-lg relative h-full transition-all duration-300 overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-700 ease-out" style="height: ${heightPercent}%;"></div>
                    </div>
                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-slate-500 whitespace-nowrap">M${idx + 1}</span>
                    <div class="opacity-0 group-hover:opacity-100 transition absolute -top-7 bg-primary text-white text-[10px] px-2 py-0.5 rounded-full whitespace-nowrap">${ratingValue.toFixed(1)}</div>
                `;
                container.appendChild(barWrapper);
            });
        }

        async function loadAcademicGrades() {
            try {
                const grades = await fetchAPI('/grade');
                if (!Array.isArray(grades) || grades.length === 0) {
                    document.getElementById('gpa-value').innerText = "N/A";
                    document.getElementById('gpa-progress').style.width = "0%";
                    document.getElementById('gpa-meta').innerText = "No grades recorded";
                    return;
                }
                let totalScore = 0;
                grades.forEach(g => {
                    totalScore += (g.score || 0);
                });
                const avgGPA = totalScore / grades.length;
                let displayGPA = avgGPA;
                let progressPercent = 0;
                if (avgGPA <= 4) {
                    displayGPA = avgGPA.toFixed(2);
                    progressPercent = (avgGPA / 4) * 100;
                } else if (avgGPA <= 100) {
                    const scaled = (avgGPA / 100) * 4;
                    displayGPA = scaled.toFixed(2);
                    progressPercent = (avgGPA / 100) * 100;
                } else {
                    displayGPA = avgGPA.toFixed(2);
                    progressPercent = Math.min((avgGPA / 100) * 100, 100);
                }
                document.getElementById('gpa-value').innerText = displayGPA;
                document.getElementById('gpa-progress').style.width = `${Math.min(progressPercent, 100)}%`;
                document.getElementById('gpa-meta').innerHTML = `Based on ${grades.length} subject${grades.length !== 1 ? 's' : ''}`;
            } catch (err) {
                console.error("Failed to load grades:", err);
                document.getElementById('gpa-value').innerText = "—";
                document.getElementById('gpa-progress').style.width = "0%";
                document.getElementById('gpa-meta').innerText = "Academic data unavailable";
            }
        }

        async function loadNextMatch() {
            const opponentSpan = document.getElementById('opponent-team');
            const nextStatusSpan = document.getElementById('next-match-status');
            if (!opponentSpan) return;
            try {
                const matches = await fetchAPI('/matches');
                if (!Array.isArray(matches) || matches.length === 0) {
                    opponentSpan.innerText = "No fixtures";
                    nextStatusSpan.innerText = "No upcoming matches scheduled";
                    return;
                }
                let userTeamId = currentTeamId;
                if (!userTeamId && currentUser && currentUser.team_id) userTeamId = currentUser.team_id;
                let upcomingMatches = [];
                const now = new Date().toISOString();
                if (userTeamId) {
                    upcomingMatches = matches.filter(match => {
                        const matchDate = match.match_date || match.scheduled_at || match.date;
                        const isUserTeam = (match.home_team_id === userTeamId || match.away_team_id === userTeamId);
                        const isUpcoming = !matchDate || matchDate >= now;
                        return isUserTeam && isUpcoming;
                    }).sort((a, b) => (a.match_date || a.id) - (b.match_date || b.id));
                } else {
                    upcomingMatches = matches.filter(m => (m.match_date || m.date) >= now).slice(0, 1);
                }

                if (upcomingMatches.length === 0) {
                    opponentSpan.innerText = "—";
                    nextStatusSpan.innerText = "No upcoming matches assigned yet";
                    return;
                }
                const nextMatch = upcomingMatches[0];
                let opponentName = "Opponent";
                if (currentTeamId) {
                    const isHome = nextMatch.home_team_id === currentTeamId;
                    const opponentId = isHome ? nextMatch.away_team_id : nextMatch.home_team_id;
                    if (opponentId) {
                        try {
                            const oppTeam = await fetchAPI(`/team/${opponentId}`);
                            opponentName = oppTeam.name || oppTeam.team_name || `Team ${opponentId}`;
                        } catch (err) {
                            opponentName = `Team ${opponentId}`;
                        }
                    } else {
                        opponentName = nextMatch.opponent || "Rival";
                    }
                } else {
                    opponentName = nextMatch.home_team_id ? (nextMatch.away_team?.name || "Elite Prep") : "Elite Prep";
                }
                opponentSpan.innerText = opponentName;
                const matchDateStr = nextMatch.match_date || nextMatch.scheduled_at || "TBD";
                let formattedDate = "Date TBD";
                if (matchDateStr && matchDateStr !== "TBD") {
                    try {
                        formattedDate = new Date(matchDateStr).toLocaleDateString(undefined, {
                            month: 'short',
                            day: 'numeric'
                        });
                    } catch (e) {
                        formattedDate = matchDateStr;
                    }
                }
                nextStatusSpan.innerHTML = `📅 ${formattedDate} · ${nextMatch.venue || 'Home/Away'} · ${nextMatch.status || 'Scheduled'}`;
                if (currentTeamName && document.getElementById('user-team').innerText === "—") {
                    document.getElementById('user-team').innerText = currentTeamName;
                }
            } catch (err) {
                console.error("Failed to load next match:", err);
                opponentSpan.innerText = "Schedule unavailable";
                nextStatusSpan.innerText = "Could not fetch match data";
            }
        }

        async function loadPerformanceAndRatings() {
            const {
                recentRatings
            } = await loadMatchStats();
            renderRatingsChart(recentRatings);
        }

        function setLoadingStates() {
            document.getElementById('total-goals').innerText = "...";
            document.getElementById('total-assists').innerText = "...";
            document.getElementById('gpa-value').innerText = "—";
            document.getElementById('user-team').innerText = "Loading...";
            document.getElementById('opponent-team').innerText = "Loading...";
        }

        async function initDashboard() {
            setLoadingStates();
            const stored = localStorage.getItem('token');
            if (!stored && !token) {
                console.warn("No authentication token found. Redirecting to login...");
                window.location.href = '/login';
                return;
            }

            try {
                await loadUserProfile();
                await Promise.all([
                    loadPerformanceAndRatings(),
                    loadAcademicGrades(),
                    loadNextMatch()
                ]);
                if (document.getElementById('user-team').innerText === "Loading..." || document.getElementById('user-team').innerText === "—") {
                    document.getElementById('user-team').innerText = currentTeamName || "Scholastic United";
                }
            } catch (globalErr) {
                console.error("Dashboard initialization error:", globalErr);
                const ratingContainer = document.getElementById('ratings-chart');
                if (ratingContainer && ratingContainer.innerHTML.includes("Loading ratings")) {
                    ratingContainer.innerHTML = '<div class="text-center text-error text-sm">Could not load ratings. Please check connection.</div>';
                }
            }
        }

        window.addEventListener('DOMContentLoaded', initDashboard);
    </script>
</body>

</html>