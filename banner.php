<head>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/banner.less', 'css/banner.css');
    ?>
    <link href="css/banner.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="banner">
    <img src="images/banner/women.jpg">
    <div class="banner-desc">
        <h2 class="trajan-font">Women</h2>
        <p>Etiam elementum consectetur felis ut ullamcorper. Sed viverra efficitur leo, nec egestas metus tempus sit amet.</p>
    </div>
    </div>
</body>