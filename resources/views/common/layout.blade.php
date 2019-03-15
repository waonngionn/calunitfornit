<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>【沼津高専限定】単位計算webアプリ</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <a class="navbar-brand mx-auto" href="/">【沼津高専限定】単位計算webアプリ</a>
    </nav>
    <!-- /header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                @yield('bodycontent')
            </div>
            <div class="col-sm"></div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>