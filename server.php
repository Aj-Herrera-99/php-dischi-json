<?php
session_start();

if (!isset($_SESSION['albums'])) {
    header('Location: ./index.php');
}

$albums = $_SESSION['albums'];
// var_dump($albums);

$title = $_POST['title'];
$author = $_POST['author'];
$image_url = $_POST['image-url'];
$year = $_POST['year'];

$albums[] = [
    "title" => $title,
    "author" => $author,
    "year" => $year,
    "image_url" => $image_url,
];
// var_dump($albums);

$albums_json_updated = json_encode($albums, JSON_PRETTY_PRINT);

file_put_contents('./data.json', $albums_json_updated);

header('Location: ./index.php');