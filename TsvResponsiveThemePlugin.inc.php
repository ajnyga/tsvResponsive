<?php

/**
 * @file plugins/themes/tsvResponsive/TsvResponsiveThemePlugin.inc.php
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class TsvResponsiveThemePlugin
 * @ingroup plugins_themes_tsvResponsive
 *
 * @brief "tsvResponsive" theme plugin
 */

import('classes.plugins.ThemePlugin');

class TsvResponsiveThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'TsvResponsiveThemePlugin';
	}

	function getDisplayName() {
		return 'TsvResponsive Theme';
	}

	function getDescription() {
		return 'Light, plain, responsive';
	}

	function getStylesheetFilename() {
		return 'tsvResponsive.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}

	
}

?>
