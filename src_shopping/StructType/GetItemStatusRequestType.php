<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemStatusRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request type of the <b>GetItemStatus</b> call. This call retrieves the current status of up to 20 eBay listings.
 * @subpackage Structs
 */
class GetItemStatusRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * Constructor method for GetItemStatusRequestType
     * @uses GetItemStatusRequestType::setItemID()
     * @param string[] $itemID
     */
    public function __construct(array $itemID = array())
    {
        $this
            ->setItemID($itemID);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType
     */
    public function setItemID(array $itemID = array())
    {
        foreach ($itemID as $getItemStatusRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($getItemStatusRequestTypeItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($getItemStatusRequestTypeItemIDItem) ? get_class($getItemStatusRequestTypeItemIDItem) : gettype($getItemStatusRequestTypeItemIDItem)), __LINE__);
            }
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType
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
