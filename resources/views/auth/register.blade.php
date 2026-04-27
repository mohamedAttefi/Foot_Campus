<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register | The Scholastic Pitch</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#0f5238", "primary-container": "#2d6a4f", "on-primary": "#ffffff",
                        "primary-fixed": "#b1f0ce", "surface": "#f7f9fb", "on-surface-variant": "#404943",
                        "surface-container-highest": "#e0e3e5", "secondary": "#4059aa"
                    },
                    "fontFamily": { "headline": ["Manrope"], "body": ["Inter"] }
                }
            }
        }
    </script>
    <style>
        .hidden-section {
            display: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased">
    <div class="flex min-h-screen w-full">
        <div class="hidden lg:block lg:w-1/2 relative bg-primary">
            <img class="absolute inset-0 w-full h-full object-cover opacity-70 mix-blend-multiply"
                src="https://i.pinimg.com/736x/d1/b3/c6/d1b3c63071cf501b07aaf1790122453e.jpg" />
            <div class="absolute inset-0 p-16 flex flex-col justify-between text-white">
                <span class="font-headline font-extrabold text-2xl italic uppercase">The Scholastic Pitch</span>
                <div class="max-w-md">
                    <h2 class="text-5xl font-extrabold mb-6">Forge Your <span class="text-primary-fixed">Legacy.</span>
                    </h2>
                    <p class="text-lg opacity-90">Join the system where athletic talent meets academic rigor.</p>
                </div>
            </div>
        </div>

        <main class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-surface">
            <div class="w-full max-w-lg">
                <!-- Flash Messages -->
                @if(session('error'))
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                    <div class="flex items-center">
                        <span class="material-symbols-outlined text-red-600 mr-3">error</span>
                        <p class="text-red-800 font-medium">{{ session('error') }}</p>
                    </div>
                </div>
                @endif
                
                @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                    <div class="flex items-center">
                        <span class="material-symbols-outlined text-green-600 mr-3">check_circle</span>
                        <p class="text-green-800 font-medium">{{ session('success') }}</p>
                    </div>
                </div>
                @endif

                <header class="mb-8">
                    <h1 class="text-3xl font-extrabold mb-2">Academy Registration</h1>
                    <p class="text-on-surface-variant font-medium">Create your profile to join the league.</p>
                </header>

                <div class="mb-8">
                    <label class="text-xs font-bold uppercase tracking-widest mb-4 block">Identify Your Role</label>
                    <div class="grid grid-cols-3 gap-3">
                        <button type="button" onclick="selectRole('teacher')" id="btn-teacher"
                            class="role-btn flex flex-col items-center p-4 rounded-xl bg-white border-2 border-transparent transition-all">
                            <span class="material-symbols-outlined text-primary mb-2">school</span>
                            <span class="text-[10px] font-bold uppercase">Teacher</span>
                        </button>
                        <button type="button" onclick="selectRole('coach')" id="btn-coach"
                            class="role-btn flex flex-col items-center p-4 rounded-xl bg-white border-2 border-transparent transition-all">
                            <span class="material-symbols-outlined text-primary mb-2">sports_soccer</span>
                            <span class="text-[10px] font-bold uppercase">Coach</span>
                        </button>
                        <button type="button" onclick="selectRole('player')" id="btn-player"
                            class="role-btn flex flex-col items-center p-4 rounded-xl bg-white border-2 border-transparent transition-all">
                            <span class="material-symbols-outlined text-primary mb-2">person</span>
                            <span class="text-[10px] font-bold uppercase">Player</span>
                        </button>
                    </div>
                </div>

                <form id="registrationForm" class="space-y-4">
                    <input type="hidden" id="role" value="player">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase block ml-1">First Name</label>
                            <input id="fName"
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                                placeholder="Alex" required />
                            <p id="fName-error" class="text-red-600 text-[10px] font-bold hidden"></p>
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase block ml-1">Last Name</label>
                            <input id="lName"
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                                placeholder="Rivers" required />
                            <p id="lName-error" class="text-red-600 text-[10px] font-bold hidden"></p>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase block ml-1">Academy Email</label>
                        <input id="email" type="email"
                            class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                            placeholder="a.rivers@academy.edu" required />
                        <p id="email-error" class="text-red-600 text-[10px] font-bold hidden"></p>
                    </div>
                    <div id="section-player" class="grid grid-cols-2 gap-4 hidden-section">
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase block ml-1">Jersey #</label>
                            <input id="jersey" type="number"
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                                placeholder="10" />
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold uppercase block ml-1">Grade</label>
                            <input id="grade"
                                class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                                placeholder="Grade 12" />
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label class="text-xs font-bold uppercase block ml-1">Password</label>
                        <input id="password" type="password"
                            class="block w-full px-4 py-3 bg-surface-container-highest border-none rounded-xl"
                            placeholder="••••••••••••" required />
                        <p id="password-error" class="text-red-600 text-[10px] font-bold hidden"></p>
                    </div>
                    <button
                        class="w-full py-4 bg-gradient-to-r from-primary to-primary-container text-white font-bold rounded-xl shadow-lg"
                        type="submit">Create Account</button>
                    <p class="text-center text-xs font-medium">Already a member? <a href="login"
                            class="text-secondary font-bold hover:underline">Sign In</a></p>
                </form>
            </div>
        </main>
    </div>

    <script>
        function selectRole(role) {
            document.getElementById('role').value = role;
            document.querySelectorAll('.role-btn').forEach(btn => btn.classList.remove('ring-2', 'ring-primary'));
            document.getElementById('btn-' + role).classList.add('ring-2', 'ring-primary');
            document.getElementById('section-player').classList.toggle('hidden-section', role !== 'player');
        }
        selectRole('player');

        document.getElementById('registrationForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            document.querySelectorAll('[id$="-error"]').forEach(el => el.classList.add('hidden'));

            const userData = {
                first_name: fName.value, last_name: lName.value,
                name: fName.value + ' ' + lName.value, email: email.value,
                password: password.value, role: role.value,
            };
            if(userData.role == "Player"){
                userData.jersey_number = jersey.value;
                userData.grade = grade.value;
            }

            try {
                const response = await fetch('http://127.0.0.1:8000/api/register', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(userData)
                });
                const data = await response.json();

                if (!response.ok) {
                    Swal.fire({ icon: 'error', title: 'Check Fields', text: 'Validation failed.', confirmButtonColor: '#0f5238' });
                    Object.keys(data.errors).forEach(key => {
                        const id = key === 'first_name' ? 'fName' : (key === 'last_name' ? 'lName' : key);
                        const errEl = document.getElementById(`${id}-error`);
                        if (errEl) { errEl.textContent = data.errors[key][0]; errEl.classList.remove('hidden'); }
                    });
                } else {
                    console.log(data)
                    localStorage.setItem('token', data.access_token)
                    Swal.fire({ icon: 'success', title: 'Registered!', showConfirmButton: false, timer: 2000 })
                        .then(() => {
                            if(data.user.role == 'player') window.location.href = 'player/home'
                            if(data.user.role == 'coach') window.location.href = 'manager/dashboard'
                        });
                }
            } catch (err) { Swal.fire({ icon: 'error', title: 'Error', text: 'Server connection failed.' }); }
        });
    </script>
</body>

</html>