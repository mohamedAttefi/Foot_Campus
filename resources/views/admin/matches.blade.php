@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-matches'])

@section('title', 'Matches Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Matches Management</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                League Match Scheduling & Results Administration</p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddMatchModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Schedule Match
            </button>
            <button onclick="exportMatches()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl hover:bg-surface-container-high transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">download</span>
                Export
            </button>
        </div>
    </section>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">sports_soccer</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Total Matches</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">event</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="upcomingMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Upcoming</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">check_circle</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="completedMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Completed</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">calendar_month</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="thisWeek">0</p>
                    <p class="text-sm text-on-surface-variant">This Week</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter and Search Section -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Search Matches</label>
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search by teams or location..." 
                           class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant">search</span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Status Filter</label>
                <select id="statusFilter" class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <option value="">All Status</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="live">Live</option>
                    <option value="finished">Finished</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Date Range</label>
                <input type="date" id="dateFilter" 
                       class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
            </div>
        </div>
    </div>

    <!-- Matches Table -->
    <div class="bg-surface-container-lowest rounded-[1.5rem] shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-6 border-b border-outline-variant/10 flex justify-between items-center">
            <div>
                <h3 class="font-headline text-xl font-bold">League Matches</h3>
                <p class="text-sm text-on-surface-variant">Manage match schedules and results</p>
            </div>
            <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                <span id="matchCount">0</span> total matches
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low/50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Date & Time</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Match</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Location</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Score</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody id="matchesTableBody" class="divide-y divide-outline-variant/5">
                    <!-- Match rows will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div id="paginationContainer" class="p-6 bg-surface-container-low/50 border-t border-outline-variant/10 flex justify-between items-center">
            <!-- Pagination controls will be inserted here -->
        </div>
    </div>
</div>

<!-- Add/Edit Match Modal -->
<div id="matchModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface" id="modalTitle">Schedule New Match</h3>
                <button onclick="closeMatchModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form id="matchForm" class="space-y-4">
                <input type="hidden" id="matchId" name="id">
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Home Team</label>
                    <select id="homeTeam" name="home_team_id" required
                            class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Home Team</option>
                        <!-- Team options will be populated by JavaScript -->
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Away Team</label>
                    <select id="awayTeam" name="away_team_id" required
                            class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Away Team</option>
                        <!-- Team options will be populated by JavaScript -->
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Match Date</label>
                    <input type="date" id="matchDate" name="date" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Match Time</label>
                    <input type="time" id="matchTime" name="time" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Location</label>
                    <input type="text" id="matchLocation" name="location" required
                           placeholder="Stadium or field name"
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        <span id="submitButtonText">Schedule Match</span>
                    </button>
                    <button type="button" onclick="closeMatchModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let matches = [];
    let teams = [];
    let currentPage = 1;
    let matchesPerPage = 10;
    let filteredMatches = [];

    async function loadMatches() {
        try {
            const [matchesResponse, teamsResponse] = await Promise.all([
                fetchAPI('/matches'),
                fetchAPI('/team')
            ]);
            
            matches = matchesResponse
            console.log(matchesResponse)
            teams = teamsResponse.teams
            console.log(teamsResponse.teams)
            filteredMatches = [...matches];
            
            populateTeamsDropdown();
            renderMatches();
            updateStats();
        } catch (error) {
            console.error('Error loading matches:', error);
            showError('Failed to load matches. Please try again.');
        }
    }

    function populateTeamsDropdown() {
        const homeSelect = document.getElementById('homeTeam');
        const awaySelect = document.getElementById('awayTeam');
        
        const teamOptions = '<option value="">Select Team</option>' + 
            teams.map(team => `<option value="${team.id}">${team.name}</option>`).join('');
        
        homeSelect.innerHTML = teamOptions;
        awaySelect.innerHTML = teamOptions;
    }

    function renderMatches() {
        const tbody = document.getElementById('matchesTableBody');
        const startIndex = (currentPage - 1) * matchesPerPage;
        const endIndex = startIndex + matchesPerPage;
        const paginatedMatches = filteredMatches.slice(startIndex, endIndex);

        if (paginatedMatches.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-outline">
                        No matches found matching your criteria
                    </td>
                </tr>
            `;
            document.getElementById('paginationContainer').innerHTML = '';
            return;
        }

        tbody.innerHTML = paginatedMatches.map(match => {
            const homeTeam = teams.find(t => t.id === match.home_team_id);
            const awayTeam = teams.find(t => t.id === match.away_team_id);
            
            const statusColor = match.status === 'finished' ? 'text-tertiary' : 
                              match.status === 'live' ? 'text-secondary' : 'text-primary';
            const statusBg = match.status === 'finished' ? 'bg-tertiary-container' : 
                           match.status === 'live' ? 'bg-secondary-container' : 'bg-primary-container';
            
            const matchDate = new Date(match.match_date || match.date);
            const matchTime = match.time || '00:00';
            const isToday = matchDate.toDateString() === new Date().toDateString();
            
            return `
                <tr class="hover:bg-surface-container-low/30 transition-colors">
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium text-on-surface">${matchDate.toLocaleDateString()}</p>
                            <p class="text-sm text-on-surface-variant">${matchTime}</p>
                            ${isToday ? '<span class="text-xs text-primary font-bold">Today</span>' : ''}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="text-center">
                                <p class="font-bold text-on-surface">${homeTeam ? homeTeam.name : 'Unknown'}</p>
                                <p class="text-xs text-on-surface-variant">Home</p>
                            </div>
                            <span class="text-on-surface-variant font-bold">vs</span>
                            <div class="text-center">
                                <p class="font-bold text-on-surface">${awayTeam ? awayTeam.name : 'Unknown'}</p>
                                <p class="text-xs text-on-surface-variant">Away</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-on-surface-variant">
                        ${match.location || 'TBD'}
                    </td>
                    <td class="px-6 py-4">
                        <span class="${statusBg} ${statusColor} text-[10px] font-bold px-3 py-1 rounded-full capitalize">
                            ${match.status || 'scheduled'}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        ${match.status === 'finished' ? 
                            `<div class="flex items-center gap-2">
                                <span class="font-bold text-on-surface">${match.home_score || 0}</span>
                                <span class="text-on-surface-variant">-</span>
                                <span class="font-bold text-on-surface">${match.away_score || 0}</span>
                            </div>` : 
                            '<span class="text-on-surface-variant text-sm">Not played</span>'
                        }
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center gap-1 justify-end">
                            <button onclick="showMatchEventsModal(${match.id})" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Match Events">
                                <span class="material-symbols-outlined text-lg">event_note</span>
                            </button>
                            <button onclick="showMatchStatsModal(${match.id})" class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition-colors" title="Match Statistics">
                                <span class="material-symbols-outlined text-lg">analytics</span>
                            </button>
                            <button onclick="editMatch(${match.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors" title="Edit Match">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button onclick="deleteMatch(${match.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Delete Match">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');

        document.getElementById('matchCount').textContent = filteredMatches.length;
        renderPagination();
    }

    function updateStats() {
        const now = new Date();
        const weekFromNow = new Date(now.getTime() + 7 * 24 * 60 * 60 * 1000);
        
        document.getElementById('totalMatches').textContent = matches.length;
        document.getElementById('upcomingMatches').textContent = matches.filter(m => m.status === 'scheduled').length;
        document.getElementById('completedMatches').textContent = matches.filter(m => m.status === 'finished').length;
        document.getElementById('thisWeek').textContent = matches.filter(m => {
            const matchDate = new Date(m.date);
            return matchDate >= now && matchDate <= weekFromNow;
        }).length;
    }

    function renderPagination() {
        const container = document.getElementById('paginationContainer');
        const totalPages = Math.ceil(filteredMatches.length / matchesPerPage);
        
        if (totalPages <= 1) {
            container.innerHTML = '';
            return;
        }

        let paginationHTML = '<div class="flex items-center gap-2">';
        
        // Previous button
        if (currentPage > 1) {
            paginationHTML += `
                <button onclick="previousPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                    Previous
                </button>
            `;
        }

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                paginationHTML += `
                    <button class="px-3 py-1 text-sm font-medium text-on-primary bg-primary rounded-lg">${i}</button>
                `;
            } else {
                paginationHTML += `
                    <button onclick="goToPage(${i})" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">${i}</button>
                `;
            }
        }

        // Next button
        if (currentPage < totalPages) {
            paginationHTML += `
                <button onclick="nextPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                    Next
                </button>
            `;
        }

        paginationHTML += '</div>';
        container.innerHTML = paginationHTML;
    }

    function filterMatches() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const statusFilter = document.getElementById('statusFilter').value;
        const dateFilter = document.getElementById('dateFilter').value;

        filteredMatches = matches.filter(match => {
            const homeTeam = teams.find(t => t.id === match.home_team_id);
            const awayTeam = teams.find(t => t.id === match.away_team_id);
            
            const matchesSearch = (homeTeam && homeTeam.name.toLowerCase().includes(searchTerm)) || 
                               (awayTeam && awayTeam.name.toLowerCase().includes(searchTerm)) ||
                               (match.location && match.location.toLowerCase().includes(searchTerm));
            const matchesStatus = !statusFilter || match.status === statusFilter;
            const matchesDate = !dateFilter || new Date(match.date).toDateString() === new Date(dateFilter).toDateString();
            
            return matchesSearch && matchesStatus && matchesDate;
        });

        currentPage = 1;
        renderMatches();
    }

    function showAddMatchModal() {
        document.getElementById('modalTitle').textContent = 'Schedule New Match';
        document.getElementById('submitButtonText').textContent = 'Schedule Match';
        document.getElementById('matchForm').reset();
        document.getElementById('matchId').value = '';
        
        // Set default date to tomorrow and time to 14:00
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        document.getElementById('matchDate').value = tomorrow.toISOString().slice(0, 10);
        document.getElementById('matchTime').value = '14:00';
        
        document.getElementById('matchModal').classList.remove('hidden');
    }

    function editMatch(matchId) {
        const match = matches.find(m => m.id === matchId);
        if (!match) return;

        document.getElementById('modalTitle').textContent = 'Edit Match';
        document.getElementById('submitButtonText').textContent = 'Update Match';
        document.getElementById('matchId').value = match.id;
        document.getElementById('homeTeam').value = match.home_team_id || '';
        document.getElementById('awayTeam').value = match.away_team_id || '';
        
        const matchDate = new Date(match.match_date || match.date);
        document.getElementById('matchDate').value = matchDate.toISOString().slice(0, 10);
        document.getElementById('matchTime').value = match.time || '14:00';
        document.getElementById('matchLocation').value = match.location || '';
        
        document.getElementById('matchModal').classList.remove('hidden');
    }

    function closeMatchModal() {
        document.getElementById('matchModal').classList.add('hidden');
    }

    async function deleteMatch(matchId) {
        if (!confirm('Are you sure you want to delete this match?')) return;

        try {
            await fetchAPI(`/matches/${matchId}`, 'DELETE');
            await loadMatches();
            showSuccess('Match deleted successfully');
        } catch (error) {
            console.error('Error deleting match:', error);
            showError('Failed to delete match');
        }
    }

    function goToPage(page) {
        currentPage = page;
        renderMatches();
    }

    function nextPage() {
        const totalPages = Math.ceil(filteredMatches.length / matchesPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderMatches();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderMatches();
        }
    }

    function exportMatches() {
        const csvContent = [
            ['Date', 'Home Team', 'Away Team', 'Location', 'Status', 'Home Score', 'Away Score'],
            ...filteredMatches.map(match => {
                const homeTeam = teams.find(t => t.id === match.home_team_id);
                const awayTeam = teams.find(t => t.id === match.away_team_id);
                const matchDate = new Date(match.date);
                
                return [
                    matchDate.toLocaleDateString(),
                    homeTeam ? homeTeam.name : 'Unknown',
                    awayTeam ? awayTeam.name : 'Unknown',
                    match.location || 'TBD',
                    match.status || 'scheduled',
                    match.home_score || '',
                    match.away_score || ''
                ];
            })
        ].map(row => row.join(',')).join('\n');

        const blob = new Blob([csvContent], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'matches.csv';
        a.click();
        window.URL.revokeObjectURL(url);
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterMatches);
    document.getElementById('statusFilter').addEventListener('change', filterMatches);
    document.getElementById('dateFilter').addEventListener('change', filterMatches);

    document.getElementById('matchForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        
        // Manual data collection using selectors
        const matchData = {
            home_team_id: document.getElementById('homeTeam').value,
            away_team_id: document.getElementById('awayTeam').value,
            season_id: 1, // Default season ID - you may need to get this dynamically
            date: document.getElementById('matchDate').value,
            time: document.getElementById('matchTime').value,
            location: document.getElementById('matchLocation').value
        };
        
        if (matchData.home_team_id === matchData.away_team_id) {
            showError('Home and away teams must be different');
            return;
        }
        
        try {
            const matchId = document.getElementById('matchId').value;
            if (matchId) {
                matchData.id = matchId;
                await fetchAPI(`/matches/${matchId}`, 'PUT', matchData);
                showSuccess('Match updated successfully');
            } else {
                console.log('Sending match data:', matchData);
                let res = await fetchAPI('/matches', 'POST', matchData);
                console.log('API response:', res);
                showSuccess('Match scheduled successfully');
            }
            
            closeMatchModal();
            await loadMatches();
        } catch (error) {
            console.error('Error saving match:', error);
            showError('Failed to save match');
        }
    });

    // Match Events Functions
    function showMatchEventsModal(matchId) {
        document.getElementById('matchEventsModal').classList.remove('hidden');
        document.getElementById('matchEventsMatchId').value = matchId;
        populateEventDropdowns(matchId);
        loadMatchEvents(matchId);
    }

    async function populateEventDropdowns(matchId) {
        try {
            const match = matches.find(m => m.id === matchId);
            if (!match) return;

            // Populate team dropdown
            const teamSelect = document.getElementById('eventTeam');
            teamSelect.innerHTML = '<option value="">Select Team</option>';
            
            const homeTeam = teams.find(t => t.id === match.home_team_id);
            const awayTeam = teams.find(t => t.id === match.away_team_id);
            
            if (homeTeam) {
                teamSelect.innerHTML += `<option value="${homeTeam.id}">${homeTeam.name} (Home)</option>`;
            }
            if (awayTeam) {
                teamSelect.innerHTML += `<option value="${awayTeam.id}">${awayTeam.name} (Away)</option>`;
            }

            // Populate player dropdown (will be populated when team is selected)
            const playerSelect = document.getElementById('eventPlayer');
            playerSelect.innerHTML = '<option value="">Select Team First</option>';
            
            // Add event listener to team dropdown
            teamSelect.onchange = async function() {
                const teamId = this.value;
                if (!teamId) {
                    playerSelect.innerHTML = '<option value="">Select Team First</option>';
                    return;
                }

                try {
                    const players = await fetchAPI(`/players/team/${teamId}`);
                    playerSelect.innerHTML = '<option value="">Select Player</option>';
                    players.forEach(player => {
                        playerSelect.innerHTML += `<option value="${player.id}">${player.user?.name || `Player ${player.id}`}</option>`;
                    });
                } catch (error) {
                    console.error('Error loading players:', error);
                    playerSelect.innerHTML = '<option value="">Error loading players</option>';
                }
            };
        } catch (error) {
            console.error('Error populating dropdowns:', error);
        }
    }

    async function loadMatchEvents(matchId) {
        try {
            const events = await fetchAPI(`/match-events?game_play_id=${matchId}`);
            renderMatchEvents(events);
        } catch (error) {
            console.error('Error loading match events:', error);
        }
    }

    function renderMatchEvents(events) {
        const eventsList = document.getElementById('matchEventsList');
        if (!events || events.length === 0) {
            eventsList.innerHTML = '<div class="text-center py-8 text-gray-500">No events recorded</div>';
            return;
        }

        eventsList.innerHTML = events.map(event => `
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex items-center gap-3">
                    <span class="text-lg font-bold">${event.minute}'</span>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-sm">${event.type}</span>
                    <span class="text-sm">${event.player?.name || 'Unknown'}</span>
                </div>
                <button onclick="deleteMatchEvent(${event.id})" class="text-red-600 hover:text-red-800">
                    <span class="material-symbols-outlined">delete</span>
                </button>
            </div>
        `).join('');
    }

    async function addMatchEvent() {
        const eventData = {
            game_play_id: document.getElementById('matchEventsMatchId').value,
            minute: parseInt(document.getElementById('eventMinute').value),
            type: document.getElementById('eventType').value,
            player_id: document.getElementById('eventPlayer').value,
            team_id: document.getElementById('eventTeam').value
        };

        try {
            await fetchAPI('/match-events', 'POST', eventData);
            showSuccess('Event added successfully');
            document.getElementById('eventForm').reset();
            loadMatchEvents(eventData.game_play_id);
        } catch (error) {
            console.error('Error adding event:', error);
            showError('Failed to add event');
        }
    }

    async function deleteMatchEvent(eventId) {
        if (!confirm('Are you sure you want to delete this event?')) return;

        try {
            await fetchAPI(`/match-events/${eventId}`, 'DELETE');
            showSuccess('Event deleted successfully');
            const matchId = document.getElementById('matchEventsMatchId').value;
            loadMatchEvents(matchId);
        } catch (error) {
            console.error('Error deleting event:', error);
            showError('Failed to delete event');
        }
    }

    // Match Statistics Functions
    function showMatchStatsModal(matchId) {
        document.getElementById('matchStatsModal').classList.remove('hidden');
        document.getElementById('matchStatsMatchId').value = matchId;
        loadMatchStats(matchId);
    }

    async function loadMatchStats(matchId) {
        try {
            const stats = await fetchAPI(`/match-stats?game_play_id=${matchId}`);
            if (stats && stats.length > 0) {
                const stat = stats[0];
                document.getElementById('homePossession').value = stat.home_possession || '';
                document.getElementById('awayPossession').value = stat.away_possession || '';
                document.getElementById('homeShots').value = stat.home_shots || '';
                document.getElementById('awayShots').value = stat.away_shots || '';
            }
        } catch (error) {
            console.error('Error loading match stats:', error);
        }
    }

    async function saveMatchStats() {
        const statsData = {
            game_play_id: document.getElementById('matchStatsMatchId').value,
            home_possession: parseInt(document.getElementById('homePossession').value) || 0,
            away_possession: parseInt(document.getElementById('awayPossession').value) || 0,
            home_shots: parseInt(document.getElementById('homeShots').value) || 0,
            away_shots: parseInt(document.getElementById('awayShots').value) || 0
        };

        try {
            const existingStats = await fetchAPI(`/match-stats?game_play_id=${statsData.game_play_id}`);
            if (existingStats && existingStats.length > 0) {
                await fetchAPI(`/match-stats/${existingStats[0].id}`, 'PUT', statsData);
            } else {
                await fetchAPI('/match-stats', 'POST', statsData);
            }
            showSuccess('Statistics saved successfully');
            closeMatchStatsModal();
        } catch (error) {
            console.error('Error saving stats:', error);
            showError('Failed to save statistics');
        }
    }

    function closeMatchEventsModal() {
        document.getElementById('matchEventsModal').classList.add('hidden');
    }

    function closeMatchStatsModal() {
        document.getElementById('matchStatsModal').classList.add('hidden');
    }

    // Initialize
    window.addEventListener('DOMContentLoaded', loadMatches);
</script>

<!-- Match Events Modal -->
<div id="matchEventsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-xl p-6 w-full max-w-2xl max-h-[80vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Match Events</h3>
            <button onclick="closeMatchEventsModal()" class="text-gray-500 hover:text-gray-700">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <input type="hidden" id="matchEventsMatchId">

        <!-- Add Event Form -->
        <div class="bg-gray-50 rounded-lg p-4 mb-4">
            <h4 class="font-semibold mb-3">Add New Event</h4>
            <form id="eventForm" onsubmit="event.preventDefault(); addMatchEvent();">
                <div class="grid grid-cols-2 gap-4 mb-3">
                    <div>
                        <label class="block text-sm font-medium mb-1">Minute</label>
                        <input type="number" id="eventMinute" min="1" max="120" required class="w-full border rounded px-3 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Event Type</label>
                        <select id="eventType" required class="w-full border rounded px-3 py-2">
                            <option value="">Select Type</option>
                            <option value="goal">Goal</option>
                            <option value="yellow_card">Yellow Card</option>
                            <option value="red_card">Red Card</option>
                            <option value="substitution">Substitution</option>
                            <option value="corner">Corner</option>
                            <option value="foul">Foul</option>
                            <option value="offside">Offside</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Player</label>
                        <select id="eventPlayer" required class="w-full border rounded px-3 py-2">
                            <option value="">Select Player</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Team</label>
                        <select id="eventTeam" required class="w-full border rounded px-3 py-2">
                            <option value="">Select Team</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Add Event
                </button>
            </form>
        </div>

        <!-- Events List -->
        <div>
            <h4 class="font-semibold mb-3">Recorded Events</h4>
            <div id="matchEventsList" class="space-y-2 max-h-60 overflow-y-auto">
                <div class="text-center py-8 text-gray-500">Loading events...</div>
            </div>
        </div>
    </div>
</div>

<!-- Match Statistics Modal -->
<div id="matchStatsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold">Match Statistics</h3>
            <button onclick="closeMatchStatsModal()" class="text-gray-500 hover:text-gray-700">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <input type="hidden" id="matchStatsMatchId">

        <form id="statsForm" onsubmit="event.preventDefault(); saveMatchStats();">
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Home Possession (%)</label>
                        <input type="number" id="homePossession" min="0" max="100" class="w-full border rounded px-3 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Away Possession (%)</label>
                        <input type="number" id="awayPossession" min="0" max="100" class="w-full border rounded px-3 py-2">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Home Shots</label>
                        <input type="number" id="homeShots" min="0" class="w-full border rounded px-3 py-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Away Shots</label>
                        <input type="number" id="awayShots" min="0" class="w-full border rounded px-3 py-2">
                    </div>
                </div>
            </div>

            <div class="flex gap-3 mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex-1">
                    Save Statistics
                </button>
                <button type="button" onclick="closeMatchStatsModal()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
