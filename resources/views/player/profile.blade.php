<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Player Profile | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap"
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
                        "2xl": "1.5rem",
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
            vertical-align: middle;
        }

        .pitch-gradient {
            background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%);
        }

        .glass-sidebar {
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-2xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <h1
                class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic font-headline">
                The Scholastic Pitch</h1>
            <p class="text-[10px] uppercase tracking-[0.2em] text-outline font-bold mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-emerald-700 font-bold border-r-4 border-emerald-700 bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm"
                href="#">
                <span class="material-symbols-outlined">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">school</span>
                Academic Hub
            </a>
        </nav>
        <button
            class="mt-8 mb-8 pitch-gradient text-on-primary py-3 px-4 rounded-xl font-headline font-bold text-sm shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Match
        </button>
        <div class="mt-auto space-y-2 border-t border-outline-variant/20 pt-6">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 hover:bg-emerald-50/50 transition-all duration-300 font-['Manrope'] tracking-wide text-sm font-semibold"
                href="#">
                <span class="material-symbols-outlined">help</span>
                Support
            </a>
        </div>
    </aside>
    <div class="ml-64 min-h-screen flex flex-col">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 transition-opacity">
            <div class="flex items-center gap-8">
                <div class="relative">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input
                        class="bg-surface-container-highest border-none rounded-full pl-10 pr-4 py-1.5 text-sm w-64 focus:ring-2 focus:ring-primary/20 transition-all"
                        placeholder="Search players, teams..." type="text" />
                </div>
                <nav class="flex items-center gap-6">
                    <a class="text-slate-600 hover:text-emerald-500 font-['Manrope'] font-medium text-sm transition-colors"
                        href="#">Standings</a>
                    <a class="text-slate-600 hover:text-emerald-500 font-['Manrope'] font-medium text-sm transition-colors"
                        href="#">Schedule</a>
                    <a class="text-slate-600 hover:text-emerald-500 font-['Manrope'] font-medium text-sm transition-colors"
                        href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/30">
                    <div class="text-right">
                        <p class="text-xs font-bold font-headline">Coach Harrison</p>
                        <p class="text-[10px] text-outline">Senior Scout</p>
                    </div>
                    <img alt="User Profile Avatar" class="w-8 h-8 rounded-full border border-outline-variant/30"
                        data-alt="professional headshot of a middle-aged man with short hair and a warm smile wearing a navy polo shirt"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYsIyYcRvmQ5V4O3TMkhaExu1J6-A34YQET2u0oFlz7NUWBEs8qfs7Po-jcTMRsvvudu9SakkdLrbpQu4Ll-uvSz7l48flRyRob-AOI3bNl5Ckocw6XWdfrQ7xuTgKZhvmHAmuYA2-znn4sxUajkg3BWTIZnkzDSNwj8m7eiPR0oPk09d9Xfc8_1TvuZ4ka0d4_xhpfJh4gLX0gG1g4Vquq1NOCRvpRIySRWQ9Cc_P3_J4BLOco5cRqYM85xzWGH3yclEW8PBT4v8" />
                </div>
            </div>
        </header>
        <!-- Main Content Area -->
        <main class="p-8 space-y-8 flex-1">
            <!-- Hero Profile Section -->
            <section class="relative grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 bg-surface-container-lowest rounded-2xl p-8 flex flex-col md:flex-row gap-8 relative overflow-hidden">
                    <!-- Background Accent -->
                    <div
                        class="absolute top-0 right-0 w-64 h-64 pitch-gradient opacity-5 rounded-bl-full -mr-20 -mt-20">
                    </div>
                    <div class="relative shrink-0">
                        <img alt="Marcus Henderson Profile"
                            class="w-48 h-48 md:w-56 md:h-56 rounded-2xl object-cover shadow-xl shadow-primary/10"
                            data-alt="young athletic male football player in a professional green sports jersey looking confidently into the camera"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD83Y38-mOJKiGo7tzUUUEr4gkFju8LlmMweiU-QU2BN9ouejg4NC1rImE7xh-e_SVYEXmRuWCeDzEoC9TR8BFzommzTQk2OQahy8oGR0TzEKBhndsQF1ofYWZQYUY8ZANcvilHqz4OrFFcyczg28vOV80HFYPPt_wJR4TlBdQLudTvcLjPPIb4ABA85aCu9CAgp0fEcGksh-J437v2d6KJs27ZWI1pmmJkoSjZjCuomBUrQcIFyLEKgxuRaIIgWuheQtr9lcDq-5U" />
                        <div
                            class="absolute -bottom-3 -right-3 w-14 h-14 bg-secondary flex items-center justify-center rounded-xl border-4 border-surface-container-lowest">
                            <span class="text-white font-headline font-extrabold text-2xl">10</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center space-y-4">
                        <div>
                            <span
                                class="text-[10px] uppercase tracking-widest font-bold text-secondary-container bg-secondary/10 px-3 py-1 rounded-full">Elite
                                Prospect • U-19</span>
                            <h2 class="text-4xl font-headline font-extrabold text-on-surface mt-2">Marcus Henderson</h2>
                            <p class="text-on-surface-variant font-medium flex items-center gap-2 mt-1">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                                St. Jude's Academy • Central Midfielder
                            </p>
                        </div>
                        <div class="flex gap-4 pt-4">
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Height</p>
                                <p class="text-sm font-bold">184 cm</p>
                            </div>
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Weight</p>
                                <p class="text-sm font-bold">76 kg</p>
                            </div>
                            <div class="bg-surface-container-low px-4 py-2 rounded-xl">
                                <p class="text-[10px] text-outline font-bold uppercase">Foot</p>
                                <p class="text-sm font-bold">Right</p>
                            </div>
                        </div>
                        <div class="flex gap-3 pt-2">
                            <button
                                class="pitch-gradient text-on-primary px-6 py-2.5 rounded-xl font-headline font-bold text-sm">Download
                                Scout Report</button>
                            <button
                                class="bg-surface-container-high text-on-surface-variant px-4 py-2.5 rounded-xl font-headline font-bold text-sm">Share</button>
                        </div>
                    </div>
                </div>
                <!-- Quick Stats Bento Card -->
                <div class="bg-surface-container-lowest rounded-2xl p-6 flex flex-col justify-between">
                    <h3 class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-6">
                        Season Snapshot</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-3xl font-headline font-extrabold text-primary">14</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Goals Scored</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1">
                                <div class="w-2 bg-primary/20 h-3 rounded-full"></div>
                                <div class="w-2 bg-primary/40 h-5 rounded-full"></div>
                                <div class="w-2 bg-primary/60 h-4 rounded-full"></div>
                                <div class="w-2 bg-primary/80 h-7 rounded-full"></div>
                                <div class="w-2 bg-primary h-8 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-3xl font-headline font-extrabold text-secondary">08</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Assists</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1">
                                <div class="w-2 bg-secondary/20 h-6 rounded-full"></div>
                                <div class="w-2 bg-secondary/40 h-4 rounded-full"></div>
                                <div class="w-2 bg-secondary h-7 rounded-full"></div>
                                <div class="w-2 bg-secondary/60 h-3 rounded-full"></div>
                                <div class="w-2 bg-secondary/80 h-5 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-3xl font-headline font-extrabold text-on-surface">89%</p>
                                <p class="text-[10px] text-outline uppercase font-bold">Pass Accuracy</p>
                            </div>
                            <div class="h-8 w-24 flex items-end gap-1 pb-1">
                                <div class="w-2 bg-outline-variant h-7 rounded-full"></div>
                                <div class="w-2 bg-outline-variant h-8 rounded-full"></div>
                                <div class="w-2 bg-outline-variant h-6 rounded-full"></div>
                                <div class="w-2 bg-outline-variant h-8 rounded-full"></div>
                                <div class="w-2 bg-outline-variant h-7 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-outline-variant/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center">
                                <span
                                    class="material-symbols-outlined text-on-tertiary-fixed-variant">workspace_premium</span>
                            </div>
                            <div>
                                <p class="text-xs font-bold">Academic Status: Honors</p>
                                <p class="text-[10px] text-outline">GPA: 3.8 / 4.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Detailed Performance & History -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Detailed Performance Stats Table -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-headline font-extrabold text-on-surface">Match Statistics</h3>
                        <div class="flex gap-2">
                            <span
                                class="text-xs font-bold text-on-surface-variant bg-surface-container-high px-3 py-1 rounded-full cursor-pointer">League</span>
                            <span
                                class="text-xs font-bold text-outline px-3 py-1 rounded-full cursor-pointer hover:bg-surface-container-low">Cup</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low border-none">
                                    <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline">
                                        Tournament</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">
                                        MP</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">
                                        G</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">
                                        A</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">
                                        YC</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-center">
                                        RC</th>
                                    <th
                                        class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-outline text-right">
                                        Rating</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container-low">
                                <tr class="hover:bg-surface/50 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-primary"></div>
                                            <span class="text-sm font-bold">Winter Academy Series</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">12</td>
                                    <td class="px-6 py-5 text-sm font-bold text-center">9</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">4</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">2</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">0</td>
                                    <td class="px-6 py-5 text-right">
                                        <span
                                            class="bg-primary/10 text-primary px-2.5 py-1 rounded-lg font-bold text-xs">8.4</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface/50 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-secondary"></div>
                                            <span class="text-sm font-bold">Scholastic Cup</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">4</td>
                                    <td class="px-6 py-5 text-sm font-bold text-center">5</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">4</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">1</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">0</td>
                                    <td class="px-6 py-5 text-right">
                                        <span
                                            class="bg-secondary/10 text-secondary px-2.5 py-1 rounded-lg font-bold text-xs">9.1</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface/50 transition-colors">
                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-3">
                                            <div class="w-2 h-2 rounded-full bg-outline"></div>
                                            <span class="text-sm font-bold">Regional Qualifiers</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">8</td>
                                    <td class="px-6 py-5 text-sm font-bold text-center">0</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">0</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">0</td>
                                    <td class="px-6 py-5 text-sm font-medium text-center">0</td>
                                    <td class="px-6 py-5 text-right">
                                        <span
                                            class="bg-outline-variant/20 text-on-surface-variant px-2.5 py-1 rounded-lg font-bold text-xs">7.2</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Biography Section -->
                    <div class="bg-surface-container-lowest rounded-2xl p-8 space-y-4">
                        <h3 class="text-lg font-headline font-extrabold text-on-surface">Athletic Resume &amp; Biography
                        </h3>
                        <p class="text-on-surface-variant leading-relaxed text-sm">
                            Marcus is a highly technical central midfielder known for his exceptional vision and range
                            of passing. A product of the St. Jude's Academy system, he has consistently performed above
                            his age group, demonstrating maturity and leadership on and off the field. His ability to
                            dictate play from deep and late runs into the box make him a constant threat.
                        </p>
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="p-4 bg-surface-container-low rounded-xl">
                                <h4 class="text-[10px] font-bold text-outline uppercase mb-2">Key Strengths</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-white px-2 py-1 rounded text-xs border border-outline-variant/20 font-medium">Tactical
                                        Intelligence</span>
                                    <span
                                        class="bg-white px-2 py-1 rounded text-xs border border-outline-variant/20 font-medium">Dead-ball
                                        Specialist</span>
                                    <span
                                        class="bg-white px-2 py-1 rounded text-xs border border-outline-variant/20 font-medium">Ball
                                        Retention</span>
                                </div>
                            </div>
                            <div class="p-4 bg-surface-container-low rounded-xl">
                                <h4 class="text-[10px] font-bold text-outline uppercase mb-2">Areas for Growth</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-white px-2 py-1 rounded text-xs border border-outline-variant/20 font-medium">Aerial
                                        Duels</span>
                                    <span
                                        class="bg-white px-2 py-1 rounded text-xs border border-outline-variant/20 font-medium">Defensive
                                        Transition Speed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team History & Secondary Stats -->
                <div class="space-y-8">
                    <!-- Team History -->
                    <div class="bg-surface-container-lowest rounded-2xl p-6">
                        <h3
                            class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-6">
                            Career Timeline</h3>
                        <div class="space-y-6">
                            <div class="flex gap-4 relative">
                                <div class="absolute left-4 top-8 bottom-[-24px] w-0.5 bg-outline-variant/30"></div>
                                <div
                                    class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0 z-10">
                                    <span class="material-symbols-outlined text-white text-xs">sports_soccer</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold">St. Jude's Academy</p>
                                    <p class="text-[10px] text-outline">2021 — Present</p>
                                    <p class="text-xs text-on-surface-variant mt-1">U-17 &amp; U-19 First Team Captain
                                    </p>
                                </div>
                            </div>
                            <div class="flex gap-4 relative">
                                <div class="absolute left-4 top-8 bottom-[-24px] w-0.5 bg-outline-variant/30"></div>
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 z-10">
                                    <span class="material-symbols-outlined text-outline text-xs">history</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold">Elite City Juniors</p>
                                    <p class="text-[10px] text-outline">2018 — 2021</p>
                                    <p class="text-xs text-on-surface-variant mt-1">Youth Development Program</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-surface-container-highest flex items-center justify-center shrink-0 z-10">
                                    <span class="material-symbols-outlined text-outline text-xs">school</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold">Green Park Primary</p>
                                    <p class="text-[10px] text-outline">2014 — 2018</p>
                                    <p class="text-xs text-on-surface-variant mt-1">School Representative Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Performance Radar Mockup -->
                    <div class="bg-surface-container-lowest rounded-2xl p-6 overflow-hidden">
                        <h3
                            class="font-headline font-bold text-on-surface-variant text-xs uppercase tracking-widest mb-6">
                            Attribute Analysis</h3>
                        <div class="relative h-48 w-48 mx-auto flex items-center justify-center">
                            <!-- Tactical representation of a football field/radar -->
                            <div class="absolute inset-0 border-2 border-outline-variant/20 rounded-full"></div>
                            <div class="absolute inset-4 border border-outline-variant/10 rounded-full"></div>
                            <div class="absolute inset-8 border border-outline-variant/5 rounded-full"></div>
                            <!-- Simple SVG Radar Shape -->
                            <svg class="w-full h-full transform -rotate-90 drop-shadow-lg" viewbox="0 0 100 100">
                                <polygon fill="rgba(15, 82, 56, 0.2)" points="50,10 85,30 80,75 50,90 20,75 15,30"
                                    stroke="#0f5238" stroke-width="2"></polygon>
                            </svg>
                            <div class="absolute -top-4 text-[10px] font-bold uppercase">PAC</div>
                            <div class="absolute -right-4 text-[10px] font-bold uppercase">PAS</div>
                            <div class="absolute -bottom-4 text-[10px] font-bold uppercase">PHY</div>
                            <div class="absolute -left-4 text-[10px] font-bold uppercase">DRI</div>
                        </div>
                        <div class="mt-8 grid grid-cols-2 gap-y-2">
                            <div class="flex justify-between items-center pr-4 border-r border-outline-variant/20">
                                <span class="text-xs text-outline font-medium">Pace</span>
                                <span class="text-xs font-bold">82</span>
                            </div>
                            <div class="flex justify-between items-center pl-4">
                                <span class="text-xs text-outline font-medium">Shooting</span>
                                <span class="text-xs font-bold">78</span>
                            </div>
                            <div class="flex justify-between items-center pr-4 border-r border-outline-variant/20">
                                <span class="text-xs text-outline font-medium">Passing</span>
                                <span class="text-xs font-bold">91</span>
                            </div>
                            <div class="flex justify-between items-center pl-4">
                                <span class="text-xs text-outline font-medium">Dribbling</span>
                                <span class="text-xs font-bold">85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>