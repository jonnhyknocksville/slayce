<div id="<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" class="carousel slide py-5" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <?php
        // Générer les items du carrousel dynamiquement
        $first = true;
        foreach ($config['caroussel'] as $item) {
            ?>
            <div class="carousel-item <?php if ($first) { echo 'active'; $first = false; } ?>">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1><?php echo nl2br(html_entity_decode($item['title'])); ?></h1>
                        <p><?php echo nl2br(html_entity_decode($item['text'])); ?></p>
                        <a href="#about" class="btn btn-primary"><?php echo htmlspecialchars($item['button_1']); ?></a>
                        <a href="#contact" class="btn btn-secondary ml-2"><?php echo htmlspecialchars($item['button_2']); ?></a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" role="button" data-slide="prev">
        <!-- SVG inline for the Previous icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#<?= str_replace('#', '', $config['navigation'][0]['href']); ?>" role="button" data-slide="next">
        <!-- SVG inline for the Next icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
        <span class="sr-only">Next</span>
    </a>
</div>