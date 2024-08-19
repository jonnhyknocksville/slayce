<?php

    // require_once('./templates/change_image_404.php');

?>
<main class="container-fluid pb-5 px-0">
    <!-- 1 - Slogan Section -->
    <section class="row justify-content-center align-items-center section-1 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" data-aos="fade-in" aria-labelledby="slogan-title">
        <div class="col-md-8">
            <div class="row">
                <div class="d-flex flex-column justify-content-center col-md-6" data-aos="fade-right">
                    <h1 id="slogan-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['slogan'])); ?></h1>
                    <div class="d-flex flex-column justify-content-center">
                        <a style="max-width:200px" href="#services" class="text-center btn-services fw-bold btn my-2" data-aos="zoom-in" aria-label="Lien vers nos services"><?php echo nl2br(html_entity_decode($config['button-services'])); ?></a>
                        <a style="max-width:200px" href="#contact" class="text-center btn-contact fw-bold btn my-2" data-aos="zoom-in" data-aos-delay="100" aria-label="Lien vers la section contactez-nous"><?php echo nl2br(html_entity_decode($config['button-contact'])); ?></a>
                    </div>
                </div>
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <img src="./images/header-page.jpg"
                        class="img-fluid"
                        alt="Image de l'entreprise"
                        aria-hidden="true">
                </div>
            </div>
        </div>
    </section>

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

    <!-- 4 - Approach Section -->
    <section class="section-4 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][3]['href']); ?>" data-aos="fade-up" aria-labelledby="approach-title">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-8 ">
                    <h2 id="approach-title"><?php echo nl2br(html_entity_decode($config['pages']['home']['approach']['title'])); ?></h2>
                    <p class="text-left mb-0"><?php echo nl2br(html_entity_decode($config['pages']['home']['approach']['description'])); ?></p>
                </div>
                
            </div>

            <div class="offset-4 col-md-8 approach my-5" data-aos="fade-left">
            </div>

            <div class="row col-md-8">
                <?php foreach ($config['pages']['home']['approach']['points'] as $point): ?>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <i style="font-size:2rem;" class="mb-5 <?php echo $point['icon']; ?>"></i>
                            <h4 class="text-center fw-bold"><?php echo nl2br(html_entity_decode($point['title'])); ?></h4>
                            <p class="small-text text-center mb-0"><?php echo nl2br(html_entity_decode($point['description'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

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

    <!-- Google Reviews Section -->
    <section class="section-6 py-5 m-0" id="<?= str_replace('#', '', $config['navigation'][5]['href']); ?>" aria-labelledby="google-reviews-title" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-center mb-3" id="google-reviews-title"><?= $config['google_reviews_title']; ?></h2>
                <div class="row">
                    <?php

                    $totalReviews = $config['total_reviews'];
                    $averageRating = $config['average_rating'];

                    $delay = 100; // Délais d'animation initial
                    foreach ($config['reviews'] as $review) {
                        echo '<div class="col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                        echo '<div class="review-card p-3 border rounded">';
                        echo '<h5 class="text-center">' . htmlspecialchars($review['author_name']) . '</h5>';
                        echo '<p class="text-center mall">' . htmlspecialchars($review['relative_time_description']) . '</p>';
                        echo '<div class="rating">' . getStars($review['rating']) . '</div>';
                        // Utilisez htmlspecialchars pour échapper les caractères spéciaux
                        $escapedText = htmlspecialchars($review['text'], ENT_QUOTES, 'UTF-8');

                        // Coupez les 76 premiers caractères du texte échappé
                        $shortText = mb_substr($escapedText, 0, 76);

                        // Si le texte est plus long, ajoutez des points de suspension
                        if (strlen($escapedText) > 76) {
                            $shortText .= '...';
                        }
                        echo '<p class="text-center">' . $shortText . '</p>';
                        echo '</div>';
                        echo '</div>';
                        $delay += 100; // Incrémenter le délai pour chaque avis
                    }
                    
                    // Fonction pour générer les étoiles
                    function getStars($rating) {
                        $fullStar = '<i class="fas fa-star text-warning"></i>';
                        $halfStar = '<i class="fas fa-star-half-alt text-warning"></i>';
                        $emptyStar = '<i class="far fa-star text-warning"></i>';
                        
                        $stars = '';
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $rating) {
                                $stars .= $fullStar;
                            } else if ($i - $rating < 1) {
                                $stars .= $halfStar;
                            } else {
                                $stars .= $emptyStar;
                            }
                        }
                        return $stars;
                    }
                    ?>
                </div>
                <div class="total-reviews mt-4" data-aos="fade-up" data-aos-delay="<?= $delay + 100; ?>">
                    <h4 class="text-center">Avis Totaux : <span><?= $totalReviews ?></span></h4>
                    <div class="rating d-flex justify-content-center align-items-center">
                        <?= getStars($averageRating); ?>
                        <span class="ml-2"><?= $averageRating ?>/5</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
                            echo '<a href="'. htmlspecialchars($partner['href']) . '" class="partner-logo mx-3 my-2" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                            echo '<img src="./images/partners/' . htmlspecialchars($partner['logo']) . '" alt="' . htmlspecialchars($partner['name']) . '" class="img-fluid">';
                            echo '</a>';
                            $delay += 100; // Incrémenter le délai pour chaque logo
                        }
                    }
                    ?>
                </div>
            </div>
            </div>
    </section>

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

    <section class="section-9 py-5 m-0" id="" aria-labelledby=" clients-title">
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
                        echo '<a href="'. htmlspecialchars($client['href']) . '" class="client-logo mx-3 my-2" data-aos="zoom-in" data-aos-delay="' . $delay . '">';
                        echo '<img src="./images/clients/' . htmlspecialchars($client['logo']) . '" alt="' . htmlspecialchars($client['name']) . '" class="img-fluid">';
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

</main>




<!-- 5 - Leaflet Map Section -->
<section id="<?= str_replace('#', '', $config['navigation'][8]['href']); ?>" class="section-5 m-0" style="width: 100vw; margin-left: calc(-50vw + 50%); position: relative;" aria-labelledby="map-title">
    <h2 id="map-title" class="visually-hidden text-center py-5"><?php echo nl2br(html_entity_decode($config['pages']['home']['contact']['header_title'])); ?></h2>
    <div id="map-container" style="height: 400px; width: 100%;"></div>
    <div class="card contact-card position-absolute" data-aos="fade-right">
    <div class="card-body">
        <h2 class="card-title" style="font-size: 1.5rem;"><?php echo nl2br(html_entity_decode($config['pages']['home']['contact']['title'])); ?></h2>
        <p class="card-text small-text"><?php echo nl2br(html_entity_decode($config['pages']['home']['contact']['description'])); ?></p>
        <p class="d-flex align-items-center small-text">
            <span class="bg-icon d-flex align-items-center justify-content-center <?= $lang == 'ar' ? 'ml-3' : 'mr-3' ?>" style="width:40px;height:40px;border:1px solid black;border-radius:50%">
                <i style="font-size:1.5rem" class="fa-solid fa-location-dot m-0"></i>
            </span>
            <span class="small-text m-0"><?php echo nl2br(html_entity_decode($config['pages']['home']['contact']['address'])); ?></span>
        </p>
        <p class="d-flex align-items-center small-text">
            <span class="bg-icon d-flex align-items-center justify-content-center <?= $lang == 'ar' ? 'ml-3' : 'mr-3' ?>" style="width:40px;height:40px;border:1px solid black;border-radius:50%">
                <i style="font-size:1.5rem" class="fa-regular fa-envelope m-0"></i>
            </span>
            <span class=""><?php echo nl2br(html_entity_decode($config['pages']['home']['contact']['email'])); ?></span>
        </p>
        <p class="d-flex align-items-center small-text">
            <span class="bg-icon d-flex align-items-center justify-content-center <?= $lang == 'ar' ? 'ml-3' : 'mr-3' ?>" style="width:40px;height:40px;border:1px solid black;border-radius:50%">
                <i style="font-size:1.5rem" class="fa-brands fa-whatsapp m-0"></i>
            </span>
            <a class="fw-bold" style="text-decoration:none;color:black" href="tel:<?php echo htmlspecialchars($config['pages']['home']['contact']['phone']); ?>"><?php echo htmlspecialchars($config['pages']['home']['contact']['phone']); ?></a>
        </p>
    </div>
</div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map-container').setView([<?php echo $config['pages']['home']['map']['latitude']; ?>, <?php echo $config['pages']['home']['map']['longitude']; ?>], 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([<?php echo $config['pages']['home']['map']['latitude']; ?>, <?php echo $config['pages']['home']['map']['longitude']; ?>]).addTo(map)
                .bindPopup('Nous sommes ici.')
                .openPopup();
        });
    </script>
</section>
