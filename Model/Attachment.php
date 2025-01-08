<?php

namespace Letscms\ProductAttachment\Model;

use Magento\Framework\Model\AbstractModel;

class Attachment extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Letscms\ProductAttachment\Model\ResourceModel\Attachment::class);
    }
}
