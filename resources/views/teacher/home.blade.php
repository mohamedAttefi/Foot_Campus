@extends('layouts.app', ['userRole' => 'teacher', 'currentPage' => 'teacher-dashboard'])

@section('title', 'Teacher Dashboard | The Scholastic Pitch')

@section('content')
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 flex flex-col p-6 overflow-y-auto bg-slate-50/80 backdrop-blur-md shadow-xl font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Teacher Portal</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="#">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="{{ route('teacher.academic-results') }}">
                <span class="material-symbols-outlined">grading</span><span>Grade Entry</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">people</span><span>Students</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">assessment</span><span>Reports</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button onclick="openGradeEntryModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span><span>Enter Grades</span>
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
                <input class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search students..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-100 rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right">
                    <p id="nav-user-name" class="font-bold leading-none">Teacher</p>
                    <p id="nav-user-role" class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">Educator</p>
                </div>
                <img id="nav-user-avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary" src="https://ui-avatars.com/api/?name=Teacher&background=0f5238&color=fff" />
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Hero Header -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-secondary text-white p-8">
                <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                    <img class="w-full h-full object-cover transform scale-125 rotate-12" src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&h=400&fit=crop" />
                </div>
                <div class="relative z-10 max-w-lg">
                    <span class="uppercase tracking-[0.3em] font-bold text-secondary-fixed-dim opacity-80 text-xs">Academic Management</span>
                    <h2 class="text-4xl font-extrabold font-headline mt-2 mb-4 leading-tight">Teacher Dashboard</h2>
                    <p class="text-secondary-fixed leading-relaxed opacity-90 mb-6" id="teaching-stats">Manage student grades and track academic performance.</p>
                    <div class="flex gap-4">
                        <div class="bg-secondary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-secondary-fixed-dim uppercase font-bold tracking-widest">Students</p>
                            <p id="total-students" class="text-xl font-bold mt-1">--</p>
                        </div>
                        <div class="bg-secondary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-secondary-fixed-dim uppercase font-bold tracking-widest">Grades Entered</p>
                            <p id="total-grades" class="text-xl font-bold mt-1">--</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="font-headline text-lg font-bold">Quick Actions</h3>
                    <p class="text-sm text-on-surface-variant">Common tasks</p>
                </div>
                <div class="space-y-3 my-6">
                    <button onclick="openGradeEntryModal()" class="w-full px-4 py-3 rounded-xl bg-primary/10 text-primary font-semibold hover:bg-primary/20 transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">add</span> Enter Grades
                    </button>
                    <button class="w-full px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">assessment</span> View Reports
                    </button>
                </div>
                <button class="w-full text-secondary font-bold text-sm hover:underline text-left flex items-center gap-2">
                    View All Students
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>

        <!-- Recent Grades Activity -->
        <div class="mb-8">
            <h3 class="font-headline text-3xl font-extrabold tracking-tight mb-6">Recent Grade Entries</h3>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                                <th class="py-5 px-6">Student</th>
                                <th class="py-5 px-4">Subject</th>
                                <th class="py-5 px-4">Grade</th>
                                <th class="py-5 px-4">Term</th>
                                <th class="py-5 px-4">Date</th>
                                <th class="py-5 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="grades-table-body" class="divide-y divide-slate-100">
                            <tr>
                                <td colspan="6" class="py-12 text-center text-outline">Loading recent grades...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Student Performance Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-8 shadow-sm">
                <h3 class="font-headline text-xl font-bold mb-6">Student Performance</h3>
                <div id="performance-stats" class="space-y-6">
                    <div class="text-center py-8 text-outline">Loading performance data...</div>
                </div>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-sm">
                <h3 class="font-headline text-xl font-bold mb-6">Eligibility Status</h3>
                <div id="eligibility-overview" class="space-y-6">
                    <div class="text-center py-8 text-outline">Loading eligibility data...</div>
                </div>
            </div>
        </div>
    </main>

    <!-- Grade Entry Modal -->
    <div id="grade-entry-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Enter Student Grade</h3>
            <form id="grade-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Student</label>
                    <select name="player_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Student</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Subject</label>
                    <select name="subject_id" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20">
                        <option value="">Select Subject</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Score (%)</label>
                    <input type="number" name="score" min="0" max="100" step="0.1" required class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Term</label>
                    <input type="text" name="term_name" required placeholder="e.g., Fall 2024" class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20" />
                </div>
                <div class="flex gap-4 pt-4">
                    <button type="button" onclick="closeGradeEntryModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                        Enter Grade
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        let allGrades = [];
        let allStudents = [];
        let allSubjects = [];

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

        async function loadTeacherData() {
            try {
                const [grades, students, subjects] = await Promise.all([
                    fetchAPI('/grade'),
                    fetchAPI('/player'),
                    fetchAPI('/subject')
                ]);
                
                allGrades = Array.isArray(grades) ? grades : (grades.data || []);
                allStudents = Array.isArray(students) ? students : (students.data || []);
                allSubjects = Array.isArray(subjects) ? subjects : (subjects.data || []);
                
                updateStats();
                renderRecentGrades();
                renderPerformanceStats();
                renderEligibilityOverview();
                populateSelects();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load teacher data:", err);
                document.getElementById('grades-table-body').innerHTML = '<tr><td colspan="6" class="py-12 text-center text-outline">Failed to load data. Please check your connection.</td></tr>';
            }
        }

        function updateStats() {
            document.getElementById('total-students').innerText = allStudents.length;
            document.getElementById('total-grades').innerText = allGrades.length;
        }

        function renderRecentGrades() {
            const tbody = document.getElementById('grades-table-body');
            
            if (allGrades.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="py-12 text-center text-outline">No grades entered yet</td></tr>';
                return;
            }

            const recentGrades = allGrades.slice(0, 10).reverse();
            
            tbody.innerHTML = recentGrades.map(grade => {
                const student = allStudents.find(s => s.id === grade.player_id);
                const subject = allSubjects.find(s => s.id === grade.subject_id);
                
                const gradeColor = grade.score >= 70 ? 'text-emerald-600' : grade.score >= 50 ? 'text-amber-600' : 'text-red-600';
                
                return `
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white text-xs font-bold">
                                    ${student ? 'S' : 'U'}
                                </div>
                                <div>
                                    <p class="font-bold text-sm">${student ? `Student ${student.id}` : 'Unknown Student'}</p>
                                    <p class="text-xs text-on-surface-variant">ID: ${grade.player_id}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-sm">${subject ? subject.name : 'Unknown Subject'}</td>
                        <td class="py-4 px-4">
                            <span class="font-bold ${gradeColor}">${grade.score}%</span>
                        </td>
                        <td class="py-4 px-4 text-sm text-on-surface-variant">${grade.term_name}</td>
                        <td class="py-4 px-4 text-sm text-on-surface-variant">${new Date(grade.created_at).toLocaleDateString()}</td>
                        <td class="py-4 px-6 text-right">
                            <button onclick="editGrade(${grade.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button onclick="deleteGrade(${grade.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function renderPerformanceStats() {
            const container = document.getElementById('performance-stats');
            
            if (allGrades.length === 0) {
                container.innerHTML = '<div class="text-center py-8 text-outline">No grade data available</div>';
                return;
            }

            const averageScore = allGrades.reduce((sum, grade) => sum + parseFloat(grade.score), 0) / allGrades.length;
            const highPerformers = allGrades.filter(g => g.score >= 80).length;
            const needsImprovement = allGrades.filter(g => g.score < 60).length;
            
            container.innerHTML = `
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Class Average</span>
                        <span class="font-bold text-lg text-primary">${averageScore.toFixed(1)}%</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">High Performers (80%+)</span>
                        <span class="font-bold text-emerald-600">${highPerformers}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Needs Improvement (&lt;60%)</span>
                        <span class="font-bold text-amber-600">${needsImprovement}</span>
                    </div>
                    <div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden mt-4">
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-full transition-all duration-700" style="width: ${averageScore}%"></div>
                    </div>
                </div>
            `;
        }

        function renderEligibilityOverview() {
            const container = document.getElementById('eligibility-overview');
            
            const eligibleCount = allStudents.filter(s => s.is_eligible).length;
            const ineligibleCount = allStudents.length - eligibleCount;
            const eligibilityRate = allStudents.length > 0 ? (eligibleCount / allStudents.length * 100).toFixed(1) : 0;
            
            container.innerHTML = `
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Eligible Students</span>
                        <span class="font-bold text-emerald-600">${eligibleCount}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-on-surface-variant">Ineligible Students</span>
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

        function populateSelects() {
            const studentSelect = document.querySelector('select[name="player_id"]');
            const subjectSelect = document.querySelector('select[name="subject_id"]');

            allStudents.forEach(student => {
                const option = document.createElement('option');
                option.value = student.id;
                option.textContent = `Student ${student.id}`;
                studentSelect.appendChild(option);
            });

            allSubjects.forEach(subject => {
                const option = document.createElement('option');
                option.value = subject.id;
                option.textContent = subject.name;
                subjectSelect.appendChild(option);
            });
        }

        function setupEventListeners() {
            document.getElementById('grade-form').addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(e.target);
                const gradeData = Object.fromEntries(formData);
                
                try {
                    await fetchAPI('/grade', {
                        method: 'POST',
                        body: JSON.stringify(gradeData)
                    });
                    closeGradeEntryModal();
                    loadTeacherData();
                } catch (err) {
                    console.error("Failed to enter grade:", err);
                    alert("Failed to enter grade. Please try again.");
                }
            });
        }

        function openGradeEntryModal() {
            document.getElementById('grade-entry-modal').classList.remove('hidden');
        }

        function closeGradeEntryModal() {
            document.getElementById('grade-entry-modal').classList.add('hidden');
            document.getElementById('grade-form').reset();
        }

        function editGrade(gradeId) {
            console.log('Edit grade:', gradeId);
            // Implement edit functionality
        }

        function deleteGrade(gradeId) {
            if (confirm('Are you sure you want to delete this grade?')) {
                console.log('Delete grade:', gradeId);
                // Implement delete functionality
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadTeacherData();
        });
    </script>
</body>

</html>
