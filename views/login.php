<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/login.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Capriola&family=League+Spartan:wght@100..900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Signika+Negative:wght@300..700&display=swap');


:root{

/*colors*/
--blacky : #0c0c0c;
--blue-clair:#4db9f9;
--white-b:#f6fbff;
--grey:#838383;
--vio:#b1acff;
/*fonts*/
--font-family-1: 'capriola';
--font-family-2: 'League Spartan';
--font-family-3: 'Playfair Display SC';
--font-family-4: 'Signika Negative';
}
*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
body{
  background-color: #EEEEEE;
}
.container{
  display: grid;
  grid-template-columns: 2fr 2fr;
  background-color: white;
  border: 0px;
  border-radius: 10px;
  width: 900px;
  height: 500px;
  transform: translate(-50%,-50%);
  position: fixed;
  top: 50%;
  left: 50%;
  box-shadow: 0px 0px 50px var(--Dark-Slate-Grey);
  img{
    width: 100%;
    height: 500px;
    box-sizing: border-box;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }
  h2{
    font-family:var(--font-family-2);
    font-size: 30px;
    margin-top: 20px;
    text-align: center;
    letter-spacing: 1px;
  }
}
.loginINFO{
  display: grid;
  grid-template-rows: 2fr 5fr 2fr;
  place-items: center;
  text-align: center;
  label{
    display: block;
    font-family: var(--font-family-2);
    margin-bottom: 3px;
    font-weight: 500;
  }
  input{
    border: 1px solid lightgray;
    border-radius: 5px;
    width:250px;
    height:35px ;
    padding-left: 10px;
    font-family: var(--font-family-2);
    font-size: 14px;
    margin-bottom: 13px;
  }
  h3{
    font-family: var(--font-family-1);
    font-size: 10px;
  }
  a{
    color: var(--grey);
    font-size: 10px;
    text-decoration: none;
    padding-left: 5px;
  }
  label{
    text-align: left;
    margin-bottom: 5px;
    margin-left:100px;
  }
  #connect{
  cursor: pointer;
  width:250px;
  height:35px ;
  border:0px;
  background-color: #2761e7;
  color: white;
  font-size: 16px;
  font-family: var(--font-family-2);
  font-weight: 600;
  margin-top: 30px ;
  border-radius: 5px;
  }
  #mdpO{
    display: block;
    color: black;
    font-size: 12px;
    text-decoration: underline;
    text-align: end;
    font-weight: 600;
  }
}
  #mdpI {
    display: none;
    margin:-8px;
    color: tomato;
    font-size:11px;
    text-align:center;
    /* margin-left:95px; */
    font-weight: 700;
  }

  </style>
  <title>Connexion</title>
</head>
<body>
  <div class="container">
    <div>
      <img src="../public/images/loginpic.jpeg" alt="photo de connexion">
    </div>
    <div class="loginINFO">
      <div>
          <h2>Connectez-vous</h2>
      </div>
      <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="mail" id="label-mail">Adresse email :</label>
          <input type="email" id="mail" name="email" required placeholder="Email">
          <label for="psw" id="label-psw">Mot de passe :</label>
          <input type="password" id="psw" name="password" required placeholder="Mot de Passe">
          <p id="mdpI">Le mot de passe ou l'email saisi est incorrect</p>
          <button id="connect" type="submit">Se connecter</button>
        </form>
      </div>
      <div>
        <h3>Vous n'avez pas de compte? <a href="register.php">Inscrivez-vous</a></h3>
      </div>
    </div>
  </div>
</body>
</html>
<?php
session_start(); // Démarrage de la session

// Si l'utilisateur est déjà connecté, redirigez-le directement vers son tableau de bord
if(isset($_SESSION['user_id'])) {
    header("Location: admindashboard.php");
    exit();
}

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinique";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de l'établissement de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Vérifiez les données soumises
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Vérifiez l'authenticité des données de connexion pour le tableau admine
  $sql = "SELECT * FROM admine WHERE email = '$email' AND psw = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Connexion de l'administrateur
      $_SESSION['user_id'] = $email; // Vous pouvez stocker n'importe quel identifiant unique ici
      header("Location: admindashboard.php");
      exit();
  } else {
      // Si l'authentification échoue pour l'administrateur, vérifiez la table patient
      $sql = "SELECT * FROM patient WHERE email = '$email' AND psw = '$password'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // Connexion du patient
          $_SESSION['user_id'] = $email; // Vous pouvez stocker n'importe quel identifiant unique ici
          header("Location: rendezvouspatient.php");
          exit();
      }else{
          // Si l'authentification échoue pour le patient, affichez un message d'erreur à l'utilisateur
          echo "
            <style>
            #mdpI {
            display:block;}
            #label-mail,#label-psw {
              margin-left:0px;}
            </style>";
            
      }
  }
}

?>

