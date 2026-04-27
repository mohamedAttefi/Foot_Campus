@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-players-list'])

@section('title', 'Players List | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Team Squad</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Manage your team roster and player information
            </p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddPlayerModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add Player
            </button>
        </div>
    </section>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">groups</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalPlayers">0</p>
                    <p class="text-sm text-on-surface-variant">Total Players</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">check_circle</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="eligiblePlayers">0</p>
                    <p class="text-sm text-on-surface-variant">Eligible Players</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">school</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="avgGPA">0.0</p>
                    <p class="text-sm text-on-surface-variant">Average GPA</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">fitness_center</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="fitnessLevel">0%</p>
                    <p class="text-sm text-on-surface-variant">Fitness Level</p>
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
                <select id="positionFilter" class="px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                    <option value="">All Positions</option>
                    <option value="GK">Goalkeeper</option>
                    <option value="DEF">Defense</option>
                    <option value="MID">Midfield</option>
                    <option value="FWD">Forward</option>
                </select>
                <select id="statusFilter" class="px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                    <option value="">All Status</option>
                    <option value="eligible">Eligible</option>
                    <option value="ineligible">Ineligible</option>
                    <option value="injured">Injured</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Players Grid -->
    <div id="playersGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Players will be loaded here -->
    </div>
</div>
@endsection

@section('scripts')
<script>
    let allPlayers = [];
    let allGrades = [];
    let filteredPlayers = [];

    async function loadPlayersData() {
        try {
            const [players, grades, currentUser] = await Promise.all([
                fetchAPI('/player'),
                fetchAPI('/grade'),
                fetchAPI('/current-user')
            ]);
            
            allPlayers = Array.isArray(players) ? players : (players.data || []);
            allGrades = Array.isArray(grades) ? grades : (grades.data || []);
            
            // Filter players by current user's team
            if (currentUser && currentUser.team) {
                allPlayers = allPlayers.filter(p => p.team_id === currentUser.team.id);
            }
            
            filteredPlayers = allPlayers;
            updateStats();
            renderPlayers();
        } catch (error) {
            console.error('Error loading players data:', error);
            document.getElementById('playersGrid').innerHTML = '<div class="col-span-full text-center text-error py-8">Failed to load players</div>';
        }
    }

    function updateStats() {
        document.getElementById('totalPlayers').textContent = allPlayers.length;
        
        // Calculate eligible players
        const eligibleCount = allPlayers.filter(p => {
            const playerGrades = allGrades.filter(g => g.user_id === p.user_id);
            const avgGrade = playerGrades.length > 0 ? 
                playerGrades.reduce((sum, g) => sum + (g.score || 0), 0) / playerGrades.length : 0;
            return avgGrade >= 60 && p.is_eligible !== false;
        }).length;
        document.getElementById('eligiblePlayers').textContent = eligibleCount;
        
        // Calculate average GPA
        const totalGPA = allPlayers.reduce((sum, p) => {
            const playerGrades = allGrades.filter(g => g.user_id === p.user_id);
            const avgGrade = playerGrades.length > 0 ? 
                playerGrades.reduce((sum, g) => sum + (g.score || 0), 0) / playerGrades.length : 0;
            return sum + avgGrade;
        }, 0);
        const avgGPA = allPlayers.length > 0 ? (totalGPA / allPlayers.length / 20).toFixed(1) : '0.0'; // Assuming 100 scale, convert to 5.0
        document.getElementById('avgGPA').textContent = avgGPA;
        
        // Calculate fitness level (mock calculation)
        const fitnessLevel = Math.min(95, 70 + (eligibleCount / allPlayers.length) * 25);
        document.getElementById('fitnessLevel').textContent = fitnessLevel.toFixed(0) + '%';
    }

    function renderPlayers() {
        const container = document.getElementById('playersGrid');
        
        if (filteredPlayers.length === 0) {
            container.innerHTML = '<div class="col-span-full text-center text-outline py-8">No players found</div>';
            return;
        }
        
        container.innerHTML = filteredPlayers.map(player => {
            const playerGrades = allGrades.filter(g => g.user_id === player.user_id);
            const avgGrade = playerGrades.length > 0 ? 
                playerGrades.reduce((sum, g) => sum + (g.score || 0), 0) / playerGrades.length : 0;
            const isEligible = avgGrade >= 60 && player.is_eligible !== false;
            
            const positionColors = {
                'GK': 'bg-secondary-fixed text-secondary',
                'DEF': 'bg-primary-fixed text-primary',
                'MID': 'bg-tertiary-fixed text-tertiary',
                'FWD': 'bg-error-container text-error'
            };
            
            const positionColor = positionColors[player.position] || 'bg-surface-container-highest text-on-surface';
            
            return `
                <div class="bg-surface-container-low rounded-2xl p-6 shadow-sm hover:shadow-md transition-all cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">
                                ${player.name ? player.name.charAt(0).toUpperCase() : 'P'}
                            </div>
                            <div>
                                <h3 class="font-headline font-bold text-lg text-on-surface">${player.name || `Player ${player.id}`}</h3>
                                <p class="text-sm text-on-surface-variant">#${player.jersey_number || 'N/A'}</p>
                            </div>
                        </div>
                        <div class="w-3 h-3 rounded-full ${isEligible ? 'bg-green-500' : 'bg-error'}"></div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Position</span>
                            <span class="text-xs font-bold ${positionColor} px-2 py-1 rounded-full">${player.position || 'MID'}</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Academic</span>
                            <span class="text-xs font-bold ${isEligible ? 'text-tertiary' : 'text-error'}">${avgGrade.toFixed(1)}%</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status</span>
                            <span class="text-xs font-bold ${isEligible ? 'text-primary' : 'text-error'}">${isEligible ? 'Eligible' : 'Ineligible'}</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-outline-variant/20 flex gap-2">
                        <button onclick="viewPlayerDetails(${player.id})" class="flex-1 text-xs font-bold text-primary bg-primary/10 py-2 rounded-lg hover:bg-primary/20 transition-colors">
                            View Details
                        </button>
                        <button onclick="editPlayer(${player.id})" class="flex-1 text-xs font-bold text-secondary bg-secondary/10 py-2 rounded-lg hover:bg-secondary/20 transition-colors">
                            Edit
                        </button>
                    </div>
                </div>
            `;
        }).join('');
    }

    function filterPlayers() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const positionFilter = document.getElementById('positionFilter').value;
        const statusFilter = document.getElementById('statusFilter').value;
        
        filteredPlayers = allPlayers.filter(player => {
            // Search filter
            const matchesSearch = !searchTerm || 
                (player.name && player.name.toLowerCase().includes(searchTerm)) ||
                (player.jersey_number && player.jersey_number.toString().includes(searchTerm));
            
            // Position filter
            const matchesPosition = !positionFilter || player.position === positionFilter;
            
            // Status filter
            const playerGrades = allGrades.filter(g => g.user_id === player.user_id);
            const avgGrade = playerGrades.length > 0 ? 
                playerGrades.reduce((sum, g) => sum + (g.score || 0), 0) / playerGrades.length : 0;
            const isEligible = avgGrade >= 60 && player.is_eligible !== false;
            
            let matchesStatus = true;
            if (statusFilter === 'eligible') matchesStatus = isEligible;
            else if (statusFilter === 'ineligible') matchesStatus = !isEligible;
            else if (statusFilter === 'injured') matchesStatus = player.is_injured;
            
            return matchesSearch && matchesPosition && matchesStatus;
        });
        
        renderPlayers();
    }

    function showAddPlayerModal() {
        alert('Add Player functionality coming soon!');
    }

    function viewPlayerDetails(playerId) {
        window.location.href = `/manager/player/${playerId}`;
    }

    function editPlayer(playerId) {
        window.location.href = `/manager/player/${playerId}/edit`;
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterPlayers);
    document.getElementById('positionFilter').addEventListener('change', filterPlayers);
    document.getElementById('statusFilter').addEventListener('change', filterPlayers);

    window.addEventListener('DOMContentLoaded', loadPlayersData);
</script>
@endsection
