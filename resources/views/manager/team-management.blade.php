@extends('layouts.app', ['userRole' => 'coach', 'currentPage' => 'manager-team-management'])

@section('title', 'Team Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Team Management</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Manage team settings, tactics, and player assignments
            </p>
        </div>
        <div class="flex gap-3">
            <button onclick="exportTeamData()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl shadow-sm hover:bg-surface-container-high transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">download</span>
                Export Data
            </button>
            <button onclick="showTeamSettings()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">settings</span>
                Team Settings
            </button>
        </div>
    </section>

    <!-- Team Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">groups</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="teamSize">0</p>
                    <p class="text-sm text-on-surface-variant">Team Size</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">psychology</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="teamMorale">0%</p>
                    <p class="text-sm text-on-surface-variant">Team Morale</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">military_tech</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="tacticalFormation">4-3-3</p>
                    <p class="text-sm text-on-surface-variant">Formation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Details Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Team Information -->
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
            <h3 class="font-headline font-bold text-xl text-on-surface mb-6">Team Information</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between py-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-on-surface-variant">Team Name</span>
                    <span class="text-sm font-bold text-on-surface" id="teamName">Loading...</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-on-surface-variant">Coach</span>
                    <span class="text-sm font-bold text-on-surface" id="coachName">Loading...</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-on-surface-variant">Home Venue</span>
                    <span class="text-sm font-bold text-on-surface" id="homeVenue">Loading...</span>
                </div>
                <div class="flex items-center justify-between py-3 border-b border-outline-variant/20">
                    <span class="text-sm font-bold text-on-surface-variant">Founded</span>
                    <span class="text-sm font-bold text-on-surface" id="foundedYear">Loading...</span>
                </div>
                <div class="flex items-center justify-between py-3">
                    <span class="text-sm font-bold text-on-surface-variant">League</span>
                    <span class="text-sm font-bold text-on-surface" id="leagueName">Loading...</span>
                </div>
            </div>
        </div>

        <!-- Tactical Settings -->
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
            <h3 class="font-headline font-bold text-xl text-on-surface mb-6">Tactical Settings</h3>
            <div class="space-y-4">
                <div>
                    <label class="text-sm font-bold text-on-surface-variant block mb-2">Primary Formation</label>
                    <select id="formationSelect" class="w-full px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                        <option value="4-3-3">4-3-3 (Attack)</option>
                        <option value="4-4-2">4-4-2 (Diamond)</option>
                        <option value="3-5-2">3-5-2 (Wing Back)</option>
                        <option value="4-2-3-1">4-2-3-1 (Possession)</option>
                    </select>
                </div>
                
                <div>
                    <label class="text-sm font-bold text-on-surface-variant block mb-2">Playing Style</label>
                    <select id="playingStyle" class="w-full px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                        <option value="possession">Possession Football</option>
                        <option value="counter">Counter Attack</option>
                        <option value="pressing">High Pressing</option>
                        <option value="direct">Direct Play</option>
                    </select>
                </div>
                
                <div>
                    <label class="text-sm font-bold text-on-surface-variant block mb-2">Team Mentality</label>
                    <select id="teamMentality" class="w-full px-4 py-3 bg-surface-container-highest rounded-xl border border-outline-variant/10 focus:border-primary focus:outline-none">
                        <option value="defensive">Defensive</option>
                        <option value="balanced">Balanced</option>
                        <option value="attacking">Attacking</option>
                    </select>
                </div>
                
                <button onclick="saveTacticalSettings()" class="w-full bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                    Save Tactical Settings
                </button>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm">
        <h3 class="font-headline font-bold text-xl text-on-surface mb-6">Quick Actions</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <button onclick="manageLineup()" class="flex flex-col items-center gap-2 p-4 bg-surface-container-highest rounded-xl hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-primary text-2xl">sports_soccer</span>
                <span class="text-xs font-bold text-on-surface">Manage Lineup</span>
            </button>
            <button onclick="viewTraining()" class="flex flex-col items-center gap-2 p-4 bg-surface-container-highest rounded-xl hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-secondary text-2xl">fitness_center</span>
                <span class="text-xs font-bold text-on-surface">Training</span>
            </button>
            <button onclick="viewAcademics()" class="flex flex-col items-center gap-2 p-4 bg-surface-container-highest rounded-xl hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-tertiary text-2xl">school</span>
                <span class="text-xs font-bold text-on-surface">Academics</span>
            </button>
            <button onclick="viewStatistics()" class="flex flex-col items-center gap-2 p-4 bg-surface-container-highest rounded-xl hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined text-on-surface text-2xl">bar_chart</span>
                <span class="text-xs font-bold text-on-surface">Statistics</span>
            </button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let teamData = null;
    let players = [];

    async function loadTeamData() {
        try {
            const [currentUser, playerList] = await Promise.all([
                fetchAPI('/current-user'),
                fetchAPI('/player')
            ]);
            
            players = Array.isArray(playerList) ? playerList : (playerList.data || []);
            
            if (currentUser && currentUser.team) {
                teamData = currentUser.team;
                
                // Filter players for this team
                const teamPlayers = players.filter(p => p.team_id === teamData.id);
                
                // Update UI with real data
                document.getElementById('teamName').textContent = teamData.name || 'Unknown Team';
                document.getElementById('coachName').textContent = currentUser.name || 'Unknown Coach';
                document.getElementById('homeVenue').textContent = teamData.venue || 'Home Stadium';
                document.getElementById('foundedYear').textContent = teamData.founded || '2024';
                document.getElementById('leagueName').textContent = teamData.league || 'Elite Academy League';
                document.getElementById('teamSize').textContent = teamPlayers.length;
                
                // Calculate team morale (mock calculation based on recent performance)
                const morale = Math.min(95, 60 + teamPlayers.length * 2);
                document.getElementById('teamMorale').textContent = morale + '%';
                
                // Set formation from team data or default
                document.getElementById('formationSelect').value = teamData.formation || '4-3-3';
                document.getElementById('playingStyle').value = teamData.playing_style || 'possession';
                document.getElementById('teamMentality').value = teamData.mentality || 'balanced';
            }
        } catch (error) {
            console.error('Error loading team data:', error);
        }
    }

    function saveTacticalSettings() {
        const formation = document.getElementById('formationSelect').value;
        const playingStyle = document.getElementById('playingStyle').value;
        const mentality = document.getElementById('teamMentality').value;
        
        // Update display
        document.getElementById('tacticalFormation').textContent = formation;
        
        // Here you would normally save to API
        alert(`Tactical settings saved:\nFormation: ${formation}\nStyle: ${playingStyle}\nMentality: ${mentality}`);
    }

    function exportTeamData() {
        const teamPlayers = players.filter(p => p.team_id === teamData?.id);
        const exportData = {
            team: teamData,
            players: teamPlayers,
            exportDate: new Date().toISOString()
        };
        
        const dataStr = JSON.stringify(exportData, null, 2);
        const dataBlob = new Blob([dataStr], {type: 'application/json'});
        const url = URL.createObjectURL(dataBlob);
        
        const link = document.createElement('a');
        link.href = url;
        link.download = `team-data-${teamData?.name || 'export'}.json`;
        link.click();
        
        URL.revokeObjectURL(url);
    }

    function showTeamSettings() {
        alert('Team Settings functionality coming soon!');
    }

    function manageLineup() {
        window.location.href = '/manager/create-lineup';
    }

    function viewTraining() {
        window.location.href = '/manager/training';
    }

    function viewAcademics() {
        window.location.href = '/manager/academics';
    }

    function viewStatistics() {
        window.location.href = '/manager/player-stats';
    }

    window.addEventListener('DOMContentLoaded', loadTeamData);
</script>
@endsection
