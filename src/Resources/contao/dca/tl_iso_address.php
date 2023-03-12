<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

$GLOBALS['TL_DCA']['tl_iso_address']['fields']['eu_stin'] = [
	'label'     => &$GLOBALS['TL_LANG']['tl_iso_address']['eu_stin'],
	'exclude'	=> true,
	'search'	=> true,
	'sorting'	=> true,
	'flag'		=> 1,
	'inputType'	=> 'text',
	'eval'		=> [ 'maxlength' => 20, 'rgxp' => 'EU_stin', 'feEditable' => true, 'feGroup' => 'address', 'tl_class' => 'w50' ],
	'sql'		=> 'varchar(40) NOT NULL default \'\'',
];

?>