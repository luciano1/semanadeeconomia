<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# ------------------------------------------------------------------------
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
JHtml::_('jquery.framework');

$uniqid				= $module->id;
$name_text			= JText::_('Nome...');
$email_text			= JText::_('Email...');
$subject_text		= JText::_('Assunto...');
$msg_text			= JText::_('Mensagem...');
$send_msg			= JText::_('Enviar mensagem');

$formcaptcha		= $params->get('formcaptcha', 1);
$captcha_question	= $params->get('captcha_question');
$captcha_answer		= $params->get('captcha_answer');

$document 			= JFactory::getDocument();
$document->addScript(JURI::base(true) . '/modules/mod_sp_quickcontact/assets/js/script.js');
$document->addStylesheet(JURI::base(true) . '/modules/mod_sp_quickcontact/assets/css/style.css');

// Include the helper.
require_once __DIR__ . '/helper.php';

require JModuleHelper::getLayoutPath('mod_sp_quickcontact', $params->get('layout', 'default'));