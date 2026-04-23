<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Teams Management | The Scholastic Pitch</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .font-headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 flex flex-col p-6 overflow-y-auto bg-slate-50/80 backdrop-blur-md shadow-xl font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Admin Panel</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.users') }}">
                <span class="material-symbols-outlined">people</span><span>Users</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="{{ route('admin.teams') }}">
                <span class="material-symbols-outlined">groups</span><span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.matches') }}">
                <span class="material-symbols-outlined">sports_soccer</span><span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.academic') }}">
                <span class="material-symbols-outlined">school</span><span>Academic</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button onclick="openCreateTeamModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Create Team</span>
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">settings</span><span>Settings</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-xl">help</span><span>Support</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- TopNavBar -->
    <header class="fixed top-0 right-0 left-0 flex justify-between items-center h-16 px-8 ml-64 bg-white/80 backdrop-blur-xl z-40 font-['Manrope'] font-medium text-sm border-none">
        <div class="flex items-center gap-8 flex-1">
            <div class="relative w-96 max-w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input id="search-input" class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search teams..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-100 rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right">
                    <p id="nav-user-name" class="font-bold leading-none">Admin</p>
                    <p id="nav-user-role" class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">Administrator</p>
                </div>
                <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary" src="https://ui-avatars.com/api/?name=Admin&background=0f5238&color=fff" />
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Header -->
        <div class="mb-8 flex items-end justify-between flex-wrap gap-4">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Teams Management</h3>
                <p class="text-on-surface-variant mt-1">Manage all teams and their rosters</p>
            </div>
            <div class="flex gap-2">
                <button onclick="exportTeams()" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span> Export CSV
                </button>
            </div>
        </div>

        <!-- Teams Grid -->
        <div id="teams-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="col-span-full text-center py-12 text-outline">Loading teams...</div>
        </div>
    </main>

    <!-- Create Team Modal -->
    <div id="create-team-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Create New Team</h3>
            <form id="create-team-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Team Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Class Group</label>
                    <input type="text" name="class_group" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Coach</label>
                    <select name="coach_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Coach</option>
                    </select>
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeCreateTeamModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Create Team
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allTeams = [];
        let allUsers = [];

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

        async function loadTeams() {
            try {
                const [teams, users] = await Promise.all([
                    fetchAPI('/team'),
                    fetchAPI('/users')
                ]);
                
                allTeams = Array.isArray(teams) ? teams : [];
                allUsers = Array.isArray(users) ? users : [];
                
                renderTeams();
                populateCoachSelect();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load teams:", err);
                document.getElementById('teams-grid').innerHTML = '<div class="col-span-full text-center py-12 text-outline">Failed to load teams. Please check your connection.</div>';
            }
        }

        function renderTeams() {
            const container = document.getElementById('teams-grid');
            
            if (allTeams.length === 0) {
                container.innerHTML = '<div class="col-span-full text-center py-12 text-outline">No teams found</div>';
                return;
            }

            container.innerHTML = allTeams.map(team => {
                const coach = allUsers.find(u => u.id === team.coach_id);
                const teamColor = `hsl(${team.id * 137 % 360}, 70%, 50%)`;
                
                return `
                    <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-white font-bold text-xl" style="background: linear-gradient(135deg, ${teamColor}, ${teamColor}dd)">
                                ${team.name.charAt(0)}
                            </div>
                            <div class="flex gap-2">
                                <button onclick="editTeam(${team.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">edit</span>
                                </button>
                                <button onclick="deleteTeam(${team.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </div>
                        <h4 class="font-headline text-xl font-bold mb-2">${team.name}</h4>
                        <p class="text-sm text-on-surface-variant mb-4">${team.class_group}</p>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">person</span>
                                <span class="text-sm">${coach ? coach.name : 'No coach assigned'}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">groups</span>
                                <span class="text-sm">0 players</span>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function populateCoachSelect() {
            const select = document.querySelector('select[name="coach_id"]');
            const coaches = allUsers.filter(u => u.role === 'coach');
            
            coaches.forEach(coach => {
                const option = document.createElement('option');
                option.value = coach.id;
                option.textContent = coach.name;
                select.appendChild(option);
            });
        }

        function setupEventListeners() {
            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const filtered = allTeams.filter(team => 
                    team.name.toLowerCase().includes(term) || 
                    team.class_group.toLowerCase().includes(term)
                );
                allTeams = filtered;
                renderTeams();
                allTeams = Array.isArray(allTeams) ? allTeams : [];
            });

            document.getElementById('create-team-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const teamData = Object.fromEntries(formData);
                
                try {
                    await fetchAPI('/team', {
                        method: 'POST',
                        body: JSON.stringify(teamData)
                    });
                    closeCreateTeamModal();
                    loadTeams();
                } catch (err) {
                    console.error("Failed to create team:", err);
                    alert("Failed to create team. Please try again.");
                }
            });
        }

        function openCreateTeamModal() {
            document.getElementById('create-team-modal').classList.remove('hidden');
        }

        function closeCreateTeamModal() {
            document.getElementById('create-team-modal').classList.add('hidden');
            document.getElementById('create-team-form').reset();
        }

        function exportTeams() {
            let csv = "Team Name,Class Group,Coach,Created At\n";
            allTeams.forEach(team => {
                const coach = allUsers.find(u => u.id === team.coach_id);
                csv += `"${team.name}","${team.class_group}","${coach ? coach.name : 'No coach'}","${new Date(team.created_at).toLocaleDateString()}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `teams_${new Date().toISOString().split('T')[0]}.csv`;
            a.click();
            URL.revokeObjectURL(url);
        }

        function editTeam(teamId) {
            console.log('Edit team:', teamId);
            // Implement edit functionality
        }

        function deleteTeam(teamId) {
            if (confirm('Are you sure you want to delete this team?')) {
                console.log('Delete team:', teamId);
                // Implement delete functionality
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadTeams();
        });
    </script>
</body>

</html>
