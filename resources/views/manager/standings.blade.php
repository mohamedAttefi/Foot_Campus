@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-standings'])

@section('title', 'League Standings | The Scholastic Pitch')

@section('content')
<!-- Content Area -->
<main class="pt-24 px-10 pb-12">
    <!-- Title Race Context -->
    <section class="mb-12">
        <div class="flex items-end justify-between mb-8">
            <div>
                <span class="text-on-surface-variant font-label font-semibold text-xs uppercase tracking-[0.2em]">Live Competition</span>
                <h2 class="text-4xl font-headline font-extrabold text-on-surface tracking-tight mt-1">League Standings</h2>
            </div>
            <div id="user-position" class="flex gap-4 items-center bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-slate-50">
                <div class="text-right">
                    <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Your Position</p>
                    <p class="text-2xl font-headline font-black text-emerald-800">--<span class="text-xs font-medium text-slate-400 ml-1">th</span></p>
                </div>
                <div class="w-px h-10 bg-slate-100"></div>
                <div class="text-right">
                    <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">To Lead</p>
                    <p class="text-2xl font-headline font-black text-error">-- pts</p>
                </div>
            </div>
        </div>
        <!-- Loading State -->
        <div id="loading-state" class="text-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-emerald-500 mx-auto mb-4"></div>
            <p class="text-on-surface-variant">Loading league standings...</p>
        </div>
        <!-- Standings Content -->
        <div id="standings-content" class="hidden">
            <!-- Bento Grid Standings Layout -->
            <div class="grid grid-cols-12 gap-8">
                <!-- Main Table Section -->
                <div class="col-span-8 space-y-6">
                    <div class="bg-surface-container-lowest rounded-3xl p-8 shadow-xl shadow-slate-200/50">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl font-headline font-bold text-on-surface">U-19 Premier Academy Division</h3>
                            <div class="flex gap-2">
                                <button class="px-4 py-1.5 bg-surface-container-low rounded-lg text-xs font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors">Overall</button>
                                <button class="px-4 py-1.5 rounded-lg text-xs font-bold text-outline hover:text-on-surface transition-colors">Home</button>
                                <button class="px-4 py-1.5 rounded-lg text-xs font-bold text-outline hover:text-on-surface transition-colors">Away</button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-[10px] uppercase tracking-widest text-on-surface-variant font-bold border-b border-slate-50">
                                        <th class="pb-4 pl-2">Pos</th>
                                        <th class="pb-4">Club</th>
                                        <th class="pb-4 text-center">P</th>
                                        <th class="pb-4 text-center">W</th>
                                        <th class="pb-4 text-center">D</th>
                                        <th class="pb-4 text-center">L</th>
                                        <th class="pb-4 text-center">GD</th>
                                        <th class="pb-4 text-center">PTS</th>
                                        <th class="pb-4 text-right pr-2">Form</th>
                                    </tr>
                                </thead>
                                <tbody id="standings-tbody" class="divide-y divide-slate-50">
                                    <!-- Standings rows will be inserted here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tactical Insight Banner -->
                    <div class="pitch-gradient rounded-3xl p-8 text-on-primary flex items-center gap-8 relative overflow-hidden shadow-xl shadow-emerald-950/20">
                        <div class="flex-1 relative z-10">
                            <h4 class="text-2xl font-headline font-extrabold mb-2 italic">Matchday Analysis</h4>
                            <p class="text-primary-fixed-dim text-sm max-w-md">Track your team's performance and upcoming fixtures in the league standings.</p>
                            <a href="/manager/matches" class="mt-6 px-6 py-2.5 bg-white text-emerald-900 rounded-full font-headline font-bold text-sm hover:bg-primary-fixed transition-all flex items-center gap-2 group">
                                View Match Tactics
                                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">trending_flat</span>
                            </a>
                        </div>
                        <div class="w-1/3 aspect-video relative z-10 rounded-2xl overflow-hidden border border-white/10">
                            <img class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsNKLl7V50d2KVeUs3Jm30WrLhq5Hw0RTxzeN4EOiBE_XXIQ7APYE8_3NzUrdSmHui6WX_Ikd_dZTXhe-o2G9arKn4O8-od3ngbPIaSUUTgKL8QeCL8ROVeDoE-GcJS8fazn7qzfbI7eyhuIF6yZlTYswQvK2HZj1dhfJ85CEek67rQ6hB6LxG6FhXrrypZOlCYaXyRbME7mrYwsnJer-MpsXu7rwV8nsxsQMDiY2FSWRcrzNE1PXYgMNI96amM5rqf7tVA4Pp3sQ" />
                            <div class="absolute inset-0 bg-emerald-900/40 backdrop-overlay"></div>
                        </div>
                        <!-- Abstract Pitch Design Element -->
                        <div class="absolute -right-20 -bottom-20 w-80 h-80 border-4 border-white/5 rounded-full"></div>
                    </div>
                </div>
                <!-- Sidebar Contextual Area -->
                <div class="col-span-4 space-y-8">
                    <!-- Form Momentum Card -->
                    <div class="bg-surface-container-low rounded-3xl p-6">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6 flex items-center justify-between">
                            Form Momentum
                            <span class="material-symbols-outlined text-emerald-600">trending_up</span>
                        </h4>
                        <div class="space-y-6">
                            <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4">
                                <div class="p-3 bg-emerald-50 rounded-xl text-emerald-700">
                                    <span class="material-symbols-outlined">monitoring</span>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-medium">Win Probability</p>
                                    <p id="win-probability" class="text-xl font-headline font-black text-on-surface">--%</p>
                                </div>
                            </div>
                            <div id="form-chart" class="flex items-end gap-1 h-24 px-2">
                                <!-- Form bars will be inserted here -->
                            </div>
                            <p class="text-[11px] text-center text-on-surface-variant font-medium italic">Recent form analysis</p>
                        </div>
                    </div>
                    <!-- Key Performers -->
                    <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6">Star Scholars</h4>
                        <div id="top-performers" class="space-y-4">
                            <!-- Top performers will be inserted here -->
                        </div>
                    </div>
                    <!-- League News -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest px-2">League Bulletin</h4>
                        <div class="bg-surface-container-high rounded-3xl p-5 border-l-4 border-emerald-600">
                            <p class="text-[10px] font-bold text-emerald-800 uppercase mb-2">Technical Update</p>
                            <h5 class="font-headline font-bold text-on-surface leading-tight mb-2">League standings updated in real-time.</h5>
                            <a href="/manager/matches" class="text-[11px] font-bold text-secondary flex items-center gap-1 group">
                                View Schedule
                                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
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
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "2xl": "1rem",
                    "3xl": "1.5rem",
                    "full": "9999px"
                },
                "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
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

    .tonal-shift {
        transition: background-color 0.3s ease;
    }

    .glass-nav {
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }

    .pitch-gradient {
        background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%);
    }
</style>

<script>
    let currentCoach = null;
    let userTeam = null;
    let standingsData = [];

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

    function calculateStandings(teams, matches) {
        const standings = teams.map(team => {
            const teamMatches = matches.filter(match =>
                match.home_team_id === team.id || match.away_team_id === team.id
            );

            let played = 0,
                won = 0,
                drawn = 0,
                lost = 0,
                goalsFor = 0,
                goalsAgainst = 0;
            let form = [];

            teamMatches.forEach(match => {
                const isHome = match.home_team_id === team.id;
                const teamScore = isHome ? match.home_score : match.away_score;
                const opponentScore = isHome ? match.away_score : match.home_score;

                if (teamScore !== null && opponentScore !== null) {
                    played++;
                    goalsFor += teamScore;
                    goalsAgainst += opponentScore;

                    if (teamScore > opponentScore) {
                        won++;
                        form.push('W');
                    } else if (teamScore === opponentScore) {
                        drawn++;
                        form.push('D');
                    } else {
                        lost++;
                        form.push('L');
                    }
                }
            });

            const goalDifference = goalsFor - goalsAgainst;
            const points = (won * 3) + drawn;

            return {
                ...team,
                played,
                won,
                drawn,
                lost,
                goalsFor,
                goalsAgainst,
                goalDifference,
                points,
                form: form.slice(-5)
            };
        });

        return standings.sort((a, b) => {
            if (b.points !== a.points) return b.points - a.points;
            if (b.goalDifference !== a.goalDifference) return b.goalDifference - a.goalDifference;
            return b.goalsFor - a.goalsFor;
        });
    }

    function renderStandings(standings) {
        const tbody = document.getElementById('standings-tbody');
        tbody.innerHTML = standings.map((team, index) => {
            const position = index + 1;
            const isUserTeam = userTeam && team.id === userTeam.id;
            const formBadges = team.form.map(result => {
                const colors = {
                    'W': 'bg-emerald-600 text-white',
                    'D': 'bg-slate-100 text-slate-500',
                    'L': 'bg-red-100 text-red-800'
                };
                return `<span class="w-5 h-5 flex items-center justify-center rounded ${colors[result]} text-[9px] font-black">${result}</span>`;
            }).join('');

            const rowClass = isUserTeam ? 'bg-emerald-50/50 rounded-2xl relative overflow-hidden ring-2 ring-emerald-500/20' : 'group hover:bg-surface-container-low transition-colors';
            const positionClass = isUserTeam ? 'text-emerald-700 text-xl' : 'text-on-surface/50 text-lg';
            const nameClass = isUserTeam ? 'text-emerald-900' : 'text-on-surface';
            const statsClass = isUserTeam ? 'text-emerald-900' : 'text-on-surface';
            const gdClass = isUserTeam ? 'text-emerald-700' : 'text-emerald-600';
            const pointsClass = isUserTeam ? 'text-emerald-800' : 'text-on-surface';

            return `
                <tr class="${rowClass}">
                    <td class="py-5 pl-2 font-headline font-black ${positionClass}">${String(position).padStart(2, '0')}</td>
                    <td class="py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 flex items-center justify-center ${isUserTeam ? 'bg-emerald-600 rounded-xl shadow-lg shadow-emerald-900/20' : 'bg-slate-100 rounded-xl'}">
                                <span class="material-symbols-outlined ${isUserTeam ? 'text-white' : 'text-slate-400'}">${isUserTeam ? 'sports_soccer' : 'shield'}</span>
                            </div>
                            <div>
                                <p class="font-headline font-bold ${nameClass}">${team.name}</p>
                                ${isUserTeam ? '<p class="text-[10px] text-emerald-700/70 font-bold flex items-center gap-1 uppercase"><span class="w-1 h-1 rounded-full bg-emerald-600"></span> Your Team</p>' : ''}
                            </div>
                        </div>
                    </td>
                    <td class="py-5 text-center font-bold ${statsClass}">${team.played}</td>
                    <td class="py-5 text-center font-medium ${statsClass}">${team.won}</td>
                    <td class="py-5 text-center font-medium ${statsClass}">${team.drawn}</td>
                    <td class="py-5 text-center font-medium ${statsClass}">${team.lost}</td>
                    <td class="py-5 text-center font-headline font-bold ${gdClass}">${team.goalDifference > 0 ? '+' : ''}${team.goalDifference}</td>
                    <td class="py-5 text-center font-headline font-black ${pointsClass}">${team.points}</td>
                    <td class="py-5 text-right pr-2">
                        <div class="flex justify-end gap-1">
                            ${formBadges}
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }

    function updateUserPosition(standings) {
        if (!userTeam) return;

        const userPosition = standings.findIndex(team => team.id === userTeam.id) + 1;
        const leader = standings[0];
        const pointsBehind = leader ? leader.points - standings.find(team => team.id === userTeam.id).points : 0;

        document.getElementById('user-position').innerHTML = `
            <div class="text-right">
                <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Your Position</p>
                <p class="text-2xl font-headline font-black text-emerald-800">${userPosition}<span class="text-xs font-medium text-slate-400 ml-1">${getOrdinalSuffix(userPosition)}</span></p>
            </div>
            <div class="w-px h-10 bg-slate-100"></div>
            <div class="text-right">
                <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">To Lead</p>
                <p class="text-2xl font-headline font-black text-error">${pointsBehind > 0 ? '-' + pointsBehind : '--'} pts</p>
            </div>
        `;
    }

    function getOrdinalSuffix(num) {
        const j = num % 10,
            k = num % 100;
        if (j == 1 && k != 11) return "st";
        if (j == 2 && k != 12) return "nd";
        if (j == 3 && k != 13) return "rd";
        return "th";
    }

    function updateFormChart(standings) {
        if (!userTeam) return;

        const teamForm = standings.find(team => team.id === userTeam.id)?.form || [];
        const formChart = document.getElementById('form-chart');

        if (teamForm.length === 0) {
            formChart.innerHTML = '<p class="text-center text-on-surface-variant text-sm">No form data available</p>';
            return;
        }

        const formBars = teamForm.map(result => {
            const height = result === 'W' ? 85 : result === 'D' ? 40 : 25;
            const colors = {
                'W': 'bg-emerald-500',
                'D': 'bg-emerald-200/50',
                'L': 'bg-emerald-200/50'
            };
            return `<div class="flex-1 ${colors[result]} rounded-t-lg" style="height: ${height}%"></div>`;
        }).join('');

        formChart.innerHTML = formBars;
    }

    function updateUserInfo(user) {
        const userInfo = document.getElementById('user-info');
        if (userInfo && user) {
            userInfo.innerHTML = `
                <p class="text-xs font-bold text-on-surface">${user.name}</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">${user.role === 'coach' ? 'First Team Manager' : 'Team Manager'}</p>
            `;
        }
    }

    async function loadStandings() {
        try {
            // Get current user and team
            currentCoach = await fetchAPI('/current-user');
            userTeam = currentCoach?.team || null;

            // Update user info in sidebar
            updateUserInfo(currentCoach);

            // Fetch teams and matches
            const [teamsData, matchesData] = await Promise.all([
                fetchAPI('/team'),
                fetchAPI('/matches')
            ]);

            const teams = Array.isArray(teamsData) ? teamsData : (teamsData.data || []);
            const matches = Array.isArray(matchesData) ? matchesData : (matchesData.data || []);

            // Calculate standings
            standingsData = calculateStandings(teams, matches);

            // Update UI
            renderStandings(standingsData);
            updateUserPosition(standingsData);
            updateFormChart(standingsData);

            // Show content, hide loading
            document.getElementById('loading-state').classList.add('hidden');
            document.getElementById('standings-content').classList.remove('hidden');

        } catch (error) {
            console.error('Failed to load standings:', error);
            document.getElementById('loading-state').innerHTML = `
                <div class="text-center text-error py-8">
                    <p class="text-lg font-bold mb-2">Failed to load standings</p>
                    <p class="text-sm">Please refresh the page to try again.</p>
                </div>
            `;
        }
    }

    // Authentication check

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        loadStandings();

    });
</script>
@endsection