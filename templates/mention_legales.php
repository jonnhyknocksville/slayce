
<main class="container my-5">
    <div class="text-center mb-4">
        <h1><?php echo htmlspecialchars($config['pages']['mention_legales']['title']); ?></h1>
    </div>
    <div class="content">
        <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['introduction'])); ?></p>

        <!-- 1 - Éditeur du site -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor_title']); ?></h2>
            <p><strong>Nom :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor']['name']); ?></p>
            <p><strong>Adresse :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor']['address']); ?></p>
            <p><strong>Téléphone :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor']['phone']); ?></p>
            <p><strong>Email :</strong> <a
                    href="mailto:<?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor']['email']); ?>"><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['editor']['email']); ?></a>
            </p>
        </div>

        <!-- 2 - Responsable de la publication -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['publication_manager_title']); ?>
            </h2>
            <p><strong>Nom :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['publication_manager']['name']); ?>
            </p>
            <p><strong>Email :</strong> <a
                    href="mailto:<?php echo htmlspecialchars($config['pages']['mention_legales']['content']['publication_manager']['email']); ?>"><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['publication_manager']['email']); ?></a>
            </p>
        </div>

        <!-- 3 - Hébergeur du site -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host_title']); ?></h2>
            <p><strong>Nom :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host']['name']); ?></p>
            <p><strong>Adresse :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host']['address']); ?></p>
            <p><strong>Téléphone :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host']['phone']); ?></p>
            <p><strong>Email :</strong> <a
                    href="mailto:<?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host']['email']); ?>"><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['host']['email']); ?></a>
            </p>
        </div>

        <!-- 4 - Données personnelles -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['personal_data_title']); ?>
            </h2>
            <p><strong>Traitement des données :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['personal_data']['data_treament']); ?>
            </p>
            <p><strong>Droit d'accès :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['personal_data']['access_right']); ?>
            </p>
            <p><strong>DPO :</strong>
                <?php echo htmlspecialchars($config['pages']['mention_legales']['content']['personal_data']['dpo']); ?>
            </p>
        </div>

        <!-- 5 - Cookies -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['cookies_title']); ?></h2>
            <p><a href="?page=politique_cookies">Accéder à notre politique de cookies</a></p>
        </div>

        <!-- 6 - Propriété intellectuelle -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['intellectual_property_title']); ?>
            </h2>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['intellectual_property']['author_right'])); ?>
            </p>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['intellectual_property']['brands'])); ?>
            </p>
        </div>

        <!-- 7 - Limitation de responsabilité -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['responsible_limitation_title']); ?>
            </h2>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['responsible_limitation']['information_exactitude'])); ?>
            </p>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['responsible_limitation']['web_site_utilisation'])); ?>
            </p>
        </div>

        <!-- 8 - Droit applicable -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['applicable_right_title']); ?>
            </h2>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['applicable_right']['info'])); ?>
            </p>
        </div>

        <!-- 9 - Crédits -->
        <div class="my-5">
            <h2><?php echo htmlspecialchars($config['pages']['mention_legales']['content']['credits_title']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($config['pages']['mention_legales']['content']['credits'])); ?></p>
        </div>


    </div>
</main>