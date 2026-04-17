<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Player Dashboard | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0f5238",
                        "primary-container": "#2d6a4f",
                        "on-primary": "#ffffff",
                        "secondary": "#4059aa",
                        "secondary-container": "#8fa7fe",
                        "secondary-fixed": "#dce1ff",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
                        "outline-variant": "#bfc9c1",
                        "error": "#ba1a1a",
                        "tertiary-container": "#865400",
                        "on-tertiary-container": "#ffd29e",
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { vertical-align: middle; }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl z-50">
        <div class="mb-10">
            <h1 class="text-xl font-bold tracking-tighter text-emerald-900 uppercase italic font-headline">The Scholastic Pitch</h1>
            <p class="text-[10px] tracking-[0.2em] text-on-surface-variant font-bold uppercase mt-1">Elite Academy League</p>
        </div>
        <nav class="flex-grow space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 text-emerald-700 font-bold border-r-4 border-emerald-700 text-sm bg-emerald-50/50" href="#"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="#"><span class="material-symbols-outlined">leaderboard</span><span>League Table</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="#"><span class="material-symbols-outlined">groups</span><span>Teams</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="#"><span class="material-symbols-outlined">sports_soccer</span><span>Matches</span></a>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:text-emerald-600 text-sm" href="#"><span class="material-symbols-outlined">school</span><span>Academic Hub</span></a>
        </nav>
        <div class="mt-auto pt-6 border-t border-outline-variant/10 space-y-2">
            <button class="w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg hover:scale-[0.98] transition-transform">Create Match</button>
            <a class="flex items-center gap-3 px-4 py-3 text-slate-500 text-sm" href="#"><span class="material-symbols-outlined">settings</span><span>Settings</span></a>
        </div>
    </aside>

    <main class="ml-64 min-h-screen">
        <header class="sticky top-0 w-full z-40 bg-white/80 backdrop-blur-xl flex justify-between items-center h-16 px-8">
            <div class="relative">
                <span class="absolute inset-y-0 left-3 flex items-center text-slate-400">
                    <span class="material-symbols-outlined text-lg">search</span>
                </span>
                <input class="pl-10 pr-4 py-1.5 bg-slate-100 border-none rounded-full w-64 text-xs" placeholder="Search league..." type="text" />
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right">
                    <p id="user-display-name" class="text-xs font-bold text-on-surface">Loading...</p>
                    <p id="user-display-role" class="text-[10px] text-on-surface-variant">Player</p>
                </div>
                <img id="user-avatar" alt="Avatar" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/10" src="https://ui-avatars.com/api/?name=User" />
            </div>
        </header>

        <div class="p-8 space-y-8">
            <section class="flex flex-col md:flex-row gap-8 items-end">
                <div class="flex-grow">
                    <span class="text-[10px] font-bold tracking-[0.3em] text-primary uppercase mb-2 block">Performance Overview</span>
                    <h2 id="welcome-message" class="text-4xl font-extrabold font-headline tracking-tight">Welcome back.</h2>
                    <p class="text-on-surface-variant mt-1">Your match readiness is at <span class="text-primary font-bold">94%</span>.</p>
                </div>
                <div class="bg-primary-container text-on-primary px-6 py-4 rounded-2xl flex items-center gap-4 shadow-lg">
                    <span class="material-symbols-outlined text-3xl">verified</span>
                    <div>
                        <p class="text-[10px] uppercase font-bold opacity-80">League Status</p>
                        <p class="text-lg font-headline font-bold leading-tight">Eligible</p>
                    </div>
                </div>
            </section>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="md:col-span-8 bg-white rounded-[2rem] p-8 shadow-sm relative overflow-hidden">
                    <h3 class="text-2xl font-headline font-extrabold mb-6">My Next Match</h3>
                    <div class="flex items-center justify-between">
                        <div class="text-center flex-1">
                            <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center font-bold">YOU</div>
                            <span id="user-team" class="font-bold text-sm">St. Jude's</span>
                        </div>
                        <div class="italic font-black text-2xl text-slate-300">VS</div>
                        <div class="text-center flex-1">
                            <div class="w-16 h-16 bg-slate-100 rounded-full mx-auto mb-2 flex items-center justify-center"><span class="material-symbols-outlined">shield</span></div>
                            <span class="font-bold text-sm text-slate-500">Elite Prep</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 bg-gradient-to-br from-secondary/10 to-secondary-fixed/30 rounded-[2rem] p-8 border border-secondary/20">
                    <h3 class="text-xl font-headline font-bold text-secondary">Academic GPA</h3>
                    <div class="py-6">
                        <div id="gpa-value" class="text-6xl font-black text-secondary">0.00</div>
                        <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                            <div id="gpa-progress" class="bg-secondary h-full transition-all duration-700" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-5 bg-slate-100 rounded-[2rem] p-8 flex flex-col gap-6">
                    <h3 class="text-xl font-headline font-bold">Season Impact</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border-b-4 border-primary">
                            <p class="text-[10px] font-bold text-slate-500 uppercase">Goals</p>
                            <p id="total-goals" class="text-4xl font-black">00</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border-b-4 border-secondary">
                            <p class="text-[10px] font-bold text-slate-500 uppercase">Assists</p>
                            <p id="total-assists" class="text-4xl font-black">00</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-7 bg-white rounded-[2rem] p-8 shadow-sm">
                    <h3 class="text-xl font-headline font-bold mb-8">Match Ratings</h3>
                    <div id="ratings-chart" class="flex items-end justify-between gap-4 h-32">
                        </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const API_BASE = 'http://127.0.0.1:8000/api';
        const AUTH_TOKEN = localStorage.getItem('token');
        
        const headers = {
            'Authorization': `Bearer 22|X0b1jDmrAfMRxRGyowCCw5rZqVOOWaV4HDYUs6kO7ef73b4f`,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        };
        console.log(headers.Authorization)

        async function initDashboard() {
            if (!AUTH_TOKEN) {
                console.error("Auth token missing. Redirecting or showing error...");
                return;
            }

            try {
                // 1. Load User Profile
                const userRes = await fetch(`${API_BASE}/users/me`, { headers });
                if (!userRes.ok) throw new Error('Failed to fetch user');
                const user = await userRes.json();
                console.log(user)
                console.log(user)
                
                document.getElementById('welcome-message').innerText = `Welcome back, ${user.name.split(' ')[0]}.`;
                document.getElementById('user-display-name').innerText = user.name;
                document.getElementById('user-avatar').src = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name)}&background=0f5238&color=fff`;
                if (user.role) document.getElementById('user-display-role').innerText = user.role;

                const statsRes = await fetch(`${API_BASE}/match-stats`, { headers });
                if (statsRes.ok) {
                    const stats = await statsRes.json();
                    const totalGoals = stats.reduce((acc, curr) => acc + (curr.goals || 0), 0);
                    const totalAssists = stats.reduce((acc, curr) => acc + (curr.assists || 0), 0);
                    
                    document.getElementById('total-goals').innerText = totalGoals.toString().padStart(2, '0');
                    document.getElementById('total-assists').innerText = totalAssists.toString().padStart(2, '0');
                    
                    renderRatings(stats.slice(-6));
                }

                const gradeRes = await fetch(`${API_BASE}/grade`, { headers });
                if (gradeRes.ok) {
                    const grades = await gradeRes.json();
                    if (grades.length > 0) {
                        const gpa = (grades.reduce((acc, curr) => acc + curr.score, 0) / grades.length).toFixed(2);
                        document.getElementById('gpa-value').innerText = gpa;
                        // Assuming 4.0 is max GPA
                        document.getElementById('gpa-progress').style.width = `${Math.min((gpa / 4) * 100, 100)}%`;
                    }
                }
            } catch (err) {
                console.error('Dashboard Error:', err);
            }
        }

        function renderRatings(recent) {
            const container = document.getElementById('ratings-chart');
            container.innerHTML = recent.length ? '' : '<p class="text-slate-400 text-xs self-center w-full text-center">No recent match data</p>';
            
            recent.forEach((match, index) => {
                const rating = match.rating || 0;
                const bar = document.createElement('div');
                bar.className = "flex-1 bg-primary/10 rounded-t-lg relative group h-full";
                bar.innerHTML = `
                    <div class="absolute bottom-0 w-full bg-primary rounded-t-lg transition-all duration-500 hover:bg-primary-container" 
                         style="height: ${rating * 10}%" title="Rating: ${rating}">
                    </div>
                    <span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-slate-400 uppercase">M${index + 1}</span>
                `;
                container.appendChild(bar);
            });
        }

        // Initialize on load
        window.addEventListener('DOMContentLoaded', initDashboard);
    </script>
</body>
</html>