<div class="formulaire">


    <form method="POST" enctype="multipart/form_data">
        <div class="form">
            <h1>Produit</h1>
        </div>
        <div>
            <label>Image</label>
            <input value="<?= $image ?>" name="image" type="file" class="form-control" placeholder="Image du produit">
        </div>


        <div>
            <label>Nom</label>
            <input value="<?= $nom ?>" name="nom" type="text" class="form-control" placeholder="Nom du produit">
        </div>

        <div>
            <label>Description</label>
            <textarea name="description" class="form-control" placeholder="Description du produit"><?= $description ?></textarea>
        </div>

        <div>
            <label>Poids Moyen : </label>
            <input value="<?= $poidsMoyen ?>" name="poidsMoyen" type="text" class="form-control" placeholder="Poids moyen">
        </div>

        <div>
            <label>Prix TTC : </label>
            <input value="<?= $prixTTC ?>" name="prixTTC" type="text" class="form-control" placeholder="Prix TTC">
        </div>

        <?php if ($modification) { ?>
            <ul>

            </ul>
        <?php } ?>


        <div class="form">
            <input style="margin-top:20px" type="submit" class="btn btn-success" value="<?php echo $modification ? "Modifier produit" : "Ajouter produit" ?>">
        </div>
    </form>
</div>