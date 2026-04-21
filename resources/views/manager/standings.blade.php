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
            vertical-align: middle;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .pitch-gradient {
            background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- SideNavBar Component -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl z-50 bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col h-screen p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 tonal-shift background-transition">
        <div class="mb-10 px-2">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic font-headline">The Scholastic Pitch</h1>
            <p class="text-[10px] tracking-[0.2em] font-bold text-slate-400 uppercase mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Active: League Table based on intent -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-slate-500 dark:text-slate-400 hover:text-emerald-600 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 font-['Manrope'] tracking-wide text-sm" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard" style="font-variation-settings: 'FILL' 1;">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-slate-500 dark:text-slate-400 hover:text-emerald-600 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-slate-500 dark:text-slate-400 hover:text-emerald-600 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-slate-500 dark:text-slate-400 hover:text-emerald-600 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 scale-95 duration-150 ease-in-out text-slate-500 dark:text-slate-400 hover:text-emerald-600 font-['Manrope'] tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-6 pt-6 border-t border-slate-100 dark:border-slate-800">
            <button class="w-full py-3 px-4 pitch-gradient text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg shadow-emerald-900/20 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                Create Match
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 hover:text-emerald-600 transition-colors text-sm font-medium" href="#">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                    <span>Settings</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 hover:text-emerald-600 transition-colors text-sm font-medium" href="#">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                    <span>Support</span>
                </a>
            </div>
            <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden">
                    <img class="w-full h-full object-cover" data-alt="close-up portrait of a professional soccer coach in a formal team tracksuit looking confidently ahead" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB74A4LXM_h83W0Ty12rCX9F0sKK7R45Rjv6IOzisZzZyR5Cp5Eyj5wn7lwaR9L4xedIJ76Ix4-ARQriYQ33PrdEOkM8n0hZvgfOkuuxuteBjxKtDEpU14OFzKmhK7AIquWOK7bUO3y3AAD8FizQBra_FB7oJyNTMMYPtUslYIdjlpoy554DUgL1A4ev5K58kN8OMAyql0LV26_MRsPuiMwDDqKN6gWbN9QRCNVc-kiFPYlbqpDGKrq0brTiyYOW_L3RN-z5Z-tTOE" />
                </div>
                <div>
                    <p class="text-xs font-bold text-on-surface">Alex Thompson</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">First Team Manager</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- TopNavBar Component -->
    <header class="fixed top-0 right-0 left-0 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-64 font-['Manrope'] font-medium text-sm tonal-variation-bg-surface-low">
        <div class="flex items-center gap-8">
            <div class="flex items-center bg-surface-container-low px-4 py-2 rounded-full w-80">
                <span class="material-symbols-outlined text-outline text-lg" data-icon="search">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-xs ml-2 w-full placeholder:text-outline-variant" placeholder="Search teams, players, or scouts..." type="text" />
            </div>
            <nav class="flex items-center gap-6">
                <a class="text-emerald-700 dark:text-emerald-400 font-bold border-b-2 border-emerald-700 pb-1 Active: opacity-80 transition-opacity" href="#">Standings</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 dark:hover:text-emerald-300 transition-colors" href="#">Schedule</a>
                <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 dark:hover:text-emerald-300 transition-colors" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-slate-600 hover:bg-slate-50 rounded-full transition-all">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="flex items-center gap-2 bg-emerald-50 text-emerald-800 px-4 py-1.5 rounded-full font-bold hover:bg-emerald-100 transition-all">
                <span>Profile</span>
            </button>
        </div>
    </header>
    <!-- Content Area -->
    <main class="ml-64 pt-24 px-10 pb-12">
        <!-- Title Race Context -->
        <section class="mb-12">
            <div class="flex items-end justify-between mb-8">
                <div>
                    <span class="text-on-surface-variant font-label font-semibold text-xs uppercase tracking-[0.2em]">Live Competition</span>
                    <h2 class="text-4xl font-headline font-extrabold text-on-surface tracking-tight mt-1">League Standings</h2>
                </div>
                <div class="flex gap-4 items-center bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-slate-50">
                    <div class="text-right">
                        <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">Your Position</p>
                        <p class="text-2xl font-headline font-black text-emerald-800">2<span class="text-xs font-medium text-slate-400 ml-1">nd</span></p>
                    </div>
                    <div class="w-px h-10 bg-slate-100"></div>
                    <div class="text-right">
                        <p class="text-[10px] text-on-surface-variant uppercase font-bold tracking-widest">To Lead</p>
                        <p class="text-2xl font-headline font-black text-error">-3 pts</p>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Standings Layout -->
            <div class="grid grid-cols-12 gap-8">
                <!-- Main Table Section -->
                <div class="col-span-8 space-y-6">
                    <div class="bg-surface-container-lowest rounded-3xl p-8 shadow-xl shadow-slate-200/50">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl font-headline font-bold text-on-surface">U-19 Premier Academy Division</h3>
                            <div class="flex gap-2">
                                <button class="px-4 py-1.5 bg-surface-container-low rounded-lg text-xs font-bold text-on-surface-variant hover:bg-surface-container-high transition-colors">Overall</button>
                                <button class="px-4 py-1.5 rounded-lg text-xs font-bold text-outline hover:text-on-surface transition-colors">Home</button>
                                <button class="px-4 py-1.5 rounded-lg text-xs font-bold text-outline hover:text-on-surface transition-colors">Away</button>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr class="text-[10px] uppercase tracking-widest text-on-surface-variant font-bold border-b border-slate-50">
                                        <th class="pb-4 pl-2">Pos</th>
                                        <th class="pb-4">Club</th>
                                        <th class="pb-4 text-center">P</th>
                                        <th class="pb-4 text-center">W</th>
                                        <th class="pb-4 text-center">D</th>
                                        <th class="pb-4 text-center">L</th>
                                        <th class="pb-4 text-center">GD</th>
                                        <th class="pb-4 text-center">PTS</th>
                                        <th class="pb-4 text-right pr-2">Form</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50">
                                    <!-- Leader -->
                                    <tr class="group hover:bg-surface-container-low transition-colors">
                                        <td class="py-5 pl-2 font-headline font-black text-on-surface/50 text-lg">01</td>
                                        <td class="py-5">
                                            <div class="flex items-center gap-4">
                                                <div class="w-10 h-10 flex items-center justify-center bg-blue-50 rounded-xl">
                                                    <span class="material-symbols-outlined text-secondary" data-icon="shield">shield</span>
                                                </div>
                                                <div>
                                                    <p class="font-headline font-bold text-on-surface">Oxford Crest Academy</p>
                                                    <p class="text-[10px] text-on-surface-variant font-medium">Head: Marcus Vane</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-5 text-center font-bold">24</td>
                                        <td class="py-5 text-center font-medium">18</td>
                                        <td class="py-5 text-center font-medium">4</td>
                                        <td class="py-5 text-center font-medium">2</td>
                                        <td class="py-5 text-center font-headline font-bold text-emerald-600">+32</td>
                                        <td class="py-5 text-center font-headline font-black text-on-surface">58</td>
                                        <td class="py-5 text-right pr-2">
                                            <div class="flex justify-end gap-1">
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-slate-100 text-slate-500 text-[9px] font-black">D</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Highlighted Manager Team -->
                                    <tr class="group bg-emerald-50/50 rounded-2xl relative overflow-hidden ring-2 ring-emerald-500/20">
                                        <td class="py-5 pl-2 font-headline font-black text-emerald-700 text-xl">02</td>
                                        <td class="py-5">
                                            <div class="flex items-center gap-4">
                                                <div class="w-10 h-10 flex items-center justify-center bg-emerald-600 rounded-xl shadow-lg shadow-emerald-900/20">
                                                    <span class="material-symbols-outlined text-white" data-icon="sports_soccer">sports_soccer</span>
                                                </div>
                                                <div>
                                                    <p class="font-headline font-black text-emerald-900">The Scholastic Pitch FC</p>
                                                    <p class="text-[10px] text-emerald-700/70 font-bold flex items-center gap-1 uppercase">
                                                        <span class="w-1 h-1 rounded-full bg-emerald-600"></span>
                                                        Your Team
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-5 text-center font-bold text-emerald-900">24</td>
                                        <td class="py-5 text-center font-medium text-emerald-900">17</td>
                                        <td class="py-5 text-center font-medium text-emerald-900">4</td>
                                        <td class="py-5 text-center font-medium text-emerald-900">3</td>
                                        <td class="py-5 text-center font-headline font-bold text-emerald-700">+28</td>
                                        <td class="py-5 text-center font-headline font-black text-emerald-800">55</td>
                                        <td class="py-5 text-right pr-2">
                                            <div class="flex justify-end gap-1">
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-600 text-white text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-600 text-white text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-600 text-white text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-600 text-white text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-slate-200 text-slate-600 text-[9px] font-black">D</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Rival -->
                                    <tr class="group hover:bg-surface-container-low transition-colors">
                                        <td class="py-5 pl-2 font-headline font-black text-on-surface/50 text-lg">03</td>
                                        <td class="py-5">
                                            <div class="flex items-center gap-4">
                                                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-xl">
                                                    <span class="material-symbols-outlined text-error" data-icon="swords">swords</span>
                                                </div>
                                                <div>
                                                    <p class="font-headline font-bold text-on-surface">St. Jude Collegiate</p>
                                                    <p class="text-[10px] text-on-surface-variant font-medium">Head: Robert Sterling</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-5 text-center font-bold">24</td>
                                        <td class="py-5 text-center font-medium">16</td>
                                        <td class="py-5 text-center font-medium">5</td>
                                        <td class="py-5 text-center font-medium">3</td>
                                        <td class="py-5 text-center font-headline font-bold text-emerald-600">+19</td>
                                        <td class="py-5 text-center font-headline font-black text-on-surface">53</td>
                                        <td class="py-5 text-right pr-2">
                                            <div class="flex justify-end gap-1">
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-red-100 text-red-800 text-[9px] font-black">L</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-slate-100 text-slate-500 text-[9px] font-black">D</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Others... -->
                                    <tr class="group hover:bg-surface-container-low transition-colors">
                                        <td class="py-5 pl-2 font-headline font-black text-on-surface/30 text-lg">04</td>
                                        <td class="py-5">
                                            <div class="flex items-center gap-4">
                                                <div class="w-10 h-10 flex items-center justify-center bg-slate-100 rounded-xl">
                                                    <span class="material-symbols-outlined text-slate-400" data-icon="stars">stars</span>
                                                </div>
                                                <div>
                                                    <p class="font-headline font-bold text-on-surface">Beacon Hill United</p>
                                                    <p class="text-[10px] text-on-surface-variant font-medium">Head: Leo Grant</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-5 text-center font-bold">24</td>
                                        <td class="py-5 text-center font-medium">14</td>
                                        <td class="py-5 text-center font-medium">6</td>
                                        <td class="py-5 text-center font-medium">4</td>
                                        <td class="py-5 text-center font-headline font-bold text-emerald-600">+12</td>
                                        <td class="py-5 text-center font-headline font-black text-on-surface">48</td>
                                        <td class="py-5 text-right pr-2">
                                            <div class="flex justify-end gap-1">
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-slate-100 text-slate-500 text-[9px] font-black">D</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-red-100 text-red-800 text-[9px] font-black">L</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-emerald-100 text-emerald-800 text-[9px] font-black">W</span>
                                                <span class="w-5 h-5 flex items-center justify-center rounded bg-red-100 text-red-800 text-[9px] font-black">L</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tactical Insight Banner -->
                    <div class="pitch-gradient rounded-3xl p-8 text-on-primary flex items-center gap-8 relative overflow-hidden shadow-xl shadow-emerald-950/20">
                        <div class="flex-1 relative z-10">
                            <h4 class="text-2xl font-headline font-extrabold mb-2 italic">Matchday 25: The Decider</h4>
                            <p class="text-primary-fixed-dim text-sm max-w-md">Your next fixture against Oxford Crest Academy is a "6-pointer". A victory will place you at the top of the table on goal difference.</p>
                            <button class="mt-6 px-6 py-2.5 bg-white text-emerald-900 rounded-full font-headline font-bold text-sm hover:bg-primary-fixed transition-all flex items-center gap-2 group">
                                View Match Tactics
                                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform" data-icon="trending_flat">trending_flat</span>
                            </button>
                        </div>
                        <div class="w-1/3 aspect-video relative z-10 rounded-2xl overflow-hidden border border-white/10">
                            <img class="w-full h-full object-cover" data-alt="high-angle tactical shot of a soccer field with players in green and white formation under bright stadium lights" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsNKLl7V50d2KVeUs3Jm30WrLhq5Hw0RTxzeN4EOiBE_XXIQ7APYE8_3NzUrdSmHui6WX_Ikd_dZTXhe-o2G9arKn4O8-od3ngbPIaSUUTgKL8QeCL8ROVeDoE-GcJS8fazn7qzfbI7eyhuIF6yZlTYswQvK2HZj1dhfJ85CEek67rQ6hB6LxG6FhXrrypZOlCYaXyRbME7mrYwsnJer-MpsXu7rwV8nsxsQMDiY2FSWRcrzNE1PXYgMNI96amM5rqf7tVA4Pp3sQ" />
                            <div class="absolute inset-0 bg-emerald-900/40 backdrop-overlay"></div>
                        </div>
                        <!-- Abstract Pitch Design Element -->
                        <div class="absolute -right-20 -bottom-20 w-80 h-80 border-4 border-white/5 rounded-full"></div>
                    </div>
                </div>
                <!-- Sidebar Contextual Area -->
                <div class="col-span-4 space-y-8">
                    <!-- Form Momentum Card -->
                    <div class="bg-surface-container-low rounded-3xl p-6">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6 flex items-center justify-between">
                            Form Momentum
                            <span class="material-symbols-outlined text-emerald-600" data-icon="trending_up">trending_up</span>
                        </h4>
                        <div class="space-y-6">
                            <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4">
                                <div class="p-3 bg-emerald-50 rounded-xl text-emerald-700">
                                    <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-medium">Win Probability</p>
                                    <p class="text-xl font-headline font-black text-on-surface">78%</p>
                                </div>
                            </div>
                            <div class="flex items-end gap-1 h-24 px-2">
                                <div class="flex-1 bg-emerald-200/50 rounded-t-lg h-[60%]"></div>
                                <div class="flex-1 bg-emerald-200/50 rounded-t-lg h-[40%]"></div>
                                <div class="flex-1 bg-emerald-400 rounded-t-lg h-[85%]"></div>
                                <div class="flex-1 bg-emerald-500 rounded-t-lg h-[75%]"></div>
                                <div class="flex-1 bg-emerald-600 rounded-t-lg h-[95%]"></div>
                                <div class="flex-1 bg-emerald-700 rounded-t-lg h-[90%] shadow-lg shadow-emerald-500/20"></div>
                            </div>
                            <p class="text-[11px] text-center text-on-surface-variant font-medium italic">Highest scoring streak in current season (5 games)</p>
                        </div>
                    </div>
                    <!-- Key Performers -->
                    <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest mb-6">Star Scholars</h4>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 p-2 hover:bg-surface-container-low rounded-2xl transition-all cursor-pointer">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-emerald-500/20">
                                    <img class="w-full h-full object-cover" data-alt="portrait of a young athletic man with determined expression wearing a green sports jersey" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWuqLi5cooFXjovw5IVqeDkye9YiF0EkMqlbEq7ehcPggU8sMnRbOGp-HHs5SIzFh-O-vXi6plhVkZ4I4wymzxJ3kr6sZ5GMhURReLKzmA0E52YZn6hwe2TqQH50KE38XzQrl_sR6-5bW_eDt9SefHh6tq-dxQrbrtGR705dmAViHYJUR1FhN_QUM5WxAV9h7LLzEBcJyRCNOPfyYLg-eDfD10SpKM2HfRU-5Gy1QufTouZB_CVqDJ1aU0XreNPX1lVatRivwPG7U" />
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-headline font-bold text-on-surface">J. Sterling</p>
                                    <p class="text-[10px] text-on-surface-variant">Top Scorer • 18 Goals</p>
                                </div>
                                <div class="text-right">
                                    <span class="inline-block px-2 py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[9px] font-black uppercase">GPA 3.9</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-2 hover:bg-surface-container-low rounded-2xl transition-all cursor-pointer">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-emerald-500/20">
                                    <img class="w-full h-full object-cover" data-alt="profile photo of a young male student athlete in a navy blazer looking professional" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtnQTFaYZdQ9Kdedd7GNuO93d6JE7EBgcvnMu27pv9Iif7MfbYqd4PzspyC4GWcubXE8HP65O6_-NcxT9dlq-F-ywc1TicrMtYYiJdmmEwAzPCqBEKmmS8DCRP3flBYnxKh_3GzUCgpN75s0pusk729_0T4fpMGtOYY3_POB6QIxtbdxTldQyORkQzs68aB1Ja0qBi09RpJdKAYz56tlO6EhBmi2aP8kdYHPPTH9x5CsN9fZQY0I2ltj2kmVfgCYmsLTaTfl_K1_c" />
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-headline font-bold text-on-surface">M. Aris</p>
                                    <p class="text-[10px] text-on-surface-variant">Assists King • 12 Ast</p>
                                </div>
                                <div class="text-right">
                                    <span class="inline-block px-2 py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[9px] font-black uppercase">GPA 3.6</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-2 hover:bg-surface-container-low rounded-2xl transition-all cursor-pointer">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-emerald-500/20">
                                    <img class="w-full h-full object-cover" data-alt="focused young man in sportswear on a training ground with natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8JHDKLMZdLj5EF4LEkmtcZ6xVNGspfNfYgkSmVo4Ek0pTMyu-togEPbesf5MWnWM208meFYvhzq5Lsu7wDxvJeqZvFeVj0ia9jOOd_BsjsskZ2WINQktqO_DiTrgJfoVjg3KFugTQCyiNZdk-hvBrF5EpmlsoYxCzBBt4F795-pQhgN_pDQdMegQHchby8-tda11vqr5v4NSRo5xEJeOqBXmSVeozKSVKtEuk9NoKnMS7FcaraSMZ4RTSmjCr2omLqxV2nb9Nic4" />
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-headline font-bold text-on-surface">D. Novak</p>
                                    <p class="text-[10px] text-on-surface-variant">Clean Sheets • 9</p>
                                </div>
                                <div class="text-right">
                                    <span class="inline-block px-2 py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[9px] font-black uppercase">GPA 4.0</span>
                                </div>
                            </div>
                        </div>
                        <button class="w-full mt-6 py-2 border-2 border-dashed border-slate-200 text-slate-400 rounded-2xl text-[11px] font-bold uppercase tracking-widest hover:border-emerald-200 hover:text-emerald-600 transition-all">View All Academic Stats</button>
                    </div>
                    <!-- League News (Editorial feel) -->
                    <div class="space-y-4">
                        <h4 class="text-sm font-headline font-extrabold text-on-surface uppercase tracking-widest px-2">League Bulletin</h4>
                        <div class="bg-surface-container-high rounded-3xl p-5 border-l-4 border-emerald-600">
                            <p class="text-[10px] font-bold text-emerald-800 uppercase mb-2">Technical Update</p>
                            <h5 class="font-headline font-bold text-on-surface leading-tight mb-2">Winter Break training schedules released for elite bracket squads.</h5>
                            <a class="text-[11px] font-bold text-secondary flex items-center gap-1 group" href="#">
                                Read Protocol
                                <span class="material-symbols-outlined text-[14px]" data-icon="open_in_new">open_in_new</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>