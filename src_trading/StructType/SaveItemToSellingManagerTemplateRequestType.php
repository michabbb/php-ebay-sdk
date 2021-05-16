<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveItemToSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates a Selling Manager template based on an existing eBay listing. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use
 * this call.
 * @subpackage Structs
 */
class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing which should be used as a model to create the Selling Manager template and save it to Selling Manager inventory. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: Associates the new template with a product.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductID = null;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - documentation: Name associated with the template. If no name is submitted, the template will be named automatically.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TemplateName = null;
    /**
     * Constructor method for SaveItemToSellingManagerTemplateRequestType
     * @uses SaveItemToSellingManagerTemplateRequestType::setItemID()
     * @uses SaveItemToSellingManagerTemplateRequestType::setProductID()
     * @uses SaveItemToSellingManagerTemplateRequestType::setTemplateName()
     * @param string $itemID
     * @param int $productID
     * @param string $templateName
     */
    public function __construct(?string $itemID = null, ?int $productID = null, ?string $templateName = null)
    {
        $this
            ->setItemID($itemID)
            ->setProductID($productID)
            ->setTemplateName($templateName);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID(): ?int
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setProductID(?int $productID = null): self
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
    /**
     * Get TemplateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->TemplateName;
    }
    /**
     * Set TemplateName value
     * @param string $templateName
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateRequestType
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->TemplateName = $templateName;
        
        return $this;
    }
}
