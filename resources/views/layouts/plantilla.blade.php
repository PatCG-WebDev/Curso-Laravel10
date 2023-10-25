<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->
    <!-- favicon -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

    <footer></footer>
    <script></script>
</body>
</html>

