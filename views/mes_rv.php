<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/mes_rv.css">
  <title>Mes Rendez Vous | Patient</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="../public/images/navadmin.png" alt="navigation bar image">
      <a href="../views/rendezvouspatient.html">Recharge Un Rendez-Vous</a>
      <a href="../views/mes_rv.html" id="Rrv">Mes Rendez Vous</a>
      <a href="#">Signalé Un Probleme</a>
      <a href="../views/login.html" ><img id="logout" src="../public/images/logout.png" alt="logout"></a>
    </div>
  
    <div class="content">
      <h1> voici vos rendez-vous avec notre clinique ci-dessous</h1>
      <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Date de Rendez-vous</th>
                <th>Heure de Rendez-vous</th>
                <th>Sanguin</th>
                <th>Numéro de téléphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <tr>
              <td>1</td>
              <td>Doe</td>
              <td>John</td>
              <td>Homme</td>
              <td>01/05/2024</td>
              <td>08:30</td>
              <td>O+</td>
              <td>123456789</td>
              <td>
                  <button class="btn-edit"><img src="../public/images/user-pen.svg" alt="edit photo"></button>
                  <button class="btn-delete"><img src="../public/images/delete-user.svg" alt="delete photo"></button>
                  <button class="btn-accepte"><img src="../public/images/checkbox.svg" alt="accept pic"></button>
                </td>
          </tr>
          <tr>
              <td>2</td>
              <td>anis</td>
              <td>Lakardi</td>
              <td>Homme</td>
              <td>01/01/2025</td>
              <td>08:30</td>
              <td>AB-</td>
              <td>12990789</td>
              <td>
                  <button class="btn-edit" onclick="editPatient(2)"><img src="../public/images/user-pen.svg" alt="edit photo"></button>
                  <button class="btn-delete" onclick="deletePatient(2)"><img src="../public/images/delete-user.svg" alt="delete photo"></button>
                  <button class="btn-accepte"><img src="../public/images/checkbox.svg" alt="accept pic"></button>
                </td>
          </tr>
        </tbody>          
      </table>
      <div class="rien">
        <h2>Vous n'avez actuellement aucun rendez-vous planifié avec nous</h2>
      </div>
    </div> 
    
  </div> 
</body>
</html>