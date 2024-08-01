<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de la Empresa</title>
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
            echo '<a href="php/logout.php" class="logout">
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
    <main class="acerca">
        <div class="contenido">
            <h1>Acerca de QuantumTechPro</h1>
            <p>Somos una empresa dedicada a ofrecer los mejores componentes para computadoras. Desde hardware hasta
                accesorios, nuestra misión es proporcionar productos de alta calidad y satisfacer las necesidades de
                nuestros clientes.</p>
            <p>En QuantumTechPro, nos esforzamos por mantenernos actualizados con las últimas tecnologías y tendencias
                del mercado de PC. Nuestro equipo está compuesto por apasionados de la tecnología que están
                comprometidos con brindar un excelente servicio al cliente y ayudar a construir las computadoras de
                ensueño de nuestros usuarios.</p>
            <p>¡Gracias por elegir QuantumTechPro como tu proveedor de componentes de PC!</p>
        </div>
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
