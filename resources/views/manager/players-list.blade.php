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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar (Shared Component) -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md text-emerald-900 shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10 flex flex-col">
            <span class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</span>
            <span class="text-xs font-headline font-semibold text-slate-500 uppercase tracking-widest mt-1">Elite Academy League</span>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 bg-emerald-50/50" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-3 px-4 py-3 font-['Manrope'] tracking-wide text-sm font-semibold rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                Academic Hub
            </a>
        </nav>
        <div class="mt-auto space-y-2 pt-6">
            <button class="w-full bg-emerald-900 text-white rounded-xl py-3 text-sm font-bold shadow-lg shadow-emerald-900/20 active:scale-95 transition-all">
                Create Match
            </button>
            <div class="pt-4 flex flex-col gap-1">
                <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg" data-icon="settings">settings</span>
                    Settings
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg" data-icon="help">help</span>
                    Support
                </a>
            </div>
        </div>
    </aside>
    <!-- Main Content Wrapper -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar (Shared Component) -->
        <header class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-0">
            <div class="flex items-center gap-6">
                <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-sm" data-icon="search">search</span>
                    <input class="bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 text-sm w-80 focus:ring-2 focus:ring-primary-container" placeholder="Search players, rosters, performance..." type="text" />
                </div>
                <nav class="flex gap-8">
                    <a class="text-emerald-800 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="text-emerald-800 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                    <a class="text-emerald-800 font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-slate-600 hover:text-emerald-500 transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-4">
                    <span class="text-sm font-semibold text-emerald-800">Coach Marcus</span>
                    <img alt="Profile" class="w-10 h-10 rounded-full border-2 border-emerald-100 object-cover" data-alt="Professional sports coach headshot with warm confident expression in stadium environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVLR3YvTnJ5k6kUFGowWtAKUeTjsJwfozzKS7NbSwVBCl_Vt5HeJaNTpRIvnN1PC-GgX_vmNNH1tcY5U9GR9aLx8gJr0Ar7yXrdHda7M25rPUwxRRncZjDuooju3eOSmIGxmWPj7Hx3XlMKEsVWDBPpkt_ooWJIhA2CVHgdnaEIKM9QXPUYS_Fy3TUSAeY3iRP550RxcsnOP8-oH9d5ClnnSEiaDqdbTAUFbyiPXkvPNBadOY8AA7UMSxD_kRRl9Id7ZUnWZfpwf0" />
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="p-8">
            <div class="max-w-7xl mx-auto">
                <!-- Header Section -->
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant mb-2 block">Manager Command Center</span>
                        <h1 class="text-4xl font-headline font-extrabold text-on-surface leading-tight">First Team Roster</h1>
                    </div>
                    <div class="flex gap-3">
                        <button class="px-5 py-2.5 rounded-xl bg-surface-container-low text-on-surface text-sm font-semibold hover:bg-surface-container-high transition-colors">Export Analytics</button>
                        <button class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-primary to-primary-container text-white text-sm font-bold shadow-md">Add Prospect</button>
                    </div>
                </div>
                <!-- Strategic Overview Bento Grid -->
                <div class="grid grid-cols-12 gap-6 mb-12">
                    <!-- Squad Fitness Card -->
                    <div class="col-span-12 lg:col-span-4 bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-headline font-bold text-xl">Squad Vitality</h3>
                            <span class="material-symbols-outlined text-primary" data-icon="health_and_safety">health_and_safety</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-on-surface-variant">Match Ready</span>
                                <span class="text-sm font-bold text-primary">22 Players</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[88%]"></div>
                            </div>
                            <div class="flex items-center gap-3 pt-2">
                                <span class="px-3 py-1 rounded-full bg-error-container text-on-error-container text-[10px] font-bold uppercase">2 Injured</span>
                                <span class="px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-bold uppercase">1 Doubtful</span>
                            </div>
                        </div>
                    </div>
                    <!-- Tactical Momentum -->
                    <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-3xl p-8 shadow-sm overflow-hidden relative">
                        <div class="absolute right-0 top-0 w-1/2 h-full opacity-10 pointer-events-none">
                            <div class="w-full h-full bg-gradient-to-l from-secondary to-transparent"></div>
                        </div>
                        <h3 class="font-headline font-bold text-xl mb-6">Academic vs Performance Momentum</h3>
                        <div class="flex gap-12 h-32 items-end">
                            <div class="flex-1 flex flex-col justify-end gap-2">
                                <div class="flex gap-1 items-end h-20">
                                    <div class="bg-primary w-full h-[60%] rounded-t-sm"></div>
                                    <div class="bg-primary w-full h-[75%] rounded-t-sm"></div>
                                    <div class="bg-primary w-full h-[65%] rounded-t-sm"></div>
                                    <div class="bg-primary w-full h-[90%] rounded-t-sm"></div>
                                    <div class="bg-primary w-full h-[85%] rounded-t-sm"></div>
                                    <div class="bg-primary w-full h-[100%] rounded-t-sm"></div>
                                </div>
                                <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">GSA Average</span>
                            </div>
                            <div class="flex-1 flex flex-col justify-end gap-2">
                                <div class="flex gap-1 items-end h-20">
                                    <div class="bg-secondary w-full h-[40%] rounded-t-sm"></div>
                                    <div class="bg-secondary w-full h-[55%] rounded-t-sm"></div>
                                    <div class="bg-secondary w-full h-[80%] rounded-t-sm"></div>
                                    <div class="bg-secondary w-full h-[70%] rounded-t-sm"></div>
                                    <div class="bg-secondary w-full h-[90%] rounded-t-sm"></div>
                                    <div class="bg-secondary w-full h-[95%] rounded-t-sm"></div>
                                </div>
                                <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">Win Ratio %</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Player List (Detailed Cards) -->
                <div class="space-y-8">
                    <div class="flex items-center justify-between px-2">
                        <h2 class="text-2xl font-headline font-bold">Player Performance Hub</h2>
                        <div class="flex gap-4">
                            <span class="flex items-center gap-2 text-sm text-on-surface-variant">
                                <span class="w-3 h-3 rounded-full bg-primary"></span> Athletic
                            </span>
                            <span class="flex items-center gap-2 text-sm text-on-surface-variant">
                                <span class="w-3 h-3 rounded-full bg-tertiary"></span> Academic
                            </span>
                        </div>
                    </div>
                    <!-- Player Card 1 -->
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col md:flex-row gap-8 items-start hover:shadow-xl transition-shadow duration-500">
                        <div class="relative">
                            <img alt="Player" class="w-32 h-40 object-cover rounded-2xl shadow-lg shadow-primary/10" data-alt="Young athlete in academy soccer jersey looking focused with soft stadium light bokeh background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd5HjdISbjqETdpiL-xkKzYY2hhiFFm-qJmePpLCprorCCnurrLjjZsji8fYAA_xx0o0Exy2HzDQm1r9RyR1cfIX90iO0Gcgs9nrsG1T-76Qs8mNPBGIvlGXGnWacvaLf8s4Po8nlL9H6LJSi5Pyu6OrIKB7QA-ARDuw9MRwLeYrfu8PPq_jcdSr2SrhLwNzas0lnb3RJPNvpTPVQd2GCrLJhrqtrRApon_iI3Vh6n02SOcqVkIbpxGFOoCrzLcGRDJPlf8tYbLsg" />
                            <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-surface shadow-sm">
                                <span class="text-sm font-black text-primary">09</span>
                            </div>
                        </div>
                        <div class="flex-1 space-y-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-headline font-extrabold text-on-surface">Julian Sterling</h3>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Striker</span>
                                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Year 11</span>
                                        <span class="px-2 py-0.5 rounded-md bg-emerald-50 text-primary text-[10px] font-black uppercase">Elite</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <div class="text-center px-4 py-2 bg-surface rounded-xl">
                                        <span class="block text-xs font-bold text-on-surface-variant uppercase">GSA</span>
                                        <span class="text-lg font-headline font-black text-tertiary">3.8</span>
                                    </div>
                                    <div class="text-center px-4 py-2 bg-primary/5 rounded-xl">
                                        <span class="block text-xs font-bold text-primary uppercase">Rating</span>
                                        <span class="text-lg font-headline font-black text-primary">8.4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Goals</span>
                                    <span class="block text-xl font-headline font-bold">14</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Assists</span>
                                    <span class="block text-xl font-headline font-bold">06</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Form</span>
                                    <div class="flex gap-1 h-6 items-end">
                                        <span class="w-2 h-3 bg-primary rounded-t-sm opacity-30"></span>
                                        <span class="w-2 h-4 bg-primary rounded-t-sm opacity-50"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-5 bg-primary rounded-t-sm opacity-80"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Status</span>
                                    <span class="flex items-center gap-1.5 text-xs font-bold text-primary">
                                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        Available
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-auto self-stretch flex flex-col justify-between">
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-primary-fixed-dim transition-colors group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors" data-icon="analytics">analytics</span>
                            </button>
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-secondary-fixed transition-colors mt-auto group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-secondary transition-colors" data-icon="edit">edit</span>
                            </button>
                        </div>
                    </div>
                    <!-- Player Card 2 -->
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col md:flex-row gap-8 items-start hover:shadow-xl transition-shadow duration-500">
                        <div class="relative opacity-70">
                            <img alt="Player" class="w-32 h-40 object-cover rounded-2xl grayscale" data-alt="Young goalkeeper in training gear catching a ball at twilight with focused eyes" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA30hZxb341Rqr6OdOfDdhZHe__mn0MtDIXPn3Ba-9i6r1BIV2MYCufNrKeKaEgTRY1Q4l7cMBFDErSRBpcktmDY0p-_II1TsVCphVHvGj6skBjZ4T9wrESlQ9SNGmwFeRX0EY9i_0oHPKZIZ336fFDUuYrnFECjjQiWAA5JRY3DeHLe42RRJqJd5W0rEIxaPbNB29GSCa33IG8HyMbHCSEnqt7fYFkqELFzXEgyTW_iRfEQ1bIylYKlzEHFlcDt4ujIPHZByuQ7UY" />
                            <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-surface shadow-sm">
                                <span class="text-sm font-black text-on-surface-variant">01</span>
                            </div>
                        </div>
                        <div class="flex-1 space-y-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-headline font-extrabold text-on-surface">Xavier Rossi</h3>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Goalkeeper</span>
                                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Year 13</span>
                                        <span class="px-2 py-0.5 rounded-md bg-secondary-fixed text-on-secondary-container text-[10px] font-black uppercase">Senior</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <div class="text-center px-4 py-2 bg-surface rounded-xl">
                                        <span class="block text-xs font-bold text-on-surface-variant uppercase">GSA</span>
                                        <span class="text-lg font-headline font-black text-tertiary">4.0</span>
                                    </div>
                                    <div class="text-center px-4 py-2 bg-primary/5 rounded-xl">
                                        <span class="block text-xs font-bold text-primary uppercase">Rating</span>
                                        <span class="text-lg font-headline font-black text-primary">7.9</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Clean Sheets</span>
                                    <span class="block text-xl font-headline font-bold">08</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Saves</span>
                                    <span class="block text-xl font-headline font-bold">42</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Form</span>
                                    <div class="flex gap-1 h-6 items-end">
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-4 bg-primary rounded-t-sm opacity-50"></span>
                                        <span class="w-2 h-2 bg-primary rounded-t-sm opacity-20"></span>
                                        <span class="w-2 h-0 bg-primary rounded-t-sm opacity-10"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Status</span>
                                    <span class="flex items-center gap-1.5 text-xs font-bold text-error">
                                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">medical_services</span>
                                        Hamstring (2w)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-auto self-stretch flex flex-col justify-between">
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-primary-fixed-dim transition-colors group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors" data-icon="analytics">analytics</span>
                            </button>
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-secondary-fixed transition-colors mt-auto group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-secondary transition-colors" data-icon="edit">edit</span>
                            </button>
                        </div>
                    </div>
                    <!-- Player Card 3 -->
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col md:flex-row gap-8 items-start hover:shadow-xl transition-shadow duration-500">
                        <div class="relative">
                            <img alt="Player" class="w-32 h-40 object-cover rounded-2xl shadow-lg shadow-primary/10" data-alt="Young footballer with intense gaze leaning against a chain-link fence at dusk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALS3XWJIxkz7x1S8CjwntDPSGlkCNPCjck694mnERT7RahUcunoRgTqOhIq9ehiXc9Ib5HqJ-7jjy2zDeaJlhCoTPbOBMDX0FQXqBWnEpK7tZRRrVJqmMqgf9bn2opnBsJJPP7wz2iPhkuyYe3WBiMv_ADrJskt2-plFDyJnjW6JmWYILrRVi-_V7JhqRl-tktbC5QEkuj6O67oOMm3CLOqrPRh4A4HrE_4ad8LwxkWXS1siPaclDpIAoexHf09fqqajdJ-ps1fBc" />
                            <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-white rounded-full flex items-center justify-center border-4 border-surface shadow-sm">
                                <span class="text-sm font-black text-primary">06</span>
                            </div>
                        </div>
                        <div class="flex-1 space-y-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-2xl font-headline font-extrabold text-on-surface">Leo Thorne</h3>
                                    <div class="flex items-center gap-3 mt-1">
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Midfielder</span>
                                        <span class="w-1 h-1 rounded-full bg-outline-variant"></span>
                                        <span class="text-xs font-bold uppercase tracking-widest text-on-surface-variant">Year 12</span>
                                        <span class="px-2 py-0.5 rounded-md bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-black uppercase">Captained</span>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <div class="text-center px-4 py-2 bg-surface rounded-xl">
                                        <span class="block text-xs font-bold text-on-surface-variant uppercase">GSA</span>
                                        <span class="text-lg font-headline font-black text-tertiary">3.2</span>
                                    </div>
                                    <div class="text-center px-4 py-2 bg-primary/5 rounded-xl">
                                        <span class="block text-xs font-bold text-primary uppercase">Rating</span>
                                        <span class="text-lg font-headline font-black text-primary">9.1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Distance (avg)</span>
                                    <span class="block text-xl font-headline font-bold">11.4km</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Pass Accuracy</span>
                                    <span class="block text-xl font-headline font-bold">92%</span>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Form</span>
                                    <div class="flex gap-1 h-6 items-end">
                                        <span class="w-2 h-4 bg-primary rounded-t-sm opacity-50"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                        <span class="w-2 h-6 bg-primary rounded-t-sm"></span>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-on-surface-variant uppercase">Status</span>
                                    <span class="flex items-center gap-1.5 text-xs font-bold text-primary">
                                        <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                        Available
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-auto self-stretch flex flex-col justify-between">
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-primary-fixed-dim transition-colors group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors" data-icon="analytics">analytics</span>
                            </button>
                            <button class="p-3 rounded-xl bg-surface-container hover:bg-secondary-fixed transition-colors mt-auto group">
                                <span class="material-symbols-outlined text-on-surface group-hover:text-secondary transition-colors" data-icon="edit">edit</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pitch View Quick Action FAB (Suppressed on list but kept as task-specific widget if needed) -->
        <button class="fixed bottom-8 right-8 w-16 h-16 rounded-2xl bg-primary text-white shadow-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-all z-50">
            <span class="material-symbols-outlined text-3xl" data-icon="sports">sports</span>
        </button>
    </main>
</body>

</html>