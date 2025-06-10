<?php
   error_reporting(E_ALL);
   ini_set('display_errors',1);
   

   $username = "root";
   $password = "";
   $servername = "localhost";
   $database = "tralalero";

   $conexion = new mysqli($servername, $username, $password, $database);
   if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$sql_nombre = "SELECT id, nombre FROM nombre";
$result_nombre = $conexion->query($sql_nombre);
$sql_idioma = "SELECT id, idioma FROM idioma";
$result_idioma = $conexion->query($sql_idioma);
$sql_rareza = "SELECT id, rareza FROM rareza";
$result_rareza = $conexion->query($sql_rareza);
$sql_sigma = "SELECT id, Sigma FROM Sigma";
$result_sigma = $conexion->query($sql_sigma);
$sql_sumi = "SELECT id, Sumi FROM Sumi";
$result_sumi = $conexion->query($sql_sumi);

if($_SERVER ["REQUEST_METHOD"]=="POST"){
  var_dump($_POST);
  $nombre = $conexion->real_escape_string($_POST["nombre"]);
  $idioma = $conexion->real_escape_string($_POST["idioma"]);
  $rareza = $conexion->real_escape_string($_POST["rareza"]);
  $sigma = $conexion->real_escape_string($_POST["sigma"]);
  $sumi = $conexion->real_escape_string($_POST["sumi"]);
  $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

  $sql= "INSERT INTO brainrotsumi (nombre, idioma, rareza, sigma, sumi, fecha_ingreso)
  VALUES ('$nombre', '$idioma', '$rareza', '$sigma', '$sumi', '$fecha_ingreso')";
if ($conexion->query($sql)===TRUE){
  echo "<p class succes'>Eres un Sumi ahora.</p>";
  header("Location: ". $_SERVER['PHP_SELF']);
  exit();
} else{
  echo"<p class= 'error'>Error al brainrotear." . $conexion->error . "</p>";
}

}

?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <link href="https://fonts.cdnfonts.com/css/nsai" rel="stylesheet">

    <title>Reyes Meza Bruno Eduardo</title>
</head>
<body>
  <style>
    body{
      background-image: url('playa.webp');
      background-repeat: no-repeat;
      background-size:cover;
      background-position:center;
      margin: 0;
      height: 100vh;
    }

    h1{
      color:red;
      text-align:center;
      margin-bottom:20px;
    }
    table{
        width: 70%; 
        margin: 50px auto; 
        padding: 20px;
        border-collapse: collapse;
        border-radius: 15px;  
        box-shadow: 0 0 10px rgba(185, 182, 182, 0.84); 
        background-color:rgb(35, 158, 189); 
    }
    th,td{
      padding:10px;
      text-align: left;
      border-bottom: 2px solidrgb(31, 168, 223);
    }
    tr:nth-child(even){
      background-color:rgb(221, 79, 186);
      color:black;
    }
    tr:nth-child(odd){
      background-color:rgb(124, 11, 64);
      color: white;
    }
  </style>

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
      

      <style>
        .container1{
            display:flex;
            justify-content:center;
            align-items:center;
            width:43%;
            background-image: url('tralala.webp');
            padding:20px;
            margin:20px auto;
            border-radius:10px;
            box-shadow: 0 0 10px rgba(192, 42, 87, 0.71);
            color:rgb(34, 21, 13);
        }
        h1, h2{
          text-align: center;
          color:rgb(17, 102, 199);
          margin-bottom: 15px;
          font-family: 'Nsai', sans-serif;
        }
        form{
          display: flex;
          flex-direction: column;
        }
        label{
            font-size:17px;
            margin-bottom: 5px;
            text-align:left;
            
        }
        input[type = "text"]{
          padding:8px;
          margin-bottom:10px;
          border:none;
          border-radius:10px;
          font-size:16px;
          background-color: #44475a;
          color: #fff;
        }
        input[type = "submit"]{
          padding:10px;
          margin-bottom:10px;
          border:none;
          border-radius:10px;
          font-size:16px;
          background-color: #fa7b;
          color: #282a36;
          cursor:pointer;
          transition: background 0.3s:
        }
        input[type="submit"]:hover{
          background-color: #3ae374;
        }
        </style>

        <div class="container1" style="max-width:600px; margin:auto;">
          <form method= "POST" id="formulario">
            <label for="nombre">Nombre</label>
            <select name="nombre" required>
            <option value = "">Brainrotquiz</option>
            <?php while ($row = $result_nombre->fetch_assoc()){
              echo "<option value ='". $row["id"]." '>". $row["nombre"]. "</option>";
            } ?>
            </select>
            <label for="idioma">Idioma</label>
            <select name="idioma" required>
            <option value = "">nahual</option>
            <?php while ($row = $result_idioma->fetch_assoc()){
              echo "<option value ='". $row["id"]." '>". $row["idioma"]. "</option>";
            } ?>
            </select>
            <label for="rareza">Rareza</label>
            <select name="rareza" required>
            <option value = "">tier list</option>
            <?php while ($row = $result_rareza->fetch_assoc()){
              echo "<option value ='". $row["id"]." '>". $row["rareza"]. "</option>";
            } ?>
            </select>
            <label for="sigma">Que sigma eres?</label>
            <select name="sigma" required>
            <option value = "">pomni</option>
            <?php while ($row = $result_sigma->fetch_assoc()){
              echo "<option value ='". $row["id"]." '>". $row["Sigma"]. "</option>";
            } ?>
            </select>
            <label for="sumi">Sumi es...</label>
            <select name="sumi" required>
            <option value = "">Droki</option>
            <?php while ($row = $result_sumi->fetch_assoc()){
              echo "<option value ='". $row["id"]." '>". $row["Sumi"]. "</option>";
            } ?>
            </select>

            <label for="fecha_ingreso">Fecha de ingreso:</label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
            <input type="submit" value="Brainrotear">
          </form>
          </div>
          <h2>Lista de brainroteadas</h2>
          <table border="1">
            <tr>
              <th>Nombre</th>
              <th>Idioma</th>
              <th>Rareza</th>
              <th>Sigma</th>
              <th>Sumi</th>
              <th>Fecha de ingreso</th>
          </tr>
          <?php
            $sql = "SELECT
            n.nombre,
            i.idioma,
            r.rareza,
            s.Sigma, 
            su.Sumi,
            a.fecha_ingreso
        FROM brainrotsumi a
        JOIN nombre n ON a.nombre = n.id
        JOIN idioma i ON a.idioma = i.id 
        JOIN rareza r ON a.rareza = r.id
        JOIN sigma s ON a.Sigma = s.id
        JOIN sumi su ON a.Sumi = su.id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nombre']}</td>
                <td>{$row['idioma']}</td>
                <td>{$row['rareza']}</td>
                <td>{$row['Sigma']}</td>
                <td>{$row['Sumi']}</td>
                <td>{$row['fecha_ingreso']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No se pudo brainrotear</td></tr>";
}
?>
          </table>
        </body>
        </html>
