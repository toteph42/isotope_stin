<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

$GLOBALS['ISO_HOOKS']['useTaxRate'][] 	  = [ 'Isotope_STINBundle\Module\IsotopeSTIN', 'applyVat' ];

$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = [ 'Isotope_STINBundle\Module\IsotopeSTIN', 'rgxpStin' ];

if (is_array($GLOBALS['TL_HOOKS']['replaceInsertTags']))
	array_unshift($GLOBALS['TL_HOOKS']['replaceInsertTags'], [ 'Isotope_STINBundle\Module\IsotopeSTIN', 'replaceTag' ]);

?>