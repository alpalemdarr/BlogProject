<?php 
$conn =new mysqli("localhost","root","","blog_db");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $conn->query("INSERT INTO blog (title, content) VALUES ('$title', '$content')");
    header('Location: index.php');
    exit();
}

?>