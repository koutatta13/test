<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>テスト</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}"> />
</head>

<body>
    <!-- header -->
    @include('include.header')
    <!-- /header -->

    <!-- top_carousel -->
    @include('include.top.top_carousel')
    <!-- /header -->
    <!-- top_notice -->
    @include('include.top.top_notice')
    <!-- /header -->
</body>

</html>