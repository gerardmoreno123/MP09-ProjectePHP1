<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

<!-- Navegación -->
<nav class="bg-green-600 p-4 shadow-md">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">Projecte PHP 1</div>
        <div class="nav-links space-x-4 flex items-center">
            <a href="/" class="text-white hover:text-green-200">Home</a>
            <a href="/films" class="text-white hover:text-green-200">Películas</a>
            <a href="/music" class="text-white hover:text-green-200">Música</a>
        </div>
    </div>
</nav>

<!-- Contenedor principal -->
<div class="max-w-4xl mx-auto mt-6 space-y-6">
    <section class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4 text-white">Films</h1>
        <a href="films/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Film</a>
        <table class="min-w-full mt-4 bg-green-600 border border-gray-600">
            <thead>
            <tr class="bg-green-500 text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-left">Director</th>
                <th class="py-3 px-6 text-left">Release date</th>
                <th class="py-3 px-6 text-left">Rating</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-300 text-sm font-light">
            <?php if (empty($films)): ?>
            <tr>
                <td colspan="6" class="py-3 px-6 text-center">No hi ha pelis disponibles.</td>
            </tr>
            <?php else: ?>
                <?php foreach ($films as $film): ?>
            <tr class="border-b border-gray-600 hover:bg-gray-600">
                <td class="py-3 px-6"><?=$film['ID'] ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['title']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['director']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars($film['release_date']) ?></td>
                <td class="py-3 px-6"><?= htmlspecialchars(number_format($film['rating'], 1)) ?></td>
                <td class="py-3 px-6 text-center">
                    <a href="films/edit/<?= $film['ID'] ?>" class="text-blue-900 hover:text-blue-300 mr-4">Edit</a>
                    <a href="films/delete/<?= $film['ID'] ?>" class="text-red-900 hover:text-red-300">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </section>
</div>

<!-- Footer -->
<footer class="mt-auto bg-gray-800 text-white py-4">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Mi Aplicación. Tots els drets reservats.</p>
    </div>
</footer>

<script src="/javascript/script.js"></script>
</body>
</html>
