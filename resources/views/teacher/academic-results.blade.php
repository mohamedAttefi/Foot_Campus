<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Grade Entry | The Scholastic Pitch</title>
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
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic leading-none">The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Teacher Portal</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 transition-all duration-300 text-slate-500 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined">dashboard</span><span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 transition-all duration-300 text-emerald-700 font-bold border-r-4 border-emerald-700 group" href="#">
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
            <button onclick="openBatchEntryModal()" class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">upload</span><span>Batch Entry</span>
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
                <input class="w-full bg-slate-100 border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface" placeholder="Search grades..." type="text" />
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
        <!-- Header -->
        <div class="mb-8 flex items-end justify-between flex-wrap gap-4">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Grade Entry</h3>
                <p class="text-on-surface-variant mt-1">Enter and manage student grades</p>
            </div>
            <div class="flex gap-2">
                <button onclick="openBatchEntryModal()" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">upload</span> Batch Entry
                </button>
                <button onclick="exportGrades()" class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-slate-50 transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span> Export CSV
                </button>
            </div>
        </div>

        <!-- Grade Entry Form -->
        <div class="bg-white rounded-3xl p-8 shadow-sm mb-8">
            <h4 class="font-headline text-xl font-bold mb-6">Enter Single Grade</h4>
            <form id="grade-form" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
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
                <div class="lg:col-span-4">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined">add</span> Enter Grade
                    </button>
                </div>
            </form>
        </div>

        <!-- Recent Grades -->
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm">
            <div class="p-6 border-b border-slate-100">
                <h4 class="font-headline text-xl font-bold">Recent Grades</h4>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant bg-slate-50">
                            <th class="py-5 px-6">Student</th>
                            <th class="py-5 px-4">Subject</th>
                            <th class="py-5 px-4">Score</th>
                            <th class="py-5 px-4">Term</th>
                            <th class="py-5 px-4">Date</th>
                            <th class="py-5 px-6 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="grades-table-body" class="divide-y divide-slate-100">
                        <tr>
                            <td colspan="6" class="py-12 text-center text-outline">Loading grades...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Batch Entry Modal -->
    <div id="batch-entry-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-8 max-w-2xl w-full">
            <h3 class="font-headline text-2xl font-bold mb-6">Batch Grade Entry</h3>
            <div class="mb-6">
                <label class="block text-sm font-medium mb-2">Paste CSV Data</label>
                <textarea rows="8" class="w-full px-4 py-2 rounded-xl bg-slate-100 border-none focus:ring-2 focus:ring-primary/20 font-mono text-sm" placeholder="student_id,subject_id,score,term_name&#10;1,1,85,Fall 2024&#10;2,1,78,Fall 2024&#10;3,2,92,Fall 2024"></textarea>
                <p class="text-xs text-on-surface-variant mt-2">Format: student_id,subject_id,score,term_name (one per line)</p>
            </div>
            <div class="flex gap-4">
                <button onclick="closeBatchEntryModal()" class="flex-1 px-4 py-3 rounded-xl bg-slate-100 text-slate-700 font-semibold hover:bg-slate-200 transition-colors">
                    Cancel
                </button>
                <button onclick="processBatchEntry()" class="flex-1 px-4 py-3 rounded-xl bg-primary text-white font-semibold hover:bg-primary/90 transition-colors">
                    Import Grades
                </button>
            </div>
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

        async function loadGradeData() {
            try {
                const [grades, students, subjects] = await Promise.all([
                    fetchAPI('/grade'),
                    fetchAPI('/player'),
                    fetchAPI('/subject')
                ]);
                
                allGrades = Array.isArray(grades) ? grades : (grades.data || []);
                allStudents = Array.isArray(students) ? students : (students.data || []);
                console.log(students)
                allSubjects = Array.isArray(subjects) ? subjects : (subjects.data || []);
                
                renderGrades();
                populateSelects();
                setupEventListeners();
            } catch (err) {
                console.error("Failed to load grade data:", err);
                document.getElementById('grades-table-body').innerHTML = '<tr><td colspan="6" class="py-12 text-center text-outline">Failed to load data. Please check your connection.</td></tr>';
            }
        }

        function renderGrades() {
            const tbody = document.getElementById('grades-table-body');
            
            if (allGrades.length === 0) {
                tbody.innerHTML = '<tr><td colspan="6" class="py-12 text-center text-outline">No grades entered yet</td></tr>';
                return;
            }

            const recentGrades = allGrades.slice(0, 20).reverse();
            
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

        function populateSelects() {
            const studentSelect = document.querySelector('select[name="player_id"]');
            const subjectSelect = document.querySelector('select[name="subject_id"]');

            allStudents.forEach(student => {
                const option = document.createElement('option');
                option.value = student.id;
                option.textContent = `${student.user.name}`;
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
                    e.target.reset();
                    loadGradeData();
                } catch (err) {
                    console.error("Failed to enter grade:", err);
                    alert("Failed to enter grade. Please try again.");
                }
            });
        }

        function openBatchEntryModal() {
            document.getElementById('batch-entry-modal').classList.remove('hidden');
        }

        function closeBatchEntryModal() {
            document.getElementById('batch-entry-modal').classList.add('hidden');
        }

        async function processBatchEntry() {
            const textarea = document.querySelector('#batch-entry-modal textarea');
            const lines = textarea.value.trim().split('\n');
            
            if (lines.length === 0 || !lines[0]) {
                alert('Please enter grade data');
                return;
            }

            const grades = [];
            for (const line of lines) {
                const [player_id, subject_id, score, term_name] = line.split(',').map(s => s.trim());
                if (player_id && subject_id && score && term_name) {
                    grades.push({
                        player_id: parseInt(player_id),
                        subject_id: parseInt(subject_id),
                        score: parseFloat(score),
                        term_name
                    });
                }
            }

            if (grades.length === 0) {
                alert('No valid grade data found');
                return;
            }

            try {
                for (const grade of grades) {
                    await fetchAPI('/grade', {
                        method: 'POST',
                        body: JSON.stringify(grade)
                    });
                }
                closeBatchEntryModal();
                loadGradeData();
                alert(`Successfully imported ${grades.length} grades`);
            } catch (err) {
                console.error("Failed to import grades:", err);
                alert("Failed to import some grades. Please check the data format.");
            }
        }

        function exportGrades() {
            let csv = "Student ID,Subject,Score,Term,Date\n";
            allGrades.forEach(grade => {
                const student = allStudents.find(s => s.id === grade.player_id);
                const subject = allSubjects.find(s => s.id === grade.subject_id);
                csv += `${grade.player_id},"${subject ? subject.name : 'Unknown'}",${grade.score},"${grade.term_name}","${new Date(grade.created_at).toLocaleDateString()}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `grades_${new Date().toISOString().split('T')[0]}.csv`;
            a.click();
            URL.revokeObjectURL(url);
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
            loadGradeData();
        });
    </script>
</body>

</html>