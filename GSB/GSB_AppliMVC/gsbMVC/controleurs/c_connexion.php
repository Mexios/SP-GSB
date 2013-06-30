<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
                $_SESSION['resultatDate'] = "";
                // défini le nombre de jours avant que le mot de passe soit périmé
                $nombreJours = 20;
		$login = $_REQUEST['login'];
                $_SESSION['login'] = $login;
		$mdp = $_REQUEST['mdp'];
                $_SESSION['mdp'] = $mdp;
                $_SESSION['ancienMdp'] = $mdp;
                $_SESSION['Date'] = date('d/m/Y');
                $resultatDate = $_SESSION['Date'] - $_SESSION['AncienneDate'];
                //echo $resultatDate;
                if ($resultatDate <= 0)
                {
                    $_SESSION['resultatDate'] = 'périmé';
                }
                $pdo->RecupererGroupe($login,$mdp);
                $pdo->RecupererDateMdp($login,$mdp);

		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
                echo "<div style='padding-left:170px;color:red;font-weight:bold;'>";
                echo "Bienvenue sur GSB"."</div>";
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['ID'];
			$nom =  $visiteur['NOM'];
			$prenom = $visiteur['PRENOM'];
			connecter($id,$nom,$prenom);
                        if ($_SESSION['resultatDate'] == 'périmé')
                        {
                            include("vues/v_motdepasse.php");
                        }
                        else
                        {
                            include("vues/v_sommaire.php");
                        }
		}
		break;
	}
        case 'changementMdp':{
            $mdp = $_POST['mdp'];
            $login = $_SESSION['login'];
            if (strlen($mdp) < 8)
            {
                $str = "Le mot de passe doit avoir au moins 8 caractères !";
            }
            else
            {
                if(!preg_match('`([-_.,;:\|]+)`', $mdp))
                {
                    $str ="Votre mot de passe doit contenir des caractères spéciaux";
                }
                else
                {
                    // cryptage du mot de passe :
                      // Déclaration des constantes
                        define('PREFIX_SALT', 'visiteur');
                        define('SUFFIX_SALT', 'medical');
                    $hashSecure = md5(PREFIX_SALT.$mdp.SUFFIX_SALT);
                    $pdo->UpdateMotDePasse($login,$hashSecure);
                    $str ="Votre mot de passe a été modifié !";
                    include("vues/v_sommaire.php");
                }
            }
            
            echo $str;
            include("vues/v_motdepasse.php");
           
            break;
        }
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>