<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Player Dashboard | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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

        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar Shell -->
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col h-screen p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <h1
                class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic font-headline">
                The Scholastic Pitch</h1>
            <p class="text-[10px] tracking-[0.2em] text-on-surface-variant font-bold uppercase mt-1">Elite Academy
                League</p>
        </div>
        <nav class="flex-grow space-y-2">
            <!-- Active Tab: Dashboard -->
            <a class="flex items-center gap-3 px-4 py-3 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 font-['Manrope'] tracking-wide text-sm bg-emerald-50/50 transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-outline-variant/10 space-y-2">
            <button
                class="w-full py-3 px-4 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg shadow-primary/20 hover:scale-[0.98] transition-transform">
                Create Match
            </button>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 transition-all text-sm font-['Manrope']"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span>Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 transition-all text-sm font-['Manrope']"
                href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span>Support</span>
            </a>
        </div>
    </aside>
    <!-- Content Area Wrapper -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar Shell -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 font-['Manrope'] font-medium text-sm">
            <div class="flex items-center gap-8">
                <div class="relative group">
                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                        <span class="material-symbols-outlined text-lg" data-icon="search">search</span>
                    </span>
                    <input
                        class="pl-10 pr-4 py-1.5 bg-surface-container-highest/50 border-none rounded-full w-64 focus:ring-2 focus:ring-primary/20 text-xs"
                        placeholder="Search league, players, or stats..." type="text" />
                </div>
                <nav class="hidden md:flex gap-6">
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="#">Standings</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="#">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                        href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="relative p-2 text-slate-600 hover:bg-surface-container rounded-full transition-colors">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/30">
                    <div class="text-right">
                        <p class="text-xs font-bold text-on-surface">Marcus Sterling</p>
                        <p class="text-[10px] text-on-surface-variant">U-19 Forward</p>
                    </div>
                    <img alt="User Profile Avatar" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/10"
                        data-alt="Close-up portrait of a determined young male athlete with short dark hair, wearing a dark green sports jersey against a blurred stadium background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCp0IAXQGJncS6VcHuBPWjIAdwZbMLEGRHeQ9DhuD-T1MHLoKW9CY4tLu7v5tdJ9dd2y6jFj1ekpAKeat8BUv0gD5QkfPnuchPZke2bp7onQFNJs6U6cCzY5AztZ1YiotiWo_Uv-gfS1B5jlZGR8ZDE0tF2akXOfAiX4q123y7359LxmaanQaulVce6u66Kt-IsikWeZ3FwBCdRBGLUMmKObYc3XMyu9jJ2MqnBrcOpnYSgitZYz73SzwsTq3ahVSmEn4m3B8WsH8" />
                </div>
            </div>
        </header>
        <!-- Main Dashboard Canvas -->
        <div class="p-8 space-y-8">
            <!-- Hero Section / Player Identity -->
            <section class="flex flex-col md:flex-row gap-8 items-end">
                <div class="flex-grow">
                    <span class="text-[10px] font-bold tracking-[0.3em] text-primary uppercase mb-2 block">Performance
                        Overview</span>
                    <h2 class="text-4xl font-extrabold font-headline tracking-tight text-on-surface">Welcome back,
                        Marcus.</h2>
                    <p class="text-on-surface-variant mt-1 max-w-md">Your match readiness is at <span
                            class="text-primary font-bold">94%</span>. The upcoming derby requires peak tactical focus.
                    </p>
                </div>
                <!-- Eligibility Badge -->
                <div
                    class="bg-primary-container text-on-primary-container px-6 py-4 rounded-2xl flex items-center gap-4 shadow-lg shadow-primary/10">
                    <div class="bg-white/20 p-2 rounded-xl">
                        <span class="material-symbols-outlined text-3xl" data-icon="verified"
                            style="font-variation-settings: 'FILL' 1;">verified</span>
                    </div>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-widest opacity-80">League Status</p>
                        <p class="text-lg font-headline font-bold leading-tight">Eligible for Selection</p>
                    </div>
                </div>
            </section>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- My Next Match Card -->
                <div
                    class="md:col-span-8 bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -mr-20 -mt-20 group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="flex justify-between items-start mb-10">
                            <div>
                                <h3 class="text-2xl font-headline font-extrabold">My Next Match</h3>
                                <p class="text-on-surface-variant text-sm mt-1">St. Jude's Academy vs. Elite Prep North
                                </p>
                            </div>
                            <div class="text-right">
                                <p class="text-primary font-bold font-headline text-lg italic">The Derby</p>
                                <p class="text-xs text-on-surface-variant">Saturday, 14:00 GMT</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <img alt="St. Jude's Logo" class="w-20 h-20 rounded-full bg-surface p-2 shadow-inner"
                                    data-alt="Minimalist crest logo of a school featuring a stylized book and a soccer ball in emerald green and white"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvarC_ocg__rZf2rqqzZrlDz_2I2pbToN2tEUCsg5yJk90BjRPkrBFc7Dz_l16oiqn4A8hhLEgHrT6Zuv_H3E_g5dgWC3Nsb_NhCaTFapVYoAA6R2kCkY1PCpl4Zu3sZ_qL6NHgzmScUe3cShFK0o3isxKOuooxg4aHxdKWbPU3lmNph-vwfPmMCEcy8zoaANJYJDypp4uRfF0LLJSetO7uwYqKXEDNQgfzvaHvr_Xkl0GpIiKy6yvKNlEjk7cXw8h03KMmUuLLs0" />
                                <span class="font-headline font-bold text-sm">St. Jude's</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-3xl font-headline font-black text-outline-variant italic">VS</span>
                                <div
                                    class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                    Away Match
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div
                                    class="w-20 h-20 rounded-full bg-surface-container-low flex items-center justify-center p-2 shadow-inner">
                                    <span class="material-symbols-outlined text-4xl text-slate-400"
                                        data-icon="shield">shield</span>
                                </div>
                                <span class="font-headline font-bold text-sm text-on-surface-variant">Elite Prep</span>
                            </div>
                        </div>
                        <div class="mt-10 grid grid-cols-3 gap-4 border-t border-outline-variant/10 pt-8">
                            <div class="text-center">
                                <p class="text-2xl font-headline font-bold">42</p>
                                <p class="text-[10px] uppercase font-bold text-on-surface-variant tracking-widest">Hours
                                    To Kickoff</p>
                            </div>
                            <div class="text-center border-x border-outline-variant/10">
                                <p class="text-2xl font-headline font-bold">98%</p>
                                <p class="text-[10px] uppercase font-bold text-on-surface-variant tracking-widest">
                                    Fitness Index</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-headline font-bold">14</p>
                                <p class="text-[10px] uppercase font-bold text-on-surface-variant tracking-widest">Team
                                    Ranking</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Academic GPA Card -->
                <div
                    class="md:col-span-4 bg-gradient-to-br from-secondary-container/20 to-secondary-fixed/30 rounded-[2rem] p-8 flex flex-col justify-between border border-secondary-fixed/50">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="material-symbols-outlined text-secondary text-4xl" data-icon="school"
                                style="font-variation-settings: 'FILL' 1;">school</span>
                            <div
                                class="bg-white/80 px-3 py-1 rounded-full text-[10px] font-bold text-secondary uppercase">
                                Dean's List</div>
                        </div>
                        <h3 class="text-xl font-headline font-bold text-on-secondary-container">Academic GPA</h3>
                        <p class="text-on-secondary-container/70 text-sm mt-1">Current Semester Strength</p>
                    </div>
                    <div class="py-8">
                        <div class="text-6xl font-headline font-black text-secondary tracking-tighter">3.88</div>
                        <div class="w-full bg-secondary-fixed h-2 rounded-full mt-4 overflow-hidden">
                            <div class="bg-secondary h-full rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    <p class="text-xs font-medium text-on-secondary-container/80 leading-relaxed italic">
                        "Success on the pitch is built in the classroom."
                    </p>
                </div>
                <!-- Season Goals & Assists -->
                <div class="md:col-span-5 bg-surface-container-low rounded-[2rem] p-8 flex flex-col gap-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-headline font-bold">Season Impact</h3>
                        <span class="material-symbols-outlined text-primary" data-icon="insights">insights</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border-b-4 border-primary">
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-1">
                                Goals Scored</p>
                            <p class="text-4xl font-headline font-black text-on-surface">12</p>
                            <p class="text-[10px] text-primary font-bold mt-2">+2 from last match</p>
                        </div>
                        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border-b-4 border-secondary">
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-1">
                                Assists</p>
                            <p class="text-4xl font-headline font-black text-on-surface">08</p>
                            <p class="text-[10px] text-secondary font-bold mt-2">League Top 5</p>
                        </div>
                    </div>
                    <div class="mt-2 p-4 bg-white/40 rounded-2xl">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-bold text-on-surface-variant">Shot Accuracy</span>
                            <span class="text-xs font-bold text-primary">74%</span>
                        </div>
                        <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                            <div class="bg-primary h-full rounded-full" style="width: 74%"></div>
                        </div>
                    </div>
                </div>
                <!-- Recent Performance Rating Chart -->
                <div class="md:col-span-7 bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-xl font-headline font-bold">Match Ratings</h3>
                            <p class="text-on-surface-variant text-xs">Performance trend over last 6 fixtures</p>
                        </div>
                        <div class="flex gap-2">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-primary"></span>
                                <span class="text-[10px] font-bold text-on-surface-variant uppercase">Player</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-surface-variant"></span>
                                <span class="text-[10px] font-bold text-on-surface-variant uppercase">League Avg</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow flex items-end justify-between gap-4 pb-4">
                        <!-- Simulated Sparkline / Bar Chart -->
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div
                                    class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[75%] transition-all group-hover:bg-primary-container">
                                </div>
                                <div
                                    class="absolute -top-6 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity bg-on-surface text-white text-[10px] py-0.5 px-2 rounded">
                                    7.5</div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M1</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[88%]"></div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M2</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[62%]"></div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M3</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[94%]"></div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M4</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[80%]"></div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M5</span>
                        </div>
                        <div class="flex-1 flex flex-col items-center gap-3">
                            <div class="w-full bg-surface-container-low rounded-t-lg relative group h-32">
                                <div class="absolute bottom-0 w-full bg-primary-container rounded-t-lg h-[98%]"></div>
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant">M6</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Highlights / Recent Media -->
            <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div
                    class="md:col-span-3 bg-surface-container rounded-[2rem] overflow-hidden flex flex-col md:flex-row items-center">
                    <div class="md:w-1/3 h-48 md:h-full relative overflow-hidden">
                        <img alt="Match Highlight" class="w-full h-full object-cover"
                            data-alt="Dynamic shot of a young soccer player in a green jersey kicking a ball mid-air during an intense evening match under bright stadium lights"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMOtTmGo8AfnFu9FiocqLDT9fva-u3Y4MIDm2Aj-rEoutaUiHnno6XqQXvQNeyjmubMmz1SdbpVMtq7-Wty0xTxG0oZDK1ju3KdRvncnei0HrFZ66sZcjUTVzRt3WruPMbANF0gbPEJsADa4AFzowqcYPHAVLkeBS6f9Nxfsul5SrTXd1YcgjA5c-wsryDv45jLMZOX6U3gdfz1WRz-vbcYDhP3BmG3oVSdORdXGhxNsOfz5u8_qILYIRVps3QHkg7cA4De6ZshSI" />
                        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <div
                            class="bg-primary/10 text-primary-container px-3 py-1 rounded-full text-[10px] font-bold inline-block mb-4">
                            LATEST HIGHLIGHT</div>
                        <h4 class="text-xl font-headline font-bold text-on-surface">Curled Strike against West Valley
                        </h4>
                        <p class="text-sm text-on-surface-variant mt-2 leading-relaxed">Video analysis from the tactical
                            cam shows your positioning during the transition was perfect. Review the play with Coach
                            Aris this afternoon.</p>
                        <button
                            class="mt-6 text-primary font-bold text-sm flex items-center gap-2 hover:translate-x-1 transition-transform">
                            Open Video Analysis <span class="material-symbols-outlined"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div
                    class="bg-tertiary-container text-on-tertiary-container rounded-[2rem] p-8 flex flex-col justify-center items-center text-center gap-4">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-3xl" data-icon="emoji_events"
                            style="font-variation-settings: 'FILL' 1;">emoji_events</span>
                    </div>
                    <div>
                        <p class="font-headline font-bold text-lg leading-tight">National Scout Watchlist</p>
                        <p class="text-[10px] opacity-80 mt-2 uppercase font-bold tracking-widest">Added: 2 Days Ago</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Contextual Floating Action Button (FAB) -->
    <button
        class="fixed bottom-8 right-8 w-16 h-16 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-all z-50">
        <span class="material-symbols-outlined text-3xl" data-icon="add_box">add_box</span>
    </button>
</body>

</html>