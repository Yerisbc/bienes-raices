<?php
require '../../includes/config/database.php';
$db = conectarDB();

//Consultar para obtener vendedores
$consulta = 'SELECT * FROM vendedores';
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedor = '';

//Ejecutar el codigo despues que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  /* $numero = "correo@correo.com";
  $numero2 = "Hola";

  //sanitizar
  $resultado = filter_var($numero, FILTER_SANITIZE_EMAIL);

  //Validar
  $resultado = filter_var($numero, FILTER_VALIDATE_EMAIL);

  var_dump($resultado);
  */

  /*  echo "<pre>";
  var_dump($_POST);
  echo "</pre>"; 
*/
  echo "<pre>";
  var_dump($_FILES);
  echo "</pre>";


  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $vendedor_id = mysqli_real_escape_string($db, $_POST['vendedor']);
  $creado = date('y/m/d');

  //Asignar files hacia una variables
  $imagen = $_FILES['imagen'];


  if (!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }

  if (!$precio) {
    $errores[] = "Debes añadir un precio";
  }

  if (strlen($descripcion) < 50) {
    $errores[] = "La descripción debe contener mínimo 50 caracteres";
  }

  if (!$habitaciones) {
    $errores[] = "Debes añadir el numero de habitaciones";
  }

  if (!$wc) {
    $errores[] = "Debes añadir el numero de baños";
  }

  if (!$estacionamiento) {
    $errores[] = "Debes añadir el numero de estacionamientos";
  }

  if (!$vendedor_id) {
    $errores[] = "Elige un vendedor";
  }

  //php solo acepta imágenes de 2 megas por eso la validación de error
  if (!$imagen['name'] || $imagen['error']) {
    $errores[] = "La imagen es obligatoria";
  }

  //Validar por tamaño de 100mb maximo
  $medida = 1000 * 1000;

  if ($imagen['size'] > $medida) {
    $errores[] = "La imagen es muy pesada";
  }

  /*  echo '<pre>';
  var_dump($errores);
  echo '</pre>'; */

  //Revisar que el arreglo de errores este vacío
  if (empty($errores)) {

    // Nueva carpeta
    $carpetaImagenes = '../../imagenes/';


    if (!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
    }


    //Generar nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';


    //Subir imagen
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );


    //Insertar en la base de datos
    $query = "INSERT INTO propiedades(titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento,creado, vendedores_id) 
  VALUES('$titulo','$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento','$creado', '$vendedor_id')";
    //echo $query;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      //echo 'Insertado correctamente';
      //Redireccionar al usuario
      header('location: /bienesraices/admin/index.php');
    }
  }
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>

  <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POSt" action="/bienesraices/admin/propiedades/crear.php" enctype="multipart/form-data">
    <fieldset>
      <legend>Información general</legend>

      <label for="titulo">Titulo</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio</label>
      <input type="number" id="precio" name="precio" placeholder="Precio propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

      <label for="descripcion">Descripción</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

    </fieldset>

    <fieldset>
      <legend>Información de la propiedad</legend>

      <label for="habitaciones">Habitaciones</label>
      <input type="number" id="habitaciones" name="habitaciones" min="1" max="9" placeholder="ej: 3" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños</label>
      <input type="number" id="wc" name="wc" min="1" max="9" placeholder="ej: 3" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento</label>
      <input type="number" id="estacionamiento" name="estacionamiento" min="1" max="9" placeholder="ej: 3" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="">--Selecciones--</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
          <option <?php echo $vendedor_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
            <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear propiedad" class="boton boton-verde">
  </form>

</main>

<?php
incluirTemplate('footer');
?>