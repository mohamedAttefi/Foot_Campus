<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#0f5238",
                        "primary-container": "#2d6a4f",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#b1f0ce",
                        "primary-fixed-dim": "#95d4b3",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
                        "surface-container-low": "#f2f4f6",
                        "surface-container-highest": "#e0e3e5",
                        "outline": "#707973",
                        "secondary": "#4059aa"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        .hidden-section {
            display: none;
        }

        .role-btn-active {
            ring: 2px solid #0f5238;
            background-color: white !important;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased overflow-x-hidden">
    <div class="flex min-h-screen w-full">

        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden bg-primary">
            <img class="absolute inset-0 w-full h-full object-cover opacity-70 mix-blend-multiply"
                alt="Football pitch background"
                src="https://i.pinimg.com/736x/d1/b3/c6/d1b3c63071cf501b07aaf1790122453e.jpg" />
            <div
                class="absolute inset-0 bg-gradient-to-tr from-primary via-primary/40 to-transparent p-16 flex flex-col justify-between">
                <div>
                    <span class="text-white font-headline font-extrabold text-2xl tracking-tighter italic uppercase">The
                        Scholastic Pitch</span>
                    <div class="mt-4 h-1 w-24 bg-primary-fixed rounded-full"></div>
                </div>
                <div class="max-w-md text-white">
                    <h2 class="text-5xl font-extrabold tracking-tight leading-[1.1] mb-6">Forge Your <span
                            class="text-primary-fixed">Legacy.</span></h2>
                    <p class="text-lg font-medium opacity-90 leading-relaxed">Join the system where athletic talent
                        meets academic rigor. Register today to bridge the gap between the classroom and the field.</p>
                </div>
            </div>
        </div>

        <main class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-12 bg-surface">
            <div class="w-full max-w-lg">
                <header class="mb-8">
                    <h1 class="text-on-surface text-3xl font-extrabold tracking-tight mb-2">Academy Registration</h1>
                    <p class="text-on-surface-variant font-medium">Create your profile to access the league management
                        system.</p>
                </header>

                <div class="mb-8">
                    <label
                        class="text-on-surface-variant text-xs font-bold uppercase tracking-widest mb-4 block">Identify
                        Your Role</label>
                    <div class="grid grid-cols-3 gap-3" id="roleContainer">
                        <button type="button" onclick="selectRole('teacher')" id="btn-teacher"
                            class="role-btn flex flex-col items-center justify-center p-4 rounded-xl bg-surface-container-low hover:bg-primary-fixed-dim/20 transition-all group border-2 border-transparent">
                            <span class="material-symbols-outlined text-primary mb-2" data-icon="school">school</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant">Teacher</span>
                        </button>
                        <button type="button" onclick="selectRole('coach')" id="btn-coach"
                            class="role-btn flex flex-col items-center justify-center p-4 rounded-xl bg-surface-container-low hover:bg-primary-fixed-dim/20 transition-all group border-2 border-transparent">
                            <span class="material-symbols-outlined text-primary mb-2"
                                data-icon="sports_soccer">sports_soccer</span>
                            <span
                                class="text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant">Coach</span>
                        </button>
                        <button type="button" onclick="selectRole('player')" id="btn-player"
                            class="role-btn flex flex-col items-center justify-center p-4 rounded-xl ring-2 ring-primary bg-white transition-all group">
                            <span class="material-symbols-outlined text-primary mb-2" data-icon="person">person</span>
                            <span class="text-[10px] font-bold uppercase tracking-tighter text-on-surface">Player</span>
                        </button>
                    </div>
                </div>

                <form id="form" class="space-y-5">
                    @csrf
                    <input type="hidden" id="role">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label
                                class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">First
                                Name</label>
                            <input
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                                type="text" id="fName" placeholder="Alex" required />
                        </div>
                        <div class="space-y-1">
                            <label
                                class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">Last
                                Name</label>
                            <input id="lName"
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                                type="text" placeholder="Rivers" required />
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label
                            class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">Academy
                            Email</label>
                        <input id="email"
                            class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                            type="email" placeholder="a.rivers@academy.edu" required />
                    </div>

                    <div id="section-player" class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label
                                    class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">Jersey
                                    Number</label>
                                <input id="jersey"
                                    class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                                    type="number" placeholder="10" />
                            </div>
                            <div class="space-y-1">
                                <label
                                    class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">Current
                                    Grade</label>
                                <input id="grade"
                                    class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                                    type="text" placeholder="Grade 12" />
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label
                            class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1">Password</label>
                        <input
                            class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl text-on-surface focus:ring-2 focus:ring-primary transition-all"
                            type="password" id="password" placeholder="••••••••••••" required />
                    </div>

                    <button
                        class="w-full py-4 px-6 mt-4 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold rounded-xl shadow-lg hover:opacity-90 transition-all active:scale-[0.98] flex items-center justify-center space-x-2"
                        type="submit">
                        <span>Create Account</span>
                        <span class="material-symbols-outlined text-sm">person_add</span>
                    </button>

                    <p class="text-center text-on-surface-variant text-xs font-medium mt-4">
                        Already a member? <a href="#" class="text-secondary font-bold hover:underline">Sign In</a>
                    </p>
                </form>

                <footer
                    class="mt-10 pt-6 border-t border-surface-container-high flex justify-between items-center text-on-surface-variant text-[10px] font-bold uppercase tracking-widest">
                    <span>© 2026 Scholastic Pitch</span>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-primary">Support</a>
                        <a href="#" class="hover:text-primary">Policy</a>
                    </div>
                </footer>
            </div>
        </main>
    </div>

    <script>
        let Userrole = document.getElementById('role')
        let formElement = document.querySelector('form')
        let lName = document.getElementById('lName')
        let passwordInput = document.getElementById('password')
        let fName = document.getElementById('fName')
        let emailInput = document.getElementById('email')
        let jerseyInput = document.getElementById('jersey')

        function selectRole(role) {
            // Update Button Styles
            Userrole.value = role
            console.log(Userrole.value)
            document.querySelectorAll('.role-btn').forEach(btn => {
                btn.classList.remove('ring-2', 'ring-primary', 'bg-white');
                const label = btn.querySelector('span:last-child');
                label.classList.remove('text-on-surface');
                label.classList.add('text-on-surface-variant');
            });

            const activeBtn = document.getElementById('btn-' + role);
            activeBtn.classList.add('ring-2', 'ring-primary', 'bg-white');
            activeBtn.querySelector('span:last-child').classList.replace('text-on-surface-variant', 'text-on-surface');
            document.getElementById('section-' + role).classList.remove('hidden-section');
        }

        selectRole('player');


        formElement.addEventListener('submit', (e) => {
            e.preventDefault();

            const userData = {
                name: fName.value + " " + lName.value,
                password: passwordInput.value,
                role: Userrole.value,
                email: email.value,
                jersey_number: jersey.value,
            };
            console.log(userData)

            fetch('http://127.0.0.1:8000/api/register', {
                method: 'POST', // Specify the method
                headers: {
                    'Content-Type': 'application/json', // Tell the server you're sending JSON
                },
                body: JSON.stringify(userData) // Convert the JS object to a JSON string
            })
                .then(response => response.json()) // Parse the JSON response from the server
                .then(data => {
                    localstorage.setItem('token', data.token)
                    window.location.href = data.redirect_to
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        });

    </script>
</body>

</html>