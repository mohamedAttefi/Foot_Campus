@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-match-details'])

@section('title', 'Match Details | The Scholastic Pitch')

@section('content')
    <main class="p-8 min-h-screen">
        <!-- Match Header Hero -->
        <section class="mb-10">
            <div id="match-header" class="text-center">
                <!-- Match details will be loaded here by JavaScript -->
                <div class="text-center py-12">
                    <div class="w-20 h-20 bg-surface-container-highest rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-symbols-outlined text-4xl text-outline animate-spin">sports_soccer</span>
                    </div>
                    <h2 class="text-2xl font-bold mb-2 text-on-surface">Loading match details...</h2>
                    <p class="text-on-surface-variant">Fetching your latest match data</p>
                </div>
            </div>
        </section>

        <!-- Score Display -->
        <section class="mb-10">
            <div id="score-display" class="text-center">
                <!-- Score will be loaded here by JavaScript -->
                <div class="text-center py-8">
                    <div class="text-4xl font-bold text-outline mb-2 animate-pulse">--</div>
                    <p class="text-on-surface-variant">Loading score...</p>
                </div>
            </div>
        </section>
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Tactical Pitch Widget (Main Visual) -->
            <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm relative overflow-hidden">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 class="font-headline text-xl font-bold">Tactical Preparation</h3>
                        <p class="text-on-surface-variant text-xs uppercase tracking-widest font-bold mt-1">Starting XI: 4-3-3 Offensive</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-[10px] font-bold">Tactics Active</span>
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-[10px] font-bold">Ver: 2.1</span>
                    </div>
                </div>
                <!-- Football Pitch -->
                <div class="aspect-[4/3] w-full rounded-2xl bg-gradient-to-br from-primary-container to-primary relative shadow-inner p-4">
                    <div class="absolute inset-0 border-[3px] border-white/20 rounded-2xl m-4 pointer-events-none"></div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-48 h-48 border-[3px] border-white/20 rounded-full"></div>
                        <div class="absolute w-[2px] h-[calc(100%-2rem)] bg-white/20 left-1/2"></div>
                    </div>
                    <!-- Tactical Markers (Players) -->
                    <div class="absolute top-1/2 left-8 -translate-y-1/2 flex flex-col items-center gap-1">
                        <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">1</div>
                        <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Davis (GK)</span>
                    </div>
                    <!-- Defending line -->
                    <div class="absolute inset-y-0 left-1/4 flex flex-col justify-around py-12">
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">2</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Chen</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">5</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Ibrahim</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">4</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Okafor</span>
                        </div>
                    </div>
                    <!-- Counter attacking zone (Overlay) -->
                    <div class="absolute right-12 top-1/2 -translate-y-1/2 w-48 h-48 bg-secondary/20 rounded-full border-2 border-dashed border-secondary animate-pulse flex items-center justify-center text-center">
                        <p class="text-white text-[10px] font-black uppercase leading-tight p-4">Exploit High Line Gap</p>
                    </div>
                </div>
                <!-- Tactical Notes Area -->
                <div class="mt-8 bg-surface-container-low p-6 rounded-2xl">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        <h4 class="font-bold text-sm">Manager's Tactical Directives</h4>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-on-surface-variant leading-relaxed">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full mt-2 shrink-0"></span>
                            Press high for the first 15 mins to exploit their defender's slow build-up play under pressure.
                        </li>
                        <li class="flex gap-3 text-sm text-on-surface-variant leading-relaxed">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full mt-2 shrink-0"></span>
                            Inverted full-backs to tuck into midfield during transition to overload the central pivot.
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Opponent Scouting Report -->
            <div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
                <!-- Opponent Card -->
                <div class="bg-surface-container-lowest rounded-[2rem] p-6 shadow-sm border-t-8 border-secondary">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-surface-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary" style="font-size: 32px;">shield</span>
                            </div>
                            <div>
                                <h3 class="font-headline font-bold">St. Jude's Academy</h3>
                                <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Opponent Profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-black uppercase text-emerald-700 tracking-wider mb-3">Key Strengths</p>
                            <div class="space-y-2">
                                <div class="p-3 bg-emerald-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-emerald-900">Set Piece Efficiency</span>
                                    <span class="text-[10px] bg-emerald-200 px-2 py-0.5 rounded font-bold">High</span>
                                </div>
                                <div class="p-3 bg-emerald-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-emerald-900">Right-Wing Pace</span>
                                    <span class="text-[10px] bg-emerald-200 px-2 py-0.5 rounded font-bold">Elite</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] font-black uppercase text-error tracking-wider mb-3">Target Weaknesses</p>
                            <div class="space-y-2">
                                <div class="p-3 bg-red-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-error">Stamina (70min+)</span>
                                    <span class="material-symbols-outlined text-sm text-error">trending_down</span>
                                </div>
                                <div class="p-3 bg-red-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-error">Aerial Defense</span>
                                    <span class="material-symbols-outlined text-sm text-error">air</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Matchday Logistics -->
                <div class="bg-surface-container-high rounded-[2rem] p-6">
                    <h3 class="font-headline font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">inventory_2</span>
                        Matchday Logistics
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">commute</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Team Bus Departure</p>
                                <p class="text-[11px] text-on-surface-variant">11:30 AM Sharp • Gate A</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">checkroom</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Kit Configuration</p>
                                <p class="text-[11px] text-on-surface-variant">Away Colors (White/Emerald)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">restaurant</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Pre-Match Nutrition</p>
                                <p class="text-[11px] text-on-surface-variant">Carb-load served at 9:00 AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Player Status / Form (Bottom Row) -->
            <div class="col-span-12 bg-white rounded-[2.5rem] p-8 shadow-sm overflow-hidden relative">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="font-headline text-xl font-bold">Squad Momentum</h3>
                    <button class="text-primary font-bold text-sm hover:underline">Full Fitness Report</button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Mental Ready</span>
                            <span class="text-primary font-bold">94%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[94%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Physical Load</span>
                            <span class="text-secondary font-bold">62%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[62%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Tactical IQ</span>
                            <span class="text-tertiary-container font-bold">88%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-tertiary-container w-[88%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Team Harmony</span>
                            <span class="text-primary font-bold">100%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-primary to-primary-fixed w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Floating Action Button (Only on Mobile-ish) -->
    <div class="fixed bottom-8 right-8 lg:hidden">
        <button class="w-16 h-16 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center transform active:scale-95 transition-all">
            <span class="material-symbols-outlined text-3xl">sports_soccer</span>
        </button>
    </div>
@endsection

<script>
    const MATCH_DETAILS_API_BASE = 'http://127.0.0.1:8000/api';
    
    function getMatchDetailsHeaders() {
        const token = localStorage.getItem('token');
        return {
            'Authorization': token ? `Bearer ${token}` : '',
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };
    }

    async function fetchMatchDetailsAPI(endpoint, options = {}) {
        const response = await fetch(`${MATCH_DETAILS_API_BASE}${endpoint}`, {
            headers: getMatchDetailsHeaders(),
            ...options
        });
        if (!response.ok) throw new Error(`API Error ${response.status}`);
        return response.json();
    }

    let matchDetailsCurrentMatch = null;

    async function loadMatchDetails() {
        try {
            // Get current user first to determine their team
            const currentUser = await fetchMatchDetailsAPI('/current-user');
            
            if (!currentUser || !currentUser.team) {
                showError('No team assigned to current user');
                return;
            }

            // Fetch all matches and find the last played match for this team
            const allMatches = await fetchMatchDetailsAPI('/matches');
            const matches = Array.isArray(allMatches) ? allMatches : (allMatches.data || []);
            
            // Filter matches for this team and find only past matches
            const now = new Date();
            const pastTeamMatches = matches
                .filter(match => {
                    const matchDate = new Date(match.date || match.match_date);
                    return (match.home_team_id === currentUser.team.id || 
                           match.away_team_id === currentUser.team.id) &&
                           matchDate < now; // Only past matches
                })
                .sort((a, b) => {
                    const dateA = new Date(a.date || a.match_date);
                    const dateB = new Date(b.date || b.match_date);
                    return dateB.getTime() - dateA.getTime(); // Most recent past match first
                });

            if (pastTeamMatches.length === 0) {
                // Show a proper message instead of error
                renderNoMatchesMessage(currentUser.team.name);
                return;
            }

            // Get the last played match
            matchDetailsCurrentMatch = pastTeamMatches[0];
            
            const [homeTeam, awayTeam] = await Promise.all([
                fetchMatchDetailsAPI(`/team/${matchDetailsCurrentMatch.home_team_id}`),
                fetchMatchDetailsAPI(`/team/${matchDetailsCurrentMatch.away_team_id}`)
            ]);
            
            renderMatchDetails(matchDetailsCurrentMatch, homeTeam, awayTeam);
            
        } catch (error) {
            console.error('Failed to load match details:', error);
            showError('Failed to load match details. Please refresh the page.');
        }
    }

    function renderNoMatchesMessage(teamName) {
        const matchHeader = document.getElementById('match-header');
        if (matchHeader) {
            matchHeader.innerHTML = `
                <div class="text-center py-12">
                    <div class="w-20 h-20 bg-surface-container-highest rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-symbols-outlined text-4xl text-outline">sports_soccer</span>
                    </div>
                    <h1 class="text-2xl font-bold mb-2 text-on-surface">${teamName}</h1>
                    <p class="text-on-surface-variant mb-4">No past matches available</p>
                    <p class="text-sm text-on-surface-variant">Your team hasn't played any matches yet. Once matches are completed, they'll appear here for post-match analysis.</p>
                    <div class="mt-8 flex justify-center gap-4">
                        <a href="/manager/create-lineup" class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold text-sm hover:opacity-90 transition-opacity">
                            Create Lineup
                        </a>
                        <a href="/manager/matches-list" class="bg-surface-container-highest text-on-surface px-6 py-3 rounded-xl font-bold text-sm hover:bg-surface-container-high transition-colors">
                            View All Matches
                        </a>
                    </div>
                </div>
            `;
        }
        
        const scoreDisplay = document.getElementById('score-display');
        if (scoreDisplay) {
            scoreDisplay.innerHTML = `
                <div class="text-center py-8">
                    <div class="text-4xl font-bold text-outline mb-2">--</div>
                    <p class="text-on-surface-variant">No match data available</p>
                </div>
            `;
        }
    }

    function renderMatchDetails(match, homeTeam, awayTeam) {
        const matchHeader = document.getElementById('match-header');
        if (matchHeader) {
            matchHeader.innerHTML = `
                <div class="text-center">
                    <h1 class="text-3xl font-bold mb-2">${homeTeam.name} vs ${awayTeam.name}</h1>
                    <p class="text-on-surface-variant">Matchday ${match.matchday || '1'} - ${new Date(match.date || match.match_date).toLocaleDateString()}</p>
                    <p class="text-sm text-on-surface-variant mt-1">${match.venue || 'Academy Stadium'}</p>
                </div>
            `;
        }
        
        const scoreDisplay = document.getElementById('score-display');
        if (scoreDisplay) {
            const homeScore = match.home_score || 0;
            const awayScore = match.away_score || 0;
            scoreDisplay.innerHTML = `
                <div class="text-center">
                    <div class="text-6xl font-bold">${homeScore} - ${awayScore}</div>
                    <p class="text-on-surface-variant">${match.status === 'finished' ? 'Full Time' : 'In Progress'}</p>
                </div>
            `;
        }
    }

    function showSuccess(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'fixed top-4 right-4 bg-green-50 border border-green-200 rounded-lg p-4 z-50';
        alertDiv.innerHTML = `
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-green-800">Success</h3>
                    <div class="mt-2 text-sm text-green-700">
                        <p>${message}</p>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(alertDiv);
        setTimeout(() => alertDiv.remove(), 3000);
    }

    function showError(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'fixed top-4 right-4 bg-red-50 border border-red-200 rounded-lg p-4 z-50';
        alertDiv.innerHTML = `
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Error</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <p>${message}</p>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(alertDiv);
        setTimeout(() => alertDiv.remove(), 3000);
    }

    window.addEventListener('DOMContentLoaded', () => {
        if (!localStorage.getItem('token')) {
            window.location.href = '/login';
            return;
        }
        loadMatchDetails();
    });
</script>

</html>