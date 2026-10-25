<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda-Online-Tenis</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<header class="header">
  <h1 class="titulo-principal">Tienda-Online-Tenis</h1>
    <nav class="menu">
        <ul>
            <li><a href="../inicio.blade.php">Inicio</a></li>
            <li><a href="../catalogo.bladed.php">Productos</a></li>
            <li><a href="../contacto.blade.php">Contacto</a></li>
        </ul>
    </nav>
</header>

<main class="contenido">
    @yield('contenido')
</main>

<footer class="footer">
  <p class="coryrigth">&copy; 2026 Tienda-Online-Tenis. Rolando Mamani Sarabia.</p>
</footer>

<script src="script.js"></script>

</body>
</html>