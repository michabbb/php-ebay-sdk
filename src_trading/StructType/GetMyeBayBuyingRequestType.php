<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayBuyingRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * @subpackage Structs
 */
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    /**
     * The WatchList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List. <br><br> The user also has the option of using pagination and sorting for the list of
     * watched items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $WatchList;
    /**
     * The BidList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid. <br><br> The user also has the option of using pagination and sorting for the
     * list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $BidList;
    /**
     * The BestOfferList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer. <br><br> The user also has the option of using pagination and
     * sorting for the list of items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $BestOfferList;
    /**
     * The WonList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won. <br><br> The user also has the option of using pagination and sorting
     * for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $WonList;
    /**
     * The LostList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost. <br><br> The user also has the option of using pagination and
     * sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $LostList;
    /**
     * The FavoriteSearches
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public $FavoriteSearches;
    /**
     * The FavoriteSellers
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public $FavoriteSellers;
    /**
     * The SecondChanceOffer
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public $SecondChanceOffer;
    /**
     * The BidAssistantList
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidAssistantListType
     */
    public $BidAssistantList;
    /**
     * The DeletedFromWonList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page. <br><br> The user
     * also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $DeletedFromWonList;
    /**
     * The DeletedFromLostList
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page. <br><br> The
     * user also has the option of using pagination and sorting for the list of auction items that will be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $DeletedFromLostList;
    /**
     * The BuyingSummary
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts
     * and values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public $BuyingSummary;
    /**
     * The UserDefinedLists
     * Meta informations extracted from the WSDL
     * - documentation: Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of
     * items, saved sellers, and/or saved searches.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public $UserDefinedLists;
    /**
     * The HideVariations
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the
     * <b>Variations</b> node is returned for all multiple-variation listings in the response. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $HideVariations;
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
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList = null, \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches = null, \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers = null, \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer = null, \macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList = null, \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary = null, \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists = null, $hideVariations = null)
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
    public function getWatchList()
    {
        return $this->WatchList;
    }
    /**
     * Set WatchList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setWatchList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $watchList = null)
    {
        $this->WatchList = $watchList;
        return $this;
    }
    /**
     * Get BidList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBidList()
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBidList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bidList = null)
    {
        $this->BidList = $bidList;
        return $this;
    }
    /**
     * Get BestOfferList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBestOfferList()
    {
        return $this->BestOfferList;
    }
    /**
     * Set BestOfferList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBestOfferList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $bestOfferList = null)
    {
        $this->BestOfferList = $bestOfferList;
        return $this;
    }
    /**
     * Get WonList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getWonList()
    {
        return $this->WonList;
    }
    /**
     * Set WonList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setWonList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $wonList = null)
    {
        $this->WonList = $wonList;
        return $this;
    }
    /**
     * Get LostList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getLostList()
    {
        return $this->LostList;
    }
    /**
     * Set LostList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setLostList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $lostList = null)
    {
        $this->LostList = $lostList;
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSearches()
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSearches(\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSearches = null)
    {
        $this->FavoriteSearches = $favoriteSearches;
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getFavoriteSellers()
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setFavoriteSellers(\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $favoriteSellers = null)
    {
        $this->FavoriteSellers = $favoriteSellers;
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getSecondChanceOffer()
    {
        return $this->SecondChanceOffer;
    }
    /**
     * Set SecondChanceOffer value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setSecondChanceOffer(\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $secondChanceOffer = null)
    {
        $this->SecondChanceOffer = $secondChanceOffer;
        return $this;
    }
    /**
     * Get BidAssistantList value
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType|null
     */
    public function getBidAssistantList()
    {
        return $this->BidAssistantList;
    }
    /**
     * Set BidAssistantList value
     * @param \macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBidAssistantList(\macropage\ebaysdk\trading\StructType\BidAssistantListType $bidAssistantList = null)
    {
        $this->BidAssistantList = $bidAssistantList;
        return $this;
    }
    /**
     * Get DeletedFromWonList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromWonList()
    {
        return $this->DeletedFromWonList;
    }
    /**
     * Set DeletedFromWonList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromWonList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromWonList = null)
    {
        $this->DeletedFromWonList = $deletedFromWonList;
        return $this;
    }
    /**
     * Get DeletedFromLostList value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getDeletedFromLostList()
    {
        return $this->DeletedFromLostList;
    }
    /**
     * Set DeletedFromLostList value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setDeletedFromLostList(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $deletedFromLostList = null)
    {
        $this->DeletedFromLostList = $deletedFromLostList;
        return $this;
    }
    /**
     * Get BuyingSummary value
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType|null
     */
    public function getBuyingSummary()
    {
        return $this->BuyingSummary;
    }
    /**
     * Set BuyingSummary value
     * @param \macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setBuyingSummary(\macropage\ebaysdk\trading\StructType\ItemListCustomizationType $buyingSummary = null)
    {
        $this->BuyingSummary = $buyingSummary;
        return $this;
    }
    /**
     * Get UserDefinedLists value
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType|null
     */
    public function getUserDefinedLists()
    {
        return $this->UserDefinedLists;
    }
    /**
     * Set UserDefinedLists value
     * @param \macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setUserDefinedLists(\macropage\ebaysdk\trading\StructType\MyeBaySelectionType $userDefinedLists = null)
    {
        $this->UserDefinedLists = $userDefinedLists;
        return $this;
    }
    /**
     * Get HideVariations value
     * @return bool|null
     */
    public function getHideVariations()
    {
        return $this->HideVariations;
    }
    /**
     * Set HideVariations value
     * @param bool $hideVariations
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
     */
    public function setHideVariations($hideVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideVariations) && !is_bool($hideVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideVariations)), __LINE__);
        }
        $this->HideVariations = $hideVariations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingRequestType
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
