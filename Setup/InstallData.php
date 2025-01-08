<?php 
namespace Letscms\ProductAttachment\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

class InstallData implements InstallDataInterface
{
    protected $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $attributes = [
            'product_attachments_file' => [
                'label' => 'Product Attachment File',
                'input' => 'file',
                'backend' => 'Letscms\ProductAttachment\Model\Attribute\Backend\File',
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
            ],
            'product_attachments_description' => [
                'label' => 'Attachment Label',
                'input' => 'text',
                'backend' => '',
                'global' => ScopedAttributeInterface::SCOPE_STORE,
            ],
        ];
        foreach ($attributes as $code => $attribute) {
            $eavSetup->addAttribute(
                Product::ENTITY,
                $code,
                [
                    'group' => 'Product Attachments ',
                    'type' => 'varchar',
                    'label' => $attribute['label'],
                    'input' => $attribute['input'],
                    'backend' => $attribute['backend'],
                    'frontend' => '',
                    'class' => '',
                    'source' => '',
                    'global' => $attribute['global'],
                    'visible' => true,
                    'required' => false,
                    'user_defined' => true,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'unique' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => false,
                ]
            );
        }

    }
}
