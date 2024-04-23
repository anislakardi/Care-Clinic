<?php
$servername = "localhost";
$username = "root";
$passwordd = "";
$database = "clinique";
$conn = new mysqli($servername,$username, $passwordd, $database);
$sql = "SELECT * FROM patient";
$result_patient = $conn->query($sql);  

// إذا تم إرسال قيمة بحث
if(isset($_GET['namesearch'])) {
    $searchTerm = $_GET['namesearch'];
    // إعداد الاستعلام للبحث باستخدام القيمة المرسلة
    $sql = "SELECT * FROM patient WHERE nom LIKE '%$searchTerm%'";
    // تنفيذ الاستعلام
    $result_patient = $conn->query($sql);  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/gestionpatients.css">
  <style>
    #recharche{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:20px
    }
  </style>
  <title>Gestion Des Patients | Admin</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="../public/images/navadmin.png" alt="navigation bar image">
      <a href="../views/admindashboard.php">Tableau De Bord</a>
      <a href="../views/gestionpatients.php"id="aPatients">Gestion Des Patients</a>
      <a href="../views/gestiondesrendezvous.php">Gestion Des Rendez-vous</a>
      <a href="#">Gestion Des Medcines</a>
      <a href="#">Les Probleme Signalé</a>
      <a href="../views/login.php" ><img id="logout" src="../public/images/logout.png" alt="logout"></a>
    </div>
    <div class="gestion">
      <h1>Gestion Des Patients</h1>
      <div class="allPatients">
        <div class="class1">
          <h2>Liste des patients : </h2>
          <form method="get" id="recharche">
            <input type="text" placeholder="Rechercher Un Patient Par Son Nom" id="nameSearch" name="namesearch">
            <button type="submit">Rechercher</button>
          </form>
          <button onclick="loginDialog()" type="button">Ajoutez Patient</button>
          <dialog id="ajouteDia">
            <h2>Ajoutez Un Patient</h2>
            <form>
              <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom" >
              </div>
              <div>
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prenom" >
              </div>
              <div>
                <label for="ddn">Date De Naissance :</label>
                <input id="ddn" type="date" name="datedenaissance"  placeholder="Date De Naissance" >
              </div>
              <div>
                <label for="sexee">Sexe :</label>
                <select id="sexee" name="sexe">
                  <option value="male">Masculin</option>
                  <option value="female">Féminin</option>
                </select>
              </div>
              <div>
                <label for="ntel">Numéro de téléphone :</label>
                <input type="tel" name="Ntel" id="ntel"  placeholder="N°Tel" >
              </div>
              <div>
                <label for="mail">Adresse email :</label>
                <input type="email" id="mail" name="email" placeholder="Email">
              </div>
              <div>
                <button onclick="closeLoginDialog()">Ferme</button>
                <button onclick="closeLoginDialog()"> Ajoutez Ce Patient</button>
              </div>
            </form>
          </dialog>
        </div>
          <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>E-mail</th>
                    <th>Numéro de téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <tr>
              <?php
    if ($result_patient->num_rows > 0) {
        while($row = $result_patient->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_patient"] . "</td>";
            echo "<td>" . $row["nom"] . "</td>";
            echo "<td>" . $row["prenom"] . "</td>";
echo "<td>" . $row["sexe"] . "</td>";
            echo "<td>" . $row["birth"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["n_tel"] . "</td>";
            echo '<td>  <button class="btn-edit"><img src="../public/images/user-pen.svg" alt="edit photo"></button>
            <button class="btn-delete"><img src="../public/images/delete-user.svg" alt="delete photo"></button> </td>';
            echo "</tr>";
        }
      }
                    ?>
                  </td>
              </tr>
              
          </tbody>          
          </table>
      </div>
    </div>
  </div>
  
</body>
<script>
  const dialog = document.getElementById("ajouteDia");
  function loginDialog(){
    dialog.showModal();
  }
  function closeLoginDialog(){
    dialog.close();
  }
</script>
</html>