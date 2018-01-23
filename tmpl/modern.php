<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/modern.min.css');
?>
<div class="scroll-top-block" style="background-color: <?php echo $scrolltopBgColor ?>">
  <i class="far fa-chevron-up fa-2x" style="color: <?php echo $scrolltopColor ?>"></i>
</div>
