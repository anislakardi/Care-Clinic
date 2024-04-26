<?php 
    session_start();
?>
<?php   
   $servername = "localhost";
   $username = "root";
   $passwordd = "";
   $database = "clinique";
   $conn = new mysqli($servername,$username, $passwordd, $database);
   $sql = "SELECT * FROM patient";
   $result_patient = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/admindashboard.css">
  <style>
    .logoutt{
      width: 100px;
      height: 40px;
      border-radius:30px;
      border: 0px;
      background-color: transparent;
    }
    .class1{
    display: grid;
    grid-template-rows: 2fr 2fr;
    gap: 10px;
    width: 95%;
    margin-left: 22px;
    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 1px 1px 1px 1px var(--grey);
      text-align: center;
    }
    table th {
      background-color: var(--blue-clair); 
      color: white; 
      padding: 10px;
    }

    table td {
      background-color: white; 
      padding: 10px;
    }
  }
  .dashbo{
    display: grid;
    grid-template-rows: 1fr 10fr;
    gap: 10px;
  }
  h1{
    text-align: center;
    font-size: 40px;
    margin-top:20px;
  }
  </style>
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
        <button class="logoutt" type="submit" name="logoutt"><img id="logout" src="../public/images/logout.png" alt="logout"></button>
     </form>
<?php
  if(isset($_POST['logoutt'])){
      session_destroy();
      session_unset();
      header('location: login.php');
  }
?>
    </a>
    </div>
    <div class="dashbo">
      <div class="classX">
        <h1> Statistique de la page </h1>
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
                <?php
    if ($result_patient->num_rows > 0) {
        while($row = $result_patient->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_patient"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
            echo "<td>" . $row["sexe"] . "</td>";
            echo "<td>" . $row["sang"] . "</td>";
            echo "</tr>";
        }
      }
               ?>
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
                <td>Gregory</td>
                <td>House</td>
                <td>M</td>
                <td>Ophtalmologie avancée</td>
                <td>Oui</td>
              </tr>
              <tr>
                <td>Meredith</td>
                <td>Grey</td>
                <td>F</td>
                <td>Chirurgies spécialisées</td>
                <td>Non</td>
              </tr>
              <tr>
                <td>John</td>
                <td>Watson</td>
                <td>M</td>
                <td>Dentisterie</td>
                <td>Oui</td>
              </tr>
              <tr>
                <td>Leonard</td>
                <td>McCoy</td>
                <td>M</td>
                <td>Allergies</td>
                <td>Oui</td>
              </tr>
              <tr>
                <td>Dana</td>
                <td>Scully</td>
                <td>F</td>
                <td>Examens préventifs</td>
                <td>Oui</td>
              </tr>
              <tr>
                <td>Mindy</td>
                <td>Lahiri</td>
                <td>F</td>
                <td>Soins orthopédique</td>
                <td>Non</td>
              </tr>
              <tr>
                <td>Shaun</td>
                <td>Murphy</td>
                <td>M</td>
                <td>Hémodialyse</td>
                <td>Non</td>
              </tr>
              <tr>
                <td>Perry</td>
                <td>Cox</td>
                <td>M</td>
                <td>Implantation capillaire</td>
                <td>Non</td>
              </tr>
              <tr>
                <td>Claire</td>
                <td>Temple</td>
                <td>F</td>
                <td>Vaccination</td>
                <td>Oui</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
