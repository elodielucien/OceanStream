<!DOCTYPE html>
<html>

<!-- balise php de déclaration de toutes les variables -->
<?php 
$varTitle = "Bienvenue";
$userInfos = array(
'nom' => 'Lucien',
'prenom' => 'Elodie',
'adresse' => 'blabla',
'age' => 22);
?> 















    <head>
        <meta charset="utf-8" /> <!--indique le type d'encodage utilisé dans le fichier : .html -->
        <title>OceanStream</title>
        <link rel="stylesheet" href="style.css"/> <!-- ce fichier html est associé au fichier style.css, chargé de la mise en forme--> 
        
    </head>

    <body>
        
    <div class ="Menu">
        <nav class ="elements"> <!-- pour le menu du site -->
                <div> <strong>Menu</strong> </div>
                <div><a href = "page1.html" > Accueil </a> </div>
                <div><a href = "Contenu/page2.html"> Page 2 </a> </div>

        </nav>
    </div>    


        



        <header class = "enTete"> <!-- en tête de la page-->
            <p>
                <span class = oceanstream> OceanStream, l'association qui sauvera les écosystèmes coralliens ! </span><br/>
                <img class = "imageEnTete" src = "Images/imageEnTete.jpg"/> 
            </p>
        </header>
        



         <section class ="s0">
            <span class = "titre"> <?php echo $varTitle; ?> </span> <br/> <!--l'attribut class sert à donner un identifiant à n'importe quelle balise (p, h1, img...), réutilisé dans le fichier css-->

            <p>
            Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>. 
            Bonjour et <span class = "bienvenu"> bienvenue </span> sur notre site web !<br/> <!-- span sert à mettre un identifiant sur un mot précis-->
        
            C'est un <strong>premier essai</strong> de page web, <em>soyez indulgents.</em>
            </p>
        </section>
       




       <section class = "s1">
          <h1 class = "titreSection1"> Articles & magazines </h1> 
            <ol>                       <!--test de liste non ordonnée -->
    	      <li>poisson</li>
              <li>coraux</li>
              <li>baleines</li>
            </ol>
       </section>
       


      <section class = "s2">
         <h1 class = titreSection2> Vous inscrire </h1>
         Je vous conseille le site suivant : <a href="http://OceanStream.com" title="Vous ne le regretterez pas !">OceanStream</a>, il est très réussi ! <br/>
         Consultez également notre <a href="Contenu/page2.html">page 2</a>, en cours d'élaboration. <br/>

    
         <a href=#monAncre>AllerVersAncre</a> <br/> <!-- lien permettant de renvoyer vers l'ancre "monAncre". -->
         <a href = Contenu/page2.html#AncrePage2>AllerVersAncrePage2 </a> <br/> <!-- lien permettant de renvoyer vers l'ancre "AncrePage2" de la page 2 -->
      </section>
      


   

      <section class = "s3">
        <h1 class ="titreSection3"> Qui sommes-nous ?</h1>
        <p>
        Normalement, si vous cliquez sur le lien, cela vous amènera plus bas dans la même page (à condition que la page comporte suffisamment de texte pour que les barres de défilement se déplacent automatiquement).
        Voici un exemple de page comportant beaucoup de texte et utilisant les ancres (j'ai mis n'importe quoi dans le texte pour remplir ) :
        S'il ne se passe rien quand vous cliquez sur les liens, c'est qu'il n'y a pas assez de texte. Dans ce cas, vous pouvez soit rajouter du blabla dans la page pour qu'il y ait (encore) plus de texte, soit réduire la taille de la fenêtre de votre navigateur pour faire apparaître les barres de défilement sur le côté.

        L'attributidsert à donner un nom « unique » à une balise, pour s'en servir de repère. Et, croyez-moi, vous n'avez pas fini d'entendre parler de cet attribut. Ici, on s'en sert pour faire un lien vers une ancre mais, en CSS, il nous sera très utile pour « repérer » une balise précise, vous verrez. 
        cependant de créer des id avec des espaces ou des caractères spéciaux, utilisez simplement, dans la mesure du possible, des lettres et chiffres pour que la valeur soit reconnue par tous les navigateurs.

        Lien vers une ancre située dans une autre page
        Alors là je vous préviens, on va faire le Mégamix !


        <span class = "souligné">Test de texte souligné </span> <br/>


        L'idée, c'est de faire un lien qui ouvre une autre page ET qui amène directement à une ancre située plus bas sur cette page.
        En pratique c'est assez simple à faire : il suffit de taper le nom de la page, suivi d'un dièse (#), suivi du nom de l'ancre.
        … vous amènera sur la pageancres.html, directement au niveau de l'ancre appeléerollers.

        Voici une page qui contient trois liens, chacun amenant vers une des ancres de la page de l'exemple précédent 
        </p>

        <span id= monAncre>MonAncre</span> <br/> <!-- Ancre : id est un repère permettant au lien href = #monAncre de renvoyer à cet endroit -->

        Vous pouvez envoyer un email à l'adresse suivante : <a href = "mailto:elodielucien@gmail.com">elodielucien@gmail.com</a> <br/> <!-- lien ouvrant une fenêtre d'email -->

        <figure>
          <img src="Images/corail.jpg" class = "imageFlottante" alt="Un corail" title="Magnifique!"/> Ceci est le texte entourant l'image, qui sera une image flottante à gauche du texte grâce au code css. <br/> <!--src : chemin relatif de l'image, alt : affiché si l'image ne peut se charger, 
          title : s'affiche quand on passe la souris sur l'image -->
          <figcaption>Voici une image de corail</figcaption> <!--Légende de la figure -->
          <p class = "finDuTexteEntourantLImage">Ceci est la suite du texte écrit en dessous de l'image et non à droite.</p> <br/>
        </figure>


  </section>
  


        <footer class = "piedPage">  <!--pied de page -->
            <table>
                <tr>   <!-- première ligne-->
                    <td>  <!-- début première cellule -->
                        <strong>Contact</strong>
                    </td> <!-- fin première cellule -->
                </tr>  <!--fin première ligne-->

                <tr>
                    <td>Adresse</td>
                </tr>

                <tr>
                    <td>Téléphone</td>
                </tr>

                <tr>
                    <td><a href = "mailto:elodielucien@gmail.com">Nous écrire</a></td>
                </tr>

            </table>

        </footer>


 </body>
</html>