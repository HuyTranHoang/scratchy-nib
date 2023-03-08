<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scratchy Nib | Admin</title>
    {{-- Bootstrap 5.3 & Admin CSS --}}
    @vite(['resources/sass/admin.scss'])
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    {{-- Js and library --}}
    @vite(['resources/js/admin.js'])

</head>
<body>

@include('sweetalert::alert')

<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap py-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{route('admin.index')}}">Scratchy<b>Nib</b></a>
    <button class="navbar-toggler d-md-none me-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<div class="container-fluid">
    <div class="row">
        <x-admin.layouts.sidebar />

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
           {{$slot}}
        </main>
    </div>
</div>
</body>
</html>
