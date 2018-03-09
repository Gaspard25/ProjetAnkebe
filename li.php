<?php
    $active = 7;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise li"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/li.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise li"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="La balise « li » encapsule des éléments présents dans des listes. Elle est toujours employée lors de l'utilisation de listes ordonnées, déclarées avec la balise « ol », ou non ordonnées : balise « ul »"/>
<title>Balise li</title>
</head>
<body>
<header>
    <h1>Balise li</h1>
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
  <form action="input.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> La balise « li » encapsule des éléments présents dans des listes. Elle est toujours employée lors de l'utilisation de listes ordonnées, déclarées avec la balise « ol », ou non ordonnées : balise « ul ».</p>
        <p>Les éléments « dir » et « menu » emploient également la balise « li » pour encapsuler les éléments qu'ils contiennent.</p>
        <p>Il est possible de modifier l'apparence de la puce devant un élément contenu dans la balise « li » en utilisant le style css "list-style-type".</p>
        <p>D'autres styles sont applicables comme par exemple « list-style-image » qui remplace la puce par l'image spécifiée et le style « list-style-position » qui spécifie si la puce est positionnée au niveau de l'élément ou bien en retrait (marge négative).</p>
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
                <figcaption><strong>HTML</strong></figcaption>
                <img src="images/exemplelihtml.PNG" alt="exemple li html" width="292" height="100">
            </figure>
            <figure>
                <figcaption><strong>Résultat</strong></figcaption>
                <img src="images/exempleliresultat.PNG" alt="exemple li résultat htlm" width="161" height="50">
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>Les attributs standards:</h3>
            <p>La balise "li" prend en charge tous les attributs standards en HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>Les attributs d'évènement:</h3>
            <p>La balise "li" prend en charge tous les attributs d'évènement en HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "type":</h3>
            <p>Spécifie l'apparence de la puce précédent le texte.</p>
            <p>Obsolète, il faut utiliser le style CSS "list-style-type"</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "value":</h3>
            <p>Indique le numéro de l'élément dans la liste.</p>
            <p>Obsolète, il faut utiliser le style CSS ""</p>
    </section>
</section>
    </main>
</body>
</html> 