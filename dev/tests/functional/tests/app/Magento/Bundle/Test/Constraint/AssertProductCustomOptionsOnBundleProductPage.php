<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magento\Bundle\Test\Constraint;

use Mtf\Client\Browser;
use Mtf\Fixture\FixtureInterface;
use Magento\Catalog\Test\Page\Product\CatalogProductView;
use Magento\Catalog\Test\Constraint\AssertProductCustomOptionsOnProductPage;

/**
 * Class AssertProductCustomOptionsOnBundleProductPage
 * Assertion that commodity options are displayed correctly on bundle product page
 */
class AssertProductCustomOptionsOnBundleProductPage extends AssertProductCustomOptionsOnProductPage
{
    /**
     * Flag for verify price data
     *
     * @var bool
     */
    protected $isPrice = false;

    /**
     * Open product view page
     *
     * @param CatalogProductView $catalogProductView
     * @param FixtureInterface $product
     * @param Browser $browser
     * @return void
     */
    protected function openProductPage(
        CatalogProductView $catalogProductView,
        FixtureInterface $product,
        Browser $browser
    ) {
        $browser->open($_ENV['app_frontend_url'] . $product->getUrlKey() . '.html');
        $catalogProductView->getViewBlock()->clickCustomize();
    }
}
