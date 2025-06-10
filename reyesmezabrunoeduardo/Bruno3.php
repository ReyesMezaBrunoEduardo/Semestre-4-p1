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

        h1{
          text-align: center;
          color: royalblue;
          margin-bottom: 20px;
        }
        table{
          width: 100%;
          border-collapse: collapse;
          margin-top: 50px;
          border-radius:50px;
        }
        th, td{
          padding:10px;
          text-align: left;
          border-bottom:1.5px solid pink;
        }
        tr:nth-child(even){
          background-color: crimson;
          color: white;
        }
        tr:nth-child(odd){
          background-color: royalblue;
          color: black;
        }


        </style>
        <style>
          .container1{
            display:flex;
            justify-content:center;
            align-items:center;
            width:50%;
            background-color:#282a36;
            padding: 20px;
            border-radius:10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            color:white;
          }
          h1{
            font-family: 'so this is it', sans-serif;
            text-shadow: 0 1 1 black;
            text-align:center;
            color:#ff79c6;
            margin-bottom: 15px;
          }
          form{
            display:flex;
            flex-direction:column;
          }
          label{
            font-size:16px;
            margin-bottom:5px;
          }
          input[type="text"]{
            padding: 8px;
            margin-bottom:10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #44475a;
            color:#fff;
          }

          input[type="submit"]{
            padding:10px;
            background-color: #50fa7b;
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
          }
          input[type="submit"]:hover{
            background-color: #3ae374;
          }
          </style>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyes Meza Bruno Eduardo</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#36a7bb;">
    <div class="contener">
        <a class="navbar-brand" href="/reyesmezabrunoeduardo/negritos.html" style="color: rgb(202, 76, 76);">Inicio</a>
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
               <a class="dropdown-item" href="Bruno1.php">Practica 1</a><br>
               <a class="dropdown-item" href="Bruno2.php">Practica 2</a><br>
               <a class="dropdown-item" href="Bruno3.php">Practica 3</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 2
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="Bruno4.php">Practica 4</a><br>
               <a class="dropdown-item" href="Bruno5.php">Practica 5</a><br>
               <a class="dropdown-item" href="Bruno5a.php">Practica 5a</a><br>
               <a class="dropdown-item" href="Eduardo1.php">Practica 5b</a><br>
              </div>
           </li>
           <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Unidad 3
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="brainrotanimals.php">Practica 6</a><br>
    <a class="dropdown-item" href="pepe.html">Practica 7</a><br>
    <a class="dropdown-item" href="peliculasyo.html">Practica 8</a><br>
    <a class="dropdown-item" href="reyesmeza8.html">Practica 9</a><br>
    <a class="dropdown-item" href="reyesmeza9.html">Practica 10</a><br>
  </div>
</li>
         </ul>
         </div>
       </div>
       </nav>
       <div class="jumbotron">
       <h1> METER DATOS </h1>
<div class="container1">
       <form method="POST" id="formulario"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" id="formulario">
       <lable for="id">id</label>
       <input type="text" id="id" name="id" required><br>
       <lable for="sabor">Sabor:</label>
       <input type="text" id="sabor" name="sabor" required><br>
       <lable for="color">Color:</label>
       <input type="text" id="color" name="color" required><br>
       <lable for="costo">Costo:</label>
       <input type="text" id="costo" name="costo" required><br>
       <lable for="rareza">Rareza:</label>
       <input type="text" id="rareza" name="rareza" required><br>
       <lable for="estilo">Estilo:</label>
       <input type="text" id="estilo" name="estilo" required><br>
       <lable for="total">Total:</label>
       <input type="text" id="total" name="total" required><br>
       <input type="submit" value="Agregar registro">
      </form>
        </div>
       <?php 
       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "mamuts";

       $conexion = new mysqli($servername, $username, $password, $database);
       if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    function insertarmonster($conexion){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      var_dump($_POST); //nueva linea
      //se obitnene los datos del formulario
      $id = $conexion->real_escape_string($_POST ["id"]); 
      $sabor = $conexion->real_escape_string($_POST ["sabor"]); 
      $color = $conexion->real_escape_string($_POST ["color"]); 
      $costo = $conexion->real_escape_string($_POST ["costo"]); 
      $rareza = $conexion->real_escape_string($_POST ["rareza"]); 
      $estilo = $conexion->real_escape_string($_POST ["estilo"]); 
      $total = $conexion->real_escape_string($_POST ["total"]);
    
     $sql = "INSERT INTO monster (id, sabor, color, costo, rareza, estilo, total) VALUES ('$id', '$sabor', '$color', '$costo', '$rareza', '$estilo', '$total')";
     if($conexion->query($sql)==TRUE){
      echo "<p class= 'success'>Nueva monster agregada con exito.</p>";
      header("Location: ". $_SERVER['PHP_SELF']);
     }else{
      echo "<p class='error'> Error al agregar la monster:" . $conexion->error . "</p>";
      exit();
     }
    }
  } insertarmonster($conexion);
    //Mostrar datos de la tabla
    $sql = "SELECT * FROM monster ORDER BY id DESC";
    $resultado = $conexion->query($sql);
       ?>
       <h2> Registros ingresados </h2>
       <table>
          <tr>
            <th>id</th>
            <th>sabor</th>
            <th>color</th>
            <th>costo</th>
            <th>rareza</th>
            <th>estilo</th>
            <th>total</th>
        </tr>
        <?php
        if($resultado->num_rows >0){
          while($fila= $resultado->fetch_assoc()){
            echo "<tr>
            <td>". $fila['id']. "</td>
            <td>". $fila['sabor']. "</td>
            <td>". $fila['color']. "</td>
            <td>". $fila['costo']. "</td>
            <td>". $fila['rareza']. "</td>
            <td>". $fila['estilo']. "</td>
            <td>". $fila['total']. "</td>
            </tr>";
          }
          echo "</table>";
         }else{
          echo "<tr><td colspan='4'> No hay registros aun. </td></tr>"
           ;}
           $conexion->close();
            ?>
  </table>

  
</body>
</html>