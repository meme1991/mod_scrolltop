<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/scrolltop.min.css');
?>
<div class="scroll-top-block" style="<?php echo $scrolltopPosition ?>: 30px">
  <span class="fa-stack fa-lg" style="color: <?php echo $scrolltopBgColor ?>">
    <i class="fas fa-circle fa-stack-2x"></i>
    <i class="far fa-chevron-up fa-stack-1x fa-inverse" style="color: <?php echo $scrolltopColor ?>"></i>
  </span>
</div>
