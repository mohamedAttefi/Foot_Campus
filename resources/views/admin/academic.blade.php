<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Academic Management | The Scholastic Pitch</title>
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
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.teams') }}">
                <span class="material-symbols-outlined">groups</span><span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('admin.matches') }}">
                <span class="material-symbols-outlined">sports_soccer</span><span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="{{ route('admin.academic') }}">
                <span class="material-symbols-outlined">school</span><span>Academic</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button onclick="openSubjectModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Add Subject</span>
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
                <input id="search-input" class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search academic data..." type="text" />
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
        <!-- Academic Rules Section -->
        <div class="mb-12">
            <h3 class="font-headline text-3xl font-extrabold tracking-tight mb-6">Academic Eligibility Rules</h3>
            <div class="bg-white rounded-3xl p-8 shadow-sm">
                <div id="academic-rules" class="space-y-6">
                    <div class="text-center py-8 text-outline">Loading academic rules...</div>
                </div>
            </div>
        </div>

        <!-- Subjects Management -->
        <div class="mb-12">
            <div class="mb-6 flex items-end justify-between flex-wrap gap-4">
                <div>
                    <h3 class="font-headline text-3xl font-extrabold tracking-tight">Subjects Management</h3>
                    <p class="text-on-surface-variant mt-1">Manage academic subjects</p>
                </div>
                <button onclick="openSubjectModal()" class="px-4 py-2 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">add</span> Add Subject
                </button>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                                <th class="py-5 px-6">Subject Name</th>
                                <th class="py-5 px-4">Code</th>
                                <th class="py-5 px-4">Credits</th>
                                <th class="py-5 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="subjects-table-body" class="divide-y divide-slate-100">
                            <tr>
                                <td colspan="4" class="py-12 text-center text-outline">Loading subjects...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Grades Overview -->
        <div class="mb-12">
            <h3 class="font-headline text-3xl font-extrabold tracking-tight mb-6">Grades Overview</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white rounded-3xl p-8 shadow-sm">
                    <h4 class="font-headline text-xl font-bold mb-6">Recent Grades</h4>
                    <div id="recent-grades" class="space-y-4">
                        <div class="text-center py-8 text-outline">Loading recent grades...</div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-sm">
                    <h4 class="font-headline text-xl font-bold mb-6">Eligibility Status</h4>
                    <div id="eligibility-stats" class="space-y-6">
                        <div class="text-center py-8 text-outline">Loading eligibility stats...</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Subject Modal -->
    <div id="subject-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Add New Subject</h3>
            <form id="subject-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Subject Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Subject Code</label>
                    <input type="text" name="code" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Credits</label>
                    <input type="number" name="credits" min="1" max="10" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeSubjectModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Add Subject
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Academic Rules Modal -->
    <div id="rules-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Update Academic Rules</h3>
            <form id="rules-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Minimum Average Threshold (%)</label>
                    <input type="number" name="min_average_threshold" min="0" max="100" step="0.1" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Maximum Failed Subjects</label>
                    <input type="number" name="max_failed_subjects" min="0" max="10" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeRulesModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Update Rules
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let academicRules = null;
        let allSubjects = [];
        let allGrades = [];
        let allPlayers = [];

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

        async function loadAcademicData() {
            try {
                const [rules, subjects, grades, players] = await Promise.all([
                    fetchAPI('/academic-rules').catch(() => null),
                    fetchAPI('/subject').catch(() => []),
                    fetchAPI('/grade').catch(() => []),
                    fetchAPI('/player').catch(() => [])
                ]);
                
                academicRules = rules;
                allSubjects = Array.isArray(subjects) ? subjects : [];
                allGrades = Array.isArray(grades) ? grades : [];
                allPlayers = Array.isArray(players) ? players : [];
                
                renderAcademicRules();
                renderSubjects();
                renderRecentGrades();
                renderEligibilityStats();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load academic data:", err);
            }
        }

        function renderAcademicRules() {
            const container = document.getElementById('academic-rules');
            
            if (!academicRules) {
                container.innerHTML = `
                    <div class="text-center py-8">
                        <p class="text-outline mb-4">No academic rules configured</p>
                        <button onclick="openRulesModal()" class="px-4 py-2 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                            Configure Rules
                        </button>
                    </div>
                `;
                return;
            }

            container.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-slate-50 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-bold text-lg">Minimum Average</h4>
                            <button onclick="openRulesModal()" class="p-2 text-slate-600 hover:bg-slate-200 rounded-lg transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                        </div>
                        <p class="text-3xl font-black text-primary">${academicRules.min_average_threshold}%</p>
                        <p class="text-sm text-on-surface-variant mt-2">Required minimum average for eligibility</p>
                    </div>
                    <div class="bg-slate-50 rounded-2xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-bold text-lg">Max Failed Subjects</h4>
                            <button onclick="openRulesModal()" class="p-2 text-slate-600 hover:bg-slate-200 rounded-lg transition-colors">
                                <span class="material-symbols-outlined">edit</span>
                            </button>
                        </div>
                        <p class="text-3xl font-black text-primary">${academicRules.max_failed_subjects}</p>
                        <p class="text-sm text-on-surface-variant mt-2">Maximum failed subjects allowed</p>
                    </div>
                </div>
            `;
        }

        function renderSubjects() {
            const tbody = document.getElementById('subjects-table-body');
            
            if (allSubjects.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4" class="py-12 text-center text-outline">No subjects found</td></tr>';
                return;
            }

            tbody.innerHTML = allSubjects.map(subject => `
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="py-4 px-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-secondary to-secondary-container flex items-center justify-center text-white text-sm font-bold">
                                ${subject.name.charAt(0)}
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">${subject.name}</p>
                                <p class="text-xs text-on-surface-variant">ID: ${subject.id}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-4 text-sm font-mono">${subject.code || 'N/A'}</td>
                    <td class="py-4 px-4 text-sm">${subject.credits || 'N/A'}</td>
                    <td class="py-4 px-6 text-right">
                        <button onclick="editSubject(${subject.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button onclick="deleteSubject(${subject.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </td>
                </tr>
            `).join('');
        }

        function renderRecentGrades() {
            const container = document.getElementById('recent-grades');
            
            if (allGrades.length === 0) {
                container.innerHTML = '<div class="text-center py-8 text-outline">No grades recorded</div>';
                return;
            }

            const recentGrades = allGrades.slice(0, 5);
            container.innerHTML = recentGrades.map(grade => {
                const player = allPlayers.find(p => p.id === grade.player_id);
                const subject = allSubjects.find(s => s.id === grade.subject_id);
                
                return `
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                        <div>
                            <p class="font-bold text-sm">${player ? `Player ${player.id}` : 'Unknown Player'}</p>
                            <p class="text-xs text-on-surface-variant">${subject ? subject.name : 'Unknown Subject'}</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-lg ${grade.score >= 70 ? 'text-emerald-600' : grade.score >= 50 ? 'text-amber-600' : 'text-red-600'}">${grade.score}%</p>
                            <p class="text-xs text-on-surface-variant">${grade.term_name}</p>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function renderEligibilityStats() {
            const container = document.getElementById('eligibility-stats');
            
            const eligibleCount = allPlayers.filter(p => p.is_eligible).length;
            const ineligibleCount = allPlayers.length - eligibleCount;
            const eligibilityRate = allPlayers.length > 0 ? (eligibleCount / allPlayers.length * 100).toFixed(1) : 0;
            
            container.innerHTML = `
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Eligible Players</span>
                        <span class="font-bold text-emerald-600">${eligibleCount}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Ineligible Players</span>
                        <span class="font-bold text-red-600">${ineligibleCount}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Eligibility Rate</span>
                        <span class="font-bold text-primary">${eligibilityRate}%</span>
                    </div>
                    <div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden mt-4">
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-full transition-all duration-700" style="width: ${eligibilityRate}%"></div>
                    </div>
                </div>
            `;
        }

        function setupEventListeners() {
            document.getElementById('search-input').addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                const rows = document.querySelectorAll('#subjects-table-body tr');
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(term) ? '' : 'none';
                });
            });

            document.getElementById('subject-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const subjectData = Object.fromEntries(formData);
                
                try {
                    await fetchAPI('/subject', {
                        method: 'POST',
                        body: JSON.stringify(subjectData)
                    });
                    closeSubjectModal();
                    loadAcademicData();
                } catch (err) {
                    console.error("Failed to add subject:", err);
                    alert("Failed to add subject. Please try again.");
                }
            });

            document.getElementById('rules-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const rulesData = Object.fromEntries(formData);
                
                try {
                    if (academicRules) {
                        await fetchAPI(`/academic-rules/${academicRules.id}`, {
                            method: 'PUT',
                            body: JSON.stringify(rulesData)
                        });
                    } else {
                        await fetchAPI('/academic-rules', {
                            method: 'POST',
                            body: JSON.stringify(rulesData)
                        });
                    }
                    closeRulesModal();
                    loadAcademicData();
                } catch (err) {
                    console.error("Failed to update rules:", err);
                    alert("Failed to update rules. Please try again.");
                }
            });
        }

        function openSubjectModal() {
            document.getElementById('subject-modal').classList.remove('hidden');
        }

        function closeSubjectModal() {
            document.getElementById('subject-modal').classList.add('hidden');
            document.getElementById('subject-form').reset();
        }

        function openRulesModal() {
            const modal = document.getElementById('rules-modal');
            const form = document.getElementById('rules-form');
            
            if (academicRules) {
                form.elements['min_average_threshold'].value = academicRules.min_average_threshold;
                form.elements['max_failed_subjects'].value = academicRules.max_failed_subjects;
            }
            
            modal.classList.remove('hidden');
        }

        function closeRulesModal() {
            document.getElementById('rules-modal').classList.add('hidden');
            document.getElementById('rules-form').reset();
        }

        function editSubject(subjectId) {
            console.log('Edit subject:', subjectId);
            // Implement edit functionality
        }

        function deleteSubject(subjectId) {
            if (confirm('Are you sure you want to delete this subject?')) {
                console.log('Delete subject:', subjectId);
                // Implement delete functionality
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadAcademicData();
        });
    </script>
</body>

</html>
