<div class="container" id="page_contact">
    
    <form id="form_contact" method="POST">
        <h2>Contactez nous</h2>
        <?php
            if($error != ""){
                if($error == 0){
                    echo "<p class='green bold'>Votre message est envoyé</p>";
                } else{
                    echo $error;
                }
            }
        ?>
        <input type="text" name="nom" placeholder="nom" required>
        <input type="email" name="mail" placeholder="mail" required>
        <textarea name="message" placeholder="message" required ></textarea>
        <button>envoyer </button>
    </form>

    <address>
        <ul>
            <li><strong>EcoRide SAS</strong></li>
            <li>12 rue des Transports, <br>75010 Paris, France</li>
            <li>Numéro SIRET : 123 456 789 00012</li>
            <li><a href="mailto:contact@ecoride.com">contact@ecoride.com</a></li>
            <li><a href="tel:+33123456789">+33 1 23 45 67 89</a></li>
        </ul>
    </address>
</div>