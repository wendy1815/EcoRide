<div class="container">
    <a id="logout" href="index.php?deconnexion=oui">Deconnecté</a>
    <h2>Mon compte</h2>
    <ul id="listeLiensCompte">
        <li><a href="index.php?page=ajoutTrajet">ajouter un trajet</a></li>
        <li><a href="index.php?page=info">mes informations</a></li>
        <li><a href="index.php?page=historique">historique des trajets</a></li>
        <?php
            if($role == "employe" OR $role == "administrateur"){
                echo '<li><a href="index.php?page=validAvis">validation des avis</a></li>';
            }

            if($role == "administrateur"){
                echo '<li><a href="index.php?page=admin">gestions des utilisateurs</a></li>';
            }
        ?>
    </ul>
</div>
