
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
</head>
<body>
    <h1>Blog Postları</h1>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'blog_db');
    $result = $conn->query("SELECT * FROM blog ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['content']}</p>";
        echo "<small>{$row['created_at']}</small><br>";
        echo "<a href='update_post.php?id={$row['id']}'>Güncelle</a> | ";
        echo "<a href='delete_post.php?id={$row['id']}'>Sil</a><hr>";
    }
    ?>
    <a href="add_post.html">Yeni Blog Ekle</a>
</body>
</html>
