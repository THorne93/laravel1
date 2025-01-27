<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>

<body>
    {{-- <x-alert colortext="red" colorbg="yellow">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">PHP ES</span> MUY.... INTERESANTE?</h1>
        <x-slot name="texto">
            <p>esto es un ejemplo de slot con nombre</p>
        </x-slot>
    </x-alert> --}}

    <?php
    $color = 'red';
    $tipoalerta = 'alert';
    ?>
    <x-alert :colortext="$color" colorbg="yellow" class="text-green-600">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span
                class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">CERV</span>EZAS</h1>
        <x-slot name="texto">
            <p>esto es un ejemplo de slot con nombre</p>
        </x-slot>
    </x-alert>
    <x-alert2 colorbg="red">WHAT THE FUCK
        <x-slot name="entrada1">This is the first element</x-slot>
        <x-slot name="entrada2">This is the second, I need a drink</x-slot>
        <x-slot name="entrada3">He Hee</x-slot>
    </x-alert2>
    <x-alert2 />

    <x-dynamic-component :component="$tipoalerta">
        CUIDADO!
        <x-slot name="texto">
            <p>I need a coffee</p>
        </x-slot>

    </x-dynamic-component>

</body>

</html>
