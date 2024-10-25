<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen games-bg">

<!-- Navegación -->
<nav class="blurred-section p-4 shadow-md border-b">
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
<div class="max-w-md mt-6 mx-auto blurred-section shadow-md rounded-lg p-6 text-center border">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Delete Game</h1>
    <p class="mb-4">Vols eliminar el joc "<span class="font-semibold"><?= htmlspecialchars($game->title) ?></span>"?</p>
    <form action="/games/destroy" method="POST" class="mt-4">
        <input type="hidden" name="id" value="<?= $game->ID ?>">
        <button type="submit" class="w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300 ease-in-out">Delete</button>
    </form>
    <a href="/games" class="text-black bg-gray-200 bg-opacity-50 border rounded hover:underline px-4 py-2 mt-4 block">Cancel</a>
</div>

<!-- Footer -->
<footer class="border-t blurred-section mt-auto bg-gray-100 text-gray-900 py-4 w-full">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Gerard Moreno Campos.</p>
    </div>
</footer>
</body>
</html>
