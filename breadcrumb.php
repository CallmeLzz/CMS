<head>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/breadcrumb.less', 'css/breadcrumb.css');
    ?>
    <link href="css/breadcrumb.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="breadcrumb">
        <a href="#">Home</a>
        <span class="navigation-pipe"> > </span>
        <span class="navigation-page"> Women </span>
    </div>
</body>