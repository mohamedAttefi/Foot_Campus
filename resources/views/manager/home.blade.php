@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-dashboard'])

@section('title', 'Manager Dashboard | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Manager Dashboard</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Tactical Command & Team Overview</p>
        </div>
        <div class="flex gap-3">
            <div class="flex flex-col items-end">
                <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Season Win Rate</span>
                <span class="text-2xl font-black text-primary">84%</span>
            </div>
            <div class="h-10 w-px bg-outline-variant/30 mx-2"></div>
            <div class="flex flex-col items-end">
                <span class="text-[10px] text-on-surface-variant uppercase font-bold tracking-tighter">Academic Avg.</span>
                <span class="text-2xl font-black text-secondary">A-</span>
            </div>
        </div>
    </section>

    <!-- Quick Actions Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="{{ route('manager.create-lineup') }}" class="group bg-surface-container-low rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                    <span class="material-symbols-outlined text-primary">sports_soccer</span>
                </div>
                <span class="material-symbols-outlined text-outline-variant group-hover:text-primary transition-colors">arrow_forward</span>
            </div>
            <h3 class="font-bold text-lg text-on-surface mb-1">Create Lineup</h3>
            <p class="text-sm text-on-surface-variant">Build tactical formations for upcoming matches</p>
        </a>

        <a href="{{ route('manager.match-details') }}" class="group bg-surface-container-low rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center group-hover:bg-secondary/20 transition-colors">
                    <span class="material-symbols-outlined text-secondary">calendar_month</span>
                </div>
                <span class="material-symbols-outlined text-outline-variant group-hover:text-secondary transition-colors">arrow_forward</span>
            </div>
            <h3 class="font-bold text-lg text-on-surface mb-1">Match Details</h3>
            <p class="text-sm text-on-surface-variant">View upcoming fixtures and match information</p>
        </a>

        <a href="{{ route('manager.team-management') }}" class="group bg-surface-container-low rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-tertiary/10 rounded-full flex items-center justify-center group-hover:bg-tertiary/20 transition-colors">
                    <span class="material-symbols-outlined text-tertiary">groups</span>
                </div>
                <span class="material-symbols-outlined text-outline-variant group-hover:text-tertiary transition-colors">arrow_forward</span>
            </div>
            <h3 class="font-bold text-lg text-on-surface mb-1">Team Management</h3>
            <p class="text-sm text-on-surface-variant">Manage player roster and team settings</p>
        </a>

        <a href="{{ route('manager.player-stats') }}" class="group bg-surface-container-low rounded-2xl p-6 hover:shadow-lg transition-all duration-300 hover:scale-105">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-error/10 rounded-full flex items-center justify-center group-hover:bg-error/20 transition-colors">
                    <span class="material-symbols-outlined text-error">query_stats</span>
                </div>
                <span class="material-symbols-outlined text-outline-variant group-hover:text-error transition-colors">arrow_forward</span>
            </div>
            <h3 class="font-bold text-lg text-on-surface mb-1">Player Stats</h3>
            <p class="text-sm text-on-surface-variant">Analyze performance metrics and analytics</p>
        </a>
    </div>

    <!-- Recent Activity & Upcoming Match -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Upcoming Match -->
        <div class="bg-surface-container-low rounded-2xl p-6">
            <h3 class="font-bold text-xl text-on-surface mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">event</span>
                Next Match
            </h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-surface-container-highest/50 rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                            <span class="text-sm font-bold text-primary">HC</span>
                        </div>
                        <div>
                            <p class="font-bold text-on-surface">Home Team</p>
                            <p class="text-sm text-on-surface-variant">Your Squad</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-xs text-on-surface-variant uppercase font-bold">VS</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div>
                            <p class="font-bold text-on-surface text-right">Opponent</p>
                            <p class="text-sm text-on-surface-variant text-right">Away Team</p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center">
                            <span class="text-sm font-bold text-secondary">OP</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-4 text-sm text-on-surface-variant">
                    <span class="material-symbols-outlined text-xs">schedule</span>
                    <span>Tomorrow, 3:00 PM</span>
                    <span class="material-symbols-outlined text-xs">location_on</span>
                    <span>Main Stadium</span>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('manager.create-lineup') }}" class="flex-1 bg-primary text-on-primary py-2 px-4 rounded-xl font-bold text-sm text-center hover:opacity-90 transition-opacity">
                        Create Lineup
                    </a>
                    <button class="flex-1 bg-surface-container-highest text-on-surface py-2 px-4 rounded-xl font-bold text-sm hover:bg-surface-container transition-colors">
                        View Details
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-surface-container-low rounded-2xl p-6">
            <h3 class="font-bold text-xl text-on-surface mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary">history</span>
                Recent Activity
            </h3>
            <div class="space-y-3">
                <div class="flex items-start gap-3 p-3 bg-surface-container-highest/30 rounded-lg">
                    <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <span class="material-symbols-outlined text-sm text-primary">check_circle</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-on-surface">Lineup created for upcoming match</p>
                        <p class="text-xs text-on-surface-variant">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-3 bg-surface-container-highest/30 rounded-lg">
                    <div class="w-8 h-8 rounded-full bg-secondary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <span class="material-symbols-outlined text-sm text-secondary">person_add</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-on-surface">New player added to roster</p>
                        <p class="text-xs text-on-surface-variant">1 day ago</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-3 bg-surface-container-highest/30 rounded-lg">
                    <div class="w-8 h-8 rounded-full bg-tertiary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <span class="material-symbols-outlined text-sm text-tertiary">emoji_events</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-on-surface">Match won against previous opponent</p>
                        <p class="text-xs text-on-surface-variant">3 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-primary to-primary-container rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-white/80">sports_score</span>
                <span class="text-xs font-bold text-white/60 uppercase tracking-wider">This Season</span>
            </div>
            <h3 class="text-3xl font-bold mb-1">12</h3>
            <p class="text-sm text-white/80">Matches Played</p>
        </div>

        <div class="bg-gradient-to-br from-secondary to-secondary-container rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-white/80">groups</span>
                <span class="text-xs font-bold text-white/60 uppercase tracking-wider">Active</span>
            </div>
            <h3 class="text-3xl font-bold mb-1">18</h3>
            <p class="text-sm text-white/80">Players Available</p>
        </div>

        <div class="bg-gradient-to-br from-tertiary to-tertiary-container rounded-2xl p-6 text-white">
            <div class="flex items-center justify-between mb-4">
                <span class="material-symbols-outlined text-white/80">trending_up</span>
                <span class="text-xs font-bold text-white/60 uppercase tracking-wider">Performance</span>
            </div>
            <h3 class="text-3xl font-bold mb-1">92%</h3>
            <p class="text-sm text-white/80">Academic Eligibility</p>
        </div>
    </div>
</div>
@endsection
