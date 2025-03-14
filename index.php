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

    <main>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-fit mx-auto my-6">
            <?php
            foreach ($albums as $album) {
                echo "
                <div class=\"rounded-md overflow-hidden bg-[#25282d] w-fit scale-95 hover:scale-100 transition-transform \">
                    <div class=\"max-w-[300px] aspect-[11/12]\">
                        <img width=\"300\" src=\"{$album['image_url']}\" alt=\"album\" class=\"w-full h-full object-cover\">
                    </div>
                    <div class=\"flex flex-col gap-1 p-2 text-center\">
                        <span>{$album['title']}</span>
                        <span>{$album['author']}</span>
                        <span>{$album['year']}</span>
                    </div>
                </div>
                ";
            }
            ?>
        </section>
    </main>

</body>

</html>