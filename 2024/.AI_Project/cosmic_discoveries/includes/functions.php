<?php
// Hàm lấy dữ liệu hành tinh
function getPlanets($conn, $limit = null) {
    $sql = "SELECT name, image_url FROM planets" . ($limit ? " LIMIT $limit" : "");
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
