<div class="container">
    <h2>Laissez un avis pour le trajet : <?= $nom_trajet; ?> </h2>*
    
    <form method="post" id="form_avis">
        <textarea name="commentaire" placeholder="laissez votre commentaire" required></textarea>
        <input type="number" name="note" placeholder="note entre 1 et 5" required min="1" max="5">
        <select name="statut">
            <option value="reserve">Trajet reservé</option>
            <option value="termine">Trajet terminé</option>
        </select>
        <button type="submit">Laissez votre avis</button>
        <input type="hidden" name="id_trajet" value="<?= $id_trajet_secure; ?>">
    </form>
</div>