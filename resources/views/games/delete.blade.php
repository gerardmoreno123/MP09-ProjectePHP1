<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Joc</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen games-bg">

<!-- Navegació -->
<div id="navbar" class="blurred-section p-4 border-b"></div>

<!-- Contenidor principal -->
<div class="flex-grow flex flex-col justify-center">
    <div class="border max-w-md mx-auto blurred-section shadow-md rounded-lg p-6 text-center">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">Eliminar Joc</h1>
        <p class="mb-4">Vols eliminar el joc "<span class="font-semibold"><?= htmlspecialchars($game->title) ?></span>"?</p>
        <form action="/games/destroy" method="POST" class="mt-4">
            <input type="hidden" name="id" value="<?= htmlspecialchars($game->ID) ?>">
            <button type="submit" class="w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300 ease-in-out">Eliminar</button>
        </form>
        <a href="/games" class="text-black bg-gray-200 bg-opacity-50 border rounded hover:underline px-4 py-2 mt-4 block">Cancel·la</a>
    </div>
</div>

<!-- Footer dins del contenidor principal -->
<div id="footer" class="blurred-section bg-gray-100 text-gray-900 py-4 border-t"></div>

<script src="/javascript/script.js"></script>
</body>
</html>
