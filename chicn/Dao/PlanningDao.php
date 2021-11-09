<?php

namespace Dao;

use Connexion;

use Model\Planning;

class PlanningDao extends BaseDao
{
    public function fetchAll()
    {
        $connexion = new Connexion();

        $resultat = $connexion->query(
            "SELECT id, jour, cp, ville, detail, horaires
                    
             FROM planning
            
             "
        );

        $listePlanning = [];

        foreach ($resultat->fetchAll() as $lignePlanning) {
            $planning = $this->transformeTableauEnObjet($lignePlanning);
            $listePlanning[] = $planning;
        }

        return $listePlanning;
    }
    public function findById($id)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "SELECT * FROM planning WHERE id = ?"
        );

        $requete->execute([$id]);

        $tableauPlanning = $requete->fetch();

        //si un produit a bien cet id
        if ($tableauPlanning) {
            return $this->transformeTableauEnObjet($tableauPlanning);
        } else {
            return false;
        }
    }

    public function modifierPlanning($id, $cp, $ville, $detail, $horaires)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "UPDATE planning
             SET cp = ?, ville =?, detail = ?, horaires = ?
             WHERE id = ?"
        );

        $requete->execute(
            [
                $cp,
                $ville,
                $detail,
                $horaires,
                $id
            ]
        );
    }

    public function ajouter($jour, $cp, $ville, $detail, $horaires, $type_semaine)
    {

        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "INSERT INTO planning (jour, cp, ville,detail, horaires, type_semaine)             
            VALUES (?,?,?,?,?,?)"
        );

        $requete->execute(
            [
                $jour,
                $cp,
                $ville,
                $detail,
                $horaires,
                $type_semaine
            ]
        );
    }
}
