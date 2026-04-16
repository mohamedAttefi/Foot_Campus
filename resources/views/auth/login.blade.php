<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login | The Scholastic Pitch</title>
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
                        "surface": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#404943",
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
</head>

<body class="bg-surface text-on-surface antialiased overflow-x-hidden">
    <div class="flex min-h-screen w-full">

        <div class="hidden lg:block lg:w-1/2 relative overflow-hidden bg-primary">
            <img class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-luminosity"
                alt="Focus on a leather football on the pitch"
                src="https://images.unsplash.com/photo-1551958219-acbc608c6377?auto=format&fit=crop&q=80&w=2000" />
            <div
                class="absolute inset-0 bg-gradient-to-br from-primary/90 via-primary/40 to-transparent p-16 flex flex-col justify-between">
                <div>
                    <span class="text-white font-headline font-extrabold text-2xl tracking-tighter italic uppercase">The
                        Scholastic Pitch</span>
                    <div class="mt-4 h-1 w-24 bg-primary-fixed rounded-full"></div>
                </div>
                <div class="max-w-md text-white">
                    <h2 class="text-5xl font-extrabold tracking-tight leading-[1.1] mb-6">Welcome <span
                            class="text-primary-fixed">Back.</span></h2>
                    <p class="text-lg font-medium opacity-90 leading-relaxed">The field is ready. Access your dashboard
                        to manage fixtures, track eligibility, and stay ahead of the game.</p>
                </div>
            </div>
        </div>

        <main class="w-full lg:w-1/2 flex items-center justify-center p-8 lg:p-12 bg-surface">
            <div class="w-full max-w-md">
                <header class="mb-10">
                    <h1 class="text-on-surface text-3xl font-extrabold tracking-tight mb-2">Secure Access</h1>
                    <p class="text-on-surface-variant font-medium">Enter your credentials to enter the Pitch.</p>
                </header>

                <form class="space-y-6">
                    @csrf
                    <div class="space-y-1">
                        <label class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block ml-1"
                            for="email">Academy Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-outline text-sm">alternate_email</span>
                            </div>
                            <input id="email"
                                class="block w-full pl-11 pr-4 py-4 bg-surface-container-highest border-none rounded-xl text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary transition-all font-medium"
                                id="email" name="email" placeholder="m.rivers@academy.edu" type="email" required />
                        </div>
                    </div>

                    <div class="space-y-1">
                        <div class="flex justify-between items-center px-1">
                            <label class="text-on-surface-variant text-xs font-bold uppercase tracking-widest block"
                                for="password">Access Key</label>
                            <a class="text-secondary text-[11px] font-bold uppercase hover:underline" href="#">Lost
                                Key?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-outline text-sm">lock_open</span>
                            </div>
                            <input id="password"
                                class="block w-full pl-11 pr-12 py-4 bg-surface-container-highest border-none rounded-xl text-on-surface placeholder:text-outline/60 focus:ring-2 focus:ring-primary transition-all font-medium"
                                id="password" name="password" placeholder="••••••••••••" type="password" required />
                            <button
                                class="absolute inset-y-0 right-0 pr-4 flex items-center text-outline hover:text-primary"
                                type="button" onclick="togglePassword()">
                                <span class="material-symbols-outlined text-sm" id="pw-icon">visibility</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3 px-1">
                        <input
                            class="w-5 h-5 rounded border-none bg-surface-container-highest text-primary focus:ring-primary transition-all"
                            id="remember" type="checkbox" />
                        <label class="text-sm font-medium text-on-surface-variant cursor-pointer" for="remember">Keep me
                            logged in for the season</label>
                    </div>

                    <button
                        class="w-full py-4 px-6 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold rounded-xl shadow-lg shadow-primary/20 hover:opacity-95 transition-all active:scale-[0.98] flex items-center justify-center space-x-2"
                        type="submit">
                        <span>Authenticate Entry</span>
                        <span class="material-symbols-outlined text-sm">login</span>
                    </button>

                    <p class="text-center text-on-surface-variant text-xs font-medium mt-6">
                        New to the League? <a href="#" class="text-secondary font-bold hover:underline">Apply for
                            Academy Access</a>
                    </p>
                </form>

                <footer
                    class="mt-16 pt-8 border-t border-surface-container-highest flex flex-col sm:flex-row justify-between items-center text-on-surface-variant text-[10px] font-bold uppercase tracking-widest space-y-4 sm:space-y-0">
                    <div class="flex items-center space-x-2">
                        <span class="material-symbols-outlined text-[16px]">verified_user</span>
                        <span>Protected by Academy-Lock</span>
                    </div>
                    <div class="flex space-x-6">
                        <a class="hover:text-primary transition-colors" href="#">Help Desk</a>
                        <a class="hover:text-primary transition-colors" href="#">Privacy</a>
                    </div>
                </footer>
            </div>
        </main>
    </div>

    <script>

        let passwordInput = document.getElementById('password')
        let emailInput = document.getElementById('email')
        let formElement = document.querySelector('form')



        function togglePassword() {
            const pwInput = document.getElementById('password');
            const pwIcon = document.getElementById('pw-icon');
            if (pwInput.type === 'password') {
                pwInput.type = 'text';
                pwIcon.textContent = 'visibility_off';
            } else {
                pwInput.type = 'password';
                pwIcon.textContent = 'visibility';
            }
        }

        formElement.addEventListener('submit', (e) => {
            e.preventDefault();

            const userData = {
                password: passwordInput.value,
                email: email.value,
            };
            console.log(userData)

            fetch('http://127.0.0.1:8000/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(userData)
            })
                .then(response => response.json())
                .then(data => {
                    window.location.href = data.redirect_to
                    localstorage.setItem('token', data.token)
                    console.log('Success:', data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        });
    </script>
</body>

</html>