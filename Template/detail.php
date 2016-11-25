<!DOCTYPE html>
<html>
	<head>
		<title> CMS - Detail </title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<?php
		    if (!class_exists('lessc')) {
		        include ('libs/lessc.inc.php');
		    }
		    $less = new lessc;
		    $less->compileFile('less/type-10.less', 'css/type-10.css');
		    $less->compileFile('less/type-13.less', 'css/type-13.css');
		    $less->compileFile('less/style_mine.less', 'css/style_mine.css');
            $less->compileFile('less/footer.less', 'css/footer.css');
		?>

		<link rel="stylesheet" type="text/css" href="css/type-10.css">
		<link rel="stylesheet" type="text/css" href="css/type-13.css">
		<link rel="stylesheet" type="text/css" href="css/style_mine.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">

		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/script_th.js"></script>
	</head>
	<body>
		<?php include'page/masterpage/header.php'; ?>
        <?php include'page/detail/detail.php'; ?>
        <?php include'page/masterpage/footer.php'; ?>
	</body>
</html>