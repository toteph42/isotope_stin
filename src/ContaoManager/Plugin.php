<?php
declare(strict_types=1);

/**
 * 	IsotopeSTIN Bundle
 *
 *	@copyright	(c) 2013 - 2023 Florian Daeumling, Germany. All right reserved
 * 	@license 	https://github.com/toteph42/syncgw/blob/master/LICENSE
 */

namespace Isotope_STINBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use syncgw\Isotope_STINBundle\Isotope_STINBundle;

class Plugin implements BundlePluginInterface {

    public function getBundles(ParserInterface $parser): array {
        return [
            BundleConfig::create(Isotope_STINBundle::class)
                ->setLoadAfter([ ContaoCoreBundle::class, 'isotope' ]),
        ];
    }

}

?>