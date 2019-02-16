<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> <!--indique le type d'encodage utilisé dans le fichier : .html -->
        <title>OceanStream</title>
        <link rel="stylesheet" href="style.css"/>
        <!--insérer ici header.php -->
    </head>

    <body>
          <h2> Créer un compte </h2>
          <form action = "pageInscription.php" method = "post">
                Vous êtes :
                <select name="type" >
                    <option value="particulier">Particulier</option>
                    <option value="entreprise">Entreprise</option>
               </select>
               <br/>
               <!-- si particulier : -->
               Nom : 
                <input type="text" name="nom" /> <br/>
                Prénom : 
                <input type="text" name="prenom" /> <br/>
                Adresse : 
                <input type="text" name="adresse" /> <br/>
                e-mail : 
                <input type="text" name="email" /> <br/>
                <!-- Ici afficher un message d'erreur si mot_de_passe != mot_de_passe1 -->
                Définissez votre mot de passe : 
                <input type="text" name="mot_de_passe" /> <br/>
                Confirmer votre mot de passe : 
                <input type="text" name="mot_de_passe1" /> <br/>
                <!-- si entreprise : -->

                Nom de l'entreprise : 
                   <input type="text" name="nomE" /> <br/>
                   Statut de l'entreprise : 
                   <input type="text" name="statut" /> <br/>
                   Téléphone : 
                   <input type="text" name="tel" /> <br/>
                   e-mail : 
                   <input type="text" name="email" /> <br/>
                   Définissez votre mot de passe : 
                   <input type="text" name="mot_de_passe" /> <br/>
                   Confirmer votre mot de passe : 
                   <input type="text" name="mot_de_passe1" /> <br/>

                   <input type="submit" value="Valider" />
               
               
            </form>


           <?php
           //sert à afficher la suite du formulaire selon si type = particulier ou entreprise 
          

           function addClient() {
             
           }

           ?>
    </body>
</html>