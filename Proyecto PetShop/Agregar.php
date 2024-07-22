<?php
// Establecer conexión con la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "productos administrador");

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreProducto = $_POST['nombreProducto'];
    $marcaProducto = $_POST['marcaProducto'];
    $categoriaProducto = $_POST['categoriaProducto'];
    $stockProducto = $_POST['stockProducto'];
    $precioProducto = $_POST['precioProducto'];
    $descripcionProducto = $_POST['descripcionProducto'];

    // Validar los datos recibidos
    if (!empty($nombreProducto) && !empty($marcaProducto) && !empty($categoriaProducto) && is_numeric($stockProducto) && is_numeric($precioProducto)) {
        // Preparar la consulta de inserción
        $consultaInsercion = "INSERT INTO productos (product_nombre, product_marca, product_categoria, product_stock, product_precio, product_descripcion) VALUES ('$nombreProducto', '$marcaProducto', '$categoriaProducto', $stockProducto, $precioProducto, '$descripcionProducto')";

        // Ejecutar la consulta
        if (mysqli_query($conexion, $consultaInsercion)) {
            $productoexitoso = "<p>Producto ". $nombreProducto ." agregado exitosamente.</p>";
        } 
    } 
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/estilos.css">
</head>
<!--ENCABEZADO-->
<header>
    <!-- MENU DE NAVEGACION -->
    <div class="logo">
        <a href="./1 - index-inicio.html"><img src="./assets/images/bg6.jpg" alt="logo"></a>
    </div>
    <nav>
        <div class="headermenu">
            <ul>
                <li><a href="./1 - index-inicio.html">Inicio</a></li>
                <li><a href="./2 - index-quienes-somos.html">¿Quiénes Somos?</a></li>
                <li><a href="./3 - index-Productos.html">Productos</a></li>
                <li><a href="./4 - index-Iniciar-Sesion.html">Ingresar</a></li>
                <li><a href="./5 - index-Carrito.html">Carrito</a></li>
            </ul>
        </div>
        <div class="search-container">
            <form class="search-form">
                <input type="text" placeholder="Buscar..." name="search" class="search-input">
                <button type="submit" class="search-button">Buscar</button>
            </form>
        </div>
    </nav>
</header>
        
<body class="agregar_producto">
    <div class="contenedor_agregar">
        <form action="" method="post" class="formulario_agregar">
            <h2>Alta de producto</h2>
            <input type="text" name="nombreProducto" placeholder="Nombre del producto" required>
            <input type="text" name="marcaProducto" placeholder="Marca" required>
            <select class="select_agregar" name="categoriaProducto" id="productCategoria" required>
                <option value="">Seleccione una categoría</option>
                <option value="alimentos">Alimentos</option>
                <option value="juguetes">Juguetes</option>
                <option value="accesorios">Accesorios</option>
                <option value="higiene">Higiene</option>
            </select>
            <input type="number" name="stockProducto" placeholder="Stock" required>
            <input type="number" name="precioProducto" placeholder="Precio" step="0.01" required>
            <input type="text" name="descripcionProducto" placeholder="Descripción">
            <input type="file" id="imagen_producto" name="imagen_producto"><br>
            <button id="addNewProductButton" type="submit">Dar de alta producto</button>
            <a class="buttonvolver" href="./6 - index - admin - productos.php">Volver a la lista de productos</a>
            
            <?php
            "<br><br>";
            if(!empty ($productoexitoso)) 

                echo $productoexitoso;

            ?>
        </form>
        <br>
    </div>
</body>

<!--PIE DE PAGINA-->    
<footer class="footer">
    <!--LOGO CONTENEDOR-->
        <div class="logosolo">
            <img src="./assets/images/bg6.jpg" alt="logosolo">
        </div>
    <!--CONTENIDO DEL PIE DE PAGINA + CONTENEDOR DE LINKS-->
    <div class="contenedor">
        <div class="footer-links divSeguinos">
            <h4> Seguinos </h4>
            <ul>
                <li> <!-- Instagram -->
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                </svg><a href="http://www.instagram.com" target="_blank">Instagram</a></li>
                <li> <!-- Facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path><path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"></path></svg><a href="http://www.facebook.com" target="_blank">Facebook</a></li>
                <li> <!-- Whatsapp -->
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path></svg><a href="http://www.whatsapp.com" target="_blank">Whatsapp</a></li>
            </ul>
        </div>
        <div class="footer-links divContactanos">
            <h4>Contactanos</h4>
            <ul>    
                <li> <!-- Direccion -->
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48"><path fill="#1c9957" d="M42,39V9c0-1.657-1.343-3-3-3H9C7.343,6,6,7.343,6,9v30c0,1.657,1.343,3,3,3h30C40.657,42,42,40.657,42,39z"></path><path fill="#3e7bf1" d="M9,42h30c1.657,0-15-16-15-16S7.343,42,9,42z"></path><path fill="#cbccc9" d="M42,39V9c0-1.657-16,15-16,15S42,40.657,42,39z"></path><path fill="#efefef" d="M39,42c1.657,0,3-1.343,3-3v-0.245L26.245,23L23,26.245L38.755,42H39z"></path><path fill="#ffd73d" d="M42,9c0-1.657-1.343-3-3-3h-0.245L6,38.755V39c0,1.657,1.343,3,3,3h0.245L42,9.245V9z"></path><path fill="#d73f35" d="M36,2c-5.523,0-10,4.477-10,10c0,6.813,7.666,9.295,9.333,19.851C35.44,32.531,35.448,33,36,33s0.56-0.469,0.667-1.149C38.334,21.295,46,18.813,46,12C46,6.477,41.523,2,36,2z"></path><path fill="#752622" d="M36 8.5A3.5 3.5 0 1 0 36 15.5A3.5 3.5 0 1 0 36 8.5Z"></path><path fill="#fff" d="M14.493,12.531v2.101h2.994c-0.392,1.274-1.455,2.185-2.994,2.185c-1.833,0-3.318-1.485-3.318-3.318s1.486-3.318,3.318-3.318c0.824,0,1.576,0.302,2.156,0.799l1.548-1.547C17.22,8.543,15.92,8,14.493,8c-3.038,0-5.501,2.463-5.501,5.5s2.463,5.5,5.501,5.5c4.81,0,5.637-4.317,5.184-6.461L14.493,12.531z"></path>
                </svg><a href="http:#">Direccion</a></li>
                <li> <!-- Mail --> 
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48"><path fill="#007ad9" d="M14,9h20c5.523,0,10,4.477,10,10v21c0,1.105-0.895,2-2,2H14V9z"></path><linearGradient id="kaYchZIaFDSq7yXfSigRUa_OUIi5nqGLmlL_gr1" x1="7.205" x2="20.183" y1="379.03" y2="345.055" gradientTransform="matrix(1 0 0 -1 0 390)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#32bdef"></stop><stop offset="1" stop-color="#1ea2e4"></stop></linearGradient><path fill="url(#kaYchZIaFDSq7yXfSigRUa_OUIi5nqGLmlL_gr1)" d="M14,9C8.477,9,4,13.477,4,19v21c0,1.105,0.895,2,2,2h16c1.105,0,2-0.895,2-2V19	C24,13.477,19.523,9,14,9z"></path><path fill="#007ad9" d="M17,21h-7c-0.552,0-1-0.448-1-1l0,0c0-0.552,0.448-1,1-1h7c0.552,0,1,0.448,1,1l0,0	C18,20.552,17.552,21,17,21z"></path><rect width="15" height="2" x="30" y="17" fill="#cf1928"></rect><path fill="#cf1928" d="M42,22v-5h3c0.552,0,1,0.448,1,1v4c0,0.552-0.448,1-1,1h-2C42.448,23,42,22.552,42,22z"></path><circle cx="30" cy="18" r="2" fill="#d9414f"></circle>
                </svg><a href="http:#">Mail</a> </li>
                <li> <!--Telefono--> 
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 50"><path d="M 14 3.9902344 C 8.4886661 3.9902344 4 8.4789008 4 13.990234 L 4 35.990234 C 4 41.501568 8.4886661 45.990234 14 45.990234 L 36 45.990234 C 41.511334 45.990234 46 41.501568 46 35.990234 L 46 13.990234 C 46 8.4789008 41.511334 3.9902344 36 3.9902344 L 14 3.9902344 z M 18.005859 12.033203 C 18.633859 12.060203 19.210594 12.414031 19.558594 12.957031 C 19.954594 13.575031 20.569141 14.534156 21.369141 15.785156 C 22.099141 16.926156 22.150047 18.399844 21.498047 19.589844 L 20.033203 21.673828 C 19.637203 22.237828 19.558219 22.959703 19.824219 23.595703 C 20.238219 24.585703 21.040797 26.107203 22.466797 27.533203 C 23.892797 28.959203 25.414297 29.761781 26.404297 30.175781 C 27.040297 30.441781 27.762172 30.362797 28.326172 29.966797 L 30.410156 28.501953 C 31.600156 27.849953 33.073844 27.901859 34.214844 28.630859 C 35.465844 29.430859 36.424969 30.045406 37.042969 30.441406 C 37.585969 30.789406 37.939797 31.366141 37.966797 31.994141 C 38.120797 35.558141 35.359641 37.001953 34.556641 37.001953 C 34.000641 37.001953 27.316344 37.761656 19.777344 30.222656 C 12.238344 22.683656 12.998047 15.999359 12.998047 15.443359 C 12.998047 14.640359 14.441859 11.879203 18.005859 12.033203 z"></path>
                </svg><a href="http:#">Telefono</a> </li>
            </ul>
        </div>
        <div class="footer-links divCompañia">
            <h4>Compañia</h4>
            <ul>
                <li><a href="http:#">Nosotros</a></li>
                <li><a href="http:#">Servicios</a></li>
                <li><a href="http:#">Politicas de privacidad</a></li>
                <li><a href="http:#">Ayuda</a></li>
            </ul>
        </div>
    </div>
</footer>
</html>