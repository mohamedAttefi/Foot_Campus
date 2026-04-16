<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Scholastic Pitch | Team Profile</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
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
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .pitch-gradient {
            background: linear-gradient(135deg, #0f5238 0%, #2d6a4f 100%);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface font-body text-on-surface">
    <!-- TopNavBar -->
    <nav
        class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 border-none">
        <div class="flex items-center gap-8">
            <span class="text-xl font-extrabold font-headline tracking-tighter text-primary italic">Scholastic
                Pitch</span>
            <div class="hidden md:flex items-center gap-6">
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors"
                    href="#">Standings</a>
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors"
                    href="#">Schedule</a>
                <a class="text-slate-600 font-medium text-sm hover:text-emerald-500 transition-colors"
                    href="#">Awards</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative hidden sm:block">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm"
                    data-icon="search">search</span>
                <input
                    class="pl-10 pr-4 py-1.5 bg-surface-container-highest border-none rounded-full text-sm focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest w-64 transition-all"
                    placeholder="Search teams..." type="text" />
            </div>
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <div class="flex items-center gap-2 pl-2 border-l border-outline-variant/20">
                <span class="text-sm font-semibold hidden md:block">Profile</span>
                <img alt="User Profile Avatar" class="w-8 h-8 rounded-full object-cover"
                    data-alt="Close-up portrait of a young man with a friendly expression, natural lighting, soft urban background"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDew6CP0SrdRYK0wYg3ih92ydTCeO2KyOKPXv5kexpNxz7s2fWWW2Aq4Aor6Fp2T3ibpdT7w1OgdsfDUFZwRsc1y7k8gubSZvwB3UrV0WTSA2bmwgYZzCWzdlr4REIE9qwaeBb9a-QVWAZBE1gcgNzmPx27C-C7lzgjqIE3JgEMg-IOl0WfxH0VkkIb_uKf352Y_Blyboz7iplODwP8gDZ9Vz-zV_FPjqvLmGRi5l2qR18Xl_D1xB1lva00knNt9IrmnsgjgZ-xRGM" />
            </div>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-4 sm:px-8 py-8 space-y-10">
        <!-- Team Banner Section -->
        <section class="relative h-[400px] rounded-3xl overflow-hidden shadow-2xl shadow-primary/10">
            <img alt="Team banner" class="absolute inset-0 w-full h-full object-cover"
                data-alt="Wide angle view of a lush green football stadium under dramatic sunset skies with lens flare and atmospheric haze"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1MHxE4gDt-717WcnJEb8P8aQXzkX4OSnlbO88rx8iTJ1kLGkCvD28WPvx07eBfjAC4vujRwtlI221_-zE-uLJfpPvQr_27qSgMM6oKehDDhMUz-YjpARpP6Vh-87RBhArHe0TOPfXKMEo-4m4tzd7EWJvFlDsrtj975S6fRwOGrNdfaLUUUgt0Qt0MtSau4hmJiCBOCroJqikLdNQcIBvhKvQ9UQ1zMir0JOiCRQr82NGP67PS1ILLYL84SkmE33KvbPBuUulJFs" />
            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
            <div
                class="absolute bottom-0 left-0 p-8 sm:p-12 w-full flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div class="flex items-center gap-6">
                    <div
                        class="w-24 h-24 sm:w-32 sm:h-32 bg-white rounded-2xl p-4 shadow-xl flex items-center justify-center transform -rotate-3">
                        <span class="material-symbols-outlined text-6xl text-primary" data-icon="shield"
                            style="font-variation-settings: 'FILL' 1;">shield</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <span
                                class="bg-tertiary-container text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Division
                                1 Elite</span>
                            <span class="text-primary-fixed-dim font-bold text-sm">Est. 1924</span>
                        </div>
                        <h1 class="text-white font-headline text-4xl sm:text-6xl font-extrabold tracking-tight">Oakwood
                            Lions</h1>
                        <p class="text-primary-fixed-dim font-medium mt-1">St. Jude’s Academic Academy • London, UK</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <button
                        class="pitch-gradient text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:scale-105 transition-transform">
                        <span class="material-symbols-outlined" data-icon="star"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        Follow Team
                    </button>
                </div>
            </div>
        </section>
        <!-- Stats Grid (Bento) -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div
                class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm border-none">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">League
                    Rank</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-5xl font-headline font-extrabold text-primary">02</span>
                    <span class="text-on-surface-variant font-medium">/ 18</span>
                </div>
                <div class="flex items-center gap-1 text-emerald-600 text-xs font-bold">
                    <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                    <span>+1 from last week</span>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm border-none">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Team
                    GPA</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-5xl font-headline font-extrabold text-secondary">3.8</span>
                    <span class="text-on-surface-variant font-medium">AVG</span>
                </div>
                <div class="bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 rounded text-[10px] w-fit font-bold">
                    Academic Excellence Award</div>
            </div>
            <div
                class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm border-none">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Goals
                    Scored</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-5xl font-headline font-extrabold text-primary">42</span>
                </div>
                <div class="text-on-surface-variant text-xs font-medium">Season Record: 48 (2022)</div>
            </div>
            <div
                class="bg-surface-container-lowest p-6 rounded-2xl flex flex-col justify-between h-40 shadow-sm border-none">
                <span class="text-on-surface-variant font-label text-xs uppercase font-bold tracking-widest">Clean
                    Sheets</span>
                <div class="flex items-baseline gap-2">
                    <span class="text-5xl font-headline font-extrabold text-primary">12</span>
                </div>
                <div class="text-on-surface-variant text-xs font-medium">Defensive Rank: #1</div>
            </div>
        </section>
        <!-- Content Grid: Roster & Results -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Roster Section -->
            <div class="lg:col-span-2 space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-headline font-bold">Team Roster</h2>
                    <button class="text-primary font-bold text-sm hover:underline">View Full Stats</button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Player Card -->
                    <div
                        class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="relative">
                            <img alt="Player Avatar" class="w-16 h-16 rounded-xl object-cover"
                                data-alt="Close up of a determined young football player in a green jersey, focused expression, outdoor training ground lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmUvj8Mkeo4TNsyt42CAhtri9QvwbKAYa-YfyDCkQWEIacUwVFlB73cYRKHmfux0z6hxYdvR8urv9NHBkFEtPq3bxyOUynRq26MgpV_2DYGiLyvl2tsZ1-aIQFYbrP_zcipENUh5gClvdRWekxWlwcVM7Fb6oAAv4sr0TXSPaTWHUHvokVTk2u0x_zB2_HJBTlOtLg7-sjUXDx-CvS-mV5seqArjQHZfF7Tc4fElsvKq6K3c1fS1UvkHFFmhBVO2wsc3AQwbJ1BSo" />
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold w-6 h-6 flex items-center justify-center rounded-full border-2 border-white">10</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors">Marcus
                                Henderson</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-on-surface-variant">Forward</span>
                                <span class="w-1 h-1 bg-outline-variant rounded-full"></span>
                                <span class="text-xs font-bold text-secondary">GPA 4.0</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary"
                            data-icon="chevron_right">chevron_right</span>
                    </div>
                    <!-- Player Card -->
                    <div
                        class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="relative">
                            <img alt="Player Avatar" class="w-16 h-16 rounded-xl object-cover"
                                data-alt="Portrait of a female athlete in sports gear looking confident, bright daylight, sports field background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiFybMohNsWHZVGcmHnN3jiwuC-e4RklSquB4ARboAa29pipDP3ZRWZJ4q92QmwOK-8FYwPs9_wjTBqhi_BoDrPhTK-96YxgDL6yivVFmwWLwZtqUnM6X-1zJIxsRGNbkeZgYZVViE1pn_K7OcO3mE19WLUlLFz4QgwTRKTBm2Sx60doujeEXi2N63t46pKA7UVOoCQl90Ixg0ZqRNgZitEP5uUZEDiLnMsJMI0LmbLlobMXWWMGy3YR33PL0j--sQK69iaKYa5cQ" />
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold w-6 h-6 flex items-center justify-center rounded-full border-2 border-white">01</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors">Elena Rossi
                            </h3>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-on-surface-variant">Goalkeeper</span>
                                <span class="w-1 h-1 bg-outline-variant rounded-full"></span>
                                <span class="text-xs font-bold text-secondary">GPA 3.7</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary"
                            data-icon="chevron_right">chevron_right</span>
                    </div>
                    <!-- Player Card -->
                    <div
                        class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="relative">
                            <img alt="Player Avatar" class="w-16 h-16 rounded-xl object-cover"
                                data-alt="Profile of a young soccer player in action during golden hour, intense focus, blurred green field background"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWmztR94HG-YxnnfwY2ASFhtRLCbEBoKPm48HE3bdZQ-3HEzaVr2ngP31OwfgI0xHaH-jYySke0HvsniAnMdhgAEz2zozCiXOb1aZeWSQIkklbJcGzkRyYxjs9bHMUOAMXHWd5nKoIL_ngsED2sNiz1vRP00mKKC7036yESMt6hyfGwkLsTmOVOe8PVSzn-8ml5ZKnAx53SV91tPoJCNeQZ5IQ_LDQGnbyytvD06fYQXXwa-kqXuNVKYa9Bs7t_tn4cT5o7TVCljw" />
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold w-6 h-6 flex items-center justify-center rounded-full border-2 border-white">04</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors">Julian
                                Banks</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-on-surface-variant">Midfielder</span>
                                <span class="w-1 h-1 bg-outline-variant rounded-full"></span>
                                <span class="text-xs font-bold text-secondary">GPA 3.9</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary"
                            data-icon="chevron_right">chevron_right</span>
                    </div>
                    <!-- Player Card -->
                    <div
                        class="bg-surface-container-lowest p-4 rounded-2xl flex items-center gap-4 hover:bg-surface-container-low transition-colors cursor-pointer group">
                        <div class="relative">
                            <img alt="Player Avatar" class="w-16 h-16 rounded-xl object-cover"
                                data-alt="Candid portrait of a young woman with curly hair, natural outdoor lighting, smiling slightly"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYFDq1Em1krqLWDFT48cTZnGVK8fyLPxyDJFy--3tskoH-0fZiMoB57sddrUgcfSGu1ynHliKYnA0ZBOCAdMkdyq6K20ok6PZCD11qIdsHyBa2J-JRqQmDBJHjHnEI6-ol6U6oJjmibuxLg3Pv47nPNLpeOGTOL5LayAx67YpSD2P_lE_7gf06B1rSInP-UIaHtlC6x-cBCwK_g741RTuN8x7dAwMPk-DAOv9TjtoD_QhKHmrh2ZGj7TaIFXX36-b70BvEJYJlgzE" />
                            <span
                                class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold w-6 h-6 flex items-center justify-center rounded-full border-2 border-white">08</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-on-surface group-hover:text-primary transition-colors">Sarah
                                Jenkins</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-on-surface-variant">Defender</span>
                                <span class="w-1 h-1 bg-outline-variant rounded-full"></span>
                                <span class="text-xs font-bold text-secondary">GPA 3.5</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-primary"
                            data-icon="chevron_right">chevron_right</span>
                    </div>
                </div>
            </div>
            <!-- Season Results Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-headline font-bold">Recent Results</h2>
                <div class="bg-surface-container-low rounded-3xl p-6 space-y-4 shadow-inner">
                    <!-- Match Result -->
                    <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Matchday
                                24</span>
                            <span
                                class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded uppercase">W</span>
                        </div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">Oakwood</div>
                                <div class="text-2xl font-headline font-extrabold text-primary">3</div>
                            </div>
                            <div class="text-outline-variant font-bold">vs</div>
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">North High</div>
                                <div class="text-2xl font-headline font-extrabold text-on-surface-variant">1</div>
                            </div>
                        </div>
                    </div>
                    <!-- Match Result -->
                    <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Matchday
                                23</span>
                            <span
                                class="text-[10px] font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded uppercase">D</span>
                        </div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">City Academy</div>
                                <div class="text-2xl font-headline font-extrabold text-on-surface-variant">0</div>
                            </div>
                            <div class="text-outline-variant font-bold">vs</div>
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">Oakwood</div>
                                <div class="text-2xl font-headline font-extrabold text-primary">0</div>
                            </div>
                        </div>
                    </div>
                    <!-- Match Result -->
                    <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Matchday
                                22</span>
                            <span
                                class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded uppercase">W</span>
                        </div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">Oakwood</div>
                                <div class="text-2xl font-headline font-extrabold text-primary">4</div>
                            </div>
                            <div class="text-outline-variant font-bold">vs</div>
                            <div class="text-center flex-1">
                                <div class="font-bold text-xs truncate">Riverdale</div>
                                <div class="text-2xl font-headline font-extrabold text-on-surface-variant">2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Section -->
        <section class="space-y-6">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-headline font-bold">Match Highlights</h2>
                <button
                    class="bg-surface-container-highest text-on-surface font-bold px-4 py-2 rounded-xl text-sm hover:bg-surface-container-high transition-colors">View
                    All Photos</button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 h-[500px]">
                <div class="col-span-2 row-span-2 relative rounded-3xl overflow-hidden group">
                    <img alt="Highlight photo"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="Dynamic shot of a soccer player kicking a ball during a match, dirt flying, intense emotion, stadium lights background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFh9ZAadB_F9qkfPAcLertZJKjQqu_7ZqIxh1ouOCGK6fBHbN4WbYQPrC8zrHkD7AxiYm18gpCQIeWRnO_7o3mf-9okMbay7ceR0WvZI-awhm7AyporpqoynZAZTtxhDYoYjiNj_bNVPMxhfN83_WgETBFZcbBVEai_7kBI2vzsH4IPdZ6Z9qvZfpd4lddWxob5Jkw742Pe7KhFXlzFsc8cEDLy7gTXZuX2_cRnFAUtITgwc-XLcCitP7nboedzyXwu44CBkXKG-k" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                        <p class="text-white font-bold">Winning Goal vs North High</p>
                        <p class="text-white/70 text-xs">Photographer: Jane Doe</p>
                    </div>
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img alt="Highlight photo"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="Crowd of students cheering in the stands with school banners and scarves, colorful and energetic atmosphere"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQr0BKSMgESMhAkpxKeZQa-N8FWfH8nSxA3WkV_n_TkGS2eDPN2cQ-lydJMfN0jCepDgW7prpNe2AnFWfrhQxaEboZ7KFXOwdPpOqLcyRZMz8yNaWOEZvVrLHTIsNnv2m2JL72KwQKQkdosVZED_K0Um6rYaFIJxm2he28nWULbPKAnQCDzzEtKmkYCY1D8UxEan4UUIMFTj-BMLH6kziXildAA7OmaEfEd_gOgDJrjmAXKZ9YCBZk6LIT8c0-oeTwQY2oTpf8t8U" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img alt="Highlight photo"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="Close up of a soccer ball and cleats on grass, wet from dew, professional sports photography style"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl8zjY_PEc0yEOXObMJVx-g6nKw8t36sF10xGzrdQ9KQdZ_MukXmro6atSpVuDbRq-ciiKp231FQlLEB1-az-ZZKnqpA6Jn_i9TlabwGOu5nlbllTdGRrBP9Pp0gptCfozq0Choug-x70CzbIhF3QFbrD6Tq8fq2VPmZWi1z6SnQv1osXRz-j2WQqmVBzFNX6tD-v6ALfoyTT3SZt6MsSN-95iK0ZE7tkn-fvaba-PvlvuktrNuCRqy1hQNG5EqFcvshRA5JN12YI" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img alt="Highlight photo"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="Team huddle on the field during sunset, silhouettes of players, inspiring and collaborative mood"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtlf42_b4HzG9ijh-oCTk6JEak36mh81AQZfCpmiD0mL0lbN6oX6HI5upAMjMXFtNk5s0VGygiI_9YfprzZJlFhxs_Y76HXkEmY0rEiLuGMTzVk9gxS5sjW5E5rVR-TbR7VM8EvH47Wgk7vKEW-68JufuVRVzHos0HbU97LSvkiu4mamy0ObcMSVwUi0TVIMCdv0Nu6jzWbZjl0LC-Mgf5mJsyNSAqTZINLnd3umPi98hDZkS3uC8A6YS_rhZK-8ZlKfekLdNf2c8" />
                </div>
                <div class="relative rounded-3xl overflow-hidden group">
                    <img alt="Highlight photo"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        data-alt="A coach explaining strategy on a white board in the locker room, focused players, cinematic lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZtWNd4J5gcHEArHF96iw5oYOVFeOGJrmcPq6EkvZe6ORiMn-vFF0ERNJcq_Ekiq17uL55W5XwuC2arBgpXKDCsGnIIEz0f_M5ayK-R5X7S68_cEMcgVdhDjre3K2Ux8Ap9KZMnZl_8Jo_g8yg5xooahlPzrcG5gpcxo9KKYCCpyhld8qr5gtNKtM5Ak8duKqH5zNqtOkFPIgG1oK7ucCRbSrthu9XW2KiBQvkZ7wSacuDvW_6hIoyw5K6esG0vgERuhPtCObcV-o" />
                </div>
            </div>
        </section>
        <!-- Footer Call to Action -->
        <footer class="bg-primary-container rounded-[2rem] p-10 sm:p-20 text-center space-y-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                <span class="material-symbols-outlined text-[300px] absolute -top-20 -left-20"
                    data-icon="sports_soccer">sports_soccer</span>
                <span class="material-symbols-outlined text-[300px] absolute -bottom-20 -right-20"
                    data-icon="school">school</span>
            </div>
            <h2
                class="text-3xl sm:text-5xl font-headline font-extrabold text-on-primary-container relative z-10 leading-tight">
                Support the Lions at their <br /> next away match.</h2>
            <div class="flex flex-wrap justify-center gap-4 relative z-10">
                <button
                    class="bg-white text-primary px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all">Buy
                    Tickets</button>
                <button
                    class="bg-primary text-white border border-primary-fixed/20 px-10 py-4 rounded-xl font-bold hover:bg-on-primary-fixed-variant transition-all">Team
                    Merch</button>
            </div>
            <p class="text-on-primary-container/60 text-sm font-medium relative z-10">Proceeds go directly to the
                Oakwood Academic Sports Fund.</p>
        </footer>
    </main>
    <!-- Bottom Spacing -->
    <div class="h-20"></div>
</body>

</html>