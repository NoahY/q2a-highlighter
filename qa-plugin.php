<?php
/*
	Plugin Name: Syntax Highlighter
	Plugin URI: https://github.com/NoahY/q2a-highlighter
	Plugin Description: Highlights code in posts
	Plugin Version: 0.1
	Plugin Date: 2012-04-09
	Plugin Author: NoahY
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.5

	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('module', 'qa-highlight-admin.php', 'qa_highlight_plugin_admin', 'Highlight Admin');
qa_register_plugin_layer('qa-highlight-layer.php', 'Highlight Layer');	