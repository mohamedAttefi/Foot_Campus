@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-academic'])

@section('title', 'Academic Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Academic Management</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                Academic Rules & Subject Administration</p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddSubjectModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add Subject
            </button>
            <button onclick="exportAcademicData()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl hover:bg-surface-container-high transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">download</span>
                Export
            </button>
        </div>
    </section>

    <!-- Academic Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-xl">school</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-primary" id="totalSubjects">0</p>
                    <p class="text-sm text-on-surface-variant">Total Subjects</p>
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
                    <span class="material-symbols-outlined text-on-surface text-xl">person_search</span>
                </div>
                <div>
                    <p class="text-2xl font-black text-on-surface" id="eligiblePlayers">0</p>
                    <p class="text-sm text-on-surface-variant">Eligible Players</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Academic Rules Configuration -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="font-headline text-xl font-bold">Academic Eligibility Rules</h3>
                <p class="text-sm text-on-surface-variant">Configure minimum academic requirements for player eligibility</p>
            </div>
            <button onclick="editAcademicRules()" class="bg-surface-container-highest text-on-surface font-headline font-bold py-2 px-4 rounded-lg hover:bg-surface-container transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">edit</span>
                Edit Rules
            </button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="academicRules">
            <!-- Rules will be populated by JavaScript -->
        </div>
    </div>

    <!-- Subjects Management -->
    <div class="bg-surface-container-lowest rounded-[1.5rem] shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-6 border-b border-outline-variant/10 flex justify-between items-center">
            <div>
                <h3 class="font-headline text-xl font-bold">Subjects Management</h3>
                <p class="text-sm text-on-surface-variant">Manage academic subjects and course information</p>
            </div>
            <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                <span id="subjectCount">0</span> total subjects
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low/50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Subject</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Code</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Credits</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Teachers</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody id="subjectsTableBody" class="divide-y divide-outline-variant/5">
                    <!-- Subject rows will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div id="paginationContainer" class="p-6 bg-surface-container-low/50 border-t border-outline-variant/10 flex justify-between items-center">
            <!-- Pagination controls will be inserted here -->
        </div>
    </div>

    <!-- Recent Grades Activity -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="font-headline text-xl font-bold">Recent Grade Activity</h3>
                <p class="text-sm text-on-surface-variant">Latest grade submissions and updates</p>
            </div>
            <button onclick="refreshGrades()" class="bg-surface-container-highest text-on-surface font-headline font-bold py-2 px-4 rounded-lg hover:bg-surface-container transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">refresh</span>
                Refresh
            </button>
        </div>
        
        <div class="space-y-3" id="recentGrades">
            <!-- Recent grades will be populated by JavaScript -->
        </div>
    </div>
</div>

<!-- Add/Edit Subject Modal -->
<div id="subjectModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface" id="modalTitle">Add New Subject</h3>
                <button onclick="closeSubjectModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form id="subjectForm" class="space-y-4">
                <input type="hidden" id="subjectId" name="id">
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Subject Name</label>
                    <input type="text" id="subjectName" name="name" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Subject Code</label>
                    <input type="text" id="subjectCode" name="code" required
                           placeholder="e.g., MATH101"
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Credits</label>
                    <input type="number" id="subjectCredits" name="credits" required min="1" max="6" value="3"
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Description</label>
                    <textarea id="subjectDescription" name="description" rows="3"
                              placeholder="Optional subject description"
                              class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary"></textarea>
                </div>
                
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        <span id="submitButtonText">Add Subject</span>
                    </button>
                    <button type="button" onclick="closeSubjectModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Academic Rules Modal -->
<div id="rulesModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface">Edit Academic Rules</h3>
                <button onclick="closeRulesModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form id="rulesForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Minimum Average Grade</label>
                    <input type="number" id="minAverage" name="min_average" step="0.1" min="0" max="4" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Minimum Score per Subject</label>
                    <input type="number" id="minScore" name="min_score" step="0.1" min="0" max="100" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Maximum Failed Subjects</label>
                    <input type="number" id="maxFailures" name="max_failures" min="0" max="10" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        Update Rules
                    </button>
                    <button type="button" onclick="closeRulesModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
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
        let subjects = [];
    let academicRules = null;
    let recentGrades = [];
    let currentPage = 1;
    let subjectsPerPage = 10;

    async function loadAcademicData() {
        try {
            const [subjectsResponse, rulesResponse, gradesResponse] = await Promise.all([
                fetchAPI('/subject'),
                fetchAPI('/academic-rules'),
                fetchAPI('/grade')
            ]);
            
            subjects = Array.isArray(subjectsResponse) ? subjectsResponse : (subjectsResponse.data || []);
            academicRules = rulesResponse;
            recentGrades = Array.isArray(gradesResponse) ? gradesResponse : (gradesResponse.data || []);
            
            renderSubjects();
            renderAcademicRules();
            renderRecentGrades();
            updateStats();
        } catch (error) {
            console.error('Error loading academic data:', error);
            showError('Failed to load academic data. Please try again.');
        }
    }

    function renderSubjects() {
        const tbody = document.getElementById('subjectsTableBody');
        const startIndex = (currentPage - 1) * subjectsPerPage;
        const endIndex = startIndex + subjectsPerPage;
        const paginatedSubjects = subjects.slice(startIndex, endIndex);

        if (paginatedSubjects.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-outline">
                        No subjects found
                    </td>
                </tr>
            `;
            document.getElementById('paginationContainer').innerHTML = '';
            return;
        }

        tbody.innerHTML = paginatedSubjects.map(subject => {
            const teacherCount = Math.floor(Math.random() * 5) + 1; // Placeholder
            
            return `
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
                    <td class="py-4 px-4 text-sm">${teacherCount} teachers</td>
                    <td class="py-4 px-6 text-right">
                        <button onclick="editSubject(${subject.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button onclick="deleteSubject(${subject.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </td>
                </tr>
            `;
        }).join('');

        document.getElementById('subjectCount').textContent = subjects.length;
        renderPagination();
    }

    function renderAcademicRules() {
        const container = document.getElementById('academicRules');
        
        if (!academicRules) {
            container.innerHTML = '<p class="text-on-surface-variant">No academic rules configured</p>';
            return;
        }

        container.innerHTML = `
            <div class="bg-surface-container-lowest p-4 rounded-xl">
                <div class="flex items-center gap-3 mb-2">
                    <span class="material-symbols-outlined text-primary">grade</span>
                    <span class="text-sm font-medium text-on-surface-variant">Minimum Average</span>
                </div>
                <p class="text-2xl font-bold text-primary">${academicRules.min_average || 'N/A'}</p>
            </div>
            <div class="bg-surface-container-lowest p-4 rounded-xl">
                <div class="flex items-center gap-3 mb-2">
                    <span class="material-symbols-outlined text-secondary">score</span>
                    <span class="text-sm font-medium text-on-surface-variant">Min Subject Score</span>
                </div>
                <p class="text-2xl font-bold text-secondary">${academicRules.min_score || 'N/A'}%</p>
            </div>
            <div class="bg-surface-container-lowest p-4 rounded-xl">
                <div class="flex items-center gap-3 mb-2">
                    <span class="material-symbols-outlined text-tertiary">warning</span>
                    <span class="text-sm font-medium text-on-surface-variant">Max Failed Subjects</span>
                </div>
                <p class="text-2xl font-bold text-tertiary">${academicRules.max_failures || 'N/A'}</p>
            </div>
        `;
    }

    function renderRecentGrades() {
        const container = document.getElementById('recentGrades');
        
        if (recentGrades.length === 0) {
            container.innerHTML = '<p class="text-on-surface-variant text-center py-4">No recent grade activity</p>';
            return;
        }

        container.innerHTML = recentGrades.slice(0, 10).map(grade => {
            const gradeColor = grade.score >= 70 ? 'text-tertiary' : 
                              grade.score >= 60 ? 'text-secondary' : 'text-error';
            const gradeBg = grade.score >= 70 ? 'bg-tertiary-container' : 
                           grade.score >= 60 ? 'bg-secondary-container' : 'bg-error-container';
            
            return `
                <div class="flex items-center justify-between p-3 bg-surface-container-low rounded-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white text-xs font-bold">
                            ${grade.student_name ? grade.student_name.charAt(0) : 'S'}
                        </div>
                        <div>
                            <p class="font-medium text-on-surface">${grade.student_name || 'Unknown Student'}</p>
                            <p class="text-xs text-on-surface-variant">${grade.subject_name || 'Unknown Subject'}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="${gradeBg} ${gradeColor} text-xs font-bold px-2 py-1 rounded-full">
                            ${grade.score || 0}%
                        </span>
                        <span class="text-xs text-on-surface-variant">
                            ${new Date(grade.created_at).toLocaleDateString()}
                        </span>
                    </div>
                </div>
            `;
        }).join('');
    }

    function updateStats() {
        document.getElementById('totalSubjects').textContent = subjects.length;
        document.getElementById('totalGrades').textContent = recentGrades.length;
        document.getElementById('avgGPA').textContent = (3.2).toFixed(1); // Placeholder
        document.getElementById('eligiblePlayers').textContent = Math.floor(Math.random() * 50) + 100; // Placeholder
    }

    function renderPagination() {
        const container = document.getElementById('paginationContainer');
        const totalPages = Math.ceil(subjects.length / subjectsPerPage);
        
        if (totalPages <= 1) {
            container.innerHTML = '';
            return;
        }

        let paginationHTML = '<div class="flex items-center gap-2">';
        
        // Previous button
        if (currentPage > 1) {
            paginationHTML += `
                <button onclick="previousPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                    Previous
                </button>
            `;
        }

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                paginationHTML += `
                    <button class="px-3 py-1 text-sm font-medium text-on-primary bg-primary rounded-lg">${i}</button>
                `;
            } else {
                paginationHTML += `
                    <button onclick="goToPage(${i})" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">${i}</button>
                `;
            }
        }

        // Next button
        if (currentPage < totalPages) {
            paginationHTML += `
                <button onclick="nextPage()" class="px-3 py-1 text-sm font-medium text-on-surface bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
                    Next
                </button>
            `;
        }

        paginationHTML += '</div>';
        container.innerHTML = paginationHTML;
    }

    function showAddSubjectModal() {
        document.getElementById('modalTitle').textContent = 'Add New Subject';
        document.getElementById('submitButtonText').textContent = 'Add Subject';
        document.getElementById('subjectForm').reset();
        document.getElementById('subjectId').value = '';
        document.getElementById('subjectModal').classList.remove('hidden');
    }

    function editSubject(subjectId) {
        const subject = subjects.find(s => s.id === subjectId);
        if (!subject) return;

        document.getElementById('modalTitle').textContent = 'Edit Subject';
        document.getElementById('submitButtonText').textContent = 'Update Subject';
        document.getElementById('subjectId').value = subject.id;
        document.getElementById('subjectName').value = subject.name;
        document.getElementById('subjectCode').value = subject.code || '';
        document.getElementById('subjectCredits').value = subject.credits || 3;
        document.getElementById('subjectDescription').value = subject.description || '';
        document.getElementById('subjectModal').classList.remove('hidden');
    }

    function closeSubjectModal() {
        document.getElementById('subjectModal').classList.add('hidden');
    }

    function editAcademicRules() {
        if (!academicRules) return;

        document.getElementById('minAverage').value = academicRules.min_average || 2.0;
        document.getElementById('minScore').value = academicRules.min_score || 60;
        document.getElementById('maxFailures').value = academicRules.max_failures || 2;
        document.getElementById('rulesModal').classList.remove('hidden');
    }

    function closeRulesModal() {
        document.getElementById('rulesModal').classList.add('hidden');
    }

    async function deleteSubject(subjectId) {
        if (!confirm('Are you sure you want to delete this subject?')) return;

        try {
            await fetchAPI(`/subject/${subjectId}`, 'DELETE');
            await loadAcademicData();
            showSuccess('Subject deleted successfully');
        } catch (error) {
            console.error('Error deleting subject:', error);
            showError('Failed to delete subject');
        }
    }

    async function refreshGrades() {
        try {
            const response = await fetchAPI('/grades');
            recentGrades = Array.isArray(response) ? response : (response.data || []);
            renderRecentGrades();
            updateStats();
            showSuccess('Grades refreshed successfully');
        } catch (error) {
            console.error('Error refreshing grades:', error);
            showError('Failed to refresh grades');
        }
    }

    function goToPage(page) {
        currentPage = page;
        renderSubjects();
    }

    function nextPage() {
        const totalPages = Math.ceil(subjects.length / subjectsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderSubjects();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderSubjects();
        }
    }

    function exportAcademicData() {
        const csvContent = [
            ['Subject Name', 'Code', 'Credits', 'Description'],
            ...subjects.map(subject => [
                subject.name,
                subject.code || '',
                subject.credits || '',
                subject.description || ''
            ])
        ].map(row => row.join(',')).join('\n');

        const blob = new Blob([csvContent], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'subjects.csv';
        a.click();
        window.URL.revokeObjectURL(url);
    }

    // Event listeners
    document.getElementById('subjectForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const subjectData = Object.fromEntries(formData);
        
        try {
            const subjectId = subjectData.id;
            if (subjectId) {
                await fetchAPI(`/subject/${subjectId}`, 'PUT', subjectData);
                showSuccess('Subject updated successfully');
            } else {
                await fetchAPI('/subject', 'POST', subjectData);
                showSuccess('Subject created successfully');
            }
            
            closeSubjectModal();
            await loadAcademicData();
        } catch (error) {
            console.error('Error saving subject:', error);
            showError('Failed to save subject');
        }
    });

    document.getElementById('rulesForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const rulesData = Object.fromEntries(formData);
        
        try {
            await fetchAPI('/academic-rules', 'PUT', rulesData);
            showSuccess('Academic rules updated successfully');
            closeRulesModal();
            await loadAcademicData();
        } catch (error) {
            console.error('Error updating rules:', error);
            showError('Failed to update academic rules');
        }
    });

    // Initialize
    window.addEventListener('DOMContentLoaded', loadAcademicData);
</script>
@endsection
