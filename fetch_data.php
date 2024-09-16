<?php
include 'config.php';

$sql = "SELECT title, intro, link FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h3>{$row['title']}</h3>";
        echo "<p>{$row['intro']}</p>";
        echo "<a href='{$row['link']}'>اقرأ المزيد</a>";
        echo "</div>";
    }
} else {
    echo "لا توجد مقالات.";
}
$conn->close();
?>
