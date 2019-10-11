<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Back Office</title>
    <link rel="stylesheet" href="backOffice.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <section id="nav-backOffice">
        <span class="button-sidebar" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Back Office Panel</span>
        <nav id="nav-user">
          <ul id="liste-users">
            <li> <a class="nav-link-user" href="#"> <i class="far fa-user"></a></i></li>
            <li><a href="#" class="nav-link-user">Déconexion</a></li>
          </ul>
        </nav>
      </section>


    </header>

    <section>
      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a class="link-sidebar" href="#">Creer un article</a>
          <a class="link-sidebar" href="#">Options</a>
      </div>

      <div id="main">
        <div class="container">
          <div id="create-articles">
            <h1>Creer un articles</h1>
          </div>
          <form id="formulaire-creer-articles" class="d-flex flex-column justify-content-center align-content-center align-items-center" enctype="multipart/form-data" method="post" action="traitement.php">
                <p class="d-flex justify-content-center align-items-flex-start" style="width: 100%; font-weight: bold;">
                  <label for="subject" style="width:60px;">sujet :</label>
                  <input type="text" id="subject" name="subject" placeholder="sujet" style="height:30px; width:70%;">
                </p>
                <p class="d-flex justify-content-center align-items-flex-start" style="width: 100%;font-weight: bold;">
                  <label for="subject" style="width:60px;">article :</label>
                  <textarea id="content" name="content" placeholder="article" style="height:200px; width:70%;"></textarea>
                </p>
                <p class="d-flex justify-content-center align-items-flex-start">
                  <label for="img" >Upload une image </label>
                  <input type="file" name="file" id="file">
                </p>
              <input type="submit" value="publier" name="submit">
            </div>
          </form>
        </div>
      </div>
    </section>
<script>
/* sidebar backOffice */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/6fee70888d.js"></script>
<script src="scriptOffice.js" charset="utf-8"></script>
  </body>
</html>
