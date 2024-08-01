let indice = 0;

function mostrarImagenes(n) {
    let i;
    let imagenes = document.getElementsByClassName("carrusel-imagenes")[0].getElementsByTagName("img");
    if (n >= imagenes.length) {indice = 0}
    if (n < 0) {indice = imagenes.length - 1}
    for (i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = "none";
    }
    imagenes[indice].style.display = "block";
}

mostrarImagenes(indice);

function mover(n) {
    mostrarImagenes(indice += n);
}

// Agrega la funcionalidad de cambio automático
function cambiarAutomaticamente() {
    mover(1);
    setTimeout(cambiarAutomaticamente, 3000);
}

cambiarAutomaticamente();


function buscarProductos() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    let target = '';

    // Mapa de palabras clave y sus respectivos targets
    const keywordTargets = [
        { keywords: ['tarjetas madre', 'tarjeta madre'], target: '#tarjetas-madre' },
        { keywords: ['tarjetas grafica'], target: '#tarjetas-graficas' },
        { keywords: ['procesadores'], target: '#procesadores' },
        { keywords: ['memorias ram'], target: '#memorias-ram' },
        { keywords: ['almacenamiento'], target: '#almacenamiento' },
        { keywords: ['gabinetes'], target: '#gabinetes' },
        { keywords: ['fuentes de alimentacion'], target: '#fuente-alimentacion' },
        { keywords: ['accesorios'], target: '#accesorios' },
        { keywords: ['monitores'], target: '#monitores' }
    ];

    // Verificar si la consulta contiene alguna palabra clave
    for (let i = 0; i < keywordTargets.length; i++) {
        if (keywordTargets[i].keywords.some(keyword => query.includes(keyword))) {
            target = keywordTargets[i].target;
            break;
        }
    }

    if (target) {
        window.location.href = 'productos.php' + target;
    } else {
        alert('Productos no encontrados');
    }
}
