<!DOCTYPE html>
<html>
<head>
<title>Calificacion
</title>
<link href="estilo.css" rel="stylesheet" 
    crossorigin="anonymous">  
</head>
<body class="fondo">
<table class="table table-hover">
  <thead>
    <tr>
      <th>Operación</th>
      <th>Resultado</th>
      <th>Calificación</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $inicio = $_GET["inicio"];
     $fin = $_GET["fin"];
      $puntos = 0;
      $contador = $_GET["tabla"];
      for ($i = $inicio; $i <= $fin; $i++) 
      {
        $calificar = $_GET["resultado".$i];
        $multiplicacion = $contador * $i;
        if ($calificar == $multiplicacion) 
        {
          echo '<tr class="table-success">';
          echo '<td>'.$contador.' x '.$i.'</td>';
          echo '<td>'.$calificar.'</td>';
          echo '<td><span style="color:green">Correcto</span></td>';
          $puntos++;
          
        }
        else 
        {
          echo '<tr class="table-danger">';
          echo '<td>'.$contador.' x '.$i.'</td>';
          echo '<td>'.$calificar.'</td>';
          echo '<td><span style="color:red">Incorrecto</span></td>';
        }
        echo '</tr>';
      }
      $num_multiplicaciones = $fin - $inicio + 1;

      echo '<tr>
      <td colspan="2" style="background-color: white;">Resultado:<span style="color:green;"></span></td>
      <td style="background-color: white;">'.$puntos.' de '.$num_multiplicaciones.'</td>
  </tr>';
              ?>
  </tbody>
</table>

</body>
</html>
