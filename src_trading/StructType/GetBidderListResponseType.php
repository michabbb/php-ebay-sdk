<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBidderListResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response to a <b>GetBidderList</b> call, which retrieves all items the user is currently bidding on, or has won or purchased. | Response to GetBidderListRequest.
 * @subpackage Structs
 */
class GetBidderListResponseType extends AbstractResponseType
{
    /**
     * The Bidder
     * Meta informations extracted from the WSDL
     * - documentation: Data for one eBay bidder.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $Bidder;
    /**
     * The BidItemArray
     * Meta informations extracted from the WSDL
     * - documentation: Array of items the bidder has bid on, has won or has lost.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public $BidItemArray;
    /**
     * Constructor method for GetBidderListResponseType
     * @uses GetBidderListResponseType::setBidder()
     * @uses GetBidderListResponseType::setBidItemArray()
     * @param \macropage\ebaysdk\trading\StructType\UserType $bidder
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\UserType $bidder = null, \macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray = null)
    {
        $this
            ->setBidder($bidder)
            ->setBidItemArray($bidItemArray);
    }
    /**
     * Get Bidder value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getBidder()
    {
        return $this->Bidder;
    }
    /**
     * Set Bidder value
     * @param \macropage\ebaysdk\trading\StructType\UserType $bidder
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType
     */
    public function setBidder(\macropage\ebaysdk\trading\StructType\UserType $bidder = null)
    {
        $this->Bidder = $bidder;
        return $this;
    }
    /**
     * Get BidItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getBidItemArray()
    {
        return $this->BidItemArray;
    }
    /**
     * Set BidItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType
     */
    public function setBidItemArray(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray = null)
    {
        $this->BidItemArray = $bidItemArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType
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
