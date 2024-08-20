<?php
header("Content-Type: text/css");

// Inclure le fichier de gestion de la langue
include(__DIR__ . '/../gestion_lang.php');

?>


{# 

    RESET CSS
    
#}


html, body {
    overflow-x: hidden;
    font-family: '<?php echo explode(':', $config['site']['font_family'])[0]; ?>', sans-serif;
    background-color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
    margin: 0;
    padding: 0;
}

/* Condition pour la langue arabe */

<?php if ($lang === 'ar'): ?>

p, a, li, h1, h2, h3, h4, h5, h6 {
    text-align: right !important;
}

.text-left {
    text-align : right !important;
}

footer ul {
    padding:0;
    margin:0;
}


<?php endif; ?>

p {
    font-size:1.5rem;
    color: <?php echo htmlspecialchars($config['site']['text_color']); ?>;

}

h1 {
    font-size:70px;
    font-weight:bold;
}

h1, h2, h3, h4, h5, h6 {
    color: <?php echo htmlspecialchars($config['site']['title_color']); ?>;
    font-weight:bold;
}


i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: <?php echo htmlspecialchars($config['site']['ternary_color']); ?>;
    transition: transform 0.3s ease-in-out;
}


{# 

    NAVIGATION
    
#}

nav {
    background-color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.fixed-top {
    z-index:999999;
}

.navbar-dark .navbar-nav .nav-link {
    color: <?php echo htmlspecialchars($config['site']['text_color']); ?> !important;
}

.navbar-dark .navbar-nav .nav-link.active {
    font-weight:bold;
}

.navbar-dark .navbar-nav .nav-link.contact {
    border: 1px solid <?php echo htmlspecialchars($config['site']['text_color']); ?>;
    border-radius: 5px;
    background: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
    color: black;
    font-weight:bold;
}


{# 

    Services Section
    
#}


.card-img-top {
    min-height:230px;
}

.section-5 {
    width: 100%;
    overflow: hidden;
}

{# 

    NOS PROFILS
    
#}

.card-profile {
    padding: 20px;
    text-align: center;
    background-color: transparent; /* Remove background */
}

.card-profile img {
    border-radius: 50%;
    width: 120px;
    height: 120px;
}

.card-profile h5, .card-profile p {
    margin-top: 10px;
}


{# 

    SECTION CONTACT
    
#}

#map-container {
    width: 100%;
    height: 400px;
}

#contact {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    position: relative;
}

.contact-card {
    background-color: white;
    border: 10px solid <?php echo htmlspecialchars($config['site']['ternary_color']); ?>;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    z-index: 10;
    top: 60px; right: 20px; width: 300px; z-index: 9999;
}

.contact-card .card-body {
    padding: 20px; /* Ajustez le padding selon vos besoins */
}

.bg-icon {
    background: <?php echo htmlspecialchars($config['site']['ternary_color']); ?>;
}

.bg-icon i {

    color: <?php echo htmlspecialchars($config['site']['primary_color']); ?>;

}


{#
    

    SECTION REVIEWS
    
#}

.review-card {
    background-color: #f9f9f9;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.rating i {
    margin-right: 5px;
}

.total-reviews h4 {
    margin-top: 1rem;
    font-weight: bold;
}

.total-reviews .rating {
    font-size: 1.5rem;
    color: #ffc107; /* Couleur des étoiles */
    display: flex;
    align-items: center;
}

.total-reviews .rating span {
    font-size: 1.25rem;
    margin-left: 10px;
    color: #34303B;
}


{#
    
    SECTION PARTENAIRE

    
#}

.partner-logo, .client-logo {
    flex: 1 1 30%; /* Largeur flexible pour les logos */
    max-width: 150px; /* Largeur maximale des logos */
    transition: transform 0.3s ease-in-out;
}

.partner-logo img, .client-logo img {
    max-width: 100%; /* S'assure que l'image ne dépasse pas du conteneur */
    height: auto;
    display: block;
    margin: 0 auto;
}

.partner-logo:hover, .client-logo:hover {
    transform: scale(1.1); /* Effet de zoom au survol */
}



{# 

    FOOTER

#}

footer {
    background: <?php echo htmlspecialchars($config['site']['ternary_color']); ?>;
}

footer h4 {
    color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
}

footer .bottom-bar {
    background: <?php echo htmlspecialchars($config['site']['ternary_color']); ?>;
}

.wave-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.wave-container svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 75px;
}

footer i {
    color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
    font-size:1rem;
}

footer a {
    text-decoration:none;
    color: <?php echo htmlspecialchars($config['site']['primary_color']) ?>;
}


{# 

    BUTTONS
    
#}


.btn-services {
    background-color: <?php echo htmlspecialchars($config['site']['error_color']); ?> !important;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?> !important;
}

.btn-contact {
    background-color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?> !important;
    border:1px solid <?php echo htmlspecialchars($config['site']['text_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['text_color']); ?> !important;

}


{# 
    
    GESTION DES SECTIONS

#}

.section-1 {
    background-color: <?php echo htmlspecialchars($config['site']['primary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.section-2 {
    background-color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}


.section-3 {
    background-color: <?php echo htmlspecialchars($config['site']['primary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.section-4 {
    background-color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.section-5 {
    background-color: <?php echo htmlspecialchars($config['site']['primary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.section-6 {
    background-color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
    color: <?php echo htmlspecialchars($config['site']['bg_body_color']); ?>;
}

.section-8 {
    background-color: <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
}

.rounded-circle {
    border: 8px solid <?php echo htmlspecialchars($config['site']['secondary_color']); ?>;
}

{# 

    NOTRE APPROCHE

#}

.approach {
    height:300px;
    background:url('../images/approach.jpg') no-repeat;
    background-size: 100%;
    background-position: center;
    border-radius:10px;
}


{# 

    NOS VALEURS

#}

#values .col-md-2:hover .value-icon {
    transform: scale(1.2); /* Effet de zoom au survol */
}




{# 
 
    COMMON CLASSES
    
#}

.fw-bold {
    font-weight: 900;
}

.small-text {
    font-size:1rem !important;

}  

{#
    caroussel
#}

.carousel-item {
    min-height: 290px !important; /* Hauteur fixe du carrousel */
}

.carousel-item > div {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}