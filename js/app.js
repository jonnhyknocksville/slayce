document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez tous les éléments de navigation
    const navLinks = document.querySelectorAll('.nav-link');

    // Fonction pour détecter la section active
    function setActiveSection() {
        let currentActive = '';
        navLinks.forEach(link => {
            const sectionId = link.getAttribute('href').replace('#', '');
            const section = document.getElementById(sectionId);

            if (section) {
                const sectionTop = section.offsetTop - 150; // Ajustez la valeur de l'offset si nécessaire
                const sectionBottom = sectionTop + section.offsetHeight;

                if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
                    currentActive = sectionId;
                }
            }
        });

        // Mettez à jour la classe active
        navLinks.forEach(link => {
            if (link.getAttribute('href').replace('#', '') === currentActive) {
                if(link.getAttribute('id') !== 'languageDropdown') {
                    link.classList.add('active');
                }
                    
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Détecte la section active au défilement
    window.addEventListener('scroll', setActiveSection);

    // Détecte la section active au chargement initial
    setActiveSection();
});
