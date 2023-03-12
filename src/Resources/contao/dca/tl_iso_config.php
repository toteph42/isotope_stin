<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

use Contao\Backend;
use Contao\DataContainer;
use Contao\Database;

$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] .= ';{eu_stin_legend:hide},eu_stin_countries';

$GLOBALS['TL_DCA']['tl_iso_config']['fields']['eu_stin_countries'] = [
	'label'     	=> &$GLOBALS['TL_LANG']['tl_iso_config']['eu_stin_countries'],
	'inputType' 	=> 'select',
	'options'		=> $this->getCountries(),
	'default'		=> tl_iso_config_stin::$eu,
	'eval' 			=> [ 'mandatory' => true, 'multiple' => true, 'size' => 8, 'tl_class' => 'w50 w50h', 'chosen' => true ],
	'load_callback'	=> [[ 'tl_iso_config_stin', 'loadCountry' ]],
	'sql'			=> 'blob NULL',
];

$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = str_replace('vat_no,', 'eu_stin,', $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_iso_config']['fields']['eu_stin'] = [
	'label'     	=> &$GLOBALS['TL_LANG']['tl_iso_config']['eu_stin'],
	'exclude'  		=> true,
	'search'    	=> true,
	'inputType' 	=> 'text',
	'eval'      	=> [ 'rgxp' => 'EU_stin', 'tl_class' => 'w50' ],
	'sql'			=> 'varchar(40) NOT NULL default \'\'',
];

class tl_iso_config_stin extends Backend {

	// current EU countries
	static $eu = array ('be', 'bg', 'dk', 'de', 'ee', 'fi', 'fr', 'gr', 'ie',
					 	'it', 'lv', 'lt', 'lu', 'mt', 'nl', 'at', 'pl', 'pt', 'ro',
					 	'sw', 'sk', 'si', 'es', 'cz', 'hu', 'cy', 'hr');

	public function loadCountry($varValue, DataContainer $dc) {
		if ($varValue)
			return $varValue;

		// it is required to save default, because only if default is changed value will be saved
		Database::getInstance()->prepare('UPDATE tl_iso_config SET eu_stin_countries =? WHERE id=?')
								->execute(serialize(self::$eu), $dc->id);

		return serialize(self::$eu);
	}

}

?>