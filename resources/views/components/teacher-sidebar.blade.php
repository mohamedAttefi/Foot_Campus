<!-- Teacher Sidebar -->
<aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md text-emerald-900 dark:text-emerald-400 font-['Manrope'] tracking-wide text-sm font-semibold shadow-xl shadow-emerald-900/5 z-50">
    <!-- Logo Section -->
    <div class="mb-10 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container overflow-hidden">
            <img alt="Scholastic Pitch Logo" class="w-full h-full object-cover"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-BNVY3U4SbqquA4w0JzTT0fG2OnUD52d9Y8zB2J6RYJCX_fea3qUwYPY4k0LHdG4g_sHPVgDtwAMwgyMzVg5uTgRzsMhbbHdI2ckaCnNUF61chCEAdU13cYJ7aqHGEgGa-Plybh_KU3ghjM6j-Hr3syyd7FNMuvkLjHRHsG0u8wrvmGQ6sfCCYuFvaPljCUkPPhNCXRbMHVFMoClKbZZLdWJqFeoNB32wy-XcBX4O20EvTS935TPeJJx91Xo6ajhcueADjofXYbM" />
        </div>
        <div>
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">
                The Scholastic Pitch</h1>
            <p class="text-[10px] opacity-70 tracking-widest uppercase">Elite Academy League</p>
        </div>
    </div>

    <!-- Teacher Navigation -->
    <nav class="flex-1 space-y-2">
        <a href="/teacher/dashboard" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/dashboard') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Dashboard</span>
        </a>
        
        <a href="/teacher/academic-results" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/academic-results') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">school</span>
            <span>Academic Results</span>
        </a>
        
        <a href="/teacher/grade-management" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/grade-management') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">grading</span>
            <span>Grade Management</span>
        </a>
        
        <a href="/teacher/student-performance" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/student-performance') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">analytics</span>
            <span>Student Performance</span>
        </a>
        
        <a href="/teacher/eligibility-monitoring" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/eligibility-monitoring') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">verified</span>
            <span>Eligibility</span>
        </a>
        
        <a href="/teacher/standings" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-100/50 dark:hover:bg-emerald-900/20 transition-all duration-300 {{ request()->is('teacher/standings') ? 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300' : '' }}">
            <span class="material-symbols-outlined">leaderboard</span>
            <span>Standings</span>
        </a>
    </nav>

    <!-- Logout Button -->
    <div class="mt-8">
        <button onclick="logout()" class="w-full flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-red-50/50 dark:hover:bg-red-900/20 transition-all duration-300 text-red-600 dark:text-red-400 font-medium">
            <span class="material-symbols-outlined">logout</span>
            <span>Logout</span>
        </button>
    </div>
</aside>
