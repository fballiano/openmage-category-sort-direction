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

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();

$installer->removeAttribute("catalog_category", "catalog_category");

$installer->addAttribute(
    "catalog_category",
    "sort_direction",
    array(
        "type" => "int",
        "backend" => "",
        "frontend" => "",
        "label" => "Sort direction",
        "input" => "select",
        "class" => "",
        "source" => "categorysortdirection/directions",
        "global" => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        "visible" => true,
        "required" => false,
        "user_defined" => false,
        "default" => "ASC",
        "searchable" => false,
        "filterable" => false,
        "comparable" => false,
        "visible_on_front" => false,
        "unique" => false,
        "note" => "",
        "group" => "Display Settings",
        "sort_order" => 51
    )
);
$installer->endSetup();