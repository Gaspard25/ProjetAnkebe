<?php
    $active = 6;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balises ul"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/ul.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balises ul"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="La balise ul est utilisée pour définir une liste non ordonnée, c'est à dire une liste d'éléments non numérotés précédés de façon classique par une puce"/>
<title>Balise ul</title>
</head>
<body>
<header>
    <h1>Balise ul</h1>
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
    <form action="li.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p> La balise "ul" est utilisée pour définir une liste non ordonnée, c'est à dire une liste d'éléments non numérotés précédés de façon classique par une puce. Le rendu des listes varie suivant les navigateurs : il est utile d'appliquer des styles css pour contrôler au mieux l'affichage des listes. </p>
        <p>Pour afficher plusieurs éléments sous un élément d'une liste, il suffit de créer une nouvelle liste imbriquée dans la première au niveau de l'élément voulu. </p>
        <p>Chaque élément de la liste doit être déclaré à la suite de la balise « li ». Il est possible de modifier l'apparence de la puce devant chaque élément en utilisant le style css « list-style-type ».</p>
        <p>D'autres styles sont applicables comme par exemple « list-style-image » qui remplace la puce par l'image spécifiée et le style « list-style-position » qui spécifie si la puce est positionnée au niveau de l'élément ou bien en retrait (marge négative).</p>
    </section>
    

 <section class="test_navigateur">
        <h3>Compatibilité des navigateurs:</h3>
         <table>
            <tr>
             <td><em>Balise</em></td>
              <td>ul</td>
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
                <img src="images/exempleulhtml.PNG" alt="exemple ul html" width="230" height="101">
                
            </figure>
            <figure>
                <figcaption><strong>Résultat</strong></figcaption>
                <img src="images/exempleulresultat.PNG" alt="exemple ul résultat html" width="114" height="56">
            </figure>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>Les attributs standards:</h3>
            <p>La balise "ul" prend en charge tous les attributs standards en HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>Les attributs d'évènement:</h3>
            <p>La balise "ul" prend en charge tous les attributs d'évènement en HTML5.</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "compact":</h3>
            <p>Applique un rendu plus compact de la liste avec un texte plus petit et resserré.</p>
            <p>Obsolète, il faut employer les styles CSS pour un rendu équivalent</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut "type":</h3>
            <p>Spécifie l'apparence des puces des éléments li qu'elle contient.</p>
            <p>Obsolète, il faut utiliser le style CSS "list-style-type"</p>
    </section>
</section>
    </main>
</body>
</html> 