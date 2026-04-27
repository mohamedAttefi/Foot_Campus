@php
    // Get current user role from session or pass as parameter
    $userRole = $userRole ?? 'visitor';
    $currentPage = $currentPage ?? 'dashboard';
@endphp

<!-- Dynamic Sidebar Component -->
<aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md text-emerald-900 dark:text-emerald-400 font-['Manrope'] tracking-wide text-sm font-semibold shadow-xl shadow-emerald-900/5 z-50">
    <!-- Logo Section -->
    <div class="mb-10 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container overflow-hidden">
            <img alt="Scholastic Pitch Logo" class="w-full h-full object-cover"
                data-alt="minimalist athletic logo with emerald green tones and sharp geometric crest"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-BNVY3U4SbqquA4w0JzTT0fG2OnUD52d9Y8zB2J6RYJCX_fea3qUwYPY4k0LHdG4g_sHPVgDtwAMwgyMzVg5uTgRzsMhbbHdI2ckaCnNUF61chCEAdU13cYJ7aqHGEgGa-Plybh_KU3ghjM6j-Hr3syyd7FNMuvkLjHRHsG0u8wrvmGQ6sfCCYuFvaPljCUkPPhNCXRbMHVFMoClKbZZLdWJqFeoNB32wy-XcBX4O20EvTS935TPeJJx91Xo6ajhcueADjofXYbM" />
        </div>
        <div>
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">
                The Scholastic Pitch</h1>
            <p class="text-[10px] opacity-70 tracking-widest uppercase">Elite Academy League</p>
        </div>
    </div>

    <!-- Navigation Items -->
    <nav id="sidebar-nav" class="flex-1 space-y-2">
        @php
            $navigationItems = [
                'admin' => [
                    ['icon' => 'dashboard', 'label' => 'Dashboard', 'href' => '/admin', 'active' => $currentPage === 'admin-dashboard'],
                    ['icon' => 'groups', 'label' => 'User Management', 'href' => '/admin/users', 'active' => $currentPage === 'admin-users'],
                    ['icon' => 'sports_soccer', 'label' => 'Match Management', 'href' => '/admin/matches', 'active' => $currentPage === 'admin-matches'],
                    ['icon' => 'leaderboard', 'label' => 'League Table', 'href' => '/standings', 'active' => $currentPage === 'standings'],
                    ['icon' => 'school', 'label' => 'Academic Rules', 'href' => '/admin/academic', 'active' => $currentPage === 'admin-academic'],
                    ['icon' => 'settings', 'label' => 'System Settings', 'href' => '/admin/settings', 'active' => $currentPage === 'admin-settings']
                ],
                'teacher' => [
                    ['icon' => 'dashboard', 'label' => 'Dashboard', 'href' => '/teacher', 'active' => $currentPage === 'teacher-dashboard'],
                    ['icon' => 'school', 'label' => 'Academic Hub', 'href' => '/teacher/academic', 'active' => $currentPage === 'teacher-academic'],
                    ['icon' => 'query_stats', 'label' => 'Student Performance', 'href' => '/teacher/performance', 'active' => $currentPage === 'teacher-performance'],
                    ['icon' => 'leaderboard', 'label' => 'Class Rankings', 'href' => '/teacher/rankings', 'active' => $currentPage === 'teacher-rankings'],
                    ['icon' => 'assignment', 'label' => 'Assignments', 'href' => '/teacher/assignments', 'active' => $currentPage === 'teacher-assignments']
                ],
                'coach' => [
                    ['icon' => 'dashboard', 'label' => 'Dashboard', 'href' => '/manager', 'active' => $currentPage === 'manager-dashboard'],
                    ['icon' => 'groups', 'label' => 'Team Management', 'href' => '/manager/team', 'active' => $currentPage === 'manager-team'],
                    ['icon' => 'sports_soccer', 'label' => 'Matches', 'href' => '/manager/matches', 'active' => $currentPage === 'manager-matches'],
                    ['icon' => 'query_stats', 'label' => 'Player Stats', 'href' => '/manager/stats', 'active' => $currentPage === 'manager-stats'],
                    ['icon' => 'fitness_center', 'label' => 'Training', 'href' => '/manager/training', 'active' => $currentPage === 'manager-training'],
                    ['icon' => 'leaderboard', 'label' => 'League Table', 'href' => '/standings', 'active' => $currentPage === 'standings']
                ],
                'player' => [
                    ['icon' => 'dashboard', 'label' => 'Dashboard', 'href' => '/player', 'active' => $currentPage === 'player-dashboard'],
                    ['icon' => 'person', 'label' => 'My Profile', 'href' => '/player/profile', 'active' => $currentPage === 'player-profile'],
                    ['icon' => 'sports_soccer', 'label' => 'My Matches', 'href' => '/player/matches', 'active' => $currentPage === 'player-matches'],
                    ['icon' => 'query_stats', 'label' => 'My Stats', 'href' => '/player/stats', 'active' => $currentPage === 'player-stats'],
                    ['icon' => 'school', 'label' => 'Academic Progress', 'href' => '/player/academic', 'active' => $currentPage === 'player-academic'],
                    ['icon' => 'fitness_center', 'label' => 'Training Schedule', 'href' => '/player/training', 'active' => $currentPage === 'player-training']
                ],
                'visitor' => [
                    ['icon' => 'dashboard', 'label' => 'Dashboard', 'href' => '/', 'active' => $currentPage === 'home'],
                    ['icon' => 'leaderboard', 'label' => 'League Table', 'href' => '/standings', 'active' => $currentPage === 'standings'],
                    ['icon' => 'sports_soccer', 'label' => 'Match Schedule', 'href' => '/schedule', 'active' => $currentPage === 'schedule'],
                    ['icon' => 'groups', 'label' => 'Teams', 'href' => '/teams', 'active' => $currentPage === 'teams']
                ]
            ];

            $items = $navigationItems[$userRole] ?? $navigationItems['visitor'];
        @endphp

        @foreach($items as $item)
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl 
                {{ $item['active'] 
                    ? 'text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700' 
                    : 'text-slate-500 dark:text-slate-400' 
                }} hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300"
                href="{{ $item['href'] }}">
                <span class="material-symbols-outlined">{{ $item['icon'] }}</span>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <!-- Action Buttons -->
    <div class="mt-auto space-y-2 pt-6">
        @php
            $actionButtons = [
                'admin' => [
                    'icon' => 'admin_panel_settings',
                    'label' => 'System Admin',
                    'onclick' => 'createMatch()',
                    'color' => 'bg-primary'
                ],
                'teacher' => [
                    'icon' => 'assignment',
                    'label' => 'Create Assignment',
                    'onclick' => 'createAssignment()',
                    'color' => 'bg-primary'
                ],
                'coach' => [
                    'icon' => 'add',
                    'label' => 'Create Match',
                    'onclick' => 'createMatch()',
                    'color' => 'bg-primary'
                ],
                'player' => [
                    'icon' => 'calendar_today',
                    'label' => 'View Schedule',
                    'onclick' => 'viewSchedule()',
                    'color' => 'bg-primary'
                ],
                'visitor' => [
                    'icon' => 'how_to_reg',
                    'label' => 'Register Interest',
                    'onclick' => 'registerInterest()',
                    'color' => 'bg-primary'
                ]
            ];

            $actionButton = $actionButtons[$userRole] ?? $actionButtons['visitor'];
        @endphp

        <button onclick="{{ $actionButton['onclick'] }}" 
            class="w-full {{ $actionButton['color'] }} text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
            <span class="material-symbols-outlined">{{ $actionButton['icon'] }}</span>
            {{ $actionButton['label'] }}
        </button>

        <!-- Settings and Support -->
        <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500"
            href="/profile">
            <span class="material-symbols-outlined">settings</span>
            <span>Settings</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500"
            href="/help">
            <span class="material-symbols-outlined">help</span>
            <span>Support</span>
        </a>
        
        <!-- Logout -->
        @if($userRole !== 'visitor')
        <button onclick="handleLogout()" class="w-full flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-red-50/50 dark:hover:bg-red-900/20 transition-all duration-300 text-red-600 dark:text-red-400 font-medium">
            <span class="material-symbols-outlined">logout</span>
            <span>Logout</span>
        </button>
        @endif
    </div>
</aside>

<!-- Dynamic Sidebar JavaScript -->
<script>
function renderDynamicSidebar(userRole, currentPage) {
    const sidebarNav = document.getElementById('sidebar-nav');
    
    const navigationItems = {
        admin: [
            { icon: 'dashboard', label: 'Dashboard', href: '/admin', active: currentPage === 'admin-dashboard' },
            { icon: 'groups', label: 'User Management', href: '/admin/users', active: currentPage === 'admin-users' },
            { icon: 'sports_soccer', label: 'Match Management', href: '/admin/matches', active: currentPage === 'admin-matches' },
            { icon: 'leaderboard', label: 'League Table', href: '/standings', active: currentPage === 'standings' },
            { icon: 'school', label: 'Academic Rules', href: '/admin/academic', active: currentPage === 'admin-academic' },
            { icon: 'settings', label: 'System Settings', href: '/admin/settings', active: currentPage === 'admin-settings' }
        ],
        teacher: [
            { icon: 'dashboard', label: 'Dashboard', href: '/teacher', active: currentPage === 'teacher-dashboard' },
            { icon: 'school', label: 'Academic Hub', href: '/teacher/academic', active: currentPage === 'teacher-academic' },
            { icon: 'query_stats', label: 'Student Performance', href: '/teacher/performance', active: currentPage === 'teacher-performance' },
            { icon: 'leaderboard', label: 'Class Rankings', href: '/teacher/rankings', active: currentPage === 'teacher-rankings' },
            { icon: 'assignment', label: 'Assignments', href: '/teacher/assignments', active: currentPage === 'teacher-assignments' }
        ],
        coach: [
            { icon: 'dashboard', label: 'Dashboard', href: '/manager', active: currentPage === 'manager-dashboard' },
            { icon: 'groups', label: 'Team Management', href: '/manager/team', active: currentPage === 'manager-team' },
            { icon: 'sports_soccer', label: 'Matches', href: '/manager/matches', active: currentPage === 'manager-matches' },
            { icon: 'query_stats', label: 'Player Stats', href: '/manager/stats', active: currentPage === 'manager-stats' },
            { icon: 'fitness_center', label: 'Training', href: '/manager/training', active: currentPage === 'manager-training' },
            { icon: 'leaderboard', label: 'League Table', href: '/standings', active: currentPage === 'standings' }
        ],
        player: [
            { icon: 'dashboard', label: 'Dashboard', href: '/player', active: currentPage === 'player-dashboard' },
            { icon: 'person', label: 'My Profile', href: '/player/profile', active: currentPage === 'player-profile' },
            { icon: 'sports_soccer', label: 'My Matches', href: '/player/matches', active: currentPage === 'player-matches' },
            { icon: 'query_stats', label: 'My Stats', href: '/player/stats', active: currentPage === 'player-stats' },
            { icon: 'school', label: 'Academic Progress', href: '/player/academic', active: currentPage === 'player-academic' },
            { icon: 'fitness_center', label: 'Training Schedule', href: '/player/training', active: currentPage === 'player-training' }
        ],
        visitor: [
            { icon: 'dashboard', label: 'Dashboard', href: '/', active: currentPage === 'home' },
            { icon: 'leaderboard', label: 'League Table', href: '/standings', active: currentPage === 'standings' },
            { icon: 'sports_soccer', label: 'Match Schedule', href: '/schedule', active: currentPage === 'schedule' },
            { icon: 'groups', label: 'Teams', href: '/teams', active: currentPage === 'teams' }
        ]
    };

    const items = navigationItems[userRole] || navigationItems.visitor;
    
    sidebarNav.innerHTML = items.map(item => `
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl ${
            item.active 
                ? 'text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700' 
                : 'text-slate-500 dark:text-slate-400'
        } hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300"
            href="${item.href}">
            <span class="material-symbols-outlined">${item.icon}</span>
            <span>${item.label}</span>
        </a>
    `).join('');

    updateDynamicActionButtons(userRole);
}

function updateDynamicActionButtons(userRole) {
    const actionButtonContainer = document.querySelector('.mt-auto.space-y-2.pt-6');
    
    const actionButtons = {
        admin: `
            <button onclick="createMatch()" class="w-full bg-primary text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
                <span class="material-symbols-outlined">admin_panel_settings</span>
                System Admin
            </button>
        `,
        teacher: `
            <button onclick="createAssignment()" class="w-full bg-primary text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
                <span class="material-symbols-outlined">assignment</span>
                Create Assignment
            </button>
        `,
        coach: `
            <button onclick="createMatch()" class="w-full bg-primary text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
                <span class="material-symbols-outlined">add</span>
                Create Match
            </button>
        `,
        player: `
            <button onclick="viewSchedule()" class="w-full bg-primary text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
                <span class="material-symbols-outlined">calendar_today</span>
                View Schedule
            </button>
        `,
        visitor: `
            <button onclick="registerInterest()" class="w-full bg-primary text-on-primary py-3 rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-opacity mb-6">
                <span class="material-symbols-outlined">how_to_reg</span>
                Register Interest
            </button>
        `
    };

    const buttons = actionButtons[userRole] || actionButtons.visitor;
    const settingsLinks = `
        <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500"
            href="/profile">
            <span class="material-symbols-outlined">settings</span>
            <span>Settings</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500"
            href="/help">
            <span class="material-symbols-outlined">help</span>
            <span>Support</span>
        </a>
    `;

    actionButtonContainer.innerHTML = buttons + settingsLinks;
}

// Action button functions
function createMatch() {
    const userRole = currentUser?.role;
    if (userRole === 'admin') {
        alert('Admin: Opening system administration panel...');
    } else if (userRole === 'coach') {
        alert('Coach: Opening match creation form...');
    }
}

function createAssignment() {
    alert('Teacher: Opening assignment creation form...');
}

function viewSchedule() {
    alert('Player: Viewing training and match schedule...');
}

function registerInterest() {
    alert('Visitor: Opening registration form...');
}

// Logout function
async function handleLogout() {
    try {
        // Show confirmation dialog
        const result = await Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out of the system.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0f5238',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Yes, logout',
            cancelButtonText: 'Cancel'
        });

        if (result.isConfirmed) {
            // Get token from localStorage
            const token = localStorage.getItem('token');
            
            if (token) {
                // Call logout API
                const response = await fetch('/api/logout', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    // Clear local storage
                    localStorage.removeItem('token');
                    localStorage.removeItem('user');
                    
                    // Show success message
                    await Swal.fire({
                        title: 'Logged Out!',
                        text: 'You have been successfully logged out.',
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    });
                    
                    // Redirect to login page
                    window.location.href = '/login';
                } else {
                    throw new Error('Logout failed');
                }
            } else {
                // No token found, redirect to login
                window.location.href = '/login';
            }
        }
    } catch (error) {
        console.error('Logout error:', error);
        
        // Show error message but still redirect
        await Swal.fire({
            title: 'Logout Error',
            text: 'There was an issue logging out. Redirecting to login page...',
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
        
        // Force redirect to login
        setTimeout(() => {
            window.location.href = '/login';
        }, 2000);
    }
}
</script>
