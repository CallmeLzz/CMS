<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-34.less', 'css/type-34.css');
    ?>
    <link href="css/type-34.css" rel="stylesheet" type="text/css"/>
    <link href="css/add-font.css" rel="stylesheet" type="text/css"/>
    <script language="JavaScript" type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--    <script language="JavaScript" type="text/javascript" src="js/owl.carousel.js"></script>-->
<!--    <script language="JavaScript" type="text/javascript" src="js/count-down.js"></script>-->
<!--    <script language="JavaScript" type="text/javascript" src="js/slideshow.js"></script>-->
    <script language="JavaScript" type="text/javascript" src="js/range-slider.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/script.js"></script>



</head>

<body>
<div class="type-34">
    <div class="container">
        <?php include 'breadcrumb.php' ?>
        <div class="row">
            <div class="col-lg-8 col-sm-9   ">
                <?php include 'banner.php' ?>
                <?php include 'content-sort.php' ?>
                <?php include 'product-list.php' ?>
                <?php include 'page-sort-footer.php' ?>
            </div>
            <div class="col-lg-4 col-sm-3">
                <?php include 'custom-filter.php' ?>
                <?php include 'top-seller.php' ?>
                <?php include 'featured-post.php' ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>