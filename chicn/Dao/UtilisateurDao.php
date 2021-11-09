<?php

namespace Dao;

use Connexion;

class UtilisateurDao extends BaseDao
{

    public function ajoutUtilisateur( $email,$motDePasse, $admin)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "INSERT INTO utilisateur ( email, motDepasse, admin )
             VALUES (?,?,?)"
        );

        $requete->execute(
            [
               
                $email,
                password_hash($motDePasse, PASSWORD_BCRYPT),
                $admin==0
            ]
        );
    }

    public function findByEmail($email)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "SELECT * FROM utilisateur WHERE email = ?"
        );

        $requete->execute([$email]);

        $tableauUtilisateur = $requete->fetch();

        //si un utilisateur a bien cet email
        if ($tableauUtilisateur) {
            return $this->transformeTableauEnObjet($tableauUtilisateur);
        } else {
            return false;
        }
    }
    
    public function findById($id)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "SELECT * FROM utilisateur WHERE id= ?"
        );

        $requete->execute([$id]);

        $tableauUtilisateur = $requete->fetch();

        //si un utilisateur a bien cet email
        if ($tableauUtilisateur) {
            return $this->transformeTableauEnObjet($tableauUtilisateur);
        } else {
            return false;
        }
    }

   
}
