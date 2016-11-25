<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title> CMS - Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <?php
            if (!class_exists('lessc')) {
                include ('./libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('less/type-10.less', 'css/type-10.css');
            $less->compileFile('less/banner_home.less', 'css/banner_home.css');
            $less->compileFile('less/type-13.less', 'css/type-13.css');
            $less->compileFile('less/style_mine.less', 'css/style_mine.css');
            $less->compileFile('less/featured-products-title.less', 'css/featured-products-title.css');
            $less->compileFile('less/newsletter.less', 'css/newsletter.css');
            $less->compileFile('less/products-list.less', 'css/products-list.css');
            $less->compileFile('less/recent-post-list.less', 'css/recent-post-list.css');
            $less->compileFile('less/recent-post-title.less', 'css/recent-post-title.css');
            $less->compileFile('less/style-34.less', 'css/style-34.css');
            $less->compileFile('less/footer.less', 'css/footer.css');
        ?>

        <link rel="stylesheet" type="text/css" href="css/type-10.css">
        <link rel="stylesheet" type="text/css" href="css/banner_home.css">
        <link rel="stylesheet" type="text/css" href="css/type-13.css">
        <link rel="stylesheet" type="text/css" href="css/style_mine.css">
        <link rel="stylesheet" type="text/css" href="css/featured-products-title.css">
        <link rel="stylesheet" type="text/css" href="css/newsletter.css">
        <link rel="stylesheet" type="text/css" href="css/products-list.css">
        <link rel="stylesheet" type="text/css" href="css/recent-post-list.css">
        <link rel="stylesheet" type="text/css" href="css/recent-post-title.css">
        <link rel="stylesheet" type="text/css" href="css/style-34.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">

        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.js"></script>
        <script type="text/javascript" src="js/script_mine.js"></script>
        <!-- <script type="text/javascript" src="js/count-down.js"></script> -->
        <script type="text/javascript" src="js/slideshow.js"></script>
        <script type="text/javascript" src="js/script-dropdown.js"></script>
    </head>

    <body>
        <?php include'page/masterpage/header.php'; ?>
        <?php include'page/home/banner.php'; ?>

        <?php include'page/home/featured-products.php'; ?>
        <?php include'page/home/recent-post.php'; ?>
        <?php include'page/home/newsletter.php'; ?>

        <?php include'page/home/productsCarousel.php'; ?>
        <?php include'page/home/banners-carousel.php'; ?>
        <?php include'page/home/instagram-feed.php'; ?>
        <?php include'page/home/manufacturersCarousel.php'; ?>

        <?php include'page/masterpage/footer.php'; ?>
    </body>

</html>