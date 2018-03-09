<?php
    $active = 10;
?>
<!DOCTYPE html>
<html>
<head>
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balises form"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/form.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise form"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élément HTML form représente une section d'un document qui contient des contrôles interactifs permettant à un utilisateur d'envoyer des données à un serveur web"/>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<title>Balise Form</title>
</head>
<body>
<header>
    <h1>Balise form</h1>
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
  <form action="table.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
    <header>
        <h2>Description:</h2>
    </header>
    <section class="text_description">
        <p> L'élément HTML "form" représente une section d'un document qui contient des contrôles interactifs permettant à un utilisateur d'envoyer des données à un serveur web.
        Il est possible d'utiliser les pseudo-classes CSS :valid et :invalid pour mettre en forme un élément "form".</p>
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
<!--Sections exemples, besoin d'images pour les exemples-->
<section id="exemples">
       <h2>Exemples:</h2>
    <section class="text_exemples">
            <figure>
                <figcaption><strong>Exemple de code</strong></figcaption>
                <img src="images/Capture.form.code.PNG" alt="FORM" width="607" height="514">
            </figure>
            <figure>
                <figcaption>Résultat</figcaption>
                <img src="images/capture.form.PNG" alt="form" width="782" height="170">
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>L'attribut "action":</h3>
        <p>L'URI du programme qui traitera les informations soumises par le formulaire. Cette valeur peut être surchargée par un attribut FORMACTION sur un élément « button » ou « input ». </p>
    </section>
            <section class="text_attribut">
        <h3>L'attribut "target":</h3>
        <p>Un nom ou un mot-clé indiquant où afficher la réponse après avoir envoyé le formulaire.</p>
        </section>
    </section>
    </main>
</body>
</html>