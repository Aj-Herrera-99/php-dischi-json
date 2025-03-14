<?php
session_start()
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

    <main class="flex">

        <nav class="w-[300px] bg-zinc-800 border-r p-4 relative">
            <div class="fixed w-[250px]">
                <h2 class="text-2xl">Add Album</h2>
                <?php require_once './form.php' ?>
            </div>
        </nav>

        <section class=" grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-fit my-6 mx-auto">
            <?php require_once './cards.php' ?>
        </section>
    </main>

</body>

</html>