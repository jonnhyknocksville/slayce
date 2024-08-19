    <!-- Values Section -->
    <section class="section-8 py-5 m-0" id="values" aria-labelledby="values-title">
        <div class="container text-center">
            <h2 id="values-title" class="text-center mb-5" data-aos="fade-down"><?= $config['values_title']; ?></h2>
            <div class="row justify-content-between">
                <?php

                // Afficher les valeurs
                $values = $config['values'];
                $delay = 100; // Délais d'animation initial
                foreach ($values as $value) {
                    echo '<div class="col-md-2 col-sm-4 mb-4" data-aos="fade-up" data-aos-delay="' . $delay . '">';
                    echo '<div class="value-icon">';
                    echo '<i class="' . htmlspecialchars($value['icon']) . ' fa-3x"></i>';
                    echo '</div>';
                    echo '<h4 class="text-center mt-3">' . htmlspecialchars($value['name']) . '</h4>';
                    echo '</div>';
                    $delay += 100; // Incrémenter le délai pour chaque valeur
                }
                ?>
            </div>
        </div>
    </section>