<?php
namespace VS\AddVendor\Setup;

use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class Uninstall implements UninstallInterface
{
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $installer->getConnection()->dropTable($installer->getTable('vs_add_vendor_table'));
        $installer->getConnection()->dropColumn($installer->getTable('catalog_product_entity'),'vendor_id');
        $installer->endSetup();
    }
}