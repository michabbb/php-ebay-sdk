<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayBuyingRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * @subpackage Structs
 */
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    /**
     * The WatchList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List. <br><br> The user also has the option of using pagination and sorting for the list of
     * watched items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $WatchList = null;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid. <br><br> The user also has the option of using pagination and sorting for the
     * list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $BidList = null;
    /**
     * The BestOfferList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer. <br><br> The user also has the option of using pagination and
     * sorting for the list of items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $BestOfferList = null;
    /**
     * The WonList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won. <br><br> The user also has the option of using pagination and sorting
     * for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $WonList = null;
    /**
     * The LostList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost. <br><br> The user also has the option of using pagination and
     * sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $LostList = null;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $FavoriteSearches = null;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $FavoriteSellers = null;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $SecondChanceOffer = null;
    /**
     * The BidAssistantList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidAssistantListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BidAssistantListType $BidAssistantList = null;
    /**
     * The DeletedFromWonList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page. <br><br> The user
     * also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $DeletedFromWonList = null;
    /**
     * The DeletedFromLostList
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page. <br><br> The
     * user also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $DeletedFromLostList = null;
    /**
     * The BuyingSummary
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts
     * and values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $BuyingSummary = null;
    /**
     * The UserDefinedLists
     * Meta information extracted from the WSDL
     * - documentation: Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of
     * items, saved sellers, and/or saved searches.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $UserDefinedLists = null;
    /**
     * The HideVariations
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HideVariations = null;
    /**
     * Constructor method for GetMyeBayBuyingRequestType
     * @uses GetMyeBayBuyingRequestType::setWatchList()
     * @uses GetMyeBayBuyingRequestType::setBidList()
     * @uses GetMyeBayBuyingRequestType::setBestOfferList()
     * @uses GetMyeBayBuyingRequestType::setWonList()
     * @uses GetMyeBayBuyingRequestType::setLostList()
     * @uses GetMyeBayBuyingRequestType::setFavoriteSearches()
     * @uses GetMyeBayBuyingRequestType::setFavoriteSellers()
     * @uses GetMyeBayBuyingRequestType::setSecondChanceOffer()
     * @uses GetMyeBayBuyingRequestType::setBidAssistantList()
     * @uses GetMyeBayBuyingRequestType::setDeletedFromWonList()
     * @uses GetMyeBayBuyingRequestType::setDeletedFromLostList()
     * @uses GetMyeBayBuyingRequestType::setBuyingSummary()
     * @uses GetMyeBayBuyingRequestType::setUserDefinedLists()
     * @uses GetMyeBayBuyingRequestType::setHideVariations()
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer
     * @param \macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists
     * @param bool $hideVariations
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList = null, ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches = null, ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers = null, ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer = null, ?\macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList = null, ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary = null, ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists = null, ?bool $hideVariations = null)
    {
        $this
            ->setWatchList($watchList)
            ->setBidList($bidList)
            ->setBestOfferList($bestOfferList)
            ->setWonList($wonList)
            ->setLostList($lostList)
            ->setFavoriteSearches($favoriteSearches)
            ->setFavoriteSellers($favoriteSellers)
            ->setSecondChanceOffer($secondChanceOffer)
            ->setBidAssistantList($bidAssistantList)
            ->setDeletedFromWonList($deletedFromWonList)
            ->setDeletedFromLostList($deletedFromLostList)
            ->setBuyingSummary($buyingSummary)
            ->setUserDefinedLists($userDefinedLists)
            ->setHideVariations($hideVariations);
    }
    /**
     * Get WatchList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getWatchList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->WatchList;
    }
    /**
     * Set WatchList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setWatchList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList = null): self
    {
        $this->WatchList = $watchList;
        
        return $this;
    }
    /**
     * Get BidList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBidList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBidList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null): self
    {
        $this->BidList = $bidList;
        
        return $this;
    }
    /**
     * Get BestOfferList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBestOfferList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->BestOfferList;
    }
    /**
     * Set BestOfferList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBestOfferList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList = null): self
    {
        $this->BestOfferList = $bestOfferList;
        
        return $this;
    }
    /**
     * Get WonList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getWonList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->WonList;
    }
    /**
     * Set WonList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setWonList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList = null): self
    {
        $this->WonList = $wonList;
        
        return $this;
    }
    /**
     * Get LostList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getLostList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->LostList;
    }
    /**
     * Set LostList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setLostList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList = null): self
    {
        $this->LostList = $lostList;
        
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSearches(): ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSearches(?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches = null): self
    {
        $this->FavoriteSearches = $favoriteSearches;
        
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSellers(): ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSellers(?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers = null): self
    {
        $this->FavoriteSellers = $favoriteSellers;
        
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getSecondChanceOffer(): ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType
    {
        return $this->SecondChanceOffer;
    }
    /**
     * Set SecondChanceOffer value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setSecondChanceOffer(?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer = null): self
    {
        $this->SecondChanceOffer = $secondChanceOffer;
        
        return $this;
    }
    /**
     * Get BidAssistantList value
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType|null
     */
    public function getBidAssistantList(): ?\macropage\ebaysdk\trading\StructType\BidAssistantListType
    {
        return $this->BidAssistantList;
    }
    /**
     * Set BidAssistantList value
     * @param \macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBidAssistantList(?\macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList = null): self
    {
        $this->BidAssistantList = $bidAssistantList;
        
        return $this;
    }
    /**
     * Get DeletedFromWonList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromWonList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->DeletedFromWonList;
    }
    /**
     * Set DeletedFromWonList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromWonList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList = null): self
    {
        $this->DeletedFromWonList = $deletedFromWonList;
        
        return $this;
    }
    /**
     * Get DeletedFromLostList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromLostList(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->DeletedFromLostList;
    }
    /**
     * Set DeletedFromLostList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromLostList(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList = null): self
    {
        $this->DeletedFromLostList = $deletedFromLostList;
        
        return $this;
    }
    /**
     * Get BuyingSummary value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBuyingSummary(): ?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType
    {
        return $this->BuyingSummary;
    }
    /**
     * Set BuyingSummary value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBuyingSummary(?\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary = null): self
    {
        $this->BuyingSummary = $buyingSummary;
        
        return $this;
    }
    /**
     * Get UserDefinedLists value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getUserDefinedLists(): ?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType
    {
        return $this->UserDefinedLists;
    }
    /**
     * Set UserDefinedLists value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setUserDefinedLists(?\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists = null): self
    {
        $this->UserDefinedLists = $userDefinedLists;
        
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations(): ?bool
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setHideVariations(?bool $hideVariations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideVariations, true), gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        
        return $this;
    }
}
