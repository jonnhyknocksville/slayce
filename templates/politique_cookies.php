
<main class="container my-5">
    <div class="text-center mb-4">
        <h1><?php echo htmlspecialchars($config['pages']['politique_cookies']['title']); ?></h1>
    </div>
    <div class="content">
        <p><?php echo nl2br(htmlspecialchars($config['pages']['politique_cookies']['content']['introduction'])); ?></p>

        <h2><?php echo htmlspecialchars($config['pages']['politique_cookies']['content']['section_1_title']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($config['pages']['politique_cookies']['content']['section_1'])); ?></p>

        <h2><?php echo htmlspecialchars($config['pages']['politique_cookies']['content']['section_2_title']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($config['pages']['politique_cookies']['content']['section_2'])); ?></p>

        <h2><?php echo htmlspecialchars($config['pages']['politique_cookies']['content']['section_3_title']); ?></h2>
        <p><?php echo nl2br(htmlspecialchars($config['pages']['politique_cookies']['content']['section_3'])); ?></p>
    </div>
</main>
