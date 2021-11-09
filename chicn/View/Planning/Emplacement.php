<section class="planning">


    <h1> Nous sommes le : <?php setlocale(LC_TIME, 'fra_fra');
                            echo strftime('%A %d %B %Y') ?><br>
        <br> TRAINER FOOD DISPONIBLE A :
    </h1>

    <table class="plann">

        <?php
        foreach ($listePlanning as $Planning) {
        ?>

            <div class="emplacements">
                <td class="ligne">-----------</td>
                <td class="jour"><?php echo $Planning->getJour() ?></td>

                <td><?php echo $Planning->getDetail() ?></td>

                <td> <?php echo $Planning->getCp() ?></td>

                <td><?php echo $Planning->getVille() ?></td>

                <td><?php echo $Planning->getHoraires() ?></td><br><br>



                <?php
                if (isset($_SESSION["utilisateur"])) {
                    $utilisateur = unserialize($_SESSION["utilisateur"]);

                ?>
                    <td> <a style="font-size:5px; min-width:40px" href="<?= Config::$baseUrl ?>/planning/modifier/<?php echo $Planning->getId(); ?>" class="btn btn-info">Modifier</a></td>
                    <td><a style="font-size:5px; min-width:40px" href="<?= Config::$baseUrl ?>/planning/supprimer3/<?php echo $Planning->getId(); ?>" class="btn btn-danger">Supprimer</a></td>


                <?php } ?>
                <td class="ligne">-----------</td>
                </tr>

            <?php } ?>
    </table>
    <?php
    if (isset($_SESSION["utilisateur"])) {
        $utilisateur = unserialize($_SESSION["utilisateur"]);

    ?>
        <a href="<?= Config::$baseUrl ?>/planning/ajouter/" class="btn btn-info">Ajouter événement<br>"planning paire"</a>
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