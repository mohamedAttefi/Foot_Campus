@extends('layouts.app')

@section('content')
<div class="p-8 space-y-8">
    <!-- Header Section -->
    <div class="flex justify-between items-end">
        <div>
            <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold mb-1 block">Roster Management</span>
            <h2 class="text-3xl font-headline font-extrabold text-on-surface tracking-tight">Edit Lineup</h2>
            <p id="match-info" class="text-on-surface-variant mt-1 text-sm">Loading match information...</p>
        </div>
        <div class="flex gap-3">
            <button id="reset-changes" class="px-6 py-2.5 rounded-xl text-primary font-bold hover:bg-primary/5 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">undo</span>
                Reset Changes
            </button>
            <button id="save-lineup" class="px-8 py-2.5 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">save</span>
                Save Lineup
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
            
            <!-- Tactical Controls -->
            <div class="mt-8 grid grid-cols-2 gap-6">
                <div class="bg-surface-container-low rounded-2xl p-6">
                    <h4 class="font-headline font-bold text-sm mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">settings_input_component</span>
                        Formation Presets
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        <button class="formation-btn px-4 py-2 bg-primary text-white text-xs font-bold rounded-full" data-formation="4-3-3">4-3-3 Attack</button>
                        <button class="formation-btn px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors" data-formation="4-4-2">4-4-2 Solid</button>
                        <button class="formation-btn px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors" data-formation="3-5-2">3-5-2 Wide</button>
                        <button class="formation-btn px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors" data-formation="4-2-3-1">4-2-3-1</button>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-2xl p-6">
                    <h4 class="font-headline font-bold text-sm mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">bolt</span>
                        Quick Actions
                    </h4>
                    <div class="space-y-2">
                        <button id="auto-optimize" class="w-full text-left px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-lg flex justify-between items-center group hover:bg-secondary-fixed transition-all">
                            Auto-Optimize Lineup
                            <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 transition-opacity">auto_awesome</span>
                        </button>
                        <button id="clear-all" class="w-full text-left px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-lg flex justify-between items-center group hover:bg-secondary-fixed transition-all">
                            Clear All Positions
                            <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 transition-opacity">delete</span>
                        </button>
                    </div>
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
</div>

<script>
    const EDIT_LINEUP_API_BASE = 'http://127.0.0.1:8000/api';
    let allPlayers = [];
    let teamPlayers = [];
    let startingXI = [];
    let substitutes = [];
    let currentUser = null;
    let currentTeam = null;
    let currentMatch = null;
    let currentLineup = null;
    let currentFormation = '4-3-3';
    let originalLineup = null; // For reset functionality
    
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
        ],
        '4-4-2': [
            { pos: 'GK', x: 50, y: 85, abbr: 'GK' },
            { pos: 'LB', x: 15, y: 65, abbr: 'LB' },
            { pos: 'CB', x: 35, y: 65, abbr: 'CB' },
            { pos: 'CB', x: 65, y: 65, abbr: 'CB' },
            { pos: 'RB', x: 85, y: 65, abbr: 'RB' },
            { pos: 'LM', x: 15, y: 45, abbr: 'LM' },
            { pos: 'CM', x: 35, y: 45, abbr: 'CM' },
            { pos: 'CM', x: 65, y: 45, abbr: 'CM' },
            { pos: 'RM', x: 85, y: 45, abbr: 'RM' },
            { pos: 'ST', x: 35, y: 25, abbr: 'ST' },
            { pos: 'ST', x: 65, y: 25, abbr: 'ST' }
        ],
        '3-5-2': [
            { pos: 'GK', x: 50, y: 85, abbr: 'GK' },
            { pos: 'CB', x: 35, y: 70, abbr: 'CB' },
            { pos: 'CB', x: 50, y: 70, abbr: 'CB' },
            { pos: 'CB', x: 65, y: 70, abbr: 'CB' },
            { pos: 'LWB', x: 10, y: 50, abbr: 'LWB' },
            { pos: 'CM', x: 30, y: 50, abbr: 'CM' },
            { pos: 'CM', x: 50, y: 50, abbr: 'CM' },
            { pos: 'CM', x: 70, y: 50, abbr: 'CM' },
            { pos: 'RWB', x: 90, y: 50, abbr: 'RWB' },
            { pos: 'ST', x: 35, y: 25, abbr: 'ST' },
            { pos: 'ST', x: 65, y: 25, abbr: 'ST' }
        ],
        '4-2-3-1': [
            { pos: 'GK', x: 50, y: 85, abbr: 'GK' },
            { pos: 'LB', x: 15, y: 65, abbr: 'LB' },
            { pos: 'CB', x: 35, y: 65, abbr: 'CB' },
            { pos: 'CB', x: 65, y: 65, abbr: 'CB' },
            { pos: 'RB', x: 85, y: 65, abbr: 'RB' },
            { pos: 'CDM', x: 35, y: 50, abbr: 'CDM' },
            { pos: 'CDM', x: 65, y: 50, abbr: 'CDM' },
            { pos: 'LW', x: 15, y: 30, abbr: 'LW' },
            { pos: 'CAM', x: 50, y: 35, abbr: 'CAM' },
            { pos: 'RW', x: 85, y: 30, abbr: 'RW' },
            { pos: 'ST', x: 50, y: 20, abbr: 'ST' }
        ]
    };
    
    function getHeaders() {
        const token = localStorage.getItem('token');
        return { 'Authorization': token ? `Bearer ${token}` : '', 'Content-Type': 'application/json', 'Accept': 'application/json' };
    }

    async function fetchAPI(endpoint, options = {}) {
        const response = await fetch(`${EDIT_LINEUP_API_BASE}${endpoint}`, { headers: getHeaders(), ...options });
        if (!response.ok) throw new Error(`API Error ${response.status}`);
        
        const text = await response.text();
        if (!text) {
            console.warn('Empty response from API:', endpoint);
            return null;
        }
        
        try {
            return JSON.parse(text);
        } catch (error) {
            console.error('Invalid JSON response:', text, 'from endpoint:', endpoint);
            throw new Error(`Invalid JSON response from ${endpoint}`);
        }
    }

    async function loadEditLineupData() {
        try {
            // Get lineup ID from URL
            const urlParams = new URLSearchParams(window.location.search);
            const lineupId = urlParams.get('id');
            
            if (!lineupId) {
                showError('No lineup ID provided');
                return;
            }

            currentUser = await fetchAPI('/current-user');
            console.log('User data:', currentUser)
            
            if (currentUser.team) {
                currentTeam = currentUser.team;
                console.log('Team loaded from relationship:', currentTeam);
            } else {
                console.log('No team found for this coach');
                currentTeam = null;
            }
            
            // Load current lineup
            currentLineup = await fetchAPI(`/lineup/${lineupId}`);
            console.log('Current lineup:', currentLineup);
            
            // Store original lineup for reset
            originalLineup = JSON.parse(JSON.stringify(currentLineup));
            
            // Get players in the team
            const playersRes = await fetchAPI('/player');
            const allPlayersRes = Array.isArray(playersRes) ? playersRes : (playersRes.data || []);
            teamPlayers = allPlayersRes.filter(p => p.team_id === currentTeam?.id);
            
            // Enhance with user data
            for (let player of teamPlayers) {
                try {
                    const userData = await fetchAPI(`/users/${player.user_id}`);
                    player.user = userData;
                } catch(e) {
                    console.log(e)
                }
            }
            
            // Get match information
            if (currentLineup.game_play_id) {
                currentMatch = await fetchAPI(`/matches/${currentLineup.game_play_id}`);
            }
            
            // Load existing lineup players
            const lineupPlayersRes = await fetchAPI('/lineup-players');
            const allLineupPlayers = Array.isArray(lineupPlayersRes) ? lineupPlayersRes : (lineupPlayersRes.data || []);
            const lineupPlayersList = allLineupPlayers.filter(lp => lp.lineup_id === currentLineup.id);
            
            startingXI = lineupPlayersList.filter(lp => lp.is_starter).slice(0, 11);
            substitutes = lineupPlayersList.filter(lp => !lp.is_starter);
            
            updateMatchInfo();
            renderPlayersList();
            renderPitch();
            updateStats();
            setupEventListeners();
            
        } catch(err) {
            console.error("Failed to load lineup data:", err);
            showError('Failed to load lineup data. Please refresh the page.');
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
            matchInfo.innerHTML = 'Edit Lineup';
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
                    ${isStarter || isSub ? 
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
                renderPlayersList();
                updateStats();
            } else {
                showError('Maximum 11 starters and 7 substitutes allowed');
            }
        } else {
            // Find the correct position index based on player's actual position
            const positions = formationPositions[currentFormation] || formationPositions['4-3-3'];
            let targetIndex = -1;
            
            // Map player position to formation position
            const playerPos = (player?.position || 'MID').toUpperCase();
            
            if (playerPos === 'GK') {
                targetIndex = positions.findIndex(p => p.pos === 'GK');
            } else if (playerPos === 'LB' || playerPos === 'LWB') {
                targetIndex = positions.findIndex(p => p.pos === 'LB' || p.pos === 'LWB');
            } else if (playerPos === 'RB' || playerPos === 'RWB') {
                targetIndex = positions.findIndex(p => p.pos === 'RB' || p.pos === 'RWB');
            } else if (playerPos === 'CB' || playerPos === 'LCB' || playerPos === 'RCB') {
                const cbIndices = positions.map((p, idx) => p.pos === 'CB' ? idx : -1).filter(idx => idx !== -1);
                targetIndex = cbIndices.find(idx => !startingXI[idx]) || cbIndices[0];
            } else if (playerPos === 'CDM' || playerPos === 'DM') {
                targetIndex = positions.findIndex(p => p.pos === 'CDM');
            } else if (playerPos === 'CM' || playerPos === 'LM' || playerPos === 'RM') {
                const cmIndices = positions.map((p, idx) => (p.pos === 'CM' || p.pos === 'LM' || p.pos === 'RM') ? idx : -1).filter(idx => idx !== -1);
                targetIndex = cmIndices.find(idx => !startingXI[idx]) || cmIndices[0];
            } else if (playerPos === 'LW' || playerPos === 'LM' || playerPos === 'LF') {
                targetIndex = positions.findIndex(p => p.pos === 'LW' || p.pos === 'LM');
            } else if (playerPos === 'RW' || playerPos === 'RM' || playerPos === 'RF') {
                targetIndex = positions.findIndex(p => p.pos === 'RW' || p.pos === 'RM');
            } else if (playerPos === 'ST' || playerPos === 'CF' || playerPos === 'CAM') {
                targetIndex = positions.findIndex(p => p.pos === 'ST' || p.pos === 'CAM');
            } else if (playerPos === 'DEF') {
                const defIndices = positions.map((p, idx) => 
                    (p.pos === 'LB' || p.pos === 'RB' || p.pos === 'CB' || p.pos === 'LWB' || p.pos === 'RWB') ? idx : -1
                ).filter(idx => idx !== -1);
                targetIndex = defIndices.find(idx => !startingXI[idx]) || defIndices[0];
            } else if (playerPos === 'MID') {
                const midIndices = positions.map((p, idx) => 
                    (p.pos === 'CM' || p.pos === 'LM' || p.pos === 'RM' || p.pos === 'CDM' || p.pos === 'CAM') ? idx : -1
                ).filter(idx => idx !== -1);
                targetIndex = midIndices.find(idx => !startingXI[idx]) || midIndices[0];
            } else if (playerPos === 'FWD') {
                const fwdIndices = positions.map((p, idx) => 
                    (p.pos === 'LW' || p.pos === 'RW' || p.pos === 'ST') ? idx : -1
                ).filter(idx => idx !== -1);
                targetIndex = fwdIndices.find(idx => !startingXI[idx]) || fwdIndices[0];
            } else {
                targetIndex = startingXI.findIndex(p => p === null);
                if (targetIndex === -1) targetIndex = startingXI.length;
            }
            
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
            startingXI[starterIndex] = null;
        }
        const subIndex = substitutes.findIndex(p => p.player_id === playerId);
        if (subIndex !== -1) {
            substitutes.splice(subIndex, 1);
        }
        renderPitch();
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
            const playerName = playerData?.user?.name;
            
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
    
    function updateStats() {
        const totalPlayers = startingXI.filter(p => p !== null).length + substitutes.length;
        document.getElementById('readiness-bar').style.width = `${(totalPlayers / 18) * 100}%`;
        document.getElementById('readiness-text').textContent = `${totalPlayers}/18 players selected`;
        
        // Update average stats (simplified)
        const selectedPlayers = [...startingXI.filter(p => p !== null), ...substitutes];
        if (selectedPlayers.length > 0) {
            document.getElementById('avg-age').textContent = '22'; // Placeholder
            document.getElementById('avg-gpa').textContent = '3.2'; // Placeholder
        }
    }
    
    async function saveLineup() {
        if (!currentLineup || !currentLineup.id) {
            showError('No lineup to save');
            return;
        }
        
        const totalPlayers = startingXI.filter(p => p !== null).length + substitutes.length;
        if (totalPlayers === 0) {
            showError('Please select at least one player');
            return;
        }
        
        try {
            // Delete existing lineup players
            const existingLineupPlayers = await fetchAPI('/lineup-players');
            const allLineupPlayers = Array.isArray(existingLineupPlayers) ? existingLineupPlayers : (existingLineupPlayers.data || []);
            const currentLineupPlayers = allLineupPlayers.filter(lp => lp.lineup_id === currentLineup.id);
            
            for (const lineupPlayer of currentLineupPlayers) {
                await fetchAPI(`/lineup-players/${lineupPlayer.id}`, { method: 'DELETE' });
            }
            
            // Add new lineup players
            const validStarters = startingXI.filter(p => p !== null);
            for (const starter of validStarters) {
                await fetchAPI('/lineup-players', {
                    method: 'POST',
                    body: JSON.stringify({
                        lineup_id: currentLineup.id,
                        player_id: starter.player_id,
                        position: starter.position,
                        is_starter: true
                    })
                });
            }
            
            for (const sub of substitutes) {
                await fetchAPI('/lineup-players', {
                    method: 'POST',
                    body: JSON.stringify({
                        lineup_id: currentLineup.id,
                        player_id: sub.player_id,
                        position: sub.position,
                        is_starter: false
                    })
                });
            }
            
            showSuccess('Lineup saved successfully!');
            
            // Update original lineup for reset functionality
            originalLineup = {
                ...currentLineup,
                startingXI: JSON.parse(JSON.stringify(startingXI)),
                substitutes: JSON.parse(JSON.stringify(substitutes))
            };
            
        } catch (error) {
            console.error('Failed to save lineup:', error);
            showError('Failed to save lineup. Please try again.');
        }
    }
    
    function resetChanges() {
        if (originalLineup && originalLineup.startingXI && originalLineup.substitutes) {
            startingXI = JSON.parse(JSON.stringify(originalLineup.startingXI));
            substitutes = JSON.parse(JSON.stringify(originalLineup.substitutes));
            
            renderPitch();
            renderPlayersList();
            updateStats();
            showSuccess('Changes reset to original lineup');
        }
    }
    
    function clearAll() {
        startingXI = new Array(11).fill(null);
        substitutes = [];
        
        renderPitch();
        renderPlayersList();
        updateStats();
    }
    
    function autoOptimize() {
        // Simple auto-optimization: pick best players for each position
        clearAll();
        
        const gk = teamPlayers.find(p => (p.position || 'MID').toUpperCase() === 'GK');
        if (gk) addToLineup(gk.id);
        
        const defenders = teamPlayers.filter(p => (p.position || 'MID').toUpperCase().includes('DEF')).slice(0, 4);
        defenders.forEach(d => addToLineup(d.id));
        
        const midfielders = teamPlayers.filter(p => (p.position || 'MID').toUpperCase().includes('MID')).slice(0, 3);
        midfielders.forEach(m => addToLineup(m.id));
        
        const forwards = teamPlayers.filter(p => (p.position || 'MID').toUpperCase().includes('FWD') || (p.position || 'MID').toUpperCase().includes('ST')).slice(0, 3);
        forwards.forEach(f => addToLineup(f.id));
        
        showSuccess('Lineup auto-optimized!');
    }
    
    function setupEventListeners() {
        // Save lineup button
        document.getElementById('save-lineup').addEventListener('click', saveLineup);
        
        // Reset changes button
        document.getElementById('reset-changes').addEventListener('click', resetChanges);
        
        // Clear all button
        document.getElementById('clear-all').addEventListener('click', clearAll);
        
        // Auto optimize button
        document.getElementById('auto-optimize').addEventListener('click', autoOptimize);
        
        // Formation buttons
        document.querySelectorAll('.formation-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentFormation = btn.dataset.formation;
                document.querySelectorAll('.formation-btn').forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-white', 'text-on-surface');
                });
                btn.classList.remove('bg-white', 'text-on-surface');
                btn.classList.add('bg-primary', 'text-white');
                
                renderPitch();
            });
        });
        
        // Filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('bg-primary', 'text-on-primary');
                    b.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
                });
                btn.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
                btn.classList.add('bg-primary', 'text-on-primary');
                
                const cards = document.querySelectorAll('.player-card');
                cards.forEach(card => {
                    const position = card.dataset.position;
                    if (filter === 'all' || position === filter) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
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
        loadEditLineupData();
    });
</script>
@endsection
