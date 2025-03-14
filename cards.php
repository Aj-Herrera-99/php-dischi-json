<?php
$json_text = file_get_contents('./data.json');
$albums = json_decode($json_text, true);

$_SESSION['albums'] = $albums;

foreach ($albums as $album) {
    echo "
        <div class=\"rounded-md overflow-hidden bg-[#25282d] w-fit scale-95 hover:scale-100 transition-transform \">
            <div class=\"max-w-[300px] aspect-[11/12] bg-zinc-700\">
                <img width=\"300\" src=\"{$album['image_url']}\" alt=\"album\" class=\"h-full max-w-full object-contain\">
            </div>
            <div class=\"flex flex-col gap-1 p-2 text-center\">
                <span>{$album['title']}</span>
                <span>{$album['author']}</span>
                <span>{$album['year']}</span>
            </div>
        </div>
        ";
}