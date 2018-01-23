<?php
# @Author: SPEDI srl
# @Date:   23-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 23-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

/* params */
$scrolltopColor    = $params->get('scrolltop-color');
$scrolltopBgColor  = $params->get('scrolltop-bgcolor');
$scrolltopPosition = $params->get('scrolltop-position');
//
$document = JFactory::getDocument();

$document->addScript(JUri::base(true).'/modules/'.$module->module.'/js/scrolltop.min.js');

require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
