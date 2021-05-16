<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBidderListResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to GetBidderListRequest. | Response to a <b>GetBidderList</b> call, which retrieves all items the user is currently bidding on, or has won or purchased.
 * @subpackage Structs
 */
class GetBidderListResponseType extends AbstractResponseType
{
    /**
     * The Bidder
     * Meta information extracted from the WSDL
     * - documentation: Data for one eBay bidder.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserType $Bidder = null;
    /**
     * The BidItemArray
     * Meta information extracted from the WSDL
     * - documentation: Array of items the bidder has bid on, has won or has lost.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $BidItemArray = null;
    /**
     * Constructor method for GetBidderListResponseType
     * @uses GetBidderListResponseType::setBidder()
     * @uses GetBidderListResponseType::setBidItemArray()
     * @param \macropage\ebaysdk\trading\StructType\UserType $bidder
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\UserType $bidder = null, ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray = null)
    {
        $this
            ->setBidder($bidder)
            ->setBidItemArray($bidItemArray);
    }
    /**
     * Get Bidder value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getBidder(): ?\macropage\ebaysdk\trading\StructType\UserType
    {
        return $this->Bidder;
    }
    /**
     * Set Bidder value
     * @param \macropage\ebaysdk\trading\StructType\UserType $bidder
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType
     */
    public function setBidder(?\macropage\ebaysdk\trading\StructType\UserType $bidder = null): self
    {
        $this->Bidder = $bidder;
        
        return $this;
    }
    /**
     * Get BidItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getBidItemArray(): ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType
    {
        return $this->BidItemArray;
    }
    /**
     * Set BidItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray
     * @return \macropage\ebaysdk\trading\StructType\GetBidderListResponseType
     */
    public function setBidItemArray(?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $bidItemArray = null): self
    {
        $this->BidItemArray = $bidItemArray;
        
        return $this;
    }
}
