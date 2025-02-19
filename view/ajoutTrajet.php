<div class="container">
    <h2>Ajouter un trajet</h2>

    <?php
        if($error != ""){
            echo '<p class="red">'.$error.'</p>';
        }
    ?>

    <form method="post" id="ajoutTrajet">
        <input type="date" name="date_depart" placeholder="Date de départ" required>
        <input type="date" name="date_arrivee" placeholder="Date d'arrivée" required>
        <input type="text" name="heure_depart" placeholder="heure de départ" required>
        <input type="text" name="heure_arrivee" placeholder="heure d'arrivée" required>
        <input type="text" name="lieu_depart" placeholder="lieu de départ" required>
        <input type="text" name="lieu_arrivee" placeholder="lieu d'arrivée" required>
        <input type="number" name="nb_place" placeholder="Nombre de place" required>
        <input type="number" name="prix" placeholder="prix" required>
        <button type="submit">Ajouter un trajet</button>
    </form>
    <p class="center"><a href="index.php?page=compte">Retour sur mon compte</a></p>
</div>