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
            <div class="py-5 flex justify-between items-center">
                <div class="logo flex">
                    <h1 class="text-2xl font-semibold"><a href="{{ route('landingpage') }}">Basic auth template</a></h1>
                </div>
                <ul class="flex items-center">
                    @auth
                    
                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="text-lg font-medium bg-orangee px-3 py-2 rounded-md">Log out</button>
                    </form>

                    @else

                    <li class="pl-5 text-lg font-medium"><a href="{{ route('register') }}" class="bg-orangee px-3 py-2 rounded-md">Register</a></li>
                    <li class="pl-5 text-lg font-medium"><a href="{{ route('login') }}" class="bg-orangee px-3 py-2 rounded-md">Log In</a></li>

                    @endauth
                </ul>
            </div>
        </div>
    </header>  

    @yield('content')
</body>
</html>