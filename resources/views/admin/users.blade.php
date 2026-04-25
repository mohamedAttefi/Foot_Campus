@extends('layouts.app', ['userRole' => 'admin', 'currentPage' => 'admin-users'])

@section('title', 'Users Management | The Scholastic Pitch')

@section('content')
<div class="p-8 space-y-8">
    <!-- Hero Header Section -->
    <section class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Users Management</h2>
            <p class="text-on-surface-variant font-label mt-1 uppercase tracking-widest text-xs font-bold">
                System User Administration & Access Control</p>
        </div>
        <div class="flex gap-3">
            <button onclick="showAddUserModal()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-6 rounded-xl shadow-lg hover:opacity-90 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                Add User
            </button>
            <button onclick="exportUsers()" class="bg-surface-container-low text-on-surface font-headline font-bold py-3 px-6 rounded-xl hover:bg-surface-container-high transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">download</span>
                Export
            </button>
        </div>
    </section>

    <!-- Filter and Search Section -->
    <div class="bg-surface-container-low rounded-[1.5rem] p-6 shadow-sm border border-outline-variant/10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Search Users</label>
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search by name, email, or role..." 
                           class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant">search</span>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Role Filter</label>
                <select id="roleFilter" class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <option value="">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="coach">Coach</option>
                    <option value="player">Player</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface-variant mb-2">Approval Status</label>
                <select id="statusFilter" class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="bg-surface-container-lowest rounded-[1.5rem] shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-6 border-b border-outline-variant/10 flex justify-between items-center">
            <div>
                <h3 class="font-headline text-xl font-bold">System Users</h3>
                <p class="text-sm text-on-surface-variant">Manage user accounts and approval status</p>
            </div>
            <div class="flex items-center gap-2 text-sm text-on-surface-variant">
                <span id="userCount">0</span> total users
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low/50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">
                            <input type="checkbox" id="selectAll" class="rounded border-outline-variant/20">
                        </th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">User</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Role</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Joined</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Last Active</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody id="usersTableBody" class="divide-y divide-outline-variant/5">
                    <!-- User rows will be populated by JavaScript -->
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div id="paginationContainer" class="p-6 bg-surface-container-low/50 border-t border-outline-variant/10 flex justify-between items-center">
            <!-- Pagination controls will be inserted here -->
        </div>
    </div>
</div>

<!-- Add/Edit User Modal -->
<div id="userModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-surface-container-lowest rounded-[1.5rem] w-full max-w-md p-6 shadow-xl border border-outline-variant/10">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline text-xl font-bold text-on-surface" id="modalTitle">Add New User</h3>
                <button onclick="closeUserModal()" class="text-on-surface-variant hover:text-on-surface transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form id="userForm" class="space-y-4">
                <input type="hidden" id="userId" name="id">
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Full Name</label>
                    <input type="text" id="userName" name="name" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Email Address</label>
                    <input type="email" id="userEmail" name="email" required
                           class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Role</label>
                    <select id="userRole" name="role" required
                            class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="coach">Coach</option>
                        <option value="player">Player</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2">Approval Status</label>
                    <select id="userApprovalStatus" name="approval_status"
                            class="w-full px-4 py-2 bg-surface border border-outline-variant/20 rounded-xl text-on-surface focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
                
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 rounded-xl shadow-lg hover:opacity-90 transition-all">
                        <span id="submitButtonText">Add User</span>
                    </button>
                    <button type="button" onclick="closeUserModal()" class="flex-1 bg-surface-container text-on-surface font-headline font-bold py-3 rounded-xl hover:bg-surface-container-high transition-colors">
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
    const API_BASE = 'http://127.0.0.1:8000/api';
    let users = [];
    let currentPage = 1;
    let usersPerPage = 10;
    let filteredUsers = [];

    async function loadUsers() {
        try {
            const response = await fetchAPI('/approval/all-users-status');
            users = response.users || [];
            filteredUsers = [...users];
            renderUsers();
        } catch (error) {
            console.error('Error loading users:', error);
            showError('Failed to load users. Please try again.');
        }
    }

    function renderUsers() {
        const tbody = document.getElementById('usersTableBody');
        const startIndex = (currentPage - 1) * usersPerPage;
        const endIndex = startIndex + usersPerPage;
        const paginatedUsers = filteredUsers.slice(startIndex, endIndex);

        if (paginatedUsers.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-outline">
                        No users found matching your criteria
                    </td>
                </tr>
            `;
            document.getElementById('paginationContainer').innerHTML = '';
            return;
        }

        tbody.innerHTML = paginatedUsers.map(user => {
            const statusColor = user.approval_status === 'approved' ? 'text-tertiary' : 
                             user.approval_status === 'rejected' ? 'text-error' : 'text-secondary';
            const statusBg = user.approval_status === 'approved' ? 'bg-tertiary-container' : 
                            user.approval_status === 'rejected' ? 'bg-error-container' : 'bg-secondary-container';
            
            const roleIcon = user.role === 'admin' ? 'admin_panel_settings' :
                            user.role === 'teacher' ? 'school' :
                            user.role === 'coach' ? 'sports_soccer' : 'person';

            return `
                <tr class="hover:bg-surface-container-low/30 transition-colors">
                    <td class="px-6 py-4">
                        <input type="checkbox" class="user-checkbox rounded border-outline-variant/20" data-user-id="${user.id}">
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white font-bold">
                                ${user.name.charAt(0)}
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">${user.name}</p>
                                <p class="text-xs text-on-surface-variant">${user.email}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">${roleIcon}</span>
                            <span class="text-sm font-medium text-on-surface-variant capitalize">${user.role}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="${statusBg} ${statusColor} text-[10px] font-bold px-3 py-1 rounded-full capitalize">
                            ${user.approval_status}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-on-surface-variant">
                        ${new Date(user.created_at).toLocaleDateString()}
                    </td>
                    <td class="px-6 py-4 text-sm text-on-surface-variant">
                        ${user.updated_at ? new Date(user.updated_at).toLocaleDateString() : 'Never'}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button onclick="editUser(${user.id})" class="p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">edit</span>
                        </button>
                        <button onclick="deleteUser(${user.id})" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </td>
                </tr>
            `;
        }).join('');

        document.getElementById('userCount').textContent = filteredUsers.length;
        renderPagination();
    }

    function renderPagination() {
        const container = document.getElementById('paginationContainer');
        const totalPages = Math.ceil(filteredUsers.length / usersPerPage);
        
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

    function filterUsers() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        const roleFilter = document.getElementById('roleFilter').value;
        const statusFilter = document.getElementById('statusFilter').value;

        filteredUsers = users.filter(user => {
            const matchesSearch = user.name.toLowerCase().includes(searchTerm) || 
                               user.email.toLowerCase().includes(searchTerm);
            const matchesRole = !roleFilter || user.role === roleFilter;
            const matchesStatus = !statusFilter || user.approval_status === statusFilter;
            
            return matchesSearch && matchesRole && matchesStatus;
        });

        currentPage = 1;
        renderUsers();
    }

    function showAddUserModal() {
        document.getElementById('modalTitle').textContent = 'Add New User';
        document.getElementById('submitButtonText').textContent = 'Add User';
        document.getElementById('userForm').reset();
        document.getElementById('userId').value = '';
        document.getElementById('userModal').classList.remove('hidden');
    }

    function editUser(userId) {
        const user = users.find(u => u.id === userId);
        if (!user) return;

        document.getElementById('modalTitle').textContent = 'Edit User';
        document.getElementById('submitButtonText').textContent = 'Update User';
        document.getElementById('userId').value = user.id;
        document.getElementById('userName').value = user.name;
        document.getElementById('userEmail').value = user.email;
        document.getElementById('userRole').value = user.role;
        document.getElementById('userApprovalStatus').value = user.approval_status;
        document.getElementById('userModal').classList.remove('hidden');
    }

    function closeUserModal() {
        document.getElementById('userModal').classList.add('hidden');
    }

    async function deleteUser(userId) {
        if (!confirm('Are you sure you want to delete this user?')) return;

        try {
            await fetchAPI(`/users/${userId}`, 'DELETE');
            await loadUsers();
            showSuccess('User deleted successfully');
        } catch (error) {
            console.error('Error deleting user:', error);
            showError('Failed to delete user');
        }
    }

    function goToPage(page) {
        currentPage = page;
        renderUsers();
    }

    function nextPage() {
        const totalPages = Math.ceil(filteredUsers.length / usersPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            renderUsers();
        }
    }

    function previousPage() {
        if (currentPage > 1) {
            currentPage--;
            renderUsers();
        }
    }

    function exportUsers() {
        const csvContent = [
            ['Name', 'Email', 'Role', 'Status', 'Joined', 'Last Active'],
            ...filteredUsers.map(user => [
                user.name,
                user.email,
                user.role,
                user.approval_status,
                new Date(user.created_at).toLocaleDateString(),
                user.updated_at ? new Date(user.updated_at).toLocaleDateString() : 'Never'
            ])
        ].map(row => row.join(',')).join('\n');

        const blob = new Blob([csvContent], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'users.csv';
        a.click();
        window.URL.revokeObjectURL(url);
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterUsers);
    document.getElementById('roleFilter').addEventListener('change', filterUsers);
    document.getElementById('statusFilter').addEventListener('change', filterUsers);

    document.getElementById('userForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const userData = Object.fromEntries(formData);
        
        try {
            const userId = userData.id;
            if (userId) {
                await fetchAPI(`/users/${userId}`, 'PUT', userData);
                showSuccess('User updated successfully');
            } else {
                await fetchAPI('/users', 'POST', userData);
                showSuccess('User created successfully');
            }
            
            closeUserModal();
            await loadUsers();
        } catch (error) {
            console.error('Error saving user:', error);
            showError('Failed to save user');
        }
    });

    document.getElementById('selectAll').addEventListener('change', (e) => {
        const checkboxes = document.querySelectorAll('.user-checkbox');
        checkboxes.forEach(cb => cb.checked = e.target.checked);
    });

    // Initialize
    window.addEventListener('DOMContentLoaded', loadUsers);
</script>
@endsection
