<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Mi Aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<nav class="bg-green-600 p-4 shadow-md">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">Projecte PHP 1</div>
        <div class="nav-links space-x-4 flex items-center">
            <a href="/" class="text-white hover:text-green-200">Home</a>
            <a href="/films" class="text-white hover:text-green-200">Pel·lícules</a>
            <a href="/music" class="text-white hover:text-green-200">Música</a>
        </div>
    </div>
</nav>

<div class="max-w-4xl mx-auto mt-6 space-y-6">
    <section class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-4xl font-bold mb-4">Benvingut a Mi Aplicació</h1>
        <p class="text-lg mb-4">Descobreix una àmplia gamma de pel·lícules i música interessants.</p>
        <p class="text-lg mb-4">Navega per la nostra col·lecció i gestiona el teu contingut fàcilment.</p>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold mb-4">Pel·lícules</h2>
        <p class="text-lg mb-4">A la secció de pel·lícules, podràs gestionar el teu catàleg de pel·lícules favorites. Crea, actualitza i elimina pel·lícules fàcilment, i consulta els detalls de cadascuna d'elles.</p>
        <p class="text-lg mb-4">Explora els gèneres, les valoracions i les opinions dels usuaris per trobar la pel·lícula perfecta per a cada ocasió.</p>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold mb-4">Música</h2>
        <p class="text-lg mb-4">A la secció de música, podràs gestionar la teva biblioteca musical. Crea, actualitza i elimina cançons i àlbums, i consulta els detalls de cada tema musical.</p>
        <p class="text-lg mb-4">Descobreix nous artistes, gèneres i àlbums recomanats per enriquir la teva experiència musical.</p>
    </section>
</div>

<footer class="mt-auto bg-gray-800 text-white py-4">
    <div class="max-w-4xl mx-auto text-center">
        <p>&copy; 2024 Mi Aplicación. Tots els drets reservats.</p>
    </div>
</footer>

<script src="/javascript/script.js"></script>
</body>
</html>
