@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-standings'])

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
                <div class="flex gap-4 items-center bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-slate-50">
                    <div class="text-right">
                        <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Total Teams</p>
                        <p class="text-2xl font-headline font-black text-emerald-800" id="total-teams">--</p>
                    </div>
                    <div class="w-px h-10 bg-slate-100"></div>
                    <div class="text-right">
                        <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Matches Played</p>
                        <p class="text-2xl font-headline font-black text-emerald-800" id="total-matches">--</p>
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
                        <!-- League Statistics Banner -->
                        <div class="pitch-gradient rounded-3xl p-8 text-on-primary flex items-center gap-8 relative overflow-hidden shadow-xl shadow-emerald-950/20">
                            <div class="flex-1 relative z-10">
                                <h4 class="text-2xl font-headline font-extrabold mb-2 italic">League Overview</h4>
                                <p class="text-primary-fixed-dim text-sm max-w-md">Comprehensive statistics and performance metrics for the academy league.</p>
                                <div class="mt-6 flex gap-6">
                                    <div class="text-center">
                                        <p class="text-3xl font-headline font-black text-white" id="total-goals">--</p>
                                        <p class="text-xs text-primary-fixed-dim uppercase tracking-widest">Total Goals</p>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-3xl font-headline font-black text-white" id="avg-goals">--</p>
                                        <p class="text-xs text-primary-fixed-dim uppercase tracking-widest">Avg Goals/Match</p>
                                    </div>
                                    <div class="text-center">
                                        <p class="text-3xl font-headline font-black text-white" id="completion-rate">--%</p>
                                        <p class="text-xs text-primary-fixed-dim uppercase tracking-widest">Match Completion</p>
                                    </div>
                                </div>
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
                        <!-- Top Performers -->
                        <div class="bg-surface-container-low rounded-3xl p-6">
                            <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6 flex items-center justify-between">
                                League Leaders
                                <span class="material-symbols-outlined text-emerald-600">emoji_events</span>
                            </h4>
                            <div class="space-y-6">
                                <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4">
                                    <div class="p-3 bg-emerald-50 rounded-xl text-emerald-700">
                                        <span class="material-symbols-outlined">sports_soccer</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-on-surface-variant font-medium">Top Scorer</p>
                                        <p class="text-xl font-headline font-black text-on-surface" id="top-scorer">--</p>
                                    </div>
                                </div>
                                <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4">
                                    <div class="p-3 bg-blue-50 rounded-xl text-blue-700">
                                        <span class="material-symbols-outlined">military_tech</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-on-surface-variant font-medium">Best Defense</p>
                                        <p class="text-xl font-headline font-black text-on-surface" id="best-defense">--</p>
                                    </div>
                                </div>
                                <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4">
                                    <div class="p-3 bg-purple-50 rounded-xl text-purple-700">
                                        <span class="material-symbols-outlined">trending_up</span>
                                    </div>
                                    <div>
                                        <p class="text-xs text-on-surface-variant font-medium">Best Form</p>
                                        <p class="text-xl font-headline font-black text-on-surface" id="best-form">--</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- League News -->
                        <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm">
                            <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6">League Bulletin</h4>
                            <div class="space-y-4">
                                <div class="bg-surface-container-high rounded-3xl p-5 border-l-4 border-emerald-600">
                                    <p class="text-[10px] font-bold text-emerald-800 uppercase mb-2">Technical Update</p>
                                    <h5 class="font-headline font-bold text-on-surface leading-tight mb-2">League standings updated in real-time.</h5>
                                    <a href="/admin/matches" class="text-[11px] font-bold text-secondary flex items-center gap-1 group">
                                        View Schedule
                                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                                    </a>
                                </div>
                                <div class="bg-surface-container-high rounded-3xl p-5 border-l-4 border-blue-600">
                                    <p class="text-[10px] font-bold text-blue-800 uppercase mb-2">Performance Report</p>
                                    <h5 class="font-headline font-bold text-on-surface leading-tight mb-2">Weekly performance metrics available.</h5>
                                    <a href="/admin/academic" class="text-[11px] font-bold text-secondary flex items-center gap-1 group">
                                        View Analytics
                                        <span class="material-symbols-outlined text-[14px]">analytics</span>
                                    </a>
                                </div>
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
    let standingsData = [];

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
            const formBadges = team.form.map(result => {
                const colors = {
                    'W': 'bg-emerald-600 text-white',
                    'D': 'bg-slate-100 text-slate-500',
                    'L': 'bg-red-100 text-red-800'
                };
                return `<span class="w-5 h-5 flex items-center justify-center rounded ${colors[result]} text-[9px] font-black">${result}</span>`;
            }).join('');

            const rowClass = 'group hover:bg-surface-container-low transition-colors';
            const positionClass = position <= 3 ? 'text-emerald-700 text-xl font-black' : 'text-on-surface/50 text-lg';
            const nameClass = position <= 3 ? 'text-emerald-900 font-bold' : 'text-on-surface';

            return `
                <tr class="${rowClass}">
                    <td class="py-5 pl-2 font-headline font-black ${positionClass}">${String(position).padStart(2, '0')}</td>
                    <td class="py-5">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 flex items-center justify-center ${position <= 3 ? 'bg-emerald-600 rounded-xl shadow-lg shadow-emerald-900/20' : 'bg-slate-100 rounded-xl'}">
                                <span class="material-symbols-outlined ${position <= 3 ? 'text-white' : 'text-slate-400'}">shield</span>
                            </div>
                            <div>
                                <p class="font-headline font-bold ${nameClass}">${team.name}</p>
                                ${position <= 3 ? '<p class="text-[10px] text-emerald-700/70 font-bold flex items-center gap-1 uppercase"><span class="w-1 h-1 rounded-full bg-emerald-600"></span> Top 3</p>' : ''}
                            </div>
                        </div>
                    </td>
                    <td class="py-5 text-center font-bold text-on-surface">${team.played}</td>
                    <td class="py-5 text-center font-medium text-on-surface">${team.won}</td>
                    <td class="py-5 text-center font-medium text-on-surface">${team.drawn}</td>
                    <td class="py-5 text-center font-medium text-on-surface">${team.lost}</td>
                    <td class="py-5 text-center font-headline font-bold text-emerald-600">${team.goalDifference > 0 ? '+' : ''}${team.goalDifference}</td>
                    <td class="py-5 text-center font-headline font-black text-on-surface">${team.points}</td>
                    <td class="py-5 text-right pr-2">
                        <div class="flex justify-end gap-1">
                            ${formBadges}
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }

    function updateStatistics(standings, matches) {
        // Update total teams
        document.getElementById('total-teams').textContent = standings.length;
        
        // Update total matches
        const completedMatches = matches.filter(match => 
            match.home_score !== null && match.away_score !== null
        );
        document.getElementById('total-matches').textContent = completedMatches.length;
        
        // Calculate total goals
        const totalGoals = completedMatches.reduce((sum, match) => 
            sum + match.home_score + match.away_score, 0
        );
        document.getElementById('total-goals').textContent = totalGoals;
        
        // Calculate average goals per match
        const avgGoals = completedMatches.length > 0 ? 
            (totalGoals / completedMatches.length).toFixed(1) : '0.0';
        document.getElementById('avg-goals').textContent = avgGoals;
        
        // Calculate completion rate
        const completionRate = matches.length > 0 ? 
            Math.round((completedMatches.length / matches.length) * 100) : 0;
        document.getElementById('completion-rate').textContent = completionRate;
        
        // Update league leaders
        if (standings.length > 0) {
            // Top scorer team (most goals for)
            const topScorer = standings.reduce((max, team) => 
                team.goalsFor > max.goalsFor ? team : max, standings[0]
            );
            document.getElementById('top-scorer').textContent = topScorer.name;
            
            // Best defense (least goals against)
            const bestDefense = standings.reduce((min, team) => 
                team.goalsAgainst < min.goalsAgainst ? team : min, standings[0]
            );
            document.getElementById('best-defense').textContent = bestDefense.name;
            
            // Best form (most recent wins)
            const bestForm = standings.find(team => 
                team.form.slice(-3).every(result => result === 'W')
            ) || standings[0];
            document.getElementById('best-form').textContent = bestForm.name;
        }
    }

    async function loadStandings() {
        try {
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
            updateStatistics(standingsData, matches);

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

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        loadStandings();
    });
</script>
@endsection
