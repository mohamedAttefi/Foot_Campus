@extends('layouts.app', ['userRole' => 'player', 'currentPage' => 'player-profile'])

@section('title', 'Player Profile | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8 flex-1">
            <!-- Hero Profile Section -->
            <section class="relative grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 bg-surface-container-lowest rounded-2xl p-8 flex flex-col md:flex-row gap-8 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 pitch-gradient opacity-5 rounded-bl-full -mr-20 -mt-20"></div>
                    <div class="relative shrink-0">
                        <img id="profile-avatar" alt="Player Profile" class="w-48 h-48 md:w-56 md:h-56 rounded-2xl object-cover shadow-xl shadow-primary/10" src="https://ui-avatars.com/api/?name=Player&background=0f5238&color=fff&size=200" />
                        <div class="absolute -bottom-3 -right-3 w-14 h-14 bg-secondary flex items-center justify-center rounded-xl border-4 border-surface-container-lowest">
                            <span id="player-jersey" class="text-white font-headline font-extrabold text-2xl">--</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <div>
                            <span id="player-badge" class="text-[10px] uppercase tracking-widest font-bold text-secondary-container bg-secondary/10 px-3 py-1 rounded-full">Elite Prospect • U-19</span>
                            <h2 id="player-name" class="text-4xl font-headline font-extrabold text-on-surface mt-2">Loading...</h2>
                            <p class="text-on-surface-variant font-medium flex items-center gap-2 mt-1">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                                <span id="player-team-location">St. Jude's Academy</span> • <span id="player-position">Central Midfielder</span>
                            </p>
                        </div>
                        <div class="flex gap-4 pt-4">
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Height</p>
                                <p id="player-height" class="text-sm font-bold">-- cm</p>
                            </div>
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Weight</p>
                                <p id="player-weight" class="text-sm font-bold">-- kg</p>
                            </div>
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Foot</p>
                                <p id="player-foot" class="text-sm font-bold">Right</p>
                            </div>
                        </div>
                        <div class="flex gap-3 pt-2">
                            <button class="pitch-gradient text-on-primary px-6 py-2.5 rounded-xl font-headline font-bold text-sm">Download Scout Report</button>
                            <button class="bg-surface-container-high text-on-surface-variant px-4 py-2.5 rounded-xl font-headline font-bold text-sm">Share</button>
                        </div>
                    </div>
                </div>
                <!-- Quick Stats Bento Card -->
                <div class="bg-surface-container-lowest rounded-2xl p-6 flex flex-col justify-between">
                    <h3 class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-6">Season Snapshot</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-end">
                            <div>
                                <p id="quick-goals" class="text-3xl font-headline font-extrabold text-primary">--</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Goals Scored</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1" id="goals-spark"></div>
                        </div>
                        <div class="flex justify-between items-end">
                            <div>
                                <p id="quick-assists" class="text-3xl font-headline font-extrabold text-secondary">--</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Assists</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1" id="assists-spark"></div>
                        </div>
                        <div class="flex justify-between items-end">
                            <div>
                                <p id="quick-pass-accuracy" class="text-3xl font-headline font-extrabold text-on-surface">--%</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Pass Accuracy</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1" id="pass-spark"></div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-outline-variant/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-tertiary-fixed-variant">workspace_premium</span>
                            </div>
                            <div>
                                <p id="academic-status" class="text-xs font-bold">Academic Status: --</p>
                                <p id="academic-gpa" class="text-[10px] text-outline">GPA: -- / 4.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Detailed Performance & History - Full Width Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Detailed Performance Stats Table (spans 2 columns) -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-headline font-extrabold text-on-surface">Match Statistics</h3>
                        <div class="flex gap-2">
                            <span class="text-xs font-bold text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full cursor-pointer filter-btn active-filter" data-filter="all">All</span>
                            <span class="text-xs font-bold text-outline px-3 py-1 rounded-full cursor-pointer filter-btn hover:bg-surface-container-low" data-filter="league">League</span>
                            <span class="text-xs font-bold text-outline px-3 py-1 rounded-full cursor-pointer filter-btn hover:bg-surface-container-low" data-filter="cup">Cup</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-surface-container-low border-none">
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline">Tournament</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">MP</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">G</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">A</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">YC</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">RC</th>
                                        <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-right">Rating</th>
                                    </tr>
                                </thead>
                                <tbody id="stats-table-body" class="divide-y divide-surface-container-low">
                                    <tr><td colspan="7" class="px-6 py-8 text-center text-outline">Loading statistics...</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Career Timeline + Attribute Analysis -->
                <div class="space-y-8">
                    <!-- Career Timeline -->
                    <div class="bg-surface-container-lowest rounded-2xl p-6">
                        <h3 class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-6">Career Timeline</h3>
                        <div id="career-timeline" class="space-y-6">
                            <div class="text-center text-outline py-4">Loading career data...</div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </main>
    </div>

    <style>
        .pitch-gradient {
            background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%);
        }
        .filter-btn.active-filter {
            background-color: #0f5238;
            color: white;
        }
    </style>

    <script>
        // API Configuration
        const API_BASE = 'http://127.0.0.1:8000/api';

        // Sample data for demonstration
        const samplePlayerData = {
            name: "Alex Johnson",
            position: "Central Midfielder",
            team_location: "St. Jude's Academy",
            height: "178",
            weight: "72",
            foot: "Right",
            jersey: "10",
            goals: 12,
            assists: 8,
            pass_accuracy: 85,
            gpa: 3.7,
            academic_status: "Eligible",
            attributes: {
                pace: 78,
                shooting: 72,
                passing: 85,
                dribbling: 80,
                defending: 70
            },
            match_stats: [
                { tournament: "Premier League U19", mp: 15, g: 8, a: 5, yc: 2, rc: 0, rating: 7.8 },
                { tournament: "National Cup", mp: 3, g: 2, a: 1, yc: 0, rc: 0, rating: 8.2 },
                { tournament: "Premier League U19", mp: 12, g: 2, a: 2, yc: 3, rc: 0, rating: 7.5 }
            ],
            career: [
                { year: "2023", team: "St. Jude's Academy U19", level: "Elite Academy" },
                { year: "2022", team: "Riverside FC U17", level: "Regional Academy" },
                { year: "2021", team: "Youth Development Center", level: "Foundation" }
            ]
        };

        // Load player profile data
        async function loadPlayerProfile() {
            try {
                // Try to load from API first
                const token = localStorage.getItem('token');
                let playerData = null;
                
                if (token) {
                    try {
                        const response = await fetch(`${API_BASE}/current-user`, {
                            headers: {
                                'Authorization': `Bearer ${token}`,
                                'Content-Type': 'application/json'
                            }
                        });
                        
                        if (response.ok) {
                            const userData = await response.json();
                            playerData = userData.player;
                        }
                    } catch (error) {
                        console.log('API call failed, using sample data');
                    }
                }
                
                // Use sample data if API fails or no token
                const data = playerData || samplePlayerData;
                
                // Update profile information
                document.getElementById('player-name').textContent = data.name;
                document.getElementById('player-position').textContent = data.position;
                document.getElementById('player-team-location').textContent = data.team_location;
                document.getElementById('player-height').textContent = data.height + ' cm';
                document.getElementById('player-weight').textContent = data.weight + ' kg';
                document.getElementById('player-foot').textContent = data.foot;
                document.getElementById('player-jersey').textContent = data.jersey;
                
                // Update quick stats
                document.getElementById('quick-goals').textContent = data.goals;
                document.getElementById('quick-assists').textContent = data.assists;
                document.getElementById('quick-pass-accuracy').textContent = data.pass_accuracy + '%';
                document.getElementById('academic-status').textContent = 'Academic Status: ' + data.academic_status;
                document.getElementById('academic-gpa').textContent = 'GPA: ' + data.gpa + ' / 4.0';
                
                // Update attribute bars
                updateAttributeBar('pace', data.attributes.pace);
                updateAttributeBar('shooting', data.attributes.shooting);
                updateAttributeBar('passing', data.attributes.passing);
                updateAttributeBar('dribbling', data.attributes.dribbling);
                updateAttributeBar('defending', data.attributes.defending);
                
                // Create sparklines
                createSparkline('goals-spark', [3, 5, 2, 8, 4, 6, 12]);
                createSparkline('assists-spark', [1, 3, 2, 4, 1, 5, 8]);
                createSparkline('pass-spark', [78, 82, 80, 85, 83, 84, 85]);
                
                // Load match statistics
                loadMatchStatistics(data.match_stats || []);
                
                // Load career timeline
                loadCareerTimeline(data.career || []);
                
            } catch (error) {
                console.error('Error loading player profile:', error);
            }
        }

        function updateAttributeBar(attribute, value) {
            const valueElement = document.getElementById(attribute + '-value');
            const barElement = document.getElementById(attribute + '-bar');
            
            if (valueElement) valueElement.textContent = value;
            if (barElement) barElement.style.width = value + '%';
        }

        function createSparkline(containerId, data) {
            const container = document.getElementById(containerId);
            if (!container || !data.length) return;
            
            const max = Math.max(...data);
            const min = Math.min(...data);
            const range = max - min || 1;
            
            const bars = data.map(value => {
                const height = ((value - min) / range) * 32;
                return `<div class="bg-primary/60 rounded-sm" style="height: ${height}px; width: 3px;"></div>`;
            });
            
            container.innerHTML = bars.join('');
        }

        function loadMatchStatistics(stats) {
            const tbody = document.getElementById('stats-table-body');
            if (!stats.length) {
                tbody.innerHTML = '<tr><td colspan="7" class="px-6 py-8 text-center text-outline">No match statistics available</td></tr>';
                return;
            }
            
            const rows = stats.map(stat => `
                <tr class="hover:bg-surface/50 transition-colors">
                    <td class="px-6 py-4 font-medium">${stat.tournament}</td>
                    <td class="px-6 py-4 text-center">${stat.mp}</td>
                    <td class="px-6 py-4 text-center font-bold text-primary">${stat.g}</td>
                    <td class="px-6 py-4 text-center font-bold text-secondary">${stat.a}</td>
                    <td class="px-6 py-4 text-center">${stat.yc}</td>
                    <td class="px-6 py-4 text-center">${stat.rc}</td>
                    <td class="px-6 py-4 text-right font-bold">${stat.rating.toFixed(1)}</td>
                </tr>
            `);
            
            tbody.innerHTML = rows.join('');
        }

        function loadCareerTimeline(career) {
            const container = document.getElementById('career-timeline');
            if (!career.length) {
                container.innerHTML = '<div class="text-center text-outline py-8">No career history available</div>';
                return;
            }
            
            const timeline = career.map(item => `
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-3 h-3 bg-primary rounded-full"></div>
                        <div class="w-0.5 h-16 bg-outline-variant/30"></div>
                    </div>
                    <div class="flex-1">
                        <p class="font-bold text-sm">${item.year}</p>
                        <p class="font-medium">${item.team}</p>
                        <p class="text-xs text-outline">${item.level}</p>
                    </div>
                </div>
            `);
            
            container.innerHTML = timeline.join('');
        }

        // Filter functionality
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('filter-btn')) {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active-filter', 'bg-primary', 'text-white');
                    btn.classList.add('text-outline');
                });
                
                e.target.classList.add('active-filter', 'bg-primary', 'text-white');
                e.target.classList.remove('text-outline');
                
                // Filter stats based on tournament type
                const filter = e.target.dataset.filter;
                // Implement filtering logic here
            }
        });

        // Initialize
        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                console.warn("No auth token - demo mode with sample data will still work");
            }
            loadPlayerProfile();
        });
    </script>
@endsection
</html>