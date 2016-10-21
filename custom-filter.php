<head>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/custom-filter.less', 'css/custom-filter.css');
    ?>
    <link href="css/custom-filter.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="custom-filter">
        <form action="#" id="filter-form">
            <?php include "category-filter.php"?>
            <?php include "manufacturer-filter.php"?>
            <?php include "price-filter.php"?>
            <?php include "size-filter.php"?>
            <?php include "color-filter.php"?>
        </form>
    </div>
</body>