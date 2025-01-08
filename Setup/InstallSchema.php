<?php

namespace Letscms\ProductAttachment\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        if (!$installer->tableExists('product_attachments')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('product_attachments')
            )
                ->addColumn(
                    'attachment_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true],
                    'Attachment ID'
                )
                ->addColumn(
                    'product_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false, 'unsigned' => true],
                    'Product ID'
                )
                ->addColumn(
                    'file_path',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'File Path'
                )
                ->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => true],
                    'Attachment Description'
                )
                ->setComment('Product Attachments Table');
            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
