<?php
    $active = 3;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise html"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/html.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise html"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élement HTML indique au navigateur que la page web est en html"/>
<title>Balise html</title>
</head>
<body>
<header>
    <h1>Balise html</h1>
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
<!--Articles avec sections description, définitions et explications de la balise-->
<main>
<!--Bouton suivant (à tester)-->
  <form action="h1h6.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p>L'élement HTML<strong> indique au navigateur que la page web est en html.</strong><br />
            Cet balise réprésente <strong>le début de chaque page html</strong>, et il est le <strong>container de toutes les autres balises html</strong> (sauf DOCTYPE)</p>
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
        <p>Voici un exemple de la <strong>balise html</strong> dans une page web:</p>
            <figure>
                <img src="images/exemple_html.PNG" alt="Un exemple de code de la balise link" width="336" height="279">
                <figcaption><strong>Une balise html qui contient les balises head, title et body.</strong></figcaption>
            </figure>
        <p>La balise HTML est la base même d'une page web en html.</p>
    </section>
        <h4>La balise HTML ne possède pas d'attribut obligatoire !</h4>
</section>
    </main>
</body>
</html> 