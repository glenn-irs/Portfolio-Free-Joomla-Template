<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Header layout
$headerData = array(
	'show' => $this->params->get('show_page_heading'),
	'text' => $this->params->get('page_heading')
);
$headerLayout = new JLayoutFile('gk.content.header');

echo $headerLayout->render($headerData);

// EOF