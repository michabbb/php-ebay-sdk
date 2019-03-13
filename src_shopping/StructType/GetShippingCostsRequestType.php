<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingCostsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Gets shipping costs for a listing. This is one of the ways a buyer or seller can obtain shipping cost information for an existing item (for which the caller is either the buyer or seller) at any point in the life of the listing,
 * before or after a buyer has committed to purchasing the item(s). This call works for both flat-rate shipping and calculated shipping. Flat-rate shipping costs are established by the seller before bidding occurs. Calculated shipping costs are
 * calculated by eBay with its shipping partners based on postal code. To determine whether a listing has ended, use <b>GetSingleItem</b>. It is best to call <b>GetShippingCosts</b> only after determining via <b>GetSingleItem</b> or
 * <b>findItemsAdvanced</b> (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) that the item actually has shipping cost information.
 * @subpackage Structs
 */
class GetShippingCostsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The item ID that uniquely identifies the listing for which to retrieve the data.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of items sold to a single buyer and to be shipped together. <br>
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The DestinationPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Destination country postal code (or zip code, for US). Ignored if no country code is provided. Optional tag for some countries. More likely to be required for large countries. Ignored for flat-rate shipping.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationPostalCode;
    /**
     * The DestinationCountryCode
     * Meta informations extracted from the WSDL
     * - documentation: Destination country code. If <b>DestinationCountryCode</b> is US, postal code is required and represents US zip code. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * The IncludeDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field should be included and set to <b>true</b> if the user would like the <b>ShippingDetails</b> returned in the response. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeDetails;
    /**
     * Constructor method for GetShippingCostsRequestType
     * @uses GetShippingCostsRequestType::setItemID()
     * @uses GetShippingCostsRequestType::setQuantitySold()
     * @uses GetShippingCostsRequestType::setDestinationPostalCode()
     * @uses GetShippingCostsRequestType::setDestinationCountryCode()
     * @uses GetShippingCostsRequestType::setIncludeDetails()
     * @param string $itemID
     * @param int $quantitySold
     * @param string $destinationPostalCode
     * @param string $destinationCountryCode
     * @param bool $includeDetails
     */
    public function __construct($itemID = null, $quantitySold = null, $destinationPostalCode = null, $destinationCountryCode = null, $includeDetails = null)
    {
        $this
            ->setItemID($itemID)
            ->setQuantitySold($quantitySold)
            ->setDestinationPostalCode($destinationPostalCode)
            ->setDestinationCountryCode($destinationCountryCode)
            ->setIncludeDetails($includeDetails);
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
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
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
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
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
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationCountryCode
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationCountryCode, implode(', ', \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    /**
     * Get IncludeDetails value
     * @return bool|null
     */
    public function getIncludeDetails()
    {
        return $this->IncludeDetails;
    }
    /**
     * Set IncludeDetails value
     * @param bool $includeDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setIncludeDetails($includeDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeDetails) && !is_bool($includeDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeDetails)), __LINE__);
        }
        $this->IncludeDetails = $includeDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
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
