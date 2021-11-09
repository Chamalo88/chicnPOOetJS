<?php

namespace Dao;

use Connexion;

use Model\Planning;

class PlanningoccazDao extends BaseDao
{
    public function fetchAll()
    {
        $connexion = new Connexion();

        $resultat = $connexion->query(
            "SELECT id, jour, cp, ville, detail_emplacement, horaires, information
                    
             FROM planningoccaz
            
             "
        );

        $listePlanningOccaz = [];

        foreach ($resultat->fetchAll() as $lignePlanningOccaz) {
            $planningOccaz = $this->transformeTableauEnObjet($lignePlanningOccaz);
            $listePlanningOccaz[] = $planningOccaz;
        
        }

        return $listePlanningOccaz;
    }
    public function findById($id)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "SELECT * FROM planningoccaz WHERE id = ?"
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

    public function modifierPlanning($id,$jour, $cp, $ville, $detail_emplacement, $horaires, $information)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "UPDATE planningoccaz
             SET jour= ?, cp = ?, ville =?, detail_emplacement = ?, horaires = ?, information =?
             WHERE id = ?"
        );

        $requete->execute(
            [
                $jour,
        
                $cp, 
                $ville, 
                $detail_emplacement, 
                $horaires,
                $information,
                $id
            ]
        );
    }
    public function ajouter($jour, $cp, $ville, $detail_emplacement, $horaires, $information)
    {

        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "INSERT INTO planningoccaz (jour, cp, ville, detail_emplacement, horaires, information)             
            VALUES (?,?,?,?,?,?)"
        );

        $requete->execute(
            [
                $jour,
                $cp, 
                $ville, 
                $detail_emplacement, 
                $horaires, 
                $information
            ]
        );
    }
}