<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>【沼津高専限定】単位計算webアプリ</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- <meta name="twitter:title" content="回答完了">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://s3.peing.net/t/uploads/item/eye_catch/159089879/c32f717b.jpg">
    <meta name="twitter:image:alt" content="wa">
    <meta name="twitter:description" content="Peing -質問箱-で質問箱を作ってURLをTwitterに掲載しよう！質問箱には誰でも匿名で質問が送れます！">
    <meta name="twitter:url" content="https://peing.net/ja/q/26aaa5ba-8321-4bc6-8280-c418c88a60fc/completed">
    <meta name="twitter:site" content="@peing_net">
    <meta name="twitter:domain" content="peing.net"> -->
    <!-- <meta name="twitter:title" content="沼津高専生限定単位計算webアプリ">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="http://waonn.sakura.ne.jp/calunitfornit/calunitfornitmark.png">
    <meta name="twitter:image:alt" content="沼津高専生限定単位計算webアプリ">
    <meta name="twitter:description" content="沼津高専生限定、単位計算webアプリ">
    <meta name="twitter:url" content="http://waonn.sakura.ne.jp/calunitfornit/"> -->

    <meta name="twitter:card" content="summary" />
    <!-- <meta property="og:title" content="沼津高専生限定単位計算webアプリ" />
    <meta property="og:description" content="沼津高専生限定単位計算webアプリ" />
    <meta property="og:url" content="http://waonn.sakura.ne.jp/calunitfornit/" />
    <meta property="og:image" content="http://waonn.sakura.ne.jp/calunitfornit/calunitfornitmark.png"" /> -->
    <!-- <meta name="twitter:site" content="@peing_net">
    <meta name="twitter:domain" content="peing.net"> -->
    <meta property="og:title" content="沼津高専生限定単位計算webアプリ" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://waonn.sakura.ne.jp/calunitfornit/" />
    <meta property="og:image" content="http://waonn.sakura.ne.jp/calunitfornit/storage/calunitfornitmark.png" />
    <meta property="og:site_name" content="沼津高専生限定単位計算webアプリ" />
    <meta property="og:description" content="高専生が選択単位を選択する時の参考にするツール" />

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