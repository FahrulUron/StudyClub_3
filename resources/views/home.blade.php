<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Blade</title>
</head>
<body>
    @extends('layout.app')
    @section('title', 'Halaman Latihan Layout : Home')


    @section('content')
    <p>Ini Adalah Halaman</p>
    <p>Selamat Datang!</p>
    @endsection

    @include('component')
</body>
</html>