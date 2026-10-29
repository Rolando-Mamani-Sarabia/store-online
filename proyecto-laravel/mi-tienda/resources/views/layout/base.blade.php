<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda-Online-Tenis</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
  <h1 class="titulo-principal">Tienda-Online-Tenis</h1>
    <button type="button" id="btn-tema" class="boton-modo">☀️ Modo Dia</button>
    <button type="button" id="btn-menu" class="boton-menu">Menu</button>
    <nav class="menu">
        <ul>
            <li><a href="/inicio">Inicio</a></li>
            <li><a href="/tenis/nuevo">Agregar nuevo tenis</a></li>
            <li><a href="/catalogo">Productos</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>
</header>

<main class="contenido">
    @yield('contenido')
</main>

<footer class="footer">
  <p class="coryrigth">&copy; 2026 Tienda-Online-Tenis. Rolando Mamani Sarabia.</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>