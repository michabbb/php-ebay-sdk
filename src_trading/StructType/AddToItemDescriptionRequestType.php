<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToItemDescriptionRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request of the <b>AddToItemDescription</b> call, which is used to add additional text to an active listing's item description. Upon a successful call, the text supplied in this call will be inserted into the active listing,
 * with a horizontal rule separating the original item description and the additional text that was added with this call.
 * @subpackage Structs
 */
class AddToItemDescriptionRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to identify the active listing that will be updated with additional text in the item description field. The Item ID is a unique identifier for a listing. | Type that represents the unique identifier for an eBay
     * listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the text that will be appended to the end of the active listing's item description. The text provided in this field must abide by the same rules/restrictions applicable to the original item description
     * supplied at listing time. For more information on these rules and restrictions, see the <a href="http://developer.ebay.com/Devzone/XML/docs/Reference/ebay/types/ItemType.html#Description">Description field of ItemType</a>.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for AddToItemDescriptionRequestType
     * @uses AddToItemDescriptionRequestType::setItemID()
     * @uses AddToItemDescriptionRequestType::setDescription()
     * @param string $itemID
     * @param string $description
     */
    public function __construct($itemID = null, $description = null)
    {
        $this
            ->setItemID($itemID)
            ->setDescription($description);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddToItemDescriptionRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
