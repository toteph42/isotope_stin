<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

$GLOBALS['TL_DCA']['tl_iso_tax_rate']['palettes']['default'] .= ';{eu_stin_legend},eu_stin_flag';

$GLOBALS['TL_DCA']['tl_iso_tax_rate']['fields']['eu_stin_flag'] = [
	'label'   	=> &$GLOBALS['TL_LANG']['tl_iso_tax_rate']['eu_stin_flag'],
	'inputType' => 'checkbox',
	'eval'      => [ 'tl_class' => 'w50' ],
	'sql'		=> 'char(1) NOT NULL default \'\'',
];

?>