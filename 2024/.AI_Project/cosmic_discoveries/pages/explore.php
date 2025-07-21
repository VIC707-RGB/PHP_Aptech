```php
<?php
require_once '../config/db_config.php';
require_once '../includes/functions.php';

// Lấy hành tinh nổi bật (Mars, Jupiter) và các hành tinh khác
$stmt_main = $conn->prepare("SELECT name, image_url, discovery_date, size_km, atmosphere FROM planets WHERE name IN ('Mars', 'Jupiter')");
$stmt_main->execute();
$main_planets = $stmt_main->fetchAll(PDO::FETCH_ASSOC);

$stmt_others = $conn->prepare("SELECT name, image_url, discovery_date FROM planets WHERE name NOT IN ('Mars', 'Jupiter') LIMIT 4");
$stmt_others->execute();
$other_planets = $stmt_others->fetchAll(PDO::FETCH_ASSOC);

// Lấy 4 khám phá mới nhất từ latest_developments
$stmt_dev = $conn->prepare("SELECT title, description FROM latest_developments ORDER BY discovery_date DESC LIMIT 4");
$stmt_dev->execute();
$discoveries = $stmt_dev->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include '../includes/header.php'; ?>

<div class="main-content">
    <?php foreach ($main_planets as $planet): ?>
        <div class="planet-item">
            <img src="<?php echo htmlspecialchars($planet['image_url']); ?>" alt="<?php echo htmlspecialchars($planet['name']); ?>">
            <div>
                <h2><?php echo htmlspecialchars($planet['name']); ?></h2>
                <p>The red planet known for its deserts</p>
                <button class="btn">View Details</button>
                <button class="btn">Explore</button>
                <button class="btn">Read now</button>
                <p>7 min read</p>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($other_planets as $planet): ?>
        <div class="sub-planet">
            <img src="<?php echo htmlspecialchars($planet['image_url']); ?>" alt="<?php echo htmlspecialchars($planet['name']); ?>">
            <div>
                <p><?php echo htmlspecialchars($planet['name']); ?> | <?php echo htmlspecialchars($planet['discovery_date']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="cosmos-section">
        <h2>In the COSMOS</h2>
        <img src="https://via.placeholder.com/50?text=Mars" alt="Mars">
        <img src="https://via.placeholder.com/50?text=Jupiter" alt="Jupiter">
        <img src="https://via.placeholder.com/50?text=Saturn" alt="Saturn">
        <img src="https://via.placeholder.com/50?text=Earth" alt="Earth">
        <img src="https://via.placeholder.com/50?text=Venus" alt="Venus">
        <img src="https://via.placeholder.com/50?text=Pluto" alt="Pluto">
        <button class="orange-btn">Explore</button>
    </div>

    <div class="discover-section">
        <h2>More Discover</h2>
        <?php foreach ($discoveries as $discovery): ?>
            <div class="discover-item">
                <img src="https://via.placeholder.com/150?text=<?php echo urlencode($discovery['title']); ?>">
                <p><?php echo htmlspecialchars($discovery['title']); ?></p>
                <p><?php echo htmlspecialchars($discovery['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
```