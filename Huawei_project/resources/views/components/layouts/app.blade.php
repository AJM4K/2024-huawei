<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
    <body class="bg-gray-100">

<div class="flex h-screen">
    <!-- Sidebar Section -->
    @livewire('navbar')    
    <!-- Main Content Section -->
    <main class="flex-1 p-6 overflow-y-auto">
    {{ $slot }}
    </main>
</div>

</body>
    
       
    </body>
</html>
