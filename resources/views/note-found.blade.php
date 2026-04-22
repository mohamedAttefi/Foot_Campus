<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#2d6a4f",
                        "on-tertiary-container": "#ffd29e",
                        "on-primary-fixed": "#002114",
                        "tertiary-fixed-dim": "#ffb95f",
                        "surface-container-highest": "#e0e3e5",
                        "surface-bright": "#f7f9fb",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#95d4b3",
                        "surface": "#f7f9fb",
                        "secondary-container": "#8fa7fe",
                        "on-surface-variant": "#404943",
                        "background": "#f7f9fb",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#b6c4ff",
                        "inverse-surface": "#2d3133",
                        "on-primary-fixed-variant": "#0e5138",
                        "on-surface": "#191c1e",
                        "inverse-on-surface": "#eff1f3",
                        "outline-variant": "#bfc9c1",
                        "on-secondary-fixed": "#00164e",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e0e3e5",
                        "error": "#ba1a1a",
                        "secondary": "#4059aa",
                        "on-secondary-container": "#1d3989",
                        "on-background": "#191c1e",
                        "secondary-fixed": "#dce1ff",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#a8e7c5",
                        "outline": "#707973",
                        "on-error": "#ffffff",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#663f00",
                        "primary": "#0f5238",
                        "on-tertiary-fixed-variant": "#653e00",
                        "surface-container": "#eceef0",
                        "primary-fixed-dim": "#95d4b3",
                        "on-tertiary-fixed": "#2a1700",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#b1f0ce",
                        "tertiary-fixed": "#ffddb8",
                        "surface-tint": "#2c694e",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary-fixed-variant": "#264191",
                        "tertiary-container": "#865400",
                        "on-primary": "#ffffff",
                        "surface-container-low": "#f2f4f6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "display": ["Manrope"],
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

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body min-h-screen flex flex-col">
    <!-- TopNavBar -->
    <nav class="bg-emerald-950/80 backdrop-blur-lg docked full-width top-0 z-50 flex justify-between items-center w-full px-8 py-4">
        <div class="text-2xl font-black italic tracking-tighter text-white">The Scholastic Pitch</div>
        <div class="hidden md:flex gap-8">
            <a class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 transition-colors hover:text-white hover:bg-white/10 rounded-md px-3 py-2" href="#">League</a>
            <a class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 transition-colors hover:text-white hover:bg-white/10 rounded-md px-3 py-2" href="#">Teams</a>
            <a class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 transition-colors hover:text-white hover:bg-white/10 rounded-md px-3 py-2" href="#">Matches</a>
            <a class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 transition-colors hover:text-white hover:bg-white/10 rounded-md px-3 py-2" href="#">Academia</a>
            <a class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 transition-colors hover:text-white hover:bg-white/10 rounded-md px-3 py-2" href="#">Stats</a>
        </div>
        <div class="flex items-center gap-4">
            <button class="font-manrope font-bold tracking-tight uppercase text-sm text-emerald-100/80 hover:text-white transition-colors">Login</button>
            <button class="bg-emerald-500 text-emerald-950 font-manrope font-bold tracking-tight uppercase text-sm px-6 py-2 rounded-md scale-95 transition-transform duration-150 hover:scale-100">Join League</button>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center relative overflow-hidden pt-20 pb-12">
        <!-- Background Visual -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover grayscale opacity-40 brightness-50" data-alt="dramatic night view of a professional soccer ball resting on empty green grass pitch under bright stadium floodlights with atmospheric haze" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAL-GNuNGvh8ZYG-nndpMmk2eIsVqd1ofkNrY_5HusBiEwpOx3Ug6KaBTaY1KG_1wWvnY-Z6dqhw0oGZvCHSWrRvBPZL77CAiACrpUAIp21uNv3CP3wnZ8JFwI3AkqkSv2pwXA_WyTBwyvfDAGrewBfHHL6Q8I9m2aU6hsmHI0ib95I8bKU0Xf1ZiEck0IVJXSD4S-pZRJq45I-EySlHm06qV2DzagZrfR__L6yG9onJWX06BGQmPv_Y8XKLk7jypXNsOfT_lQtjaU" />
            <div class="absolute inset-0 bg-gradient-to-b from-surface/20 via-surface/80 to-surface"></div>
        </div>
        <!-- 404 Content Container -->
        <div class="relative z-10 w-full max-w-4xl px-6 text-center">
            <div class="flex flex-col items-center">
                <!-- Large Heading -->
                <h1 class="font-display font-extrabold text-[12rem] md:text-[18rem] leading-none tracking-tighter text-primary/10 select-none">
                    404
                </h1>
                <!-- Floating Card with Glassmorphism -->
                <div class="glass-card -mt-24 md:-mt-40 p-8 md:p-12 rounded-xl shadow-2xl max-w-2xl border border-white/20">
                    <div class="mb-2">
                        <span class="font-display font-bold text-xs tracking-[0.2em] uppercase text-on-surface-variant">Match Official Ruling</span>
                    </div>
                    <h2 class="font-display font-bold text-3xl md:text-5xl text-on-surface mb-6 leading-tight">
                        Offside! We couldn't find that page.
                    </h2>
                    <p class="font-body text-lg text-on-surface-variant mb-10 max-w-lg mx-auto leading-relaxed">
                        The play you're looking for isn't on our tactical map. It might have been moved, deleted, or never existed in the first place.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a class="w-full sm:w-auto px-10 py-4 bg-gradient-to-r from-primary to-primary-container text-on-primary font-display font-bold text-base rounded-md shadow-lg hover:brightness-110 transition-all flex items-center justify-center gap-2" href="#">
                            <span class="material-symbols-outlined text-xl">dashboard</span>
                            Back to Dashboard
                        </a>
                        <a class="w-full sm:w-auto px-10 py-4 border-2 border-primary text-primary font-display font-bold text-base rounded-md hover:bg-primary/5 transition-all flex items-center justify-center gap-2" href="#">
                            <span class="material-symbols-outlined text-xl">home</span>
                            Go to Home
                        </a>
                    </div>
                </div>
                <!-- Subtle Pitch Detail -->
                <div class="mt-16 flex items-center gap-4 text-on-surface-variant/40">
                    <span class="material-symbols-outlined text-4xl">sports_soccer</span>
                    <div class="h-[1px] w-24 bg-current"></div>
                    <span class="font-display font-bold uppercase tracking-widest text-sm">Game Over</span>
                    <div class="h-[1px] w-24 bg-current"></div>
                    <span class="material-symbols-outlined text-4xl">sports_score</span>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-emerald-950 tonal-shift flex flex-col md:flex-row justify-between items-center px-12 py-10 w-full z-10">
        <div class="mb-6 md:mb-0">
            <div class="text-lg font-bold text-emerald-50 mb-2">The Scholastic Pitch</div>
            <p class="font-inter text-xs tracking-wide font-medium text-emerald-200/60 max-w-md">
                © 2024 The Scholastic Pitch Academy. All Rights Reserved. Precision in Play.
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            <a class="font-inter text-xs tracking-wide font-medium text-emerald-200/60 hover:text-emerald-300 transition-colors" href="#">Privacy Policy</a>
            <a class="font-inter text-xs tracking-wide font-medium text-emerald-200/60 hover:text-emerald-300 transition-colors" href="#">Terms of Service</a>
            <a class="font-inter text-xs tracking-wide font-medium text-emerald-200/60 hover:text-emerald-300 transition-colors" href="#">Support</a>
            <a class="font-inter text-xs tracking-wide font-medium text-emerald-200/60 hover:text-emerald-300 transition-colors" href="#">League Rules</a>
        </div>
    </footer>
</body>

</html>