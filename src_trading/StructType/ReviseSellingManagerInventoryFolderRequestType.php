<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerInventoryFolderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is uses to rename and/or move a Selling Manager Inventory folder. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to
 * use this call.
 * @subpackage Structs
 */
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This container is used to identify the Selling Manager Inventory folder that will be renamed and/or moved.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $Folder = null;
    /**
     * Constructor method for ReviseSellingManagerInventoryFolderRequestType
     * @uses ReviseSellingManagerInventoryFolderRequestType::setFolder()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder = null)
    {
        $this
            ->setFolder($folder);
    }
    /**
     * Get Folder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    public function getFolder(): ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
    {
        return $this->Folder;
    }
    /**
     * Set Folder value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderRequestType
     */
    public function setFolder(?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder = null): self
    {
        $this->Folder = $folder;
        
        return $this;
    }
}
