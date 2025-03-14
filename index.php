<?php
$json_text = file_get_contents('./data.json');
$albums = json_decode($json_text, true);
// var_dump($albums);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <title>My CDs List</title>
</head>

<body class="min-h-screen text-white bg-[#2a2d33]">
    <header class="bg-[#25282d] p-2">
        <h1 class="text-center text-4xl">My CDs List</h1>
    </header>

    <main></main>

</body>

</html>