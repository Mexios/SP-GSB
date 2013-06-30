<form method="POST" action="index.php?uc=GererUtilisateurs&action=ValiderModification">

<div style="padding-left:500px; margin:10px; bottom:1200px">
 <br/><br/>   
Modification de l'utilisateur : <?echo $_SESSION['NomUtilisateur']."  ".$_SESSION['PrenomUtilisateur'];?><br/>    
    
<label for="ID">ID :</label>
<input type="text" name="IdUtilisateur" value="<? echo $_SESSION['IdUtilisateur'];?>" disabled/><br/>

<label for="login">Login :</label>
<input type="text" name="Login" value="<? echo $_SESSION['LoginUtilisateur'];?>" /><br/>

<label for="mot de passe">Mot de passe de 5 caractères :</label>
<input type="text" name="Mdp" /><br/>
 
<label for="nom">Nom :</label>
<input type="text" name="Nom" value="<? echo $_SESSION['NomUtilisateur'];?>" /><br/>

<label for="prenom">Prenom :</label>
<input type="text" name="Prenom" value="<? echo $_SESSION['PrenomUtilisateur'];?>" /><br/>

<label for="adresse">Adresse :</label>
<input type="text" name="Adresse" value="<? echo $_SESSION['AdresseUtilisateur'];?>" /><br/>
 
<label for="codepostal">Code Postal :</label>
<input type="text" name="CodePostal" value="<? echo $_SESSION['CodePostalUtilisateur'];?>" /><br/>

<label for="ville">Ville :</label>
<input type="text" name="Ville" value="<? echo $_SESSION['VilleUtilisateur'];?>" /><br/>

<label for="date">Date D'embauche :</label>
<input type="text" name="Date" value="<? echo $_SESSION['DateUtilisateur'];?>" /><br/>

<input type="submit" value="Modifier Utilisateur" name="Modifier"/>
</div>

</form>
