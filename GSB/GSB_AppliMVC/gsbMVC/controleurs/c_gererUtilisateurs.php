
<?php include("vues/v_sommaire.php");

?>
    <div>
        <h3>Créer, Modifier, Supprimer des utilisateurs :</h3>
        
        <?php 
        $action = $_REQUEST['action'];
        //echo $action;
        switch($action)
        {
            case 'GererUtilisateurs' : {
                $LesLogins = $pdo->RecuperationLogin();
                include("vues/v_gererUtilisateur.php");
                break;
            }
            case 'AjoutUtilisateur' : {
                $LesLogins = $pdo->RecuperationLogin();
                $ID = $_POST['IdUtilisateur'];
                $Login = $_POST['Login'];
                $Password = $_POST['Mdp'];
                $Nom = $_POST['Nom'];
                $Prenom = $_POST['Prenom'];
                $Adresse = $_POST['Adresse'];
                $Code_Postal = $_POST['CodePostal'];
                $Ville = $_POST['Ville'];
                $DateEmbauche = $_POST['Date'];
                $affichage = $pdo->AjouterUtilisateur($ID,$Login,$Password,$Nom,$Prenom,$Adresse,$Code_Postal,$Ville,$DateEmbauche);
                echo "<div style='color:red;font-weight:bold;'>";
                echo $affichage."</div>";
                $LesLogins = $pdo->RecuperationLogin();
                include("vues/v_gererUtilisateur.php");
                break;
            }
            case 'SupprimerUtilisateur' : {
                $LesLogins = $pdo->RecuperationLogin();
                $Utilisateur = $_POST['choixUtilisateur'];
                $affichage = $pdo->SuppressionUtilisateur($Utilisateur);
                echo "<div style='color:red;font-weight:bold;'>";
                echo $affichage."</div>";
                $LesLogins = $pdo->RecuperationLogin();
                include("vues/v_gererUtilisateur.php");
                break;
            }
            case 'ModifierUtilisateur' : {
                $LesLogins = $pdo->RecuperationLogin();
                $Utilisateur = $_POST['choixUtilisateur'];
                $_SESSION['Utilisateur'] = $Utilisateur;
                $pdo->RecupererInfosUtilisateur($Utilisateur);
                include("vues/v_gererUtilisateur.php");
                include("vues/v_modificationUtilisateur.php");
                
                break;
            }
            case 'ValiderModification' : {
                $LesLogins = $pdo->RecuperationLogin();
                $ID = $_SESSION['IdUtilisateur'];
                $Login = $_POST['Login'];
                $Password = $_POST['Mdp'];
                $Nom = $_POST['Nom'];
                $Prenom = $_POST['Prenom'];
                $Adresse = $_POST['Adresse'];
                $Code_Postal = $_POST['CodePostal'];
                $Ville = $_POST['Ville'];
                $DateEmbauche = $_POST['Date'];
                $affichage = $pdo->ModifierUtilisateur($ID,$Login,$Password,$Nom,$Prenom,$Adresse,$Code_Postal,$Ville,$DateEmbauche);
                echo "<div style='color:red;font-weight:bold;'>";
                echo $affichage."</div>";
                $LesLogins = $pdo->RecuperationLogin();
                include("vues/v_gererUtilisateur.php");
                include("vues/v_modificationUtilisateur.php");
                break;
            }
        }
?>

    </div>


