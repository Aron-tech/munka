<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bejelentkezés</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">

        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-black text-center mb-6">Bejelentkezés</h2>

            <form class="space-y-6">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Felhasználónév</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 pr-10">
                    <button
                        type="button"
                        onclick="togglePasswordVisibility()"
                        class="absolute inset-y-7 right-0 flex items-center justify-center px-3 text-gray-600 hover:text-blue-500">
                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 3C4.5 3 0 8 0 8s4.5 5 10 5 10-5 10-5-4.5-5-10-5zm0 9c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zM10 7a1 1 0 100 2 1 1 0 000-2z"/>
                        </svg>
                    </button>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <label for="remember" class="flex items-center cursor-pointer">
                            <div class="relative">
                                <input
                                    type="checkbox"
                                    id="remember"
                                    name="remember"
                                    class="sr-only peer">
                                <div class="w-10 h-5 bg-gray-200 rounded-full shadow-inner peer-checked:bg-blue-600 transition"></div>
                                <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow peer-checked:translate-x-5 transition"></div>
                            </div>
                            <span class="ml-3 text-sm text-gray-700">Emlékezz rám</span>
                        </label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Elfelejtett jelszó?</a>
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full px-4 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Bejelentkezés
                    </button>
                </div>
            </form>
        </div>
        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById("password");
                const eyeIcon = document.getElementById("eye-icon");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.innerHTML = `
                        <path d="M10 3C4.5 3 0 8 0 8s4.5 5 10 5 10-5 10-5-4.5-5-10-5zm0 9c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zM10 7a1 1 0 100 2 1 1 0 000-2z"/>`; // Nyitott szem ikon
                } else {
                    passwordInput.type = "password";
                    eyeIcon.innerHTML = `
                        <path d="M10 3C4.5 3 0 8 0 8s4.5 5 10 5 10-5 10-5-4.5-5-10-5zm0 9c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-7a3 3 0 100 6 3 3 0 000-6z"/>`; // Csukott szem ikon
                }
            }
        </script>

    </body>
</html>
