<script>
    // Simple Frontend Auth Check - No OOP
    
    // Prevent redirect loops
    let isRedirecting = false;
    
    function checkAuth() {
        const token = localStorage.getItem('token');
        const currentUser = localStorage.getItem('currentUser');
        
        console.log('checkAuth:', {
            hasToken: !!token,
            hasCurrentUser: !!currentUser,
            currentUserString: currentUser
        });
        
        if (!token || !currentUser) {
            console.log('No token or currentUser, redirecting to login');
            window.location.href = '/login';
            return false;
        }
        
        try {
            const user = JSON.parse(currentUser);
            console.log('Parsed user:', user);
            return user;
        } catch (error) {
            console.error('Error parsing currentUser:', error);
            window.location.href = '/login';
            return false;
        }
    }

    function requireRole(requiredRole) {
        const user = checkAuth();
        console.log(user)
        if (!user) return false;
        
        console.log('requireRole called:', {
            requiredRole: requiredRole,
            userRole: user.role,
            match: user.role === requiredRole
        });
        
        if (user.role !== requiredRole) {
            if (isRedirecting) {
                console.log('Already redirecting, preventing loop');
                return false;
            }
            
            const dashboards = {
                'admin': '/admin/dashboard',
                'teacher': '/teacher/dashboard',
                'coach': '/manager/dashboard',
                'player': '/player/home'
            };
            
            const dashboard = dashboards[user.role] || '/login';
            console.log('Role mismatch, redirecting to:', dashboard);
            isRedirecting = true;
            window.location.href = dashboard;
            return false;
        }
        
        console.log('Role match, allowing access');
        return true;
    }

    function protectCurrentPage() {
        const path = window.location.pathname;
        console.log('ProtectCurrentPage checking:', path);
        
        if (path.startsWith('/player/')) {
            console.log('Checking player role');
            requireRole('player');
        } else if (path.startsWith('/admin/')) {
            console.log('Checking admin role');
            requireRole('admin');
        } else if (path.startsWith('/teacher/')) {
            console.log('Checking teacher role');
            requireRole('teacher');
        } else if (path.startsWith('/manager/')) {
            console.log('Checking coach role');
            requireRole('coach');
        }
    }

    function logout() {
        localStorage.removeItem('token');
        localStorage.removeItem('currentUser');
        window.location.href = '/login';
    }

    // Auto-protect on page load (with delay to allow login redirect)
    document.addEventListener('DOMContentLoaded', function() {
        // Reset redirect flag on page load
        isRedirecting = false;
        // Small delay to allow login redirect to complete
        setTimeout(protectCurrentPage, 100);
    });
</script>
