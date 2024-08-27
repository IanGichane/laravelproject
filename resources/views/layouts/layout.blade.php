<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- styling --}}
    <!-- Include the Alpine library on your page -->
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- header --}}
    <div class=" w-full  bg-slate-500 flex  justify-center text-4xl p-3
    ">
        <header>
            <h2>Task Manager</h2>
          </header>
    </div>


    {{-- Body --}}
    @yield('content')
    {{-- footer --}}

    <div class=" w-full ">
        Footer
    </div>
</body>

</html>
