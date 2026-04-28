@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-teams'])

@section('title', 'Teams Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Teams Management</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                League Team Administration & Roster Management</p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddTeamModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add Team
            </button>
            <button onclick="exportTeams()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl hover:bg-surface-container-high transition-colors flex items-center gap-2">
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
                    <span class="material-symbols-outlined text-primary text-xl">groups</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalTeams">0</p>
                    <p class="text-sm text-on-surface-variant">Total Teams</p>
                </div>
            </div>
        </div>

        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">person</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="totalPlayers">0</p>
                    <p class="text-sm text-on-surface-variant">Total Players</p>
                </div>
            </div>
        </div>

        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">sports_soccer</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="activeTeams">0</p>
                    <p class="text-sm text-on-surface-variant">Active Teams</p>
                </div>
            </div>
        </div>

        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">school</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="avgAcademic">0</p>
                    <p class="text-sm text-on-surface-variant">Avg Academic</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter and Search Section -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Search Teams</label>
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search by team name, coach, or academy..."
                        class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant">search</span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Status Filter</label>
                <select id="statusFilter" class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Teams Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="teamsGrid">
        <!-- Team cards will be populated by JavaScript -->
    </div>

    <!-- Pagination -->
    <div id="paginationContainer" class="flex justify-center items-center gap-2">
        <!-- Pagination controls will be inserted here -->
    </div>
</div>

<!-- Add/Edit Team Modal -->
<div id="teamModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface" id="modalTitle">Add New Team</h3>
                <button onclick="closeTeamModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <form id="teamForm" class="space-y-4">
                <input type="hidden" id="teamId" name="id">

                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Team Name</label>
                    <input type="text" id="teamName" name="name" required
                        class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>

                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Academy/School</label>
                    <input type="text" id="teamAcademy" name="academy" required
                        class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>

                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Coach</label>
                    <select id="teamCoach" name="coach_id" required
                        class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Coach</option>
                        <!-- Coach options will be populated by JavaScript -->
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Status</label>
                    <select id="teamStatus" name="status"
                        class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="suspended">Suspended</option>
                    </select>
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        <span id="submitButtonText">Add Team</span>
                    </button>
                    <button type="button" onclick="closeTeamModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
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
    let teams = [];
    let coaches = [];
    let currentPage = 1;
    let teamsPerPage = 9;
    let filteredTeams = [];

    async function loadTeams() {
        try {
            const [teamsResponse, usersResponse] = await Promise.all([
                fetchAPI('/team'),
                fetchAPI('/users')
            ]);

            teams = Object.values(teamsResponse)[0] || [];
            // console.log(usersResponse)
            coaches = usersResponse.filter(user => user.role === 'coach');
            filteredTeams = [...teams];

            populateCoachesDropdown();
            renderTeams();
            updateStats();
        } catch (error) {
            console.error('Error loading teams:', error);
            showError('Failed to load teams. Please try again.');
        }
    }

    function populateCoachesDropdown() {
        const select = document.getElementById('teamCoach');
        select.innerHTML = '<option value="">Select Coach</option>' +
            coaches.map(coach => `<option value="${coach.id}">${coach.name}</option>`).join('');
    }

    function renderTeams() {
        const grid = document.getElementById('teamsGrid');
        const startIndex = (currentPage - 1) * teamsPerPage;
        const endIndex = startIndex + teamsPerPage;
        const paginatedTeams = filteredTeams.slice(startIndex, endIndex);

        if (paginatedTeams.length === 0) {
            grid.innerHTML = `
                <div class="col-span-full text-center py-12 text-outline">
                    No teams found matching your criteria
                </div>
            `;
            document.getElementById('paginationContainer').innerHTML = '';
            return;
        }

        grid.innerHTML = paginatedTeams.map(team => {
            const statusColor = 'text-tertiary'
            const statusBg = 'bg-tertiary-container'

            const coach = coaches.find(c => c.id === team.coach_id);
            console.log(coach)
            const playerCount = Math.floor(Math.random() * 15) + 10; // Placeholder

            return `
                <div class="bg-surface-container-lowest rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">
                                ${team.name.charAt(0)}
                            </div>
                            <div>
                                <h3 class="font-headline font-bold text-on-surface">${team.name}</h3>
                                <p class="text-sm text-on-surface-variant">${team.academy || 'Unknown Academy'}</p>
                            </div>
                        </div>
                        <span class="${statusBg} ${statusColor} text-[10px] font-bold px-3 py-1 rounded-full capitalize">
                            ${team.status}
                        </span>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-sm">
                            <span class="material-symbols-outlined text-on-surface-variant">person</span>
                            <span class="text-on-surface-variant">Coach:</span>
                            <span class="font-medium text-on-surface">${coach ? coach.name : 'Not Assigned'}</span>
                        </div>
                        
                        <div class="flex items-center gap-2 text-sm">
                            <span class="material-symbols-outlined text-on-surface-variant">groups</span>
                            <span class="text-on-surface-variant">Players:</span>
                            <span class="font-medium text-on-surface">${playerCount}</span>
                        </div>
                        
                        <div class="flex items-center gap-2 text-sm">
                            <span class="material-symbols-outlined text-on-surface-variant">sports_soccer</span>
                            <span class="text-on-surface-variant">Matches:</span>
                            <span class="font-medium text-on-surface">${Math.floor(Math.random() * 20) + 5}</span>
                        </div>
                    </div>
                    
                    <div class="flex gap-2 mt-4 pt-4 border-t border-outline-variant/10">
                        <button onclick="viewTeamDetails(${team.id})" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-2 rounded-lg hover:bg-surface-container-high transition-colors text-sm">
                            View Details
                        </button>
                        <button onclick="editTeam(${team.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                    </div>
                </div>
            `;
        }).join('');

        renderPagination();
    }

    function updateStats() {
        document.getElementById('totalTeams').textContent = teams.length;
        document.getElementById('totalPlayers').textContent = teams.length * 15; // Placeholder
        document.getElementById('activeTeams').textContent = teams.filter(t => t.status === 'active').length;
        document.getElementById('avgAcademic').textContent = 'A-'; // Placeholder
    }

    function renderPagination() {
        const container = document.getElementById('paginationContainer');
        const totalPages = Math.ceil(filteredTeams.length / teamsPerPage);

        if (totalPages <= 1) {
            container.innerHTML = '';
            return;
        }

        let paginationHTML = '';

        // Previous button
        if (currentPage > 1) {
            paginationHTML += `
                <button onclick="previousPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-sm">chevron_left</span>
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
                    <span class="material-symbols-outlined text-sm">chevron_right</span>
                </button>
            `;
        }

        container.innerHTML = paginationHTML;
    }

    function filterTeams() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const statusFilter = document.getElementById('statusFilter').value;

        filteredTeams = teams.filter(team => {
            const matchesSearch = team.name.toLowerCase().includes(searchTerm) ||
                (team.academy && team.academy.toLowerCase().includes(searchTerm));
            const matchesStatus = !statusFilter || team.status === statusFilter;

            return matchesSearch && matchesStatus;
        });

        currentPage = 1;
        renderTeams();
    }

    function showAddTeamModal() {
        document.getElementById('modalTitle').textContent = 'Add New Team';
        document.getElementById('submitButtonText').textContent = 'Add Team';
        document.getElementById('teamForm').reset();
        document.getElementById('teamId').value = '';
        document.getElementById('teamModal').classList.remove('hidden');
    }

    function editTeam(teamId) {
        const team = teams.find(t => t.id === teamId);
        if (!team) return;

        document.getElementById('modalTitle').textContent = 'Edit Team';
        document.getElementById('submitButtonText').textContent = 'Update Team';
        document.getElementById('teamId').value = team.id;
        document.getElementById('teamName').value = team.name;
        document.getElementById('teamAcademy').value = team.academy || '';
        document.getElementById('teamCoach').value = team.coach_id || '';
        document.getElementById('teamStatus').value = team.status || 'active';
        document.getElementById('teamModal').classList.remove('hidden');
    }

    function closeTeamModal() {
        document.getElementById('teamModal').classList.add('hidden');
    }

    function viewTeamDetails(teamId) {
        console.log('View team details:', teamId);
        // Navigate to team details page or open modal
        alert(`Team details for ID: ${teamId}. This would show detailed team information.`);
    }

    async function deleteTeam(teamId) {
        if (!confirm('Are you sure you want to delete this team?')) return;

        try {
            await fetchAPI(`/teams/${teamId}`, 'DELETE');
            await loadTeams();
            showSuccess('Team deleted successfully');
        } catch (error) {
            console.error('Error deleting team:', error);
            showError('Failed to delete team');
        }
    }

    function goToPage(page) {
        currentPage = page;
        renderTeams();
    }

    function nextPage() {
        const totalPages = Math.ceil(filteredTeams.length / teamsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderTeams();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderTeams();
        }
    }

    function exportTeams() {
        const csvContent = [
            ['Team Name', 'Academy', 'Coach', 'Status', 'Players', 'Matches'],
            ...filteredTeams.map(team => {
                const coach = coaches.find(c => c.id === team.coach_id);
                return [
                    team.name,
                    team.academy || 'Unknown',
                    coach ? coach.name : 'Not Assigned',
                    team.status || 'active',
                    Math.floor(Math.random() * 15) + 10,
                    Math.floor(Math.random() * 20) + 5
                ];
            })
        ].map(row => row.join(',')).join('\n');

        const blob = new Blob([csvContent], {
            type: 'text/csv'
        });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'teams.csv';
        a.click();
        window.URL.revokeObjectURL(url);
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterTeams);
    document.getElementById('statusFilter').addEventListener('change', filterTeams);

    document.getElementById('teamForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const teamData = Object.fromEntries(formData);

        try {
            const teamId = teamData.id;
            if (teamId) {
                await fetchAPI(`/teams/${teamId}`, 'PUT', teamData);
                showSuccess('Team updated successfully');
            } else {
                await fetchAPI('/teams', 'POST', teamData);
                showSuccess('Team created successfully');
            }

            closeTeamModal();
            await loadTeams();
        } catch (error) {
            console.error('Error saving team:', error);
            showError('Failed to save team');
        }
    });

    // Initialize
    window.addEventListener('DOMContentLoaded', loadTeams);
</script>
@endsection