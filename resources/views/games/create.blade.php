<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen games-bg">

<!-- Navegación -->
<nav class="border-b blurred-section p-4 shadow-md">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
        <div class="text-gray-900 text-lg font-bold">Projecte PHP 1</div>
        <div class="nav-links space-x-4 flex items-center">
            <a href="/" class="text-gray-900 hover:text-gray-600">Home</a>
            <a href="/films" class="text-gray-900 hover:text-gray-600">Películas</a>
            <a href="/games" class="text-gray-900 hover:text-gray-600">Juegos</a>
        </div>
    </div>
</nav>

<!-- Contenedor principal -->
<div class="border max-w-md mx-auto mt-6 blurred-section shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4 text-gray-900">Add New Game</h1>
    <form action="/games/store" method="POST">
        <div class="mb-4">
            <label for="title" class="block text-gray-900">Title:</label>
            <input type="text" name="title" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" placeholder="Enter game title" style="background-color: rgba(206, 206, 206, 0.6);">
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-900">Price:</label>
            <input type="number" step="0.01" name="price" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" placeholder="Enter price" style="background-color: rgba(206, 206, 206, 0.6);">
        </div>

        <div class="mb-4">
            <label for="release_date" class="block text-gray-900">Release Date:</label>
            <input type="date" name="release_date" required class="mt-1 block w-full border border-gray-100 text-gray-700 rounded-full p-2 focus:outline-none" style="background-color: rgba(206, 206, 206, 0.6);">
        </div>

        <div class="mb-4">
            <label for="is_multiplayer" class="block text-gray-900">Is multiplayer?</label>
            <input type="hidden" name="is_multiplayer" value="0">
            <input type="checkbox" name="is_multiplayer" value="1" class="form-checkbox h-5 w-5 text-gray-600">
        </div>

        <div class="mb-4">
            <label for="metacritic" class="block text-gray-900">Metacritic:</label>
            <input type="number" name="metacritic" step="0.1" required class="mt-1 block w-full border border-gray-100 text-gray-700 placeholder-gray-700 rounded-full p-2 focus:outline-none" placeholder="Enter metacritic" style="background-color: rgba(206, 206, 206, 0.6);">
        </div>

            <button type="submit" class="w-full bg-gray-200 bg-opacity-80 text-black border px-4 py-2 rounded-full hover:bg-gray-500 transition duration-300 ease-in-out">Add Film</button>
    </form>
</div>

<!-- Footer -->
<footer class="border-t blurred-section mt-auto bg-gray-100 text-gray-900 py-4">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Gerard Moreno Campos.</p>
    </div>
</footer>

</body>
</html>
