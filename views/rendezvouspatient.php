<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/rendezvouspatent.css">
  <title>Rendez-Vous | Patient</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="../public/images/navadmin.png" alt="navigation bar image">
      <a href="../views/rendezvouspatient.html" id="Rrv">Recharge Un Rendez-Vous</a>
      <a href="../views/Lesrendezvouspatient.html">Mes Rendez Vous</a>
      <a href="#">Signalé Un Probleme</a>
      <a href="../views/login.php" ><img id="logout" src="../public/images/logout.png" alt="logout"></a>
    </div>
    <div class="content">
      
      <div class="prendre">
        <h1>Salut Neymar JR ! Vous pouvez prendre un Rendez-Vous ici</h1>
          <form method="post">
            <label for="service" id="toplabel">Service :</label>
            <select name="service" id="service">
                <option value="1">Soins ophtalmologiques avancés</option>
                <option value="2">Chirurgies spécialisées</option>
                <option value="3">Dentisterie moderne</option>
                <option value="4">Traitement des allergies</option>
                <option value="5">Examens préventifs réguliers</option>
                <option value="6">Soins orthopédiques complets</option>
                <option value="7">Hémodialyse et filtrage sanguin</option>
                <option value="8">Implantation de cheveux</option>
                <option value="9">Vaccination</option>
            </select>
            <br><br>
            <label for="creneau">Créneau horaire :</label>
            <select name="creneau" id="creneau">
                <option value="1">08:00 - 09:00</option>
                <option value="2">09:00 - 10:00</option>
                <option value="3">10:00 - 11:00</option>
                <option value="4">11:00 - 12:00</option>
                <option value="5">13:00 - 14:00</option>
                <option value="6">14:00 - 15:00</option>
                <option value="7">15:00 - 16:00</option>
                <option value="8">16:00 - 17:00</option>
                <option value="9">17:00 - 18:00</option>
            </select>
            <br><br>
            <h3>Ce créneau horaire est actuellement indisponible ou occupé</h3>
            <input type="submit" value="Valider le rendez-vous">
        </form>
      </div>
      <div class="serviceINFO">
        <h1>Disponibilité de nos services différents :</h1>
        <!-- les servives-->
        <div><h2>soins orthopédiques complets:</h2><h3>du mardi au jeudi de 08h à 12h.</h3></div>
        <div><h2>chirurgies spécialisées:</h2><h3>Disponible du dimanche au mardi de 13h à 17h.</h3></div>
        <div><h2>dentisterie moderne:</h2><h3>Disponible du lundi au vendredi de 10h à 15h.</h3></div>
        <div><h2>traitement des allergies:</h2><h3>Disponible du mercredi au samedi de 09h à 13h.</h3></div>
        <div><h2>examens préventifs réguliers:</h2><h3>Disponible du jeudi au dimanche de 12h à 16h.</h3></div>
        <div><h2>soins orthopédiques complets:</h2><h3> Disponible du samedi au dimanche de 14h à 18h.</h3></div> 
        <div><h2>hémodialyse et filtrage sanguin:</h2><h3>Disponible du jeudi au samedi de 16h à 20h.</h3></div> 
        <div><h2>implantation de cheveux:</h2><h3>Disponible du lundi au mercredi de 11h à 15h</h3></div> 
        <div><h2>vaccination:</h2><h3>Disponible du vendredi au dimanche de 09h à 13h.</h3></div>
      </div>
    </div>
  </div>
  
</body>
</html>