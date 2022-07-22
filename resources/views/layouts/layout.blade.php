<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body  class="bg-lesle text-white font-pop">

    <header class="border-b border-gray-500">
        <div class="container mx-auto w-cont1">
            <div class="flex justify-between">
                <div class="logo flex">
                    <h1 class="p-5 text-2xl font-semibold">Basic auth template</h1>
                </div>
                <ul class="flex ">
                    <li class="p-5 text-lg font-medium"><a href="" class="bg-orangee px-3 py-2 rounded-md">Log In</a></li>
                    <li class="p-5 text-lg font-medium"><a href="" class="bg-orangee px-3 py-2 rounded-md">Log out</a></li>
                </ul>
            </div>
        </div>
    </header>  

    @yield('content')
</body>
</html>