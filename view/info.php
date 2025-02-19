<div class="container">
    <h2>Mes informations</h2>
    
    <?php
        if($message != ""){
            echo "<p>$message</p>";
        }

    ?>

    
    <?php
        if($row["photo"] == ""){
            echo '<img src="img/nopic.png" alt="inconnu" id="nopic">';
        }else{
            //echo stream_get_contents($row["photo"]);
        }


    ?>
    <form method="post" id="formInfo" enctype="multipart/form-data">
        <fieldset>
            <legend>Informations personnelles</legend>
            <input type="text" name="nom" required placeholder="Nom" value="<?= $row["nom"]; ?>">
            <input type="text" name="prenom" required placeholder="Prénom" value="<?= $row["prenom"]; ?>">
            <input type="email" name="email" required placeholder="E-mail" value="<?= $row["email"]; ?>">
            <input type="text" name="telephone" required placeholder="Téléphone" value="<?= $row["telephone"]; ?>">
            <input type="text" name="adresse" required placeholder="Adresse" value="<?= $row["adresse"]; ?>">
            <input type="text" name="d2n" required placeholder="Date de naissance" value="<?= $row["date_naissance"]; ?>">
            <input type="file" name="photo" placeholder="Photo" value="<?= $row["photo"]; ?>">
            <input type="text" name="pseudo" required placeholder="Pseudo" value="<?= $row["pseudo"]; ?>">
        </fieldset>
        <fieldset>
            <legend>Voiture</legend>
            <input type="text" name="modele" placeholder="Modèle de la voiture" value="<?= $row_voiture["modele"]; ?>">
            <input type="text" name="immatriculation" placeholder="Immatriculation" value="<?= $row_voiture["immatriculation"]; ?>">
            <select name="energie">
                <option value="essence" <?= ($row_voiture["energie"]=="essence") ? "selected" : "" ?>>Essence</option>
                <option value="diesel" <?= ($row_voiture["energie"]=="diesel") ? "selected" : "" ?>>Diesel</option>
                <option value="electrique"  <?= ($row_voiture["energie"]=="electrique") ? "selected" : "" ?>>Électrique</option>
            </select>
            <input type="text" name="couleur" placeholder="Couleur" value="<?= $row_voiture["couleur"]; ?>">
            <input type="text" name="date_premiere_immatriculation" placeholder="Date de première immatriculation"value="<?= $row_voiture["date_premiere_immatriculation"]; ?>">
        </fieldset>
        <button type="submit">Sauvegarder</button>
    </form>

</div>