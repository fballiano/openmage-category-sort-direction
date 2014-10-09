<?php
/**
 * FBalliano
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this Module to
 * newer versions in the future.
 *
 * @category   FBalliano
 * @package    FBalliano_CategorySortDirection
 * @copyright  Copyright (c) 2014 Fabrizio Balliano (http://fabrizioballiano.it)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Fballiano_CategorySortDirection_Block_Product_List extends Mage_Catalog_Block_Product_List
{
    protected function _beforeToHtml()
    {
        $return = parent::_beforeToHtml();

        $toolbar = $this->getToolbarBlock();
        $current_category = Mage::registry("current_category");
        if ($current_category) {
            $dir = $this->getRequest()->getParam($toolbar->getDirectionVarName());
            $sort_direction = $current_category->getSortDirection();
            if (!$dir and $sort_direction) {
                if ($sort_direction == 2) {
                    $sort_direction = "desc";
                } else {
                    $sort_direction = "asc";
                }

                $toolbar->setData('_current_grid_direction', $sort_direction);
            }
        }

        return $return;
    }
}