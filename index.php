<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<title>Page d'Acceuil</title>
</head>
<body>
	<div class="wrapper">
    <h2>Moyenne General</h2>
    <form action = "add.php" method = "POST">
    <div>Les Informations : </div>
      <div class="input-box">
        <input type = "text" name = "firstname" placeholder = "Entrer Votre Nom" required>
      </div>
      <div class="input-box">
      <input type = "text" name = "lastname" placeholder = "Entrer Votre Prenom" required>
      </div>
      <div>Theorie De La Preuve : </div>
      <div class="input-box">
        <input type = "text" name = "THP1" placeholder = "TD" required>
      </div>
      <div class="input-box">
        <input type = "text" name = "THP2" placeholder = "Examen" required>
      </div>
      <div>Programmation Fonctionnel Avancee : </div>
      <div class="input-box">
        <input type = "text" name = "PFA1" placeholder = "TD" required>
      </div>
      <div class="input-box">
        <input type = "text" name = "PFA2" placeholder = "Examen" required>
      </div>
      <div>Base De Donnee Avancee : </div>
      <div class="input-box">
        <input type = "text" name = "BDA1" placeholder = "TD" required>
      </div>
      <div class="input-box">
        <input type = "text" name = "BDA2" placeholder = "Examen" required>
      </div>
      <div>Reseau : </div>
      <div class="input-box">
        <input type = "text" name = "Reseau1" placeholder = "TD" required>
      </div>
      <div class="input-box">
        <input type = "text" name = "Reseau2" placeholder = "Examen" required>
      </div>
      <div>Recherche d'Information : </div>
      <div class="input-box">
        <input type = "text" name = "RI1" placeholder = "TD" required>
      </div>
      <div class="input-box">
        <input type = "text" name = "PFA2" placeholder = "Examen" required>
      </div>
      <div>Gestion des Projets et Qualite : </div>
      <div class="input-box">
        <input type = "text" name = "GPQ" placeholder = "Examen" required>
      </div>
      <div>Anglais :</div>
      <div class="input-box">
        <input type = "text" name = "Anglais" placeholder = "Examen" required>
      </div>
      <div class="input-box button">
			<input type="submit" name="add">
	</div>
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a style="box-shadow: 0 5px 0 darkred;
  color: white;
  padding: 1em 1.5em;
  align: center;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  background-color: red; 
  " href="add1.php" class="button">Voir La Liste</a>
</body>
</html>