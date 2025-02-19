<div class="container" id="forms_login">


    <form method="post" id="inscription">
        <h2>inscription</h2>
        <input type="email" name="mail" id="inscription_mail" placeholder="votre email" required>
        <input type="password" name="password" id="inscription_password" placeholder="mot de passe" required >
        <input type="password" name="confirm" id="inscription_confirm" placeholder="confirmez mot de passe" required>
        <button type="submit">S'inscire</button>
        <input type="hidden" name="type" value="inscription">
        <span class="red"><?= $error; ?></span>
    </form>


    <form method="post" id="connexion">
        <h2>Connexion</h2>
        <input type="email" name="mail" id="connexion_mail" placeholder="votre email" required >
        <input type="password" name="password" id="connexion_password" placeholder="mot de passe" required>
        <button type="submit">Connexion</button>
        <input type="hidden" name="type" value="connexion">
        <span class="red"><?= $error_connexion; ?></span>
    </form>


</div>


