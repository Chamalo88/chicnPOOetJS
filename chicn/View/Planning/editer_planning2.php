<div class="formulaire">

    <form method="POST" enctype="multipart/form_data">
        <div class="form">
            <h1>Modification</h1>
        </div>
        <div>
            <label>Jour : </label>
            <input value="<?= $jour ?>" style="max-width:300px" name="jour" type="text" class="form-control" placeholder="Jour">
        </div>

        <div>
            <label>Code postal : </label>
            <input value="<?= $cp ?>" style="max-width:300px" name="cp" type="text" class="form-control" placeholder="Code Postal">
        </div>

        <div>
            <label>Ville : </label>
            <input value="<?= $ville ?>" style="max-width:300px" name="ville" type="text" class="form-control" placeholder="Ville">
        </div>

        <div>
            <label>Détail emplacement : </label>
            <input value="<?= $detail_emplacement ?>" style="max-width:300px" name="detail_Emplacement" type="text" class="form-control" placeholder="Détail_emplacement">
        </div>

        <div>
            <label>Horaires : </label>
            <input value="<?= $horaires ?>" style="max-width:300px" name="horaires" type="text" class="form-control" placeholder="Horaires">
        </div>


        <div>
            <label>Information: </label>
            <input value="<?= $information ?>" style="max-width:300px" name="information" type="text" class="form-control" placeholder="information">
        </div>

        <?php if ($modification) { ?>
            <ul>

            </ul>
        <?php } ?>

        <div class="form">

            <input style="margin-top:20px" type="submit" class="btn btn-success" value="<?php echo $modification ? "Modifier planning" : "Ajouter planning" ?>">
        </div>
    </form>
</div>