<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="mx-auto font-poppins">
    <div class="z-10">
        <img src="{{ asset('assets/images/login.jpg') }}" alt="" class="w-screen h-screen">
    </div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-center p-[50px] rounded-lg">
        <img src="{{ asset('assets/images/icon/indicom.svg') }}" alt="" class="h-10 mx-auto justify-center items-center">
        <h1 class="text-primary font-medium">E-ticketing</h1>
        <h1 class="text-primary py-11 font-semibold text-2xl">Log in to your account</h1>
        <div class="flex flex-col gap-4 w-[350px]">
            <input type="text" class="border border-gray-400 outline-none rounded-sm px-4 py-2 font-light text-sm " placeholder="Brand Name">
            <input type="text" class="border border-gray-400 outline-none rounded-sm px-4 py-2 font-light text-sm" placeholder="Password">
            <div class="flex items-center gap-4">
                <span class="checkbox-inner flex items-center justify-center w-4 h-4 text-transparent border border-primary rounded-full"></span>
                <h1 class="text-primary font-light text-sm">Check me out!</h1>
            </div>
            <a href="" class="bg-primary text-white font-medium rounded-lg py-1">Login</a>
        </div>
    </div>
</body>
</html>

        


