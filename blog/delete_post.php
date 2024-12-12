<?php
$conn = new mysqli('localhost', 'root', '', 'blog_db');
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM blog WHERE id = $id");
    header('Location: index.php');
    exit();
}
?>
