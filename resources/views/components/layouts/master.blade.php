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

    <x-layouts.header />

    <div class="container">
        <main class="row">
            {{$slot}}
        </main>
    </div>

    <x-layouts.footer />

    @vite(['resources/js/app.js'])
</body>
</html>
