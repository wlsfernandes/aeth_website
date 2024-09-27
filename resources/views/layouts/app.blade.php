<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AETH')</title> 
    
    <meta name="description" content="@yield('meta-description', 'Default description')"> 
    <meta name="keywords" content="@yield('meta-keywords', 'default, keywords')"> 
    
    @include('partials.header') 
</head>
<body>

    <div class="container">
        @yield('content') 
    </div>

    @include('partials.footer') 
</body>
</html>
