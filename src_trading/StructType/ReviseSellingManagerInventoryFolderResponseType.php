<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseSellingManagerInventoryFolderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the status of a revise folder operation.
 * @subpackage Structs
 */
class ReviseSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - documentation: This container will show the results of the action made on the Selling Manager Inventory folder.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $Folder = null;
    /**
     * Constructor method for ReviseSellingManagerInventoryFolderResponseType
     * @uses ReviseSellingManagerInventoryFolderResponseType::setFolder()
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseSellingManagerInventoryFolderResponseType
     */
    public function setFolder(?\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $folder = null): self
    {
        $this->Folder = $folder;
        
        return $this;
    }
}
