@extends('layouts.app')

@section('title', 'Standings | The Scholastic Pitch')

@section('content')
<div class="p-8">
    <div class="text-center">
        <h1 class="text-2xl font-bold mb-4">Loading Standings...</h1>
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-emerald-500 mx-auto"></div>
    </div>
</div>

@section('scripts')
<script>
    // Redirect to appropriate standings based on user role
    document.addEventListener('DOMContentLoaded', function() {
        const user = checkAuth();
        if (user) {
            const standingsRoutes = {
                'player': '/player/standings',
                'coach': '/manager/standings', 
                'admin': '/admin/standings',
                'teacher': '/teacher/standings'
            };
            
            const route = standingsRoutes[user.role];
            if (route) {
                window.location.href = route;
            }
        } else {
            window.location.href = '/login';
        }
    });
</script>
@endsection
