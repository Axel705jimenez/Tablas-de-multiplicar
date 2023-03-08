<!DOCTYPE html>
<html>
<head>
<title>Calificacion
</title>
<link href="estilo.css" rel="stylesheet" 
    crossorigin="anonymous">  
</head>
<body>

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
    
      $puntos = 0;
      $contador = $_GET["tabla"];
      for ($i = 1; $i <= 10; $i++) 
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
      echo '<tr>
              <td colspan="2">Resultado:</td>
              <td>'.$puntos.' de 10</td>
            </tr>';
    ?>
  </tbody>
</table>

</body>
</html>
