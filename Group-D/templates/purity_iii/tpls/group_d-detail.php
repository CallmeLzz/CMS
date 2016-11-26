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
    <?php $this->addCss('group_d/mega_menu'); ?>
    <?php $this->addCss('group_d/type-13'); ?>
    <?php $this->addCss('group_d/style_mine'); ?>
    <?php $this->addCss('group_d/footer'); ?>
  </head>

  <body>

    <?php $this->loadBlock('masterpage/header'); ?>
    <?php $this->loadBlock('masterpage/menus'); ?>

    <?php $this->loadBlock('detail/detail'); ?>

    <?php $this->loadBlock('masterpage/footer'); ?>

    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/jquery-3.1.1.min'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/owl.carousel'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_menu'); ?>
    <?php $this->addScript(T3_TEMPLATE_URL.'/js/group_d/script_th'); ?>

    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_menu.js"></script>
    <script type="text/javascript" src="<?php echo T3_TEMPLATE_URL; ?>./js/group_d/script_th.js"></script>
  </body>

</html>