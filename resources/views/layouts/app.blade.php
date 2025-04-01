<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('partials.header')

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
