<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login | The Scholastic Pitch</title>
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
                        "primary": "#0f5238",
                        "primary-container": "#2d6a4f",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#b1f0ce",
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
                        "surface-container-highest": "#e0e3e5",
                        "outline": "#707973",
                        "secondary": "#4059aa"
                    },
                    "fontFamily": { "headline": ["Manrope"], "body": ["Inter"] }
                }
            }
        }
    </script>
</head>

<body class="bg-surface text-on-surface antialiased overflow-x-hidden">
    <div class="flex min-h-screen w-full">
        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden bg-primary">
            <img class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity"
                src="https://images.unsplash.com/photo-1551958219-acbc608c6377?auto=format&fit=crop&q=80&w=2000" />
            <div
                class="absolute inset-0 bg-gradient-to-br from-primary/90 via-primary/40 to-transparent p-16 flex flex-col justify-between text-white">
                <div>
                    <span class="font-headline font-extrabold text-2xl italic uppercase">The Scholastic Pitch</span>
                    <div class="mt-4 h-1 w-24 bg-primary-fixed rounded-full"></div>
                </div>
                <div class="max-w-md">
                    <h2 class="text-5xl font-extrabold tracking-tight leading-[1.1] mb-6">Welcome <span
                            class="text-primary-fixed">Back.</span></h2>
                    <p class="text-lg font-medium opacity-90">Access your dashboard to manage fixtures and track
                        eligibility.</p>
                </div>
            </div>
        </div>

        <main class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-12 bg-surface">
            <div class="w-full max-w-md">
                <header class="mb-10">
                    <h1 class="text-3xl font-extrabold tracking-tight mb-2">Secure Access</h1>
                    <p class="text-on-surface-variant font-medium">Enter your credentials to enter the Pitch.</p>
                </header>

                <form class="space-y-6" id="loginForm">
                    <div class="space-y-1">
                        <label class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1"
                            for="email">Academy Email</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">alternate_email</span>
                            <input id="email" name="email"
                                class="block w-full pl-11 pr-4 py-4 bg-surface-container-highest border-none rounded-xl focus:ring-2 focus:ring-primary transition-all font-medium"
                                placeholder="m.rivers@academy.edu" type="email" required />
                        </div>
                        <p id="email-error" class="text-red-600 text-[11px] font-bold ml-1 mt-1 hidden"></p>
                    </div>

                    <div class="space-y-1">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block"
                                for="password">Access Key</label>
                            <a class="text-secondary text-[11px] font-bold uppercase hover:underline" href="#">Lost
                                Key?</a>
                        </div>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">lock_open</span>
                            <input id="password" name="password"
                                class="block w-full pl-11 pr-12 py-4 bg-surface-container-highest border-none rounded-xl focus:ring-2 focus:ring-primary transition-all font-medium"
                                placeholder="••••••••••••" type="password" required />
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary"
                                type="button" onclick="togglePassword('password', 'pw-icon')">
                                <span class="material-symbols-outlined text-sm" id="pw-icon">visibility</span>
                            </button>
                        </div>
                        <p id="password-error" class="text-red-600 text-[11px] font-bold ml-1 mt-1 hidden"></p>
                    </div>

                    <button
                        class="w-full py-4 px-6 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold rounded-xl shadow-lg hover:opacity-95 transition-all flex items-center justify-center space-x-2"
                        type="submit">
                        <span>Authenticate Entry</span>
                        <span class="material-symbols-outlined text-sm">login</span>
                    </button>

                    <p class="text-center text-on-surface-variant text-xs font-medium mt-6">
                        New to the League? <a href="register.html"
                            class="text-secondary font-bold hover:underline">Apply for Academy Access</a>
                    </p>
                </form>
            </div>
        </main>
    </div>

    <script>
        function togglePassword(id, iconId) {
            const input = document.getElementById(id);
            const icon = document.getElementById(iconId);
            input.type = input.type === 'password' ? 'text' : 'password';
            icon.textContent = input.type === 'password' ? 'visibility' : 'visibility_off';
        }

        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            document.querySelectorAll('[id$="-error"]').forEach(el => el.classList.add('hidden'));

            const userData = { email: email.value, password: password.value };

            try {
                const response = await fetch('http://127.0.0.1:8000/api/login', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(userData)
                });

                const data = await response.json();

                if (!response.ok) {
                    if (response.status === 422) {
                        Swal.fire({ icon: 'error', title: 'Login Failed', text: 'Invalid credentials.', confirmButtonColor: '#0f5238' });
                        Object.keys(data.errors).forEach(key => {
                            const errEl = document.getElementById(`${key}-error`);
                            if (errEl) { errEl.textContent = data.errors[key][0]; errEl.classList.remove('hidden'); }
                        });
                    } else {
                        localStorage.setItem('token', response.access_token)

                        Swal.fire({ icon: 'warning', title: 'Notice', text: data.message });
                    }
                    return;
                }

                localStorage.setItem('token', data.token);
                Swal.fire({ icon: 'success', title: 'Authenticated', timer: 1500, showConfirmButton: false })
                    .then(() => window.location.href = data.redirect_to);

            } catch (err) {
                Swal.fire({ icon: 'error', title: 'Connection Error', text: 'Server unreachable.' });
            }
        });
    </script>
</body>

</html>