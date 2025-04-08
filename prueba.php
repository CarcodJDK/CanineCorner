<?php
  $host_name = 'db5017003380.hosting-data.io';
  $database = 'dbs13697465';
  $user_name = 'dbu1433845';
  $password = 'diegoelperpetrador_asir2025';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
?>