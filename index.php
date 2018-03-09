<?php
    $active = 0;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/png" href="images/favicon.png">
<meta property="og:locale" content="fr_FR" />
<meta property="og:title" content="Balise img"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Description des balises HTML"/>
<meta property="og:url" content="https://romaint.promo-5.codeur.online/projet-1/index.php"/>
<meta property="og:image" content="images/miniature.png"/>
<meta property="og:site_name" content="Le lexique du HTML5"/>
<meta property="fb:app_id" content="147559545850696"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:description" content="Description des balises HTML"/>
<meta name="twitter:title" content="Balise img"/>
<meta name="twitter:domain" content="Le lexique du HTML5"/>
<meta name="twitter:image" content="images/miniature.png"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="L'élement HTML img permet de représenter une image dans une page web."/>
<meta charset="UTF-8">
<title>Balise img</title>
</head>
<body>
<header>
    <h1>Balise img</h1>
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
  <form action="link.php">
    <input class="next" type="submit" value="Suivant" />
    </form>
<section id="description">
        <h2>Description:</h2>
    <section class="text_description">
        <p>L'élement HTML img permet de <strong>représenter une image dans une page web.</strong><br />
            On peut représenter différents formats d'image, comme le <strong>PNG</strong> (souvent utilisé pour la transparence), le <strong>JPG</strong>, le <strong>GIF</strong> (animés ou non), le <strong>SVG</strong>, le <strong>BMP</strong>, et surement pleins d'autres (tout cela dépend de la compatibilité entre les navigateurs).<br />
            <strong>C'est une balise inline</strong>, donc elle ne provoque pas de retour à la ligne.
        </p>
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
        <p>Voici un exemple concret de la balise img:</p>
            <figure>
                <img src="images/exemple_img.PNG" alt="Un exemple de code de la balise img" width="591" height="38">
                <figcaption><strong>Une balise img avec son attribut obligatoire "src" et des attributs globales (alt, width, height)</strong></figcaption>
            </figure>
        <p>La balise img est, dans cet exemple, utilisé pour <strong>afficher l'image qui viens de l'url écris dans l'attribut src</strong> <em>(lorem pixel)</em>.<br />
        On voit aussi <strong>l'attribut alt</strong> qui permet de donner <strong>une courte description de l'image</strong>, et <strong>les attributs width et height</strong> qui permettent de <strong>préciser la taille de l'image</strong> pour une meilleure compatibilité des navigateurs.</p>
        <p>Vous vous souvenez que <strong>img est une balise inline</strong> ?<br /> donc qui ne         provoque pas de retour à la ligne, et qui a besoin d'être entouré par une balise de     type block pour un code plus sémantique,<br />
            Et bien dans le prochain exemple, on va retrouver notre <strong>balise img dans une balise figure</strong> qui est une <strong>balise de type block !</strong></p>
            <figure>
                <figcaption>La balise figure provoque un retour à la ligne, comme dans notre partie <strong>"exemples"</strong></figcaption>
                <img src="images/exemple_img_2.PNG" alt="Un exemple de la balise img dans une balise figure" width="595" height="112">
            </figure>
        <p>La <strong>balise figcaption</strong> (qui est optionnel) permet de <strong>mettre un court texte à côté de notre image pour l'expliquer brièvement.</strong></p>
    </section>
        <h4>Parlons maintenant des attributs !</h4>
</section>
<!--Sections attributs obligatoire pour la balise (on pourra surement mettre quelques balises "optionnels" si on a pas de balises obligatoire)-->
<h2 class="titre_attribut">Attributs:</h2>
<section id="attributs">
    <section class="text_attribut">
        <h3>L'attribut src:</h3>
        <p><strong>L'attribut src</strong> permet de <strong>faire un lien vers l'image que nous souhaitons afficher</strong> avec notre balise img,<br /> Cet <strong>attribut est obligatoire</strong> car la balise img a besoin de savoir où se trouve l'image à afficher (voir exemples)</p>
    </section>
    <section class="text_attribut">
        <h3>L'attribut srcset:</h3>
        <p><strong>L'attribut srcset</strong> est une <em>"évolution"</em> de l'attribut src, mais ne <strong>le remplace pas pour autant !</strong><br />
            Il est souvent <strong>utilisé pour du responsive design</strong>, il permet de gérer les différentes qualité d'une image.<br />
            </p>
            <h4>Par exemple:</h4>
        <figure>
            <img src="images/exemple_srcset.PNG" alt="un exemple de l'attribut srcset" width="238" height="17">
            <figcaption class="petit"><a class="image_agrandi" href="#agrandi">cliquez pour agrandir</a></figcaption>
        </figure>
        <p>Dans cet exemple, <strong>si le navigateur ne reconnait pas srcset, il va charger l'image de l'attribut src,</strong><br />
            <strong>Mais si le navigateur reconnaît srcset, et qu'il détecte un pixel ratio de 2,</strong> il chargera <em>mon-imageHD.jpg</em></p>
    </section>
</section>
    </main>
    <div id="agrandi">
        <a href="#attributs"><img src="images/exemple_srcset_2.PNG" alt="Un exemple de l'attribut srcset version grand" width="535" height="39"></a>
        </div>
</body>
</html> 