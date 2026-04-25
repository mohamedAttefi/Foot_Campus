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
        <div class="p-8 space-y-8">
            <!-- Hero Header Section -->
            <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Admin Dashboard</h2>
                    <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                        System Administration & Control Center</p>
                </div>
                <div class="flex gap-3">
                    <div class="flex flex-col items-end">
                        <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Total Users</span>
                        <span class="text-2xl font-black text-primary">247</span>
                    </div>
                    <div class="h-10 w-px bg-outline-variant/30 mx-2"></div>
                    <div class="flex flex-col items-end">
                        <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Active Teams</span>
                        <span class="text-2xl font-black text-secondary">18</span>
                    </div>
                </div>
            </section>

            <!-- Admin Stats Grid -->
            <div class="grid grid-cols-12 gap-6">
                <!-- System Overview Card -->
                <div class="col-span-12 lg:col-span-6 bg-surface-container-lowest rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
                    <h3 class="font-headline text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">monitoring</span>
                        System Overview
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-surface-container-low p-4 rounded-xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-on-surface-variant">Server Status</span>
                                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                            </div>
                            <p class="text-2xl font-bold text-primary">Online</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl">
                            <span class="text-sm text-on-surface-variant">Database</span>
                            <p class="text-2xl font-bold text-secondary">Healthy</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl">
                            <span class="text-sm text-on-surface-variant">Active Sessions</span>
                            <p class="text-2xl font-bold text-tertiary">142</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl">
                            <span class="text-sm text-on-surface-variant">API Requests</span>
                            <p class="text-2xl font-bold text-primary">1.2K</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Card -->
                <div class="col-span-12 lg:col-span-6 bg-surface-container-lowest rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
                    <h3 class="font-headline text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">history</span>
                        Recent Activity
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary text-sm">person_add</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-on-surface">New user registration</p>
                                <p class="text-xs text-on-surface-variant">John Doe - 2 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl">
                            <div class="w-8 h-8 bg-secondary/10 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary text-sm">sports_soccer</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-on-surface">Match created</p>
                                <p class="text-xs text-on-surface-variant">Team A vs Team B - 15 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-surface-container-low rounded-xl">
                            <div class="w-8 h-8 bg-tertiary/10 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-tertiary text-sm">school</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-on-surface">Academic records updated</p>
                                <p class="text-xs text-on-surface-variant">Grade report generated - 1 hour ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 bg-surface-container-lowest rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
                    <h3 class="font-headline text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">bolt</span>
                        Quick Actions
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <button onclick="createUser()" class="p-4 bg-primary/10 hover:bg-primary/20 rounded-xl transition-colors text-center">
                            <span class="material-symbols-outlined text-primary text-2xl mb-2">person_add</span>
                            <p class="text-sm font-medium text-primary">Add User</p>
                        </button>
                        <button onclick="createTeam()" class="p-4 bg-secondary/10 hover:bg-secondary/20 rounded-xl transition-colors text-center">
                            <span class="material-symbols-outlined text-secondary text-2xl mb-2">group_add</span>
                            <p class="text-sm font-medium text-secondary">Add Team</p>
                        </button>
                        <button onclick="createMatch()" class="p-4 bg-tertiary/10 hover:bg-tertiary/20 rounded-xl transition-colors text-center">
                            <span class="material-symbols-outlined text-tertiary text-2xl mb-2">event_add</span>
                            <p class="text-sm font-medium text-tertiary">Schedule Match</p>
                        </button>
                        <button onclick="generateReport()" class="p-4 bg-surface-container-low hover:bg-surface-container-high rounded-xl transition-colors text-center">
                            <span class="material-symbols-outlined text-on-surface text-2xl mb-2">assessment</span>
                            <p class="text-sm font-medium text-on-surface">Generate Report</p>
                        </button>
                    </div>
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
