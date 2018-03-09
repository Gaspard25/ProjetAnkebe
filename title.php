<?php
    $active = 9;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balises title"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/title.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balises title"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Tout élément graphique ou conteneur d'un dessin SVG peut contenir une chaîne de description TITLE en texte brut"/>
<title>Balise title</title>
</head>
<body>
<header>
    <h1>Balise title</h1>
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
  <form action="form.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> Tout élément graphique ou conteneur d'un dessin SVG peut contenir une chaîne de description "TITLE" en texte brut. Quand la partie concernée apparaît sous forme d'image à l'utilisateur, l'élément « TITLE »n'est pas affiché. Néanmoins, quelques moteurs de rendu peuvent, par exemple, l'afficher sous forme d'infobulle. Des représentations alternatives sont possibles, visuelles ou auditives, en renplacement des éléments graphiques. Généralement, cet élément améliore l'accessibilité des documents SVG.
L'élément « TITLE »est souvent le premier enfant de son parent. Notons que les implémentations qui rendent l'élément title en infobulle ne le font que s'il est à cette place.</p>
    </section>
    <section class="test_navigateur">
        <h3>Compatibilité des navigateurs:</h3>
        <table>
            <tr>
             <td><em>Balise</em></td>
              <td>title</td>
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
                <img src="images/Capture.title.code.PNG" alt="title" width="884" height="283">
            </figure>
            <figure>
                <figcaption>Résultat</figcaption>
                <img src="images/Capture.title.PNG" alt="title" width="664" height="105">
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>L'attribut "class":</h3>
            <p>Une expression de classe utilise une syntaxe similaire à celle d'une instruction de classe. En revanche, avec les expressions de classes, il est possible de ne pas nommer la classe, ce qu'il est impossible de faire avec les instructions de classes.</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "style"</h3>
            <p>L'attribut universel "style" contient des déclarations CSS afin de mettre en forme l'élément</p>
    </section>
</section>
    </main>
</body>
</html>