<section class="container py-5" id="devis">
    <div class="text-center mb-4" data-aos="fade-up">
        <h2 class="section-title">Demandez un devis</h2>
    </div>

    <form action="../send_quote.php" method="POST" data-aos="fade-left">
        <div class="form-group" data-aos="fade-right" data-aos-delay="100">
            <label for="name">Nom complet</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom complet" required>
        </div>
        <div class="form-group" data-aos="fade-right" data-aos-delay="200">
            <label for="email">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required>
        </div>
        <div class="form-group" data-aos="fade-right" data-aos-delay="300">
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone" required>
        </div>
        <div class="form-group" data-aos="fade-right" data-aos-delay="400">
            <label for="service">Service souhaité</label>
            <select class="form-control" id="service" name="service" required>
                <option value="" disabled selected>Choisissez un service</option>
                <option>Développement Web</option>
                <option>Application Mobile</option>
                <option>SEO</option>
                <option>Maintenance</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-group" data-aos="fade-right" data-aos-delay="500">
            <label for="message">Détails supplémentaires</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Décrivez votre projet ou demande" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block" data-aos="fade-up" data-aos-delay="600">Envoyer la demande</button>
    </form>
</section>