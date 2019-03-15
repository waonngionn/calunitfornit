<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>【沼津高専限定】単位計算webアプリ</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <meta name="twitter:card" content="summary" />
    <meta property="og:title" content="【沼津高専生限定】単位計算webアプリ" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://waonn.sakura.ne.jp/calunitfornit/" />
    <meta property="og:image" content="http://waonn.sakura.ne.jp/calunitfornit/storage/calunitfornitmark.png" />
    <meta property="og:site_name" content="沼津高専生限定単位計算webアプリ" />
    <meta property="og:description" content="沼津高専生が卒業までに必要な単位数を計算します" />

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
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>