<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header>
<div class="logo">
            <a href="index.php">
                <img src="Imagenes/logotipos/logo2.png" alt="Logo de la empresa">
            </a>
        </div>
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Buscar...">
        <button onclick="buscarProductos()">Buscar</button>
    </div>
    <div class="user-actions">
        <a href="carrito.html" class="cart">
            <img src="Imagenes/iconos/carrito.png" alt="Carrito">
        </a>
        <?php
        session_start(); // Inicia la sesión

        if (isset($_SESSION['nombre'])) {
            // Si el usuario está logueado
            echo '<p class="welcome-message">Bienvenido, ' . htmlspecialchars($_SESSION['nombre']) . '!</p>';
            echo '<a href="logout.php" class="logout">
                      <img src="Imagenes/iconos/logout.png" alt="Cerrar Sesión">
                  </a>';
        } else {
            // Si el usuario no está logueado
            echo '<a href="login.html" class="login">
                      <img src="Imagenes/iconos/login.png" alt="Iniciar Sesión">
                  </a>';
        }
        ?>
    </div>
</header>

    <nav>
        <ul>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="tiendas.php">Tiendas Oficiales</a></li>
            <li><a href="promociones.php">Promociones</a></li>
            <li><a href="acerca.php">Acerca de la Empresa</a></li>
            <li><a href="comparar.php">Comparar Componentes</a></li>
        </ul>
    </nav>
        <div class="user-actions">
            <a href="carrito.html">Carrito</a>
            <a href="login.html">Iniciar Sesión</a>
        </div>
    </header>

    <main>
        <h1>Promociones Actuales</h1>
        <section class="promociones">
            <!-- Ejemplo de una promoción -->
            <article class="promocion">
                <img src="Imagenes/productos/promocion1.jpg" alt="Promoción 1">
                <h2>25% de descuento en Tarjetas Gráficas</h2>
                <p>Disfruta de un 25% de descuento en modelos seleccionados de tarjetas gráficas durante este mes.</p>
                <a href="productos.html#tarjetas-graficas" class="ver-detalles">Ver Detalles</a>
            </article>

            <!-- Agrega más promociones aquí -->
            <article class="promocion">
                <img src="Imagenes/productos/promocion2.jpg" alt="Promoción 2">
                <h2>Compra un monitor y llévate un mouse gratis</h2>
                <p>Por la compra de cualquier monitor de nuestra selección, recibe un mouse gamer sin costo adicional.</p>
                <a href="productos.html#monitores" class="ver-detalles">Ver Detalles</a>
            </article>
            
            <!-- Continúa agregando promociones según sea necesario -->
        </section>
    </main>

    <footer>
        <p>Derechos de autor © 2024 Comercio de Componentes de Computadoras QuantumTechPro. Todos los derechos
            reservados.</p>
            <p>Kevin Axel Ramirez Rosas</p>
            <p>DSM - 401</p>
    </footer>
</body>
</html>
