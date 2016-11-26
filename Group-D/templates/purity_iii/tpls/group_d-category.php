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
    <?php $this->addCss('group_d/banner'); ?>
    <?php $this->addCss('group_d/mega_menu'); ?>
    <?php $this->addCss('group_d/type-34'); ?>
    <?php $this->addCss('group_d/breadcrumb'); ?>
    <?php $this->addCss('group_d/content-sort'); ?>
    <?php $this->addCss('group_d/custom-filter'); ?>
    <?php $this->addCss('group_d/featured-post'); ?>
    <?php $this->addCss('group_d/page-sort-footer'); ?>
    <?php $this->addCss('group_d/product-list'); ?>
    <?php $this->addCss('group_d/top-seller'); ?>
    <?php $this->addCss('group_d/footer'); ?>
  </head>

  <body>

    <?php $this->loadBlock('masterpage/header'); ?>
    <?php $this->loadBlock('masterpage/menus'); ?>

    <div class="type-34">
        <div class="container">
            <?php $this->loadBlock('category/breadcrumb'); ?>
            <div class="row">
                <div class="col-lg-8 col-sm-9   ">
                    <?php $this->loadBlock('category/banner'); ?>
                    <?php $this->loadBlock('category/content-sort'); ?>
                    <?php $this->loadBlock('category/product-list'); ?>
                    <?php $this->loadBlock('category/page-sort-footer'); ?>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <?php $this->loadBlock('category/custom-filter'); ?>
                    <?php $this->loadBlock('category/top-seller'); ?>
                    <?php $this->loadBlock('category/featured-post'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->loadBlock('masterpage/footer'); ?>

    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/jquery-3.1.1.min'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/jquery-ui.min'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_menu'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/range-slider'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_st'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/bootstrap.min'); ?>


    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_menu.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/range-slider.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_st.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/bootstrap.min.js"></script>
  </body>

</html>