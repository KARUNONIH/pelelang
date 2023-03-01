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
<body class="bg-[url('{{ asset('image/g11.jpg') }}')] bg-cover rounded-br-full ">
    <div class="mt-[150px] mx-auto">
    <div class="flex border-b-2 border-gray-800 w-max mx-auto">
        <img src="{{ asset('image/Pelelanggray.png') }}" class="w-[400px]" alt="Flowbite Logo" />
    </div>
    <div class=" text-white text-2xl font-medium mt-6">
        <p class="text-center drop-shadow-lg text-gray-800 shadow-black	font-semibold">Your Auction Website</p>
       <center> <a type="button" href="{{ route('login') }}" class="btn font-bold border-3 border-gray-800 bg-gray-800 hover:bg-gray-600 text-white mt-6 uppercase">Join Now</a></center>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
