@props(['page'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Preview</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

</head>

<body class="antialiased">
    <div class="container p-4 border rounded-lg mx-auto mt-12 h-full">
        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
        <div class="max-w-7xl flex justify-center">
        <div class="ml-4 border rounded-lg p-2 w-1/12 text-center bg-blue-400 text-white hover:bg-blue-500">
            <button class="">
                Save
            </button>
        </div>

    </div>
    </div>
   
</body>

</html>