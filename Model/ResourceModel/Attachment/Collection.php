<?php

namespace Letscms\ProductAttachment\Model\ResourceModel\Attachment;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Letscms\ProductAttachment\Model\Attachment;
use Letscms\ProductAttachment\Model\ResourceModel\Attachment as AttachmentResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Attachment::class, AttachmentResource::class);
    }
}
