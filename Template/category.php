<!DOCTYPE html>
<html>
<head>
	<title> CMS - Category </title>
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
	    $less->compileFile('less/type-10.less', 'css/type-10.css');
	    $less->compileFile('less/mega_menu.less', 'css/mega_menu.css');
	    $less->compileFile('less/type-34.less', 'css/type-34.css');
	    $less->compileFile('less/banner.less', 'css/banner.css');
	    $less->compileFile('less/breadcrumb.less', 'css/breadcrumb.css');
	    $less->compileFile('less/content-sort.less', 'css/content-sort.css');
	    $less->compileFile('less/custom-filter.less', 'css/custom-filter.css');
	    $less->compileFile('less/featured-post.less', 'css/featured-post.css');
	    $less->compileFile('less/page-sort-footer.less', 'css/page-sort-footer.css');
	    $less->compileFile('less/product-list.less', 'css/product-list.css');
	    $less->compileFile('less/top-seller.less', 'css/top-seller.css');
	    $less->compileFile('less/footer.less', 'css/footer.css');
    ?>

    <link rel="stylesheet" type="text/css" href="css/type-10.css">
    <link rel="stylesheet" type="text/css" href="css/mega_menu.css">
    <link href="css/type-34.css" rel="stylesheet" type="text/css"/>
    <link href="css/add-font.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/banner.css">
    <link rel="stylesheet" type="text/css" href="css/breadcrumb.css">
    <link rel="stylesheet" type="text/css" href="css/content-sort.css">
    <link rel="stylesheet" type="text/css" href="css/custom-filter.css">
    <link rel="stylesheet" type="text/css" href="css/featured-post.css">
    <link rel="stylesheet" type="text/css" href="css/page-sort-footer.css">
    <link rel="stylesheet" type="text/css" href="css/product-list.css">
    <link rel="stylesheet" type="text/css" href="css/top-seller.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<?php include'page/masterpage/header.php'; ?>
	<?php include'page/masterpage/menus.php'; ?>
	
	<div class="type-34">
	    <div class="container">
	        <?php include 'page/category/breadcrumb.php' ?>
	        <div class="row">
	            <div class="col-lg-8 col-sm-9   ">
	                <?php include 'page/category/banner.php' ?>
	                <?php include 'page/category/content-sort.php' ?>
	                <?php include 'page/category/product-list.php' ?>
	                <?php include 'page/category/page-sort-footer.php' ?>
	            </div>
	            <div class="col-lg-4 col-sm-3">
	                <?php include 'page/category/custom-filter.php' ?>
	                <?php include 'page/category/top-seller.php' ?>
	                <?php include 'page/category/featured-post.php' ?>
	            </div>
	        </div>
	    </div>
	</div>
	<?php include'page/masterpage/footer.php'; ?>

	<script language="JavaScript" type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/range-slider.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/script_st.js"></script>
    <script type="text/javascript" src="js/script_menu.js"></script>
</body>
</html>