@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-dashboard'])

@section('title', 'Admin Dashboard | The Scholastic Pitch')
@section('layouts.dynamic-dashboard')


@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Admin Dashboard</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                System Administration & Overview</p>
        </div>
        <div class="flex gap-3">
            <button onclick="refreshDashboard()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl hover:bg-surface-container-high transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">refresh</span>
                Refresh
            </button>
        </div>
    </section>

    <!-- Stats Overview Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">groups</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalUsers">0</p>
                    <p class="text-sm text-on-surface-variant">Total Users</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">sports_soccer</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="totalTeams">0</p>
                    <p class="text-sm text-on-surface-variant">Total Teams</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">event</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="totalMatches">0</p>
                    <p class="text-sm text-on-surface-variant">Total Matches</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">school</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="totalSubjects">0</p>
                    <p class="text-sm text-on-surface-variant">Total Subjects</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="/admin/users" class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">people</span>
                </div>
                <div>
                    <h3 class="font-headline font-bold text-on-surface">Users</h3>
                    <p class="text-sm text-on-surface-variant">Manage users & approval</p>
                </div>
            </div>
        </a>
        
        <a href="/admin/teams" class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-secondary to-secondary-container flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">groups</span>
                </div>
                <div>
                    <h3 class="font-headline font-bold text-on-surface">Teams</h3>
                    <p class="text-sm text-on-surface-variant">Manage teams & rosters</p>
                </div>
            </div>
        </a>
        
        <a href="/admin/matches" class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary to-tertiary-container flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">sports_soccer</span>
                </div>
                <div>
                    <h3 class="font-headline font-bold text-on-surface">Matches</h3>
                    <p class="text-sm text-on-surface-variant">Schedule & manage matches</p>
                </div>
            </div>
        </a>
        
        <a href="/admin/academic" class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-surface-container-highest to-surface-container flex items-center justify-center text-on-surface group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-xl">school</span>
                </div>
                <div>
                    <h3 class="font-headline font-bold text-on-surface">Academic</h3>
                    <p class="text-sm text-on-surface-variant">Manage subjects & rules</p>
                </div>
            </div>
        </a>
    </div>

    <!-- Recent Activity -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="font-headline text-xl font-bold">Recent Activity</h3>
                <p class="text-sm text-on-surface-variant">Latest system updates and actions</p>
            </div>
            <button onclick="refreshActivity()" class="bg-surface-container-highest text-on-surface font-headline font-bold py-2 px-4 rounded-lg hover:bg-surface-container transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">refresh</span>
                Refresh
            </button>
        </div>
        
        <div class="space-y-3" id="recentActivity">
            <!-- Activity items will be populated by JavaScript -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    async function loadDashboardData() {
        try {
            // Load available data that doesn't require special permissions
            const [teamsResponse, matchesResponse, subjectsResponse] = await Promise.all([
                fetchAPI('/team'),
                fetchAPI('/matches'),
                fetchAPI('/subject')
            ]);
            
            // Get current user info
            const currentUser = await fetchAPI('/current-user');
            
            // Update stats - use sample data for users count if needed
            document.getElementById('totalUsers').textContent = '12'; // Placeholder or fetch from a stats endpoint
            document.getElementById('totalTeams').textContent = Array.isArray(teamsResponse) ? teamsResponse.length : (teamsResponse.data?.length || 0);
            document.getElementById('totalMatches').textContent = Array.isArray(matchesResponse) ? matchesResponse.length : (matchesResponse.data?.length || 0);
            document.getElementById('totalSubjects').textContent = Array.isArray(subjectsResponse) ? subjectsResponse.length : (subjectsResponse.data?.length || 0);
            
            // Load recent activity
            await loadRecentActivity();
        } catch (error) {
            console.error(error);
            showError('Failed to load dashboard data');
        }
    }

    async function loadRecentActivity() {
        const container = document.getElementById('recentActivity');
        
        // Sample activity data (replace with real API call)
        const activities = [
            { type: 'user', message: 'New user registered', time: '2 minutes ago', icon: 'person_add', color: 'primary' },
            { type: 'team', message: 'Team created', time: '15 minutes ago', icon: 'groups', color: 'secondary' },
            { type: 'match', message: 'Match scheduled', time: '1 hour ago', icon: 'sports_soccer', color: 'tertiary' },
            { type: 'academic', message: 'Subject added', time: '3 hours ago', icon: 'school', color: 'surface' }
        ];
        
        container.innerHTML = activities.map(activity => `
            <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-${activity.color}-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-${activity.color} text-sm">${activity.icon}</span>
                    </div>
                    <div>
                        <p class="font-medium text-on-surface">${activity.message}</p>
                        <p class="text-xs text-on-surface-variant">${activity.time}</p>
                    </div>
                </div>
            </div>
        `).join('');
    }

    function refreshDashboard() {
        loadDashboardData();
        showSuccess('Dashboard refreshed');
    }

    function refreshActivity() {
        loadRecentActivity();
        showSuccess('Activity refreshed');
    }

    // Initialize dashboard on page load
    window.addEventListener('DOMContentLoaded', loadDashboardData);
</script>
@endsection
