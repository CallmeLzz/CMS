<head>
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/page-sort-footer.less', 'css/page-sort-footer.css');
    ?>
    <link href="css/page-sort-footer.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="page-sort-footer">
        <form action="#" method="get" class="item-per-page">
            <div class="selector">
                <select>
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="60">60</option>
                </select>
            </div>
            <label>Show</label>
        </form>
        <div class="pagination-container">
            <form class="show-all" action="#" method="get">
                <input type="submit" value="Show all" class="btn btn-default button">
            </form>
            <ul class="pagination">
                <li class="curent">
                    <span>1</span>
                </li>
                <li>
                    <span>2</span>
                </li>
                <li>
                    <span>3</span>
                </li>
                <li class="truncate">
                    <span>...</span>
                </li>
                <li>
                    <span>8</span>
                </li>
                <li class="pagination-next">
                    <a href="#"><b>Next</b></a>
                </li>
            </ul>
        </div>
    </div>
</body>