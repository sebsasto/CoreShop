<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Test\PHPUnit\Component\Pimcore;

use CoreShop\Component\Pimcore\BatchProcessing\BatchListing;
use CoreShop\Component\Product\Model\ProductInterface;
use CoreShop\Test\Base;
use Pimcore\Model\Asset;

class BatchListingTest extends Base
{
    public function testObjectBatchListing()
    {
        $this->printTestName();

        $listing = $this->get('coreshop.repository.product')->getList();

        $batch = new BatchListing($listing, 1);

        foreach ($batch as $product) {
            $this->assertTrue($product instanceof ProductInterface);
        }

        $this->assertEquals(3, count($batch));
    }

    public function testAssetBatchListing()
    {
        $this->printTestName();

        $batch = new BatchListing(new Asset\Listing(), 5);

        foreach ($batch as $asset) {
            $this->assertTrue($asset instanceof Asset);
        }

        $this->assertEquals(1, count($batch));
    }
}
