    <!-- Technologies Section -->
    <section class="section-5 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][4]['href']); ?>" data-aos="fade-up" aria-labelledby="technologies-title">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-center mb-3" id="technologies-title"><?= $config['technologies_title']; ?></h2>
                <p class="text-center mb-5"><?= $config['technologies_description']; ?></p>
                <div class="row">
                    <?php 
                    $delay = 100; // Délais d'animation initial
                    foreach ($config['technologies'] as $techno): ?>
                        <div class="my-3 d-flex flex-column justify-content-between col-6 col-md-4 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="<?= $delay; ?>">
                            <div class="tech-container mb-3">
                                <img src="./images/technologies/<?= htmlspecialchars($techno['src']); ?>" alt="<?= htmlspecialchars($techno['label']); ?>" class="w-50">
                            </div>
                            <h4 class="text-center mt-2"><?= htmlspecialchars($techno['label']); ?></h4>
                        </div>
                    <?php 
                    $delay += 100; // Incrément du délai pour chaque technologie
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>