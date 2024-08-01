<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/productos.css">
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
    <main class="productos-categorias">

        <!-- Categoría 1: Tarjetas Madre -->
        <section id="tarjetas-madre" class="categoria">
            <h2>Tarjetas Madre</h2>
            <!-- Lista de productos de la categoría Tarjetas Madre -->
            <div class="productos">
                <div id="targeta_madre1" class="producto">
                    <img src="Imagenes/productos/targeta1.jpg" alt="Producto 1">
                    <p>Tarjeta Madre ASUS ATX ROG Maximus Z790 HERO, S-1700, Intel Z790, HDMI, 192GB, DDR5 para Intel
                    </p>
                    <p>$9,499.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="targeta_madre2" class="producto">
                    <img src="Imagenes/productos/targeta2.jpg" alt="Producto 2">
                    <p>Tarjeta Madre ASUS ATX ROG Strix B650-A GAMING WIFI, S-AM5, AMD B650, HDMI, 128GB DDR5 para AMD
                    </p>
                    <p>$5,319.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="targeta_madre3" class="producto">
                    <img src="Imagenes/productos/targeta3.jpg" alt="Producto 3">
                    <p>Tarjeta Madre ASUS ATX ROG Maximus Z790 HERO, S-1700, Intel Z790, HDMI, 192GB, DDR5 para Intel
                    </p>
                    <p>$10,499.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 2: Tarjetas Gráficas -->
        <section id="tarjetas-graficas" class="categoria">
            <h2>Tarjetas Gráficas</h2>
            <!-- Lista de productos de la categoría Tarjetas Gráficas -->
            <div class="productos">
                <div id="targeta_grafica1" class="producto">
                    <img src="Imagenes/productos/grafica1.jpg" alt="Producto 1">
                    <p>Tarjeta de Video ASUS NVIDIA GeForce GTX 1660 SUPER Phoenix OC, 6GB 192-bit GDDR6, PCI Express 3.0</p>
                    <p>$4,619.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="targeta_grafica2" class="producto">
                    <img src="Imagenes/productos/grafica2.jpg" alt="Producto 2">
                    <p>Tarjeta de Video ASUS NVIDIA Dual GeForce RTX 4070 SUPER OC, 12GB 192-bit GDDR6X, PCI Express 4.0</p>
                    <p>$11,709.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="targeta_grafica3" class="producto">
                    <img src="Imagenes/productos/grafica3.jpg" alt="Producto 3">
                    <p>Tarjeta de Video PNY NVIDIA GeForce RTX 4070 Ti SUPER 16GB XLR8 Gaming VERTO EPIC-X RGB OC Triple Fan</p>
                    <p>$14,999.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 3: Procesadores -->
        <section id="procesadores" class="categoria">
            <h2>Procesadores</h2>
            <!-- Lista de productos de la categoría Procesadores -->
            <div class="productos">
                <div id="procesador1" class="producto">
                    <img src="Imagenes/productos/procesador1.jpg" alt="Producto 1">
                    <p>Procesador Intel Core i5-12600KF S-1700, 3.70GHz, 10-Core, 20MB Smart Cache (12va. Generación - Alder Lake)</p>
                    <p>$3,189.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="procesador2" class="producto">
                    <img src="Imagenes/productos/procesador2.jpg" alt="Producto 2">
                    <p>Procesador AMD Ryzen 9 7900X3D, S-AM5, 4.40GHz, 12-Core, 128MB L2/L3 Cache - no incluye Disipador</p>
                    <p>Descripción del Producto 4</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="procesador3" class="producto">
                    <img src="Imagenes/productos/procesador3.jpg" alt="Producto 3">
                    <p>Procesador AMD Ryzen 7 5800X, S-AM4, 3.80GHz, 8-Core, 32MB L3 Cache - no incluye Disipador</p>
                    <p>$3,579.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 4: Memorias Ram -->
        <section id="memorias-ram" class="categoria">
            <h2>Memorias Ram</h2>
            <!-- Lista de productos de la categoría Tarjetas Madre -->
            <div class="productos">
                <div id="memoria_ram1" class="producto">
                    <img src="Imagenes/productos/ram1.jpg" alt="Producto 1">
                    <h3>Memoria RAM XPG Spectrix D50 Titanio DDR4, 3200MHz, 32GB, Non-ECC, CL16, XMP, Gris</h3>
                    <p>$1,369.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <!-- Producto 2 -->
                <div id="memoria_ram2" class="producto">
                    <img src="Imagenes/productos/ram2.jpg" alt="Producto 2">
                    <h3>Kit Memoria RAM Corsair Dominator Platinum RGB DDR4, 3200MHz, 16GB (2x 8GB), CL16, XMP, Blanco</h3>
                    <p>$1,399.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <!-- Producto 2 -->
                <div id="memoria_ram3" class="producto">
                    <img src="Imagenes/productos/ram3.jpg" alt="Producto 3">
                    <h3>Memoria RAM Kingston FURY Beast DDR4, 3200MHz, 32GB, Non-ECC, CL16, XMP</h3>
                    <p>$1,189.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 5: Almacenamiento -->
        <section id="almacenamiento" class="categoria">
            <h2>Unidades de Almacenamiento</h2>
            <!-- Lista de productos de la categoría Memorias Ram -->
            <div class="productos">
                <div id="memoria_ram1" class="producto">
                    <img src="Imagenes/productos/ssd1.jpg" alt="Producto 1">
                    <p>SSD HP S650, 960GB, SATA III, 2.5"</p>
                    <p>$859.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="memoria_ram2" class="producto">
                    <img src="Imagenes/productos/ss2.jpg" alt="Producto 2">
                    <h3>SSD Western Digital WD Blue SN580 NVMe, 500GB, PCI Express 4.0, M.2</h3>
                    <p>$609.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="memoria_ram3" class="producto">
                    <img src="Imagenes/productos/ss3.jpg" alt="Producto 3">
                    <p>SSD Western Digital WD Green, 1TB, SATA III, 2.5", 7mm</p>
                    <p>$889.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 6: Gabinetes -->
        <section id="gabinetes" class="categoria">
            <h2>Gabinetes</h2>
            <div class="productos">
                <div id="gabinete1" class="producto">
                    <img src="Imagenes/productos/ga1.webp" alt="Producto 1">
                    <h3>Gabinete Naceb Cypher con Ventana RGB, Midi-Tower, ATX, USB 3.0/2.0, sin Fuente, 3 Ventiladores Instalados, Negro</h3>
                    <p>$719.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="gabinete2" class="producto">
                    <img src="Imagenes/productos/ga2.webp" alt="Producto 2">
                    <p>Gabinete ASUS TUF Gaming GT501 con Ventana RGB, Midi Tower, ATX/EATX/Micro ATX/Mini-ITX, USB 3.1, sin Fuente</p>
                    <p>$2,849.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="gabinete3" class="producto">
                    <img src="Imagenes/productos/ga3.jpg" alt="Producto 3">
                    <p>Gabinete NZXT H5 Flow con Ventana, Midi-Tower, Mini-ITX/Micro-ATX/ATX/EATX, USB 3.2</p>
                    <p>$1,839.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

        <!-- Categoría 7: Fuentes de Alimentacion -->
        <section id="fuente-alimentacion" class="categoria">
            <h2>Fuentes de Alimentacion</h2>
            <div class="productos">
                <div id="fuente1" class="producto">
                    <img src="Imagenes/productos/f1.jpg" alt="Producto 1">
                    <p>Fuente de Poder XPG CORE REACTOR 80 PLUS Gold, 24-pin ATX, 120mm, 750W</p>
                    <p>$1,539.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="fuente2" class="producto">
                    <img src="Imagenes/productos/f21.jpg" alt="Producto 2">
                    <p>Fuente de Poder EVGA 850 BQ 80 PLUS Bronze, ATX, 24-pin ATX, 850W</p>
                    <p>$1,489.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="fuente3" class="producto">
                    <img src="Imagenes/productos/f3.jpg" alt="Producto 3">
                    <p>Fuente de Poder Acteck ES-05004, 20+4 pin ATX, 120mm, 700W, Negro</p>
                    <p>$559.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>
        <!-- Categoría 8: Accesorios -->
        <section id="accesorios" class="categoria">
            <h2>Accesorios</h2>
            <!-- Lista de productos de la categoria Accesorios -->
            <div class="productos">
                <div id="accesorio1" class="producto">
                    <img src="Imagenes/productos/t1.jpg" alt="Producto 1">
                    <p>Logitech Teclado Gamer PRO X TKL, Mecánico, Switch GX Brown, Inalámbrico, Negro (Inglés)</p>
                    <p>$2,469.00/p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="accesorio2" class="producto">
                    <img src="Imagenes/productos/m1.jpg" alt="Producto 2">
                    <p>Mouse Gamer Logitech Óptico G305, Inalámbrico, USB, 12.000DPI, Azul</p>
                    <p>$779.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="accesorio3" class="producto">
                    <img src="Imagenes/productos/a1.jpg" alt="Producto 3">
                    <p>HyperX Audífonos Gamer Cloud Stinger Core, Alámbrico, 1.3 Metros, 3.5mm, Negro/Azul</p>
                    <p>$276.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>
        <!-- Categoría 9: Monitores -->
        <section id="monitores" class="categoria">
            <h2>Monitores</h2>
            <!-- Lista de productos de la categoria Monitores -->
            <div class="productos">
                <div id="monitor1" class="producto">
                    <img src="Imagenes/productos/mo1.jpg" alt="Producto 1">
                    <p>Monitor Ghia MG2020 LED 19.5", HD, HDMI, Negro</p>
                    <p>$1,209.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="monitor2" class="producto">
                    <img src="Imagenes/productos/mo2.jpg" alt="Producto 2">
                    <h3>Monitor LG 27MK430H-B LED 27", Full HD, FreeSync, HDMI, Negro</h3>
                    <p>$2,519.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
                <div id="monitor3" class="producto">
                    <img src="Imagenes/productos/mo3.jpg" alt="Producto 3">
                    <h3>Monitor Gamer LG 24GQ50F-B UltraGear LED 24", Full HD, FreeSync, 165Hz, HDMI, Negro</h3>
                    <p>$3,949.00</p>
                    <button>Cromprar</button>
                    <button>Agregar al Carrito</button>
                </div>
            </div>
        </section>

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