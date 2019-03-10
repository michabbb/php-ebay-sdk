<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a listing. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
 * recoupment terms before adding or verifying items. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and the agreement is located <a
 * href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>. The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser response.
 * @subpackage Structs
 */
class VerifyAddItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Root container holding all values that define a new listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * Constructor method for VerifyAddItemRequestType
     * @uses VerifyAddItemRequestType::setItem()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemRequestType
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
