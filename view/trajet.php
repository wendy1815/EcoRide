<?php
 $etat= match ($result["statut"]) {
    "ec" => "<span class='green'> Disponible</span>",
    "complet" =>"<span class='red'> Complet</span>" 
};
?>

<div class="container">

    <section>
        <article id="trajet">
            <header>
                <?= $svg_trajet; ?>  
            </header>
            <div>
                <h2><span class="capitalize"><?= $result["lieu_depart"]; ?></span> &#8594; <span class="capitalize"><?= $result["lieu_arrivee"]; ?></span></h2>
                <div id="dispo">
                    <span class="pseudo"><?= $result_U["pseudo"]; ?></span>
                    <span class="statut"><?= $etat; ?></span>
                </div>
                <p id="depart"><strong>Départ : </strong><?= convertDateToFR($result["date_depart"]); ?> à <?= $result["heure_depart"]; ?></p>
                <p id="arrivee"><strong>Arrivée : </strong><?= convertDateToFR($result["date_arrivee"]); ?> à <?= $result["heure_arrivee"]; ?></p>
                <p><?= $result_V["modele"]; ?> (<?= $result_V["couleur"]; ?>), <?= $result_V["energie"]; ?>, Date de première immatriculation : <?= convertDateToFR($result_V["date_premiere_immatriculation"]); ?></p>
            </div>
            <footer>
                <span id="place"><?= $result["nb_place"]; ?> place(s) dispo</span>
                <span id="prix"><?= $result["prix_personne"]; ?>,00 €</span>
                <a href="#" id="reservation">Reservation</a>
                <a href="#" id="start">Démarrer le trajet</a>
                <span></span>
                <a href="index.php?page=avis&id_trajet=<?= $id_secure; ?>">Laissez votre avis</a>
            </footer>
        </article>
        <aside>
            <?= $output_avis; ?>
        </aside>
        <p class="center"><a href="index.php?page=listeTrajets">Retour à la liste des trajets</a></p> 
    </section>
</div>
