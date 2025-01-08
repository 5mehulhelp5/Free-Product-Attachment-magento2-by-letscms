<?php

namespace Letscms\ProductAttachment\Block\Index;

use Magento\Framework\View\Element\Template;
use Magento\Framework\UrlInterface;
use Letscms\ProductAttachment\Helper\Data as Helper;

class Attachment extends Template
{
    /**
     * @var \Magento\Catalog\Model\Product
     */
    protected $_product; // Changed from private to protected
    private $helper;
    /**
     * @var UrlInterface
     */
    protected $_urlBuilder; // Changed from private to protected

    /**
     * Constructor
     *
     * @param Template\Context $context
     * @param \Magento\Catalog\Model\Product $product
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Magento\Catalog\Model\Product $product,
        Helper $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_product = $product;
        $this->helper = $helper;
        $this->_urlBuilder = $context->getUrlBuilder();
    }

    /**
     * Get the Current Product
     *
     * @return \Magento\Catalog\Model\Product|null
     */
    public function getProduct()
    {
        return $this->_product->load($this->getRequest()->getParam('id'));
    }

    /**
     * Get the Attachment File URL
     *
     * @return string|null
     */
    public function getAttachmentFileUrl()
    {
        $product = $this->getProduct();
        $attachmentFile = $product->getData('product_attachments_file');

        if ($attachmentFile) {
            return $this->_urlBuilder->getBaseUrl(['_type' => UrlInterface::URL_TYPE_MEDIA]) .
                'catalog/product/attachment/' . $attachmentFile;
        }

        return null;
    }
    public function getenablestatus()
    {
        $enable_status = $this->helper->getConfig('ProductAttachment_General/ProductAttachmentGeneral/enable_status');
        return $enable_status;
    }
    public function getEnablePageStatus()
    {
        $Show_On_ProductPage = $this->helper->getConfig('ProductAttachment_General/ProductAttachmentGeneral/Show_On_ProductPage');
        return $Show_On_ProductPage;
    }
    public function getAttachmentFileName()
    {
        $product = $this->getProduct();
        $attachmentFileName = $product->getData('product_attachments_description');

        if ($attachmentFileName) {
            return $attachmentFileName;
        }

        return null;
    }
}
