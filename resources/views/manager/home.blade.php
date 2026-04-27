<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manager Dashboard - St. Jude Academy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
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
                        "2xl": "1rem",
                        "3xl": "1.5rem",
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

        .glass-card {
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</h1>
            <p class="text-xs font-headline font-semibold text-emerald-900/60 uppercase tracking-widest mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 bg-emerald-50/50 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Academic Hub</span>
            </a>
        </nav>
        <button class="mt-8 mb-8 w-full py-3 px-4 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm flex items-center justify-center gap-2 shadow-lg shadow-primary/20 scale-95 hover:scale-100 transition-transform">
            <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
            Create Match
        </button>
        <div class="mt-auto space-y-2 border-t border-slate-200 pt-6">
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-['Manrope'] text-sm font-semibold">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-['Manrope'] text-sm font-semibold">Support</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <div class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 transition-opacity">
            <div class="flex items-center gap-8">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-lg" data-icon="search">search</span>
                    <input class="pl-10 pr-4 py-1.5 bg-surface-container-highest/50 border-none rounded-full text-sm w-64 focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search matches, players..." type="text" />
                </div>
                <nav class="flex gap-6">
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:bg-surface-container rounded-full relative transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right">
                        <p class="text-sm font-bold font-headline leading-none">Coach Marcus</p>
                        <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">St. Jude Academy</p>
                    </div>
                    <img alt="User Profile Avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed object-cover" data-alt="professional headshot of a middle-aged athletic coach with a confident expression in a bright studio setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRxCr_8YR5_PhEUiG4SFDOhgfkQICqiCvCQuBLwopo0espb3-Jbt8zyDabvDvyWm0DVg2CE696rIC1vMd7DaYrkyhcVWTwBgrJbfV4Uvs6hH8YaDQJoWRQ89Y8FEfOStmit_3eaj0Mdl1UE8oE48mM2o5FBKXiMtVdTXxermE2uPhXT1yV9GpdAXK1ZwMHz1avs2awnhN_zjWZKcKKXFThIFw9EySI--nKaMRBHYKjgjzXNe8OZtNUbYdu8bdLS2_t4Zc7gt9QAas" />
                </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <main class="p-8 space-y-8">
            <!-- Hero Section: Team Status -->
            <section class="flex flex-col md:flex-row gap-6">
                <div class="flex-1 bg-surface-container-lowest p-8 rounded-3xl relative overflow-hidden shadow-sm">
                    <div class="relative z-10">
                        <span class="inline-block px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full mb-4">Current Team</span>
                        <h2 class="text-4xl font-extrabold font-headline text-primary tracking-tight mb-2">St. Jude Academy</h2>
                        <div class="flex gap-4 mt-6">
                            <div class="flex flex-col">
                                <span class="text-2xl font-bold font-headline">1st</span>
                                <span class="text-[10px] uppercase text-on-surface-variant font-bold">League Rank</span>
                            </div>
                            <div class="w-px h-8 bg-slate-200 self-center"></div>
                            <div class="flex flex-col">
                                <span class="text-2xl font-bold font-headline">12-2-1</span>
                                <span class="text-[10px] uppercase text-on-surface-variant font-bold">Season Record</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
                </div>
                <!-- Team Health Average Card -->
                <div class="w-full md:w-80 bg-surface-container-low p-6 rounded-3xl border border-white/50 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-6">
                            <p class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Team Health</p>
                            <span class="material-symbols-outlined text-primary" data-icon="favorite">favorite</span>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <span class="text-5xl font-extrabold font-headline text-primary">94%</span>
                            <span class="text-emerald-600 text-xs font-bold flex items-center">
                                <span class="material-symbols-outlined text-xs" data-icon="arrow_upward">arrow_upward</span> 2.4%
                            </span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full h-2 bg-white rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[94%] rounded-full"></div>
                        </div>
                        <p class="text-[10px] text-on-surface-variant mt-2 italic">3 players currently in light training</p>
                    </div>
                </div>
            </section>
            <!-- Main Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Next Opponent (4 cols) -->
                <div class="md:col-span-4 bg-surface-container-lowest p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold font-headline tracking-tight">Next Opponent</h3>
                        <span class="text-[10px] font-bold bg-secondary-fixed text-on-secondary-fixed px-2 py-0.5 rounded-full">SAT 14:00</span>
                    </div>
                    <div class="flex items-center gap-4 mb-6 p-4 bg-surface-container-low rounded-2xl">
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center shadow-sm">
                            <span class="material-symbols-outlined text-3xl text-slate-300" data-icon="shield">shield</span>
                        </div>
                        <div>
                            <p class="font-bold text-sm">Northgate Lions</p>
                            <p class="text-[10px] text-on-surface-variant">3rd Place | High Press Style</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant border-b border-slate-100 pb-2">Scouting Notes</p>
                        <ul class="space-y-3">
                            <li class="flex gap-3 items-start">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5" data-icon="target">target</span>
                                <p class="text-xs text-on-surface leading-relaxed">Aggressive wing play; target their left flank during counter-transitions.</p>
                            </li>
                            <li class="flex gap-3 items-start">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5" data-icon="warning">warning</span>
                                <p class="text-xs text-on-surface leading-relaxed">Top scorer #9 back from suspension. Needs man-marking in final third.</p>
                            </li>
                        </ul>
                        <button class="w-full mt-4 py-2.5 text-xs font-bold text-primary hover:bg-primary-fixed/30 transition-colors rounded-xl flex items-center justify-center gap-1">
                            Full Analysis <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Training Schedule (5 cols) -->
                <div class="md:col-span-5 bg-primary p-1 rounded-3xl overflow-hidden shadow-lg shadow-primary/10">
                    <div class="bg-primary p-6 text-on-primary">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold font-headline">Training Schedule</h3>
                            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
                        </div>
                        <div class="space-y-4">
                            <!-- Training Row -->
                            <div class="flex gap-4 p-4 bg-white/10 rounded-2xl backdrop-blur-md items-center border border-white/5">
                                <div class="text-center min-w-[40px]">
                                    <p class="text-xs font-bold opacity-70">TUE</p>
                                    <p class="text-xl font-black">16</p>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Tactical Positioning</p>
                                    <p class="text-[10px] opacity-70 italic">Pitch B • 16:30 - 18:00</p>
                                </div>
                                <span class="material-symbols-outlined opacity-40" data-icon="check_circle">check_circle</span>
                            </div>
                            <!-- Training Row Active -->
                            <div class="flex gap-4 p-4 bg-white rounded-2xl items-center shadow-sm">
                                <div class="text-center min-w-[40px] text-primary">
                                    <p class="text-xs font-bold opacity-70">WED</p>
                                    <p class="text-xl font-black">17</p>
                                </div>
                                <div class="flex-1 text-on-surface">
                                    <p class="text-sm font-bold">Set Piece Drill</p>
                                    <p class="text-[10px] text-on-surface-variant">Indoor Hall • 15:00 - 17:00</p>
                                </div>
                                <div class="px-2 py-1 bg-primary-fixed text-on-primary-fixed text-[8px] font-bold rounded-md">TODAY</div>
                            </div>
                            <!-- Training Row -->
                            <div class="flex gap-4 p-4 bg-white/10 rounded-2xl backdrop-blur-md items-center border border-white/5">
                                <div class="text-center min-w-[40px]">
                                    <p class="text-xs font-bold opacity-70">FRI</p>
                                    <p class="text-xl font-black">19</p>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Light Recovery</p>
                                    <p class="text-[10px] opacity-70 italic">Gym • 16:00 - 17:00</p>
                                </div>
                                <span class="material-symbols-outlined opacity-40" data-icon="schedule">schedule</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Task List (3 cols) -->
                <div class="md:col-span-3 bg-surface-container-low p-6 rounded-3xl shadow-sm border border-white">
                    <h3 class="text-lg font-bold font-headline tracking-tight mb-6">Manager Actions</h3>
                    <div class="space-y-3">
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 border-error">
                                <div>
                                    <p class="text-xs font-bold">Lineup Submission</p>
                                    <p class="text-[10px] text-on-surface-variant">Due in 4 hours</p>
                                </div>
                                <span class="material-symbols-outlined text-error" data-icon="pending_actions">pending_actions</span>
                            </div>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 border-secondary">
                                <div>
                                    <p class="text-xs font-bold">Incident Reports</p>
                                    <p class="text-[10px] text-on-surface-variant">1 pending from U19 match</p>
                                </div>
                                <span class="material-symbols-outlined text-secondary" data-icon="report">report</span>
                            </div>
                        </div>
                        <div class="group cursor-pointer">
                            <div class="flex items-center justify-between p-3 bg-surface-container-lowest rounded-xl group-hover:bg-primary-fixed/20 transition-all border-l-4 border-primary">
                                <div>
                                    <p class="text-xs font-bold">Academic Clearance</p>
                                    <p class="text-[10px] text-on-surface-variant">Review player GPA trends</p>
                                </div>
                                <span class="material-symbols-outlined text-primary" data-icon="assignment_turned_in">assignment_turned_in</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 p-4 bg-tertiary-fixed rounded-2xl">
                        <p class="text-[10px] font-bold text-on-tertiary-fixed-variant uppercase tracking-widest mb-2">Did you know?</p>
                        <p class="text-xs text-on-tertiary-fixed italic">Players with 3.5+ GPA show 15% better tactical compliance during drills.</p>
                    </div>
                </div>
            </div>
            <!-- Performance Section -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Academic Performance Widget -->
                <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-slate-100 flex items-center gap-12">
                    <div class="flex-1">
                        <h4 class="text-2xl font-bold font-headline mb-2">Team Academic Average</h4>
                        <p class="text-sm text-on-surface-variant mb-6 leading-relaxed">Your squad is meeting the Elite Scholar requirements for the upcoming Regional Finals.</p>
                        <div class="flex gap-4">
                            <div class="px-4 py-2 bg-tertiary-container text-on-tertiary-container rounded-full text-xs font-bold">3.42 GPA Average</div>
                            <div class="px-4 py-2 bg-surface-container-high text-on-surface-variant rounded-full text-xs font-bold">Grade: B+</div>
                        </div>
                    </div>
                    <div class="relative w-32 h-32 flex items-center justify-center">
                        <svg class="w-full h-full -rotate-90">
                            <circle class="text-surface-container" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-width="12"></circle>
                            <circle class="text-tertiary-container" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-dasharray="364.4" stroke-dashoffset="54.6" stroke-width="12"></circle>
                        </svg>
                        <div class="absolute text-xl font-black font-headline">85%</div>
                    </div>
                </div>
                <!-- Training Intensity (Pitch View Placeholder) -->
                <div class="bg-primary rounded-3xl overflow-hidden relative min-h-[250px] shadow-sm">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-fixed-dim/20 to-primary/80 z-10 p-8 flex flex-col justify-between">
                        <div>
                            <h4 class="text-xl font-bold text-on-primary font-headline">Tactical Field Map</h4>
                            <p class="text-xs text-on-primary-container">Intensity distribution from last session</p>
                        </div>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-xl text-white text-[10px] font-bold uppercase tracking-widest border border-white/20">View Hotmaps</button>
                            <button class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-xl text-white text-[10px] font-bold uppercase tracking-widest border border-white/20">Player Positions</button>
                        </div>
                    </div>
                    <img alt="Tactical Pitch Background" class="absolute inset-0 w-full h-full object-cover opacity-60" data-alt="birds-eye view of a pristine professional football pitch with perfect geometric grass patterns and morning dew" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDFlIvrRrwsZVrzaccu5nph5aXxP-rrgiaUFnTo3GDfGpRzwi4ul7PoYRWOmlhqSg5qKjzYjzfNNw-KUHt0IqwbwKFQ8w5I79x1JHP6GuJU0mx16reeSLopX2ymI1SxUv85cFo31-fkboKmGiuYP-pqNo518tJRdNJ0U-qQRuuvqVuTvF4sDMNT8mdxb66MtxZlDiQPMD7Xh7B7lx2D2awGTNys6YVSGMICdGVDg_q_IOIzVnyCKRtPEkaPJEK7s4ItCOx30YMKS4" />
                </div>
            </section>
        </main>
    </div>
    <!-- Floating Action Button (Only on Home/Dashboard screens) -->
    <button class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-tr from-primary to-primary-container text-on-primary rounded-full shadow-2xl flex items-center justify-center group hover:scale-110 transition-transform z-50">
        <span class="material-symbols-outlined text-2xl group-hover:rotate-90 transition-transform" data-icon="add">add</span>
    </button>
</body>

</html>