<?php
require("php/config.php");

session_start();
if(!$_SESSION["id"]){
    die("Error");
}

$query = "SELECT * 
FROM imagenes 
INNER JOIN usuarios
ON imagenes.creador = usuarios.id;";
$fotos = mysqli_query($conexion,$query);
$fotos = mysqli_fetch_all($fotos,1);

?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./css/bootstrap.min.css" />
</head>
<body>
  <a href="./subir.php">
    <button class="btn btn-primary">Subir imagen</button>
  </a>
  <div style="margin-top:50px">
  <?php
  $i=0;
  foreach ($fotos as $foto){
      $i++;
      if ($i % 2 === 1) {
        echo "<div style='display:flex;'>";
      }
      echo "
          <div class='card border-primary mb-3' style='width: 40%;margin:5%;margin-top:0px'>
            <div class='card-header'><h4 class='card-title'>".$foto['titulo']."</h4></div>
            <div class='card-body'>
            <img style='width:100%' src='data:image/jpeg;base64,".base64_encode($foto["foto"])."'/>
            <h4>
            Creador: ".$foto["usuario"]."
            </h4>
              <p class='card-text'>
                Descripcion: ".$foto["descripcion"]."
              </p>
            </div>
          </div>
      ";
      if ($i % 2 === 0) {
        echo "</div>";
      }
    echo '';
  }
  ?>
  </div>
</body>