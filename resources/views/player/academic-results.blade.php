<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Academic Results | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
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
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-white"
                        style="font-variation-settings: 'FILL' 1;">school</span>
                </div>
                <div>
                    <h1
                        class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic leading-none">
                        The Scholastic Pitch</h1>
                    <p class="text-[10px] font-headline tracking-widest text-on-surface-variant uppercase mt-1">Elite
                        Academy League</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 bg-emerald-50/50 dark:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
                Academic Hub
            </a>
        </nav>
        <button
            class="mt-8 mb-8 w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg shadow-primary/20 flex items-center justify-center gap-2 scale-95 hover:scale-100 transition-transform duration-150">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Match
        </button>
        <div class="mt-auto pt-6 border-t border-slate-200/50 dark:border-slate-800/50 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 transition-all duration-300 font-headline text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 transition-all duration-300 font-headline text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">help</span>
                Support
            </a>
        </div>
    </aside>
    <!-- Main Content Wrapper -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 tonal-variation-bg-surface-low">
            <div class="flex items-center flex-1 max-w-xl">
                <div class="relative w-full">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
                    <input
                        class="w-full bg-surface-container-highest/50 border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/20 transition-all"
                        placeholder="Search grades, courses, or tutors..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-8">
                <nav class="hidden lg:flex items-center gap-6">
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors"
                        href="#">Standings</a>
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors"
                        href="#">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors"
                        href="#">Awards</a>
                </nav>
                <div class="h-6 w-px bg-slate-200 dark:bg-slate-700"></div>
                <div class="flex items-center gap-4">
                    <button
                        class="relative text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-2 group cursor-pointer">
                        <div class="text-right">
                            <p class="text-xs font-bold text-on-surface leading-none">Marcus Rashford</p>
                            <p class="text-[10px] text-on-surface-variant">Year 12 • Academy ID: 2941</p>
                        </div>
                        <img alt="User Profile Avatar"
                            class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm group-hover:border-primary transition-colors"
                            data-alt="professional portrait of a young student athlete with a confident smile wearing a sleek academy polo shirt"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpG_BlulaH_f7D7jk0bXrzG3w1OCkV1Yp6AleLPRc5kn2BG0qlJaHn5iKN-1bapH_1clhYZrt5wLClcHefIE3aPRyMribbyqByX8vx-DLMqTOaeWOiMrn5ORcxDq295cTNXz-bZsikewHDO6LoS0B3swFAfEC9Wf5O6eI_zMuyzdOy_iNdVZOJTr16XzFCTwUuQKs3ECXBlG6TlQ_nNmgI-sJw0VQslqsJ_uiBL3FxReZZ0tEnoV_os1eAZc53ZCrP3aWwri1Mvfo" />
                    </div>
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="p-8 space-y-8">
            <!-- Page Header / Hero Section -->
            <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div class="space-y-2">
                    <span
                        class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[10px] font-bold tracking-widest uppercase">Academic
                        Performance</span>
                    <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Term 3 Results</h2>
                    <p class="text-on-surface-variant max-w-lg">Track your academic progress alongside your athletic
                        development. Maintaining eligibility is key to your position on the squad.</p>
                </div>
                <!-- Eligibility Status Badge -->
                <div
                    class="bg-surface-container-lowest p-4 rounded-2xl shadow-xl shadow-emerald-900/5 flex items-center gap-6 border-l-4 border-emerald-500">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">Squad
                            Eligibility</span>
                        <span class="text-2xl font-headline font-extrabold text-primary">Eligible</span>
                    </div>
                    <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-3xl"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- GPA Progress Chart (Placeholder Visual) -->
                <div
                    class="lg:col-span-8 bg-surface-container-lowest rounded-[1.5rem] p-8 shadow-xl shadow-emerald-900/5 relative overflow-hidden">
                    <div class="flex justify-between items-start mb-12">
                        <div>
                            <h3 class="text-xl font-headline font-bold text-on-surface">GPA Momentum</h3>
                            <p class="text-sm text-on-surface-variant">Last 4 Terms Progression</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-3xl font-headline font-black text-on-surface">3.8</span>
                            <div class="flex flex-col text-[10px] font-bold text-primary">
                                <span class="material-symbols-outlined text-sm">trending_up</span>
                                +0.2
                            </div>
                        </div>
                    </div>
                    <!-- Simplified Visual Chart Representation -->
                    <div class="h-64 flex items-end justify-between gap-4 px-4">
                        <div class="w-full bg-surface-container flex flex-col items-center gap-4 rounded-t-xl group">
                            <div
                                class="w-full bg-primary-fixed-dim/40 h-[65%] rounded-t-xl group-hover:bg-primary-fixed transition-colors">
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant mb-2">Term 1</span>
                        </div>
                        <div class="w-full bg-surface-container flex flex-col items-center gap-4 rounded-t-xl group">
                            <div
                                class="w-full bg-primary-fixed-dim/40 h-[72%] rounded-t-xl group-hover:bg-primary-fixed transition-colors">
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant mb-2">Term 2</span>
                        </div>
                        <div class="w-full bg-surface-container flex flex-col items-center gap-4 rounded-t-xl group">
                            <div
                                class="w-full bg-primary-fixed-dim/40 h-[85%] rounded-t-xl group-hover:bg-primary-fixed transition-colors">
                            </div>
                            <span class="text-[10px] font-bold text-on-surface-variant mb-2">Term 3</span>
                        </div>
                        <div class="w-full bg-surface-container flex flex-col items-center gap-4 rounded-t-xl group">
                            <div class="w-full bg-primary h-[92%] rounded-t-xl shadow-lg shadow-primary/20"></div>
                            <span class="text-[10px] font-bold text-primary mb-2">Current</span>
                        </div>
                    </div>
                    <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
                </div>
                <!-- Academic Insights Side Card -->
                <div class="lg:col-span-4 flex flex-col gap-8">
                    <!-- Top Performer Badge -->
                    <div
                        class="bg-gradient-to-br from-emerald-900 to-primary-container p-6 rounded-[1.5rem] text-on-primary shadow-xl shadow-emerald-900/10">
                        <span class="material-symbols-outlined mb-4"
                            style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                        <h4 class="font-headline font-bold text-lg mb-1">Dean's List Contender</h4>
                        <p class="text-xs text-on-primary-container opacity-90 leading-relaxed">Your current GPA is in
                            the top 5% of the Athletic Department. Maintain this for the End-of-Year Scholarship award.
                        </p>
                    </div>
                    <!-- Academic Support CTA -->
                    <div class="bg-secondary-fixed p-6 rounded-[1.5rem] flex flex-col h-full">
                        <h4 class="font-headline font-bold text-on-secondary-fixed text-lg mb-4">Need a Boost?</h4>
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary">menu_book</span>
                                <span class="text-sm font-medium text-on-secondary-fixed-variant">Advanced Calculus
                                    Tutor</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary">edit_note</span>
                                <span class="text-sm font-medium text-on-secondary-fixed-variant">Exam Prep
                                    Workshops</span>
                            </div>
                        </div>
                        <button
                            class="mt-auto w-full py-3 bg-white text-secondary font-bold text-sm rounded-xl hover:bg-secondary-container transition-colors">
                            Explore Academic Hub
                        </button>
                    </div>
                </div>
                <!-- Grade History Table -->
                <div
                    class="lg:col-span-12 bg-surface-container-lowest rounded-[1.5rem] overflow-hidden shadow-xl shadow-emerald-900/5">
                    <div class="p-8 border-b border-surface-container">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-headline font-bold text-on-surface">Detailed Term Results</h3>
                            <button class="text-primary font-bold text-sm flex items-center gap-1 hover:underline">
                                <span class="material-symbols-outlined text-lg">download</span>
                                Download Transcript
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low">
                                    <th
                                        class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">
                                        Course Code</th>
                                    <th
                                        class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">
                                        Subject Name</th>
                                    <th
                                        class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">
                                        Instructor</th>
                                    <th
                                        class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">
                                        Grade</th>
                                    <th
                                        class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container-low">
                                <tr class="hover:bg-surface transition-colors group">
                                    <td class="px-8 py-6 font-mono text-xs text-on-surface-variant">MATH-402</td>
                                    <td class="px-8 py-6 font-bold text-on-surface">Advanced Mathematics</td>
                                    <td class="px-8 py-6 text-sm text-on-surface-variant">Dr. Sarah Jenkins</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-headline font-black text-on-surface">A-</span>
                                            <span
                                                class="text-[10px] font-bold text-on-surface-variant opacity-60">92%</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div
                                            class="mx-auto w-fit px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                            Completed</div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors group">
                                    <td class="px-8 py-6 font-mono text-xs text-on-surface-variant">PHYS-301</td>
                                    <td class="px-8 py-6 font-bold text-on-surface">Physics for Sports Science</td>
                                    <td class="px-8 py-6 text-sm text-on-surface-variant">Prof. Michael Chen</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-headline font-black text-on-surface">A+</span>
                                            <span
                                                class="text-[10px] font-bold text-on-surface-variant opacity-60">98%</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div
                                            class="mx-auto w-fit px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                            Completed</div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors group">
                                    <td class="px-8 py-6 font-mono text-xs text-on-surface-variant">ECON-220</td>
                                    <td class="px-8 py-6 font-bold text-on-surface">Global Economics</td>
                                    <td class="px-8 py-6 text-sm text-on-surface-variant">Dr. Elena Rodriguez</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-headline font-black text-on-surface">B+</span>
                                            <span
                                                class="text-[10px] font-bold text-on-surface-variant opacity-60">87%</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div
                                            class="mx-auto w-fit px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                            Finalizing</div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors group">
                                    <td class="px-8 py-6 font-mono text-xs text-on-surface-variant">HIST-110</td>
                                    <td class="px-8 py-6 font-bold text-on-surface">History of European Sport</td>
                                    <td class="px-8 py-6 text-sm text-on-surface-variant">Prof. Arthur Wells</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-headline font-black text-on-surface">A</span>
                                            <span
                                                class="text-[10px] font-bold text-on-surface-variant opacity-60">95%</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div
                                            class="mx-auto w-fit px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                            Completed</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pitch View Widget (Specialized Academy Component) -->
                <div
                    class="lg:col-span-12 relative h-48 bg-gradient-to-r from-primary-container to-primary rounded-[1.5rem] overflow-hidden flex items-center p-12">
                    <div class="relative z-10 space-y-2">
                        <h4 class="text-2xl font-headline font-black text-white italic">TRAIN SMART. PLAY HARD.</h4>
                        <p class="text-on-primary-container font-medium max-w-md">Academy players who maintain a GPA
                            over 3.5 are eligible for an additional 2 hours of private technique training per week.</p>
                        <div class="pt-4">
                            <button
                                class="px-6 py-2 bg-white text-primary rounded-full text-sm font-bold shadow-lg">Claim
                                Bonus Training</button>
                        </div>
                    </div>
                    <!-- Decorative Tactical Pitch Graphics -->
                    <div class="absolute right-0 top-0 h-full w-1/2 opacity-20 pointer-events-none">
                        <div class="absolute inset-0 border-2 border-white/40 m-8 rounded-lg"></div>
                        <div class="absolute top-1/2 left-0 w-full h-px bg-white/40"></div>
                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-24 border-2 border-white/40 rounded-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>