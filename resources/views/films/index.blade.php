<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .blurred-section {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen films-bg overflow-hidden">

<div id="navbar" class="blurred-section p-4 border-b"></div>

<!-- Contenidor principal -->
<div class="max-w-full w-full mx-auto mt-6 space-y-6 flex-grow px-4">
    <section class="blurred-section shadow-md rounded-lg p-6 border">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">FILMS</h1>
        <a href="films/create" class="border w-full bg-gray-200 bg-opacity-80 text-black px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Afegeix Nova Peli</a>

        <!-- Taula millorada -->
        <div class="overflow-x-auto mt-4 border rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead>
                <tr class="text-black uppercase text-sm leading-normal" style="background-color: rgba(246, 246, 246, 0.8);">
                    <th class="py-3 px-2 sm:px-4">ID</th>
                    <th class="py-3 px-2 sm:px-4">Títol</th>
                    <th class="py-3 px-2 sm:px-4">Director</th>
                    <th class="py-3 px-2 sm:px-4">Data d'estrena</th>
                    <th class="py-3 px-2 sm:px-4">Valoració</th>
                    <th class="py-3 px-2 sm:px-4 text-center">Accions</th>
                </tr>
                </thead>
                <tbody class="text-black text-sm" style="background-color: rgba(206, 206, 206, 0.6);">
                <?php if (empty($films)): ?>
                <tr>
                    <td colspan="6" class="py-3 px-6 text-center">No hi ha pel·lícules disponibles.</td>
                </tr>
                <?php else: ?>
                    <?php foreach ($films as $film): ?>
                <tr class="border-b border-gray-300 hover:bg-gray-100 hover:bg-opacity-20 text-center transition duration-300 ease-in-out">
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($film['ID']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($film['title']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($film['director']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars($film['release_date']) ?></td>
                    <td class="py-3 px-2 sm:px-4"><?= htmlspecialchars(number_format($film['rating'], 1)) ?></td>
                    <td class="py-3 px-2 sm:px-4 text-center">
                        <a href="films/edit/<?= $film['ID'] ?>" class="text-blue-500 hover:text-blue-700 transition duration-300 mr-1 ease-in-out">Editar</a>
                        <a href="films/delete/<?= $film['ID'] ?>" class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<div id="footer" class="blurred-section mt-6 bg-gray-100 text-gray-900 py-4 border-t"></div>

<script src="/javascript/script.js"></script>
</body>
</html>
