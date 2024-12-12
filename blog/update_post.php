<?php
$conn = new mysqli('localhost', 'root', '', 'blog_db');
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM blog WHERE id = $id");
    $post = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("UPDATE blog SET title = '$title', content = '$content' WHERE id = $id");
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Güncelle</title>
</head>
<body>
    <h1>Blog Postunu Güncelle</h1>
    <form action="update_post.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <input type="text" name="title" value="<?php echo $post['title']; ?>" required>
        <textarea name="content" required><?php echo $post['content']; ?></textarea>
        <button type="submit">Güncelle</button>
    </form>
</body>
</html>