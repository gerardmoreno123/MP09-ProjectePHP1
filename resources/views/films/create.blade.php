<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegeix Nova Peli</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen films-bg">

<div id="navbar" class="blurred-section p-4 border-b"></div>

<!-- Contenidor principal -->
<div class="flex-grow flex flex-col justify-center">
    <div class="border max-w-md mx-auto mt-6 blurred-section shadow-md rounded-lg p-6 mb-4">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 text-center">Afegeix Nova Peli</h1>
        <form action="/films/store" method="POST">
            <div class="mb-4">
                <label for="title" class="block text-gray-900">Títol:</label>
                <input type="text" name="title" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" style="background-color: rgba(206, 206, 206, 0.6);" placeholder="Introdueix el títol de la pel·lícula">
            </div>

            <div class="mb-4">
                <label for="director" class="block text-gray-900">Director:</label>
                <input type="text" name="director" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" style="background-color: rgba(206, 206, 206, 0.6);" placeholder="Introdueix el nom del director">
            </div>

            <div class="mb-4">
                <label for="release_date" class="block text-gray-900">Data d'estrena:</label>
                <input type="date" name="release_date" max="2099-12-31" required class="mt-1 block w-full border border-gray-100 text-gray-700 rounded-full p-2 focus:outline-none" style="background-color: rgba(206, 206, 206, 0.6);">
            </div>

            <div class="mb-4">
                <label for="rating" class="block text-gray-900">Valoració:</label>
                <input type="number" name="rating" step="0.1" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" style="background-color: rgba(206, 206, 206, 0.6);" placeholder="Introdueix la valoració">
            </div>

            <button type="submit" class="w-full bg-gray-200 bg-opacity-80 text-black border px-4 py-2 rounded-full hover:bg-gray-500 transition duration-300 ease-in-out">Afegeix Peli</button>
        </form>
        <a href="/films" class="text-center w-full bg-gray-200 bg-opacity-80 text-black border px-4 py-2 rounded-full hover:bg-gray-500 transition duration-300 ease-in-out mt-4 block">Tornar</a>
    </div>
</div>

<!-- Footer dins del contenidor principal -->
<div id="footer" class="blurred-section bg-gray-100 text-gray-900 py-4 border-t"></div>

<script src="/javascript/script.js"></script>
</body>
</html>
