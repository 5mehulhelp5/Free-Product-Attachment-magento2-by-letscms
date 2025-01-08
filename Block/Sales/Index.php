<?php

namespace Letscms\ProductAttachment\Block\Sales;

use Magento\Framework\View\Element\Template;
use Magento\Framework\UrlInterface;
use Letscms\ProductAttachment\Helper\Data as Helper;
use Magento\Framework\App\Request\Http as HttpRequest;
use Magento\Sales\Api\OrderRepositoryInterface;

class Index extends Template
{
    protected $request;
    protected $_product;
    private $helper;
    protected $orderRepository; 

    public function __construct(
        Template\Context $context,
        \Magento\Catalog\Model\Product $product,
        HttpRequest $request,
        Helper $helper,
        OrderRepositoryInterface $orderRepository,
        array $data = []
    ) {
        $this->request = $request;
        $this->_product = $product;
        $this->orderRepository = $orderRepository;
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getenablestatus()
    {
        $enable_status = $this->helper->getConfig('ProductAttachment_General/ProductAttachmentGeneral/enable_status');
        return $enable_status;
    }
    public function getEnablePageStatus()
    {
        $Show_On_OrderPage = $this->helper->getConfig('ProductAttachment_General/ProductAttachmentGeneral/Show_On_OrderPage');
        return $Show_On_OrderPage;
    }
    public function getOrderId()
    {
        return $this->request->getParam('order_id'); 
    }
    public function getProductIdsByOrderId()
    {
        try {
            // Load the order by ID
            $order = $this->orderRepository->get($this->getOrderId());

            // Get all items from the order
            $orderItems = $order->getAllItems();

            // Extract product IDs
            $productIds = [];
            foreach ($orderItems as $item) {
                $productIds[] = $item->getProductId();
            }

            return $productIds;
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return [];
        }
    }
    public function getAttachmentFileUrl($productid)
    {
        //return $productid;
        $product = $this->_product->load($productid);
       
        $attachmentFile = $product->getData('product_attachments_file');

        if ($attachmentFile) {
            return $this->_urlBuilder->getBaseUrl(['_type' => UrlInterface::URL_TYPE_MEDIA]) .
                'catalog/product/attachment/' . $attachmentFile;
        }

        return null;
    }
    public function getAttachmentFileName($productid)
    {
        //return $productid;
        $product = $this->_product->load($productid);
       
        $attachmentFileName = $product->getData('product_attachments_description');

        if ($attachmentFileName) {
            return $attachmentFileName;
        }

        return null;
    }
    public function getProductName($productid)
    {
        //return $productid;
        $product = $this->_product->load($productid);

        $ProductName = $product->getData('sku');

        if ($ProductName) {
            return $ProductName;
        }

        return null;
    }

}