<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136334454-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136334454-1');
    </script>
    <!-- googleアドセンス -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-1525658609073947",
        enable_page_level_ads: true
    });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>【沼津高専限定】卒業までに必要な単位計算webアプリ</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <meta name="twitter:card" content="summary" />
    <meta property="og:title" content="【沼津高専生限定】卒業までに必要な単位計算webアプリ" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://waonn.sakura.ne.jp/calunitfornit/" />
    <meta property="og:image" content="http://waonn.sakura.ne.jp/calunitfornit/storage/calunitfornitmark.png" />
    <meta property="og:site_name" content="【沼津高専生限定】卒業までに必要な単位計算webアプリ" />
    <meta property="og:description" content="沼津高専生が卒業までに必要な単位数を計算します" />

</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <a class="navbar-brand mx-auto text-center" href="http://waonn.sakura.ne.jp/calunitfornit/">【沼津高専限定】<br>卒業までに必要な単位計算webアプリ</a>
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