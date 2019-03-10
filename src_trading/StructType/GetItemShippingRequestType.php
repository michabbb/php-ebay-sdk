<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemShippingRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has
 * offered with the listing. This call will also return <b>PickUpInStoreDetails.EligibleForPickupDropOff</b> and <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flags if the item is available for buyer pick-up through the In-Store Pickup or Click
 * and Collect features.
 * @subpackage Structs
 */
class GetItemShippingRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing for which to retrieve estimated shipping costs for all offered shipping service options. The <b>ItemID</b> value passed into this field should be for an listing that offers at least one calculated
     * shipping service option, and for an item that has yet to be shipped. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the quantity of the item. The <b>QuantitySold</b> value defaults to <code>1</code> if not specified. If a value greater than <code>1</code> is specified in this field, the shipping service costs returned
     * in the response will reflect the expense to ship multiple quantity of an item.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The DestinationPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the
     * lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationPostalCode;
    /**
     * The DestinationCountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and
     * some countries will accept either one or the other. <br><br> Two-digit country codes can be found in <a href="types/CountryCodeType.html">CountryCodeType</a>.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * Constructor method for GetItemShippingRequestType
     * @uses GetItemShippingRequestType::setItemID()
     * @uses GetItemShippingRequestType::setQuantitySold()
     * @uses GetItemShippingRequestType::setDestinationPostalCode()
     * @uses GetItemShippingRequestType::setDestinationCountryCode()
     * @param string $itemID
     * @param int $quantitySold
     * @param string $destinationPostalCode
     * @param string $destinationCountryCode
     */
    public function __construct($itemID = null, $quantitySold = null, $destinationPostalCode = null, $destinationCountryCode = null)
    {
        $this
            ->setItemID($itemID)
            ->setQuantitySold($quantitySold)
            ->setDestinationPostalCode($destinationPostalCode)
            ->setDestinationCountryCode($destinationCountryCode);
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
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType
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
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !is_numeric($quantitySold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get DestinationPostalCode value
     * @return string|null
     */
    public function getDestinationPostalCode()
    {
        return $this->DestinationPostalCode;
    }
    /**
     * Set DestinationPostalCode value
     * @param string $destinationPostalCode
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType
     */
    public function setDestinationPostalCode($destinationPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationPostalCode) && !is_string($destinationPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationPostalCode)), __LINE__);
        }
        $this->DestinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationCountryCode
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationCountryCode, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetItemShippingRequestType
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
