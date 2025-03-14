<?php
session_start();    // apro sessione

// se albums non esiste in sessione, redirect to index
if (!isset($_SESSION['albums'])) {
    header('Location: ./index.php');
}

$albums = $_SESSION['albums'];  // salvo albums in var
// var_dump($albums);

// dati inviati dal form in POST
$title = $_POST['title'];
$author = $_POST['author'];
$image_url = $_POST['image-url'];
$year = $_POST['year'];

// aggiunta nuovo CD a partire dai dati del form
$albums[] = [
    "title" => $title,
    "author" => $author,
    "year" => $year,
    "image_url" => $image_url,
];
// var_dump($albums);

$albums_json_updated = json_encode($albums, JSON_PRETTY_PRINT); // array to json encoding

file_put_contents('./data.json', $albums_json_updated); // overwriting

header('Location: ./index.php');    // redirect to index