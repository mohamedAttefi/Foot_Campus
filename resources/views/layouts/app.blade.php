<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'The Scholastic Pitch')</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#264191",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#2a1700",
                        "tertiary-container": "#865400",
                        "secondary-fixed": "#dce1ff",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-secondary-container": "#1d3989",
                        "inverse-on-surface": "#eff1f3",
                        "surface-tint": "#2c694e",
                        "on-surface-variant": "#404943",
                        "tertiary-fixed": "#ffddb8",
                        "inverse-surface": "#2d3133",
                        "primary-container": "#2d6a4f",
                        "on-secondary-fixed": "#00164e",
                        "on-background": "#191c1e",
                        "secondary-container": "#8fa7fe",
                        "on-surface": "#191c1e",
                        "surface-bright": "#f7f9fb",
                        "error": "#ba1a1a",
                        "surface-variant": "#e0e3e5",
                        "tertiary-fixed-dim": "#ffb95f",
                        "background": "#f7f9fb",
                        "on-primary-container": "#a8e7c5",
                        "outline": "#707973",
                        "outline-variant": "#bfc9c1",
                        "primary-fixed": "#b1f0ce",
                        "primary": "#0f5238",
                        "primary-fixed-dim": "#95d4b3",
                        "on-tertiary": "#ffffff",
                        "secondary": "#4059aa",
                        "on-tertiary-container": "#ffd29e",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#95d4b3",
                        "on-primary-fixed": "#002114",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b6c4ff",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#663f00",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary-fixed-variant": "#0e5138",
                        "surface-container": "#eceef0",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-fixed-variant": "#653e00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-sidebar {
            backdrop-filter: blur(20px);
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }

        body {
            background-color: #f7f9fb;
            font-family: 'Inter', sans-serif;
            color: #191c1e;
        }
    </style>
</head>

<body class="flex min-h-screen">
    <!-- Include Dynamic Sidebar -->
    @include('components.dynamic-sidebar', ['userRole' => $userRole ?? 'visitor', 'currentPage' => $currentPage ?? 'dashboard'])

    <!-- Main Content Area -->
    <main class="flex-1 ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 text-emerald-800 dark:text-emerald-400 font-['Manrope'] font-medium text-sm">
            <div class="flex items-center gap-6 flex-1">
                <div class="relative w-full max-w-md">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full focus:ring-2 focus:ring-primary/20 text-on-surface"
                        placeholder="Search players, tactics, or logs..." type="text" />
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="/standings">Standings</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="/schedule">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="/awards">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-slate-600">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/30">
                    <span id="nav-user-name" class="font-semibold text-on-surface">Profile</span>
                    <img id="nav-user-avatar" alt="User Profile Avatar" class="w-8 h-8 rounded-full border-2 border-primary/20 object-cover"
                        src="https://ui-avatars.com/api/?name=User&background=0f5238&color=fff&size=32" />
                </div>
            </div>
        </header>

        <!-- Page Content -->
        @yield('content')
    </main>

    <!-- Common JavaScript -->
    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let currentUser = null;

        function getHeaders() {
            const token = localStorage.getItem('token');
            return { 'Authorization': token ? `Bearer ${token}` : '', 'Content-Type': 'application/json', 'Accept': 'application/json' };
        }

        async function fetchAPI(endpoint, options = {}) {
            const response = await fetch(`${API_BASE}${endpoint}`, { headers: getHeaders(), ...options });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        function showError(message) {
            const errorDiv = document.createElement('div');
            errorDiv.className = 'fixed top-20 right-8 bg-error-container text-on-error-container p-4 rounded-xl shadow-lg z-50';
            errorDiv.innerHTML = `
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined">error</span>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(errorDiv);
            setTimeout(() => errorDiv.remove(), 5000);
        }

        // Load current user data
        async function loadCurrentUser() {
            try {
                const token = localStorage.getItem('token');
                if (!token) {
                    window.location.href = 'login'
                }

                currentUser = await fetchAPI('/current-user');
                
                // Validate token and user role
                if (!currentUser || !currentUser.role) {
                    console.error('Invalid user data or missing role');
                    localStorage.removeItem('token');
                    currentUser = { role: 'visitor', name: 'Guest' };
                    updateUserInfo();
                    return;
                }

                // Validate token is still valid
                if (token && currentUser) {
                    localStorage.setItem('token', token);
                    localStorage.setItem('userRole', currentUser.role);
                    localStorage.setItem('userName', currentUser.name);
                }

                updateUserInfo();
                
                // Initialize dynamic sidebar after user is loaded
                if (typeof renderDynamicSidebar === 'function') {
                    const currentPage = getCurrentPageIdentifier();
                    renderDynamicSidebar(currentUser.role, currentPage);
                }
            } catch(err) {
                console.error("Failed to load user:", err);
                currentUser = { role: 'visitor', name: 'Guest' };
                localStorage.removeItem('token');
                localStorage.removeItem('userRole');
                localStorage.removeItem('userName');
                updateUserInfo();
            }
        }

        function updateUserInfo() {
            const userNameElement = document.getElementById('nav-user-name');
            const userAvatarElement = document.getElementById('nav-user-avatar');
            
            if (userNameElement) {
                userNameElement.innerText = currentUser?.name?.split(' ')[0] || 'Guest';
            }
            
            if (userAvatarElement) {
                const userName = currentUser?.name || 'Guest';
                userAvatarElement.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(userName)}&background=0f5238&color=fff&size=32`;
            }
        }

        function getCurrentPageIdentifier() {
            const path = window.location.pathname;
            
            // Map paths to page identifiers
            const pageMap = {
                '/admin': 'admin-dashboard',
                '/admin/users': 'admin-users',
                '/admin/matches': 'admin-matches',
                '/admin/academic': 'admin-academic',
                '/admin/settings': 'admin-settings',
                '/teacher': 'teacher-dashboard',
                '/teacher/academic': 'teacher-academic',
                '/teacher/performance': 'teacher-performance',
                '/teacher/rankings': 'teacher-rankings',
                '/teacher/assignments': 'teacher-assignments',
                '/manager': 'manager-dashboard',
                '/manager/team': 'manager-team',
                '/manager/matches': 'manager-matches',
                '/manager/stats': 'manager-stats',
                '/manager/training': 'manager-training',
                '/player': 'player-dashboard',
                '/player/profile': 'player-profile',
                '/player/matches': 'player-matches',
                '/player/stats': 'player-stats',
                '/player/academic': 'player-academic',
                '/player/training': 'player-training',
                '/standings': 'standings',
                '/schedule': 'schedule',
                '/teams': 'teams',
                '/': 'home'
            };
            
            return pageMap[path] || 'dashboard';
        }

        // Check authentication status on each page
        function checkAuthenticationStatus() {
            const token = localStorage.getItem('token');
            const userRole = localStorage.getItem('userRole');
            const currentPage = window.location.pathname;
            
            // If no token, redirect to login
            if (!token && !currentPage.includes('/login') && !currentPage.includes('/register')) {
                window.location.href = '/login';
                return false;
            }
            
            // If token exists but no user data, try to reload user
            if (token && (!currentUser || !currentUser.role)) {
                loadCurrentUser();
                return false;
            }
            
            return true;
        }

        // Initialize on page load
        window.addEventListener('DOMContentLoaded', function() {
            loadCurrentUser();
            
            // Check authentication status every 30 seconds
            setInterval(checkAuthenticationStatus, 30000);
        });
    </script>

    @yield('scripts')
</body>

</html>
