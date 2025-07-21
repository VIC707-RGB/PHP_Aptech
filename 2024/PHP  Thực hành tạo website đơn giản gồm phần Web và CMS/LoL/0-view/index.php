<?php 
    require_once('../1-controller/indexController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="banner">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/966bd076280419.5c64c20164ef8.jpg" class="img-full-width">
    </div>
    <div class="main">
        <div class="main-title">
            <h1>List of Champion</h1>
        </div>
        <div class="main-list">
            <?php getAllChampions() ?>
        </div>
    </div>
    <div class="footer"></div>
</body>
</html>