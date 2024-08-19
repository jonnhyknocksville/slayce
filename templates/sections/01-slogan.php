    <!-- 1 - Slogan Section -->
    <section class="row justify-content-center align-items-center section-1 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" data-aos="fade-in" aria-labelledby="slogan-title">
        <div class="col-md-8">
            <div class="row">
                <div class="d-flex flex-column justify-content-center col-md-6" data-aos="fade-right">
                    <h1 id="slogan-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['slogan'])); ?></h1>
                    <div class="d-flex flex-column justify-content-center">
                        <a style="max-width:200px" aria-label="<?php echo nl2br(html_entity_decode($config['button-services-aria-label'])); ?>" href="#services" class="text-center btn-services fw-bold btn my-2" data-aos="zoom-in"><?php echo nl2br(html_entity_decode($config['button-services'])); ?></a>
                        <a style="max-width:200px" aria-label="<?php echo nl2br(html_entity_decode($config['button-contact-aria-label'])); ?>" href="#contact" class="text-center btn-contact fw-bold btn my-2" data-aos="zoom-in" data-aos-delay="100"><?php echo nl2br(html_entity_decode($config['button-contact'])); ?></a>
                    </div>
                </div>
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <img src="./images/<?php echo nl2br(html_entity_decode($config['site']['header-page'])); ?>"
                        class="img-fluid"
                        alt="<?php echo nl2br(html_entity_decode($config['site']['header-page-alt'])); ?>"
                        aria-hidden="true">
                </div>
            </div>
        </div>
    </section>