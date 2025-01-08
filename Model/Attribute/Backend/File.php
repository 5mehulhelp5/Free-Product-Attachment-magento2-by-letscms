<?php
namespace Letscms\ProductAttachment\Model\Attribute\Backend;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Filesystem;
use Magento\MediaStorage\Model\File\Uploader;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Letscms\ProductAttachment\Helper\Data as Helper;
use Psr\Log\LoggerInterface;


class File extends AbstractBackend
{
    
    protected $_file;
    private $helper;
   
    protected $_logger;

    protected $_filesystem;

    /**
     * @var UploaderFactory
     */
    protected $_fileUploaderFactory;

    /**
     * @var Config
     */
  

    public function __construct(
        LoggerInterface $logger,
        Filesystem $filesystem,
        Filesystem\Driver\File $file,
        Helper $helper,
        UploaderFactory $fileUploaderFactory,
       
    ) {
        $this->_file = $file;
        $this->_filesystem = $filesystem;
        $this->_fileUploaderFactory = $fileUploaderFactory;
        $this->_logger = $logger;
        $this->helper = $helper;
       
    }

    public function afterSave($object)
    {
        $path = $this->_filesystem->getDirectoryRead(
            DirectoryList::MEDIA
        )->getAbsolutePath(
            'catalog/product/attachment/'
        );
        if (!$this->_file->isExists($path)) {
            $this->_file->createDirectory($path, 0777); // Create the directory with 0777 permissions
        }

        // Set the permissions for the directory (if needed)
        if (!$this->_file->isWritable($path)) {
            chmod($path, 0777); // Ensure it's writable by the server
        }
        $this->_logger->debug('File upload started for: ' . $this->getAttribute()->getName());
        $this->_logger->debug('$_FILES: ' . print_r($_FILES, true));
       

        $delete = $object->getData($this->getAttribute()->getName() . '_delete');

        if ($delete) {
            $fileName = $object->getData($this->getAttribute()->getName());
            $object->setData($this->getAttribute()->getName(), '');
            $this->getAttribute()->getEntity()->saveAttribute($object, $this->getAttribute()->getName());
            if ($this->_file->isExists($path . $fileName)) {
                $this->_file->deleteFile($path . $fileName);
            }
        }
        if (
            !isset($_FILES['product']['tmp_name'][$this->getAttribute()->getName()]) ||
            empty($_FILES['product']['tmp_name'][$this->getAttribute()->getName()])
        ) {
            $this->_logger->error('No file uploaded for attribute: ' . $this->getAttribute()->getName());
            
            return $this;
        }

        if (empty($_FILES['product']['tmp_name'][$this->getAttribute()->getName()])) {
            return $this;
        }

        $this->_logger->debug('Saving file to path: ' . $path);
        try {
            /** @var $uploader Uploader */
            $uploader = $this->_fileUploaderFactory->create([
                'fileId' => 'product[' . $this->getAttribute()->getName() . ']'
            ]);
            $uploader->setAllowedExtensions($this->getAllowedExtensions()); // Add allowed extensions
            $uploader->setAllowRenameFiles(true);
          

            $result = $uploader->save($path);
            $this->_logger->debug('Saving after file to path: ' . $result['file']);
            $object->setData($this->getAttribute()->getName(), $result['file']);
            $this->getAttribute()->getEntity()->saveAttribute($object, $this->getAttribute()->getName());
        } catch (\Exception $e) {
            if ($e->getCode() != Uploader::TMP_NAME_EMPTY) {
                $this->_logger->critical("TESTER lETSCMS ".$e);
            }
            throw new \Magento\Framework\Exception\LocalizedException(__('File upload failed. Please check file extension.'));
        }

        return $this;
    }
    public function getAllowedExtensions()
    {
        $AllowedExtensions = $this->helper->getConfig('ProductAttachment_General/ProductAttachmentGeneral/AllowedExtensions');

        if (isset($AllowedExtensions)) {
            return explode(',', $AllowedExtensions);
        }
        return ['pdf', 'doc', 'docx', 'jpg', 'png', 'txt']; // Fallback title
    }
}
