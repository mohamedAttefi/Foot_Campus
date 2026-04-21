<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 backdrop-blur-md z-50 flex flex-col p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 tonal-shift">
        <div class="mb-10">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic font-headline">The Scholastic Pitch</h1>
            <p class="text-xs font-semibold tracking-wide text-slate-500 uppercase mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 hover:text-emerald-600 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span> Dashboard
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 hover:text-emerald-600 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span> League Table
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 hover:text-emerald-600 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span> Teams
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-emerald-700 font-bold border-r-4 border-emerald-700 font-['Manrope'] tracking-wide text-sm" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span> Matches
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 hover:text-emerald-600 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span> Player Stats
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 hover:text-emerald-600 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span> Academic Hub
            </a>
        </nav>
        <button class="mt-8 mb-8 bg-gradient-to-r from-primary to-primary-container text-on-primary px-4 py-3 rounded-xl font-bold text-sm shadow-lg shadow-primary/20 flex items-center justify-center gap-2 transform active:scale-95 transition-all">
            <span class="material-symbols-outlined text-sm">add</span> Create Match
        </button>
        <div class="pt-6 border-t border-slate-200 mt-auto space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all font-['Manrope'] text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span> Settings
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all font-['Manrope'] text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span> Support
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header class="sticky top-0 ml-64 h-16 px-8 bg-white/80 backdrop-blur-xl z-40 flex justify-between items-center font-['Manrope'] font-medium text-sm text-emerald-800">
        <div class="flex items-center gap-8">
            <div class="relative w-64 group">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-highest rounded-full border-none focus:ring-2 focus:ring-primary text-sm placeholder:text-slate-400" placeholder="Search players, tactics..." type="text" />
            </div>
            <nav class="hidden md:flex gap-6">
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                <a class="text-emerald-700 font-bold border-b-2 border-emerald-700 pb-1" href="#">Schedule</a>
                <a class="text-slate-600 hover:text-emerald-500 transition-colors" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-surface-container-low rounded-full transition-colors relative">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                <span class="text-right hidden sm:block">
                    <p class="text-on-surface font-bold text-xs">Coach Sterling</p>
                    <p class="text-[10px] text-slate-500">First Team Manager</p>
                </span>
                <img alt="User Profile Avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm" data-alt="headshot of a middle-aged sports coach with a determined expression, wearing a team polo shirt against a blurred stadium background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDSLiOESowBNWE4vQ912Sj6FX1YCXT9PripdNuRymnMOl8XZqFUH2ZjOlwwudDtcP_vH1HGzo-YXBPZ6i5Gf0KdBw3YC9QKvavvW-OjmyeLddJsZpBSuwtYdG5ki8GQ3Er5iYQlu1ccWCOdJjsx6MZVzqg9_0L0wi9nFeS9orBOpCjsorxXQL-43AWvVPr79kbiOKfCUV6Zvg2Rn8no5QgvunblobjcEHkG3ZWttcv0tp2A6PaSb0bLpa-JG53qkmwbNFKIeTmlpM" />
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="ml-64 p-8 min-h-screen">
        <!-- Match Header Hero -->
        <section class="mb-10">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <span class="inline-flex items-center px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-extrabold uppercase tracking-widest rounded-full mb-4">
                        Elite Academy Cup • Quarter Final
                    </span>
                    <h2 class="text-4xl font-extrabold font-headline text-on-surface tracking-tight leading-none mb-2">Pre-Match Tactical View</h2>
                    <p class="text-on-surface-variant flex items-center gap-2 font-medium">
                        <span class="material-symbols-outlined text-primary" style="font-size: 18px;">event</span>
                        Saturday, Oct 14 • 14:00 • The Grand Scholastic Grounds
                    </p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-surface-container-highest text-on-surface px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-lg">print</span> Export PDF
                    </button>
                    <button class="bg-primary text-on-primary px-5 py-2.5 rounded-xl font-bold text-sm flex items-center gap-2 shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                        <span class="material-symbols-outlined text-lg">play_arrow</span> Final Briefing
                    </button>
                </div>
            </div>
        </section>
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-12 gap-6">
            <!-- Tactical Pitch Widget (Main Visual) -->
            <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm relative overflow-hidden">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 class="font-headline text-xl font-bold">Tactical Preparation</h3>
                        <p class="text-on-surface-variant text-xs uppercase tracking-widest font-bold mt-1">Starting XI: 4-3-3 Offensive</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-[10px] font-bold">Tactics Active</span>
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded-full text-[10px] font-bold">Ver: 2.1</span>
                    </div>
                </div>
                <!-- Football Pitch -->
                <div class="aspect-[4/3] w-full rounded-2xl bg-gradient-to-br from-primary-container to-primary relative shadow-inner p-4">
                    <div class="absolute inset-0 border-[3px] border-white/20 rounded-2xl m-4 pointer-events-none"></div>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-48 h-48 border-[3px] border-white/20 rounded-full"></div>
                        <div class="absolute w-[2px] h-[calc(100%-2rem)] bg-white/20 left-1/2"></div>
                    </div>
                    <!-- Tactical Markers (Players) -->
                    <div class="absolute top-1/2 left-8 -translate-y-1/2 flex flex-col items-center gap-1">
                        <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">1</div>
                        <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Davis (GK)</span>
                    </div>
                    <!-- Defending line -->
                    <div class="absolute inset-y-0 left-1/4 flex flex-col justify-around py-12">
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">2</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Chen</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">5</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Ibrahim</span>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-10 h-10 bg-white text-primary rounded-full flex items-center justify-center font-bold text-xs shadow-xl border-2 border-primary">4</div>
                            <span class="text-white text-[10px] font-bold uppercase tracking-tighter">Okafor</span>
                        </div>
                    </div>
                    <!-- Counter attacking zone (Overlay) -->
                    <div class="absolute right-12 top-1/2 -translate-y-1/2 w-48 h-48 bg-secondary/20 rounded-full border-2 border-dashed border-secondary animate-pulse flex items-center justify-center text-center">
                        <p class="text-white text-[10px] font-black uppercase leading-tight p-4">Exploit High Line Gap</p>
                    </div>
                </div>
                <!-- Tactical Notes Area -->
                <div class="mt-8 bg-surface-container-low p-6 rounded-2xl">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        <h4 class="font-bold text-sm">Manager's Tactical Directives</h4>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex gap-3 text-sm text-on-surface-variant leading-relaxed">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full mt-2 shrink-0"></span>
                            Press high for the first 15 mins to exploit their defender's slow build-up play under pressure.
                        </li>
                        <li class="flex gap-3 text-sm text-on-surface-variant leading-relaxed">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full mt-2 shrink-0"></span>
                            Inverted full-backs to tuck into midfield during transition to overload the central pivot.
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Opponent Scouting Report -->
            <div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
                <!-- Opponent Card -->
                <div class="bg-surface-container-lowest rounded-[2rem] p-6 shadow-sm border-t-8 border-secondary">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-surface-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary" style="font-size: 32px;">shield</span>
                            </div>
                            <div>
                                <h3 class="font-headline font-bold">St. Jude's Academy</h3>
                                <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Opponent Profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <p class="text-[10px] font-black uppercase text-emerald-700 tracking-wider mb-3">Key Strengths</p>
                            <div class="space-y-2">
                                <div class="p-3 bg-emerald-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-emerald-900">Set Piece Efficiency</span>
                                    <span class="text-[10px] bg-emerald-200 px-2 py-0.5 rounded font-bold">High</span>
                                </div>
                                <div class="p-3 bg-emerald-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-emerald-900">Right-Wing Pace</span>
                                    <span class="text-[10px] bg-emerald-200 px-2 py-0.5 rounded font-bold">Elite</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] font-black uppercase text-error tracking-wider mb-3">Target Weaknesses</p>
                            <div class="space-y-2">
                                <div class="p-3 bg-red-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-error">Stamina (70min+)</span>
                                    <span class="material-symbols-outlined text-sm text-error">trending_down</span>
                                </div>
                                <div class="p-3 bg-red-50 rounded-xl flex items-center justify-between">
                                    <span class="text-xs font-semibold text-error">Aerial Defense</span>
                                    <span class="material-symbols-outlined text-sm text-error">air</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Matchday Logistics -->
                <div class="bg-surface-container-high rounded-[2rem] p-6">
                    <h3 class="font-headline font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">inventory_2</span>
                        Matchday Logistics
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">commute</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Team Bus Departure</p>
                                <p class="text-[11px] text-on-surface-variant">11:30 AM Sharp • Gate A</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">checkroom</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Kit Configuration</p>
                                <p class="text-[11px] text-on-surface-variant">Away Colors (White/Emerald)</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-on-surface-variant">restaurant</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Pre-Match Nutrition</p>
                                <p class="text-[11px] text-on-surface-variant">Carb-load served at 9:00 AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Player Status / Form (Bottom Row) -->
            <div class="col-span-12 bg-white rounded-[2.5rem] p-8 shadow-sm overflow-hidden relative">
                <div class="flex justify-between items-center mb-8">
                    <h3 class="font-headline text-xl font-bold">Squad Momentum</h3>
                    <button class="text-primary font-bold text-sm hover:underline">Full Fitness Report</button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Mental Ready</span>
                            <span class="text-primary font-bold">94%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[94%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Physical Load</span>
                            <span class="text-secondary font-bold">62%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[62%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Tactical IQ</span>
                            <span class="text-tertiary-container font-bold">88%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-tertiary-container w-[88%]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Team Harmony</span>
                            <span class="text-primary font-bold">100%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-highest rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-primary to-primary-fixed w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Floating Action Button (Only on Mobile-ish) -->
    <div class="fixed bottom-8 right-8 lg:hidden">
        <button class="w-16 h-16 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center transform active:scale-95 transition-all">
            <span class="material-symbols-outlined text-3xl">sports_soccer</span>
        </button>
    </div>
</body>

</html>