<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>@yield('title')</title>
    
</head>
<body>
        <div class="container">
            @yield('content')
        </div>
</body>
</html>
