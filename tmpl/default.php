<?php
/**
 * @version    1.0.x
 * @package    SPEDI ScrollTop Module
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/scrolltop.min.css');
?>
<div class="scroll-top-block" style="<?php echo $scrolltopPosition ?>: 30px">
  <span class="fa-stack fa-2x" style="color: <?php echo $scrolltopBgColor ?>">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-chevron-up fa-stack-1x fa-inverse" style="color: <?php echo $scrolltopColor ?>"></i>
  </span>
</div>
