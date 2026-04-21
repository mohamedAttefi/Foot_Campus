<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lineup Builder - The Scholastic Pitch</title>
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

        .pitch-pattern {
            background-image: repeating-linear-gradient(90deg,
                    rgba(255, 255, 255, 0.03) 0px,
                    rgba(255, 255, 255, 0.03) 40px,
                    transparent 40px,
                    transparent 80px);
        }

        .glass-sidebar {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- SideNavBar Component -->
    <aside class="fixed left-0 top-0 h-screen w-64 bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md text-emerald-900 dark:text-emerald-400 font-['Manrope'] tracking-wide text-sm font-semibold rounded-r-3xl shadow-xl shadow-emerald-900/5 flex flex-col p-6 overflow-y-auto z-50">
        <div class="mb-10 flex flex-col items-start">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic">The Scholastic Pitch</h1>
            <p class="text-[10px] uppercase tracking-[0.2em] opacity-60 mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Active state determined by current context: Matches/Tactics -->
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="leaderboard">leaderboard</span>
                <span>League Table</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="groups">groups</span>
                <span>Teams</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 group" href="#">
                <span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
                <span>Matches</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="query_stats">query_stats</span>
                <span>Player Stats</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 hover:bg-emerald-50/50 dark:hover:bg-emerald-900/20 text-slate-500 dark:text-slate-400 hover:text-emerald-600 group" href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span>Academic Hub</span>
            </a>
        </nav>
        <button class="mt-6 w-full bg-primary-container text-on-primary py-3 px-4 rounded-xl font-headline font-bold text-xs uppercase tracking-widest shadow-lg shadow-primary/20 hover:scale-95 transition-transform duration-150">
            Create Match
        </button>
        <div class="mt-auto pt-6 space-y-2 border-t border-slate-200/50">
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span>Settings</span>
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 text-slate-500 dark:text-slate-400 hover:text-emerald-600" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span>Support</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar Component -->
    <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 ml-64 max-w-[calc(100%-16rem)]">
        <div class="flex items-center gap-8">
            <div class="flex items-center bg-surface-container-highest/50 px-4 py-2 rounded-full min-w-[300px]">
                <span class="material-symbols-outlined text-outline mr-2 text-sm" data-icon="search">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm font-body w-full" placeholder="Search players or tactics..." type="text" />
            </div>
            <nav class="hidden md:flex items-center gap-6">
                <a class="text-slate-600 dark:text-slate-400 font-['Manrope'] font-medium text-sm transition-colors hover:text-emerald-500" href="#">Standings</a>
                <a class="text-emerald-700 dark:text-emerald-400 font-bold border-b-2 border-emerald-700 pb-2 font-['Manrope'] text-sm" href="#">Schedule</a>
                <a class="text-slate-600 dark:text-slate-400 font-['Manrope'] font-medium text-sm transition-colors hover:text-emerald-500" href="#">Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-4">
            <button class="p-2 text-outline hover:text-primary transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <div class="flex items-center gap-3 pl-4 border-l border-outline-variant/30">
                <div class="text-right">
                    <p class="text-xs font-bold text-on-surface">Coach Sterling</p>
                    <p class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Technical Director</p>
                </div>
                <img alt="User Profile Avatar" class="w-10 h-10 rounded-full object-cover ring-2 ring-primary/10" data-alt="portrait of a professional coach in his 40s wearing a navy polo shirt with academy logo, confident expression, soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4gW-iIEY_c0_TfSKXnWiJwd84jaLw4Hs2nbmJbhU42DGIOZzFu2nXlVR3RsY8zD_avvFhUYTFHx9uTd7DKGFQ5I_BNOqGyIDZJsRucy7vJtgekFvp1afhwvRRIqRVGExCIsguTqQPjIgxWRDSJ8l7hoe_pxPRGaGcrmQvEbmIAI2rJHC2ftg9w8ExPMt14K6cAnlbS_S9aP4fTAoOv1fkpeNbMpQVXRcl3IejnPdXCbkqK1KX1T0YztWZfqdfnMCgHXIfmvpX2wA" />
            </div>
        </div>
    </header>
    <main class="ml-64 p-8 min-h-[calc(100vh-4rem)]">
        <!-- Content Header -->
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Matchday Squad</h2>
                <p class="text-on-surface-variant font-label mt-1">St. Jude Academy vs. Oakridge Preparatory — October 24, 2024</p>
            </div>
            <div class="flex gap-3">
                <div class="relative group">
                    <button class="bg-surface-container-lowest px-4 py-2.5 rounded-xl flex items-center gap-2 font-label text-sm font-semibold text-on-surface shadow-sm border border-outline-variant/10">
                        Formation: <span class="text-primary font-bold">4-3-3 Attack</span>
                        <span class="material-symbols-outlined text-xs" data-icon="expand_more">expand_more</span>
                    </button>
                </div>
                <button class="bg-primary text-on-primary px-6 py-2.5 rounded-xl font-headline font-bold text-sm flex items-center gap-2 hover:opacity-90 transition-opacity">
                    Save Lineup <span class="material-symbols-outlined text-sm" data-icon="check_circle">check_circle</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-8 items-start">
            <!-- Tactical Pitch Area -->
            <div class="col-span-12 lg:col-span-8">
                <div class="relative aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl shadow-primary/10 bg-gradient-to-br from-primary to-primary-container p-6">
                    <!-- Pitch Markings Overlay -->
                    <div class="absolute inset-0 opacity-10 pitch-pattern"></div>
                    <div class="absolute inset-6 border-2 border-white/30 rounded-lg pointer-events-none">
                        <!-- Halfway line -->
                        <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-white/30"></div>
                        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 border-2 border-white/30 rounded-full"></div>
                        <!-- Penalty Areas -->
                        <div class="absolute left-0 top-1/4 bottom-1/4 w-32 border-2 border-l-0 border-white/30"></div>
                        <div class="absolute right-0 top-1/4 bottom-1/4 w-32 border-2 border-r-0 border-white/30"></div>
                    </div>
                    <!-- Tactical Viewport (Interactive Zone) -->
                    <div class="relative h-full w-full grid grid-cols-5 grid-rows-4">
                        <!-- Forward Line -->
                        <div class="col-start-4 col-span-1 flex flex-col justify-center items-center gap-12">
                            <!-- LW -->
                            <div class="flex flex-col items-center gap-2 group cursor-grab active:cursor-grabbing">
                                <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/50 flex items-center justify-center p-1 hover:scale-110 transition-transform">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="close up headshot of young athletic soccer player with focus and determination" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADF4SGjjCSSii08U5zE09kfm1tdF_T93cYc7UXFfF4CbEcmq8Ia9_r71Kauckj8owtkKgaJCwYw_xVwb2ZOVnVM5HHUsVW9KVvb0iuzAGtEyjYsusY2DMB4QpeYlaK3v7DDkt2z0vzZmrpq8rXPgAuQ4i2eORY5eMxVxEBdeGLXf6wH1OWsdHfQ5gjeX0AtzxurCUj5-AKVKZuw8dRcccwTM-fkaNajwQ1i8t9aDTFPu8gzntzJ3SGWOVs_8N8udUG0OgpIgm5RHk" />
                                </div>
                                <div class="bg-on-primary/90 px-3 py-1 rounded-full text-[10px] font-bold text-primary uppercase shadow-sm">M. Rashford</div>
                            </div>
                            <!-- RW -->
                            <div class="flex flex-col items-center gap-2 group cursor-grab active:cursor-grabbing">
                                <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/50 flex items-center justify-center p-1 hover:scale-110 transition-transform">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="headshot of a teenage soccer player smiling slightly, studio lighting, professional sports profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMgKg7BYhsN4n3pLfVdNsYoVp3kAzkWclDjepEAi18Z405fRQtuy08rTSxE05jbrSj5wxgA36HW7UNK5mqF5ZJymyhXspnGU5EnHr1dJ8BLTLNjvZXEWqxV-xerr9ZeKAY8ShYk-8KlILKWxcIYsQuZ7_k5oAnbgjzYwmn3xXZFR1OjIEGaD7S28CgPICSX0OkSKoxhySW06sE0qnS1kX_6hHAuXdFiw_xgYj2wlujTFkhP0FwKf61gIl7U-iEFgU-lCKiNLLP-UA" />
                                </div>
                                <div class="bg-on-primary/90 px-3 py-1 rounded-full text-[10px] font-bold text-primary uppercase shadow-sm">B. Saka</div>
                            </div>
                        </div>
                        <!-- Striker -->
                        <div class="col-start-5 col-span-1 flex items-center justify-center">
                            <div class="flex flex-col items-center gap-2 group cursor-grab active:cursor-grabbing">
                                <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-lg border-4 border-primary-fixed flex items-center justify-center p-1 hover:scale-110 transition-transform">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="portrait of a young african striker in a soccer jersey looking focused" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCka_fZ58NAxgsu__Yt1FPwzzJEZdXmiROexICRvJzTWAMfbwIm46nL8OjT5FbRGdEoUtLK-5UH-mBAlv0rRB8yVF1MH4bXq-cfdvHkRZQO6SJCMiZgVySduQPYEmyrf-uAIAVRTJ34pHh_VHWXCEuDqC7xTeS80MlNcqEEYrbPz8N8Ld1svc9Q5TIs0NNA8BVMGVyObpmkuWBDmhvQDVhGUo-OQ05KdwtheQylvEk8P3cbmJGCQe8a7zEbAV0Jpa_F354HgFb1FZk" />
                                </div>
                                <div class="bg-primary px-4 py-1.5 rounded-full text-xs font-bold text-on-primary uppercase shadow-lg">E. Haaland</div>
                            </div>
                        </div>
                        <!-- Midfield -->
                        <div class="col-start-3 col-span-1 flex flex-col justify-around items-center">
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/50 flex items-center justify-center p-1">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="young player professional headshot, clear blue sky background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALg3NFFBM6Qtv2vpN3ZTi7LTSofzHO1AxWMaABTGl-NJ8R5PGbaJaL3gGumNID2I4qlTsk1t92Usi7BhOoDAGsU4459RIxZkrYr_Qlhw3DNsEDarTERkwS_tpDSRzlC7haCovpqNgWY5KuCY29W4qWUtqhyd2FKO-qzcAbLiSpK2KJjlz1Yj8eck_pYqrl1bbPI3bX6XfDBvct7M4kYhmlIB0ITI8I2jKlS_bqjoMG7xjHbeQX7y_izKTtFv6aNFP6gX3GJz_cSzk" />
                                </div>
                                <div class="bg-on-primary/90 px-3 py-1 rounded-full text-[10px] font-bold text-primary uppercase shadow-sm">K. De Bruyne</div>
                            </div>
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/50 flex items-center justify-center p-1">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="professional male portrait with shallow depth of field" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA49SFNMnjDPL9pvDzeOq98CIcuSBCJaw0Cd-8HiPoeaGmb1BaZhB7M7tpeg_pEP7hkrIyYF0QYewnXjRj4bXcorgsT75AfDKHjhMWsM_lVF16O7_CDmDB3Bagk97i3slsS-KR7ub8cEzxPFvZ7cvuorgI7YKn8CmfPULdNxQceWLe2xE1TQhBXf8uvUBqKPpAudfuAy_ZxWc5pmWS-Ax6Wopw8p6jGYpWmH96RMwhmQz7w0BfYhMPyP4y7DXmFiVwjNxtO5mFVNWM" />
                                </div>
                                <div class="bg-on-primary/90 px-3 py-1 rounded-full text-[10px] font-bold text-primary uppercase shadow-sm">Pedri</div>
                            </div>
                        </div>
                        <!-- Defensive Mid -->
                        <div class="col-start-2 col-span-1 flex items-center justify-center">
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/50 flex items-center justify-center p-1">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="man in sports gear headshot professional photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK9AbqN7s6nAFWmfFUNDZOxWFuPNOmk9fVp_vyLFb_VgQsuGZ1YAi0F8eeEaaxILKHIeInwRZ3ntkYSx6F-6RW_ipBnhZzslpeeJF-o3TlSJABdsWxRIbE39cVwpZlesLKPb3hjEmv0rlrALgiGHqbKH75ptQIF-M3WfPDX3zIV2FZNDKlfCioDhfp38Y4hR65fJyxivPG2gbs3_87Laf0o7xY0GdMJVStMqB2Q0lsSdnFKqaeLFxPCG8S4aYJ_eIJNnTEXmPWVG4" />
                                </div>
                                <div class="bg-on-primary/90 px-3 py-1 rounded-full text-[10px] font-bold text-primary uppercase shadow-sm">Rodri</div>
                            </div>
                        </div>
                        <!-- Goalkeeper (The Anchor) -->
                        <div class="col-start-1 col-span-1 flex items-center justify-center">
                            <div class="flex flex-col items-center gap-2">
                                <div class="w-16 h-16 rounded-full bg-secondary/80 backdrop-blur-lg border-2 border-white/80 flex items-center justify-center p-1">
                                    <img class="w-full h-full rounded-full object-cover" data-alt="professional goalkeeper headshot looking determined" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZiw7QgFmmqCIZ_Y-83tn1DVpEQgsP81DeNQmisQJj3K4Y9X2n-Ga6CkQug_fg74IpcX8r3NlJLqVryoOT9LvgZyTnY4Sp4sbWSTMwf2P1e86Wll9IIzeMKHVyIGD3VUnK_HQ4uuT_Lom_HRrYozEfgcMopjtC8OgYuuccQIayC-dqXKdfYT3d2ZnSyNFPEOLd_-ggmWsRDHvBSI6-DPmSa031kF-7LI43h1I3AGyd0AWsXLUcer94xb7tC7EnKSESQ351LMSKvk0" />
                                </div>
                                <div class="bg-secondary px-3 py-1 rounded-full text-[10px] font-bold text-on-secondary uppercase shadow-sm">Ederson</div>
                            </div>
                        </div>
                    </div>
                    <!-- Pitch Stats Overlay -->
                    <div class="absolute bottom-6 left-6 right-6 flex justify-between">
                        <div class="flex gap-4">
                            <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl">
                                <p class="text-[10px] text-white/60 uppercase font-bold tracking-widest">Average Age</p>
                                <p class="text-xl font-headline font-bold text-white">19.4</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl">
                                <p class="text-[10px] text-white/60 uppercase font-bold tracking-widest">Academic Avg</p>
                                <p class="text-xl font-headline font-bold text-tertiary-fixed-dim">B+</p>
                            </div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-2xl flex items-center gap-3">
                            <span class="material-symbols-outlined text-white/60" data-icon="psychology">psychology</span>
                            <span class="text-sm font-bold text-white uppercase tracking-wider">Tactical Focus: Direct Play</span>
                        </div>
                    </div>
                </div>
                <!-- Bento Grid Bench/Notes -->
                <div class="mt-8 grid grid-cols-3 gap-6">
                    <div class="col-span-2 bg-surface-container-low rounded-3xl p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-headline font-bold text-lg text-on-surface">Substitutes (Max 7)</h3>
                            <span class="text-xs font-bold text-primary bg-primary-fixed px-3 py-1 rounded-full">4 / 7 Added</span>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-surface-container-lowest p-3 rounded-2xl shadow-sm border border-outline-variant/10 flex-1 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-slate-200"></div>
                                <div>
                                    <p class="text-xs font-bold">G. Martinelli</p>
                                    <p class="text-[10px] text-on-surface-variant">LW · 88 Fitness</p>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-3 rounded-2xl shadow-sm border border-outline-variant/10 flex-1 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-slate-200"></div>
                                <div>
                                    <p class="text-xs font-bold">L. Diaz</p>
                                    <p class="text-[10px] text-on-surface-variant">RW · 92 Fitness</p>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest p-3 rounded-2xl shadow-sm border border-outline-variant/10 flex-1 flex items-center gap-3 border-dashed border-2 border-outline-variant/50 justify-center">
                                <span class="material-symbols-outlined text-outline-variant" data-icon="add">add</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 bg-surface-container-lowest rounded-3xl p-6 shadow-sm border border-outline-variant/10">
                        <h3 class="font-headline font-bold text-lg text-on-surface mb-2">Tactical Note</h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">Ensure high-press in the first 15 mins. Oakridge struggle with early transition play. Focus on Rashford's width.</p>
                        <button class="mt-4 text-xs font-bold text-primary flex items-center gap-1">Edit Notes <span class="material-symbols-outlined text-sm" data-icon="edit">edit</span></button>
                    </div>
                </div>
            </div>
            <!-- Player Sidebar -->
            <div class="col-span-12 lg:col-span-4 space-y-6">
                <!-- Available Players Pool -->
                <div class="bg-surface-container-low rounded-3xl p-6 flex flex-col h-full max-h-[740px]">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-headline font-bold text-xl text-on-surface">Available Squad</h3>
                        <span class="material-symbols-outlined text-outline cursor-pointer" data-icon="filter_list">filter_list</span>
                    </div>
                    <div class="flex gap-2 mb-6 overflow-x-auto pb-2 scrollbar-hide">
                        <button class="bg-primary text-on-primary px-4 py-1.5 rounded-full text-xs font-bold shrink-0">All</button>
                        <button class="bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">DEF</button>
                        <button class="bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">MID</button>
                        <button class="bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">FWD</button>
                        <button class="bg-surface-container-highest text-on-surface-variant px-4 py-1.5 rounded-full text-xs font-bold shrink-0">GK</button>
                    </div>
                    <div class="space-y-4 overflow-y-auto pr-2 custom-scrollbar">
                        <!-- Player Card 1 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center justify-between group hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover grayscale group-hover:grayscale-0 transition-all" data-alt="headshot of a young male athlete with neutral expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD271RPL6hT8I_djJUzKpIsK4wiN7YNs99L1-o5sanld7vSptNppzOaZgmnGMy8u6cYXUHFHUgi-96TduLFq_1mmyj2MfDtBqffcPMGfuYlLyxMrjuhIJ9MdHCEUfOb0H5KiNyQeWqAvjyQ7E5e9Rb5xjI8bsoC_7z9hiL9XcYSrg1pqK6EGxWsFpHHhid8okaUl2SH4Ga3lkiDTj67S4xb4y5-ERL-iSbjyXKOwEfEbTloCbMPSBDQ_UGVmxJv1TmST87BtdbENNI" />
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white"></span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface">Julian Alvarez</h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-primary bg-primary-fixed px-1.5 py-0.5 rounded uppercase">FWD</span>
                                        <span class="text-[10px] text-on-surface-variant font-medium">94 OVR · 3.8 GPA</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-outline group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                        <!-- Player Card 2 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center justify-between group hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover grayscale group-hover:grayscale-0 transition-all" data-alt="headshot of a female soccer player determined expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAFWEJFlsRakkFKwLz2m3AwezVoONVFp2vt55bVrTzvB0LyopufpbaEh3R1oUbZsDN9DSURC2DzAEgiiDIgAgsxzLoAlzZScNW_oSDN1jaCBYrubCBhwyIrY_vPIzcL1NntuRX_OJ78HXXbBLH8rHEG8OJq5v-hJUaWqlg-GGM0blUaIpc0tgSqljpu3_W3f3JApuueb2Kz58fZzAQP48JocqvtfUfAHLhktPZMMG9UusAys-D07rB7IjwPiMbgyghSNcQ5Wv_2Lg" />
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white"></span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface">Alexia Putellas</h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-secondary bg-secondary-fixed px-1.5 py-0.5 rounded uppercase">MID</span>
                                        <span class="text-[10px] text-on-surface-variant font-medium">92 OVR · 4.0 GPA</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-outline group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                        <!-- Player Card 3 -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center justify-between group hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover grayscale group-hover:grayscale-0 transition-all" data-alt="professional male portrait studio background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA5w-EHOQ7prKRieudP5oepv_Lz7zRzsh0RbqrlMJ7TIDUuOd7CDCUbafj5vHFGtUBTDLQCithpZcAwLFycHyqm6-LbJKOokF4jx3ZWlWJqywFsn3ZN9tjX9iKlbF4lcXZ5IMSnjnDHRDuwNdvOaGbTAPT9K17k4S7U2RR4ybkb86LkKzPn_z_CxC6hrx6v_dAX3343hWGkVC5-HMv4bwMXEAyy1f7CzI1H6aP2G8ExcgjG9wDRhYSa-orX6Bgc4URGomz8riqTuE" />
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-error rounded-full border-2 border-white"></span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface">Rúben Dias</h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container-highest px-1.5 py-0.5 rounded uppercase">DEF</span>
                                        <span class="text-[10px] text-error font-bold italic">Injured</span>
                                    </div>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-outline-variant" data-icon="lock">lock</span>
                        </div>
                        <!-- More Player Cards... -->
                        <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center justify-between group hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover grayscale group-hover:grayscale-0 transition-all" data-alt="man smiling portrait, outdoors soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIBKYaOFxsyazI5DzXZLqoTsD1hBG0WvDSsZ3nrSLnbG8dW7ToRoaHUdciVADus9xpzLttKYlDgnIG3upgqeq-dYdIHveNX9JiiCIr2bkOiHf-3flY-c_1UEx26KsdHvbBYZdwdqxBc_qf68EwknCaKF0lVntnMNDlpqFszOIrCFJGwZDZDI1VvJ0fU4s8EgGiNCkzgNCBQ1Dnta8a4v-qeaUGAFYAlLL5mjlR9Jg4-B6famrqQ5L5yI8tivgtZn0X2UL5MOR52vE" />
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white"></span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface">Josko Gvardiol</h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container-highest px-1.5 py-0.5 rounded uppercase">DEF</span>
                                        <span class="text-[10px] text-on-surface-variant font-medium">89 OVR · 3.5 GPA</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-outline group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                        <div class="bg-surface-container-lowest p-4 rounded-2xl flex items-center justify-between group hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover grayscale group-hover:grayscale-0 transition-all" data-alt="professional portrait of young man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNuI472sUBptC3O7ouJZAMqUjrt2zdkglB9cCtg0KTqnvE0gAnCp_6B1OqKTDc5ZDFi-FelW0Fzsz3RTr-bE9uJtrgcKMyC9YD8_cH-nywxm5Yg1-xcrSfnPPs2bZZA6hjlqMyXY0xSQ93ckMfNG_WzlK_zlNKQpJ7fS1LgXLLaeCbjLVZYLtSj7yqYZqYeQ5jKCX-BqlgfoZ7rZGs1FaGqMNCvhas7pkVttBP85IATdRfJl1Soy0gJKcfsiIscLqAysAiJYaTAZY" />
                                    <span class="absolute -top-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white"></span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-on-surface">Jack Grealish</h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[10px] font-bold text-primary bg-primary-fixed px-1.5 py-0.5 rounded uppercase">FWD</span>
                                        <span class="text-[10px] text-on-surface-variant font-medium">88 OVR · 3.2 GPA</span>
                                    </div>
                                </div>
                            </div>
                            <button class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-outline group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                    <!-- Sidebar Footer -->
                    <div class="mt-auto pt-6">
                        <div class="bg-primary/5 p-4 rounded-2xl border border-primary/10">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-primary" data-icon="info">info</span>
                                <p class="text-xs font-bold text-on-surface">Squad Readiness</p>
                            </div>
                            <div class="w-full bg-surface-container-highest h-2 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[88%]"></div>
                            </div>
                            <p class="text-[10px] text-on-surface-variant mt-2">88% of squad is fit for full 90 minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e0e3e5;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #bfc9c1;
        }
    </style>
</body>

</html>