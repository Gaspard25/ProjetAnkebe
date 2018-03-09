<?php
    $active = 1;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise link"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/link.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise link"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élement HTML link défini la relation entre le document courant et une ressource externe"/>
<title>Balise link</title>
</head>
<body>
<header>
    <h1>Balise link</h1>
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
  <form action="div.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p>L'élement HTML link <strong>défini la relation entre le document courant et une ressource externe.</strong><br />
        Cet balise peut être utilisé pour <strong>définir un lien vers une feuille de style ou un cadre de navigation</strong> (pour accéder à la même page dans une langue différente par exemple)..</p>
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
        <p>Voici un exemple de la <strong>balise link</strong> pour <strong>faire le lien d'une page en CSS:</strong></p>
            <figure>
                <img src="images/exemple_link.PNG" alt="Un exemple de code de la balise link" width="444" height="121">
                <figcaption><strong>Une balise link avec ses attributs obligatoire (rel, type et href)</strong></figcaption>
            </figure>
        <p>La balise link est, dans cet exemple, utilisé pour <strong>faire le lien et la relation entre la page HTML et la page CSS "Style.css"</strong>.<br />
            La balise link est <strong>obligatoirement placé dans la balise head pour faire la relation entre une page web et une feuille de style</strong>,<br /> mais il peux tout autant faire le lien avec une traduction de la page.
        </p>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>L'attribut href:</h3>
        <p><strong>L'attribut href</strong> permet de <strong>faire le lien avec notre page web actuel.</strong></p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut rel:</h3>
        <p><strong>L'attribut rel</strong> permet de <strong>faire la relation entre notre document préciser dans "href" et notre page web !</strong><br />
        Dans notre cas, nous précisons que notre page web va faire la relation avec un "stylesheet" CSS, donc une feuille de style !
            </p>
    </section>
</section>
    </main>
</body>
</html> 