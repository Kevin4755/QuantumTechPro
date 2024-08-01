<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercio de Componentes de Computadoras</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header>
    <div class="logo">
        <img src="Imagenes/logotipos/logo2.png" alt="Logo de la empresa">
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
    <div class="carrusel">
        <div class="carrusel-imagenes">
            <img src="Imagenes/banners/1.jpg" alt="Banner 1" class="activo">
            <img src="Imagenes/banners/2.png" alt="Banner 2" class="activo">
            <img src="Imagenes/banners/3.png" alt="Banner 3" class="activo">
            <img src="Imagenes/banners/4.png" alt="Banner 4" class="activo">
            <img src="Imagenes/banners/5.png" alt="Banner 5" class="activo">
            <!-- Agrega más imágenes según sea necesario -->
        </div>
        <button class="anterior" onclick="mover(-1)">&#10094;</button>
        <button class="siguiente" onclick="mover(1)">&#10095;</button>
    </div>


    <!-- Texto de bienvenida -->
    <div class="texto-bienvenida">
        <h1>Arma tu primera computadora</h1>
        <p>¡Encuentra los componentes perfectos para construir tu propia computadora personalizada!</p>
    </div>

    <!-- Contenido principal -->
    <main class="productos-grid">

        <!-- ProductoS -->
        <div class="producto">
            <img src="Imagenes/productos/targeta1.jpg" alt="Producto 1">
            <p>Tarjeta Madre ASUS ATX ROG Maximus Z790 HERO, S-1700, Intel Z790, HDMI, 192GB, DDR5 para Intel</p>
            <p>$9,499.00</p>
            <a href="productos.php#targeta_madre1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/grafica1.jpg" alt="Producto 2">
            <p>Tarjeta de Video MSI NVIDIA GeForce RTX 3060 Ventus 3X 12G OC, 12GB 192-bit GDDR6, PCI Express 4.0</p>
            <p>$5,679.00</p>
            <a href="productos.php#targeta_grafica1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/procesador1.jpg" alt="Producto 3">
            <p>Procesador AMD Ryzen 9 5950X, S-AM4, 3.40GHz, 8MB L3 Cache - no incluye Disipador</p>
            <p>$6,639.00</p>
            <a href="productos.php#procesador1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/memoria1.jpg" alt="Producto 4">
            <p>Kit Memoria RAM Corsair Vengeance RGB RS DDR4, 3600MHz, 16GB (2 x 8GB), CL18, XMP</p>
            <p>$909.00</p>
            <a href="productos.php#memoria_ram1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/unidad1.jpg" alt="Producto 5">
            <p>SSD Kingston KC3000 NVMe, 1TB, PCI Express 4.0, M.2</p>
            <p>$1,559.00</p>
            <a href="productos.php#unidad1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/gabinete1.jpg" alt="Producto 6">
            <p>Gabinete NZXT H9 Flow con Ventana, Midi-Tower, Mini-ITX/Micro-ATX/ATX, USB 3.2, sin Fuente, 4
                Ventiladores Instalados, Blanco</p>
            <p>$2,349.00</p>
            <a href="productos.php#gabinete1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/fuente1.jpg" alt="Producto 7">
            <p>Fuente de Poder XPG KYBER 80 PLUS Gold, 20+4 pin ATX, 120mm, 750W</p>
            <p>$1,289.00</p>
            <a href="productos.php#fuente1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/accesorio1.jpg" alt="Producto 8">
            <p>Logitech Teclado Gamer PRO X TKL, Mecánico, Switch GX Brown, Inalámbrico, Negro (Inglés)</p>
            <p>$2,469.00</p>
            <a href="productos.php#accesorio1"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/mouse1.jpg" alt="Producto 9">
            <p>Mouse Gamer Logitech Óptico G203 LightSync, Alámbrico, USB, 8000DPI, Negro</p>
            <p>$478.00</p>
            <a href="productos.php#accesorio2"class="ver-detalles">Ver Detalles</a>
        </div>

        <div class="producto">
            <img src="Imagenes/productos/monitor1.jpg" alt="Producto 10">
            <p>Monitor Gamer LG 24GQ50F-B UltraGear LED 24", Full HD, FreeSync, 165Hz, HDMI, Negro</p>
            <p>$3,949.00</p>
            <a href="productos.php#monitor1"class="ver-detalles">Ver Detalles</a>
        </div>

    </main>

    <section id="contacto">
        <h2>Contactanos</h2>
        <form id="formularioContacto" action="php/procesar_contacto.php" method="post">
            <div class="campoFormulario">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campoFormulario">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="campoFormulario">
                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" required>
            </div>
            <div class="campoFormulario">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>
    <!-- Pie de página -->
    <footer>
        <p>Derechos de autor © 2024 Comercio de Componentes de Computadoras QuantumTechPro. Todos los derechos
            reservados.</p>
            <p>Kevin Axel Ramirez Rosas</p>
            <p>DSM - 401</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>