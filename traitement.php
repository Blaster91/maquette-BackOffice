<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_startuprr";
  $sujet = $_POST['subject'];
  $contenu = $_POST['content'];

  if( $_FILES['file']['name'] != "" ) {
      $uploadfolder = $_SERVER['DOCUMENT_ROOT']."/back-office/uploads";
      $filename = $_FILES['file']['name'];
      move_uploaded_file( $_FILES['file']['tmp_name'], "$uploadfolder/$filename" ) or
       die( "Could not copy file!");
  }
  else {
      die("No file specified!");
  }

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO articles (sujet, contenu)
      VALUES ('$sujet', '$contenu')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "New record created successfully";
      }
  catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      }

  $conn = null;

?>
