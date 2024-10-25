<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
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
<div class="max-w-4xl mx-auto mt-6 space-y-6">
    <section class="blurred-section shadow-md rounded-lg p-6 border">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">GAMES</h1>
        <a href="games/create" class="border w-full bg-gray-200 bg-opacity-80 text-black px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Add New Game</a>

        <!-- Tabla mejorada -->
        <div class="overflow-x-auto mt-4 border rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                <tr class="text-black uppercase text-sm leading-normal" style="background-color: rgba(246, 246, 246, 0.8);">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-left">Price</th>
                    <th class="py-3 px-6 text-left">Release Date</th>
                    <th class="py-3 px-6 text-left">Is Multiplayer?</th>
                    <th class="py-3 px-6 text-left">Metacritic</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="text-black text-sm" style="background-color: rgba(206, 206, 206, 0.6);">
                <?php if (empty($games)): ?>
                <tr>
                    <td colspan="6" class="py-3 px-6 text-center">No hi ha jocs disponibles.</td>
                </tr>
                <?php else: ?>
                    <?php foreach ($games as $game): ?>
                <tr class="border-b border-gray-3   00 hover:bg-gray-100 hover:bg-opacity-20 transition duration-300 ease-in-out">
                    <td class="py-3 px-6"><?=$game['ID'] ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($game['title']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars(number_format($game['price'], 2)) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($game['release_date']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($game['is_multiplayer']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars(number_format($game['metacritic'], 1)) ?></td>
                    <td class="py-3 px-6 text-center">
                        <a href="games/edit/<?= $game['ID'] ?>" class="text-blue-500 hover:text-blue-700 transition duration-300 mr-1 ease-in-out">Edit</a>
                        <a href="games/delete/<?= $game['ID'] ?>" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Footer -->
<footer class="blurred-section mt-auto bg-gray-100 text-gray-900 py-4 border-t">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Gerard Moreno Campos.</p>
    </div>
</footer>
</body>
</html>