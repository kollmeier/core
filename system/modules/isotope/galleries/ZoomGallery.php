<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2008-2012 Isotope eCommerce Workgroup
 *
 * @package    Isotope
 * @link       http://www.isotopeecommerce.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Class ZoomGallery
 *
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @author     Kamil Kuźmiński <kamil.kuzminski@gmail.com>
 */
class ZoomGallery extends InlineGallery
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'iso_gallery_zoom';


	/**
	 * Generate gallery
	 * @param string
	 * @param integer
	 * @param boolean
	 */
	public function generateGallery($strType='gallery', $intSkip=0, $blnForce=false)
	{
		// Include scripts and styles
		if (version_compare(MOOTOOLS_CORE, '1.3.0') >= 0)
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/isotope/assets/zoomgallery.min.js';
			$GLOBALS['TL_CSS'][] = 'system/modules/isotope/assets/zoomgallery.min.css';
		}

		return parent::generateGallery($strType, $intSkip, $blnForce);
	}
}

