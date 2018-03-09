<?php
    $active = 0;
?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta charset="UTF-8">
<title>Balise img</title>
</head>
<body>
<header>
    <h1>Balise img</h1>
    <!--Le menu principal-->
    <?php
        include'include/menu.php';
    ?>
</header>
<!--Menu d'ancrage pour accéder rapidement aux sections-->
<nav id="ancres">
   <h2>Accès rapide:</h2>
    <ul>
        <li><a href="#description">Description</a></li>
        <li><a href="#exemples">Exemples</a></li>
        <li><a href="#attributs">Attributs</a></li>
    </ul>
</nav>
<!--Sections description, définitions et explications de la balise-->
<main>
<!--Bouton suivant (à tester)-->
  <form action="link.html">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p>L'élement HTML img permet de <strong>représenter une image dans une page web.</strong><br />
        </p>
    </section>
    <section class="test_navigateur">
        <h3>Compatibilité des navigateurs:</h3>
               <table>
            <tr>
             <td><em>Balise</em></td>
              <td>HTML</td>
            </tr>
            <tr>
              <td><img alt="Le logo de Google Chrome" src="images/chrome.png" width="32" height="32"></td>
              <td>Oui</td>
            </tr>
            <tr>
               <td><img alt="Le logo de Edge (Internet explorer)" src="images/edge.png" width="32" height="32"></td>
               <td>Oui</td>
            </tr>
            <tr>
              <td><img alt="Le logo de Mozilla Firefox" src="images/mozilla.png" width="32" height="32"></td>
              <td>Oui</td>
            </tr>
            <tr>
               <td><img alt="Le logo de Safari" src="images/safari.png" width="32" height="32"></td>
               <td>Oui</td>
            </tr>
            <tr>
                <td><img alt="Le logo d'Opera" src="images/opera.png" width="32" height="32"></td>
                <td>Oui</td>
            </tr>
        </table>
    </section>
    </section>
<!--Sections exemples, besoin d'images pour les exemples (400x200 pixels serait pas mal je trouve)-->
<section id="exemples">
       <h2>Exemples:</h2>
    <section class="text_exemples">
        <p>Voici un exemple concret de la balise img:</p>
            <figure>
                <img src="images/exemple_img.PNG" alt="Un exemple de code de la balise img" width="591" height="38">
                <figcaption><strong>Une balise img avec son attribut obligatoire "src" et des attributs globales (alt, width, height)</strong></figcaption>
            </figure>
        <p>La balise img est, dans cet exemple, utilisé pour <strong>afficher l'image qui viens de l'url écris dans l'attribut src</strong> <em>(lorem pixel)</em>.<br />
        On voit aussi <strong>l'attribut alt</strong> qui permet de donner <strong>une courte description de l'image</strong>, et <strong>les attributs width et height</strong> qui permettent de <strong>préciser la taille de l'image</strong> pour une meilleure compatibilité des navigateurs.</p>
        <p>Vous vous souvenez que <strong>img est une balise inline</strong> ?<br /> donc qui ne         provoque pas de retour à la ligne, et qui a besoin d'être entouré par une balise de     type block pour un code plus sémantique,<br />
            Et bien dans le prochain exemple, on va retrouver notre <strong>balise img dans une balise figure</strong> qui est une <strong>balise de type block !</strong></p>
            <figure>
                <figcaption>La balise figure provoque un retour à la ligne, comme dans notre partie <strong>"exemples"</strong></figcaption>
                <img src="images/exemple_img_2.PNG" alt="Un exemple de la balise img dans une balise figure" width="595" height="112">
            </figure>
        <p>La <strong>balise figcaption</strong> (qui est optionnel) permet de <strong>mettre un court texte à côté de notre image pour l'expliquer brièvement.</strong></p>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
        <p>
        <?php if ($active == 0) { echo "Active est egale a 0"; }      else { echo "disable"; } ?>
    
        </p>
</body>
</html> 