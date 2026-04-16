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
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 flex flex-col p-6 overflow-y-auto bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 flex items-center gap-3">
            <div
                class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary-container flex items-center justify-center text-white shadow-lg">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">sports_soccer</span>
            </div>
            <div>
                <h1
                    class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic leading-none">
                    The Scholastic Pitch</h1>
                <p class="text-[10px] text-slate-500 uppercase tracking-[0.2em] mt-1">Elite Academy League</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group"
                href="#">
                <span
                    class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group"
                href="#">
                <span
                    class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 dark:bg-emerald-900/20 transition-all duration-300 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out"
                    style="font-variation-settings: 'FILL' 1;">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group"
                href="#">
                <span class="material-symbols-outlined group-active:scale-95 duration-150 ease-in-out">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6">
            <button
                class="w-full bg-gradient-to-r from-primary to-primary-container text-white py-3 rounded-xl font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm">add</span>
                <span>Create Match</span>
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-xl">settings</span>
                    <span>Settings</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-xl">help</span>
                    <span>Support</span>
                </a>
            </div>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 left-0 flex justify-between items-center h-16 px-8 ml-64 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl z-40 font-['Manrope'] font-medium text-sm border-none">
        <div class="flex items-center gap-8 flex-1">
            <div class="relative w-96 max-w-full">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input
                    class="w-full bg-surface-container-highest border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary/20 text-on-surface"
                    placeholder="Search players, teams, or results..." type="text" />
            </div>
            <nav class="hidden lg:flex items-center gap-6">
                <a class="text-emerald-700 dark:text-emerald-400 font-bold border-b-2 border-emerald-700 pb-1"
                    href="#">Standings</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                    href="#">Schedule</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors"
                    href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-surface-container rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
                <div class="text-right">
                    <p class="font-bold leading-none">Coach Marcus</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">St. Jude's Academy</p>
                </div>
                <img alt="User Profile Avatar" class="w-10 h-10 rounded-full object-cover border-2 border-primary-fixed"
                    data-alt="professional portrait of a middle-aged male sports coach with short hair and a confident smile in a sunlit athletic facility"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAW7qL4DWuYe4ae_vnxYMhxqsB3aXPa3j_q0NM0odkqNr6lyjEeegJ7vb7VYT1w6VQt8lEtYZ8iGHQit65jrUVOkWrMwWUXlYdEMdXGDa7SZdRQ4bUgAiBx9EkBpgjd1mxU5g0yDkjdYYE8bhOBljqUsRHsiWfEttPrnoXZj6gBBv0BFtfXH1fXN30FCR8lNud_9hSvaN2Iva-MQpkv9LOPVNDZ0H3x7IagH-gj9_M0X98sSvTD2svkHwXvzZ_ufSUW-r3WYWt-bg4" />
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
        <!-- Hero Header Context -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="md:col-span-2 relative overflow-hidden rounded-3xl bg-primary text-white p-8">
                <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                    <img alt="Football pitch texture" class="w-full h-full object-cover transform scale-125 rotate-12"
                        data-alt="dramatic wide angle shot of a pristine professional football pitch under stadium lights at night with lush green grass"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Z0bJe4xuVZre9haR5MGnYbp2sU4bK9mW4FHSnb_fUDwkaoipzxTHsj9wfDCHfq1aBnGdXMWXZQP0hRe6ukTyPnc3qHdarK6OYNN8YW8RBzulq-lAjuB0LB66Nas4mj8JPiD0IzNIHMGxNDciEISufVwri7GOEChTRXOlE0-ELrxWa57D-zvNw0U5N5fKPmTwO4e_z0yMxNUZj_gJG5etkgeR76CrUiESGeIEov3T3XI4WgJbDBO_9HQ2YqxNKQPzDANSM5N8reA" />
                </div>
                <div class="relative z-10 max-w-lg">
                    <span class="label-md uppercase tracking-[0.3em] font-bold text-primary-fixed-dim opacity-80">Season
                        2023/24 Progress</span>
                    <h2 class="text-4xl font-extrabold font-headline mt-2 mb-4 leading-tight">Elite Development League:
                        Mid-Season Review</h2>
                    <p class="text-primary-fixed leading-relaxed opacity-90 mb-6">St. Jude's Academy leads the offensive
                        charts. Tracking 128 active players across 14 divisions in the scholastic hierarchy.</p>
                    <div class="flex gap-4">
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">League MVP</p>
                            <p class="text-xl font-bold mt-1">Marcus Thorne</p>
                        </div>
                        <div class="bg-primary-container/40 backdrop-blur-md rounded-2xl p-4 flex-1">
                            <p class="text-xs text-primary-fixed-dim uppercase font-bold tracking-widest">Avg. GPA</p>
                            <p class="text-xl font-bold mt-1">3.62</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="font-headline text-lg font-bold">Academic Standings</h3>
                    <p class="text-sm text-on-surface-variant">Top Academic Performers (Week 12)</p>
                </div>
                <div class="space-y-4 my-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center text-xs font-bold">
                                1</div>
                            <span class="text-sm font-medium">L. Hamilton</span>
                        </div>
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary-container rounded-full text-[10px] font-bold">4.0
                            GPA</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full bg-surface-container text-on-surface-variant flex items-center justify-center text-xs font-bold">
                                2</div>
                            <span class="text-sm font-medium">D. Vlahović</span>
                        </div>
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary-container rounded-full text-[10px] font-bold">3.9
                            GPA</span>
                    </div>
                </div>
                <button
                    class="w-full text-secondary font-bold text-sm hover:underline text-left flex items-center gap-2">
                    View Academic Hub
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>
        <!-- Standings Section -->
        <div class="mb-8 flex items-end justify-between">
            <div>
                <h3 class="font-headline text-3xl font-extrabold tracking-tight">Player Power Rankings</h3>
                <p class="text-on-surface-variant mt-1">Combined Performance Matrix: On-Pitch × Academic Score</p>
            </div>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-lg">filter_alt</span>
                    Filter By Team
                </button>
                <button
                    class="px-4 py-2 rounded-xl bg-white border border-outline-variant/30 text-sm font-semibold flex items-center gap-2 hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-lg">download</span>
                    Export PDF
                </button>
            </div>
        </div>
        <!-- Standings Table Container -->
        <div class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr
                        class="border-b border-surface-container uppercase text-[10px] tracking-[0.2em] font-bold text-on-surface-variant">
                        <th class="py-6 px-8 w-16">Rank</th>
                        <th class="py-6 px-4">Player Details</th>
                        <th class="py-6 px-4">Academy Team</th>
                        <th class="py-6 px-4 text-center">Goals</th>
                        <th class="py-6 px-4 text-center">Assists</th>
                        <th class="py-6 px-4 text-center">Form</th>
                        <th class="py-6 px-8 text-right">League Pts</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-low">
                    <!-- Row 1 (Top Player) -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td
                            class="py-5 px-8 font-headline font-extrabold text-2xl text-on-surface/20 group-hover:text-primary transition-colors">
                            01</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img alt="Player Avatar"
                                    class="w-12 h-12 rounded-2xl object-cover ring-4 ring-primary-fixed/30"
                                    data-alt="portrait of a young athletic male football player with a focused expression wearing a dark training jersey"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfFdWaGDPvmsr5trXUvfGdAFRTSq14CETH0VmCxGz2xEbJTlO89Fk50Das8PC8yBRw7cP_2NWT_MZZKL9vTpAWd7FBeOYHqE7GW4NYeZ0u16Eu2TcONaIxV9uWTM4bkmhQDrLsa2F5XTHMpqzvVIew3WiHxNtS5-Tf_B1DU8GWnMrC8YPKJElbWBMHtRY9opY0vpUvivq-cGtJAI6s3l2ToI11-3GO7XVqP-vs-TdjEQVDdSzmoxa3jacyyQzy7kVewdLk4j41TtU" />
                                <div>
                                    <p class="font-bold text-on-surface">Ethan Caldwell</p>
                                    <p class="text-xs text-on-surface-variant">Forward · U18 Premier</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            <span class="text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                Manchester Academy
                            </span>
                        </td>
                        <td class="py-5 px-4 text-center font-bold">14</td>
                        <td class="py-5 px-4 text-center font-bold">8</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <span class="w-2 h-4 rounded-full bg-primary"></span>
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-4 rounded-full bg-primary"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-7 rounded-full bg-primary"></span>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">845</td>
                    </tr>
                    <!-- Row 2 (Highlighted Player - User's Team) -->
                    <tr class="bg-primary/5 hover:bg-primary/10 transition-colors group relative">
                        <td
                            class="py-5 px-8 font-headline font-extrabold text-2xl text-primary/40 group-hover:text-primary transition-colors">
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                            02
                        </td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img alt="Player Avatar"
                                    class="w-12 h-12 rounded-2xl object-cover ring-4 ring-primary/20"
                                    data-alt="close up of a young male athlete with curly hair smiling slightly, wearing a team uniform"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBC3mQ4mea-fT9ai_b-RJaIXdlTjr92QwjOQDRNk-Ua-gZaLKTu1dAJ-i6Ahz6dWedD9GuWVdDMLByBpTVb6UYC5KqoKOKusmfau3l6qJyrQWBuPuexHHbAxoERavGzkB4SsISWax_8htEDw05uGPZJAD_eGD5cQOuBenIH3jDroTacPa7_UJJyZYH_mGLnm08EGl1aC2pp1uHiywZeXRmnNJ_SN5mUKPJhvbE0vQJNoVFWChi0Oo4BaH2ynxeqsllUesAM2BQIxYY" />
                                <div>
                                    <p class="font-bold text-on-surface">Julian Rossi</p>
                                    <p class="text-xs text-on-surface-variant">Midfielder · U18 Elite</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-primary flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                                    St. Jude's Academy
                                </span>
                                <span class="text-[10px] uppercase font-bold text-primary/60 mt-1">Your Team</span>
                            </div>
                        </td>
                        <td class="py-5 px-4 text-center font-bold">11</td>
                        <td class="py-5 px-4 text-center font-bold">12</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-7 rounded-full bg-primary"></span>
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">812</td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td
                            class="py-5 px-8 font-headline font-extrabold text-2xl text-on-surface/20 group-hover:text-primary transition-colors">
                            03</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img alt="Player Avatar"
                                    class="w-12 h-12 rounded-2xl object-cover ring-4 ring-transparent group-hover:ring-outline-variant/30 transition-all"
                                    data-alt="headshot of a determined looking teenage boy with short hair wearing a sport polo shirt"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5_YdrVf1MABCSirau6xwLTMgFUp9CxMZcHS_BTB2klaO-2ylMptRSmRVKGFZudvbwOWYIjtIMj0fK3YcVEMmLYxFlS7HMBoSAL9jvOLkFg_74DlTNdCwJf4ZNXdTv-J0m16I4N3whqyDLah_5YhTiionxPyuhIPqOoarwze3_KG_JDMiqC5rRCG8ltOm43QLUUyYrjVEapwumDcOW1cUu609fzI19ML1kNLOe11sY3FfsyN1NFAHlbhWmG0b75EFWwTPFlhBbST4" />
                                <div>
                                    <p class="font-bold text-on-surface">Nathaniel Wu</p>
                                    <p class="text-xs text-on-surface-variant">Defender · U18 Regional</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            <span class="text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-slate-400"></span>
                                Kingston United
                            </span>
                        </td>
                        <td class="py-5 px-4 text-center font-bold">2</td>
                        <td class="py-5 px-4 text-center font-bold">4</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <span class="w-2 h-3 rounded-full bg-secondary-container"></span>
                                <span class="w-2 h-4 rounded-full bg-secondary-container"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-4 rounded-full bg-secondary-container"></span>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">798</td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td
                            class="py-5 px-8 font-headline font-extrabold text-2xl text-on-surface/20 group-hover:text-primary transition-colors">
                            04</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img alt="Player Avatar"
                                    class="w-12 h-12 rounded-2xl object-cover ring-4 ring-transparent group-hover:ring-outline-variant/30 transition-all"
                                    data-alt="portrait of a confident young man in sports apparel against a blurred indoor court background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAo_ssp-oA83SdgQS8u8J_4Cl8NpZiWQ8TLHXqKIdKoyZ1NnVV1XMJ9HzSzZ-lYxL_9ZvDIel9-8xq7xv3jlQhY3EtjdTwA3gTUDtBBCQ11ZE9-6hGLlbPyYsT45knKaH-9M8oZBJ8oh3BaMNY40ul35OHlrSDnMmwRJI_avJdjbnDXkdFrum0v2Dr4YWWtunvsX_qG7xXKKmUelrafsAAIOI2vV9a5EN93epjuaZ-6w18g1eUqjgTXwOAwEdmvWJ3yr3E0IFbxnL0" />
                                <div>
                                    <p class="font-bold text-on-surface">Alex Martinez</p>
                                    <p class="text-xs text-on-surface-variant">Forward · U18 Premier</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            <span class="text-sm font-semibold text-on-surface-variant flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim"></span>
                                Oakwood Prep
                            </span>
                        </td>
                        <td class="py-5 px-4 text-center font-bold">9</td>
                        <td class="py-5 px-4 text-center font-bold">3</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <span class="w-2 h-7 rounded-full bg-primary"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-7 rounded-full bg-primary"></span>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">765</td>
                    </tr>
                    <!-- Row 5 (Another from User's Team) -->
                    <tr class="bg-primary/5 hover:bg-primary/10 transition-colors group relative">
                        <td
                            class="py-5 px-8 font-headline font-extrabold text-2xl text-primary/40 group-hover:text-primary transition-colors">
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                            05
                        </td>
                        <td class="py-5 px-4">
                            <div class="flex items-center gap-4">
                                <img alt="Player Avatar"
                                    class="w-12 h-12 rounded-2xl object-cover ring-4 ring-primary/20"
                                    data-alt="headshot of a focused young athlete with short dark hair, wearing a team training bib"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBQo1cT9Anz7GW6NM7F_jX47PzRw3nTN4VOLVDQTVZoNvYXHLQdtgUdBrk6FGxn3w1oFwopV5PQdNid0zSKXqrpHG6_A0sRssNgnL6H9M3EBoqKhOsr4qJ_txeIY4FV_iFgYK905ytfPXMIG0KUdpdqGyHwVLJ4yzFWZFA1lqiQJg8kqrYOj6NBI99mzzQyfDOswMQhiQpyUO09B4rD1lmXMBSL5zmPZh-1he1DL3BqQAsnPXLzktVYwq1gbpaL-gnXEzYtiZDTsk" />
                                <div>
                                    <p class="font-bold text-on-surface">Leo Kim</p>
                                    <p class="text-xs text-on-surface-variant">Midfielder · U18 Elite</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-5 px-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-primary flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                                    St. Jude's Academy
                                </span>
                                <span class="text-[10px] uppercase font-bold text-primary/60 mt-1">Your Team</span>
                            </div>
                        </td>
                        <td class="py-5 px-4 text-center font-bold">6</td>
                        <td class="py-5 px-4 text-center font-bold">15</td>
                        <td class="py-5 px-4">
                            <div class="flex items-center justify-center gap-1">
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-5 rounded-full bg-primary"></span>
                                <span class="w-2 h-4 rounded-full bg-secondary-container"></span>
                                <span class="w-2 h-6 rounded-full bg-primary"></span>
                                <span class="w-2 h-7 rounded-full bg-primary"></span>
                            </div>
                        </td>
                        <td class="py-5 px-8 text-right font-headline font-bold text-lg text-primary">742</td>
                    </tr>
                </tbody>
            </table>
            <!-- Table Footer/Pagination -->
            <div class="p-8 flex items-center justify-between bg-surface-container-low/50">
                <p class="text-sm text-on-surface-variant">Showing 5 of 128 Elite Division players</p>
                <div class="flex gap-2">
                    <button class="p-2 rounded-lg bg-white border border-outline-variant/30 disabled:opacity-50"
                        disabled="">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button class="px-3 py-1 rounded-lg bg-primary text-white font-bold text-sm">1</button>
                    <button
                        class="px-3 py-1 rounded-lg bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-surface-container">2</button>
                    <button
                        class="px-3 py-1 rounded-lg bg-white border border-outline-variant/30 text-sm font-semibold hover:bg-surface-container">3</button>
                    <button class="p-2 rounded-lg bg-white border border-outline-variant/30 hover:bg-surface-container">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>