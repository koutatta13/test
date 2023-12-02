<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>テスト</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="stylesheet" href="/css/index.css" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>
</head>

<body>
    <!-- header -->
    @include('include.header')
    <!-- /header -->
    <div>
        <div class="p-4 text-end">
            <input class="switch_button" data-switch-id="carousel" type="checkbox" data-toggle="switchbutton" checked data-size="lg" checked data-onlabel="PHP_USE" data-offstyle="success" data-offlabel="JS_USE">
        </div>
        <div class="switch_ON">
            <!-- top_carousel -->
            @include('include.top.top_carousel')
            <!-- /header -->
        </div>
        <div class="switch_OFF">
            <!-- top_carousel -->
            @include('include.top.top_carousel')
            <!-- /header -->
        </div>
    </div>

    <!-- top_notice -->
    @include('include.top.top_notice')
    <!-- /header -->
    <!-- commonJS -->
    @include('include.commonJS')
    <!-- /commonJS -->
</body>

</html>