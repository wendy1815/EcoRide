<div class="container">
    <?php
        if(!empty($depart_secure)){
            echo "<h2>Recherche pour la ville de départ :  <strong class='green'>".$depart_secure."</strong>, et pour ville d'arrivée :<strong class='green'> ".$arrivee_secure. "</strong></h2>";
        }else{
            echo "<h2>Liste des trajets</h2>";
        }
    ?>

    <form method="post" id="form_filtre">
        <span></span>
        <select name="energie" style="display:none;">
            <option value="essence">Essence</option>
            <option value="diesel">Diesel</option>
            <option value="electrique">Électrique</option>
        </select>
        <input type="number" min="1" name="prix_max" placeholder="prix max" >
        <input type="text" name="duree_max" placeholder="duree max" style="display:none;">
        <input type="number" name="note_min" placeholder="note mini"style="display:none;">
        <button type="submit">Chercher</button>
        <input type="hidden" name="filtre" value="filtre">
    </form>

    <?= $output_trajet; ?>
</div>
