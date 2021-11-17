<?php
  header('Access-Allow-Control-Origin: *');
  header('Access-Allow-Control-Header: Content-Type');

  $db = new PDO('mysql:host=localhost;dbname=Radio', 'geefi', 'd4b4nkka');

  $query = $db->prepare('SELECT * FROM songs');
  $query->execute();
  echo json_encode($query->fetchAll());
?>