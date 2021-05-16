<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBiddersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetAllBidders</b> call, which is used to retrieve bidders from an active or recently-ended auction listing.
 * @subpackage Structs
 */
class GetAllBiddersRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b>
     * enumeration value that can be used is <code>ViewAll</code>. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The CallMode
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve
     * bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallMode = null;
    /**
     * The IncludeBiddingSummary
     * Meta information extracted from the WSDL
     * - documentation: The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding
     * information on each bidder.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeBiddingSummary = null;
    /**
     * Constructor method for GetAllBiddersRequestType
     * @uses GetAllBiddersRequestType::setItemID()
     * @uses GetAllBiddersRequestType::setCallMode()
     * @uses GetAllBiddersRequestType::setIncludeBiddingSummary()
     * @param string $itemID
     * @param string $callMode
     * @param bool $includeBiddingSummary
     */
    public function __construct(?string $itemID = null, ?string $callMode = null, ?bool $includeBiddingSummary = null)
    {
        $this
            ->setItemID($itemID)
            ->setCallMode($callMode)
            ->setIncludeBiddingSummary($includeBiddingSummary);
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
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
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
     * Get CallMode value
     * @return string|null
     */
    public function getCallMode(): ?string
    {
        return $this->CallMode;
    }
    /**
     * Set CallMode value
     * @uses \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $callMode
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
     */
    public function setCallMode(?string $callMode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::valueIsValid($callMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType', is_array($callMode) ? implode(', ', $callMode) : var_export($callMode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::getValidValues())), __LINE__);
        }
        $this->CallMode = $callMode;
        
        return $this;
    }
    /**
     * Get IncludeBiddingSummary value
     * @return bool|null
     */
    public function getIncludeBiddingSummary(): ?bool
    {
        return $this->IncludeBiddingSummary;
    }
    /**
     * Set IncludeBiddingSummary value
     * @param bool $includeBiddingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
     */
    public function setIncludeBiddingSummary(?bool $includeBiddingSummary = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeBiddingSummary) && !is_bool($includeBiddingSummary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeBiddingSummary, true), gettype($includeBiddingSummary)), __LINE__);
        }
        $this->IncludeBiddingSummary = $includeBiddingSummary;
        
        return $this;
    }
}
