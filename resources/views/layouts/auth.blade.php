<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CanteenXpress')</title>
    @vite('resources/css/app.css') <!-- Ensure Vite is properly set up -->
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <!-- The content section is displayed dynamically, with a fallback -->
    @yield('content','404 not')
    <!-- Footer section -->
</body>
</html>
