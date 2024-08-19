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