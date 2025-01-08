<?php

namespace Letscms\ProductAttachment\Model\Config;

use Magento\Framework\Option\ArrayInterface;
use Magento\User\Model\ResourceModel\User\CollectionFactory;

class Options implements ArrayInterface
{
    public function toArray()
    {
        $options = [];
        $options[] = [
             'jpg'
             => 'jpg',
        ];
        $options[] = [
            'png' => 'png',
        ];
        $options[] = [
           'pdf'=> 'pdf',
        ];
        $options[] = [
          'doc' => 'doc',
        ];
        $options[] = [
            'docx'=> 'docx',
        ];
        $options[] = [
             'csv' => 'csv',
        ];
       
        return $options;
    }
    public function toOptionArray()
    {
        $options = [];
        $options[] = [
            'value' => 'jpg',
            'label' => 'jpg',
        ];
        $options[] = [
            'value' => 'png',
            'label' => 'png',
        ];
        $options[] = [
            'value' => 'pdf',
            'label' => 'pdf',
        ];
        $options[] = [
            'value' => 'doc',
            'label' => 'doc',
        ];
        $options[] = [
            'value' => 'docx',
            'label' => 'docx',
        ];
        $options[] = [
            'value' => 'csv',
            'label' => 'csv',
        ];

        return $options;
    }
}
