<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scratchy Nib</title>
    {{-- Bootstrap 5.3 & Custom CSS --}}
    @vite(['resources/sass/app.scss'])
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">


</head>
<body>

    <x-users.layouts.header />

    {{$slot}}

    <x-users.layouts.footer />

    @vite(['resources/js/app.js'])
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</body>
</html>
