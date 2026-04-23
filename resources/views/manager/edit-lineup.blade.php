<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Lineup - The Scholastic Pitch</title>
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
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
        }

        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .pitch-gradient {
            background: linear-gradient(180deg, #2d6a4f 0%, #0f5238 100%);
        }

        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="text-on-surface bg-surface">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md shadow-xl shadow-emerald-900/5 z-50 flex flex-col p-6 overflow-y-auto font-['Manrope'] tracking-wide text-sm font-semibold">
        <div class="mb-10 px-2">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</h1>
            <p class="text-[10px] text-slate-500 font-medium tracking-[0.2em] uppercase mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-grow space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 bg-emerald-50/50" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 transition-all duration-300" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 space-y-2 border-t border-slate-200 dark:border-slate-800">
            <button class="w-full mb-4 bg-emerald-900 text-white rounded-xl py-3 font-bold flex items-center justify-center gap-2 scale-95 hover:scale-100 duration-150 ease-in-out">
                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                Create Match
            </button>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span>Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-slate-500 hover:text-emerald-600 transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span>Support</span>
            </a>
        </div>
    </aside>
    <!-- Main Canvas Area -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 font-['Manrope'] font-medium text-sm">
            <div class="flex items-center gap-8">
                <div class="relative group">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400" data-icon="search">search</span>
                    <input class="bg-surface-container-highest border-none rounded-full py-2 pl-10 pr-4 w-64 focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all" placeholder="Search players, tactics..." type="text" />
                </div>
                <nav class="flex gap-6">
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="material-symbols-outlined text-slate-600 p-2 hover:bg-surface-container-low rounded-full transition-colors" data-icon="notifications">notifications</button>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right">
                        <p class="text-xs font-bold text-on-surface">Coach Sterling</p>
                        <p class="text-[10px] text-slate-500">First XI Manager</p>
                    </div>
                    <img alt="Profile" class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm" data-alt="professional portrait of a middle-aged sports coach with a focused expression wearing a dark athletic polo shirt" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZ5IdItmYZ-VXAMn6vGpf_DSbl7KPv8OUgFcq_Iwulj8LRDJ5cmnS88nPYl6noAu0hpQiaIHCXmOwKCJUzUxTdovm-vfJIQ6cC8d0aGy8mfwAM-l2v_U8heSR2H2L878aKiUb5j14OFLcmpNmpKcyreB-2xRs7FlDL6stc7Z0tW8dDlt6dJbJJTJZaPqCq0AIEX36cROpt9iyz2fI1shFV5ht4TEKyUl0sWtw7OM3l8s24zjxhaTaM6-1PsFr1q9tJsC_Bn-8fCGo" />
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-8 space-y-8">
            <!-- Header Section -->
            <div class="flex justify-between items-end">
                <div>
                    <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest font-semibold mb-1 block">Roster Management</span>
                    <h2 class="text-3xl font-headline font-extrabold text-on-surface tracking-tight">Edit First XI Lineup</h2>
                    <p class="text-on-surface-variant mt-1 text-sm">Adjusting formation for the upcoming <span class="font-bold">Inter-Academy Finals</span>.</p>
                </div>
                <div class="flex gap-3">
                    <button class="px-6 py-2.5 rounded-xl text-primary font-bold hover:bg-primary/5 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg" data-icon="undo">undo</span>
                        Reset Changes
                    </button>
                    <button class="px-8 py-2.5 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-bold shadow-lg shadow-primary/20 hover:opacity-90 transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg" data-icon="save">save</span>
                        Save Formation
                    </button>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-12 gap-8">
                <!-- Left: Tactical Pitch (The Digital Field) -->
                <div class="col-span-12 lg:col-span-7 space-y-6">
                    <div class="pitch-gradient rounded-[2.5rem] p-12 aspect-[4/5] relative overflow-hidden shadow-2xl shadow-primary/10 border-4 border-primary-container/20">
                        <!-- Pitch Markings -->
                        <div class="absolute inset-8 border-2 border-white/20 rounded-[1.5rem] pointer-events-none"></div>
                        <div class="absolute top-8 left-1/2 -translate-x-1/2 w-1/2 h-1/4 border-b-2 border-x-2 border-white/20 pointer-events-none"></div>
                        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 w-1/2 h-1/4 border-t-2 border-x-2 border-white/20 pointer-events-none"></div>
                        <div class="absolute top-1/2 left-0 w-full h-[1px] bg-white/20 pointer-events-none"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 border-2 border-white/20 rounded-full pointer-events-none"></div>
                        <!-- Player Positioning (4-3-3 System) -->
                        <div class="relative h-full w-full flex flex-col justify-between items-center z-10">
                            <!-- Forwards -->
                            <div class="flex justify-around w-full mt-4">
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl ring-4 ring-secondary/30 relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="young male soccer player headshot with determined look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDhQeo5BHzLIOLBRYYHUP4OeMmqQSD02phKcEZhrpLYLt9s_1UIwFX4xaSgXEBS0Sl2N7bLL3tAdO_5Xa_Bj-WWLlpgK8-UinYWFr2c7CwD2QQuZxlFL-r1q8kAIX02bsfIVavasLaw8QiXRyssJp7pPdo3tFpFT8RZv6Fq0MdMPk-VmAW2AzHB588dFFYluy2kXJqAaAg_ygMpSxhmlZBSaymCyS83Y62CHSLVZrvt9TFRzHfCJTXzJY9W9jW5s-K5Slipry0j94" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">11</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">L. MENDES</span>
                                </div>
                                <div class="flex flex-col items-center gap-2 -mt-4">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl ring-4 ring-secondary/30 relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="young athletic man with short hair looking confidently at camera" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAh7dQyb1fr7eDpaTSPWTFB32IAWjl5Uwl8gZrNgonX5AiQJvQ_tLlmhfy4e5qNJNAmMtLqnuZ9V-mAsbISrycWd1ppP2IwjfMz6oqvx8QVU359F4eAqLzq9GeclNIh-c3hbAIrirA4RB6tHgJpoN7-8CoUbnwdv-6sD0JBsqV3NNL2jhT9HWdnafpxDI8zXK1Qz3yHEqmRU2p6-E_JgxCZyTS5YYJUVQiqghP8_V4CU3WLd1R4SUtPjgdRHgU7UGsEW_K6V--H_FE" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">9</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">J. CARTER</span>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl ring-4 ring-secondary/30 relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="young football player portrait with athletic build" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkCfuUgFD8J89ZKDv0q9KKVCY7FGYCG3L4wkXVtjKosB4c2aXo8FDBBna-bW1ouwj80uzwG43asUFTf1BOUK_J9hqXOVpBVEABgGrvDRMZK_tKT21l0ZEY1dH4V4uVHzsP3NUwyvCltI_2-JYcdP6vTcmeAXHQqEvc3S87ccuANUo_5YufHfgJi92aY6cfLc1D5T0tLB7HobNx_ZKwJc4Ho_P-7zodMz_pln05gJ4lXUrcnal3o-MvAq1hk-RUF0ygzK9iTz5OCbQ" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">7</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">S. KHAN</span>
                                </div>
                            </div>
                            <!-- Midfielders -->
                            <div class="flex justify-between w-3/4">
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="profile of a smiling young male athlete" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMV6BIeKQkf61nUFHQeRnqsLYtnHxS1NjvBSMpd73X0omH8UZMpTnOejgjGdKJTJU1ddSjwWe04fBF_UGbDe5uHDWW3_kev0FT8UQDd4KPmqQtCgsNa2Rwj0kdM_ufYBOHVBxuRg5WX8_oO9HRdNXMU6635H1Nn3ClV2yVmGbLFTOtoIRB74jw2_NayO3BAG-eaJOL7sYd9saoMZkhKm-If4ChIzCEWK8ZkZ89w2dgGxUKS_z0P-_M9GU9MF3YgsukN2jHc5PshjM" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">8</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">R. VANCE</span>
                                </div>
                                <div class="flex flex-col items-center gap-2 mt-4">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="young man with sharp features and sports headband" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtDhaDZToYSJxV-Ps7Z_2uaaIe3epOIA8heYY1ZFqBm7sWd8xNRVlQMp6wSvUVQQ33KYggEP4M75_DuS5ejSGxwDRlJQfR58il0GXGdFUS9-0juss_mFD52Bgf5ezNgSwtxQsv3GZ9_HWbazOzBpmByqdZSaLqkzL2rzzprhO7CFw1j4uj_xlCG8AjCwgXDvjX8uaOOR9CrCDx8s31U2xvNNGO1MOelqn2_rzoq4YNFjRSEswW0SyGb3fOy_tmQzV1aGpXobt5QxE" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">6</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">M. ROSS</span>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                        <img class="w-full h-full rounded-full object-cover" data-alt="headshot of young male athlete with confident gaze" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA10vHtpD9JiUIwXy8eX2JR8DSxEcdNhEWgDxewhOJgR30zCMJUGpqYEo845gwcieheNWh_KcYks0_jDOJrDlUjwvLH5XMTDJy4SL24ck8RkjWilS6Mwqa_f3hLlTWIkPAYEn5i-EL9XGLjVetA4G6rK2D_88iyJ1vTAOLcSOK7PLhMnNkjB39ynHaG8g5j6WDfmtuzb3zi33-C3dfws7GAUqBblT103T_TXsQFr3zsCOhrIABtFbQ9tTt24blSM87_QXW_2WtAsBk" />
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">10</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">E. BLAKE</span>
                                </div>
                            </div>
                            <!-- Defenders -->
                            <div class="flex justify-around w-full">
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                        <div class="w-full h-full rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                            <span class="material-symbols-outlined" data-icon="person">person</span>
                                        </div>
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">3</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">T. LOPES</span>
                                </div>
                                <div class="flex justify-between w-1/2">
                                    <div class="flex flex-col items-center gap-2">
                                        <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                            <div class="w-full h-full rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                                <span class="material-symbols-outlined" data-icon="person">person</span>
                                            </div>
                                            <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">4</div>
                                        </div>
                                        <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">B. COSTA</span>
                                    </div>
                                    <div class="flex flex-col items-center gap-2">
                                        <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                            <div class="w-full h-full rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                                <span class="material-symbols-outlined" data-icon="person">person</span>
                                            </div>
                                            <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">5</div>
                                        </div>
                                        <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">D. GRAY</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <div class="w-14 h-14 rounded-full bg-white p-1 shadow-xl relative">
                                        <div class="w-full h-full rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                            <span class="material-symbols-outlined" data-icon="person">person</span>
                                        </div>
                                        <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">2</div>
                                    </div>
                                    <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">P. SHARP</span>
                                </div>
                            </div>
                            <!-- Goalkeeper -->
                            <div class="flex flex-col items-center gap-2 mb-2">
                                <div class="w-14 h-14 rounded-full bg-on-tertiary-fixed p-1 shadow-xl ring-4 ring-tertiary-fixed-dim/50 relative">
                                    <div class="w-full h-full rounded-full bg-tertiary-fixed-dim flex items-center justify-center text-on-tertiary-fixed">
                                        <span class="material-symbols-outlined" data-icon="sports_handball">sports_handball</span>
                                    </div>
                                    <div class="absolute -bottom-1 -right-1 bg-secondary text-white text-[10px] w-6 h-6 flex items-center justify-center rounded-full border-2 border-white font-bold">1</div>
                                </div>
                                <span class="text-white text-[10px] font-bold tracking-tight bg-primary/40 px-2 py-0.5 rounded-full backdrop-blur-sm">A. REED</span>
                            </div>
                        </div>
                    </div>
                    <!-- Tactical Controls -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-surface-container-low rounded-2xl p-6">
                            <h4 class="font-headline font-bold text-sm mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary" data-icon="settings_input_component">settings_input_component</span>
                                Formation Presets
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <button class="px-4 py-2 bg-primary text-white text-xs font-bold rounded-full">4-3-3 Attack</button>
                                <button class="px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors">4-4-2 Solid</button>
                                <button class="px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors">3-5-2 Wide</button>
                                <button class="px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-full hover:bg-primary-fixed transition-colors">4-2-3-1</button>
                            </div>
                        </div>
                        <div class="bg-surface-container-low rounded-2xl p-6">
                            <h4 class="font-headline font-bold text-sm mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary" data-icon="bolt">bolt</span>
                                Quick Actions
                            </h4>
                            <div class="space-y-2">
                                <button class="w-full text-left px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-lg flex justify-between items-center group hover:bg-secondary-fixed transition-all">
                                    Auto-Optimize Lineup
                                    <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 transition-opacity" data-icon="auto_awesome">auto_awesome</span>
                                </button>
                                <button class="w-full text-left px-4 py-2 bg-white text-on-surface text-xs font-bold rounded-lg flex justify-between items-center group hover:bg-secondary-fixed transition-all">
                                    Clear All Positions
                                    <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 transition-opacity" data-icon="delete">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right: Bench & Tactical Details -->
                <div class="col-span-12 lg:col-span-5 space-y-8">
                    <!-- Bench List -->
                    <div class="bg-surface-container-lowest rounded-[2rem] p-8 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-headline font-bold">Bench &amp; Reserve</h3>
                            <span class="text-xs font-bold px-3 py-1 bg-surface-container-high rounded-full">7 Substitutes Max</span>
                        </div>
                        <div class="space-y-4">
                            <!-- Substitute Item -->
                            <div class="group flex items-center justify-between p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-highest transition-all cursor-move">
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <img class="w-12 h-12 rounded-full object-cover" data-alt="young female athlete portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXBSCSY4qPX63qodtMcwQzY8QiVkDwSFgGgblMPY5q4zhrWiLiEM2NQPhPrpGXvVT8cPoOvysLRP8-lMh031cq1-aCDp45PC-bKglGt_XVEOJToDf4rgSz4VipUCJzw9jJyTgVusiUWUem8n3vWLXg0UkJqwbh65jvK1rmSSFD9RZ33a9B1ROwgegea_0dgQga1KRShfYaehNM2UuCraJ1E_ijbp07zyWz2h0y2oUVSm4BuGhRvnwfEL5awYIEfOuIZLyrMwZmRm4" />
                                        <span class="absolute -top-1 -left-1 w-5 h-5 bg-tertiary-container text-on-tertiary-container text-[8px] flex items-center justify-center rounded-full font-bold">14</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">Maya Sterling</p>
                                        <p class="text-[10px] uppercase tracking-tighter text-on-surface-variant font-semibold">Attacking Midfield</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <p class="text-xs font-bold text-primary">88%</p>
                                        <p class="text-[9px] text-slate-400">FITNESS</p>
                                    </div>
                                    <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-primary hover:bg-primary hover:text-white transition-all shadow-sm">
                                        <span class="material-symbols-outlined text-lg" data-icon="swap_horiz">swap_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Substitute Item 2 -->
                            <div class="group flex items-center justify-between p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-highest transition-all cursor-move border-2 border-transparent hover:border-primary-fixed">
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <img class="w-12 h-12 rounded-full object-cover" data-alt="young man with short curly hair smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwfGtJ90BmAC2npUlcv-EwXwQnrMxT8JRBgNkWiJzW6VvYRuj7kyIv2jof-mQif0OBmAWddxyyT94h96OCUfmBTCsH7bapHAHUY7lG7nOrgsD9Itl5YsXhGTsJCgh5zLcP1rVlq1VBrSC-Yv7iKcM1F41avo4RaS5OsFuRdjeTP9nXh_vsG_5KRNeMCraGNprWZkT7YgFGSwaPOc4T5vM4qMZWLno0KzKDSWXaWoGDwTk-OaCBHoQDwHA6ZrK-uu2XS_Tvjk7CQY0" />
                                        <span class="absolute -top-1 -left-1 w-5 h-5 bg-tertiary-container text-on-tertiary-container text-[8px] flex items-center justify-center rounded-full font-bold">18</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">Leo Hudson</p>
                                        <p class="text-[10px] uppercase tracking-tighter text-on-surface-variant font-semibold">Center Forward</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <p class="text-xs font-bold text-primary">94%</p>
                                        <p class="text-[9px] text-slate-400">FITNESS</p>
                                    </div>
                                    <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-primary hover:bg-primary hover:text-white transition-all shadow-sm">
                                        <span class="material-symbols-outlined text-lg" data-icon="swap_horiz">swap_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Substitute Item 3 -->
                            <div class="group flex items-center justify-between p-4 bg-surface-container-low rounded-2xl hover:bg-surface-container-highest transition-all cursor-move">
                                <div class="flex items-center gap-4">
                                    <div class="relative">
                                        <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center text-slate-400">
                                            <span class="material-symbols-outlined" data-icon="person">person</span>
                                        </div>
                                        <span class="absolute -top-1 -left-1 w-5 h-5 bg-tertiary-container text-on-tertiary-container text-[8px] flex items-center justify-center rounded-full font-bold">22</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">Carlos Ruiz</p>
                                        <p class="text-[10px] uppercase tracking-tighter text-on-surface-variant font-semibold">Full Back</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <p class="text-xs font-bold text-primary">100%</p>
                                        <p class="text-[9px] text-slate-400">FITNESS</p>
                                    </div>
                                    <button class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-primary hover:bg-primary hover:text-white transition-all shadow-sm">
                                        <span class="material-symbols-outlined text-lg" data-icon="swap_horiz">swap_horiz</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button class="w-full mt-6 py-3 rounded-xl border-2 border-dashed border-outline-variant text-on-surface-variant font-bold text-xs hover:bg-surface-container-low transition-colors">
                            + ADD PLAYER TO ROSTER
                        </button>
                    </div>
                    <!-- Strategy & Tactical Instructions -->
                    <div class="bg-surface-container-highest rounded-[2rem] p-8">
                        <h3 class="text-xl font-headline font-bold mb-6">Tactical Strategy</h3>
                        <div class="space-y-6">
                            <div class="space-y-3">
                                <label class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Team Mentality</label>
                                <div class="grid grid-cols-3 gap-2">
                                    <button class="py-2 bg-white text-[10px] font-bold rounded-lg border-2 border-transparent hover:border-primary">DEFENSIVE</button>
                                    <button class="py-2 bg-primary text-white text-[10px] font-bold rounded-lg border-2 border-primary">BALANCED</button>
                                    <button class="py-2 bg-white text-[10px] font-bold rounded-lg border-2 border-transparent hover:border-primary">ATTACKING</button>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <label class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Instructions for Players</label>
                                <textarea class="w-full rounded-2xl bg-surface-container-lowest border-none p-4 text-sm focus:ring-2 focus:ring-primary placeholder:text-slate-400" placeholder="Focus on high-press defense and quick transition to the wings..." rows="4"></textarea>
                            </div>
                            <div class="flex items-center gap-4 bg-primary-fixed/30 p-4 rounded-2xl">
                                <span class="material-symbols-outlined text-primary" data-icon="lightbulb">lightbulb</span>
                                <p class="text-xs text-primary font-medium leading-relaxed">Coach, your team has a high academic score this week. <span class="font-bold">Focus</span> is at an all-time high.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        
        function getHeaders() {
            const token = localStorage.getItem('token');
            return {
                'Authorization': token ? `Bearer ${token}` : '',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            };
        }

        async function fetchAPI(endpoint, options = {}) {
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders(),
                ...options
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        let currentLineup = null;
        let availablePlayers = [];
        let formation = '4-4-2';
        let currentUser = null;

        const formations = {
            '4-4-2': {
                positions: [
                    { id: 'GK', x: 50, y: 90 },
                    { id: 'LB', x: 20, y: 70 },
                    { id: 'CB1', x: 35, y: 70 },
                    { id: 'CB2', x: 65, y: 70 },
                    { id: 'RB', x: 80, y: 70 },
                    { id: 'LM', x: 15, y: 50 },
                    { id: 'CM1', x: 35, y: 50 },
                    { id: 'CM2', x: 65, y: 50 },
                    { id: 'RM', x: 85, y: 50 },
                    { id: 'ST1', x: 40, y: 30 },
                    { id: 'ST2', x: 60, y: 30 }
                ]
            }
        };

        async function loadEditLineupData() {
            try {
                // Get lineup ID from URL
                const urlParams = new URLSearchParams(window.location.search);
                const lineupId = urlParams.get('id');
                
                if (!lineupId) {
                    showError('No lineup ID provided');
                    return;
                }

                currentUser = await fetchAPI('/current-user');
                
                // Load current lineup
                currentLineup = await fetchAPI(`/lineup/${lineupId}`);
                
                // Load available players
                const players = await fetchAPI('/player');
                availablePlayers = Array.isArray(players) ? players : (players.data || []);
                
                // Set formation from current lineup
                formation = currentLineup.formation || '4-4-2';
                
                renderLineupEditor();
                setupEventListeners();
                
            } catch (error) {
                console.error('Failed to load lineup data:', error);
                showError('Failed to load lineup data. Please refresh the page.');
            }
        }

        function renderLineupEditor() {
            if (!currentLineup) return;
            
            // Update match info
            const matchInfo = document.getElementById('match-info');
            if (matchInfo) {
                matchInfo.innerHTML = `
                    <h3 class="font-bold text-lg">${currentLineup.match?.home_team?.name || 'Home'} vs ${currentLineup.match?.away_team?.name || 'Away'}</h3>
                    <p class="text-sm text-on-surface-variant">Formation: ${formation}</p>
                `;
            }
            
            // Render pitch with current lineup
            renderPitch();
            
            // Render available players
            renderAvailablePlayers();
            
            // Update summary
            updateLineupSummary();
        }

        function renderPitch() {
            const pitch = document.getElementById('pitch');
            if (!pitch || !currentLineup) return;
            
            const currentFormation = formations[formation];
            
            pitch.innerHTML = currentFormation.positions.map(pos => {
                const lineupPlayer = currentLineup.players?.find(p => p.position === pos.id);
                const player = lineupPlayer ? availablePlayers.find(p => p.id === lineupPlayer.player_id) : null;
                
                return `
                    <div class="pitch-position" 
                         style="left: ${pos.x}%; top: ${pos.y}%;"
                         data-position="${pos.id}">
                        ${player ? `
                            <div class="player-on-pitch">
                                <div class="player-number">${player.jersey_number || '--'}</div>
                                <div class="player-name">${player.user?.name?.split(' ')[0] || 'P'}</div>
                            </div>
                        ` : `
                            <div class="empty-position">
                                <span class="material-symbols-outlined">add_circle</span>
                                <span>${pos.id}</span>
                            </div>
                        `}
                    </div>
                `;
            }).join('');
        }

        function renderAvailablePlayers() {
            const container = document.getElementById('available-players');
            if (!container) return;
            
            // Get players currently in lineup
            const lineupPlayerIds = currentLineup.players?.map(p => p.player_id) || [];
            
            container.innerHTML = availablePlayers.map(player => {
                const isInLineup = lineupPlayerIds.includes(player.id);
                return `
                    <div class="player-card ${isInLineup ? 'selected' : ''}" 
                         data-player-id="${player.id}" 
                         onclick="togglePlayerInLineup(${player.id})">
                        <div class="player-info">
                            <div class="player-number">${player.jersey_number || '--'}</div>
                            <div class="player-details">
                                <div class="player-name">${player.user?.name || `Player ${player.id}`}</div>
                                <div class="player-position">${player.position || 'Midfielder'}</div>
                            </div>
                        </div>
                        <div class="player-stats">
                            <span class="stat">${player.goals || 0} G</span>
                            <span class="stat">${player.assists || 0} A</span>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function togglePlayerInLineup(playerId) {
            const player = availablePlayers.find(p => p.id === playerId);
            const lineupPlayerIndex = currentLineup.players?.findIndex(p => p.player_id === playerId);
            
            if (lineupPlayerIndex === -1) {
                // Add player to lineup (add to first empty position)
                const emptyPosition = formations[formation].positions.find(pos => 
                    !currentLineup.players?.find(p => p.position === pos.id)
                );
                
                if (!emptyPosition) {
                    showError('Lineup is full. Remove a player first.');
                    return;
                }
                
                if (!currentLineup.players) currentLineup.players = [];
                currentLineup.players.push({
                    player_id: playerId,
                    position: emptyPosition.id
                });
            } else {
                // Remove player from lineup
                currentLineup.players.splice(lineupPlayerIndex, 1);
            }
            
            renderLineupEditor();
        }

        function updateLineupSummary() {
            const summary = document.getElementById('lineup-summary');
            if (summary && currentLineup) {
                const filledPositions = currentLineup.players?.length || 0;
                summary.innerHTML = `
                    <div class="summary-item">
                        <span>Players in Lineup:</span>
                        <span class="font-bold">${filledPositions}/11</span>
                    </div>
                    <div class="summary-item">
                        <span>Formation:</span>
                        <span class="font-bold">${formation}</span>
                    </div>
                `;
            }
        }

        async function updateLineup() {
            if (!currentLineup || !currentLineup.id) {
                showError('No lineup to update');
                return;
            }
            
            if (!currentLineup.players || currentLineup.players.length !== 11) {
                showError('Lineup must have exactly 11 players');
                return;
            }
            
            try {
                const updateData = {
                    formation: formation,
                    players: currentLineup.players.map(p => ({
                        player_id: p.player_id,
                        position: p.position
                    }))
                };
                
                await fetchAPI(`/lineup/${currentLineup.id}`, {
                    method: 'PUT',
                    body: JSON.stringify(updateData)
                });
                
                showSuccess('Lineup updated successfully!');
                
            } catch (error) {
                console.error('Failed to update lineup:', error);
                showError('Failed to update lineup. Please try again.');
            }
        }

        function setupEventListeners() {
            const updateBtn = document.getElementById('update-lineup');
            if (updateBtn) {
                updateBtn.addEventListener('click', updateLineup);
            }
            
            const searchInput = document.getElementById('player-search');
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    const searchTerm = e.target.value.toLowerCase();
                    const cards = document.querySelectorAll('.player-card');
                    
                    cards.forEach(card => {
                        const playerName = card.querySelector('.player-name').textContent.toLowerCase();
                        if (playerName.includes(searchTerm)) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }
        }

        function showSuccess(message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'fixed top-4 right-4 bg-green-50 border border-green-200 rounded-lg p-4 z-50';
            alertDiv.innerHTML = `
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Success</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>${message}</p>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(alertDiv);
            setTimeout(() => alertDiv.remove(), 3000);
        }

        function showError(message) {
            const alertDiv = document.createElement('div');
            alertDiv.className = 'fixed top-4 right-4 bg-red-50 border border-red-200 rounded-lg p-4 z-50';
            alertDiv.innerHTML = `
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Error</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <p>${message}</p>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(alertDiv);
            setTimeout(() => alertDiv.remove(), 3000);
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                window.location.href = '/login';
                return;
            }
            loadEditLineupData();
        });
    </script>
</body>

</html>