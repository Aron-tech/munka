<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Felhasználókezelés</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <h2 class="text-2xl font-bold text-black text-center mb-6">Felhasználókezelés</h2>

    <div class="mb-4 w-full max-w-md mx-auto flex justify-center">
        <input type="text" id="search" name="search" placeholder="Keresés felhasználóra"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="w-full flex flex-wrap justify-center gap-4">
        <div class="user-card bg-white p-4 rounded-lg shadow-md w-full max-w-sm ml-3">
            <h3 class="text-lg font-semibold text-gray-800">Teljes Név: Jane Smith</h3>
            <p class="text-sm text-gray-600">Felhasználónév: janesmith</p>
            <p class="text-sm text-gray-600">Email: janesmith@example.com</p>
            <p class="text-sm text-gray-600">Telefonszám: +36 30 987 6543</p>
            <p class="text-sm text-gray-600">Jogosultság: User</p>

            <div class="flex space-x-4 mt-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Szerkesztés</button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Törlés</button>
            </div>
        </div>

        <div class="user-card bg-white p-4 rounded-lg shadow-md w-full max-w-sm">
            <h3 class="text-lg font-semibold text-gray-800">Teljes Név: Jane Smith</h3>
            <p class="text-sm text-gray-600">Felhasználónév: janesmith</p>
            <p class="text-sm text-gray-600">Email: janesmith@example.com</p>
            <p class="text-sm text-gray-600">Telefonszám: +36 30 987 6543</p>
            <p class="text-sm text-gray-600">Jogosultság: User</p>

            <div class="flex space-x-4 mt-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Szerkesztés</button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Törlés</button>
            </div>
        </div>

        <div class="user-card bg-white p-4 rounded-lg shadow-md w-full max-w-sm">
            <h3 class="text-lg font-semibold text-gray-800">Teljes Név: Jane Smith</h3>
            <p class="text-sm text-gray-600">Felhasználónév: janesmith</p>
            <p class="text-sm text-gray-600">Email: janesmith@example.com</p>
            <p class="text-sm text-gray-600">Telefonszám: +36 30 987 6543</p>
            <p class="text-sm text-gray-600">Jogosultság: User</p>

            <div class="flex space-x-4 mt-4">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Szerkesztés</button>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Törlés</button>
            </div>
        </div>
    </div>
</body>
</html>
