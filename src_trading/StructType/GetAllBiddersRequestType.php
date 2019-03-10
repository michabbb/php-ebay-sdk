<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBiddersRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetAllBidders</b> call, which is used to retrieve bidders from an active or recently-ended auction listing.
 * @subpackage Structs
 */
class GetAllBiddersRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b>
     * enumeration value that can be used is <code>ViewAll</code>. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The CallMode
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve
     * bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>.
     * - minOccurs: 0
     * @var string
     */
    public $CallMode;
    /**
     * The IncludeBiddingSummary
     * Meta informations extracted from the WSDL
     * - documentation: The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding
     * information on each bidder.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeBiddingSummary;
    /**
     * Constructor method for GetAllBiddersRequestType
     * @uses GetAllBiddersRequestType::setItemID()
     * @uses GetAllBiddersRequestType::setCallMode()
     * @uses GetAllBiddersRequestType::setIncludeBiddingSummary()
     * @param string $itemID
     * @param string $callMode
     * @param bool $includeBiddingSummary
     */
    public function __construct($itemID = null, $callMode = null, $includeBiddingSummary = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
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
     * Get CallMode value
     * @return string|null
     */
    public function getCallMode()
    {
        return $this->CallMode;
    }
    /**
     * Set CallMode value
     * @uses \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $callMode
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
     */
    public function setCallMode($callMode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::valueIsValid($callMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $callMode, implode(', ', \macropage\ebaysdk\trading\EnumType\GetAllBiddersModeCodeType::getValidValues())), __LINE__);
        }
        $this->CallMode = $callMode;
        return $this;
    }
    /**
     * Get IncludeBiddingSummary value
     * @return bool|null
     */
    public function getIncludeBiddingSummary()
    {
        return $this->IncludeBiddingSummary;
    }
    /**
     * Set IncludeBiddingSummary value
     * @param bool $includeBiddingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
     */
    public function setIncludeBiddingSummary($includeBiddingSummary = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeBiddingSummary) && !is_bool($includeBiddingSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeBiddingSummary)), __LINE__);
        }
        $this->IncludeBiddingSummary = $includeBiddingSummary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetAllBiddersRequestType
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
