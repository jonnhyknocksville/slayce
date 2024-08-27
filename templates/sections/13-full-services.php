<section id="<?= str_replace('#', '', $config['navigation'][1]['href']); ?>" class="row py-5 justify-content-center">

    <div class="col-md-8">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <h2 class="section-title">Nos services</h2>
        </div>

        <!-- Services Grid -->
        <div class="row">
            <?php
            $delay = 0;
            foreach ($config['services_details'] as $service): ?>
                <div class="col-md-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="<?= $delay; ?>">
                    <div class="service-box text-left">
                        <div class="icon mb-3">
                            <i class="<?= htmlspecialchars($service['icon']); ?>" style="font-size: 2rem;"></i>
                        </div>
                        <h3><?= htmlspecialchars($service['title']); ?></h3>
                        <p><?= htmlspecialchars($service['text']); ?></p>
                    </div>
                </div>
                <?php $delay += 100; // Augmenter le délai pour chaque service ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>