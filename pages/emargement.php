<?php
session_start();
   $con= new PDO('mysql:host=localhost;dbname=bases_pscpd','root','');

 if(isset($_POST['btn_valider'])){

 
          

  $req = $con->prepare('INSERT INTO emargement VALUES(null,:nom_prenom,:nationalite,:fonction,:etat,:motivation,now())');

     $req->bindParam(':nom_prenom',$_POST['sai_nom_prenom']);
     $req->bindParam(':nationalite',$_POST['sai_nationalite']);
     $req->bindParam(':fonction',$_POST['sai_fonction']);
     $req->bindParam(':etat',$_POST['sai_etat']);
      $req->bindParam(':motivation',$_POST['sai_motivation']);
     $sol =$req->execute();
  //var_dump($sol); die();
  if(!empty($sol)){

    echo "succes";
  }

  else{
    echo "echec";
  }

}

  if (isset($_POST['btn_supprimer'])) // si je clique sur le bouton supprimer
{

  $req = $con->Prepare('DELETE  FROM emargement WHERE id=:id');
  $req->bindParam(':id', $_POST['sai_id']);
  $sol=$req->execute();
  if(!empty($sol)){  //permet de reenvoyer le resultat
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
   $fonction = "";
   $nationalite = "";  
  
     
if (isset($_POST['btn_rechercher'])) // si je clique sur le bouton rechercher
{

  $req = $con->Prepare('SELECT * FROM utilisateur WHERE id=:id');
  $req->bindParam(':id', $_POST['sai_rechercher']);
  $req->execute();
  $sol=$req->fetchAll();
  if(!empty($sol)){
  
      $id = $sol[0]['id'];
      $nom_prenom = $sol[0]['nom_prenom'];
      $fonction= $sol[0]['fonction'];
      $nationalite= $sol[0]['nationalite'];      
     
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
             
    <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div>
                    <input  name="sai_rechercher"  type="text" />
                   <button  name="btn_rechercher" class="btn btn-info">Rechercher</button>
                   </div>
                   <br/>
                  
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-12">Nom & Prenom</label>
                    <div class="col-lg-12">
                      <input class=" form-control" id="lastname" name="sai_nom_prenom" type="text" value="<?php echo $nom_prenom;   ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-12">nationalite</label>
                    <div class="col-lg-12">
                      <input class="form-control " id="username" name="sai_nationalite" type="text"  value="<?php echo $nationalite;   ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-12">fonction</label>
                    <div class="col-lg-12">
                      <input class="form-control " id="username" name="sai_fonction" type="text"  value="<?php echo $fonction;   ?>"/>
                    </div>
                  </div>
                  
                  
                 
                 
                 <div class="col-sm-12">
                  <div class="form-group">
                 <label for="password" class="control-label col-lg-12"> Etat</label>
               <select id="etat" name="sai_etat" id="sujet"  required>
                <option>Choisissez vote acte</option>
                <option id="etat" value="present">present(e)</option>
                <option id="etat" value="abscent">abscent(e)</option>
                </select>
                  </div>
                  <br/><br/>

                     <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Modtifs</label>
                        <textarea class="form-control" name="sai_motivation" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-lg-offset-12 col-lg-12">
                      <button class="btn btn-success" name="btn_valider" >Valider</button>
                      <button class="btn btn-danger" name="btn_supprimer">Supprimer</button>
                    </div>
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
<!-- ./wrapper -->
<?php include'../config/header.php'; ?>

