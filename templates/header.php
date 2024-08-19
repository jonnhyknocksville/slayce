<?php
?>

<!DOCTYPE html>

<html lang="<?= htmlspecialchars($lang); ?>" <?= $lang === 'ar' ? 'dir="rtl"' : ''; ?>>

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($config['site']['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($config['site']['description']); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers le CSS d'AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Lien vers Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=<?php echo urlencode($config['site']['font_family']); ?>&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./templates/dynamic-styles.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./images/<?php echo htmlspecialchars($config['site']['favicon']); ?>" type="image/png">
</head>

<body style="padding-top:100px">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-5">
        <div class="row col-md-8 mx-auto">
            <a class="navbar-brand" href="?page=home">
                <img src="./images/<?php echo htmlspecialchars($config['site']['logo']); ?>" alt="Logo"
                    style="height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <?php foreach ($config['navigation'] as $navItem): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= isset($navItem['class']) ? htmlspecialchars($navItem['class']) : ""; ?>"
                                href="<?php echo htmlspecialchars($navItem['href']); ?>">
                                <?php echo htmlspecialchars($navItem['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <!-- Menu déroulant pour changer de langue -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="font-size:1rem" class="fas fa-globe"></i>
                            <?php echo htmlspecialchars($config['languages_title']); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <?php foreach ($config['languages'] as $language): ?>
                                <a class="dropdown-item" href="?lang=<?php echo htmlspecialchars($language['code']); ?>">
                                    <img src="./images/languages/<?php echo htmlspecialchars($language['flag']); ?>"
                                        alt="<?php echo htmlspecialchars($language['name']); ?>"
                                        style="width: 20px; height: 20px;">
                                    <?php echo htmlspecialchars($language['name']); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php if (!empty($config['site']['description'])): ?>
        <header class="bg-dark text-white text-center py-5" id="home">
            <div class="container">
                <h1><?php echo htmlspecialchars($config['site']['title']); ?></h1>
                <p><?php echo htmlspecialchars($config['site']['description']); ?></p>
            </div>
        </header>
    <?php endif; ?>