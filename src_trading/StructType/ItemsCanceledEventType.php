<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemsCanceledEventType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ItemsCanceledEventType extends AbstractResponseType
{
    /**
     * The CanceledItemIDArray
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $CanceledItemIDArray = null;
    /**
     * The EligibleForRelist
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleForRelist = null;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerID = null;
    /**
     * Constructor method for ItemsCanceledEventType
     * @uses ItemsCanceledEventType::setCanceledItemIDArray()
     * @uses ItemsCanceledEventType::setEligibleForRelist()
     * @uses ItemsCanceledEventType::setSellerID()
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray
     * @param bool $eligibleForRelist
     * @param string $sellerID
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray = null, ?bool $eligibleForRelist = null, ?string $sellerID = null)
    {
        $this
            ->setCanceledItemIDArray($canceledItemIDArray)
            ->setEligibleForRelist($eligibleForRelist)
            ->setSellerID($sellerID);
    }
    /**
     * Get CanceledItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getCanceledItemIDArray(): ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType
    {
        return $this->CanceledItemIDArray;
    }
    /**
     * Set CanceledItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
     */
    public function setCanceledItemIDArray(?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray = null): self
    {
        $this->CanceledItemIDArray = $canceledItemIDArray;
        
        return $this;
    }
    /**
     * Get EligibleForRelist value
     * @return bool|null
     */
    public function getEligibleForRelist(): ?bool
    {
        return $this->EligibleForRelist;
    }
    /**
     * Set EligibleForRelist value
     * @param bool $eligibleForRelist
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
     */
    public function setEligibleForRelist(?bool $eligibleForRelist = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForRelist) && !is_bool($eligibleForRelist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleForRelist, true), gettype($eligibleForRelist)), __LINE__);
        }
        $this->EligibleForRelist = $eligibleForRelist;
        
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID(): ?string
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
     */
    public function setSellerID(?string $sellerID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        
        return $this;
    }
}
