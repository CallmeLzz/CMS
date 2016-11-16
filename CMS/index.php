<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="type-3">
            <div>
                <div class="container">
                    <h2>Templates Collection</h2>
                    <p class="heading-byline">Professional Joomla! templates covering a wide range of categories.<br>
                        Visit our <a href="#" title="Joomla products">Joomla! Showcase</a> for more.</p>
                </div>
            </div>
            <div class="pd-list">
                <div class="container">
                    <div class="row"> 
                        <!-- Item 1 -->
                        <div class="col-sm-4">
                            <div class="pd-list-item">
                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA Elicyon Info" href="#">
                                            <img class="image" src="images/ja_elicyon.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="pd-title">
                                    <h3>
                                        <a href="#" title="#">JA Elicyon</a>
                                        <small class="pd-labels">
                                            <span class="label label-info label-joomla3">Joomla 3</span>
                                        </small>
                                        <small>eCommerce Joomla Template for Interior Design shops</small>
                                    </h3>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                        <!-- Item 1 -->
                        <!-- Item 2 -->
                        <div class="col-sm-4">
                            <div class="pd-list-item">

                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA Playstore Info" href="#">
                                            <img class="image" src="images/ja_playstore.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="pd-title">
                                    <h3>
                                        <a href="#" title="#">JA Playstore</a>
                                        <small class="pd-labels">
                                            <span class="label label-info label-joomla3">Joomla 3</span>
                                        </small>
                                        <small>eCommerce Joomla Template for Games Store</small>
                                    </h3>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                        <!--END Item 2 -->
                        <!-- Item 3 -->
                        <div class="col-sm-4">
                            <div class="pd-list-item">
                                <!-- Item -->
                                <div class="pd-screen">
                                    <div class="pd-screen-img">
                                        <a title="JA Platon Info" href="#">
                                            <img class="image" src="images/ja_platon.jpg" alt="#" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="pd-title">
                                    <h3>
                                        <a href="#" title="#">JA Platon</a>
                                        <small class="pd-labels">
                                            <span class="label label-info label-joomla3">Joomla 3</span>
                                        </small>
                                        <small>Responsive Joomla Template for Universities and Colleges</small>
                                    </h3>
                                </div>
                                <!-- //Item -->
                            </div>
                        </div>
                        <!--END Item 3 -->
                    </div>        
                    <div class="text-center">
                        <a href="#" class="btn btn-rounded btn-primary btn-lg">Browse our themes <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>