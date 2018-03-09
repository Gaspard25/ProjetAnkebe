<?php
    $active = 8;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png"><meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise input"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/input.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise input"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élément HTML input est utilisé pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisateur de saisir des données"/>
<title>Balise input</title>
</head>
<body>
<header>
    <h1>Balise input</h1>
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
  <form action="title.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> L'élément HTML "input" est utilisé pour créer un contrôle interactif dans un formulaire web qui permet à l'utilisateur de saisir des données. Les saisies possibles et le comportement de l'élément  "input" dépend fortement de la valeur indiquée dans son attribut type.</p>
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
            <figure>
               <figcaption><strong>Exemple de code</strong></figcaption>
                <img src="images/Capture.formulaire.code.PNG" alt="Un exemple quelconque de la balise quelconque" width="662" height="519">
            </figure>
            <figure>
                <figcaption>Résultat</figcaption>
                <img src="images/Capture.formulaire.PNG" alt="Un exemple quelconque de la balise quelconque" width="668" height="268">
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>L'attribut "type":</h3>
            <p>L’attribut principale est « type ». Le type du contrôle de saisie. La valeur par défaut, utilisée lorsqu'aucune valeur n'est fournie est « text ».
            </p>
    </section>
</section>
    </main>
</body>
</html>