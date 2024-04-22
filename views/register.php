<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/register.css">
  <style>
        #mdpI {
            display:none;
            margin:-8px;
            /*display: none;*/
            color: tomato;
            font-size:11px;
            margin-left:95px;
        }
    </style>
  <title>Inscription</title>
</head>
<body>
  <div class="container">
      <div class="registerWel">
        <h2>Inscrivez-vous</h2>
      </div>
      <form method="post">
        <div class="registerINFO">
          <div>
            <label for="nom">*Nom :</label>
            <input type="text" id="nom" name="nom" required placeholder="Nom">
          </div>
          <div>
            <label for="prenom">*Prenom :</label>
            <input type="text" id="prenom" name="prenom" required placeholder="Prenom">
          </div>
          <div>
            <label for="ddn">*Date De Naissance :</label>
            <input id="ddn" type="date" name="datedenaissance" required placeholder="Date De Naissance">
          </div>
          <div class="class2">
            <div>
            <label for="sexee">*Sexe :</label>
            <select id="sexee" name="sexe">
              <option value="male">Masculin</option>
              <option value="female">Féminin</option>
            </select>
            </div>
            <div>
            <label for="sangg">*Sang :</label>
            <select id="sangg" name="sang">
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
            </select>
            </div>
          </div>
          <div>
            <label for="ntel">*Numéro de téléphone :</label>
            <input type="tel" name="Ntel" id="ntel" required placeholder="N°Tel">
          </div>
          <div>
            <label for="mail">*Adresse email :</label>
            <input type="email" id="mail" name="email" required placeholder="Email">
          </div>
          <div>
            <label for="psw">*Mot de passe :</label>
            <input type="password" id="psw" name="password" required placeholder="Mot de Passe">
          </div>
          <div>
            <label for="cpsw">*Confirmer :</label>
            <input type="password" id="cpsw" name="cpassword" required placeholder="Confirmation de Mot de passe">
            <p id="mdpI">Le mot de passe saisi est incorrect</p>
          </div>
          <div>
            <label for="type">*Type :</label>
            <select name="type" id="type" required onchange="togglePIN()">
              <option value="patient">Patient</option>
              <option value="admin">Administrateur</option>
            </select>
          </div>
          <div class="pinClass">
            <label for="code">*Pin :</label>
            <input type="password" id="code" name="codepin" required placeholder="Code Pin" disabled>
          </div>
          
        </div>
        <div class="reg">
          <button type="submit" name="register" onclick="PIN()">S'inscrire</button>
        </div>
      </form>     
  </div>
</body>
<script>
  function togglePIN() {
  var type = document.getElementById("type").value;
  var codeInput = document.getElementById("code");

  if (type === "admin") {
    codeInput.disabled = false; // Activer le champ du code PIN si le type est "Administrateur"
  } else {
    codeInput.disabled = true; // Désactiver le champ du code PIN pour les autres types
  }
}
</script>
</html>

<?php
if(isset($_POST['register'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $datedenaissance = $_POST['datedenaissance'];
    $sexe = $_POST['sexe'];
    $sang = $_POST['sang'];
    $Ntel = $_POST['Ntel'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $type = $_POST['type'];
    $servername = "localhost";
    $username = "root";
    $passwordd = "";
    $database = "clinique";
    $conn = new mysqli($servername,$username, $passwordd, $database);
    $sql = "SELECT * FROM admine WHERE email = '$email'";
    $result = $conn->query($sql);                                                   
    if($password!=$cpassword){
    echo "
    <style>
    #mdpI {
    display:block;}
    </style>";
    }
    else{
    if($type == "admin"){
    $sql = "INSERT INTO admine (nom, prenom, birth, sexe, sang, n_tel, email, psw) 
    VALUES ('$nom','$prenom','$datedenaissance','$sexe','$sang','$Ntel','$email','$password');";
    $conn->query($sql);
    header("Location: login.php");
    exit();}
    else{
    $sql = "INSERT INTO patient (nom, prenom, birth, sexe, sang, n_tel, email, psw) 
    VALUES ('$nom','$prenom','$datedenaissance','$sexe','$sang','$Ntel','$email','$password');";
    $conn->query($sql);
    header("Location: login.php");
    exit();
    }}
    }
?>
