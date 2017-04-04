<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css
">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<div class="container">


  <header class="row">
    <div class="col-sm-12">
      <h1>Entete</h1>
      <p>Modifiez uniquement ce fichier en ajoutant des classes pour l'exercice bootstrap, pour l'exercice flexbox, ajouter les propriétés flexbox dans le fichier app.scss et n'oubliez pas de lancer la compilation avec la commande sass:
      </p>
      <code>sass --watch assets/scsscss:assets/css/styles.css
      </code>
      <p>Bootstrap : mots clefs et classes à ajouter au div existantes pour arriver au rendu final: col-XX-XX, navbar, offset</p>
      <p>Flex -> les propriétés flex: , order:, align-items, justify-content et leurs valeurs possibles</p>
      <p>Il faut changer les styles dans le fichier assets/css/app.scss puis lancez la commande sass pour générer le fichier assets/css/styles.css pour arriver au même résultat que les captures d'écran <b>resultat.png</b>, <b>resultat2.png</b> et <b>resultat3.png</b></p>
    </div>
  </header>

  <section>
    <h2>BOOTSTRAP</h2>
    <p>Essayez navbar navbar-default et navbar-inverse sur la navigation ci-dessous :</p>
    <nav class="">
        <ul class="nav navbar-nav">
          <li class="active"> <a href="#">Accueil</a> </li>
          <li> <a href="#">Contact</a> </li>
        </ul>
    </nav>
    <p>La premiere row est divisé 2 colonnes, une de 9 et une de 3, celle de 9 contient à nouveau une row de 12 qui elle est à nouveau divisé en 3(3 colonnes de 4 donc)</p>
    <div class="row">
      <div class="">
        <div class="row artistes">
          <div class="">
            <img src="assets/img/1.jpg" alt="Triple R" />
            <h4>Triple R – Till The Wheels Fall Off</h4></div>
          <div class="">
            <img src="assets/img/2.jpg" alt="Allez savoir" />
            <h4>Allez savoir ! Ondes électromagnétiques, quels effets sur notre santé et </h4></div>
          <div class="">
            <img src="assets/img/3.jpg" alt="Soul System" />
            <h4>Soul System – le Two-Step à René</h4></div>
        </div>
      </div>
      <div class="">Largeur 3</div>
    </div>


    <div class="row">
      <div class="">Largeur 6</div>
      <div class="">Largeur 6</div>
    </div>


    <p>Mettre la berge droite completement à droite grâce à la classe offset de bootstrap (sans rajouter d'élément HTML donc)</p>
    <div class="row river">
      <div class="col-xs-3 gazon">Berge gauche</div>
      <div class="col-xs-3 gazon">Berge droite</div>
    </div>
    <h2>FIN BOOTSTRAP</h2>
  </section>


  <section>
    <h2>FLEX</h2>

    <?php
      include("./includes/car.php");
     ?>

    <?php
      include("./includes/liste.php");
     ?>

     <?php
       include("./includes/flex.php");
      ?>
      <h2>FIN FLEX</h2>
  </section>

</div>

</body>
</html>
