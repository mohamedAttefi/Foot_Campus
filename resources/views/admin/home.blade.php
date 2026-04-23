<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard | The Scholastic Pitch</title>
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
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.users') }}">
                <span class="material-symbols-outlined">people</span><span>Users</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.teams') }}">
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
            <button class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Create User</span>
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
                <input class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search admin panel..." type="text" />
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
        <!-- Hero Header -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-primary text-white p-8">
                <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                    <img class="w-full h-full object-cover transform scale-125 rotate-12" src="https://images.unsplash.com/photo-1553729455-2fdd9c0c16dd?w=800&h=400&fit=crop" />
                </div>
                <div class="relative z-10 max-w-lg">
                    <span class="uppercase tracking-[0.3em] font-bold text-primary-fixed-dim opacity-80 text-xs">Administrative Overview</span>
                    <h2 class="text-4xl font-extrabold font-headline mt-2 mb-4 leading-tight">League Management</h2>
                    <p class="text-primary-fixed leading-relaxed opacity-90 mb-6" id="system-stats">Loading system statistics...</p>
                    <div class="flex gap-4">
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Total Users</p>
                            <p id="total-users" class="text-xl font-bold mt-1">--</p>
                        </div>
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Active Teams</p>
                            <p id="total-teams" class="text-xl font-bold mt-1">--</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="font-headline text-lg font-bold">System Status</h3>
                    <p class="text-sm text-on-surface-variant">Platform health</p>
                </div>
                <div class="space-y-4 my-6">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium">Database</span>
                        <span class="px-2 py-1 bg-emerald-50 text-emerald-700 rounded-full text-[10px] font-bold">Healthy</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium">API</span>
                        <span class="px-2 py-1 bg-emerald-50 text-emerald-700 rounded-full text-[10px] font-bold">Online</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-medium">Storage</span>
                        <span class="px-2 py-1 bg-amber-50 text-amber-700 rounded-full text-[10px] font-bold">45%</span>
                    </div>
                </div>
                <button class="w-full text-secondary font-bold text-sm hover:underline text-left flex items-center gap-2">
                    View System Logs
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mb-8">
            <h3 class="font-headline text-3xl font-extrabold tracking-tight mb-6">Quick Actions</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white mb-4">
                        <span class="material-symbols-outlined">person_add</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Create User</h4>
                    <p class="text-sm text-on-surface-variant">Add new users to the system</p>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center text-white mb-4">
                        <span class="material-symbols-outlined">group_add</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Create Team</h4>
                    <p class="text-sm text-on-surface-variant">Register new teams</p>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-white mb-4">
                        <span class="material-symbols-outlined">event</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Schedule Match</h4>
                    <p class="text-sm text-on-surface-variant">Create new match fixtures</p>
                </div>
                <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white mb-4">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Academic Rules</h4>
                    <p class="text-sm text-on-surface-variant">Manage eligibility rules</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-8 shadow-sm">
                <h3 class="font-headline text-xl font-bold mb-6">Recent Activity</h3>
                <div id="recent-activity" class="space-y-4">
                    <div class="text-center text-outline py-8">Loading recent activity...</div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-sm">
                <h3 class="font-headline text-xl font-bold mb-6">System Statistics</h3>
                <div id="system-stats-detailed" class="space-y-6">
                    <div class="text-center text-outline py-8">Loading statistics...</div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let currentUser = null;

        function getHeaders() {
            const token = localStorage.getItem('token');
            return {
                'Authorization': token ? `Bearer ${token}` : '',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
        }

        async function fetchAPI(endpoint) {
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders()
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        async function loadDashboardData() {
            try {
                const [usersRes, teamsRes] = await Promise.all([
                    fetchAPI('/users').catch(() => []),
                    fetchAPI('/team').catch(() => [])
                ]);

                const users = Array.isArray(usersRes) ? usersRes : [];
                const teams = Array.isArray(teamsRes) ? teamsRes : [];

                document.getElementById('total-users').innerText = users.length;
                document.getElementById('total-teams').innerText = teams.length;
                document.getElementById('system-stats').innerHTML = `Managing ${users.length} users across ${teams.length} teams in the league.`;

                // Load recent activity (mock data for now)
                loadRecentActivity();
                loadSystemStats();

            } catch (err) {
                console.error("Failed to load dashboard data:", err);
                document.getElementById('system-stats').innerHTML = "Unable to load system statistics.";
            }
        }

        function loadRecentActivity() {
            const container = document.getElementById('recent-activity');
            container.innerHTML = `
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">U</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">New user registered</p>
                        <p class="text-xs text-on-surface-variant">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold">T</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Team created</p>
                        <p class="text-xs text-on-surface-variant">15 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center text-xs font-bold">M</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Match scheduled</p>
                        <p class="text-xs text-on-surface-variant">1 hour ago</p>
                    </div>
                </div>
            `;
        }

        function loadSystemStats() {
            const container = document.getElementById('system-stats-detailed');
            container.innerHTML = `
                <div class="flex justify-between items-center">
                    <span class="text-sm text-on-surface-variant">Players</span>
                    <span class="font-bold">24</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-on-surface-variant">Coaches</span>
                    <span class="font-bold">8</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-on-surface-variant">Teachers</span>
                    <span class="font-bold">12</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-on-surface-variant">Matches This Week</span>
                    <span class="font-bold">6</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-on-surface-variant">Pending Validations</span>
                    <span class="font-bold text-amber-600">3</span>
                </div>
            `;
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('nav-user-role').innerText = "Visitor";
                return;
            }
            loadDashboardData();
        });
    </script>
</body>

</html>
