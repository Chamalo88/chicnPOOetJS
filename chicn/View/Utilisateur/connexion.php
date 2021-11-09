<div class="formulaire">



    <form method="POST">
        <div class="form">
            <h1>CONNEXION</h2>
        </div>
        <div>
            <label>Email :</label><br>
            <input value="<?= $email ?>" name="email" type="text" class="form-control" placeholder="Email">
        </div>

        <div>
            <label>Mot de passe :</label><br>
            <input name="motDePasse" type="password" class="form-control" placeholder="Mot de passe">
        </div>
        <div class="logvalid">
            <input type="submit" class="btn btn-info" value="CONNEXION">
        </div>
    </form>