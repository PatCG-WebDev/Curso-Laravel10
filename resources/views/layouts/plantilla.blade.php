<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- favicon -->
    <style></style>
</head>
<body>
    <header></header>
    <nav></nav>
    
   @yield('content')

    <footer></footer>
    <script></script>
</body>
</html>