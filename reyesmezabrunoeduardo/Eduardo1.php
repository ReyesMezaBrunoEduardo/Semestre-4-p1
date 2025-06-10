<?php 
  ob_start();
  ?>
<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <style>
    /* Estilos generales */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    /* Estilo del formulario */
    #formulario {
      background-color: cyan;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: black;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Estilos para mensajes de éxito y error */
    .success {
      color: green;
      font-weight: bold;
      text-align: center;
    }

    .error {
      color: red;
      font-weight: bold;
      text-align: center;
    }

    table{
                            width:100%;
                            border-collapse: collapse;
                            margin-top: 50px;
                            border-radius: 50px;
                        }
                        th, td{
                            padding: 10px;
                            text-align:left;
                            border-bottom: 1px solid #ddd;
                        }
                        tr:nth-child(even){
                            background-color: white;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: #ffe4ec;
                            color: black;
                        }
                        th{
                            background-color: crimson; <!-- ese es el color de antes 84c047-->
                            color: white;
                        }
  </style>


<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "berm";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nombre = $_POST["nombre"];
 $precio = $_POST["precio"];
 $id_categoria = $_POST["categoria"];

 $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
 if ($conexion->query($sql) === TRUE) {
 echo "<p style='color:green;'>Producto agregado recientemente</p>";
 } else {
 echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
 }
}

$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);
?>

<head>
 <title>Registrar Productos</title>
</head>
<body>

<nav class="navbar navbar-light" style="background-color:#36a7bb;">
    <div class="contener">
        <a class="navbar-brand" href="negritos.html" style="color: rgb(202, 76, 76);">Inicio</a>
        <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
       
        <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="nav navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 1
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno1.php">Practica 1</a><br>
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno2.php">Practica 2</a><br>
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno3.php">Practica 3</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 2
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno4.php">Practica 4</a><br>
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno5.php">Practica 5</a><br>
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Bruno5a.php">Practica 5a</a><br>
               <a class="dropdown-item" href="/reyesmezabrunoeduardo/Eduardo1.php">Practica 5b</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Unidad 3
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="/reyesmezabrunoeduardo/brainrotanimals.php">Practica 6</a><br>
    <a class="dropdown-item" href="/reyesmezabrunoeduardo/tksuyo/pepe.html">Practica 7</a><br>
    <a class="dropdown-item" href="/reyesmezabrunoeduardo/tksuyo/peliculasyo.html">Practica 8</a><br>
    <a class="dropdown-item" href="/reyesmezabrunoeduardo/tksuyo/reyesmeza8.html">Practica 9</a><br>
    <a class="dropdown-item" href="/reyesmezabrunoeduardo/tksuyo/reyesmeza9.html">Practica 10</a><br>
  </div>
</li>
         </ul>
         </div>
       </div>
       </nav>


 <h1>Registrar Productos</h1>
 <form method="POST">
 <label>Nombre del producto: </label>
 <input type="text" name="nombre" required><br><br>
 <label>Precio: </label>
 <input type="number" name="precio" required><br><br>
 <label>Categoría: </label>
 <select name="categoria" required>
 <option value="">Seleccionar una categoría</option>
 <?php
 if ($result_categorias->num_rows > 0) {
 while ($row = $result_categorias->fetch_assoc()) {
 echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
 }
 }
 ?>
 </select><br><br>
 <input type="submit" value="Registrar Producto">
 </form>
 <head>
 <title>Pagina de prueba</title>
</head>
</select><br><br>
</form>
<h2>Lista de Productos</h2>
<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
</tr>
<?php
$sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
$result_productos = $conexion->query($sql_productos);
if($result_productos->num_rows>0){
while($row = $result_productos ->fetch_assoc()){
echo "<tr>
 <th>{$row['nombre']}</th>
 <th>{$row['precio']}</th>
 <th>{$row['categoria']}</th>
</tr>";
}
}else{
echo "<tr><td>No hay productos registrados</td></tr>";
}
?>
</body>
</html>