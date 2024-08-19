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

    <?php
        require_once __DIR__ . '/nav.php';
    ?>

    <?php if (!empty($config['site']['description'])): ?>
        <header class="bg-dark text-white text-center py-5" id="home">
            <div class="container">
                <h1><?php echo htmlspecialchars($config['site']['title']); ?></h1>
                <p><?php echo htmlspecialchars($config['site']['description']); ?></p>
            </div>
        </header>
    <?php endif; ?>