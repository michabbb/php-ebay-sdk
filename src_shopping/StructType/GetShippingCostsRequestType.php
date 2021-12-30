<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingCostsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Gets shipping costs for a listing. This is one of the ways a buyer or seller can obtain shipping cost information for an existing item (for which the caller is either the buyer or seller) at any point in the life of the listing,
 * before or after a buyer has committed to purchasing the item(s). This call works for both flat-rate shipping and calculated shipping. Flat-rate shipping costs are established by the seller before bidding occurs. Calculated shipping costs are
 * calculated by eBay with its shipping partners based on postal code. To determine whether a listing has ended, use <b>GetSingleItem</b>. It is best to call <b>GetShippingCosts</b> only after determining via <b>GetSingleItem</b> or
 * <b>findItemsAdvanced</b> (<a href="https://developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) that the item actually has shipping cost information.
 * @subpackage Structs
 */
class GetShippingCostsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The item ID that uniquely identifies the listing for which to retrieve the data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: Quantity of items sold to a single buyer and to be shipped together. <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySold = null;
    /**
     * The DestinationPostalCode
     * Meta information extracted from the WSDL
     * - documentation: Destination country postal code (or zip code, for US). Ignored if no country code is provided. Optional tag for some countries. More likely to be required for large countries. Ignored for flat-rate shipping.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DestinationPostalCode = null;
    /**
     * The DestinationCountryCode
     * Meta information extracted from the WSDL
     * - documentation: Destination country code. If <b>DestinationCountryCode</b> is US, postal code is required and represents US zip code. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DestinationCountryCode = null;
    /**
     * The IncludeDetails
     * Meta information extracted from the WSDL
     * - documentation: This field should be included and set to <b>true</b> if the user would like the <b>ShippingDetails</b> returned in the response. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeDetails = null;
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
    public function __construct(?string $itemID = null, ?int $quantitySold = null, ?string $destinationPostalCode = null, ?string $destinationCountryCode = null, ?bool $includeDetails = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
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
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold(): ?int
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setQuantitySold(?int $quantitySold = null): self
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        
        return $this;
    }
    /**
     * Get DestinationPostalCode value
     * @return string|null
     */
    public function getDestinationPostalCode(): ?string
    {
        return $this->DestinationPostalCode;
    }
    /**
     * Set DestinationPostalCode value
     * @param string $destinationPostalCode
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setDestinationPostalCode(?string $destinationPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationPostalCode) && !is_string($destinationPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationPostalCode, true), gettype($destinationPostalCode)), __LINE__);
        }
        $this->DestinationPostalCode = $destinationPostalCode;
        
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode(): ?string
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $destinationCountryCode
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setDestinationCountryCode(?string $destinationCountryCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CountryCodeType::valueIsValid($destinationCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\CountryCodeType', is_array($destinationCountryCode) ? implode(', ', $destinationCountryCode) : var_export($destinationCountryCode, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        
        return $this;
    }
    /**
     * Get IncludeDetails value
     * @return bool|null
     */
    public function getIncludeDetails(): ?bool
    {
        return $this->IncludeDetails;
    }
    /**
     * Set IncludeDetails value
     * @param bool $includeDetails
     * @return \macropage\ebaysdk\shopping\StructType\GetShippingCostsRequestType
     */
    public function setIncludeDetails(?bool $includeDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDetails) && !is_bool($includeDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDetails, true), gettype($includeDetails)), __LINE__);
        }
        $this->IncludeDetails = $includeDetails;
        
        return $this;
    }
}
