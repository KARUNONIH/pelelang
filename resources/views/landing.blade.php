<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css"  rel="stylesheet" />

</head>
<body class="bg-[url('{{ asset('image/g6.jpg') }}')] w-100% h-100% bg-cover rounded-br-full ">
    <div class="flex ml-[190px] mt-[60px] border-b-2 border-white w-max">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9 mt-4" alt="Flowbite Logo" />
        <h1 class="text-white text-6xl font-bold  pr-10 pb-2 uppercase">pelelang</h1>
    </div>
    <div class=" text-white text-2xl font-medium mt-6">
        <p class="ml-[210px] w-[510px] drop-shadow-lg shadow-black	">Lorem ipsum dolor sit amet consectetur.</p>
        <p class="ml-[230px] w-[480px] drop-shadow-lg shadow-black">Lorem ipsum dolor sit amet, consectetur </p>
        <p class="ml-[240px] w-[460px] drop-shadow-lg shadow-black">Lorem ipsum dolor sit amet, consectetur </p>
        <p class="ml-[250px] w-[500px] drop-shadow-lg shadow-black">Lorem ipsum dolor sit amet, consectetur </p>
        <p class="ml-[260px] w-[500px] drop-shadow-lg shadow-black">Lorem ipsum dolor sit amet, consectetur </p>
        <a type="button" href="{{ route('login') }}" class="btn btn-outline-success ml-[260px] font-bold border-3 border-green-600 text-white mt-6">Join Now</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
