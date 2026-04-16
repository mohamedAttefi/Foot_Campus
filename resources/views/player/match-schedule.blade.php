<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#264191",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#2a1700",
                        "tertiary-container": "#865400",
                        "secondary-fixed": "#dce1ff",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-secondary-container": "#1d3989",
                        "inverse-on-surface": "#eff1f3",
                        "surface-tint": "#2c694e",
                        "on-surface-variant": "#404943",
                        "tertiary-fixed": "#ffddb8",
                        "inverse-surface": "#2d3133",
                        "primary-container": "#2d6a4f",
                        "on-secondary-fixed": "#00164e",
                        "on-background": "#191c1e",
                        "secondary-container": "#8fa7fe",
                        "on-surface": "#191c1e",
                        "surface-bright": "#f7f9fb",
                        "error": "#ba1a1a",
                        "surface-variant": "#e0e3e5",
                        "tertiary-fixed-dim": "#ffb95f",
                        "background": "#f7f9fb",
                        "on-primary-container": "#a8e7c5",
                        "outline": "#707973",
                        "outline-variant": "#bfc9c1",
                        "primary-fixed": "#b1f0ce",
                        "primary": "#0f5238",
                        "primary-fixed-dim": "#95d4b3",
                        "on-tertiary": "#ffffff",
                        "secondary": "#4059aa",
                        "on-tertiary-container": "#ffd29e",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#95d4b3",
                        "on-primary-fixed": "#002114",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b6c4ff",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#663f00",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary-fixed-variant": "#0e5138",
                        "surface-container": "#eceef0",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-high": "#e6e8ea",
                        "on-tertiary-fixed-variant": "#653e00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 flex flex-col p-6 overflow-y-auto z-50">
        <div class="mb-10 flex items-center gap-3">
            <div
                class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined">school</span>
            </div>
            <div>
                <h1
                    class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic font-headline">
                    The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 font-semibold tracking-widest uppercase">Elite Academy League</p>
            </div>
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span
                    class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 bg-emerald-50/50 dark:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm group"
                href="#">
                <span
                    class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span
                    class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">school</span>
                Academic Hub
            </a>
        </nav>
        <div class="mt-auto space-y-1">
            <button
                class="w-full mb-6 py-3 px-4 rounded-xl bg-gradient-to-r from-primary to-primary-container text-white font-headline text-sm font-bold shadow-md hover:opacity-90 transition-opacity">
                Create Match
            </button>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">settings</span>
                Settings
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">help</span>
                Support
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-0">
            <div class="flex items-center gap-6">
                <div class="relative group">
                    <span
                        class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400">search</span>
                    <input
                        class="pl-10 pr-4 py-1.5 bg-surface-container-highest rounded-full border-none focus:ring-2 focus:ring-primary text-sm w-64 transition-all"
                        placeholder="Search matches or venues..." type="text" />
                </div>
                <nav class="flex items-center gap-8 font-['Manrope'] font-medium text-sm">
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="#">Standings</a>
                    <a class="text-emerald-700 dark:text-emerald-400 font-bold border-b-2 border-emerald-700 pb-2"
                        href="#">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-surface-variant">
                    <div class="text-right">
                        <p class="text-sm font-bold text-on-surface">Alex Mercer</p>
                        <p class="text-[10px] font-semibold text-primary uppercase">U19 Forward</p>
                    </div>
                    <img class="w-10 h-10 rounded-full object-cover ring-2 ring-primary-fixed"
                        data-alt="close-up portrait of a young athletic male soccer player with a focused expression, wearing a green academy training jersey"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuACVdNaZ6nUV8Mxam_yS15vkD5a6pWQ27izNOYTNMVJgvfVB1gvuwrUgoDRTrubHky9scD_t3maOPDcVme57wNFA1FOTP87YntNuUglNexG3QxshWeEM_F74BoYqfthdsz73WOSPYZ6LAWvH4euv9ciXabxefAeQVcVt2bmXUuTOzNjuN_6sPCeIHurfDdaCHKKejQWbBgwvpSt0YCvEqpKCDVH_M5akGZLu54TZnydmkFpx3EhjnGkLK3BBfKe0Vx-EeaIiVWjBdI" />
                </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <div class="p-8 max-w-7xl mx-auto space-y-12">
            <!-- Hero Title Section -->
            <section class="space-y-2">
                <p class="text-on-surface-variant font-label font-bold uppercase tracking-widest text-xs">Your Personal
                    Calendar</p>
                <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Match Day Logistics
                </h2>
            </section>
            <!-- Featured Match (Glassmorphism Bento Item) -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-primary to-primary-container p-8 text-white shadow-2xl">
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-20 pointer-events-none">
                        <img class="w-full h-full object-cover"
                            data-alt="top-down artistic drone shot of a pristine emerald green soccer field with sharp white boundary lines and modern architecture"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9JK6rPpaOwUCrsOiZCl-2A4CtBhObFfhAmnrNnneFOJN7jbI9au719snu5aev6t_3cAMuxSZi1UkUDcho7c7UuseGH4LT2BtBskbKdkFnclytDa4GPCWW-5y8h6DBA6dH8Ed42Xl8Z4OcABmot3g1GcJfEQkKzfWVVAlwrxS0-I1YKRbeABlSm_OH1ILoKqx4o-Ie53e1Q7gBXyUzyWxN6uKZCkde9s1jZtCF96Ikh5GkYzKoNcVAQBmqq3SkxuFQeIjCveG0TZY" />
                    </div>
                    <div class="relative z-10 flex flex-col h-full justify-between gap-8">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1">
                                <span
                                    class="px-3 py-1 rounded-full bg-white/20 backdrop-blur-md text-xs font-bold uppercase tracking-wider">Upcoming
                                    • Tonight</span>
                                <h3 class="text-3xl font-headline font-bold mt-4">West Academy FC vs. Scholastic Pitch
                                    U19</h3>
                            </div>
                            <div class="flex flex-col items-end">
                                <div class="text-4xl font-headline font-black italic">19:45</div>
                                <p class="text-on-primary-container text-xs font-medium uppercase tracking-tighter">
                                    Kick-off</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">directions_bus</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Departure</p>
                                <p class="text-sm font-bold">17:15 Sharp</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">checkroom</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Kit Color</p>
                                <p class="text-sm font-bold">Away (Navy)</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">location_on</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Venue</p>
                                <p class="text-sm font-bold truncate">North Stadium</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/10">
                                <span class="material-symbols-outlined text-primary-fixed mb-2">nutrition</span>
                                <p class="text-[10px] text-primary-fixed uppercase font-bold">Pre-Match Meal</p>
                                <p class="text-sm font-bold">16:00 Hub</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Venue Map Widget -->
                <div
                    class="bg-surface-container-lowest rounded-[2rem] p-6 shadow-xl shadow-on-surface/5 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <h4 class="font-headline font-bold text-lg">Match Venue</h4>
                        <span class="text-secondary font-label text-xs font-bold cursor-pointer hover:underline">Get
                            Directions</span>
                    </div>
                    <div class="flex-grow overflow-hidden rounded-2xl relative min-h-[200px] bg-surface-container">
                        <img class="w-full h-full object-cover grayscale opacity-80 hover:grayscale-0 transition-all duration-500"
                            data-alt="high contrast minimalist map showing stylized urban streets and a clearly marked soccer stadium in the center"
                            data-location="North Stadium London"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBy0kS7dQmszlgzMst3ByVSFQSPHTW4F6FLLIiuCvbZ6PePB5o6jqKQwQvkjEQRZccY6f4Rd9DtB_pzhVTOmQuQCEaPNlHDpe7zK9Cpj7leDl4dDI5rsjKjnTRIru0kaXQjOxuKh4OlNCSqHvRXLVTCsNjt0k6cDJa6odNFm6P9Jh4rtS9RuSbLHy9-OJw0M7abKPx1FauhstM99XmL4AzsSBGdJvYKRGB0J0TCUYTsaLIhGLa9wgjuOCJUEWKhEcdMUzrsNcmmvw" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/80 to-transparent flex flex-col justify-end p-4">
                            <p class="font-bold text-sm">North Stadium Arena</p>
                            <p class="text-xs text-on-surface-variant">42 Stadium Way, NW9 0AA</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Schedule List -->
            <section class="space-y-6">
                <div class="flex items-center justify-between border-b-2 border-surface-container pb-4">
                    <h3 class="text-2xl font-headline font-bold">Next Fixtures</h3>
                    <div class="flex gap-2">
                        <button
                            class="px-4 py-2 rounded-xl bg-surface-container-high text-on-surface text-xs font-bold hover:bg-surface-container-highest transition-colors">Calendar
                            View</button>
                        <button
                            class="px-4 py-2 rounded-xl bg-surface-container-high text-on-surface text-xs font-bold hover:bg-surface-container-highest transition-colors">Sync
                            iCal</button>
                    </div>
                </div>
                <div class="space-y-4">
                    <!-- Fixture Row 1 -->
                    <div
                        class="group bg-surface-container-low hover:bg-surface-container-lowest p-5 rounded-2xl transition-all duration-300 flex flex-wrap md:flex-nowrap items-center gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white flex flex-col items-center justify-center text-on-surface shadow-sm border border-surface-variant/20">
                            <span class="text-xs font-bold text-primary uppercase">Oct</span>
                            <span class="text-2xl font-black font-headline">24</span>
                        </div>
                        <div class="flex-grow flex items-center justify-between gap-8">
                            <div class="flex-1">
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">Academy Cup •
                                    Quarter Final</p>
                                <div class="flex items-center gap-4">
                                    <span class="font-headline font-bold text-lg">Riverside United</span>
                                    <span class="text-on-surface-variant font-bold italic">vs</span>
                                    <span class="font-headline font-bold text-lg text-primary">Scholastic Pitch</span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-col items-center px-8 border-x border-surface-variant/30">
                                <span class="material-symbols-outlined text-secondary text-sm">checkroom</span>
                                <p class="text-xs font-bold mt-1">Home Kit</p>
                                <p class="text-[10px] text-on-surface-variant">Green/White</p>
                            </div>
                            <div class="text-right flex flex-col gap-1">
                                <p class="font-headline font-extrabold text-lg">15:00</p>
                                <div class="flex items-center gap-1 justify-end text-on-surface-variant">
                                    <span class="material-symbols-outlined text-xs">local_shipping</span>
                                    <span class="text-[10px] font-bold">BUS 12:45</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full md:w-auto px-6 py-2.5 rounded-xl bg-surface-container-highest text-on-surface text-sm font-bold group-hover:bg-primary group-hover:text-white transition-all">Details</button>
                    </div>
                    <!-- Fixture Row 2 -->
                    <div
                        class="group bg-surface-container-low hover:bg-surface-container-lowest p-5 rounded-2xl transition-all duration-300 flex flex-wrap md:flex-nowrap items-center gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white flex flex-col items-center justify-center text-on-surface shadow-sm border border-surface-variant/20">
                            <span class="text-xs font-bold text-primary uppercase">Oct</span>
                            <span class="text-2xl font-black font-headline">28</span>
                        </div>
                        <div class="flex-grow flex items-center justify-between gap-8">
                            <div class="flex-1">
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">League Round 12
                                </p>
                                <div class="flex items-center gap-4">
                                    <span class="font-headline font-bold text-lg text-primary">Scholastic Pitch</span>
                                    <span class="text-on-surface-variant font-bold italic">vs</span>
                                    <span class="font-headline font-bold text-lg">City Academy</span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-col items-center px-8 border-x border-surface-variant/30">
                                <span class="material-symbols-outlined text-secondary text-sm">checkroom</span>
                                <p class="text-xs font-bold mt-1">Home Kit</p>
                                <p class="text-[10px] text-on-surface-variant">Green/White</p>
                            </div>
                            <div class="text-right flex flex-col gap-1">
                                <p class="font-headline font-extrabold text-lg">11:00</p>
                                <div class="flex items-center gap-1 justify-end text-on-surface-variant">
                                    <span class="material-symbols-outlined text-xs">apartment</span>
                                    <span class="text-[10px] font-bold">HOME HUB</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full md:w-auto px-6 py-2.5 rounded-xl bg-surface-container-highest text-on-surface text-sm font-bold group-hover:bg-primary group-hover:text-white transition-all">Details</button>
                    </div>
                    <!-- Fixture Row 3 -->
                    <div
                        class="group bg-surface-container-low hover:bg-surface-container-lowest p-5 rounded-2xl transition-all duration-300 flex flex-wrap md:flex-nowrap items-center gap-6">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white flex flex-col items-center justify-center text-on-surface shadow-sm border border-surface-variant/20">
                            <span class="text-xs font-bold text-primary uppercase">Nov</span>
                            <span class="text-2xl font-black font-headline">02</span>
                        </div>
                        <div class="flex-grow flex items-center justify-between gap-8">
                            <div class="flex-1">
                                <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">Friendly Match
                                </p>
                                <div class="flex items-center gap-4">
                                    <span class="font-headline font-bold text-lg">Lakeside FC</span>
                                    <span class="text-on-surface-variant font-bold italic">vs</span>
                                    <span class="font-headline font-bold text-lg text-primary">Scholastic Pitch</span>
                                </div>
                            </div>
                            <div class="hidden lg:flex flex-col items-center px-8 border-x border-surface-variant/30">
                                <span class="material-symbols-outlined text-secondary text-sm">checkroom</span>
                                <p class="text-xs font-bold mt-1">Away Kit</p>
                                <p class="text-[10px] text-on-surface-variant">Navy Blue</p>
                            </div>
                            <div class="text-right flex flex-col gap-1">
                                <p class="font-headline font-extrabold text-lg">18:30</p>
                                <div class="flex items-center gap-1 justify-end text-on-surface-variant">
                                    <span class="material-symbols-outlined text-xs">local_shipping</span>
                                    <span class="text-[10px] font-bold">BUS 16:00</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full md:w-auto px-6 py-2.5 rounded-xl bg-surface-container-highest text-on-surface text-sm font-bold group-hover:bg-primary group-hover:text-white transition-all">Details</button>
                    </div>
                </div>
            </section>
            <!-- Kit Requirements Bento Grid Section -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-surface-container-lowest p-8 rounded-[2rem] shadow-xl shadow-on-surface/5 space-y-6">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined">inventory_2</span>
                        </div>
                        <h3 class="text-xl font-headline font-bold">Essential Kit Bag</h3>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-sm font-medium">Academy Tracksuit (Full)</span>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant uppercase">Mandatory</span>
                        </li>
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-sm font-medium">Both SG &amp; FG Boots</span>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant uppercase">Required</span>
                        </li>
                        <li class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary">info</span>
                                <span class="text-sm font-medium">GPS Performance Vest</span>
                            </div>
                            <span class="text-[10px] font-bold text-on-secondary-container uppercase">Charged</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-[2rem] shadow-xl shadow-on-surface/5 space-y-6">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined">analytics</span>
                        </div>
                        <h3 class="text-xl font-headline font-bold">Academic Requirements</h3>
                    </div>
                    <div class="p-4 rounded-2xl bg-tertiary-fixed/30 border-l-4 border-tertiary">
                        <p class="text-xs font-bold text-tertiary uppercase mb-2">Academic Eligibility Alert</p>
                        <p class="text-sm text-on-surface leading-relaxed font-medium">
                            Players must submit the <span class="font-bold">Quarterly Math Assessment</span> by Thursday
                            12:00 PM to remain eligible for the Riverside United fixture.
                        </p>
                    </div>
                    <button
                        class="w-full py-3 rounded-xl border-2 border-surface-variant text-sm font-bold hover:bg-surface-container-low transition-colors">
                        View Academic Portal
                    </button>
                </div>
            </section>
        </div>
    </main>
</body>

</html>