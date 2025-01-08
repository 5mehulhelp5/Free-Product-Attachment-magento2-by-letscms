<?php

namespace Letscms\ProductAttachment\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Attachment extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('product_attachment', 'attachment_id');
    }
}
