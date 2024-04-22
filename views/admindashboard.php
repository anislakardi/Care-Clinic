<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/admindashboard.css">
  <title>Tableau De Bord | Admin</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="../public/images/navadmin.png" alt="navigation bar image">
      <a href="../views/admindashboard.php" id="aDashbo">Tableau De Bord</a>
      <a href="../views/gestionpatients.php">Gestion Des Patients</a>
      <a href="../views/gestiondesrendezvous.php">Gestion Des Rendez-vous</a>
      <a href="#">Gestion Des Medcines</a>
      <a href="#">Les Probleme Signalé</a>
     <!-- <a href="../views/login.php" ><img id="logout" src="../public/images/logout.png" alt="logout">-->
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                        <button class="logout" type="submit" name="logout">Logout</button>
                    </form>
<?php
                        if(isset($_POST['logout'])){
                            session_destroy();
                            session_unset();
                            header('location: login.php');
                        }
                    ?>
    </a>
    </div>
    <div class="dashbo">
      <div class="satatistique">
        <div class="Statiqpatients">
          <h1>Chaque patient a consulté notre clinique :</h1>
          <h2>12900</h2>
          <h3>Patients</h3>
        </div>
        <div class="succes">
          <h1>Succès de nos rendez-vous :</h1>
          <h2>100</h2>
          <h3>%</h3>
        </div>
        <div class="Sopinions">
          <h1>Taux de réussite :</h1>
          <h2>4.6/5</h2>
          <h3>Stars</h3>
        </div>
      </div>
      <div class="dashcontent">
        <div class="class1">
          <div class="patients">
            <h4>Patients :</h4>
              <table>
                <tr>
                  <th>Numéro</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Sexe</th>
                  <th>Groupe sanguin</th>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Doe</td>
                  <td>John</td>
                  <td>M</td>
                  <td>A+</td>
                </tr>
            </table>
          </div>
          <div class="urgent">
            <h4>Patients Urgent:</h4>
            <table>
                <tr>
                  <th>Numéro</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Sexe</th>
                  <th>Groupe sanguin</th>
                  <th>type de l'urgence</th>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Doe</td>
                  <td>John</td>
                  <td>M</td>
                  <td>A+</td>
                  <td>accsident</td>
                </tr>
            </table>
          </div>
        </div>
        <div class="doctors">
          <h4>Doctors :</h4>
          <table>
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Service de travail</th>
                <th>Disponibilité</th>
              </tr>
              <tr>
                <td>Doe</td>
                <td>John</td>
                <td>M</td>
                <td>Cardiologie</td>
                <td>Oui</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>