<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lineup Builder - The Scholastic Pitch</title>
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
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .pitch-pattern {
            background-image: repeating-linear-gradient(90deg, rgba(255,255,255,0.03) 0px, rgba(255,255,255,0.03) 40px, transparent 40px, transparent 80px);
        }
        .glass-sidebar { backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e0e3e5; border-radius: 10px; }
        .position-dot { transition: all 0.2s ease; }
        .position-dot:hover { transform: scale(1.1); }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-screen w-64 bg-slate-50/80 backdrop-blur-md font-['Manrope'] tracking-wide text-sm font-semibold rounded-r-3xl shadow-xl flex flex-col p-6 overflow-y-auto z-50">
        <div class="mb-10 flex flex-col items-start">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic">The Scholastic Pitch</h1>
            <p class="text-[10px] uppercase tracking-[0.2em] opacity-60 mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">leaderboard</span><span>League Table</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">groups</span><span>Teams</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="#">
                <span class="material-symbols-outlined">sports_soccer</span><span>Matches</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">query_stats</span><span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">school</span><span>Academic Hub</span>
            </a>
        </nav>
        <button class="mt-6 w-full bg-primary-container text-on-primary py-3 px-4 rounded-xl font-headline font-bold text-xs uppercase tracking-widest shadow-lg shadow-primary/20 hover:scale-95 transition-transform duration-150">
            Create Match
        </button>
        <div class="mt-auto pt-6 space-y-2 border-t border-slate-200/50">
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-slate-500 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">settings</span><span>Settings</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-slate-500 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">help</span><span>Support</span>
            </a>
        </div>
    </aside>
    
    <!-- TopNavBar -->
    <header class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-64 max-w-[calc(100%-16rem)]">
        <div class="flex items-center gap-8">
            <div class="flex items-center bg-surface-container-highest/50 px-4 py-2 rounded-full min-w-[300px]">
                <span class="material-symbols-outlined text-outline mr-2 text-sm">search</span>
                <input id="search-input" class="bg-transparent border-none focus:ring-0 text-sm font-body w-full" placeholder="Search players..." type="text" />
            </div>
            <nav class="hidden md:flex items-center gap-6">
                <a class="text-slate-600 font-['Manrope'] font-medium text-sm transition-colors hover:text-emerald-500" href="#">Standings</a>
                <a class="text-emerald-700 font-bold border-b-2 border-emerald-700 pb-2 font-['Manrope'] text-sm" href="#">Schedule</a>
                <a class="text-slate-600 font-['Manrope'] font-medium text-sm transition-colors hover:text-emerald-500" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-outline hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/30">
                <div class="text-right">
                    <p id="nav-user-name" class="text-xs font-bold text-on-surface">Loading...</p>
                    <p id="nav-user-role" class="text-[10px] text-on-surface-variant uppercase tracking-tighter">--</p>
                </div>
                <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary/10" src="https://ui-avatars.com/api/?name=Coach&background=0f5238&color=fff" />
            </div>
        </div>
    </header>
    
    <main class="ml-64 p-8 min-h-[calc(100vh-4rem)]">
        <!-- Content Header -->
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Matchday Squad</h2>
                <p id="match-info" class="text-on-surface-variant font-label mt-1">Loading match information...</p>
            </div>
            <div class="flex gap-3">
                <select id="formation-select" class="bg-surface-container-lowest px-4 py-2.5 rounded-xl font-label text-sm font-semibold text-on-surface shadow-sm border border-outline-variant/10">
                    <option value="4-3-3">4-3-3 Attack</option>
                    <option value="4-4-2">4-4-2 Diamond</option>
                    <option value="3-5-2">3-5-2 Wing Back</option>
                    <option value="4-2-3-1">4-2-3-1 Possession</option>
                </select>
                <button id="save-lineup" class="bg-primary text-on-primary px-6 py-2.5 rounded-xl font-headline font-bold text-sm flex items-center gap-2 hover:opacity-90 transition-opacity">
                    Save Lineup <span class="material-symbols-outlined text-sm">check_circle</span>
                </button>
            </div>
        </div>
        
        <div class="grid grid-cols-12 gap-8 items-start">
            <!-- Tactical Pitch Area -->
            <div class="col-span-12 lg:col-span-8">
                <div class="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl shadow-primary/10 bg-gradient-to-br from-primary to-primary-container p-6">
                    <div class="absolute inset-0 opacity-10 pitch-pattern"></div>
                    <div class="absolute inset-6 border-2 border-white/30 rounded-lg pointer-events-none">
                        <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-white/30"></div>
                        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 border-2 border-white/30 rounded-full"></div>
                        <div class="absolute left-0 top-1/4 bottom-1/4 w-32 border-2 border-l-0 border-white/30"></div>
                        <div class="absolute right-0 top-1/4 bottom-1/4 w-32 border-2 border-r-0 border-white/30"></div>
                    </div>
                    <div id="pitch-container" class="relative h-full w-full">
                        <div class="absolute inset-0 flex items-center justify-center text-white/50">Loading lineup...</div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6 flex justify-between">
                        <div class="flex gap-4">
                            <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl">
                                <p class="text-[10px] text-white/60 uppercase font-bold tracking-widest">Avg Age</p>
                                <p id="avg-age" class="text-xl font-headline font-bold text-white">--</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl">
                                <p class="text-[10px] text-white/60 uppercase font-bold tracking-widest">Avg GPA</p>
                                <p id="avg-gpa" class="text-xl font-headline font-bold text-tertiary-fixed-dim">--</p>
                            </div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl flex items-center gap-3">
                            <span class="material-symbols-outlined text-white/60">psychology</span>
                            <span id="tactical-focus" class="text-sm font-bold text-white uppercase tracking-wider">Tactical Focus</span>
                        </div>
                    </div>
                </div>
                
                <!-- Bench Section -->
                <div class="mt-8 grid grid-cols-3 gap-6">
                    <div class="col-span-2 bg-surface-container-low rounded-3xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-headline font-bold text-lg text-on-surface">Substitutes</h3>
                            <span id="sub-count" class="text-xs font-bold text-primary bg-primary-fixed px-3 py-1 rounded-full">0 / 7</span>
                        </div>
                        <div id="bench-container" class="flex gap-4 overflow-x-auto pb-2">
                            <div class="text-center text-outline py-4 w-full">No substitutes selected</div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-surface-container-lowest rounded-3xl p-6 shadow-sm border border-outline-variant/10">
                        <h3 class="font-headline font-bold text-lg text-on-surface mb-2">Tactical Note</h3>
                        <p id="tactical-note" class="text-xs text-on-surface-variant leading-relaxed">Loading tactical notes...</p>
                        <button class="mt-4 text-xs font-bold text-primary flex items-center gap-1">Edit Notes <span class="material-symbols-outlined text-sm">edit</span></button>
                    </div>
                </div>
            </div>
            
            <!-- Player Sidebar -->
            <div class="col-span-12 lg:col-span-4 space-y-6">
                <div class="bg-surface-container-low rounded-3xl p-6 flex flex-col h-full max-h-[800px]">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-headline font-bold text-xl text-on-surface">Available Squad</h3>
                        <span class="material-symbols-outlined text-outline cursor-pointer">filter_list</span>
                    </div>
                    <div class="flex gap-2 mb-6 overflow-x-auto pb-2">
                        <button data-filter="all" class="filter-btn active bg-primary text-on-primary px-4 py-1.5 rounded-full text-xs font-bold shrink-0">All</button>
                        <button data-filter="GK" class="filter-btn bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">GK</button>
                        <button data-filter="DEF" class="filter-btn bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">DEF</button>
                        <button data-filter="MID" class="filter-btn bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">MID</button>
                        <button data-filter="FWD" class="filter-btn bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">FWD</button>
                    </div>
                    <div id="players-list" class="space-y-3 overflow-y-auto pr-2 custom-scrollbar flex-1">
                        <div class="text-center text-outline py-8">Loading players...</div>
                    </div>
                    <div class="mt-auto pt-6">
                        <div class="bg-primary/5 p-4 rounded-2xl border border-primary/10">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary">info</span>
                                <p class="text-xs font-bold text-on-surface">Squad Readiness</p>
                            </div>
                            <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                                <div id="readiness-bar" class="bg-primary h-full w-0"></div>
                            </div>
                            <p id="readiness-text" class="text-[10px] text-on-surface-variant mt-2">Loading fitness data...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allPlayers = [];
        let teamPlayers = [];
        let startingXI = [];
        let substitutes = [];
        let currentUser = null;
        let currentTeam = null;
        let currentMatch = null;
        let currentFormation = '4-3-3';
        
        const formationPositions = {
            '4-3-3': [
                { pos: 'GK', x: 50, y: 85, abbr: 'GK' },
                { pos: 'LB', x: 15, y: 65, abbr: 'LB' },
                { pos: 'CB', x: 35, y: 65, abbr: 'CB' },
                { pos: 'CB', x: 65, y: 65, abbr: 'CB' },
                { pos: 'RB', x: 85, y: 65, abbr: 'RB' },
                { pos: 'CM', x: 50, y: 50, abbr: 'CDM' },
                { pos: 'CM', x: 30, y: 40, abbr: 'CM' },
                { pos: 'CM', x: 70, y: 40, abbr: 'CM' },
                { pos: 'LW', x: 15, y: 25, abbr: 'LW' },
                { pos: 'ST', x: 50, y: 20, abbr: 'ST' },
                { pos: 'RW', x: 85, y: 25, abbr: 'RW' }
            ]
        };
        
        function getHeaders() {
            const token = localStorage.getItem('token');
            return { 'Authorization': token ? `Bearer ${token}` : '', 'Content-Type': 'application/json', 'Accept': 'application/json' };
        }

        async function fetchAPI(endpoint, options = {}) {
            const response = await fetch(`${API_BASE}${endpoint}`, { headers: getHeaders(), ...options });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function loadData() {
            try {
                currentUser = await fetchAPI('/current-user');
                console.log('User data:', currentUser)
                console.log('User team:', currentUser.team);
                
                document.getElementById('nav-user-name').innerText = currentUser.name?.split(' ')[0] || 'Coach';
                document.getElementById('nav-user-avatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(currentUser.name || 'Coach')}&background=0f5238&color=fff&size=40`;
                
                if (currentUser.team) {
                    currentTeam = currentUser.team;
                    document.getElementById('nav-user-role').innerText = currentTeam.name;
                    console.log('Team loaded from relationship:', currentTeam);
                } else {
                    console.log('No team found for this coach');
                    document.getElementById('nav-user-role').innerText = 'No Team Assigned';
                    currentTeam = null;
                }
                console.log('Final team data:', currentTeam);
                
                // Get players in the team
                const playersRes = await fetchAPI('/player');
                const allPlayersRes = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);
                teamPlayers = allPlayersRes.filter(p => p.team_id === currentTeam?.id);
                // console.log('Team players:', teamPlayers);
                
                // Enhance with user data
                for (let player of teamPlayers) {
                    try {
                        // console.log(player.user_id)
                        const userData = await fetchAPI(`/users/${player.user_id}`);
                        console.log(userData)
                        player.user = userData;
                    } catch(e) {
                        console.log(e)
                    }
                }
                // console.log('Team players with user data:', teamPlayers);
                
                // Get next match
                const matchesRes = await fetchAPI('/matches');
                const matches = Array.isArray(matchesRes) ? matchesRes : (matchesRes.data || []);
                const now = new Date();
                currentMatch = matches.find(m => {
                    const matchDate = new Date(m.match_date || m.date);
                    return matchDate > now && (m.home_team_id === currentTeam?.id || m.away_team_id === currentTeam?.id);
                });
                
                // Get existing lineup for this match
                if (currentMatch) {
                    const lineupsRes = await fetchAPI('/lineup');
                    const lineups = Array.isArray(lineupsRes) ? lineupsRes : (lineupsRes.data || []);
                    const existingLineup = lineups.find(l => l.game_play_id === currentMatch.id && l.team_id === currentTeam?.id);
                    
                    if (existingLineup) {
                        const lineupPlayersRes = await fetchAPI('/lineup-players');
                        const allLineupPlayers = Array.isArray(lineupPlayersRes) ? lineupPlayersRes : (lineupPlayersRes.data || []);
                        const lineupPlayersList = allLineupPlayers.filter(lp => lp.lineup_id === existingLineup.id);
                        
                        startingXI = lineupPlayersList.filter(lp => lp.is_starter).slice(0, 11);
                        substitutes = lineupPlayersList.filter(lp => !lp.is_starter);
                    }
                }
                
                updateMatchInfo();
                renderPlayersList();
                renderPitch();
                renderBench();
                updateStats();
                setupEventListeners();
                
            } catch(err) {
                console.error("Failed to load data:", err);
                document.getElementById('players-list').innerHTML = '<div class="text-center text-error py-8">Failed to load players</div>';
            }
        }
        
        function updateMatchInfo() {
            const matchInfo = document.getElementById('match-info');
            if (currentMatch) {
                const isHome = currentMatch.home_team_id === currentTeam?.id;
                const opponent = isHome ? currentMatch.away_team?.name || 'Opponent' : currentMatch.home_team?.name || 'Opponent';
                const date = new Date(currentMatch.match_date || currentMatch.date);
                matchInfo.innerHTML = `${currentTeam?.name || 'Your Team'} vs. ${opponent} — ${date.toLocaleDateString()}`;
            } else {
                matchInfo.innerHTML = 'No upcoming matches scheduled';
            }
        }
        
        function renderPlayersList() {
            const container = document.getElementById('players-list');
            const starterIds = new Set(startingXI.map(p => p.player_id));
            const subIds = new Set(substitutes.map(p => p.player_id));
            
            if (teamPlayers.length === 0) {
                container.innerHTML = '<div class="text-center text-outline py-8">No players found in your team</div>';
                return;
            }
            
            container.innerHTML = teamPlayers.map(player => {
                const isStarter = starterIds.has(player.id);
                const isSub = subIds.has(player.id);
                const position = player.position || 'MID';
                let positionClass = 'bg-surface-container-highest';
                if (position === 'GK') positionClass = 'bg-secondary-fixed text-secondary';
                else if (position === 'DEF') positionClass = 'bg-primary-fixed text-primary';
                else if (position === 'MID') positionClass = 'bg-tertiary-fixed text-tertiary-container';
                else positionClass = 'bg-primary-fixed text-primary';
                
                return `
                    <div class="bg-surface-container-lowest p-3 rounded-xl flex items-center justify-between group hover:shadow-md transition-all player-card" data-player-id="${player.id}" data-position="${player.position || 'MID'}">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">${player.user?.name?.charAt(0) || 'P'}</div>
                                <span class="absolute -top-1 -right-1 w-3 h-3 ${player.is_eligible !== false ? 'bg-emerald-500' : 'bg-error'} rounded-full border-2 border-white"></span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-on-surface">${player.user?.name || `Player ${player.id}`}</h4>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="text-[10px] font-bold ${positionClass} px-1.5 py-0.5 rounded uppercase">${position}</span>
                                    <span class="text-[10px] text-on-surface-variant">#${player.jersey_number || '?'}</span>
                                </div>
                            </div>
                        </div>
                        ${isStarter ? 
                            `<button class="remove-from-lineup w-8 h-8 rounded-full bg-error/10 text-error flex items-center justify-center" data-id="${player.id}">
                                <span class="material-symbols-outlined text-sm">remove</span>
                            </button>` :
                            `<button class="add-to-lineup w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center" data-id="${player.id}">
                                <span class="material-symbols-outlined text-sm">add</span>
                            </button>`
                        }
                    </div>
                `;
            }).join('');
            
            // Add event listeners to buttons
            document.querySelectorAll('.add-to-lineup').forEach(btn => {
                btn.addEventListener('click', () => addToLineup(parseInt(btn.dataset.id)));
            });
            document.querySelectorAll('.remove-from-lineup').forEach(btn => {
                btn.addEventListener('click', () => removeFromLineup(parseInt(btn.dataset.id)));
            });
        }
        
        function addToLineup(playerId) {
            const player = teamPlayers.find(p => p.id === playerId);
            if (!player) return;
            
            if (startingXI.filter(p => p !== null).length >= 11) {
                if (substitutes.length < 7) {
                    substitutes.push({ player_id: playerId, is_starter: false, position: player?.position || 'SUB' });
                    renderBench();
                    renderPlayersList();
                } else {
                    alert('Maximum 11 starters and 7 substitutes allowed');
                }
            } else {
                // Find the correct position index based on player's actual position
                const positions = formationPositions[currentFormation] || formationPositions['4-3-3'];
                let targetIndex = -1;
                
                // Map player position to formation position
                const playerPos = (player?.position || 'MID').toUpperCase();
                console.log(`Adding player ${player?.user?.name} with position: ${playerPos}`);
                
                if (playerPos === 'GK') {
                    targetIndex = positions.findIndex(p => p.pos === 'GK');
                } else if (playerPos === 'LB' || playerPos === 'LWB') {
                    targetIndex = positions.findIndex(p => p.pos === 'LB');
                } else if (playerPos === 'RB' || playerPos === 'RWB') {
                    targetIndex = positions.findIndex(p => p.pos === 'RB');
                } else if (playerPos === 'CB' || playerPos === 'LCB' || playerPos === 'RCB') {
                    // Find first available CB position
                    const cbIndices = positions.map((p, idx) => p.pos === 'CB' ? idx : -1).filter(idx => idx !== -1);
                    targetIndex = cbIndices.find(idx => !startingXI[idx]) || cbIndices[0];
                } else if (playerPos === 'CDM' || playerPos === 'DM') {
                    targetIndex = positions.findIndex(p => p.pos === 'CM' && p.abbr === 'CDM');
                } else if (playerPos === 'CM' || playerPos === 'LM' || playerPos === 'RM') {
                    // Find first available CM position (not CDM)
                    const cmIndices = positions.map((p, idx) => p.pos === 'CM' && p.abbr === 'CM' ? idx : -1).filter(idx => idx !== -1);
                    targetIndex = cmIndices.find(idx => !startingXI[idx]) || cmIndices[0];
                } else if (playerPos === 'LW' || playerPos === 'LM' || playerPos === 'LF') {
                    targetIndex = positions.findIndex(p => p.pos === 'LW');
                } else if (playerPos === 'RW' || playerPos === 'RM' || playerPos === 'RF') {
                    targetIndex = positions.findIndex(p => p.pos === 'RW');
                } else if (playerPos === 'ST' || playerPos === 'CF' || playerPos === 'CAM') {
                    targetIndex = positions.findIndex(p => p.pos === 'ST');
                } else if (playerPos === 'DEF') {
                    // Handle general DEF position - find first available defensive position
                    const defIndices = positions.map((p, idx) => 
                        (p.pos === 'LB' || p.pos === 'RB' || p.pos === 'CB') ? idx : -1
                    ).filter(idx => idx !== -1);
                    targetIndex = defIndices.find(idx => !startingXI[idx]) || defIndices[0];
                } else if (playerPos === 'MID') {
                    // Handle general MID position - find first available midfield position
                    const midIndices = positions.map((p, idx) => 
                        (p.pos === 'CM' || p.pos === 'LW' || p.pos === 'RW') ? idx : -1
                    ).filter(idx => idx !== -1);
                    targetIndex = midIndices.find(idx => !startingXI[idx]) || midIndices[0];
                } else if (playerPos === 'FWD') {
                    // Handle general FWD position - find first available attacking position
                    const fwdIndices = positions.map((p, idx) => 
                        (p.pos === 'LW' || p.pos === 'RW' || p.pos === 'ST') ? idx : -1
                    ).filter(idx => idx !== -1);
                    targetIndex = fwdIndices.find(idx => !startingXI[idx]) || fwdIndices[0];
                } else {
                    // Default: find first empty position
                    targetIndex = startingXI.findIndex(p => p === null);
                    if (targetIndex === -1) targetIndex = startingXI.length;
                }
                
                console.log(`Target index for ${playerPos}: ${targetIndex}`);
                
                // If position is already taken, find first empty slot
                if (targetIndex !== -1 && startingXI[targetIndex]) {
                    targetIndex = startingXI.findIndex(p => p === null);
                    if (targetIndex === -1) targetIndex = startingXI.length;
                }
                
                // If still no valid index, append to end
                if (targetIndex === -1) targetIndex = startingXI.length;
                
                // Insert player at the correct position
                startingXI[targetIndex] = { player_id: playerId, is_starter: true, position: player?.position || 'MID' };
                
                renderPitch();
                renderPlayersList();
                updateStats();
            }
        }
        
        function removeFromLineup(playerId) {
            const starterIndex = startingXI.findIndex(p => p && p.player_id === playerId);
            if (starterIndex !== -1) {
                startingXI[starterIndex] = null; // Set to null instead of splicing to preserve positions
            }
            const subIndex = substitutes.findIndex(p => p.player_id === playerId);
            if (subIndex !== -1) {
                substitutes.splice(subIndex, 1);
            }
            renderPitch();
            renderBench();
            renderPlayersList();
            updateStats();
        }
        
        function renderPitch() {
            const container = document.getElementById('pitch-container');
            const positions = formationPositions[currentFormation] || formationPositions['4-3-3'];
            
            if (startingXI.filter(p => p !== null).length === 0) {
                container.innerHTML = '<div class="absolute inset-0 flex items-center justify-center text-white/50 text-sm">Drag players from the sidebar to build your lineup</div>';
                return;
            }
            
            let pitchHtml = '';
            positions.forEach((pos, idx) => {
                const player = startingXI[idx];
                const playerData = player ? teamPlayers.find(p => p.id === player.player_id) : null;
                const playerName = playerData?.user?.name?.split(' ')[0] || 'Empty';
                
                pitchHtml += `
                    <div class="absolute transform -translate-x-1/2 -translate-y-1/2 transition-all hover:scale-110" style="left: ${pos.x}%; top: ${pos.y}%;">
                        <div class="relative">
                            <div class="w-12 h-12 rounded-full ${player ? 'bg-secondary-container shadow-[0_0_20px_rgba(143,167,254,0.5)] ring-2 ring-on-primary/20' : 'bg-white/20 backdrop-blur-sm border-2 border-white/30'} flex items-center justify-center">
                                <span class="text-xs font-bold text-on-primary">${player ? (playerData?.jersey_number || '?') : pos.abbr}</span>
                            </div>
                            <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 whitespace-nowrap text-[8px] font-bold text-white/80 bg-black/30 px-1.5 py-0.5 rounded-full">
                                ${player ? playerName : pos.abbr}
                            </div>
                        </div>
                    </div>
                `;
            });
            
            container.innerHTML = pitchHtml;
        }
        
        function renderBench() {
            const container = document.getElementById('bench-container');
            const subCount = document.getElementById('sub-count');
            subCount.innerHTML = `${substitutes.length} / 7`;
            
            if (substitutes.length === 0) {
                container.innerHTML = '<div class="text-center text-outline py-4 w-full">No substitutes selected</div>';
                return;
            }
            
            container.innerHTML = substitutes.map(sub => {
                const player = teamPlayers.find(p => p.id === sub.player_id);
                return `
                    <div class="bg-surface-container-lowest p-3 rounded-2xl shadow-sm border border-outline-variant/10 flex items-center gap-3 min-w-[180px]">
                        <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-primary font-bold">${player?.user?.name?.charAt(0) || 'P'}</div>
                        <div class="flex-1">
                            <p class="text-xs font-bold">${player?.user?.name?.split(' ')[0] || 'Player'}</p>
                            <p class="text-[10px] text-on-surface-variant">${player?.position || 'MID'} · #${player?.jersey_number || '?'}</p>
                        </div>
                        <button class="remove-from-bench text-error" data-id="${player?.id}">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </button>
                    </div>
                `;
            }).join('');
            
            document.querySelectorAll('.remove-from-bench').forEach(btn => {
                btn.addEventListener('click', () => removeFromLineup(parseInt(btn.dataset.id)));
            });
        }
        
        function updateStats() {
            const starterPlayers = startingXI.map(s => teamPlayers.find(p => p.id === s.player_id)).filter(p => p);
            const avgAge = starterPlayers.length ? (starterPlayers.reduce((a, p) => a + (p.age || 18), 0) / starterPlayers.length).toFixed(1) : '--';
            document.getElementById('avg-age').innerHTML = avgAge;
            
            // Get GPA data from grades
            const fitnessPercent = Math.min(95, 75 + starterPlayers.length * 2);
            document.getElementById('readiness-bar').style.width = `${fitnessPercent}%`;
            document.getElementById('readiness-text').innerHTML = `${fitnessPercent}% of squad is fit for full 90 minutes`;
            document.getElementById('tactical-focus').innerHTML = currentFormation === '4-3-3' ? 'Direct Play' : 'Possession Based';
            document.getElementById('tactical-note').innerHTML = starterPlayers.length >= 11 ? 
                'Full lineup selected. Ensure players are briefed on tactical responsibilities.' : 
                `Select ${11 - starterPlayers.length} more players to complete your starting XI.`;
        }
        
        async function saveLineup() {
            if (!currentMatch) {
                alert('No upcoming match found. Cannot save lineup.');
                return;
            }
            
            try {
                // First create or get lineup
                let lineupId = null;
                const existingLineups = await fetchAPI('/lineup');
                const lineups = Array.isArray(existingLineups) ? existingLineups : (existingLineups.data || []);
                const existing = lineups.find(l => l.game_play_id === currentMatch.id && l.team_id === currentTeam?.id);
                
                if (existing) {
                    lineupId = existing.id;
                } else {
                    const newLineup = await fetchAPI('/lineup', {
                        method: 'POST',
                        body: JSON.stringify({
                            game_play_id: currentMatch.id,
                            team_id: currentTeam?.id
                        })
                    });
                    lineupId = newLineup.id || newLineup.data?.id;
                }
                
                if (lineupId) {
                    // Save all lineup players
                    for (let player of [...startingXI, ...substitutes]) {
                        await fetchAPI('/lineup-players', {
                            method: 'POST',
                            body: JSON.stringify({
                                lineup_id: lineupId,
                                player_id: player.player_id,
                                position: player.position || 'SUB',
                                is_starter: player.is_starter
                            })
                        });
                    }
                    alert(`Lineup saved! ${startingXI.length} starters, ${substitutes.length} substitutes.`);
                }
            } catch(err) {
                console.error("Failed to save lineup:", err);
                alert("Failed to save lineup. Please try again.");
            }
        }
        
        function setupEventListeners() {
            document.getElementById('formation-select').addEventListener('change', (e) => {
                currentFormation = e.target.value;
                renderPitch();
                updateStats();
            });
            
            document.getElementById('save-lineup').addEventListener('click', saveLineup);
            
            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const cards = document.querySelectorAll('.player-card');
                cards.forEach(card => {
                    const name = card.querySelector('h4')?.textContent.toLowerCase() || '';
                    card.style.display = name.includes(term) ? '' : 'none';
                });
            });
            
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.filter-btn').forEach(b => {
                        b.classList.remove('bg-primary', 'text-on-primary');
                        b.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
                    });
                    btn.classList.add('bg-primary', 'text-on-primary');
                    btn.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
                    
                    const filter = btn.dataset.filter;
                    const cards = document.querySelectorAll('.player-card');
                    cards.forEach(card => {
                        if (filter === 'all' || card.dataset.position === filter) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }
        
        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadData();
        });
    </script>
</body>
</html>