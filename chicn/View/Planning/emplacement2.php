<section class="planning">


    <h1> Nous sommes le : <?php setlocale(LC_TIME, 'fra_fra');
                            echo strftime('%A %d %B %Y') ?><br>
        <br> TRAINER FOOD DISPONIBLE A :
    </h1>

    <table class="plann">
        <?php

        foreach ($listePlanning2 as $Planning2) {
        ?>

            <tr>

                <td class="ligne">-----------------------</td>
                <td class="jour"><?php echo $Planning2->getJour() ?></td>
                <td><?php echo $Planning2->getDetailEmplacement() ?></td>
                <td> <?php echo $Planning2->getCp() ?></td>
                <td><?php echo $Planning2->getVille() ?></td>
                <td><?php echo $Planning2->getHoraires() ?></td><br>


                <?php
                if (isset($_SESSION["utilisateur"])) {
                    $utilisateur = unserialize($_SESSION["utilisateur"]);

                ?>
                    <td> <a href="<?= Config::$baseUrl ?>/planning/modifier2/<?php echo $Planning2->getId(); ?>" class="btn btn-info">Modifier</a></td>
                    <td><a href="<?= Config::$baseUrl ?>/planning/supprimer2/<?php echo $Planning2->getId(); ?>" class="btn btn-danger">Supprimer</a></td>

                <?php } ?>
                <td class="ligne">-----------------------</td>
            </tr>


        <?php } ?>

    </table>

    <?php
    if (isset($_SESSION["utilisateur"])) {
        $utilisateur = unserialize($_SESSION["utilisateur"]);

    ?>
        <a href="<?= Config::$baseUrl ?>/planning/ajouter2/" class="btn btn-info">Ajouter événement<br>"planning impaire"</a>
    <?php } ?>

    <h1>INFORMATIONS ET CHANGEMENTS:</h1>


    <table class="plann2">

        <?php
        foreach ($listePlanningOccaz as $PlanningOccaz) {
        ?>

            <tr>
                <td class="ligne">-----------------------</td>
                <td><i class="fas fa-drumstick-bite"></i></td>
                <p>
                    <?php
                    if ($PlanningOccaz->getJour() == NULL) {
                    } else {
                    ?>
                        <td class="jour">
                            <?php echo $PlanningOccaz->getJour() ?>
                        </td>

                    <?php }
                    ?>
                    <td>
                        <?php echo $PlanningOccaz->getDetailEmplacement() ?>
                    </td>
                    <td>
                        <p>-<?php echo $PlanningOccaz->getCp() ?>-</p>
                    </td>
                    <td>
                        <?php echo $PlanningOccaz->getVille() ?>
                    </td>
                    <td>
                        <?php echo $PlanningOccaz->getHoraires() ?>
                    </td>
                    <td>
                        <?php echo $PlanningOccaz->getInformation() ?>
                    </td>

                    <?php
                    if (isset($_SESSION["utilisateur"])) {
                        $utilisateur = unserialize($_SESSION["utilisateur"]);

                    ?>
                        <td> <a href="<?= Config::$baseUrl ?>/planning/modifier3/<?php echo $PlanningOccaz->getId(); ?>" class="btn btn-info">Modifier</a> </td>
                        <td> <a href="<?= Config::$baseUrl ?>/planning/supprimer/<?php echo $PlanningOccaz->getId(); ?>" class="btn btn-danger">Supprimer</a> </td>
                    <?php } ?>
                    <td class="ligne">-----------------------</td>
            </tr>


        <?php } ?>

    </table>
    <br>
    <?php
    if (isset($_SESSION["utilisateur"])) {
        $utilisateur = unserialize($_SESSION["utilisateur"]);

    ?>
        <a href="<?= Config::$baseUrl ?>/planning/ajouteroccaz/" class="btn btn-info">Ajouter événement<br>"planning occasionnel"</a>

    <?php
    }

    ?>


    </div>



    <a class="H" href="<?= config::$baseUrl ?>"><i class="fas fa-sign-out-alt"></a></i>