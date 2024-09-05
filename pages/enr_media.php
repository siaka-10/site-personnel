<?php
  $con= new PDO('mysql:host=localhost;dbname=bases_pscpd','root','');

  if(isset($_POST['btn_ajouter'])){
    
    $img = $_FILES['sai_image']['name'];
    $upload = "../assets/cont/".$img;
    move_uploaded_file($_FILES['sai_image']['tmp_name'], $upload);
    $requete_insertion_image = $con->prepare('INSERT INTO media(fichier) VALUES(?)');
    $requete_insertion_image->execute(array($img));
    header("location:media.php");


  }
  else{
    echo "echec";
  }

   
 ?>