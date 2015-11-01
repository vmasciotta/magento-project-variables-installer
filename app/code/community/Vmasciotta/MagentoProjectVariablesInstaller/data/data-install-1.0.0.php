<?php
/** @var  $this Mage_Core_Model_Resource_Setup */
$installer = $this;
$connection = $this->getConnection();

$installer->startSetup();

$blocks = [
    //['block_name'=>'page/html','is_allowed'=>1],
];
$variables = [];

$connection->insertMultiple($installer->getTable('admin/permission_block'), $blocks);
$installer->endSetup();
