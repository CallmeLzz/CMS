<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
 
$responsive = $this->getParam('responsive', 1);
$resClass = "";
if ($responsive==0){
	$resClass = "no-responsive";
}

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" /> <?php echo $resClass ?>'>

  <head>
  	<jdoc:include type="head" />
  	<?php //$this->loadBlock('head') ?>

    <?php $this->addStyleSheet(T3_TEMPLATE_URL.'/css/group_d/font-awesome.min.css'); ?>
    <?php $this->addStyleSheet(T3_TEMPLATE_URL.'/css/group_d/bootstrap.min.css'); ?>
    <?php $this->addStyleSheet(T3_TEMPLATE_URL.'/css/group_d/owl.carousel.css'); ?>


    <?php $this->addCss('group_d/type-10'); ?>
    <?php $this->addCss('group_d/banner_home'); ?>
    <?php $this->addCss('group_d/mega_menu'); ?>
    <?php $this->addCss('group_d/type-13'); ?>
    <?php $this->addCss('group_d/style_mine'); ?>
    <?php $this->addCss('group_d/featured-products-title'); ?>
    <?php $this->addCss('group_d/newsletter'); ?>
    <?php $this->addCss('group_d/products-list'); ?>
    <?php $this->addCss('group_d/recent-post-list'); ?>
    <?php $this->addCss('group_d/recent-post-title'); ?>
    <?php $this->addCss('group_d/style-34'); ?>
    <?php $this->addCss('group_d/footer'); ?>
  </head>

  <body>

    <?php $this->loadBlock('masterpage/header'); ?>
    <?php $this->loadBlock('masterpage/menus'); ?>
    <?php $this->loadBlock('home/banner'); ?>

    <?php $this->loadBlock('home/featured-products'); ?>
    <?php $this->loadBlock('home/recent-post'); ?>
    <?php $this->loadBlock('home/newsletter'); ?>

    <?php $this->loadBlock('home/productsCarousel'); ?>
    <?php $this->loadBlock('home/banners-carousel'); ?>
    <?php $this->loadBlock('home/instagram-feed'); ?>
    <?php $this->loadBlock('home/manufacturersCarousel'); ?>

    <?php $this->loadBlock('masterpage/footer'); ?>

    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/jquery-3.1.1.min'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/owl.carousel'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_menu'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_mine'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/slideshow'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script-dropdown'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/bootstrap.min'); ?>


    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_menu.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_mine.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/slideshow.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/bootstrap.min.js"></script>
  </body>

</html>