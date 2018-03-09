<?php
    $active = 11;
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balises Table"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/table.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balises Table"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="https://romaint.promo-5.codeur.online/projet-1/images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élément HTML « table » permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions"/>
<title>Balise table</title>
</head>
<body>
<header>
    <h1>Balise table</h1>
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
<!--Articles avec sections description, définitions et explications de la balise-->
<main>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> L'élément HTML « table »permet de représenter un tableau de données, c'est-à-dire des informations exprimées sur un tableau en deux dimensions.</p>
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
                <img src="images/Capture.table.code.PNG" alt="table" width="661" height="202">
            </figure>
            <figure>
                <figcaption>Résultat</figcaption>
                <img src="images/Capture.table.PNG" alt="table" width="661" height="202">
            </figure>
    </section>
        <h4>Cet élément inclut les attributs universels. Les attributs universels sont des attributs communs à l'ensemble des éléments HTML.</h4>
</section>
    </main>
</body>
</html>