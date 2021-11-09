<?php

namespace Controller;

use Config;
use Controller\BaseController;
use Dao\UtilisateurDao;
use Model\Utilisateur;

class UtilisateurController extends BaseController
{

    public function connexion()
    {
        $email = "";

        //si l'utilisateur a validé le formulaire
        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $dao = new UtilisateurDao();
            $utilisateur = $dao->findByEmail($_POST['email']);

            //si l'email existe et que le mot de passe correspond
            if ($utilisateur && password_verify($_POST['motDePasse'], $utilisateur->getMotDePasse())) {
                $_SESSION["utilisateur"] = serialize($utilisateur);
                $this->afficherMessage("Vous êtes connecté");
                $this->redirection();
            } else {
                $this->afficherMessage("mauvais email / mot de passe", "danger");
            }
        }

        $donnees = compact("email");
        $this->afficherVue("connexion", $donnees);
    }

    public function deconnexion()
    {
        session_destroy();
        session_start();
        $this->afficherMessage("Vous êtes deconnecté");
        $this->redirection();
    }
    public function inscription()
    {
        $email = "";
        $admin = "";

        if (isset($_POST["email"])) {

            $admin = isset($_POST['admin']);

            if ($_POST["motDePasse"] == $_POST["confirmeMotDePasse"]) {

                $dao = new UtilisateurDao();

                $dao->ajoutUtilisateur(

                    $_POST['email'],
                    $_POST['motDePasse'],
                    isset($_POST['admin'])
                );
                $this->afficherMessage("Vous êtes bien inscrit, veuillez vous connecter", "success");
                $this->redirection("utilisateur/connexion");
            }
        } else {

            $this->afficherMessage("Les mots de passes sont différents", "danger");
        }

        $donnees = compact('email');

        $this->afficherVue("inscription", $donnees);
    }

    public function supprimer($parametres)
    {
        $id_utilisateur = $parametres[0];

        if (isset($_POST["confirmation"])) {

            $dao = new UtilisateurDao();
            $dao->deleteById($id_utilisateur);
            $this->afficherMessage("Votre profil a bien été supprimée");
            $this->redirection();
        }

        $this->afficherVue("confirmation-suppression");
    }
}
