<?php

namespace Controller;

use Config;
use Controller\BaseController;
use Dao\Planning2Dao;
use Dao\PlanningDao;
use Dao\PlanningoccazDao;
use Model\Planning2;
use Model\Planning;

class PlanningController extends BaseController
{


    public function afficherTout()
    {
        $dao = new PlanningDao();
        $listePlanning = $dao->fetchAll();
        $dao = new Planning2Dao();
        $listePlanning2 = $dao->fetchAll();
        $dao = new PlanningoccazDao();
        $listePlanningOccaz = $dao->fetchAll();

        $donnees = compact('listePlanning', 'listePlanning2', 'listePlanningOccaz',);

        $S = strftime('%W');

        if (($S == 2) || ($S == 4)  || ($S == 6)  || ($S == 8) || ($S == 10) || ($S == 12) || ($S == 14) || ($S == 16) || ($S == 18) || ($S == 20) || ($S == 22) || ($S == 24)
            || ($S == 26) || ($S == 28) || ($S == 30) || ($S == 32) || ($S == 34) || ($S == 36) || ($S == 38) || ($S == 40) || ($S == 42) || ($S == 44) || ($S == 46) || ($S == 48)
            || ($S == 50) || ($S == 52)
        ) {

            $this->afficherVue("emplacement", $donnees);
        } else {

            $this->afficherVue("emplacement2", $donnees);
        }
    }

    public function modifier($parametres)
    {
        $modification = true;
        $id = $parametres[0];
        $cp = "";
        $ville = "";
        $detail = "";
        $horaires = "";


        $daoPlanning = new planningDao();
        if (isset($_POST["cp"])) {

            $daoPlanning->modifierPlanning(
                $id,
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail'],
                $_POST["horaires"]
            );

            $this->afficherMessage("Le planning paire a bien été modifiée");
            $this->redirection("planning/afficherTout");
        }

        $Planning = $daoPlanning->findById($id);
        $cp = $Planning->getCp();
        $ville = $Planning->getVille();
        $detail_emplacement = $Planning->getDetail();
        $horaires = $Planning->getHoraires();

        $listePlanning = $daoPlanning->fetchAll($id);


        $donnees = compact(
            "id",
            "modification",
            "cp",
            "ville",
            "detail",
            "horaires",
            "listePlanning"

        );

        $this->afficherVue("editer_planning", $donnees);
    }


    public function modifier2($parametres)
    {
        $modification = true;
        $id = $parametres[0];
        $cp = "";
        $ville = "";
        $detail_emplacement = "";
        $horaires = "";



        $daoPlanning = new planning2Dao();
        if (isset($_POST["cp"])) {

            $daoPlanning->modifierPlanning(
                $id,
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail_emplacement'],
                $_POST["horaires"]
            );

            $this->afficherMessage("Le planning impaire a bien été modifiée");
            $this->redirection("planning/afficherTout");
        }



        $Planning2 = $daoPlanning->findById($id);
        $cp = $Planning2->getCp();
        $ville = $Planning2->getVille();
        $detail_emplacement = $Planning2->getDetailEmplacement() .
            $horaires = $Planning2->getHoraires();





        $listePlanning = $daoPlanning->fetchAll($id);


        $donnees = compact(
            "id",
            "modification",
            "cp",
            "ville",
            "detail_emplacement",
            "horaires",
            "listePlanning"

        );

        $this->afficherVue("editer_planning", $donnees);
    }

    public function modifier3($parametres)
    {
        $modification = true;
        $id = $parametres[0];
        $jour = "";
        $cp = "";
        $ville = "";
        $detail_emplacement = "";
        $horaires = "";
        $information = "";



        $daoPlanningOccaz = new planningOccazDao();
        if (isset($_POST["cp"])) {

            $daoPlanningOccaz->modifierPlanning(
                $id,
                $_POST['jour'],
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail_emplacement'],
                $_POST["horaires"],
                $_POST['information']
            );

            $this->afficherMessage("Le planning occasionnel a bien été modifiée");
            $this->redirection("planning/afficherTout");
        }


        $PlanningOccaz = $daoPlanningOccaz->findById($id);
        $jour = $PlanningOccaz->getJour();
        $cp = $PlanningOccaz->getCp();
        $ville = $PlanningOccaz->getVille();
        $detail_emplacement = $PlanningOccaz->getDetailEmplacement();
        $horaires = $PlanningOccaz->getHoraires();
        $information = $PlanningOccaz->getInformation();





        $listePlanning = $daoPlanningOccaz->fetchAll($id);


        $donnees = compact(
            "id",
            "modification",
            "jour",
            "cp",
            "ville",
            "detail_emplacement",
            "horaires",
            "information",
            "listePlanning"

        );

        $this->afficherVue("editer_planning2", $donnees);
    }

    public function ajouteroccaz()
    {
        $jour = "";
        $cp = "";
        $ville = "";
        $detail_emplacement = "";
        $horaires = "";
        $information = "";

        if (isset($_POST["cp"])) {

            $dao = new PlanningOccazDao();

            $dao->ajouter(
                $_POST['jour'],
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail_emplacement'],
                $_POST['horaires'],
                $_POST['information']
            );

            $this->afficherMessage("Votre evenement occasionnel a bien été ajoutée", "success");
            $this->redirection("planning/afficherTout");
        }

        $donnees = compact("jour", "cp", "ville", "detail_emplacement", "horaires", "information");
        $this->afficherVue("ajoutemplacement", $donnees);
    }
    public function supprimer2($parametres)
    {
        $id_planning = $parametres[0];

        if (isset($_POST["confirmation"])) {

            $dao = new Planning2Dao();
            $dao->deleteById($id_planning);
            $this->afficherMessage("L'évenement a bien été supprimée");
            $this->redirection("planning/afficherTout");
        }

        $this->afficherVue("confirmation-suppression");
    }




    public function supprimer3($parametres)
    {
        $id = $parametres[0];

        if (isset($_POST["confirmation"])) {

            $dao = new PlanningDao();
            $dao->deleteById($id);
            $this->afficherMessage("L'évenement a bien été supprimée");
            $this->redirection("planning/afficherTout");
        }

        $this->afficherVue("confirmation-suppression");
    }

    public function supprimer($parametres)
    {
        $id = $parametres[0];

        if (isset($_POST["confirmation"])) {

            $dao = new PlanningOccazDao();
            $dao->deleteById($id);
            $this->afficherMessage("L'évenement a bien été supprimée");
            $this->redirection("planning/afficherTout");
        }

        $this->afficherVue("confirmation-suppression");
    }

    public function ajouter()
    {
        $jour = "";
        $cp = "";
        $ville = "";
        $detail_emplacement = "";
        $horaires = "";
        $type_semaine = "";

        if (isset($_POST["cp"])) {

            $dao = new PlanningDao();

            $dao->ajouter(
                $_POST['jour'],
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail_emplacement'],
                $_POST['horaires'],
                $_POST['type_semaine']
            );

            $this->afficherMessage("Votre evenement occasionnel a bien été ajoutée", "success");
            $this->redirection("planning/afficherTout");
        }

        $donnees = compact("jour", "cp", "ville", "detail_emplacement", "horaires", "type_semaine");
        $this->afficherVue("ajoutemplacement1", $donnees);
    }
    public function ajouter2()
    {
        $jour = "";
        $cp = "";
        $ville = "";
        $detail_emplacement = "";
        $horaires = "";
        $type_semaine = "";

        if (isset($_POST["cp"])) {

            $dao = new Planning2Dao();

            $dao->ajouter(
                $_POST['jour'],
                $_POST['cp'],
                $_POST['ville'],
                $_POST['detail_emplacement'],
                $_POST['horaires'],
                $_POST['type_semaine']
            );

            $this->afficherMessage("Votre evenement occasionnel a bien été ajoutée", "success");
            $this->redirection("planning/afficherTout");
        }

        $donnees = compact("jour", "cp", "ville", "detail_emplacement", "horaires", "type_semaine");
        $this->afficherVue("ajoutemplacement1", $donnees);
    }
}
