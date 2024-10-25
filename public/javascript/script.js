// Cargar el Navbar
fetch('/partials/nav.blade.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('navbar').innerHTML = data;
    });

// Cargar el Footer
fetch('/partials/footer.blade.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('footer').innerHTML = data;
    });