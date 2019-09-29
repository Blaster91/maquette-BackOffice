<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = 'Blaster91';
?>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=db_startuprr;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>



<?php include("header.php"); ?>

<body>
  <!-- Header image -->
  <header id="header">
    <section id="logo" class="col-12 p-5">
        <img src="img/header.png"/>
    </section>
  </header>

  <main>

<?php include("menu.php"); ?>

<section id="login">
  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Creer un compte</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
</section>

<?php include("articles.php"); ?>

<?php include("content.php"); ?>

<?php include("footer.php"); ?>
