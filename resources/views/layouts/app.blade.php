<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('partials.navbar') <!-- Include navbar -->
    <div class="container mx-auto py-4">
        @yield('content') <!-- Tempat konten utama diisi -->
    </div>
    @include('partials.footer') <!-- Include footer -->
</body>
</html>
