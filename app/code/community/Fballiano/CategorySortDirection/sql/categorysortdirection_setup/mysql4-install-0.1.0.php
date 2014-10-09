<?php

$installer = $this;
$installer->startSetup();


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
        "note" => ""

    )
);
$installer->endSetup();