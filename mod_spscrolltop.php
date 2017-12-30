<?php
/**
 * @version    1.0.x
 * @package    SPEDI ScrollTop Module
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/* params */
$scrolltopColor    = $params->get('scrolltop-color');
$scrolltopBgColor  = $params->get('scrolltop-bgcolor');
$scrolltopPosition = $params->get('scrolltop-position');
//
$document = JFactory::getDocument();

$document->addScript(JUri::base(true).'/modules/'.$module->module.'/js/scrolltop.min.js');

require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
