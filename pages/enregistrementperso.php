<?php

session_start();

$con= new PDO('mysql:host=localhost;dbname=bases_pscpd','root','');

 if(isset($_POST['btn_enregistrer'])){

 $req0 = $con->prepare('INSERT INTO utilisateur VALUES(null,:nom_prenom,:nationalite,:fonction,:telephone,:email)');

     $req0->bindParam(':nom_prenom',$_POST['sai_nom_prenom']);
     $req0->bindParam(':nationalite',$_POST['sai_nationalite']);
     $req0->bindParam(':fonction',$_POST['sai_fonction']);
     $req0->bindParam(':telephone',$_POST['sai_telephone']);
     $req0->bindParam(':email',$_POST['sai_email']);
     $sol0 =$req0->execute();
      
     $req = $con->prepare('INSERT INTO personnel VALUES(null,:nom_prenom,:nationalite,:fonction,:telephone)');

     $req->bindParam(':nom_prenom',$_POST['sai_nom_prenom']);
     $req->bindParam(':nationalite',$_POST['sai_nationalite']);
     $req->bindParam(':fonction',$_POST['sai_fonction']);
     $req->bindParam(':telephone',$_POST['sai_telephone']);
     $sol =$req->execute();

    //var_dump($sol); die();
  if(!empty($sol0) && !empty($sol)){

//header("location:http://localhost/gestion_pscpd/pages/compte.php");

    echo "succes";

  }

  else{

    echo "echec";
  
  }




}

  if (isset($_POST['btn_supprimer'])) // si je clique sur le bouton supprimer
{

  $req = $con->Prepare('DELETE  FROM personnel WHERE id=:id');
  $req->bindParam(':id', $_POST['sai_id']);
  $sol=$req->execute();
  if(!empty($sol)){  //permet de reenvoyer le resultat
    echo "succes";
  }

  else{
    echo "echec";
  }
}

  // modifier
if (isset($_POST['btn_modifier'])) // si je clique sur le bouton modifier
{

  $req= $con->Prepare('UPDATE personnel SET nom_prenom=:nom_prenom,nationalite=:nationalite,fonction=:fonction,telephone=:telephone WHERE id=:id');

      $req->bindParam(':id',$_POST['sai_id']);
      $req->bindParam(':nom_prenom',$_POST['sai_nom_prenom']);
      $req->bindParam(':nationalite',$_POST['sai_nationalite']);
      $req->bindParam(':fonction',$_POST['sai_fonction']);
      $req->bindParam(':telephone',$_POST['sai_telephone']);
    
  $sol= $req->execute();
  if(!empty($sol)){

    echo "succes";
  }

  else{
    echo "echec";
  }

}

// rechercher
// initialisation
   $id = "";
   $nom_prenom = "";
   $nationalite = "";
   $fonction = "";
   $telephone = "";
     
if (isset($_POST['btn_rechercher'])) // si je clique sur le bouton rechercher
{

  $req = $con->Prepare('SELECT * FROM personnel WHERE id=:id');
  $req->bindParam(':id', $_POST['sai_rechercher']);
  $req->execute();
  $sol=$req->fetchAll();
  if(!empty($sol)){
  
      $id = $sol[1]['idpersonnel'];
      $nom_prenom= $sol[1]['nom_prenom'];
      $nationalite = $sol[1]['nationalite'];
      $fonction= $sol[1]['fonction'];
      $telephone= $sol[1]['telephone'];    
    
  }

  else{
    echo "Aucun resultat";
  }


    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plateforme de la Société Civile pour la Paix et la Democratie</title>

 <?php include'../config/header.php'; ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include'../config/content.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
           

            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" >
                  <div class="row">
                    <div class="col-sm-9">
                    
                  <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nom & Prenom </label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" name="sai_nom_prenom" >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Nationalité </label>
                    <input type="text" class="form-control is-valid" id="inputWarning" name="sai_nationalite" >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Fonction </label>
                    <input type="text" class="form-control is-valid"  name="sai_fonction">
                  </div>

                     <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Telephone </label>
                    <input type="text" class="form-control is-valid" id="inputError" name="sai_telephone">
                  </div>
                
                   <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Email </label>
                    <input type="text" class="form-control is-valid" id="inputError" name="sai_email" >
                  </div>
                  <div class="showback">
              <button  class="btn btn-success" name="btn_enregistrer">Enregistrer</button>
              <button  class="btn btn-info">Rechercher</button>
              <button  class="btn btn-warning">Modifier</button>
              <button  class="btn btn-danger" name="btn_supprimer"> Supprimer</button>
              
            </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include'../config/footer.php'; ?>
  <!-- Control Sidebar -->
  
<?php include'../config/header.php'; ?>