<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToItemDescriptionRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request of the <b>AddToItemDescription</b> call, which is used to add additional text to an active listing's item description. Upon a successful call, the text supplied in this call will be inserted into the active listing,
 * with a horizontal rule separating the original item description and the additional text that was added with this call.
 * @subpackage Structs
 */
class AddToItemDescriptionRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is used to identify the active listing that will be updated with additional text in the item description field. The Item ID is a unique identifier for a listing. | Type that represents the unique identifier for an eBay
     * listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the text that will be appended to the end of the active listing's item description. The text provided in this field must abide by the same rules/restrictions applicable to the original item description
     * supplied at listing time. For more information on these rules and restrictions, see the <a href="http://developer.ebay.com/Devzone/XML/docs/Reference/ebay/types/ItemType.html#Description">Description field of ItemType</a>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for AddToItemDescriptionRequestType
     * @uses AddToItemDescriptionRequestType::setItemID()
     * @uses AddToItemDescriptionRequestType::setDescription()
     * @param string $itemID
     * @param string $description
     */
    public function __construct(?string $itemID = null, ?string $description = null)
    {
        $this
            ->setItemID($itemID)
            ->setDescription($description);
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
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType
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
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
