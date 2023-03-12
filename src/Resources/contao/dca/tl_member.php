<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace(',country',',country,eu_stin',$GLOBALS['TL_DCA']['tl_member']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_member']['fields']['eu_stin'] = [
	'label'    	=> &$GLOBALS['TL_LANG']['tl_member']['eu_stin'],
	'exclude'   => true,
	'inputType' => 'text',
	'eval'      => [ 'feEditable' => true, 'rgxp' => 'EU_stin', 'feViewable' => true, 'feGroup' => 'address' ],
	'sql'		=> 'varchar(40) NOT NULL default \'\'',
];

?>