<form action="./server.php" method="post" class="my-4 flex flex-col gap-4">
    <input id="title" name="title" type="text" placeholder="Album title" required
        class="border rounded-sm bg-zinc-100 p-1 text-black placeholder:text-zinc-600">
    <input id="author" name="author" type="text" placeholder="Author name" required
        class="border rounded-sm bg-zinc-100 p-1 text-black placeholder:text-zinc-600">
    <input id="image-url" name="image-url" type="text" placeholder="Image URL"
        class="border rounded-sm bg-zinc-100 p-1 text-black placeholder:text-zinc-600">
    <input id="year" name="year" type="number" placeholder="Publishing year" min="1000" required
        class="border rounded-sm bg-zinc-100 p-1 text-black placeholder:text-zinc-600">
    <button type="submit" class="py-1 px-4 bg-zinc-900 hover:bg-zinc-950 cursor-pointer rounded-sm">Submit</button>
</form>