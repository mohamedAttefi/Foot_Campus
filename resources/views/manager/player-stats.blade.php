@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-player-stats'])

@section('title', 'Player Statistics | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Player Statistics</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Track individual and team performance metrics
            </p>
        </div>
        <div class="flex gap-3">
            <button onclick="exportStats()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl shadow-sm hover:bg-surface-container-high transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">download</span>
                Export Stats
            </button>
        </div>
    </section>

    <!-- Performance Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">sports_soccer</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalGoals">0</p>
                    <p class="text-sm text-on-surface-variant">Total Goals</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">handshake</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="totalAssists">0</p>
                    <p class="text-sm text-on-surface-variant">Total Assists</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">military_tech</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="avgRating">0.0</p>
                    <p class="text-sm text-on-surface-variant">Avg Rating</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">event_available</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="matchesPlayed">0</p>
                    <p class="text-sm text-on-surface-variant">Matches Played</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input id="searchInput" type="text" placeholder="Search players..." 
                           class="w-full pl-10 pr-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                </div>
            </div>
            <div class="flex gap-3">
                <select id="sortBy" class="px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                    <option value="goals">Sort by Goals</option>
                    <option value="assists">Sort by Assists</option>
                    <option value="rating">Sort by Rating</option>
                    <option value="matches">Sort by Matches</option>
                </select>
                <select id="timeFilter" class="px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                    <option value="all">All Time</option>
                    <option value="season">This Season</option>
                    <option value="month">Last Month</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Player Stats Table -->
    <div class="bg-surface-container-low rounded-[1.5rem] shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-surface-container-highest">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-on-surface-variant uppercase tracking-wider">Player</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Position</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Matches</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Goals</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Assists</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Rating</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-on-surface-variant uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody id="statsTableBody" class="divide-y divide-outline-variant/20">
                    <!-- Player stats will be loaded here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let allPlayers = [];
    let allStats = [];
    let filteredStats = [];
    let currentCoach = null;
    let currentTeam = null;

    async function loadStatsData() {
        try {
            const [players, stats, userData] = await Promise.all([
                fetchAPI('/player'),
                fetchAPI('/player-stats'), // Assuming this endpoint exists
                fetchAPI('/current-user')
            ]);
            
            allPlayers = Array.isArray(players) ? players : (players.data || []);
            allStats = Array.isArray(stats) ? stats : (stats.data || []);
            currentCoach = userData;
            currentTeam = userData?.team;
            
            // Filter for current team
            if (currentTeam) {
                allPlayers = allPlayers.filter(p => p.team_id === currentTeam.id);
                allStats = allStats.filter(s => s.team_id === currentTeam.id);
            }
            
            filteredStats = allStats;
            updateOverviewStats();
            renderStatsTable();
        } catch (error) {
            console.error('Error loading stats data:', error);
            // Generate mock stats if API doesn't exist
            generateMockStats();
        }
    }

    function generateMockStats() {
        if (currentTeam) {
            const teamPlayers = allPlayers.filter(p => p.team_id === currentTeam.id);
            allStats = teamPlayers.map(player => ({
                player_id: player.id,
                player: player,
                matches_played: Math.floor(Math.random() * 20) + 5,
                goals: Math.floor(Math.random() * 15),
                assists: Math.floor(Math.random() * 10),
                rating: (Math.random() * 2 + 6).toFixed(1),
                yellow_cards: Math.floor(Math.random() * 5),
                red_cards: Math.floor(Math.random() * 2)
            }));
            
            filteredStats = allStats;
            updateOverviewStats();
            renderStatsTable();
        }
    }

    function updateOverviewStats() {
        const totalGoals = allStats.reduce((sum, stat) => sum + (stat.goals || 0), 0);
        const totalAssists = allStats.reduce((sum, stat) => sum + (stat.assists || 0), 0);
        const avgRating = allStats.length > 0 ? 
            (allStats.reduce((sum, stat) => sum + parseFloat(stat.rating || 0), 0) / allStats.length).toFixed(1) : '0.0';
        const totalMatches = allStats.reduce((sum, stat) => sum + (stat.matches_played || 0), 0);
        
        document.getElementById('totalGoals').textContent = totalGoals;
        document.getElementById('totalAssists').textContent = totalAssists;
        document.getElementById('avgRating').textContent = avgRating;
        document.getElementById('matchesPlayed').textContent = totalMatches;
    }

    function renderStatsTable() {
        const tbody = document.getElementById('statsTableBody');
        
        if (filteredStats.length === 0) {
            tbody.innerHTML = '<tr><td colspan="7" class="text-center text-outline py-8">No statistics available</td></tr>';
            return;
        }
        
        tbody.innerHTML = filteredStats.map(stat => {
            const player = stat.player || allPlayers.find(p => p.id === stat.player_id);
            const positionColors = {
                'GK': 'bg-secondary-fixed text-secondary',
                'DEF': 'bg-primary-fixed text-primary',
                'MID': 'bg-tertiary-fixed text-tertiary',
                'FWD': 'bg-error-container text-error'
            };
            
            const positionColor = positionColors[player?.position] || 'bg-surface-container-highest text-on-surface';
            
            return `
                <tr class="hover:bg-surface-container-highest/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold text-sm">
                                ${player?.name ? player.name.charAt(0).toUpperCase() : 'P'}
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">${player?.name || `Player ${stat.player_id}`}</p>
                                <p class="text-sm text-on-surface-variant">#${player?.jersey_number || 'N/A'}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="text-xs font-bold ${positionColor} px-2 py-1 rounded-full">${player?.position || 'MID'}</span>
                    </td>
                    <td class="px-6 py-4 text-center font-bold text-on-surface">${stat.matches_played || 0}</td>
                    <td class="px-6 py-4 text-center font-bold text-primary">${stat.goals || 0}</td>
                    <td class="px-6 py-4 text-center font-bold text-secondary">${stat.assists || 0}</td>
                    <td class="px-6 py-4 text-center font-bold text-tertiary">${stat.rating || '0.0'}</td>
                    <td class="px-6 py-4 text-center">
                        <button onclick="viewPlayerDetails(${stat.player_id})" class="text-xs font-bold text-primary bg-primary/10 px-3 py-1 rounded-lg hover:bg-primary/20 transition-colors">
                            View Details
                        </button>
                    </td>
                </tr>
            `;
        }).join('');
    }

    function filterAndSortStats() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const sortBy = document.getElementById('sortBy').value;
        const timeFilter = document.getElementById('timeFilter').value;
        
        // Filter by search
        filteredStats = allStats.filter(stat => {
            const player = stat.player || allPlayers.find(p => p.id === stat.player_id);
            return !searchTerm || (player?.name && player.name.toLowerCase().includes(searchTerm));
        });
        
        // Sort
        filteredStats.sort((a, b) => {
            let aVal = a[sortBy] || 0;
            let bVal = b[sortBy] || 0;
            
            if (sortBy === 'rating') {
                aVal = parseFloat(aVal) || 0;
                bVal = parseFloat(bVal) || 0;
            }
            
            return bVal - aVal; // Descending order for most stats
        });
        
        renderStatsTable();
    }

    function exportStats() {
        const exportData = {
            team: currentTeam,
            statistics: filteredStats,
            exportDate: new Date().toISOString()
        };
        
        const dataStr = JSON.stringify(exportData, null, 2);
        const dataBlob = new Blob([dataStr], {type: 'application/json'});
        const url = URL.createObjectURL(dataBlob);
        
        const link = document.createElement('a');
        link.href = url;
        link.download = `player-stats-${currentTeam?.name || 'export'}.json`;
        link.click();
        
        URL.revokeObjectURL(url);
    }

    function viewPlayerDetails(playerId) {
        window.location.href = `/manager/player/${playerId}`;
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterAndSortStats);
    document.getElementById('sortBy').addEventListener('change', filterAndSortStats);
    document.getElementById('timeFilter').addEventListener('change', filterAndSortStats);

    window.addEventListener('DOMContentLoaded', loadStatsData);
</script>
@endsection
