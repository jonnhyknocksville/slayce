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
