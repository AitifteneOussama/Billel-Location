<html>
    <head>
    <title>Page de Link</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
    <form action = "resultat.php" method = "POST">
<?php
            $lgn = $_POST['login'];
            $mdp = $_POST['mdp'];

            if($lgn == 'Billy' && $mdp == 'billy-milly')
            { ?>
            <br><br><br><br><br><br><br><br><br><br><br>
                <a href="index.php" class="animated-button1">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  Suivant
</a>
<?php
            }
            else
            {
                header('Location: ../Billel/login.php');
            }