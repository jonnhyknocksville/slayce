    <!-- 3 - Profiles Section -->
    <section class="section-3 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][2]['href']); ?>" data-aos="flip-left" aria-labelledby="profiles-title">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="text-center mb-3" id="profiles-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['profiles']['title'])); ?></h2>
                    <p class="text-center mb-0"><?php echo nl2br(html_entity_decode($config['pages']['home']['profiles']['description'])); ?></p>
                </div>
                <div class="row mt-3">
                    <?php foreach ($config['pages']['home']['profiles']['members'] as $profile): ?>
                        <div class="col-md-4 mb-3" data-aos="flip-left" data-aos-delay="100">
                            <div class="text-center h-100 p-3 card-profile">
                                <img src="./images/members/<?php echo htmlspecialchars($profile['photo']); ?>.jpg"
                                    class="rounded-circle mx-auto mt-3 profile-img"
                                    alt="Photo de <?php echo htmlspecialchars($profile['name']); ?>">
                                <div class="mt-3">
                                    <h5 class="text-center font-weight-bold"><?php echo nl2br(html_entity_decode($profile['name'])); ?></h5>
                                    <p class="small-text text-center"><?php echo nl2br(html_entity_decode($profile['description'])); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>