<footer class="pt-5">
    <div class="container">
        <div class="row">
            <!-- Logo de la société -->
            <a class="col-md-2" href="?page=home">
                <img src="./images/<?php echo htmlspecialchars($config['site']['logo_footer']); ?>" style="height:40px" alt="Logo de la société" class="img-fluid">
            </a>
            <!-- Navigation Links -->
            <div class="col-md-3">
                <h4 class="text-center"><?= $config['navigation_title'] ?></h4>
                <ul class="list-unstyled">
                    <?php foreach ($config['navigation'] as $navItem): ?>
                        <li
                            class="text-center">
                            <a href="<?php echo htmlspecialchars($navItem['href']); ?>">
                                <?php echo htmlspecialchars($navItem['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Legal Links -->
            <div class="col-md-3">
                <h4 class="text-center"><?= $config['pages']['home']['legal_title'] ?></h4>
                <?php if (isset($config['pages']['home']['legal_links']) && is_array($config['pages']['home']['legal_links'])):
                ?>
                    <ul class="list-unstyled">
                        <?php foreach ($config['pages']['home']['legal_links'] as $link): ?>
                            <li class="text-center">
                                <a href="?page=<?= htmlspecialchars($link['page']); ?>">
                                    <?= htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Social Links -->
            <div class="col-md-4">
                <h4 class="text-center"><?= $config['pages']['home']['social_links_title'] ?></h4>
                <ul class="list-unstyled d-flex justify-content-center">
                <?php foreach ($config['pages']['home']['social_links'] as $social) {
                    if (!empty($social['url'])) {
                        echo '<li class="mx-3">';
                        echo '<a href="' . htmlspecialchars($social['url']) . '" class="" target="_blank">';
                        echo '<i class="' . htmlspecialchars($social['icon']) . ' fa-2x"></i>';
                        echo '</a>';
                        echo '</li>';
                    }
                } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- SVG Wave -->
    <div class="wave-container">
        <svg viewBox="0 0 120 28" preserveAspectRatio="none" style="height: 75px; width: 100%;">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:<?php echo htmlspecialchars($config['site']['primary_color']); ?>;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:<?php echo htmlspecialchars($config['site']['secondary_color']); ?>;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:<?php echo htmlspecialchars($config['site']['info_color']); ?>;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path d="M0 0 Q 60 28 120 0 V 28 H 0 V 0" fill="url(#gradient)"></path>
        </svg>
    </div>
    <!-- Footer Bottom -->
    <div class="bottom-bar text-center py-3">
        &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($config['site']['title']); ?>. Tous droits réservés.
    </div>
</footer>

<!-- JS de Bootstrap et jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- JS d'AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="./js/app.js"></script>
<script>
    // Initialisation d'AOS
    AOS.init();

    // Script pour le défilement fluide avec compensation de la barre de navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const offsetPosition = targetElement.offsetTop - 80; // Adjust this value based on your navbar height
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
</body>
</html>
