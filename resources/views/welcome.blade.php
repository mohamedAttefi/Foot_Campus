<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
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
                        "tertiary": "#663f00",
                        "primary-container": "#2d6a4f",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#ffb95f",
                        "surface-bright": "#f7f9fb",
                        "outline": "#707973",
                        "surface-container-lowest": "#ffffff",
                        "inverse-primary": "#95d4b3",
                        "surface-container": "#eceef0",
                        "error-container": "#ffdad6",
                        "primary": "#0f5238",
                        "on-surface": "#191c1e",
                        "outline-variant": "#bfc9c1",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed": "#00164e",
                        "on-secondary-fixed-variant": "#264191",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e0e3e5",
                        "on-tertiary-fixed-variant": "#653e00",
                        "on-background": "#191c1e",
                        "surface-dim": "#d8dadc",
                        "primary-fixed-dim": "#95d4b3",
                        "surface-container-high": "#e6e8ea",
                        "primary-fixed": "#b1f0ce",
                        "surface-tint": "#2c694e",
                        "surface": "#f7f9fb",
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary-container": "#ffd29e",
                        "on-secondary-container": "#1d3989",
                        "tertiary-container": "#865400",
                        "on-primary-fixed-variant": "#0e5138",
                        "on-primary-container": "#a8e7c5",
                        "background": "#f7f9fb",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#ffddb8",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "secondary-container": "#8fa7fe",
                        "on-tertiary-fixed": "#2a1700",
                        "secondary-fixed-dim": "#b6c4ff",
                        "secondary": "#4059aa",
                        "inverse-surface": "#2d3133",
                        "on-surface-variant": "#404943",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#dce1ff",
                        "on-primary-fixed": "#002114"
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
        }

        h1,
        h2,
        h3,
        h4,
        .brand-font {
            font-family: 'Manrope', sans-serif;
        }

        .glass-nav {
            backdrop-filter: blur(20px);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased">
    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
        <nav class="flex justify-between items-center px-8 h-20 w-full max-w-full">
            <div class="flex items-center gap-8">
                <span
                    class="text-2xl font-black italic text-emerald-900 dark:text-emerald-400 tracking-tighter brand-font">The
                    Scholastic Pitch</span>
                <div class="hidden md:flex items-center gap-6 font-['Manrope'] font-bold tracking-tight">
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors"
                        href="#">Leagues</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors"
                        href="#">Teams</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors"
                        href="#">Scout Portal</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors"
                        href="#">Coaching</a>
                    <a class="text-slate-600 dark:text-slate-400 hover:text-emerald-800 dark:hover:text-emerald-200 transition-colors"
                        href="#">Highlights</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/login') }}"
                    class="hidden lg:block text-slate-600 dark:text-slate-400 hover:text-emerald-800 px-4 py-2 font-semibold">Login</a>
                <a href="{{ url('/register') }}"
                    class="bg-primary hover:bg-primary-container text-white px-6 py-2.5 rounded-xl font-bold transition-all active:scale-[0.98]">Join
                    the Pitch</a>
            </div>
        </nav>
    </header>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative min-h-[921px] flex items-center overflow-hidden bg-surface">
            <div class="container mx-auto px-8 grid lg:grid-cols-2 gap-12 items-center relative z-10">
                <div class="max-w-2xl">
                    <span
                        class="inline-block bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1.5 rounded-full font-label text-xs font-bold uppercase tracking-widest mb-6">Established
                        2024</span>
                    <h1 class="text-6xl md:text-8xl font-extrabold text-on-surface leading-[1.1] tracking-tighter mb-8">
                        Where <span class="text-primary italic">Scholars</span> Become Legends
                    </h1>
                    <p class="text-lg md:text-xl text-on-surface-variant mb-10 leading-relaxed font-body max-w-lg">
                        The nation's elite developmental soccer league where academic excellence meets
                        professional-grade athletic performance.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <button
                            class="bg-gradient-to-r from-primary to-primary-container text-on-primary px-8 py-4 rounded-xl font-bold text-lg shadow-lg active:scale-95 transition-transform">
                            Join the Academy
                        </button>
                        <button
                            class="bg-secondary-fixed text-on-secondary-fixed px-8 py-4 rounded-xl font-bold text-lg active:scale-95 transition-transform flex items-center gap-2">
                            <span class="material-symbols-outlined">play_circle</span>
                            Watch Highlights
                        </button>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
                    <div
                        class="rounded-[2rem] overflow-hidden shadow-2xl relative z-10 aspect-[4/5] transform hover:-translate-y-2 transition-transform duration-700">
                        <img class="w-full h-full object-cover"
                            data-alt="Intense close-up of a young focused soccer player during a high-stakes match under dramatic stadium floodlights at dusk"
                            src="https://i.pinimg.com/736x/a6/cc/0a/a6cc0a9b88145eb67a9239d6cfa10590.jpg" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Bento Grid -->
        <section class="py-24 bg-surface-container-low">
            <div class="container mx-auto px-8">
                <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
                    <div>
                        <p class="text-primary font-label font-bold uppercase tracking-widest mb-2">Our Pillars</p>
                        <h2 class="text-4xl md:text-5xl font-black text-on-surface tracking-tight">Built for the Next
                            Generation</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-surface-container-lowest p-10 rounded-[1.5rem] shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                            <span class="material-symbols-outlined text-primary group-hover:text-white"
                                style="font-variation-settings: 'FILL' 1;">sports_soccer</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Elite Competition</h3>
                        <p class="text-on-surface-variant leading-relaxed">Battle against the highest-ranked regional
                            academies in a structured tournament format designed for maximum pressure and growth.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div
                        class="bg-surface-container-lowest p-10 rounded-[1.5rem] shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-secondary-container/20 rounded-xl flex items-center justify-center mb-8 group-hover:bg-secondary transition-colors">
                            <span class="material-symbols-outlined text-secondary group-hover:text-white"
                                style="font-variation-settings: 'FILL' 1;">school</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Academic Rigor</h3>
                        <p class="text-on-surface-variant leading-relaxed">We maintain strict GPA requirements and
                            provide dedicated tutoring hubs, ensuring our legends win both on and off the field.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div
                        class="bg-surface-container-lowest p-10 rounded-[1.5rem] shadow-sm hover:shadow-md transition-shadow group">
                        <div
                            class="w-14 h-14 bg-tertiary-fixed/30 rounded-xl flex items-center justify-center mb-8 group-hover:bg-tertiary transition-colors">
                            <span class="material-symbols-outlined text-tertiary group-hover:text-white"
                                style="font-variation-settings: 'FILL' 1;">visibility</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Professional Scouting</h3>
                        <p class="text-on-surface-variant leading-relaxed">Every match is recorded and analyzed by our
                            partner network of Tier 1 domestic and international scouts for maximum exposure.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- League Highlights -->
        <section class="py-24 bg-surface overflow-hidden">
            <div class="container mx-auto px-8">
                <div class="flex items-center justify-between mb-12">
                    <h2 class="text-4xl font-black text-on-surface tracking-tight">League Highlights</h2>
                    <button class="text-primary font-bold flex items-center gap-1 hover:underline">View All Reels <span
                            class="material-symbols-outlined">arrow_forward</span></button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Major Feature -->
                    <div class="relative aspect-video rounded-[2rem] overflow-hidden group">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            data-alt="Wide shot of a soccer stadium during a goal celebration with players embracing and a massive energetic crowd in soft focus"
                            src="https://i.pinimg.com/1200x/c7/16/a4/c716a492b7da6497ef7849d258e950a0.jpg" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-10">
                            <span
                                class="bg-primary text-on-primary text-[10px] uppercase font-black px-3 py-1 rounded-full w-fit mb-4">Goal
                                of the Week</span>
                            <h3 class="text-3xl font-bold text-white mb-2">The Emerald Strike</h3>
                            <p class="text-slate-300">Lucas Vance (St. Jude Academy) - 35 yard volley vs. West Shore
                                United.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="bg-surface-container-low rounded-[1.5rem] overflow-hidden group cursor-pointer">
                            <div class="aspect-video relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                    data-alt="A collage of young soccer players in athletic training sessions on a bright sunny morning field"
                                    src="https://i.pinimg.com/736x/e6/9e/f7/e69ef7170b1a83973eb55ae229f62a2b.jpg" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-white">play_arrow</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-bold text-lg mb-1">Defense Masterclass</h4>
                                <p class="text-on-surface-variant text-sm">Top saves from Matchday 12</p>
                            </div>
                        </div>
                        <div class="bg-surface-container-low rounded-[1.5rem] overflow-hidden group cursor-pointer">
                            <div class="aspect-video relative overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                    data-alt="Dynamic action shot of a soccer game under lights with motion blur conveying speed and intensity"
                                    src="https://i.pinimg.com/736x/d9/66/16/d9661606be73e4e08034fcd34088904e.jpg" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center">
                                        <span class="material-symbols-outlined text-white">play_arrow</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <h4 class="font-bold text-lg mb-1">Academy Showcase</h4>
                                <p class="text-on-surface-variant text-sm">The Road to the Finals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Teams -->
        <section class="py-24 bg-surface-container-low overflow-hidden">
            <div class="container mx-auto px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-on-surface mb-4">Elite Programs</h2>
                    <p class="text-on-surface-variant max-w-2xl mx-auto italic">Home to the premier academic-athletic
                        institutions in the country.</p>
                </div>
                <div class="flex gap-8 overflow-x-auto pb-8 no-scrollbar -mx-8 px-8">
                    <!-- Team Card 1 -->
                    <div
                        class="flex-shrink-0 w-80 bg-surface-container-lowest p-8 rounded-[2rem] text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-slate-400">shield</span>
                        </div>
                        <h4 class="text-xl font-bold mb-1">North Hill Academy</h4>
                        <p class="text-primary text-sm font-bold uppercase tracking-widest mb-4">The Eagles</p>
                        <div class="flex justify-center gap-2">
                            <span
                                class="bg-secondary-container/20 text-on-secondary-container text-[10px] px-2 py-1 rounded-full font-bold">12-2-0</span>
                            <span
                                class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant text-[10px] px-2 py-1 rounded-full font-bold">3.8
                                Avg GPA</span>
                        </div>
                    </div>
                    <!-- Team Card 2 -->
                    <div
                        class="flex-shrink-0 w-80 bg-surface-container-lowest p-8 rounded-[2rem] text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-slate-400">auto_awesome</span>
                        </div>
                        <h4 class="text-xl font-bold mb-1">Sterling Prep</h4>
                        <p class="text-primary text-sm font-bold uppercase tracking-widest mb-4">The Knights</p>
                        <div class="flex justify-center gap-2">
                            <span
                                class="bg-secondary-container/20 text-on-secondary-container text-[10px] px-2 py-1 rounded-full font-bold">10-4-1</span>
                            <span
                                class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant text-[10px] px-2 py-1 rounded-full font-bold">3.9
                                Avg GPA</span>
                        </div>
                    </div>
                    <!-- Team Card 3 -->
                    <div
                        class="flex-shrink-0 w-80 bg-surface-container-lowest p-8 rounded-[2rem] text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-slate-400">bolt</span>
                        </div>
                        <h4 class="text-xl font-bold mb-1">Crestwood School</h4>
                        <p class="text-primary text-sm font-bold uppercase tracking-widest mb-4">The Thunder</p>
                        <div class="flex justify-center gap-2">
                            <span
                                class="bg-secondary-container/20 text-on-secondary-container text-[10px] px-2 py-1 rounded-full font-bold">14-0-0</span>
                            <span
                                class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant text-[10px] px-2 py-1 rounded-full font-bold">3.6
                                Avg GPA</span>
                        </div>
                    </div>
                    <!-- Team Card 4 -->
                    <div
                        class="flex-shrink-0 w-80 bg-surface-container-lowest p-8 rounded-[2rem] text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-slate-400">landscape</span>
                        </div>
                        <h4 class="text-xl font-bold mb-1">Peakview Institute</h4>
                        <p class="text-primary text-sm font-bold uppercase tracking-widest mb-4">The Summit</p>
                        <div class="flex justify-center gap-2">
                            <span
                                class="bg-secondary-container/20 text-on-secondary-container text-[10px] px-2 py-1 rounded-full font-bold">9-5-0</span>
                            <span
                                class="bg-tertiary-fixed/30 text-on-tertiary-fixed-variant text-[10px] px-2 py-1 rounded-full font-bold">4.0
                                Avg GPA</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="py-24 px-8">
            <div class="container mx-auto">
                <div class="bg-primary-container rounded-[3rem] p-12 md:p-20 relative overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] pointer-events-none">
                    </div>
                    <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-5xl md:text-6xl font-black text-on-primary-container mb-6 leading-tight">
                                Registration Now Open</h2>
                            <p class="text-primary-fixed-dim text-xl mb-10 max-w-md">Secure your spot in the 2024-2025
                                Academy Season. Select your pathway below to begin the application process.</p>
                            <div class="flex flex-col gap-4">
                                <a class="group flex items-center justify-between bg-on-primary-container p-6 rounded-2xl hover:translate-x-2 transition-transform"
                                    href="#">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center">
                                            <span class="material-symbols-outlined text-white">person</span>
                                        </div>
                                        <span class="text-primary text-xl font-bold tracking-tight">Apply as a
                                            Player</span>
                                    </div>
                                    <span class="material-symbols-outlined text-primary">arrow_forward</span>
                                </a>
                                <a class="group flex items-center justify-between bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/10 hover:bg-white/20 transition-all"
                                    href="#">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                                            <span
                                                class="material-symbols-outlined text-on-primary-container">groups</span>
                                        </div>
                                        <span
                                            class="text-on-primary-container text-xl font-bold tracking-tight">Register
                                            a Team</span>
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-on-primary-container">arrow_forward</span>
                                </a>
                                <a class="group flex items-center justify-between bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/10 hover:bg-white/20 transition-all"
                                    href="#">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                                            <span
                                                class="material-symbols-outlined text-on-primary-container">sports</span>
                                        </div>
                                        <span
                                            class="text-on-primary-container text-xl font-bold tracking-tight">Official
                                            Credentials</span>
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-on-primary-container">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:block relative">
                            <img class="rounded-3xl shadow-2xl rotate-3"
                                data-alt="A cinematic, low-angle shot of a leather soccer ball sitting on a perfectly manicured green grass pitch at sunrise"
                                src="https://i.pinimg.com/1200x/80/51/7b/80517b55123f0a5c9af56ec707bfc7ee.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-slate-900 dark:bg-black w-full py-12">
        <div class="flex flex-col md:flex-row justify-between items-center px-12 border-t border-slate-800 pt-12">
            <div class="mb-8 md:mb-0">
                <span class="text-emerald-400 font-black text-2xl brand-font italic tracking-tighter">The Scholastic
                    Pitch</span>
                <p class="font-['Inter'] text-sm uppercase tracking-widest text-slate-400 mt-2">© 2024 The Scholastic
                    Pitch. Engineered for the Elite.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8 font-['Inter'] text-sm uppercase tracking-widest">
                <a class="text-slate-400 hover:text-emerald-400 transition-colors hover:underline" href="#">Privacy
                    Policy</a>
                <a class="text-slate-400 hover:text-emerald-400 transition-colors hover:underline" href="#">Terms of
                    Play</a>
                <a class="text-slate-400 hover:text-emerald-400 transition-colors hover:underline" href="#">Scout
                    Accreditation</a>
                <a class="text-slate-400 hover:text-emerald-400 transition-colors hover:underline" href="#">Coach
                    Handbook</a>
            </div>
        </div>
    </footer>
</body>

</html>