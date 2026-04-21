<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Academic Results | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    fontFamily: {
                        headline: ["Manrope"],
                        body: ["Inter"],
                        label: ["Inter"]
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
    <aside class="fixed left-0 top-0 h-full w-64 rounded-r-3xl bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-md flex flex-col p-6 overflow-y-auto shadow-xl shadow-emerald-900/5 z-50">
        <div class="mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">school</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold tracking-tighter text-emerald-900 dark:text-emerald-100 uppercase italic leading-none">The Scholastic Pitch</h1>
                    <p class="text-[10px] font-headline tracking-widest text-on-surface-variant uppercase mt-1">Elite Academy League</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">leaderboard</span>
                League Table
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">groups</span>
                Teams
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">sports_soccer</span>
                Matches
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 hover:bg-emerald-50/50 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">query_stats</span>
                Player Stats
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-emerald-700 dark:text-emerald-300 font-bold border-r-4 border-emerald-700 bg-emerald-50/50 dark:bg-emerald-900/20 transition-all duration-300 font-headline tracking-wide text-sm font-semibold" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">school</span>
                Academic Hub
            </a>
        </nav>
        <button class="mt-8 mb-8 w-full py-3 bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-xl font-headline font-bold text-sm shadow-lg shadow-primary/20 flex items-center justify-center gap-2 scale-95 hover:scale-100 transition-transform duration-150">
            <span class="material-symbols-outlined text-sm">add</span>
            Create Match
        </button>
        <div class="mt-auto pt-6 border-t border-slate-200/50 dark:border-slate-800/50 space-y-2">
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 transition-all duration-300 font-headline text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">settings</span>
                Settings
            </a>
            <a class="flex items-center gap-3 p-3 rounded-xl text-slate-500 dark:text-slate-400 hover:text-emerald-600 transition-all duration-300 font-headline text-sm font-semibold" href="#">
                <span class="material-symbols-outlined">help</span>
                Support
            </a>
        </div>
    </aside>
    <!-- Main Content Wrapper -->
    <main class="ml-64 min-h-screen">
        <!-- TopNavBar -->
        <header class="sticky top-0 w-full z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl flex justify-between items-center h-16 px-8">
            <div class="flex items-center flex-1 max-w-xl">
                <div class="relative w-full">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
                    <input class="w-full bg-surface-container-highest/50 border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search grades, courses, or tutors..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-8">
                <nav class="hidden lg:flex items-center gap-6">
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Standings</a>
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Schedule</a>
                    <a class="text-slate-600 dark:text-slate-400 font-headline font-medium text-sm hover:text-emerald-500 transition-colors" href="#">Awards</a>
                </nav>
                <div class="h-6 w-px bg-slate-200 dark:bg-slate-700"></div>
                <div class="flex items-center gap-4">
                    <button class="relative text-slate-600 dark:text-slate-400 hover:text-emerald-500 transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-2 group cursor-pointer">
                        <div class="text-right">
                            <p id="nav-user-name" class="text-xs font-bold text-on-surface leading-none">Loading...</p>
                            <p id="nav-user-info" class="text-[10px] text-on-surface-variant">--</p>
                        </div>
                        <img id="nav-user-avatar" alt="User Profile Avatar" class="w-10 h-10 rounded-full border-2 border-primary-fixed shadow-sm group-hover:border-primary transition-colors object-cover" src="https://ui-avatars.com/api/?name=Student&background=0f5238&color=fff" />
                    </div>
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="p-8 space-y-8">
            <!-- Page Header / Hero Section -->
            <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div class="space-y-2">
                    <span class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full text-[10px] font-bold tracking-widest uppercase">Academic Performance</span>
                    <h2 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Term Results</h2>
                    <p class="text-on-surface-variant max-w-lg">Track your academic progress alongside your athletic development. Maintaining eligibility is key to your position on the squad.</p>
                </div>
                <!-- Eligibility Status Badge - Dynamic -->
                <div id="eligibility-card" class="bg-surface-container-lowest p-4 rounded-2xl shadow-xl shadow-emerald-900/5 flex items-center gap-6 border-l-4 border-slate-300">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-on-surface-variant uppercase tracking-wider">Squad Eligibility</span>
                        <span id="eligibility-status" class="text-2xl font-headline font-extrabold text-on-surface">--</span>
                    </div>
                    <div class="w-12 h-12 bg-surface-container-high rounded-full flex items-center justify-center text-on-surface-variant">
                        <span id="eligibility-icon" class="material-symbols-outlined text-3xl">help_outline</span>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- GPA Progress Chart -->
                <div class="lg:col-span-8 bg-surface-container-lowest rounded-[1.5rem] p-8 shadow-xl shadow-emerald-900/5 relative overflow-hidden">
                    <div class="flex justify-between items-start mb-12">
                        <div>
                            <h3 class="text-xl font-headline font-bold text-on-surface">GPA Momentum</h3>
                            <p class="text-sm text-on-surface-variant">Term-by-Term Progression</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <span id="current-gpa-value" class="text-3xl font-headline font-black text-on-surface">--</span>
                            <div id="gpa-trend" class="flex flex-col text-[10px] font-bold text-primary">
                                <span class="material-symbols-outlined text-sm">trending_up</span>
                                <span id="gpa-change">--</span>
                            </div>
                        </div>
                    </div>
                    <!-- Dynamic Chart Bars -->
                    <div id="gpa-chart-container" class="h-64 flex items-end justify-between gap-4 px-4">
                        <div class="w-full text-center text-outline text-sm">Loading GPA data...</div>
                    </div>
                    <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
                </div>
                <!-- Academic Insights Side Card -->
                <div class="lg:col-span-4 flex flex-col gap-8">
                    <!-- Top Performer Badge - Dynamic -->
                    <div id="honor-badge" class="bg-gradient-to-br from-slate-600 to-slate-500 p-6 rounded-[1.5rem] text-white shadow-xl">
                        <span class="material-symbols-outlined mb-4">school</span>
                        <h4 class="font-headline font-bold text-lg mb-1">Loading...</h4>
                        <p class="text-xs opacity-90 leading-relaxed">Fetching your academic data...</p>
                    </div>
                    <!-- Academic Support CTA -->
                    <div class="bg-secondary-fixed p-6 rounded-[1.5rem] flex flex-col h-full">
                        <h4 class="font-headline font-bold text-on-secondary-fixed text-lg mb-4">Need a Boost?</h4>
                        <div class="space-y-4 mb-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary">menu_book</span>
                                <span class="text-sm font-medium text-on-secondary-fixed-variant">Advanced Calculus Tutor</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary">edit_note</span>
                                <span class="text-sm font-medium text-on-secondary-fixed-variant">Exam Prep Workshops</span>
                            </div>
                        </div>
                        <button class="mt-auto w-full py-3 bg-white text-secondary font-bold text-sm rounded-xl hover:bg-secondary-container transition-colors">
                            Explore Academic Hub
                        </button>
                    </div>
                </div>
                <!-- Grade History Table -->
                <div class="lg:col-span-12 bg-surface-container-lowest rounded-[1.5rem] overflow-hidden shadow-xl shadow-emerald-900/5">
                    <div class="p-8 border-b border-surface-container">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-headline font-bold text-on-surface">Detailed Term Results</h3>
                            <button id="download-transcript" class="text-primary font-bold text-sm flex items-center gap-1 hover:underline opacity-50 cursor-not-allowed" disabled>
                                <span class="material-symbols-outlined text-lg">download</span>
                                Download Transcript
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low">
                                    <th class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Subject Name</th>
                                    <th class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Instructor</th>
                                    <th class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest">Grade</th>
                                    <th class="px-8 py-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody id="grades-table-body" class="divide-y divide-surface-container-low">
                                <tr>
                                    <td colspan="5" class="px-8 py-12 text-center text-outline">Loading grades from server...</td>
                                </tr>
                            </tbody>
                        </table>
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

        async function fetchAPI(endpoint) {
            const response = await fetch(`${API_BASE}${endpoint}`, {
                headers: getHeaders()
            });
            if (!response.ok) throw new Error(`API Error ${response.status}`);
            return response.json();
        }

        let currentGrades = [];
        let currentUser = null;
        let academicRules = null;

        // Function to convert object to array regardless of structure
        function convertToArray(data) {
            console.log("Converting data:", data);

            if (Array.isArray(data)) {
                return data;
            }

            if (data && typeof data === 'object') {
                const possibleArrayProps = ['data', 'grades', 'results', 'items', 'records', 'grade'];

                for (let prop of possibleArrayProps) {
                    if (data[prop] && Array.isArray(data[prop])) {
                        console.log(`Found array in property: ${prop}`);
                        return data[prop];
                    }
                }

                const values = Object.values(data);
                if (values.length > 0 && values.some(v => v && typeof v === 'object' && (v.score !== undefined || v.grade !== undefined))) {
                    console.log("Converting object values to array");
                    return values;
                }

                if (data.score !== undefined || data.grade !== undefined || data.subject_name !== undefined) {
                    console.log("Single grade object detected, wrapping in array");
                    return [data];
                }
            }

            console.log("No grade data found, returning empty array");
            return [];
        }

        // Get letter grade based on score (standard academic grading)
        function getLetterGrade(score) {
            if (score >= 18) return "A";
            if (score >= 15) return "B";
            if (score >= 13) return "C";
            if (score >= 10) return "D";
            return "F";
        }

        // Get detailed letter grade with +/-
        function getDetailedLetterGrade(score) {
            if (score >= 18) return "A";
            if (score >= 15) return "B";
            if (score >= 13) return "C";
            if (score >= 10) return "D";
            return "F";
        }

        // Check if a grade is failing (below 60)
        function isFailingGrade(score) {
            return score < 10;
        }

        // Determine eligibility based on academic rules from database
        function determineEligibility(grades, rules) {
            if (!grades || grades.length === 0) {
                return {
                    eligible: false,
                    reason: "No grade data available",
                    status: "Unknown"
                };
            }

            let totalScore = 0;
            let failedSubjects = 0;

            grades.forEach(g => {
                const score = parseInt(g.score)
                totalScore += score;
                if (isFailingGrade(score)) {
                    failedSubjects++;
                }
            });

            const averageScore = totalScore / grades.length;

            if (rules && rules.min_average_threshold !== undefined) {
                let threshold = parseFloat(rules.min_average_threshold);
                let averageForComparison = averageScore;

                if (threshold <= 10 && averageScore > 10) {
                    averageForComparison = averageScore / 10;
                }
                else if (threshold > 10 && averageScore <= 10) {
                    averageForComparison = averageScore * 10;
                }

                const meetsAverageThreshold = averageForComparison >= threshold;
                const meetsFailedSubjectsThreshold = rules.max_failed_subjects === null || failedSubjects <= rules.max_failed_subjects;

                const eligible = meetsAverageThreshold && meetsFailedSubjectsThreshold;

                let status = "";
                let reason = "";

                if (eligible) {
                    status = "Eligible";
                    reason = `Meets requirements: ${averageScore.toFixed(1)}% average, ${failedSubjects} failed subject(s)`;
                } else if (!meetsAverageThreshold) {
                    status = "At Risk - GPA";
                    reason = `Average ${averageScore.toFixed(1)}% is below required threshold of ${threshold * (threshold <= 10 ? 10 : 1)}%`;
                } else if (!meetsFailedSubjectsThreshold) {
                    status = "At Risk - Failed Subjects";
                    reason = `Has ${failedSubjects} failed subject(s), maximum allowed is ${rules.max_failed_subjects}`;
                } else {
                    status = "Ineligible";
                    reason = "Does not meet academic requirements";
                }

                return {
                    eligible,
                    reason,
                    status,
                    averageScore,
                    failedSubjects,
                    threshold: rules.min_average_thresh,
                    maxFailed: rules.max_failed_subjects
                };
            }

            const eligible = averageScore >= 10 && failedSubjects <= 2;
            const status = eligible ? "Eligible" : (averageScore < 10 ? "At Risk - GPA" : "At Risk - Failed Subjects");
            const reason = eligible ? "Meets standard academic requirements" : (averageScore < 10 ? "Average below 60%" : `Has ${failedSubjects} failed subject(s)`);

            return {
                eligible,
                reason,
                status,
                averageScore,
                failedSubjects
            };
        }

        async function loadAcademicData() {
            try {
                const user = await fetchAPI('/users/me');
                currentUser = user;
                document.getElementById('nav-user-name').innerText = user.name?.split(' ')[0] || 'Student';
                document.getElementById('nav-user-info').innerText = `Year ${user.academic_year || 'N/A'} • ID: ${user.id || '--'}`;
                const avatarUrl = `https://ui-avatars.com/api/?name=${encodeURIComponent(user.name || 'Student')}&background=0f5238&color=fff&size=40`;
                document.getElementById('nav-user-avatar').src = avatarUrl;

                try {
                    const rulesResponse = await fetchAPI('/academic-rules');
                    console.log("Academic Rules:", rulesResponse);

                    if (rulesResponse && typeof rulesResponse === 'object') {
                        if (Array.isArray(rulesResponse) && rulesResponse.length > 0) {
                            academicRules = rulesResponse[0];
                        } else if (rulesResponse.data && Array.isArray(rulesResponse.data) && rulesResponse.data.length > 0) {
                            academicRules = rulesResponse.data[0];
                        } else if (rulesResponse.min_average_threshold !== undefined) {
                            academicRules = rulesResponse;
                        }
                    }
                    console.log("Parsed academic rules:", academicRules);
                } catch (e) {
                    console.warn("Could not fetch academic rules, using defaults:", e);
                }

                // Load grades from /grade endpoint
                const gradeResponse = await fetchAPI('/grade');
                console.log("Raw grade response:", gradeResponse);

                // Convert the response to an array
                const gradesArray = convertToArray(gradeResponse);
                console.log("Converted grades array:", gradesArray);

                if (gradesArray.length > 0) {
                    currentGrades = gradesArray;
                    renderGradesTable(gradesArray);
                    calculateGPAAndStats(gradesArray);
                    enableTranscriptDownload();
                } else {
                    console.log("No grades found after conversion");
                    showNoDataState();
                }

            } catch (err) {
                console.error("Failed to load academic data:", err);
                showNoDataState();
            }
        }

        function showNoDataState() {
            const tbody = document.getElementById('grades-table-body');
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" class="px-8 py-16 text-center">
                        <div class="flex flex-col items-center gap-3">
                            <span class="material-symbols-outlined text-5xl text-outline">inbox</span>
                            <p class="text-on-surface-variant font-medium">No grade records found</p>
                            <p class="text-xs text-outline">Complete your courses to see your academic results here</p>
                        </div>
                    </td>
                </tr>
            `;

            const chartContainer = document.getElementById('gpa-chart-container');
            chartContainer.innerHTML = `
                <div class="w-full text-center text-outline text-sm flex flex-col items-center gap-2">
                    <span class="material-symbols-outlined text-3xl">bar_chart_4_bars</span>
                    <span>No GPA data available</span>
                </div>
            `;

            document.getElementById('current-gpa-value').innerHTML = '--';
            document.getElementById('gpa-change').innerHTML = '--';

            const eligibilityStatus = document.getElementById('eligibility-status');
            const eligibilityIcon = document.getElementById('eligibility-icon');
            eligibilityStatus.innerText = "Unknown";
            eligibilityStatus.className = "text-2xl font-headline font-extrabold text-on-surface-variant";
            eligibilityIcon.innerText = "help_outline";

            const honorBadge = document.getElementById('honor-badge');
            honorBadge.innerHTML = `
                <span class="material-symbols-outlined mb-4">inbox</span>
                <h4 class="font-headline font-bold text-lg mb-1">No Academic Data</h4>
                <p class="text-xs opacity-90 leading-relaxed">Complete your courses to see academic insights and honors.</p>
            `;
            honorBadge.className = "bg-gradient-to-br from-slate-600 to-slate-500 p-6 rounded-[1.5rem] text-white shadow-xl";

            const downloadBtn = document.getElementById('download-transcript');
            downloadBtn.disabled = true;
            downloadBtn.classList.add('opacity-50', 'cursor-not-allowed');
            downloadBtn.classList.remove('hover:underline');
        }

        function enableTranscriptDownload() {
            const downloadBtn = document.getElementById('download-transcript');
            downloadBtn.disabled = false;
            downloadBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            downloadBtn.classList.add('hover:underline');
        }

        function calculateGPAAndStats(grades) {
            if (!grades || grades.length === 0) return;

            let totalScore = 0;
            grades.forEach(g => {
                const score = parseInt(g.score)
                totalScore += score;
                console.log(totalScore)
            });
            const gpa = totalScore / grades.length;
            document.getElementById('current-gpa-value').innerHTML = gpa.toFixed(2);

            const eligibility = determineEligibility(grades, academicRules);
            console.log("Eligibility determination:", eligibility);

            const eligibilityStatus = document.getElementById('eligibility-status');
            const eligibilityIcon = document.getElementById('eligibility-icon');
            const eligibilityCard = document.getElementById('eligibility-card');

            if (eligibility.eligible) {
                eligibilityStatus.innerText = eligibility.status;
                eligibilityStatus.className = "text-2xl font-headline font-extrabold text-primary";
                eligibilityIcon.innerText = "check_circle";
                eligibilityCard.className = "bg-surface-container-lowest p-4 rounded-2xl shadow-xl shadow-emerald-900/5 flex items-center gap-6 border-l-4 border-emerald-500";
            } else {
                eligibilityStatus.innerText = eligibility.status;
                eligibilityStatus.className = "text-2xl font-headline font-extrabold text-error";
                eligibilityIcon.innerText = "warning";
                eligibilityCard.className = "bg-surface-container-lowest p-4 rounded-2xl shadow-xl shadow-emerald-900/5 flex items-center gap-6 border-l-4 border-error";
            }

            // Add tooltip with detailed reason
            eligibilityCard.title = eligibility.reason;

            const trendChange = gpa >= 3.0 ? "+0.1" : (gpa >= 2.0 ? "+0.0" : "-0.2");
            document.getElementById('gpa-change').innerHTML = trendChange;

            const chartContainer = document.getElementById('gpa-chart-container');
            const sortedGrades = [...grades].sort((a, b) => (a.term_order || a.id || 0) - (b.term_order || b.id || 0));
            const terms = sortedGrades.map((g, idx) => g.term || g.semester || `Term ${idx + 1}`);
            const termGPAs = sortedGrades.map(g => {
                const score = g.score || g.grade_score || g.marks || g.percentage || 0;
                return (score / 100) * 4;
            });

            chartContainer.innerHTML = terms.map((term, idx) => {
                const barHeight = Math.min(92, Math.max(20, (termGPAs[idx] / 4) * 100));
                const isCurrent = idx === terms.length - 1;
                return `
                    <div class="w-full bg-surface-container flex flex-col items-center gap-4 rounded-t-xl group">
                        <div class="w-full ${isCurrent ? 'bg-primary' : 'bg-primary-fixed-dim/40'} rounded-t-xl transition-all duration-500 group-hover:bg-primary-fixed" style="height: ${barHeight}%; min-height: 40px;"></div>
                        <span class="text-[10px] font-bold ${isCurrent ? 'text-primary' : 'text-on-surface-variant'} mb-2">${term}</span>
                        <span class="text-[8px] font-bold text-outline">${termGPAs[idx].toFixed(1)}</span>
                    </div>
                `;
            }).join('');

            const honorBadge = document.getElementById('honor-badge');
            if (eligibility.eligible && gpa >= 3.5) {
                honorBadge.innerHTML = `
                    <span class="material-symbols-outlined mb-4" style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                    <h4 class="font-headline font-bold text-lg mb-1">Dean's List Contender</h4>
                    <p class="text-xs text-on-primary-container opacity-90 leading-relaxed">Your current GPA (${gpa.toFixed(2)}) is in the top tier. ${eligibility.reason}</p>
                `;
                honorBadge.className = "bg-gradient-to-br from-emerald-900 to-primary-container p-6 rounded-[1.5rem] text-on-primary shadow-xl shadow-emerald-900/10";
            } else if (eligibility.eligible && gpa >= 3.0) {
                honorBadge.innerHTML = `
                    <span class="material-symbols-outlined mb-4" style="font-variation-settings: 'FILL' 1;">school</span>
                    <h4 class="font-headline font-bold text-lg mb-1">Honor Roll Student</h4>
                    <p class="text-xs text-on-primary-container opacity-90 leading-relaxed">Strong academic standing (${gpa.toFixed(2)} GPA). ${eligibility.reason}</p>
                `;
                honorBadge.className = "bg-gradient-to-br from-emerald-900 to-primary-container p-6 rounded-[1.5rem] text-on-primary shadow-xl shadow-emerald-900/10";
            } else if (eligibility.eligible) {
                honorBadge.innerHTML = `
                    <span class="material-symbols-outlined mb-4">trending_up</span>
                    <h4 class="font-headline font-bold text-lg mb-1">Eligible - On Track</h4>
                    <p class="text-xs text-on-primary-container opacity-90 leading-relaxed">You maintain eligibility (${gpa.toFixed(2)} GPA). ${eligibility.reason}</p>
                `;
                honorBadge.className = "bg-gradient-to-br from-emerald-900 to-primary-container p-6 rounded-[1.5rem] text-on-primary shadow-xl shadow-emerald-900/10";
            } else {
                honorBadge.innerHTML = `
                    <span class="material-symbols-outlined mb-4">warning</span>
                    <h4 class="font-headline font-bold text-lg mb-1">Academic Watch</h4>
                    <p class="text-xs text-on-primary-container opacity-90 leading-relaxed">${eligibility.reason}. Please connect with academic support services.</p>
                `;
                honorBadge.className = "bg-gradient-to-br from-error to-error-container p-6 rounded-[1.5rem] text-white shadow-xl";
            }
        }

        function renderGradesTable(grades) {
            const tbody = document.getElementById('grades-table-body');
            if (!grades || grades.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" class="px-8 py-12 text-center text-outline">No grade records found. Complete your courses to see results here.</td></tr>';
                return;
            }
            console.log(grades)

            tbody.innerHTML = grades.map(grade => {
                const score = parseInt(grade.score);
                const letterGrade = getDetailedLetterGrade(score);
                const isFailing = isFailingGrade(score);
                const status = grade.status || (isFailing ? "At Risk" : (score >= 10 ? "Completed" : "In Progress"));
                const statusClass = status === "Completed" ? "bg-primary-fixed text-on-primary-fixed-variant" : (isFailing ? "bg-error-container text-on-error-container" : "bg-tertiary-fixed text-on-tertiary-fixed-variant");
                const courseCode = grade.course_code || grade.code || grade.subject_code || 'N/A';
                const subjectName = grade.subject.name;
                const instructor = grade.instructor || grade.teacher || grade.professor || 'Faculty';
                const gradeColor = isFailing ? "text-error" : "text-on-surface";

                return `
                    <tr class="hover:bg-surface transition-colors group">
                        <td class="px-8 py-6 font-bold text-on-surface">${subjectName}</td>
                        <td class="px-8 py-6 text-sm text-on-surface-variant">${instructor}</td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2">
                                <span class="text-lg font-headline font-black ${gradeColor}">${letterGrade}</span>
                                <span class="text-[10px] font-bold text-on-surface-variant opacity-60">${score}%</span>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="mx-auto w-fit px-3 py-1 ${statusClass} rounded-full text-[10px] font-bold uppercase tracking-tighter">
                                ${status}
                            </div>
                        </td>
                    </table>
                `;
            }).join('');
        }

        function downloadTranscript() {
            if (!currentGrades.length) {
                alert("No grade data available to download.");
                return;
            }

            let transcriptText = "THE SCHOLASTIC PITCH - ACADEMIC TRANSCRIPT\n";
            transcriptText += "==========================================\n";
            transcriptText += `Student: ${currentUser?.name || 'Athlete'}\n`;
            const avgScore = currentGrades.reduce((a, b) => a + (parseInt(b.score) || b.grade_score || b.marks || 0), 0) / currentGrades.length;
            const gpa = (avgScore / 100) * 4;
            transcriptText += `GPA: ${gpa.toFixed(2)} / 4.0\n`;
            transcriptText += `Date: ${new Date().toLocaleDateString()}\n`;
            transcriptText += "==========================================\n\n";
            transcriptText += "COURSE\t\t\tGRADE\tSCORE\tSTATUS\n";
            transcriptText += "------------------------------------------\n";

            currentGrades.forEach(g => {
                const courseName = (g.subject_name || g.name || 'Subject').substring(0, 20);
                const score = g.score || g.grade_score || 0;
                const letter = getDetailedLetterGrade(score);
                transcriptText += `${courseName}\t\t${letter}\t${score}%\t${g.status || 'Completed'}\n`;
            });

            transcriptText += "\n==========================================\n";
            transcriptText += "This transcript is for academic purposes only.\n";

            const blob = new Blob([transcriptText], {
                type: 'text/plain'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `transcript_${currentUser?.name?.replace(/\s/g, '_') || 'student'}.txt`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }

        window.addEventListener('DOMContentLoaded', () => {
            if (!localStorage.getItem('token')) {
                console.warn("No auth token found - please login to view your academic data");
                showNoDataState();
                document.getElementById('nav-user-name').innerText = "Guest";
                document.getElementById('nav-user-info').innerText = "Please login";
                return;
            }
            loadAcademicData();

            const downloadBtn = document.getElementById('download-transcript');
            if (downloadBtn) {
                downloadBtn.addEventListener('click', downloadTranscript);
            }
        });
    </script>
</body>

</html>