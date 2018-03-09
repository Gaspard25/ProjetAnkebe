<?php
    $active = 4;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balises h1 à h6"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/table.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balises h1 à h6"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="https://romaint.promo-5.codeur.online/projet-1/images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="les titres introduisant le contenu dans l'HTML sont signalés par les balises h1, h2, h3, h4, h5 et h6 (h pour heading en anglais) ce sont des balises de type block" />
<title>Balises h1 - h6</title>
</head>
<body>
<header>
    <h1>Balise h1 à h6</h1>
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
  <form action="p.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> Dans une page web, les titres introduisant le contenu dans l'HTML sont signalés par les balises "h1", "h2", "h3", "h4", "h5" et "h6" (h pour "heading" en anglais) ce sont des balises de type "block" qui ont deux principales vocations :</p>
        <ul>
            <li>préparer la lecture du paragraphe que ces titres précèdent en résumant son contenu. Ils aident ainsi les lecteurs à mieux comprendre ce qu’ils vont lire.</li>
            <li>indiquer aux moteurs de recherche les informations les plus importantes que comportent votre page (l'algorithme de Google accorderait plus de poids aux mots clés et expressions que contiennent les titres qu'au reste du contenu)</li>
        </ul>
        <p>Par ailleurs, concernant l’écriture des titres dans une page web, la norme HTML 4.01 nous dit que :</p>
        <ul>
            <li>chaque document HTML peut contenir un ou plusieurs titres h1 à h6</li>
            <li>chaque titre h1 à h6 nécessite obligatoirement une balise ouvrante "hn" et une balise fermante "hn"</li>
            <li>il existe 6 niveaux de titrage possibles : h1, h2, h3, h4, h5 et h6. h1 étant un titre de premier niveau, h2 un titre de second niveau, h3, un titre de troisième niveau etc...</li>
        </ul>
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
                <img src="images/exempleh1h6html.PNG" alt="exemple h1 h6 html" width="235" height="126">
            </figure>
            <figure>
                <figcaption><strong>Résultat</strong></figcaption>
                <img src="images/exempleh1h6resultat.PNG" alt="exemple h1 h6 résultat" width="199" height="216">
                <p>La page contient un titre principal (h1 et des sous titres moins importantes h2, h3, h4, h5 et h6).<br /> Cette utilisation n’est possible que si vous avez des contenu qui se hiérarchisent ainsi (titre, sous titre, sous-sous titre...).<br />
                Si le contenu de la page ne se hiérarchise pas ainsi, ne forcez pas car vous risqueriez de nuire à la lisibilité de votre contenu.</p>
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>Les attributs standards:</h3>
            <p>Les balises "h1" à "h6" prennent en charge tous les attributs standards en HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>Les attributs d'évènement:</h3>
            <p>Les balises "h1" à "h6" prennent également en charge tous les attributs d’événement HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "Align":</h3>
            <p>Permet de spécifier l'alignement.<br />
            Obsolète depuis HTML5.</p>
    </section>
</section>
    </main>
</body>
</html> 