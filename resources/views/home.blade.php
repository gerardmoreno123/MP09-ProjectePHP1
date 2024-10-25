<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Mi Aplicació</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen home-bg">

<div id="navbar" class="blurred-section p-4"></div>

<!-- Secció Hero -->
<div class="blurred-section bg-gray-200 text-gray-900 border-b">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Benvingut</h1>
        <p class="text-lg mb-6">Descobreix, gestiona i gaudeix d'una àmplia gamma de pel·lícules i jocs en un sol lloc.</p>
        <p class="text-md mb-6">El teu portal per a l'entreteniment: amb les nostres eines, podràs gestionar fàcilment el teu catàleg de pel·lícules i jocs preferits. Explora les últimes novetats, compara valoracions i crea una col·lecció personalitzada que reflecteixi els teus gustos.</p>
    </div>
</div>

<div class="max-w-4xl mx-auto mt-6 space-y-6 px-4 flex-grow"> <!-- Agregamos flex-grow para ocupar el espacio disponible -->
    <!-- Secció de CRUD de Pel·lícules -->
    <section class="blurred-section shadow-md rounded-lg p-6 border">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Gestió de Pel·lícules</h2>
        <p class="text-lg mb-4">A la secció de pel·lícules, podràs gestionar el teu catàleg de pel·lícules favorites. Crea, actualitza i elimina pel·lícules fàcilment.</p>
        <p class="text-lg mb-4">Consulta els detalls de cadascuna d'elles i explora els gèneres i les valoracions.</p>
        <a href="/films" class="border w-full bg-gray-200 bg-opacity-80 text-black px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Accedir a Pel·lícules</a>
    </section>

    <!-- Secció de CRUD de Jocs -->
    <section class="blurred-section shadow-md rounded-lg p-6 border mb-6">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Gestió de Jocs</h2>
        <p class="text-lg mb-4">A la secció de jocs, podràs gestionar la teva col·lecció de jocs. Crea, actualitza i elimina jocs, i consulta els detalls de cadascun.</p>
        <p class="text-lg mb-4">Descobreix nous títols i explora els gèneres disponibles.</p>
        <a href="/games" class="border w-full bg-gray-200 bg-opacity-80 text-black px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300 ease-in-out">Accedir a Jocs</a>
    </section>
</div>

<div id="footer" class="blurred-section mt-6 bg-gray-100 text-gray-900 py-4 border-t"></div>
<script src="/javascript/script.js"></script>
</body>
</html>
