<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>テスト</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="stylesheet" href="/css/index.css" />
      <!--   jQueryライブラリ読み込み -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!--  /jQueryライブラリ読み込み -->

  <!--   bootstrapライブラリ読み込み -->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>
  <!--  /bootstrapライブラリ読み込み -->
</head>

<body>
    <!-- header -->
    <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /header -->
    <div>
        <div class="p-4 text-end">
        <input class="switch" data-switch-id="carousel" type="checkbox" data-toggle="switchbutton" checked data-onlabel="<i class='fa'></i> javaScript" data-offlabel="<i class='fa'></i> PHP">

        </div>
        <div id="switch_carousel_ON" style="display:block;">
            <!-- top_carousel -->
            <?php echo $__env->make('include.top.top_carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /header -->
        </div>
        <div id="switch_carousel_OFF" style="display:block;">
            <!-- top_carousel -->
            <?php echo $__env->make('include.top.topphp_carousel',['carouselHTML' => $carouselHTML], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /header -->
        </div>
    </div>

    <!-- top_notice -->
    <?php echo $__env->make('include.top.top_notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /header -->
    <!-- commonJS -->
    <?php echo $__env->make('include.commonJS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /commonJS -->
</body>

</html><?php /**PATH /data/resources/views/top.blade.php ENDPATH**/ ?>