<?php
    $active = 2;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise div"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/div.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise div"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élement HTML div permet de définir une division ou une section à un document HTML"/>
<title>Balise div</title>
</head>
<body>
<header>
    <h1>Balise div</h1>
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
    </ul>
</nav>
<!--Sections description, définitions et explications de la balise-->
<main>
<!--Bouton suivant (à tester)-->
  <form action="html.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
   <h2>Description:</h2>
    <section class="text_description">
        <p>L'élement HTML div permet de <strong>définir une division ou une section à un document HTML.</strong><br />
            Cet élement sert <strong>principalement à contenir les balises de type block pour pouvoir les placer plus facilement sur le CSS.</strong></p>
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
<!--Articles avec sections exemples, besoin d'images pour les exemples (400x200 pixels serait pas mal je trouve)-->
<section id="exemples">
   <h2>Exemples:</h2>
    <section class="text_exemples">
        <p>Voici un exemple de la <strong>balise div</strong> en code puis le résultat avec du CSS:</p>
            <figure>
                <img src="images/exemple_div.PNG" alt="Un exemple de code de la balise div" width="269" height="110">
                <figcaption><strong>Codage d'une div simple qui contient un h3 et un p avec une couleur défini en CSS.</strong></figcaption>
            </figure>
            <figure>
                <img src="images/exemple_div_2.PNG" alt="Le résultat de l'exemple" width="270" height="69">
                <figcaption><strong>Le résultat du codage ci dessus.</strong></figcaption>
            </figure>
    <p>Dans cet exemple, on a utilisé une <strong>div pour contenir une balise h3 et une balise p qui sont tout les deux des balises block,</strong><br /> Pour pouvoir leur <strong>donner la même couleur,</strong> ici le bleu.</p>
    </section>
    </section>
        <h4>La balise div ne possède pas d'attribut obligatoire, mais il est possible de lui donner des attribut globales.</h4>
    </main>
</body>
</html> 