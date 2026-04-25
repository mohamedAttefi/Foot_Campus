@extends('layouts.app', ['userRole' => 'visitor', 'currentPage' => 'approbation-waiting'])

@section('title', 'Approval Pending | The Scholastic Pitch')

@section('content')
<div class="flex-grow flex items-center justify-center pt-24 pb-12 px-6">
    <div class="max-w-2xl w-full flex flex-col items-center text-center">
        <!-- Central Visual Element -->
        <div class="relative mb-8">
            <div class="absolute inset-0 bg-primary-fixed-dim/20 rounded-full blur-3xl scale-150"></div>
            <div class="relative bg-surface-container-lowest h-32 w-32 rounded-xl flex items-center justify-center shadow-[0_12px_40px_rgba(25,28,30,0.06)] border-outline-variant/10">
                <span class="material-symbols-outlined text-primary text-6xl" style="font-variation-settings: 'wght' 300;">verified_user</span>
                <div class="absolute -bottom-2 -right-2 bg-primary text-on-primary p-2 rounded-lg shadow-lg">
                    <span class="material-symbols-outlined text-sm">hourglass_empty</span>
                </div>
            </div>
        </div>
        <!-- Content -->
        <h1 class="font-headline text-4xl font-extrabold tracking-tight text-on-surface mb-4">Registration Received!</h1>
        <p class="text-on-surface-variant text-lg max-w-lg mb-10 leading-relaxed font-body">
            Your application to join <span class="font-bold text-primary">The Scholastic Pitch</span> is currently under review by our league administrators.
        </p>
        
        <!-- Status Card -->
        <div class="w-full bg-surface-container-lowest p-6 rounded-xl shadow-[0_12px_40px_rgba(25,28,30,0.06)] mb-10 flex items-center justify-between border border-primary/5">
            <div class="flex items-center gap-4">
                <div class="h-4 w-4 rounded-full bg-primary animate-pulse-emerald"></div>
                <div class="text-left">
                    <span class="font-label text-xs uppercase tracking-widest text-on-surface-variant font-semibold">Current State</span>
                    <p class="font-headline font-bold text-lg text-primary">Status: Pending Review</p>
                </div>
            </div>
            <div class="hidden sm:block text-right">
                <span class="text-sm font-medium text-secondary bg-secondary-fixed px-3 py-1 rounded-full">Level: Tier 1 Academy</span>
            </div>
        </div>
        
        <!-- Timeline/Steps -->
        <div class="w-full max-w-md mb-12 relative">
            <div class="absolute left-[19px] top-4 bottom-4 w-0.5 bg-surface-container-highest"></div>
            <div class="flex flex-col gap-8">
                <!-- Step 1 -->
                <div class="flex items-start gap-6 relative">
                    <div class="z-10 h-10 w-10 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-lg">
                        <span class="material-symbols-outlined text-xl">check</span>
                    </div>
                    <div class="text-left pt-1">
                        <p class="font-headline font-bold text-on-surface">Account Created</p>
                        <p class="text-sm text-on-surface-variant">Profile information successfully submitted.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="flex items-start gap-6 relative">
                    <div class="z-10 h-10 w-10 rounded-full bg-primary-fixed text-on-primary-fixed-variant flex items-center justify-center border-4 border-surface shadow-sm">
                            <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">manage_search</span>
                        </div>
                    <div class="text-left pt-1">
                        <p class="font-headline font-bold text-primary">Verification</p>
                        <p class="text-sm text-on-surface-variant">Credential and academy cross-referencing in progress.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="flex items-start gap-6 relative">
                    <div class="z-10 h-10 w-10 rounded-full bg-surface-container-highest text-outline flex items-center justify-center border-4 border-surface">
                            <span class="material-symbols-outlined text-xl">sports_soccer</span>
                        </div>
                    <div class="text-left pt-1">
                        <p class="font-headline font-bold text-outline">Welcome to the Pitch</p>
                        <p class="text-sm text-outline">Full dashboard access and league placement.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Help Text -->
        <div class="bg-surface-container-low py-4 px-8 rounded-full mb-10 flex items-center gap-3">
            <span class="material-symbols-outlined text-primary text-sm">info</span>
            <p class="text-sm text-on-surface-variant font-medium">
                This typically takes 24-48 hours. We'll notify you via email once your access is granted.
            </p>
        </div>
        
        <!-- Actions -->
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full justify-center">
            <button onclick="window.location.reload()" class="bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold py-3 px-8 rounded-xl w-full sm:w-auto shadow-lg hover:opacity-90 transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">refresh</span>
                Refresh Status
            </button>
            <a class="text-secondary font-headline font-semibold hover:underline px-6 py-3 transition-colors" href="/login">
                Back to Login
            </a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Auto-refresh every 30 seconds to check approval status
    let refreshInterval;
    
    function checkApprovalStatus() {
        fetch('/api/current-user', {
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.approval_status === 'approved') {
                // Redirect to dashboard based on role
                window.location.href = getDashboardUrl(data.role);
            }
        })
        .catch(error => {
            console.error('Error checking approval status:', error);
        });
    }
    
    function getDashboardUrl(role) {
        const roleUrls = {
            'admin': '/admin/dashboard',
            'teacher': '/teacher/dashboard', 
            'coach': '/manager/dashboard',
            'player': '/player/home'
        };
        return roleUrls[role] || '/';
    }
    
    function startStatusPolling() {
        refreshInterval = setInterval(checkApprovalStatus, 30000); // Check every 30 seconds
    }
    
    function stopStatusPolling() {
        if (refreshInterval) {
            clearInterval(refreshInterval);
            refreshInterval = null;
        }
    }
    
    // Start polling when page loads
    document.addEventListener('DOMContentLoaded', function() {
        startStatusPolling();
        
        // Stop polling when page is hidden or user navigates away
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                stopStatusPolling();
            } else {
                startStatusPolling();
            }
        });
        
        // Clean up on page unload
        window.addEventListener('beforeunload', stopStatusPolling);
    });
</script>
@endsection