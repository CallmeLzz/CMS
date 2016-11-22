<!DOCTYPE html>
<html>
	<head>
		<title> CMS - Detail </title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../css/owl.carousel.css">
		<?php
		    if (!class_exists('lessc')) {
		        include ('../../libs/lessc.inc.php');
		    }
		    $less = new lessc;
		    $less->compileFile('../../less/type-10.less', '../../css/type-10.css');
		    $less->compileFile('../../less/type-13.less', '../../css/type-13.css');
		    $less->compileFile('../../less/style.less', '../../css/style.css');
		?>

		<link rel="stylesheet" type="text/css" href="../../css/type-10.css">
		<link rel="stylesheet" type="text/css" href="../../css/type-13.css">
		<link rel="stylesheet" type="text/css" href="../../css/style.css">

		<script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="../../js/owl.carousel.js"></script>
		<script type="text/javascript" src="../../js/script.js"></script>
	</head>
	<body>
		<div class="container">
            <div class="col-md-6 col-sm-4 col-xs-12">
                <div class="product">
                    <div class="items col-md-9">
                        <img src="../../images/moschino-cheap-and-chic-yacht-main.jpg" alt="" id="main_img">
                    </div>
                    <div class="thumbs-list col-md-3">
                        <div class="btn-move" id="btn-up" onclick="clickButtonUp()">
                            <i class="fa fa-chevron-up"></i>
                        </div>
                            <img src="../../images/moschino-cheap-and-chic-yacht-main.jpg" alt="" class="thumb_nail" id="show">
                            <img src="../../images/moschino-cheap-and-chic-yacht-thumb2.jpg" alt="" class="thumb_nail">
                            <img src="../../images/moschino-cheap-and-chic-yacht-thumb3.jpg" alt="" class="thumb_nail">
                            <img src="../../images/moschino-cheap-and-chic-yacht-thumb4.jpg" alt="" class="thumb_nail">                         
                            <img src="../../images/moschino-cheap-and-chic-yacht-a.jpg" alt="" class="thumb_nail" id="hide">
                            <div class="btn-move" id="btn-down" onclick="clickButtonDown()">
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <h5>Also purchased products</h5>
                    <div class="purchase-item" id="item-product">
                        <div class="thumb-img-carousel">
                            <img src="../../images/calvin-klein-white-cap-colorblock111.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-david-meister-lady-in-red.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-elie-tahari-head-heels.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-bibhu-mohapatra-luxury-lush-gown.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-nanette-lepore-want-me.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-anna-sui-dot-flutter.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-nanette-lapore-girls-only.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-milly-poppy-fields-sheat.jpg" alt="">
                        </div>
                        <div class="thumb-img-carousel">
                            <img src="../../images/dress-tibi-red-rococo-print.jpg" alt="">
                        </div>
                    </div>
                    <div class="btn-move-left button">
                        <i class="fa fa-chevron-left btn-prev"></i>
                    </div>
                    <div class="btn-move-right button">
                        <i class="fa fa-chevron-right btn-next"></i>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="product">
                    <div class="title">
                        <h4>Moschino Cheap And Chic Yacht</h4>
                        <div class="star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star color-star"></i>
                        </div>
                    </div>
                    <span class="state">
                        Manufacturer: <a href="#" class="name">Nicole Miller</a><br>
                        Condition: New
                    </span>
                    <div class="tab-title">
                        <ul class="tab">
                            <li><a href="javascript:void(0)" class="tablinks active" onclick="openTab(event, 'more-info')">More info</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'data-sheet')">Data sheet</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'accessories')">Accessories</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'custom-tab')">Custom Tab</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'video')">Video</a></li>
                            <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'comment')">Comments</a></li>
                        </ul>
                        <div id="more-info" class="tabcontent active-section">
                            Eorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis leo sit amet diam ullamcorper ullamcorper. In eleifend luctus interdum.
                            Cras vel eleifend neque. Phasellus eget est lacus, et aliquet arcu. Morbi vitae sapien
                            <ul>
                                <li>Color - White;</li>
                                <li>100% micro modal;</li>
                                <li>Ruched knot decoration at the chest;</li>
                                <li>Unlined;</li>
                            </ul>
                            Morbi vitae sapien in elit cursus auctor. Sed lectus nisi, commodo vel hendrerit vel, cursus non sapien. Nullam nec velit ante, vitae placerat odio.
                            Duis sodales nisi ac nunc vestibulum gravida. Phasellus auctor tellus felis, ac cursus ligula.
                        </div>
                        <div id="data-sheet" class="tabcontent">
                            <table>
                                <tr class="odd">
                                    <td>Height</td>
                                    <td>Silk</td>
                                </tr>
                                <tr class="even">
                                    <td>Material</td>
                                    <td>Cotton</td>
                                </tr>
                            </table>
                        </div>
                        <div id="accessories" class="tabcontent">
                            <ul>
                                <li class="col-md-4 col-sm-4">
                                    <img src="../../images/dress-nanette-lepore-want-me.jpg">
                                    <h3>Dress Nanette L...</h3>
                                    <h5>$470.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <img src="../../images/dress-herve-leger-sip-and-shine-martini.jpg">
                                    <h3>Dress Herve Leg...</h3>
                                    <h5>$707.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <img src="../../images/dress-anna-sui-ambrosia-lace.jpg">
                                    <h3>Dress Anna Sui ...</h3>
                                    <h5>$743.00</h5>
                                    <a class="btn-add-to-cart" href="#">Add to cart</a>
                                </li>
                            </ul>
                        </div>
                        <div id="custom-tab" class="tabcontent">
                            <img src="../../images/sizes.jpg">
                        </div>
                        <div id="video" class="tabcontent">
                            <iframe id="player" type="text/html" src="../../video/prada-spring-2015.mp4" width="515" height="270" frameborder="0"></iframe>
                        </div>
                        <div id="comment" class="tabcontent">
                            <div class="thumb-comment">
                                <span><b>Grade</b></span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-color"></i>
                                <i class="fa fa-star star-color"></i>
                                <a href="#">Write your review !</a><br>
                                <strong>pipo</strong> <em>06/21/2016</em>
                                <h3>hsfd 4387587 dkjhdsa g</h3>
                                <p>hsfd 4387587 dkjhdsa g</p>
                                
                                
                            </div>
                            <div class="thumb-comment">
                                <span><b>Grade</b></span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-color"></i>
                                <i class="fa fa-star star-color"></i>
                                <a href="#">Write your review !</a><br>
                                <strong>pipo</strong> <em>06/21/2016</em>
                                <h3>hsfd 4387587 dkjhdsa g</h3>
                                <p>hsfd 4387587 dkjhdsa g</p>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="attributes">
                        
                            <label> Size: </label>
                        
                        <div class="attribute-list">
                            <select>
                                <option value="1" selected="selected" title="S">S</option>
                                <option value="2" title="M">M</option>
                                <option value="3" title="M">L</option>
                                <option value="4" title="M">XL</option>
                            </select>
                        </div>
                        
                            <label> Color: </label>
                       
                        <div class="attribute-list">
                            <select>
                                <option value="5" selected="selected" title="S">Red</option>
                                <option value="6" title="M">Blue</option>
                                <option value="7" title="M">Black</option>
                                <option value="8" title="M">White</option>
                            </select>
                        </div>
                            <p>
                                <label>Quantity:</label>
                                <input type="text" name="quantity" id="quantity" value="1">
                            </p>
                            
                            <div class="price">
                                <h5>$805.00</h5>
                                <a href="#" class="btn-add">add to cart</a>
                            </div>
                    </div>
                </div>
                <div class="box-cart">
                    <div class="social">
                        <img src="../../images/social-facebook-box-blue-icon.png" title="Facebook">
                        <img src="../../images/twitter-icon.png" title="Twiiter">
                        <img src="../../images/icon-print.png" title="Print">
                        <img src="../../images/Other-Mail-Metro-icon.png" title="Email">
                        <img src="../../images/google-plus-icon.png" title="Google plus">
                    </div>
                    <a href="#" class="wishlist">» Add to my wishlist</a>
                </div>
            </div>
        </div>
	</body>
</html>