<!DOCTYPE html>
<html>

<!-- balise php de déclaration de toutes les variables -->
<?php 
$varTitleS1 = 'Flux';
$varTitleS2 = 'Concept';
$varTitleS3 = 'Projets';
$varTitleS4 = 'Equipe';
$varTitleS5 = 'Histoire';
$TitreConceptItem = 'Le corail'; //varie selon où l'on passe la souris
$titreArticle = 'titreArticle'; //varie quand on clique sur une des flèches
$titrePin = 'Paris'; // varie selon le pin sur lequel on clique
$nomPersonneEquipe = 'Adrien Landa'; //varie selon sur quelle photo on a cliqué
$photoPersonneEquipe;


?>

    <head>
        <meta charset="utf-8" /> <!--indique le type d'encodage utilisé dans le fichier : .html -->
        <title>OceanStream</title>
        <link rel="stylesheet" href="style.css"/> <!-- ce fichier html est associé au fichier style.css, chargé de la mise en forme--> 
        
    </head>

    <body>
        





        <header class = "enTete"> <!-- en tête de la page : photo vague-->
            <p>

                <img class = "imageEnTete" src = "Images/imageEnTete.jpg"/>  <!--à changer-->
            </p>

            <div class ="Menu"> <!-- Le menu doit être par dessus l'image de vague -->
                <nav class ="elements"> <!-- pour le menu du site -->
                    <div> <strong>Menu</strong> </div>
                    <div> <a href=#flux>Flux</a> </div> <br/> <!-- liens vers des ancres de la MEME page -->
                    <div><a href = "#concept">Concept </a> </div><br/>
                    <div><a href = "#projets"> Projets </a> </div><br/>
                    <div><a href = "#equipe"> Equipe </a> </div><br/>
                    <div><a href = "#histoire"> Histoire </a> </div><br/>


                </nav>
            </div>

        </header>
        



         <section id = flux class ="s1"> <!-- simulation du concept : vidéo du flux en image de fond -->
            <h1 class = "titreSection1"> <?php echo $varTitleS1; ?> </h1> <br/> <!--l'attribut class sert à donner un identifiant à n'importe quelle balise (p, h1, img...), réutilisé dans le fichier css-->

            <p>
            Article du : <?php echo date('d/m/Y h:i:s'); ?>. <br/>
                <span class = "TitreArticle"> <?php echo $titreArticle; ?> </span> <br/> <!-- span sert à mettre un identifiant sur un mot précis-->
        
            TexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticle
                TexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticle
                TexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticle
                TexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticleTexteArticle
            </p>
        </section>
       




       <section id = concept class = "s2">  <!-- Explication du concept en détails -->
          <h1 class = "titreSection2"> <?php echo $varTitleS2; ?> </h1>
           <p>
           <span class = "titreItem" <?php echo $TitreConceptItem; ?> </span>

               <figure>
                   <img src="Images/corail.jpg" <!-- Ici mettre les 6 images du cycle -->
                        class = "imageFlottante"
                        alt="Un corail"
                        title="DescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItem
                         DescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItem
                         DescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItem
                         DescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItemDescriptionItem"/> <br/>
                   <!--
                   src : chemin relatif de l'image,
                   alt : affiché si l'image ne peut se charger,
                   title : s'affiche quand on passe la souris sur l'image
                   -->
                   <figcaption>Notre cycle de fonctionnement</figcaption> <!--Légende de la figure -->
               <br/>
               </figure>


           </p>
       </section>
       


      <section id = projets class = "s3"> <!-- Carte du monde interactive : infos quand on clique sur chaque pin + possibilité d'en ajouter pour les administrateurs -->
         <h1 class = titreSection3> <?php echo $varTitleS3; ?> </h1>
          <span> <?php echo $titrePin; ?> </span>
          <p>
              <figure>
                  <img src="Images/corail.jpg" class = "imageFlottanteMonde" alt="CarteDuMonde" />
                  textetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetexte
                  textetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetexte
                  textetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetextetexte
                  <br/>
                  <!--
                  Ceci est le texte entourant la carte du monde (à gauche) : varie selon le pin où on a cliqué => boucle if sur le fichier controller ?
                  src : chemin relatif de l'image,
                  alt : affiché si l'image ne peut se charger,
                  title : s'affiche quand on passe la souris sur l'image

                   -->


               </figure>



          </p>


      </section>
      


   

      <section  id = equipe class = "s4">
          <!--faire deux boîtes verticales l'une à côté de l'autre : à gauches les photos cliquables et à droite
          le profil détaillé correspondant à la personne -->
        <h1 class ="titreSection4"> <?php echo $varTitleS4; ?> </h1>

          <!-- ce qui suit est dans la boîte de droite -->
          <p>
              <figure>
                  <img src = "" class = photoPersonne />
                  <span> <?php echo $nomPersonneEquipe; ?> </span> //texte entourant l'image : ici le nom de la personne
              </figure>
              <br/>
              textetextetextetextetextetextetextetextetextetextetextetextetextetexte
              textetextetextetextetextetextetextetextetextetextetextetextetextetexte
              textetextetextetextetextetextetextetextetextetextetextetextetextetextetexte
          </p>


      </section>






        <section  id = histoire class = "s5">
            <h1 class ="titreSection5"> <?php echo $varTitleS5; ?> </h1>
            <p>
                textetextetextetextetextetextetextetextetextetextetextetextetextetextetexte
                textetextetextetextetextetextetextetextetextetextetextetextetextetexte
                textetextetextetextetextetextetextetextetextetextetextetextetextetexte

            </p>


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