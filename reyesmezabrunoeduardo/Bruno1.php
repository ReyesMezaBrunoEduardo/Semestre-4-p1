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


       <div class="jumbotron">

       <?php 
       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "mamuts";

       $conexion = new mysqli($servername, $username, $password, $database);
       if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
       $sql = "SELECT * FROM monster"; //aqui agregan el nombre de la tabla que estan usando, en mi caso fue nfleast//

    $resultado = $conexion->query($sql);
       ?>

       <div class = "container">

        <h1> Datos de las monsters y su puntuaje final </h1>

        <?php
        if($resultado->num_rows >0):?>

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

        <?php while ($fila = $resultado->fetch_assoc ()): ?>

        <tr>
          <td><?php echo $fila ['id']; ?></td>
          <td><?php echo $fila ['sabor']; ?></td>
          <td><?php echo $fila ['color']; ?></td>
          <td><?php echo $fila ['costo']; ?></td>
          <td><?php echo $fila ['rareza']; ?></td>
          <td><?php echo $fila ['estilo']; ?></td>
          <td><?php echo $fila ['total']; ?></td>
        </tr>
    
        <?php endwhile; ?>
    </table>
      <?php else: ?>
     <p>No se encontraron los monsters.</p>
      <?php endif; ?>
      </div>

        <h1 class="display-4" style="text-align:center;"></h1>
        <p class="lead" style="text-align:center;"></p>
        <hr class="my-4">
        <p style="text-align:center;"></p>
      </div>
     
      <div class="row" style="display: flex; margin-left: 10px;">
        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>

      
    
        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>
   

 
        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>



        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>



        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>


        <div class="col-sm-2">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
             <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
           </div>
        </div>
      </div>


     
</body>
</html>