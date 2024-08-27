<section class="section-9 py-5 m-0" id="clients" aria-labelledby=" clients-title">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texte pour les clients à gauche -->

                <!-- Logos des clients à droite -->
                <div class="col-md-7 d-flex justify-content-center flex-wrap" data-aos="fade-left">
                    <?php
                    // Afficher les clients
                    $clients = $config['clients'];
                    $delay = 100; // Réinitialiser le délai d'animation pour les clients
                    foreach ($clients as $client) {
                        echo '<a href="'. htmlspecialchars($client['href']) . '" aria-label="Logo ' . htmlspecialchars($partner['name']) . '" class="client-logo mx-3 my-2" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                        echo '<img src="./images/clients/' . htmlspecialchars($client['logo']) . '" alt="Client ' . htmlspecialchars($client['name']) . '" class="img-fluid">';
                        echo '</a>';
                        $delay += 100; // Incrémenter le délai pour chaque logo
                    }
                    ?>
                </div>

                <div class="col-md-5" data-aos="fade-right">
                    <h2 id="clients-title" class="mb-4"><?= $config['clients_title']; ?></h2>
                    <p>
                        <?= $config['clients_description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>