<?php
require_once '../config/db_config.php';
$planets = getPlanets($conn, 4);
?>
<?php include '../includes/header.php'; ?>
<div class="banner">
    <h1>Welcome to Cosmic Discoveries</h1>
    <p>Explore the wonders of the universe...</p>
</div>
<div class="planets">
    <?php foreach ($planets as $planet): ?>
        <div class="planet">
            <img src="<?php echo htmlspecialchars($planet['image_url']); ?>" alt="<?php echo htmlspecialchars($planet['name']); ?>">
        </div>
    <?php endforeach; ?>
</div>
<?php include '../includes/footer.php'; ?>