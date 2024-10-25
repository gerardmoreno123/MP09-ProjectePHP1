<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jocs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .blurred-section {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen games-bg overflow-hidden">

<!-- Navegació -->
<nav class="blurred-section p-4 border-b shadow-md">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
        <div class="text-gray-900 text-lg font-bold">Projecte PHP 1</div>
        <div class="nav-links space-x-4 flex items-center">
            <a href="/" class="text-gray-900 hover:text-gray-600">Inici</a>
            <a href="/films" class="text-gray-900 hover:text-gray-600">Pel·lícules</a>
            <a href="/games" class="text-gray-900 hover:text-gray-600">Jocs</a>
        </div>
    </div>
</nav>

<!-- Contenidor principal -->
<div class="max-w-full w-full mx-auto mt-6 space-y-6 flex-grow px-4">
    <section class="blurred-section shadow-md rounded-lg p-6 border">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">JOCS</h1>
        <a href="games/create" class="border w-full bg-gray-200 bg-opacity-80 text-black px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Afegeix Nou Joc</a>

        <!-- Taula -->
        <div class="overflow-x-auto mt-4 border rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                <tr class="text-black uppercase text-sm leading-normal" style="background-color: rgba(246, 246, 246, 0.8);">
                    <th class="py-3 px-2 sm:px-4">ID</th>
                    <th class="py-3 px-2 sm:px-4">Títol</th>
                    <th class="py-3 px-2 sm:px-4">Preu</th>
                    <th class="py-3 px-2 sm:px-4">Data de Lançament</th>
                    <th class="py-3 px-2 sm:px-4">Multijugador?</th>
                    <th class="py-3 px-2 sm:px-4">Metacritic</th>
                    <th class="py-3 px-2 sm:px-4 text-center">Accions</th>
                </tr>
                </thead>
                <tbody class="text-black text-sm" style="background-color: rgba(206, 206, 206, 0.6);">
                <?php if (empty($games)): ?>
                <tr>
                    <td colspan="7" class="py-3 px-6 text-center">No hi ha jocs disponibles.</td>
                </tr>
                <?php else: ?>
                    <?php foreach ($games as $game): ?>
                <tr class="border-b border-gray-300 hover:bg-gray-100 hover:bg-opacity-20 transition duration-300 ease-in-out text-center">
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($game['ID']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($game['title']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars(number_format($game['price'], 2)) ?> €</td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($game['release_date']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($game['is_multiplayer'] ? 'Sí' : 'No') ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars(number_format($game['metacritic'], 1)) ?></td>
                    <td class="py-3 px-2 sm:px-4 text-center">
                        <a href="games/edit/<?= $game['ID'] ?>" class="text-blue-500 hover:text-blue-700 transition duration-300 mr-1 ease-in-out">Edita</a>
                        <a href="games/delete/<?= $game['ID'] ?>" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out">Elimina</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Peu de pàgina -->
<footer class="blurred-section mt-6 bg-gray-100 text-gray-900 py-4 border-t">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Gerard Moreno Campos.</p>
    </div>
</footer>
</body>
</html>
