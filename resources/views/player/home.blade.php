@extends('layouts.app', ['userRole' => 'player', 'currentPage' => 'player-dashboard'])

@section('title', 'Player Dashboard | The Scholastic Pitch')

@section('content')
<style>
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
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .stat-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
    }
</style>

<div class="p-8 space-y-8">
    <section class="flex flex-col md:flex-row gap-8 items-end">
        <div class="flex-grow">
            <span class="text-[10px] font-bold tracking-[0.3em] text-primary uppercase mb-2 block">Performance Overview</span>
            <h2 id="welcome-message" class="text-4xl font-extrabold font-headline tracking-tight">Welcome back.</h2>
            <p class="text-on-surface-variant mt-1">Your match readiness is at <span class="text-primary font-bold">94%</span>.</p>
        </div>
        <div class="bg-primary-container text-on-primary px-6 py-4 rounded-2xl flex items-center gap-4 shadow-lg">
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
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-500">shield</span>
                    </div>
                    <span id="user-team" class="font-bold text-sm">—</span>
                </div>
                <div class="italic font-black text-2xl text-slate-300">VS</div>
                <div class="text-center flex-1">
                    <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center">
                        <span class="material-symbols-outlined text-slate-500">shield</span>
                    </div>
                    <span id="opponent-team" class="font-bold text-sm text-slate-500">—</span>
                </div>
            </div>
            <div id="next-match-status" class="text-center mt-4 text-xs text-on-surface-variant italic"></div>
        </div>

        <!-- Academic GPA card -->
        <div class="md:col-span-4 bg-gradient-to-br from-secondary/10 to-secondary-fixed/30 rounded-[2rem] p-8 border border-secondary/20">
            <h3 class="text-xl font-headline font-bold text-secondary">Academic GPA</h3>
            <div class="py-6">
                <div id="gpa-value" class="text-6xl font-black text-secondary">—</div>
                <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                    <div id="gpa-progress" class="bg-secondary h-full transition-all duration-700" style="width: 0%"></div>
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
@endsection

@section('scripts')
<script>
    let currentTeamId = null;
    let currentTeamName = "";

    
    async function loadUserProfile() {
        try {
            console.log("Loading user profile...");
            const user = await fetchAPI('/current-user');
            console.log("Raw user data:", user);
            currentUser = user;
            
            const firstName = user.name ? user.name.split(' ')[0] : 'Player';
            document.getElementById('welcome-message').innerHTML = `Welcome back, ${firstName}.`;
            
            // Debug the player data structure
            console.log("User player data:", user.player);
            console.log("User player team_id:", user.player?.team_id);
            
            if (user.player && user.player.team_id) {
                currentTeamId = user.player.team_id;
                console.log("Set currentTeamId to:", currentTeamId);
                
                try {
                    const teamData = await fetchAPI(`/team/${currentTeamId}`);
                    console.log("Team data response:", teamData);
                    
                    currentTeamName = teamData.team.name || "Your Team";
                    console.log("Set currentTeamName to:", currentTeamName);
                    document.getElementById('user-team').innerText = currentTeamName;
                } catch (err) {
                    console.error("Failed to load team data:", err);
                    document.getElementById('user-team').innerText = "My Academy";
                }
            } else {
                console.log("No team found for user");
                document.getElementById('user-team').innerText = "Unaffiliated";
            }
            
            return user;
        } catch (err) {
            console.error("Failed to load user:", err);
            document.getElementById('welcome-message').innerHTML = "Welcome back, Player.";
            document.getElementById('user-team').innerText = "Error loading profile";
            return null;
        }
    }

    async function loadMatchStats() {
        try {
            console.log("Loading match stats...");
            
            // Load match events for current user to get goals/assists
            if (!currentUser || !currentUser.player) {
                console.log("No current user or player data found");
                return { totalGoals: 0, totalAssists: 0, recentRatings: [] };
            }

            const playerId = currentUser.player.id;
            console.log("Fetching events for player ID:", playerId);
            
            const events = await fetchAPI(`/match-events?player_id=${playerId}`);
            console.log("Match events response:", events);
            
            if (!Array.isArray(events)) {
                console.log("Events is not an array:", events);
                return { totalGoals: 0, totalAssists: 0, recentRatings: [] };
            }
            
            let totalGoals = 0, totalAssists = 0;
            const ratingsList = [];
            
            events.forEach(event => {
                console.log("Processing event:", event);
                if (event.type === 'goal') {
                    totalGoals += 1;
                }
                if (event.type === 'assist') {
                    totalAssists += 1;
                }
                // Create mock ratings based on events (you can replace with actual rating system)
                if (event.match_id) {
                    ratingsList.push({
                        rating: Math.random() * 3 + 7, // Mock rating between 7-10
                        match_id: event.match_id,
                        date: event.created_at
                    });
                }
            });
            
            console.log("Total goals:", totalGoals, "Total assists:", totalAssists);
            
            document.getElementById('total-goals').innerText = totalGoals.toString();
            document.getElementById('total-assists').innerText = totalAssists.toString();
            
            const sortedRatings = ratingsList.sort((a, b) => (b.date || 0) - (a.date || 0)).slice(0, 6);
            return { totalGoals, totalAssists, recentRatings: sortedRatings.reverse() };
        } catch (err) {
            console.error("Failed to load match stats:", err);
            document.getElementById('total-goals').innerText = "0";
            document.getElementById('total-assists').innerText = "0";
            return { totalGoals: 0, totalAssists: 0, recentRatings: [] };
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
            console.log("Loading academic grades...");
            const grades = await fetchAPI('/grade');
            console.log("Grades response:", grades);
            
            if (!Array.isArray(grades) || grades.length === 0) {
                console.log("No grades found");
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
            console.log("Average GPA:", avgGPA);
            
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
            
            console.log("Display GPA:", displayGPA, "Progress:", progressPercent);
            
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
        console.log("Loading next match...");
        const opponentSpan = document.getElementById('opponent-team');
        const nextStatusSpan = document.getElementById('next-match-status');
        if (!opponentSpan) return;
        
        try {
            const matches = await fetchAPI('/matches');
            console.log("Matches response:", matches);
            
            if (!Array.isArray(matches) || matches.length === 0) {
                console.log("No matches found");
                opponentSpan.innerText = "No fixtures";
                nextStatusSpan.innerText = "No upcoming matches scheduled";
                return;
            }
            
            let userTeamId = currentTeamId;
            if (!userTeamId && currentUser && currentUser.player && currentUser.player.team_id) userTeamId = currentUser.player.team_id;
            
            console.log("Using user team ID:", userTeamId);
            
            let upcomingMatches = [];
            const now = new Date().toISOString();
            
            if (userTeamId) {
                upcomingMatches = matches.filter(match => {
                    const matchDate = match.date || match.match_date || match.scheduled_at;
                    const isUserTeam = (match.home_team_id === userTeamId || match.away_team_id === userTeamId);
                    const isUpcoming = !matchDate || matchDate >= now;
                    return isUserTeam && isUpcoming;
                }).sort((a, b) => (a.date || a.id) - (b.date || b.id));
            } else {
                upcomingMatches = matches.filter(m => (m.date || m.match_date) >= now).slice(0, 1);
            }
            
            console.log("Upcoming matches:", upcomingMatches);

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
                        const oppTeamData = await fetchAPI(`/team/${opponentId}`);
                        opponentName = oppTeamData.team.name || `Team ${opponentId}`;
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
            const matchDateStr = nextMatch.date || nextMatch.match_date || nextMatch.scheduled_at || "TBD";
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

    async function initDashboard() {
        try {
            console.log("Initializing dashboard...");
            
            // Show loading states
            document.getElementById('welcome-message').innerHTML = "Loading...";
            document.getElementById('user-team').innerText = "Loading...";
            document.getElementById('total-goals').innerText = "...";
            document.getElementById('total-assists').innerText = "...";
            document.getElementById('gpa-value').innerText = "...";
            
            await loadUserProfile();
            const { recentRatings } = await loadMatchStats();
            renderRatingsChart(recentRatings);
            await loadAcademicGrades();
            await loadNextMatch();
            
            console.log("Dashboard initialization complete");
        } catch (globalErr) {
            console.error("Dashboard initialization error:", globalErr);
            
            // Show fallback data
            document.getElementById('welcome-message').innerHTML = "Welcome back, Player.";
            document.getElementById('user-team').innerText = "Error loading data";
            document.getElementById('total-goals').innerText = "0";
            document.getElementById('total-assists').innerText = "0";
            document.getElementById('gpa-value').innerText = "N/A";
            document.getElementById('opponent-team').innerText = "No data";
            document.getElementById('next-match-status').innerText = "Could not load dashboard data";
        }
    }

    window.addEventListener('DOMContentLoaded', initDashboard);
</script>
@endsection
