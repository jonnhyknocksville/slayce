<!-- Partners and Clients Section -->
<section class="section-7 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][6]['href']); ?>" aria-labelledby="partners-title">
        <div class="container">
            <div class="row align-items-center mb-5">
                <!-- Texte pour les partenaires à gauche -->
                <div class="col-md-5" data-aos="fade-right">
                    <h2 id="partners-title" class="mb-4"><?= $config['partners_title']; ?></h2>
                    <p>
                        <?= $config['partners_description']; ?>
                    </p>
                </div>
                <!-- Logos des partenaires à droite -->
                <div class="col-md-7 d-flex justify-content-center flex-wrap" data-aos="fade-left">
                    <?php

                    // Afficher les partenaires
                    $partners = $config['partners'];
                    $delay = 100; // Délais d'animation initial pour les partenaires
                    foreach ($partners as $partner) {
                        if(!empty($partner['logo'])) {
                            echo '<a href="'. htmlspecialchars($partner['href']) . '" aria-label="Partenaire ' . htmlspecialchars($partner['name']) . '" class="partner-logo mx-3 my-2" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                            echo '<img src="./images/partners/' . htmlspecialchars($partner['logo']) . '" alt="Logo ' . htmlspecialchars($partner['name']) . '" class="img-fluid">';
                            echo '</a>';
                            $delay += 100; // Incrémenter le délai pour chaque logo
                        }
                    }
                    ?>
                </div>
            </div>
            </div>
    </section>