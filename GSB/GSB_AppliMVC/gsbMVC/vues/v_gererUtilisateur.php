
<form method="POST" action="index.php?uc=GererUtilisateurs&action=AjoutUtilisateur">

<div style="float:left; margin:10px; bottom:1200px">
    
<label for="ID">ID de 4 caractères :</label><br/>
<input type="text" name="IdUtilisateur" /><br/>

<label for="login">Login :</label><br/>
<input type="text" name="Login" /><br/>

<label for="mot de passe">Mot de passe :</label><br/>
<input type="text" name="Mdp" /><br/>
 
<label for="nom">Nom :</label><br/>
<input type="text" name="Nom" /><br/>

<label for="prenom">Prenom :</label><br/>
<input type="text" name="Prenom" /><br/>

<label for="adresse">Adresse :</label><br/>
<input type="text" name="Adresse" /><br/>
 
<label for="codepostal">Code Postal :</label><br/>
<input type="text" name="CodePostal" /><br/>

<label for="ville">Ville :</label><br/>
<input type="text" name="Ville" /><br/>

<label for="date">Date D'embauche :</label><br/>
<input type="date" name="Date" /><br/>

<input type="submit" value="Ajouter Utilisateur" />
</div>

</form>


<form method="POST" action="index.php?uc=GererUtilisateurs&action=SupprimerUtilisateur">
    
<div style="padding-left:500px; margin:10px; bottom:1200px">
    <label for="date">Choix de l'utilisateur :</label><br/>
    <select name="choixUtilisateur" >
        <?php
        foreach ($LesLogins as $leLogin)
        {
            echo "<option value=".$leLogin.">".$leLogin."</option>";
        }
        ?>
    </select>
    
    
    <input type="submit" value="Supprimer Utilisateur" />    
</div>
    
</form>    



<form method="POST" action="index.php?uc=GererUtilisateurs&action=ModifierUtilisateur">
    
<div style="padding-left:500px; margin:10px; bottom:1200px">
    <label for="date">Choix de l'utilisateur à modifier :</label><br/>
    <select name="choixUtilisateur" >
        <?php
        foreach ($LesLogins as $leLogin)
        {
            echo "<option value=".$leLogin.">".$leLogin."</option>";
        }
        ?>
    </select>
    
    
    <input type="submit" value="Modifier Utilisateur" />    
</div>
    
</form>    