<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/gestiondesrendezvous.css">
  <title>Gestion Des Rendez-vous | Admin</title>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="../public/images/navadmin.png" alt="navigation bar image">
      <a href="../views/admindashboard.php">Tableau De Bord</a>
      <a href="../views/gestionpatients.php"id="aPatients">Gestion Des Patients</a>
      <a href="../views/gestiondesrendezvous.php" id="aRV">Gestion Des Rendez-vous</a>
      <a href="#">Gestion Des Medcines</a>
      <a href="#">Les Probleme Signalé</a>
      <a href="../views/login.html" ><img id="logout" src="../public/images/logout.png" alt="logout"></a>
    </div>
    <div class="gestion">
      <div id="Les_yeux">
        <img src="../public/images/eye.png" alt="eyepic">
        <h3>Soins ophtalmologiques avancés</h3>
        <h4>Dr. Gregory House</h4>
        <button onclick="Les_yeuxDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="Des_operations">
        <img src="../public/images/surgery-room.png" alt="surgerypic">
        <h3>Chirurgies spécialisées</h3>
        <h4>Dr. Meredith Grey </h4>
        <button onclick="Des_operationsDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="Les_dents">
        <img src="../public/images/tooth.png" alt="teethpic">
        <h3>Dentisterie moderne</h3>
        <h4>Dr. John Watson</h4>
        <button onclick="Les_dentsDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="Allergies">
        <img src="../public/images/allergies.png" alt="allergiespic">
        <h3>Traitement des allergies</h3>
        <h4>Dr. Leonard McCoy </h4>
        <button onclick="AllergiesDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="Inspection_periodique">
        <img src="../public/images/clipboard.png" alt="inspectinpic">
        <h3>Examens préventifs réguliers</h3>
        <h4>Dr. Dana Scully</h4>
        <button onclick="Inspection_periodiqueDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="Os_et_articulations">
        <img src="../public/images/bone-fracture.png" alt="bonepic">
        <h3>Soins orthopédiques complets</h3>
        <h4>Dr. Mindy Lahiri</h4>
        <button onclick="Os_et_articulationsDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="sang">
        <img src="../public/images/kidney.png" alt="kidneypic">
        <h3>Hémodialyse et filtrage sanguin</h3>
        <h4>Dr. Shaun Murphy</h4>
        <button onclick="sangDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="cheveux">
        <img src="../public/images/skin.png" alt="skinpic">
        <h3>Implantation de cheveux</h3>
        <h4>Dr. Perry Cox</h4>
        <button onclick="cheveuxDialog()">Voir Les Rendez-vous</button>
      </div>
      <div id="vac">
        <img src="../public/images/injection.png" alt="injectionpic">
        <h3>Vaccination</h3>
        <h4>Dr. Claire Temple</h4>
        <button onclick="vacDialog()">Voir Les Rendez-vous</button>
      </div>
    </div>
    <dialog id="Les_yeuxDia">
      <h1>les rendez-vous de service des yeux</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeLes_yeuxDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="Des_operationsDia">
      <h1>Les Rendez-vous de Service des operations</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeDes_operationsDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="Les_dentsDia">
      <h1>Les Rendez-vous de Service de Dentisterie</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeLes_dentsDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="AllergiesDia">
      <h1>Les Rendez-vous de Service des allergies</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeAllergiesDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="Inspection_periodiqueDia">
      <h1>Les Rendez-vous de Service D'inspection'</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeInspection_periodiqueDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="Os_et_articulationsDia">
      <h1>Les Rendez-vous de Service des Soins orthopédiques</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closeOs_et_articulationsDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="sangDia">
      <h1>Les Rendez-vous de Service de Filtrage Sanguin</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closesangDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="cheveuxDia">
      <h1>Les Rendez-vous de Service D'implantation de cheveux</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closecheveuxDialog()" id="btn2">Ferme</button>
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
    </dialog>
    <dialog id="vacDia">
      <h1>Les Rendez-vous de Service de Vaccination</h1>
      <h2>Voir Les Rendez-vous Entre Ces Deux Dates</h2>
      <input type="date" placeholder="Début" name="dateD">
      <input type="date" placeholder="Fin" name="dateF">
      <button id="btn1">Voir</button>
      <button onclick="closevacDialog()" id="btn2">Ferme</button>
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
    </dialog>
</body>
<Script>
  const dialog1 = document.getElementById("Les_yeuxDia");
  const dialog2 = document.getElementById("Des_operationsDia");
  const dialog3 = document.getElementById("Les_dentsDia");
  const dialog4 = document.getElementById("AllergiesDia");
  const dialog5 = document.getElementById("Inspection_periodiqueDia");
  const dialog6 = document.getElementById("Os_et_articulationsDia");
  const dialog7 = document.getElementById("sangDia");
  const dialog8 = document.getElementById("cheveuxDia");
  const dialog9 = document.getElementById("vacDia");
  function Les_yeuxDialog(){
    dialog1.showModal();
  }
  function closeLes_yeuxDialog(){
    dialog1.close();
  }

  function Des_operationsDialog(){
    dialog2.showModal();
  }
  function closeDes_operationsDialog(){
    dialog2.close();
  }

  function Les_dentsDialog(){
    dialog3.showModal();
  }
  function closeLes_dentsDialog(){
    dialog3.close();
  }

  function AllergiesDialog(){
    dialog4.showModal();
  }
  function closeAllergiesDialog(){
    dialog4.close();
  }

  function Inspection_periodiqueDialog(){
    dialog5.showModal();
  }
  function closeInspection_periodiqueDialog(){
    dialog5.close();
  }

  function Os_et_articulationsDialog(){
    dialog6.showModal();
  }
  function closeOs_et_articulationsDialog(){
    dialog6.close();
  }
  function sangDialog(){
    dialog7.showModal();
  }
  function closesangDialog(){
    dialog7.close();
  }

  function cheveuxDialog(){
    dialog8.showModal();
  }
  function closecheveuxDialog(){
    dialog8.close();
  }

  function vacDialog(){
    dialog9.showModal();
  }
  function closevacDialog(){
    dialog9.close();
  }
</Script>
</html>