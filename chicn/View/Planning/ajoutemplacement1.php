<div class="formulaire">

    <form method="POST" enctype="multipart/form_data">
        <div class="form">
            <h2>Ajouter un<br>évenement</h2>
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
            <input value="<?= $detail_emplacement ?>" style="max-width:300px" name="detail_emplacement" type="text" class="form-control" placeholder="Détail_emplacement">
        </div>

        <div>
            <label>Horaires : </label>
            <input value="<?= $horaires ?>" style="max-width:300px" name="horaires" type="text" class="form-control" placeholder="Horaires">
        </div>
        <div>
            <label>Type de semaine </label>
            <input value="<?= $type_semaine ?>" style="max-width:300px" name="type_semaine" type="text" class="form-control" placeholder="type_semaine">
        </div>


        <div class="form">
            <input style="margin-top:20px" type="submit" class="btn btn-success" value="Ajouter au planning" ?>">
        </div>
    </form>