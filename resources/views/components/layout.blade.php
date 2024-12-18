<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uniShare</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="min-h-full">
        <nav class="bg-gray-800 flex items-center justify-between px-4 py-3">
            <!-- Logo a sinistra -->
            <div class="flex items-center">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png')}}" width="170" height="130" alt="uniShare">
                </a>
            </div>

            <div class="flex-1 text-center">
                <h1 class="text-white text-3xl font-bold">Fai fruttare i tuoi appunti!</h1>
            </div>
    
            <!-- Pulsanti a destra -->
            <div class="flex items-center mr-6 space-x-3">
                @guest
                    <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest
    
                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <x-form-button>Log out</x-form-button>
                    </form>
                @endauth
            </div>
        </nav>
    </div>
    

    <!-- HEADER -->
    <header class="flex h-20 items-center justify-between px-10 bg-white shadow">
        <div class="space-x-3">
            <x-tag>Libri</x-tag>
            <x-tag>Appunti</x-tag>
            <x-tag>Esami</x-tag>
        </div>

        <div>
            <x-button href="">Vendi materiale</x-button>
        </div>
    </header>

    <!-- MAIN -->
    <main class="mt-10 max-w-[986px]">
        {{ $slot }}
    </main>
</body>

</html>