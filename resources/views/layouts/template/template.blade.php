<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/custom.css')}}">
</head>
<body>
    @include('layouts.components.navbar')

    @yield('content')

    @include('layouts.components.footer')
    
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    
    @yield('scripts')
    
</body>
</html>