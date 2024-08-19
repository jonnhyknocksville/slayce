    <!-- 2 - Services Section -->
    <section class="section-2 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][1]['href']); ?>" data-aos="fade-up" aria-labelledby="services-title">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center col-md-8 mx-auto">
                    <h2 class="text-center mb-3" id="services-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['services']['title'])); ?></h2>
                    <p class="text-center mb-0"><?php echo nl2br(html_entity_decode($config['pages']['home']['services']['description'])); ?></p>
                </div>
                <div class="row p-5">
                    <?php foreach ($config['pages']['home']['service_cards'] as $service): ?>
                        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100">
                                <img src="./images/services/<?php echo htmlspecialchars($service['image']); ?>" class="card-img-top"
                                    alt="<?php echo htmlspecialchars($service['title']); ?>">
                                <div class="card-body">
                                    <h3 class="text-center card-title"><?php echo nl2br(html_entity_decode($service['title'])); ?></h3>
                                    <p class="card-text small-text"><?php echo nl2br(html_entity_decode($service['description'])); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>