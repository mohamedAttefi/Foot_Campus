<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
            color: #191c1e;
        }

        h1,
        h2,
        h3,
        .brand-font {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col h-screen p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md text-emerald-900 dark:text-emerald-400 font-['Manrope'] tracking-wide text-sm font-semibold shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10 px-2">
            <div class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</div>
            <div class="text-[10px] text-slate-500 font-medium tracking-[0.2em] mt-1">ELITE ACADEMY LEAGUE</div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 space-y-2 border-t border-slate-200/50">
            <button class="w-full bg-gradient-to-r from-primary to-primary-container text-on-primary py-3 px-4 rounded-xl font-bold mb-4 flex items-center justify-center gap-2 scale-95 hover:scale-100 duration-150 ease-in-out">
                <span class="material-symbols-outlined text-sm">add</span>
                Create Match
            </button>
            <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span>Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined">help</span>
                <span>Support</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header class="sticky top-0 w-full z-40 flex justify-between items-center h-16 px-8 ml-64 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl text-emerald-800 dark:text-emerald-400 font-['Manrope'] font-medium text-sm">
        <div class="flex items-center gap-8">
            <div class="relative group">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                    <span class="material-symbols-outlined text-lg">search</span>
                </span>
                <input class="bg-surface-container-highest border-none rounded-full py-2 pl-10 pr-4 text-xs w-64 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" placeholder="Search matches, players..." type="text" />
            </div>
            <nav class="flex gap-6">
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                <a class="text-emerald-700 dark:text-emerald-400 font-bold border-b-2 border-emerald-700 pb-2" href="#">Schedule</a>
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:text-emerald-500 relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <div class="text-right">
                    <p class="text-xs font-bold text-on-surface">St. Jude Academy</p>
                    <p class="text-[10px] text-slate-500">First Team Manager</p>
                </div>
                <img alt="User Profile Avatar" class="w-8 h-8 rounded-full object-cover" data-alt="professional headshot of a middle-aged sports manager in a dark green blazer with a soft blurred stadium background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNUp-Dh0sKS1d36vnYP0l8U26Xl71r-Rz7v3_zORtrwoqYPMKG-Wh-4ti-C2Qbuv6Gzy1tJ2vErvmYR_8gVILY7lO4gRZ4dSRj9pVpxbbUSd0IMNwgElcSMfhsFwL-WIJgjFGxBDMDfHUWLLjgqNXf7mepGNVrpoevtrV5aTq5yisnSPE3FS9LPsF1bN2vpstUHR5Tpiy8K0BQHXiUBR8OPdhBQQJUAaJkd4arPpzH_WKQbcLcDnj8jAFHg-AVG2YaKjahUvbOkNg" />
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="ml-64 p-8 min-h-screen">
        <!-- Header Section -->
        <div class="mb-10">
            <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant mb-2">Team Schedule • St. Jude Academy</p>
            <div class="flex justify-between items-end">
                <h1 class="text-4xl font-extrabold tracking-tight text-on-surface">Match Calendar</h1>
                <div class="flex gap-2">
                    <span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[10px] font-bold rounded-full">SEASON 24/25</span>
                    <span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold rounded-full">DIVISION 1</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-8">
            <!-- Featured Upcoming Match -->
            <div class="col-span-12 lg:col-span-8">
                <div class="relative bg-gradient-to-br from-primary to-primary-container rounded-[2rem] p-8 text-on-primary overflow-hidden shadow-2xl">
                    <!-- Background Texture Decor -->
                    <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none">
                        <svg class="w-full h-full fill-current" viewbox="0 0 100 100">
                            <path d="M0,0 L100,0 L100,100 Z"></path>
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-12">
                            <div>
                                <span class="bg-white/20 backdrop-blur-md px-4 py-1 rounded-full text-xs font-bold uppercase tracking-tighter">Next Fixture</span>
                                <p class="mt-4 text-primary-fixed font-medium">Saturday, Oct 24 • 14:30 PM</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-medium opacity-80">Venue</p>
                                <p class="font-bold">The Lion's Den (Away)</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4 mb-12">
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-24 h-24 bg-white/10 backdrop-blur-xl rounded-full flex items-center justify-center mb-4 p-4 border border-white/20">
                                    <img alt="St. Jude Academy Logo" class="w-full h-full object-contain" data-alt="heraldic crest of a school with a lion and laurel leaves in emerald green and white" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGf0WXXz4PtZqaQYIoHHFgd74uFdobpqGr7dA3GihYr-vLRzrl0Wy0hx05k8UrrR6hRlfMKyJYFz0z1J0FBOzvj8AoDAAPWYw9gqPcgUd2Uaqx90u2DpKpKEGGTkm9Sfgy3KtzSUzJCHjHM0lJKVUaSr4EWvwVdU8Ww2fS0hAr8Npb5JHmqpimaP-iXQ6NURKRzBMAA3rQbnlf1HaY20iGrYwTf6v_TEbYVFT2HcfqWe8h8cVwnpB5DcS-0cbizcT1sdUjMNNMgaY" />
                                </div>
                                <h3 class="text-xl font-extrabold text-center">St. Jude Academy</h3>
                            </div>
                            <div class="flex flex-col items-center">
                                <div class="text-4xl font-black text-white/40 italic">VS</div>
                            </div>
                            <div class="flex flex-col items-center flex-1">
                                <div class="w-24 h-24 bg-white/10 backdrop-blur-xl rounded-full flex items-center justify-center mb-4 p-4 border border-white/20">
                                    <img alt="Kings College Logo" class="w-full h-full object-contain" data-alt="minimalist modern circular sports logo with a crown icon in gold and royal blue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCd4yj7-IxKWexP8wmZwNGg9PMfGNe76rcaA8rVxBT-PfE64XRavrA6xxdhFjMNPWG_k1dfDtYI8C4FXuspt-EgBHPKsLyHzonWy9Png3aHN7FG8nt81Swcq1h_nwpZw0ZlGCMpyx0CPGpEnBZQSA92z8ZLof_F83mPfM--gu_d6EbzfCztToGGTaujhI4g8HZd-xPc6CAwl9ZvqxwRb5o1_nEQhegT8NQgy0Mefg8JuHQuggX_zxAncHldYIcWt5QJr6Zd7yLwvXU" />
                                </div>
                                <h3 class="text-xl font-extrabold text-center">Kings College</h3>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button class="bg-white text-primary px-8 py-4 rounded-xl font-bold flex items-center gap-3 hover:bg-primary-fixed transition-colors shadow-lg">
                                <span class="material-symbols-outlined">tactic</span>
                                Prepare Lineup
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Recent Form Sparklines -->
                <div class="mt-8 grid grid-cols-3 gap-4">
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm">
                        <p class="text-[10px] font-bold text-on-surface-variant uppercase mb-4">Goal Scoring Trend</p>
                        <div class="h-12 w-full flex items-end gap-1">
                            <div class="bg-primary h-[40%] w-full rounded-t-sm"></div>
                            <div class="bg-primary h-[70%] w-full rounded-t-sm"></div>
                            <div class="bg-primary h-[50%] w-full rounded-t-sm"></div>
                            <div class="bg-primary h-[90%] w-full rounded-t-sm"></div>
                            <div class="bg-primary h-[80%] w-full rounded-t-sm"></div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm">
                        <p class="text-[10px] font-bold text-on-surface-variant uppercase mb-4">Clean Sheets</p>
                        <div class="flex items-center gap-2">
                            <span class="text-3xl font-black text-secondary">04</span>
                            <span class="text-xs text-slate-500 font-medium leading-tight">Consecutive matches without conceding</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm">
                        <p class="text-[10px] font-bold text-on-surface-variant uppercase mb-4">Win Probability</p>
                        <div class="relative w-full h-2 bg-surface-container-low rounded-full overflow-hidden mt-6">
                            <div class="absolute left-0 top-0 h-full bg-primary" style="width: 72%"></div>
                        </div>
                        <p class="text-right text-xs font-bold mt-2 text-primary">72%</p>
                    </div>
                </div>
            </div>
            <!-- Recent Results List -->
            <div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
                <div class="bg-surface-container-low rounded-3xl p-6 flex-1">
                    <h2 class="text-xl font-bold mb-6 text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history</span>
                        Recent Results
                    </h2>
                    <div class="space-y-4">
                        <!-- Result 1 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl border-l-4 border-emerald-500 shadow-sm">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">12 Oct 2024</span>
                                <span class="bg-tertiary-container text-on-tertiary-container px-2 py-0.5 rounded-full text-[9px] font-bold">W</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-bold">St. Jude Academy</p>
                                <p class="text-lg font-black font-headline">3 - 1</p>
                                <p class="text-sm font-medium text-slate-500">Green Valley High</p>
                            </div>
                        </div>
                        <!-- Result 2 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl border-l-4 border-slate-300 shadow-sm">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">05 Oct 2024</span>
                                <span class="bg-surface-variant text-on-surface-variant px-2 py-0.5 rounded-full text-[9px] font-bold">D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-bold">St. Jude Academy</p>
                                <p class="text-lg font-black font-headline">0 - 0</p>
                                <p class="text-sm font-medium text-slate-500">Riverdale Prep</p>
                            </div>
                        </div>
                        <!-- Result 3 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl border-l-4 border-error shadow-sm">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">28 Sep 2024</span>
                                <span class="bg-error-container text-on-error-container px-2 py-0.5 rounded-full text-[9px] font-bold">L</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-medium text-slate-500">Oakwood Academy</p>
                                <p class="text-lg font-black font-headline">2 - 1</p>
                                <p class="text-sm font-bold">St. Jude Academy</p>
                            </div>
                        </div>
                        <!-- Result 4 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl border-l-4 border-emerald-500 shadow-sm">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-[10px] font-bold text-slate-400 uppercase">21 Sep 2024</span>
                                <span class="bg-tertiary-container text-on-tertiary-container px-2 py-0.5 rounded-full text-[9px] font-bold">W</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm font-bold">St. Jude Academy</p>
                                <p class="text-lg font-black font-headline">4 - 0</p>
                                <p class="text-sm font-medium text-slate-500">Hillside Collegiate</p>
                            </div>
                        </div>
                    </div>
                    <button class="w-full mt-6 py-3 text-primary text-xs font-bold hover:bg-primary/5 rounded-xl transition-colors">View All Match History</button>
                </div>
            </div>
            <!-- Detailed Calendar View -->
            <div class="col-span-12">
                <div class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-2xl font-extrabold">Full Match Calendar</h2>
                        <div class="flex gap-4">
                            <select class="bg-surface-container-low border-none rounded-xl text-xs font-bold px-4 py-2 focus:ring-primary">
                                <option>October 2024</option>
                                <option>November 2024</option>
                                <option>December 2024</option>
                            </select>
                            <div class="flex bg-surface-container-low rounded-xl p-1">
                                <button class="px-4 py-1 bg-white rounded-lg shadow-sm text-xs font-bold">List View</button>
                                <button class="px-4 py-1 text-xs font-bold text-slate-500">Grid View</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <!-- Header for list -->
                        <div class="grid grid-cols-12 px-6 py-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                            <div class="col-span-2">Date &amp; Time</div>
                            <div class="col-span-4">Opponent</div>
                            <div class="col-span-2">Venue</div>
                            <div class="col-span-2">Competition</div>
                            <div class="col-span-2 text-right">Action</div>
                        </div>
                        <!-- Row 1 -->
                        <div class="grid grid-cols-12 items-center px-6 py-4 rounded-2xl hover:bg-surface-container-low transition-colors group">
                            <div class="col-span-2">
                                <p class="text-sm font-bold">Oct 24, 2024</p>
                                <p class="text-xs text-slate-500">14:30 PM</p>
                            </div>
                            <div class="col-span-4 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-surface-container-low p-1.5">
                                    <img alt="Opponent Logo" class="w-full h-full object-contain" data-alt="royal blue and gold sports crest" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtWkqX066MiA4logwpkgwwq6lwz5w7eAmuf0bd29qbB0kFRMcZcxVVIZooeg0SeVOUK0ZZrdHXzclMji4pl916TqVnX-7Gq7F8DQkJor8KDtL-UpMtZ9-AUQ2I0BRlyNXL9Xr_RJ7VEhpWRzmifC2X31j7Y6ObiPmoc4w8x9cdP_snoXbdCdK6AGOjY-9w9a4VEqfcJ8wTIUsbTZfGaf5d5Lk3kH7a0ZcgDQPMQl2Jk4uBr9jHSjR167PjR8ck5Tg5BjXJRwoe4Vw" />
                                </div>
                                <p class="text-sm font-bold">Kings College</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs font-medium text-on-surface-variant">Away</p>
                            </div>
                            <div class="col-span-2">
                                <span class="px-2 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold rounded-full">Elite Div 1</span>
                            </div>
                            <div class="col-span-2 text-right">
                                <button class="text-primary font-bold text-xs opacity-0 group-hover:opacity-100 transition-opacity">Prepare Match</button>
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="grid grid-cols-12 items-center px-6 py-4 rounded-2xl hover:bg-surface-container-low transition-colors group">
                            <div class="col-span-2">
                                <p class="text-sm font-bold">Oct 31, 2024</p>
                                <p class="text-xs text-slate-500">11:00 AM</p>
                            </div>
                            <div class="col-span-4 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-surface-container-low p-1.5">
                                    <img alt="Opponent Logo" class="w-full h-full object-contain" data-alt="heraldic eagle icon in black and gold" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZByf4DF-64IIXibsVl1OfqADK27Pyhuc3srfqzO5l99LuMt6YIr-cEJsPzKC3E__p5T2pS9Fm_m8HDDXJV3o7xpUgjZ3pnNy5-_z8v5yW-bD8hLyioAIS1R3bzq5NcltymqqpfcaVlAfXL3hsYdtqCizbVnRxgtFBeuhxlWNR4jjeUM5l97RVgvE4ghEiIVieDeJuQ7cG0_Wvz6p6iBHbMQAToKZ6N91pPzgbxT4_ZIVrQjVAYFRQ0frs7pbyhAYJnY3W_K7TkGQ" />
                                </div>
                                <p class="text-sm font-bold">Summit Academy</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs font-medium text-on-surface-variant">Home</p>
                            </div>
                            <div class="col-span-2">
                                <span class="px-2 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold rounded-full">Elite Div 1</span>
                            </div>
                            <div class="col-span-2 text-right">
                                <button class="text-primary font-bold text-xs opacity-0 group-hover:opacity-100 transition-opacity">Prepare Match</button>
                            </div>
                        </div>
                        <!-- Row 3 -->
                        <div class="grid grid-cols-12 items-center px-6 py-4 rounded-2xl hover:bg-surface-container-low transition-colors group">
                            <div class="col-span-2">
                                <p class="text-sm font-bold">Nov 07, 2024</p>
                                <p class="text-xs text-slate-500">15:00 PM</p>
                            </div>
                            <div class="col-span-4 flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-surface-container-low p-1.5">
                                    <img alt="Opponent Logo" class="w-full h-full object-contain" data-alt="minimal sports shield icon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPob4iwa5KTf4RGKzZ6xAJ8vqGkgW8iqJw4qpRfITo481si4blN55pMLA5LiyqZf7xzfABEd64X38fVD7OZzsQXVfNsV0x1h7LaY_g_R3KHm-iXjkuaa5sgUhmipB-uGN1FG5qRlyhamd0_vv951kwjLHUwE5LmI7UOIWqPdmSJwtonv0qOB8gBtKANQtTikqY7aSGLpnHQuZR3K9VCrFMu2c7M-fdMQjWL40xigW_-KFd_rem8i1cJIDwEqY_LUwahdlVRDScgUc" />
                                </div>
                                <p class="text-sm font-bold">Westfield Prep</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs font-medium text-on-surface-variant">Away</p>
                            </div>
                            <div class="col-span-2">
                                <span class="px-2 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold rounded-full">Academy Cup</span>
                            </div>
                            <div class="col-span-2 text-right">
                                <button class="text-primary font-bold text-xs opacity-0 group-hover:opacity-100 transition-opacity">Prepare Match</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- FAB (Suppressed as per rules for detailed list pages, but included as a shell component if needed elsewhere) -->
</body>

</html>