```php
<?php
require_once '../config/db_config.php';
require_once '../includes/functions.php';

// Lấy tất cả hành tinh từ bảng planets
$planets = getPlanets($conn);

// Lấy 4 phát hiện mới nhất từ latest_developments
$stmt_dev = $conn->prepare("SELECT title, description FROM latest_developments ORDER BY discovery_date DESC LIMIT 4");
$stmt_dev->execute();
$discoveries = $stmt_dev->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="sidebar">
        <h3>Filters</h3>
        <p>Discovery Date: <button class="filter-btn">1631</button></p>
        <p>Size: <button class="filter-btn">Small</button> <button class="filter-btn">Medium</button> <button class="filter-btn">Large</button> <button class="filter-btn">Very Large</button></p>
        <p>Atmosphere: <input type="text" placeholder="Search Atmosphere"></p>
        <p>Distance from Sun: <input type="text" placeholder="Search Distance"></p>
        <p>Planet Status:
            <button class="filter-btn">Explored</button>
            <button class="filter-btn">Rocky</button>
            <button class="filter-btn">Key Details</button>
            <button class="filter-btn">Gas Giants</button>
            <button class="filter-btn">Terrestrial</button>
            <button class="filter-btn">Dwarf Planets</button>
        </p>
    </div>
    <div class="main-content">
        <div>1-10 of <?php echo count($planets); ?> results</div>
        <select><option>Most Relevant</option></select>
        <?php foreach ($planets as $planet): ?>
            <div class="planet-item">
                <img src="<?php echo htmlspecialchars($planet['image_url']); ?>" alt="<?php echo htmlspecialchars($planet['name']); ?>">
                <div>
                    <h2><?php echo htmlspecialchars($planet['name']); ?></h2>
                    <p>The closest planet to the Sun</p>
                    <span class="rating">★★★★☆</span> <span>Rating: 4.6</span> <span>Reviews: 1,200</span>
                    <p>Rocky Planet | Similar Size to Earth</p>
                    <button class="view-details">View Details</button>
                    <span class="tag">Top Rated</span>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="recent-discoveries">
            <h2>Recent Discoveries</h2>
            <?php foreach ($discoveries as $discovery): ?>
                <div class="discovery-item">
                    <img src="https://via.placeholder.com/100?text=<?php echo urlencode($discovery['title']); ?>">
                    <p><?php echo htmlspecialchars($discovery['title']); ?></p>
                    <p><?php echo htmlspecialchars($discovery['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
```