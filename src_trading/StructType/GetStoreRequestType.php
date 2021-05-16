<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve detailed information on a seller's eBay Store, including store theme information and eBay Store category hierarchy.
 * @subpackage Structs
 */
class GetStoreRequestType extends AbstractRequestType
{
    /**
     * The CategoryStructureOnly
     * Meta information extracted from the WSDL
     * - documentation: Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data. If this field is not included or set to <code>false</code>, store category hierarchy and
     * all store configuration data is returned.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CategoryStructureOnly = null;
    /**
     * The RootCategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay Store category. This field is used if the user wants to isolate the category hierarchy data to one particular eBay category (and its subcategories if applicable). The <b>LevelLimit</b> value will
     * determine how many additional levels of categories are returned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RootCategoryID = null;
    /**
     * The LevelLimit
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to limit the number of levels of eBay Store categories that are returned. To return only top-level eBay Store categories, the user can include this field and set its value to <code>1</code> (and not use a
     * <b>RootCategoryID</b> value). To retrieve a specific eBay Store Category and that category's child categories, the user could specify the unique eBay Store Category ID in the <b>RootCategoryID</b> field and then set the <b>LevelLimit</b> value to
     * <code>2</code>. <br/><br/> If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. Currently, eBay Stores support only three levels of store categories.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LevelLimit = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for an eBay Store owner. This field is only required if the user wants to view the eBay Store theme and category information for a different eBay Store owner. If this field is omitted, eBay Store theme and
     * category information is returned for the eBay Store owner that is making the call. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * Constructor method for GetStoreRequestType
     * @uses GetStoreRequestType::setCategoryStructureOnly()
     * @uses GetStoreRequestType::setRootCategoryID()
     * @uses GetStoreRequestType::setLevelLimit()
     * @uses GetStoreRequestType::setUserID()
     * @param bool $categoryStructureOnly
     * @param int $rootCategoryID
     * @param int $levelLimit
     * @param string $userID
     */
    public function __construct(?bool $categoryStructureOnly = null, ?int $rootCategoryID = null, ?int $levelLimit = null, ?string $userID = null)
    {
        $this
            ->setCategoryStructureOnly($categoryStructureOnly)
            ->setRootCategoryID($rootCategoryID)
            ->setLevelLimit($levelLimit)
            ->setUserID($userID);
    }
    /**
     * Get CategoryStructureOnly value
     * @return bool|null
     */
    public function getCategoryStructureOnly(): ?bool
    {
        return $this->CategoryStructureOnly;
    }
    /**
     * Set CategoryStructureOnly value
     * @param bool $categoryStructureOnly
     * @return \macropage\ebaysdk\trading\StructType\GetStoreRequestType
     */
    public function setCategoryStructureOnly(?bool $categoryStructureOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($categoryStructureOnly) && !is_bool($categoryStructureOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($categoryStructureOnly, true), gettype($categoryStructureOnly)), __LINE__);
        }
        $this->CategoryStructureOnly = $categoryStructureOnly;
        
        return $this;
    }
    /**
     * Get RootCategoryID value
     * @return int|null
     */
    public function getRootCategoryID(): ?int
    {
        return $this->RootCategoryID;
    }
    /**
     * Set RootCategoryID value
     * @param int $rootCategoryID
     * @return \macropage\ebaysdk\trading\StructType\GetStoreRequestType
     */
    public function setRootCategoryID(?int $rootCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($rootCategoryID) && !(is_int($rootCategoryID) || ctype_digit($rootCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rootCategoryID, true), gettype($rootCategoryID)), __LINE__);
        }
        $this->RootCategoryID = $rootCategoryID;
        
        return $this;
    }
    /**
     * Get LevelLimit value
     * @return int|null
     */
    public function getLevelLimit(): ?int
    {
        return $this->LevelLimit;
    }
    /**
     * Set LevelLimit value
     * @param int $levelLimit
     * @return \macropage\ebaysdk\trading\StructType\GetStoreRequestType
     */
    public function setLevelLimit(?int $levelLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($levelLimit) && !(is_int($levelLimit) || ctype_digit($levelLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelLimit, true), gettype($levelLimit)), __LINE__);
        }
        $this->LevelLimit = $levelLimit;
        
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetStoreRequestType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
}
