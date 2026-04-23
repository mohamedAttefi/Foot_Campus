<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Users Management | The Scholastic Pitch</title>
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
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="{{ route('admin.users') }}">
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
            <button onclick="openCreateUserModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
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
                <input id="search-input" class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search users..." type="text" />
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
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Users Management</h3>
                <p class="text-on-surface-variant mt-1">Manage all system users and their roles</p>
            </div>
            <div class="flex gap-2">
                <select id="role-filter" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-slate-50 transition-colors">
                    <option value="all">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="coach">Coach</option>
                    <option value="player">Player</option>
                </select>
                <button onclick="exportUsers()" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span> Export CSV
                </button>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                            <th class="py-5 px-6">User</th>
                            <th class="py-5 px-4">Email</th>
                            <th class="py-5 px-4">Role</th>
                            <th class="py-5 px-4">Team</th>
                            <th class="py-5 px-4">Status</th>
                            <th class="py-5 px-4">Joined</th>
                            <th class="py-5 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users-table-body" class="divide-y divide-slate-100">
                        <tr>
                            <td colspan="7" class="py-12 text-center text-outline">Loading users...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-6 flex items-center justify-between bg-slate-50/50 flex-wrap gap-4">
                <p id="table-info" class="text-sm text-on-surface-variant">Loading...</p>
                <div class="flex gap-2">
                    <button id="prev-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-slate-50 transition-colors disabled:opacity-50" disabled>
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <span id="page-info" class="px-3 py-1 text-sm font-semibold">Page 1</span>
                    <button id="next-page" class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-slate-50 transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Create User Modal -->
    <div id="create-user-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Create New User</h3>
            <form id="create-user-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" name="email" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" name="password" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Role</label>
                    <select name="role" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="coach">Coach</option>
                        <option value="player">Player</option>
                    </select>
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeCreateUserModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allUsers = [];
        let currentPage = 1;
        let currentFilter = 'all';
        const itemsPerPage = 10;

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

        async function loadUsers() {
            try {
                const users = await fetchAPI('/users');
                allUsers = Array.isArray(users) ? users : [];
                renderTable();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load users:", err);
                document.getElementById('users-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">Failed to load users. Please check your connection.</td></tr>';
            }
        }

        function getFilteredUsers() {
            if (currentFilter === 'all') return allUsers;
            return allUsers.filter(u => u.role === currentFilter);
        }

        function renderTable() {
            const filtered = getFilteredUsers();
            const total = filtered.length;
            const maxPage = Math.ceil(total / itemsPerPage);
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageUsers = filtered.slice(start, end);

            document.getElementById('table-info').innerHTML = `Showing ${start + 1}-${Math.min(end, total)} of ${total} users`;
            document.getElementById('page-info').innerHTML = `Page ${currentPage} of ${maxPage || 1}`;
            document.getElementById('prev-page').disabled = currentPage === 1;
            document.getElementById('next-page').disabled = currentPage === maxPage || maxPage === 0;

            if (pageUsers.length === 0) {
                document.getElementById('users-table-body').innerHTML = '<tr><td colspan="7" class="py-12 text-center text-outline">No users found</td></tr>';
                return;
            }

            document.getElementById('users-table-body').innerHTML = pageUsers.map(user => {
                const roleColors = {
                    admin: 'bg-purple-50 text-purple-700',
                    teacher: 'bg-blue-50 text-blue-700',
                    coach: 'bg-emerald-50 text-emerald-700',
                    player: 'bg-orange-50 text-orange-700'
                };

                const roleColor = roleColors[user.role] || 'bg-slate-50 text-slate-700';

                return `
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white text-sm font-bold">${user.name.charAt(0)}</div>
                                <div>
                                    <p class="font-bold text-on-surface">${user.name}</p>
                                    <p class="text-xs text-on-surface-variant">ID: ${user.id}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-sm">${user.email}</td>
                        <td class="py-4 px-4">
                            <span class="px-2 py-1 rounded-full text-xs font-bold ${roleColor}">${user.role}</span>
                        </td>
                        <td class="py-4 px-4 text-sm text-on-surface-variant">--</td>
                        <td class="py-4 px-4">
                            <span class="px-2 py-1 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold">Active</span>
                        </td>
                        <td class="py-4 px-4 text-sm text-on-surface-variant">${new Date(user.created_at).toLocaleDateString()}</td>
                        <td class="py-4 px-6 text-right">
                            <button onclick="editUser(${user.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button onclick="deleteUser(${user.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function setupEventListeners() {
            document.getElementById('role-filter').addEventListener('change', (e) => {
                currentFilter = e.target.value;
                currentPage = 1;
                renderTable();
            });

            document.getElementById('prev-page').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable();
                }
            });

            document.getElementById('next-page').addEventListener('click', () => {
                const filtered = getFilteredUsers();
                const maxPage = Math.ceil(filtered.length / itemsPerPage);
                if (currentPage < maxPage) {
                    currentPage++;
                    renderTable();
                }
            });

            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('#users-table-body tr');
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(term) ? '' : 'none';
                });
            });

            document.getElementById('create-user-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const userData = Object.fromEntries(formData);
                
                try {
                    await fetchAPI('/users', {
                        method: 'POST',
                        body: JSON.stringify(userData)
                    });
                    closeCreateUserModal();
                    loadUsers();
                } catch (err) {
                    console.error("Failed to create user:", err);
                    alert("Failed to create user. Please try again.");
                }
            });
        }

        function openCreateUserModal() {
            document.getElementById('create-user-modal').classList.remove('hidden');
        }

        function closeCreateUserModal() {
            document.getElementById('create-user-modal').classList.add('hidden');
            document.getElementById('create-user-form').reset();
        }

        function exportUsers() {
            const filtered = getFilteredUsers();
            let csv = "Name,Email,Role,Status,Created At\n";
            filtered.forEach(user => {
                csv += `"${user.name}","${user.email}","${user.role}","Active","${new Date(user.created_at).toLocaleDateString()}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `users_${new Date().toISOString().split('T')[0]}.csv`;
            a.click();
            URL.revokeObjectURL(url);
        }

        function editUser(userId) {
            console.log('Edit user:', userId);
            // Implement edit functionality
        }

        function deleteUser(userId) {
            if (confirm('Are you sure you want to delete this user?')) {
                console.log('Delete user:', userId);
                // Implement delete functionality
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadUsers();
        });
    </script>
</body>

</html>
