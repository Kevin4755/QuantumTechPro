<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas Oficiales</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Encabezado -->
    <header>
<div class="logo">
            <a href="index.php">
                <img src="Imagenes/logo2.png" alt="Logo de la empresa">
            </a>
        </div>
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Buscar...">
        <button onclick="buscarProductos()">Buscar</button>
    </div>
    <div class="user-actions">
        <a href="carrito.html" class="cart">
            <img src="Imagenes/icons/carrito.png" alt="Carrito">
        </a>
        <?php
        session_start(); // Inicia la sesión

        if (isset($_SESSION['nombre'])) {
            // Si el usuario está logueado
            echo '<p class="welcome-message">Bienvenido, ' . htmlspecialchars($_SESSION['nombre']) . '!</p>';
            echo '<a href="logout.php" class="logout">
                      <img src="Imagenes/icons/logout.png" alt="Cerrar Sesión">
                  </a>';
        } else {
            // Si el usuario no está logueado
            echo '<a href="login.html" class="login">
                      <img src="Imagenes/icons/login.png" alt="Iniciar Sesión">
                  </a>';
        }
        ?>
    </div>
</header>

    <!-- Navegación -->
    <nav>
        <ul>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="tiendas.php">Tiendas Oficiales</a></li>
            <li><a href="promociones.php">Promociones</a></li>
            <li><a href="acerca.php">Acerca de la Empresa</a></li>
            <li><a href="comparar.php">Comparar Componentes</a></li>
        </ul>
    </nav>

    <!-- Contenido principal -->
    <main class="tiendas">
        <h1>Tiendas Oficiales</h1>
        <div class="tienda">
            <img src="Imagenes/tienda1.jpg" alt="Tienda 1">
            <h2>Tienda de Componentes TechPro</h2>
            <p>Encuentra los mejores componentes de computadora en nuestra tienda oficial. ¡Calidad garantizada!</p>
            <a href="tienda1.html">Ver más</a>
        </div>
        <div class="tienda">
            <img src="Imagenes/tienda2.jpg" alt="Tienda 2">
            <h2>Tienda de Accesorios Gamer</h2>
            <p>Descubre una amplia selección de accesorios para gamers en nuestra tienda oficial. ¡Envío gratis!</p>
            <a href="tienda2.html">Ver más</a>
        </div>
        <!-- Agrega más tiendas según sea necesario -->
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Derechos de autor © 2024 Comercio de Componentes de Computadoras QuantumTechPro. Todos los derechos
            reservados.</p>
            <p>Kevin Axel Ramirez Rosas</p>
            <p>DSM - 401</p>
    </footer>

</body>

</html>
