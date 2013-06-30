    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
                            <h3><strong><?php echo $_SESSION['groupe']. " :"; ?></strong></h3><br>
				<Strong><?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?></strong><br/><br/>
			</li>
                        <br/>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           <?php if($_SESSION['groupe'] == 'administrateur')
           {
               ?>
           <li class="smenu">
              <a href="index.php?uc=GererUtilisateurs&action=GererUtilisateurs" title="Gérer les utilisateurs ">Gérer les utilisateurs</a>
           </li>
           <?php } ?>
         </ul>
        
    </div>
    