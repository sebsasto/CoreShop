<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2019 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Bundle\WorkflowBundle\History;

use Pimcore\Model\DataObject;
use Pimcore\Model\Element\Note;

interface HistoryRepositoryInterface
{
    /**
     * @param DataObject\Concrete $object
     * @return Note[]
     */
    public function getHistory(DataObject\Concrete $object);
}
