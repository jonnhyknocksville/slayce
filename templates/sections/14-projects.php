<div class="container py-5">
    <!-- Section Header -->
    <div class="text-center mb-4">
        <h2 class="section-title">Nos Projets Réalisés</h2>
    </div>

    <!-- Tab Bar -->
    <ul class="nav nav-tabs justify-content-center" id="projectTab" role="tablist">
        <?php foreach ($config["projects"] as $index => $project): ?>
            <li class="nav-item">
                <a class="nav-link <?= $index === 0 ? 'active' : ''; ?>" id="<?= $project['id']; ?>-tab" data-toggle="tab" href="#<?= $project['id']; ?>" role="tab" aria-controls="<?= $project['id']; ?>" aria-selected="<?= $index === 0 ? 'true' : 'false'; ?>">
                    <?= htmlspecialchars($project['title']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content mt-4" id="projectTabContent">
        <?php foreach ($config["projects"] as $index => $project): ?>
            <div class="tab-pane fade <?= $index === 0 ? 'show active' : ''; ?>" id="<?= $project['id']; ?>" role="tabpanel" aria-labelledby="<?= $project['id']; ?>-tab">
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="images/<?= htmlspecialchars($project['image']); ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($project['title']); ?>">
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <h3><?= htmlspecialchars($project['title']); ?></h3>
                        <p><?= htmlspecialchars($project['description']); ?></p>
                        <a href="<?= htmlspecialchars($project['link']); ?>" class="btn btn-primary">Voir le Projet</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>