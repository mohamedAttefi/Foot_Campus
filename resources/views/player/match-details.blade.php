<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Match Prep | The Scholastic Pitch</title>
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

        .pitch-grid {
            background-image:
                radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 1%),
                linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 100% 100%, 20px 20px, 20px 20px;
        }

        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                </div>
                <div>
                    <h1
                        class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic leading-none">
                        The Scholastic Pitch</h1>
                    <p class="text-[10px] font-headline tracking-widest text-primary opacity-70 uppercase">Elite Academy
                        League</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 group"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 group"
                href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 group"
                href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-emerald-50/50 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 group"
                href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300 text-slate-500 dark:text-slate-400 group"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-['Manrope'] tracking-wide text-sm font-semibold">Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto space-y-2 pt-6 border-t border-outline-variant/10">
            <button
                class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary py-3 px-4 rounded-xl font-headline font-bold text-sm mb-6 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                Create Match
            </button>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-['Manrope'] text-sm font-semibold">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-['Manrope'] text-sm font-semibold">Support</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header
            class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8">
            <div class="flex items-center gap-8">
                <div class="relative group">
                    <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                        <span class="material-symbols-outlined text-lg" data-icon="search">search</span>
                    </span>
                    <input
                        class="bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-sm w-64 focus:ring-2 focus:ring-primary/20 focus:bg-surface-container-lowest transition-all"
                        placeholder="Search matches, players..." type="text" />
                </div>
                <nav class="flex items-center gap-6">
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors"
                        href="#">Standings</a>
                    <a class="font-['Manrope'] font-medium text-sm text-emerald-700 font-bold border-b-2 border-emerald-700 pb-1"
                        href="#">Schedule</a>
                    <a class="font-['Manrope'] font-medium text-sm text-slate-600 hover:text-emerald-500 transition-colors"
                        href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="w-10 h-10 flex items-center justify-center text-slate-600 hover:bg-surface-container-low rounded-full transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/20">
                    <div class="text-right">
                        <p class="text-xs font-bold text-on-surface">Marcus Vance</p>
                        <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Midfielder • U19</p>
                    </div>
                    <img alt="User Profile Avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary/10"
                        data-alt="close-up portrait of a determined young male athlete with short hair in a professional sports jersey"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCubyWlpkKCPZlgvX9yyXIgpwZtDEBeEus-HTg9HY4sGOJgmbLjbYY32znf5uWU5UmWPaSZoX3QPUx7E2IIseBBdNT9TEvH1xiWWPHgWIMRjacDU5QQVJugMecfE8YxNtzulua_qM3TwEMAhJv5NUFbo2ZYZr_W49ayR5sx9sFas2E5PPtCxKPFrDiLUIOqgDt8QNbHaQofHF3y9DaZktFn2lRGrmjJGS8Sdy3KmY7XrQBr9OiCfLW4KfZHR8GFfnOlZoc5bOrP9b4" />
                </div>
            </div>
        </header>
        <!-- Content Canvas -->
        <div class="p-8 max-w-7xl mx-auto space-y-8">
            <!-- Hero Header Section -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div
                    class="lg:col-span-2 relative overflow-hidden rounded-[2rem] bg-primary text-on-primary p-8 min-h-[320px] flex flex-col justify-end">
                    <div class="absolute inset-0 z-0 opacity-40">
                        <img alt="Match background" class="w-full h-full object-cover"
                            data-alt="dramatic wide angle shot of a pristine professional football stadium at night under bright floodlights with green grass texture"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuADRq89_Cz2vj0sFAActsMq6yl1E61zAEZjf6cmxuI4L-BfsBRkRDh249DwaIKJDYF7xP9q_MiXqyK4ZuwLGjPD99dobvp-rz8P7ZpKjb_ufP2LkmJkO31OLb7BXdpAHpbAs41oEEu3MLAzU7rnniZA1LQ4xk11IHmrut16pt8YESKtVuSa_ReUIxVudyVJke_nUlM2PUl6BXXD1VwuiqLJuK5PjtOXunmdg-A78ilv6YPnlXHDmV8OYCkAdr5WViH58pT6jeSHFaY" />
                        <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/60 to-transparent"></div>
                    </div>
                    <div class="relative z-10 space-y-4">
                        <div class="flex items-center gap-3">
                            <span
                                class="bg-primary-container text-on-primary-container text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Matchday
                                14</span>
                            <span class="text-on-primary/60 text-xs font-medium">Sat, Oct 24 • 15:00 • Academy Park
                                Stadium</span>
                        </div>
                        <div class="flex items-center gap-8">
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3">
                                    <img alt="Home Team" class="w-full h-full object-contain"
                                        data-alt="minimalist circular crest with an eagle head icon in emerald green and white colors"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCax8N4DzFG0JPMnf2yvbQapn3PC63pEQXLLorNeTw6bJU_xFkeuwDx7W-y_hyhNtIqSFgZcehzveaUJnkJEaGQAdjdkVnc_vRqh3cNukVp2VhLpHctUtiSiQezel9IY0wpXA9gakvlaU3nztLWM8KtvpUGUmUdLWj-RBbevTrvaUrNPsnFSJ9T6dt0HRr8xfGngOclUR6BU2YYMdLrINFkP6I4jNqG2Ou3E4SuAPDEIiOfztUBvmbdKSNKG-sq7JHnJf5pKzZmfd4" />
                                </div>
                                <span class="font-headline font-bold text-sm tracking-tight">Scholastic FC</span>
                            </div>
                            <div class="text-4xl font-headline font-extrabold italic opacity-30">VS</div>
                            <div class="flex flex-col items-center gap-2 text-right">
                                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl p-3">
                                    <img alt="Away Team" class="w-full h-full object-contain"
                                        data-alt="modern minimalist sports shield logo with a lion motif in navy blue and gold accents"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuChnSMpaK1NqhodjPvilbsd-wArXWSvuElmBnYCz_x7Cw1uYdM8FP0e_1ukLwJk3QOfxPRmz3x6D4Qcb_BrTUv3krmF3QvHAzxzi1woJ_Bf1JEkMY9RiMcemiT9b4Ol71bx_LE8oZ0RPiG8BmWIY_JzH2wG_wgysPyC9_twbzXJrNgF55Tu1c2BL8ioMqJQ5PxhJ7JmCN0dK_pUeL7VqT16jVerlxJS2orm2WYMwTxqA6t4rOqKo6IHH4lG7mJs9xynz-qZ7fCWQa0" />
                                </div>
                                <span class="font-headline font-bold text-sm tracking-tight">Saint Jude Academy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal Momentum Card -->
                <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm flex flex-col">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-1">
                                Match Readiness</p>
                            <h3 class="text-2xl font-headline font-extrabold text-on-surface">Peak Condition</h3>
                        </div>
                        <div
                            class="w-12 h-12 bg-primary-fixed text-on-primary-fixed rounded-xl flex items-center justify-center">
                            <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                        </div>
                    </div>
                    <div class="flex-1 space-y-4">
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-semibold text-on-surface-variant">Fatigue Level</span>
                            <span class="text-xs font-bold text-primary">12% (Low)</span>
                        </div>
                        <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-primary w-[12%]"></div>
                        </div>
                        <div class="flex justify-between items-end">
                            <span class="text-sm font-semibold text-on-surface-variant">Focus Index</span>
                            <span class="text-xs font-bold text-secondary">94% (High)</span>
                        </div>
                        <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-secondary w-[94%]"></div>
                        </div>
                    </div>
                    <div class="mt-8 p-4 bg-tertiary-fixed/30 rounded-2xl flex items-center gap-3">
                        <span class="material-symbols-outlined text-tertiary" data-icon="psychology">psychology</span>
                        <p class="text-xs text-on-tertiary-fixed-variant leading-relaxed">Coach notes: "Maintain
                            discipline in transition. The opponent relies on counter-attacks."</p>
                    </div>
                </div>
            </section>
            <!-- Tactical Formation & Position -->
            <section class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <!-- Formation Visualizer -->
                <div
                    class="lg:col-span-3 bg-primary rounded-[2.5rem] p-6 relative overflow-hidden shadow-2xl shadow-primary/20">
                    <div class="pitch-grid absolute inset-0 opacity-20"></div>
                    <div class="relative z-10 h-[450px] flex flex-col">
                        <div class="flex justify-between items-center mb-8 px-4">
                            <h3 class="font-headline text-lg font-bold text-on-primary">Formation: 4-3-3 Attack</h3>
                            <span
                                class="text-[10px] font-bold text-on-primary/60 border border-on-primary/20 px-3 py-1 rounded-full uppercase">Tactical
                                Layout</span>
                        </div>
                        <!-- Tactical Pitch Layout -->
                        <div class="flex-1 relative">
                            <!-- Goal Line -->
                            <div
                                class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-12 border-2 border-on-primary/20 border-t-0">
                            </div>
                            <!-- Players Simulation -->
                            <!-- Forward Line -->
                            <div class="absolute top-[15%] left-0 w-full flex justify-around px-12">
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    LW</div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    ST</div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    RW</div>
                            </div>
                            <!-- Midfield Line (User Highlight) -->
                            <div class="absolute top-[45%] left-0 w-full flex justify-around px-8">
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    LCM</div>
                                <!-- Marcus (Highlight) -->
                                <div class="relative">
                                    <div
                                        class="w-14 h-14 rounded-full bg-secondary-container shadow-[0_0_30px_rgba(143,167,254,0.5)] flex items-center justify-center ring-4 ring-on-primary/20">
                                        <span
                                            class="font-headline font-extrabold text-on-secondary-container">CAM</span>
                                    </div>
                                    <div
                                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 whitespace-nowrap text-[10px] font-bold text-secondary-fixed bg-secondary/80 px-2 py-0.5 rounded-full">
                                        YOU (MARCUS)</div>
                                </div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    RCM</div>
                            </div>
                            <!-- Defense Line -->
                            <div class="absolute bottom-[15%] left-0 w-full flex justify-around px-4">
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    LB</div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    CB</div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    CB</div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-on-primary/40 bg-primary/20 backdrop-blur-sm flex items-center justify-center text-[10px] font-bold text-on-primary">
                                    RB</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal Match Goals (Bento Style) -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary" data-icon="target">track_changes</span>
                            <h3 class="font-headline font-bold text-on-surface">Personal Match Goals</h3>
                        </div>
                        <div class="space-y-4">
                            <!-- Goal 1 -->
                            <div
                                class="group p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-lowest transition-all hover:shadow-lg hover:shadow-black/5 cursor-pointer border border-transparent hover:border-primary/10">
                                <div class="flex gap-4">
                                    <div
                                        class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                        <span class="font-headline font-extrabold">01</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-on-surface mb-1">Final Third Creativity</h4>
                                        <p class="text-xs text-on-surface-variant leading-relaxed">Attempt 3+
                                            progressive passes into the penalty area. Exploit gaps between Opponent LCB
                                            and LB.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Goal 2 -->
                            <div
                                class="group p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-lowest transition-all hover:shadow-lg hover:shadow-black/5 cursor-pointer border border-transparent hover:border-primary/10">
                                <div class="flex gap-4">
                                    <div
                                        class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                        <span class="font-headline font-extrabold">02</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-on-surface mb-1">Defensive Transition</h4>
                                        <p class="text-xs text-on-surface-variant leading-relaxed">Recover defensive
                                            position within 5 seconds of turnover. Track the run of saint Jude's No. 10.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Goal 3 -->
                            <div
                                class="group p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-lowest transition-all hover:shadow-lg hover:shadow-black/5 cursor-pointer border border-transparent hover:border-primary/10">
                                <div class="flex gap-4">
                                    <div
                                        class="w-10 h-10 shrink-0 bg-white rounded-xl flex items-center justify-center text-primary shadow-sm">
                                        <span class="font-headline font-extrabold">03</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-bold text-on-surface mb-1">Set Piece Presence</h4>
                                        <p class="text-xs text-on-surface-variant leading-relaxed">Be target for second
                                            balls at edge of box during offensive corners.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Opponent Scouting Brief -->
                    <div class="bg-surface-container-high rounded-[2rem] p-8 border border-white/40">
                        <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-3">Opponent
                            Intel: Saint Jude Academy</p>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-white/40 rounded-xl">
                                <span class="text-xs font-semibold">Key Player</span>
                                <span class="text-xs font-bold text-error">Liam O'Connell (FW)</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-white/40 rounded-xl">
                                <span class="text-xs font-semibold">Recent Form</span>
                                <div class="flex gap-1">
                                    <span
                                        class="w-4 h-4 bg-emerald-500 rounded-full flex items-center justify-center text-[8px] text-white font-bold">W</span>
                                    <span
                                        class="w-4 h-4 bg-emerald-500 rounded-full flex items-center justify-center text-[8px] text-white font-bold">W</span>
                                    <span
                                        class="w-4 h-4 bg-slate-400 rounded-full flex items-center justify-center text-[8px] text-white font-bold">D</span>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 py-2 text-xs font-bold text-primary hover:underline flex items-center justify-center gap-1">
                            View Full Scouting Report
                            <span class="material-symbols-outlined text-sm"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Prep Checklist (Asymmetric Layout) -->
            <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="md:col-span-3 bg-surface-container-low rounded-[2rem] p-8">
                    <h3 class="font-headline font-extrabold text-xl text-on-surface mb-6">Pre-Match Prep Checklist</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <label
                            class="flex items-center gap-4 p-4 bg-surface-container-lowest rounded-2xl border border-outline-variant/10 cursor-pointer group">
                            <input class="w-5 h-5 rounded-md text-primary focus:ring-primary/20 border-outline-variant"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary transition-colors">Hydration
                                protocol started (2L+)</span>
                        </label>
                        <label
                            class="flex items-center gap-4 p-4 bg-surface-container-lowest rounded-2xl border border-outline-variant/10 cursor-pointer group">
                            <input checked=""
                                class="w-5 h-5 rounded-md text-primary focus:ring-primary/20 border-outline-variant"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary transition-colors">Tactical video
                                review completed</span>
                        </label>
                        <label
                            class="flex items-center gap-4 p-4 bg-surface-container-lowest rounded-2xl border border-outline-variant/10 cursor-pointer group">
                            <input class="w-5 h-5 rounded-md text-primary focus:ring-primary/20 border-outline-variant"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary transition-colors">Recovery boots
                                session (20 min)</span>
                        </label>
                        <label
                            class="flex items-center gap-4 p-4 bg-surface-container-lowest rounded-2xl border border-outline-variant/10 cursor-pointer group">
                            <input checked=""
                                class="w-5 h-5 rounded-md text-primary focus:ring-primary/20 border-outline-variant"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary transition-colors">Equipment check
                                (Studs/Pads/Jersey)</span>
                        </label>
                    </div>
                </div>
                <div
                    class="bg-gradient-to-br from-secondary to-on-secondary-fixed-variant rounded-[2rem] p-8 text-on-secondary flex flex-col justify-center items-center text-center">
                    <span class="material-symbols-outlined text-4xl mb-4" data-icon="timer">timer</span>
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-70 mb-1">Kickoff In</p>
                    <p class="text-3xl font-headline font-black">22:14:05</p>
                    <button
                        class="mt-6 px-6 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-md rounded-full text-xs font-bold transition-all">
                        Sync Calendar
                    </button>
                </div>
            </section>
        </div>
    </main>
</body>

</html>