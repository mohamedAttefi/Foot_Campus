@extends('layouts.app', ['userRole' => 'teacher', 'currentPage' => 'teacher-dashboard'])

@section('title', 'Teacher Dashboard | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Teacher Dashboard</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Academic Management & Student Performance</p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddGradeModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add Grade
            </button>
        </div>
    </section>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">school</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalStudents">0</p>
                    <p class="text-sm text-on-surface-variant">Total Students</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-xl">assignment</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-secondary" id="totalGrades">0</p>
                    <p class="text-sm text-on-surface-variant">Total Grades</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-tertiary text-xl">trending_up</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-tertiary" id="avgGPA">0.0</p>
                    <p class="text-sm text-on-surface-variant">Average GPA</p>
                </div>
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-surface-container-highest/50 flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface text-xl">menu_book</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="totalSubjects">0</p>
                    <p class="text-sm text-on-surface-variant">Subjects Taught</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <h3 class="font-headline text-xl font-bold mb-4">Recent Grades</h3>
            <div class="space-y-3" id="recentGrades">
                <!-- Recent grades will be populated by JavaScript -->
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <h3 class="font-headline text-xl font-bold mb-4">Top Performers</h3>
            <div class="space-y-3" id="topPerformers">
                <!-- Top performers will be populated by JavaScript -->
            </div>
        </div>
        
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <h3 class="font-headline text-xl font-bold mb-4">Subjects</h3>
            <div class="space-y-3" id="subjectsList">
                <!-- Subjects will be populated by JavaScript -->
            </div>
        </div>
    </div>
</div>

<!-- Add Grade Modal -->
<div id="gradeModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface">Add Grade</h3>
                <button onclick="closeGradeModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form id="gradeForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Student</label>
                    <select id="studentSelect" required class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Student</option>
                        <!-- Students will be populated by JavaScript -->
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Subject</label>
                    <select id="subjectSelect" required class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Subject</option>
                        <!-- Subjects will be populated by JavaScript -->
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Score</label>
                    <input type="number" id="scoreInput" required min="0" max="100" step="0.1" placeholder="Enter score (0-100)" class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        Add Grade
                    </button>
                    <button type="button" onclick="closeGradeModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let allGrades = [];
    let allStudents = [];
    let allSubjects = [];

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
            renderTopPerformers();
            renderSubjects();
            populateSelects();
        } catch (error) {
            console.error('Error loading teacher data:', error);
        }
    }

    function updateStats() {
        document.getElementById('totalStudents').textContent = allStudents.length;
        document.getElementById('totalGrades').textContent = allGrades.length;
        document.getElementById('totalSubjects').textContent = allSubjects.length;
        
        if (allGrades.length > 0) {
            const avgScore = allGrades.reduce((sum, grade) => sum + (grade.score || 0), 0) / allGrades.length;
            const gpa = (avgScore / 100) * 4;
            document.getElementById('avgGPA').textContent = gpa.toFixed(2);
        } else {
            document.getElementById('avgGPA').textContent = '0.0';
        }
    }

    function renderRecentGrades() {
        const container = document.getElementById('recentGrades');
        const recentGrades = allGrades.slice(-5).reverse();
        
        if (recentGrades.length === 0) {
            container.innerHTML = '<p class="text-on-surface-variant text-center">No recent grades</p>';
            return;
        }
        
        container.innerHTML = recentGrades.map(grade => {
            const student = allStudents.find(s => s.id === grade.user_id);
            const subject = allSubjects.find(s => s.id === grade.subject_id);
            
            return `
                <div class="flex items-center justify-between p-2 bg-surface-container-lowest rounded-lg">
                    <div>
                        <p class="font-medium text-on-surface">${student ? student.name : 'Unknown Student'}</p>
                        <p class="text-xs text-on-surface-variant">${subject ? subject.name : 'Unknown Subject'}</p>
                    </div>
                    <span class="font-bold text-primary">${grade.score || 0}</span>
                </div>
            `;
        }).join('');
    }

    function renderTopPerformers() {
        const container = document.getElementById('topPerformers');
        
        // Calculate average scores per student
        const studentAverages = {};
        allGrades.forEach(grade => {
            if (!studentAverages[grade.user_id]) {
                studentAverages[grade.user_id] = { total: 0, count: 0 };
            }
            studentAverages[grade.user_id].total += grade.score || 0;
            studentAverages[grade.user_id].count += 1;
        });
        
        const topStudents = Object.entries(studentAverages)
            .map(([studentId, data]) => ({
                student: allStudents.find(s => s.id == studentId),
                average: data.total / data.count
            }))
            .filter(item => item.student)
            .sort((a, b) => b.average - a.average)
            .slice(0, 5);
        
        if (topStudents.length === 0) {
            container.innerHTML = '<p class="text-on-surface-variant text-center">No data available</p>';
            return;
        }
        
        container.innerHTML = topStudents.map((item, index) => `
            <div class="flex items-center justify-between p-2 bg-surface-container-lowest rounded-lg">
                <div class="flex items-center gap-2">
                    <span class="text-lg font-bold text-primary">${index + 1}</span>
                    <p class="font-medium text-on-surface">${item.student.name}</p>
                </div>
                <span class="font-bold text-tertiary">${item.average.toFixed(1)}</span>
            </div>
        `).join('');
    }

    function renderSubjects() {
        const container = document.getElementById('subjectsList');
        
        if (allSubjects.length === 0) {
            container.innerHTML = '<p class="text-on-surface-variant text-center">No subjects</p>';
            return;
        }
        
        container.innerHTML = allSubjects.slice(0, 5).map(subject => {
            const gradeCount = allGrades.filter(g => g.subject_id === subject.id).length;
            return `
                <div class="flex items-center justify-between p-2 bg-surface-container-lowest rounded-lg">
                    <p class="font-medium text-on-surface">${subject.name}</p>
                    <span class="text-sm text-on-surface-variant">${gradeCount} grades</span>
                </div>
            `;
        }).join('');
    }

    function populateSelects() {
        const studentSelect = document.getElementById('studentSelect');
        const subjectSelect = document.getElementById('subjectSelect');
        
        studentSelect.innerHTML = '<option value="">Select Student</option>' + 
            allStudents.map(student => `<option value="${student.id}">${student.name}</option>`).join('');
        
        subjectSelect.innerHTML = '<option value="">Select Subject</option>' + 
            allSubjects.map(subject => `<option value="${subject.id}">${subject.name}</option>`).join('');
    }

    function showAddGradeModal() {
        document.getElementById('gradeModal').classList.remove('hidden');
    }

    function closeGradeModal() {
        document.getElementById('gradeModal').classList.add('hidden');
        document.getElementById('gradeForm').reset();
    }

    document.getElementById('gradeForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const gradeData = {
            user_id: document.getElementById('studentSelect').value,
            subject_id: document.getElementById('subjectSelect').value,
            score: parseFloat(document.getElementById('scoreInput').value)
        };
        
        try {
            await fetchAPI('/grade', 'POST', gradeData);
            showSuccess('Grade added successfully');
            closeGradeModal();
            await loadTeacherData();
        } catch (error) {
            console.error('Error adding grade:', error);
            showError('Failed to add grade');
        }
    });

    window.addEventListener('DOMContentLoaded', loadTeacherData);
</script>
@endsection
