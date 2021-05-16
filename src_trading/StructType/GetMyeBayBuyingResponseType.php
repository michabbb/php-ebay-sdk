<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayBuyingResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * @subpackage Structs
 */
class GetMyeBayBuyingResponseType extends AbstractResponseType
{
    /**
     * The BuyingSummary
     * Meta information extracted from the WSDL
     * - documentation: This container consists of buying/bidding activity counts and values. For this container to be returned, the user must include the <b>BuyingSummary.Include</b> field in the request and set its value to <code>true</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyingSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BuyingSummaryType $BuyingSummary = null;
    /**
     * The WatchList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on the eBay user's Watch List. This container will be returned if the eBay user has one or more items on their Watch List. <br><br> This container will not be returned in the response (even if
     * there are items on the Watch List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WatchList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $WatchList = null;
    /**
     * The BidList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has bid. This container will be returned if the eBay user has bid on one or more auction items. <br><br> This container will not be returned in the response (even if
     * there are items on the Bid List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BidList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $BidList = null;
    /**
     * The BestOfferList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on which the eBay user has made Best Offers. This container will be returned if the eBay user has made one or more Best Offers. <br><br> This container will not be returned in the response (even
     * if user has made Best Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>BestOfferList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $BestOfferList = null;
    /**
     * The WonList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has won. This container will be returned if the eBay user has won one or more auction items. <br><br> This container will not be returned in the response (even if
     * there are items on the Won List) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>WonList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $WonList = null;
    /**
     * The LostList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has bid on but lost. This container will be returned if the eBay user has lost one or more auction items. <br><br> This container will not be returned in the
     * response (even if the buyer has lost one or more auction items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>LostList.Include</b> field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $LostList = null;
    /**
     * The FavoriteSearches
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the eBay user's saved searches. This container will be returned if the eBay user has one or more saved searches. <br><br> This container will not be returned in the response (even if the user has saved
     * searches) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSearches.Include</b> field is omitted or set to <code>false</code>. <br><br> This container consists of the search name, search query, and other search
     * elements. The user can copy and paste the URL in the <b>SearchQuery</b> field into a browser to view the search results again.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $FavoriteSearches = null;
    /**
     * The FavoriteSellers
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the eBay user's saved sellers. This container will be returned if the eBay user has one or more saved sellers. <br><br> This container will not be returned in the response (even if the user has saved
     * sellers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>FavoriteSellers.Include</b> field is omitted or set to <code>false</code>. <br><br> This container consists of the saved sellers' user IDs and eBay Store names
     * (if applicable).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $FavoriteSellers = null;
    /**
     * The SecondChanceOffer
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the items on which the eBay user has received a Second Chance Offer. This container will be returned if the eBay user has made one or more Second Chance Offers. <br><br> This container will not be returned
     * in the response (even if user has received Second Chance Offers) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>SecondChanceOffer.Include</b> field is omitted or set to <code>false</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    protected array $SecondChanceOffer = [];
    /**
     * The BidAssistantList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\BidGroupArrayType $BidAssistantList = null;
    /**
     * The DeletedFromWonList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has won but deleted from their My eBay page. This container will be returned if the eBay user has won one or more auction items but have deleted these items from My
     * eBay. <br><br> This container will not be returned in the response (even if they have won and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromWonList.Include</b> field is
     * omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $DeletedFromWonList = null;
    /**
     * The DeletedFromLostList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the auction items on which the eBay user has lost and then deleted from their My eBay page. This container will be returned if the eBay user has lost one or more auction items and then deleted those items
     * from My eBay. <br><br> This container will not be returned in the response (even if they have lost and then deleted one or more items) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>DeletedFromLostList.Include</b>
     * field is omitted or set to <code>false</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $DeletedFromLostList = null;
    /**
     * The UserDefinedList
     * Meta information extracted from the WSDL
     * - documentation: This container consists of data for a user-defined list that was created by the user in My eBay. User-defined lists consists of a combination of items, saved sellers, and/or saved searches. <br><br> This container will not be
     * returned in the response (even if one or more user-defined lists exist) if the <b>DetailLevel</b> value is set to <code>ReturnSummary</code> and the <b>UserDefinedList.Include</b> field is omitted or set to <code>false</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserDefinedListType[]
     */
    protected array $UserDefinedList = [];
    /**
     * Constructor method for GetMyeBayBuyingResponseType
     * @uses GetMyeBayBuyingResponseType::setBuyingSummary()
     * @uses GetMyeBayBuyingResponseType::setWatchList()
     * @uses GetMyeBayBuyingResponseType::setBidList()
     * @uses GetMyeBayBuyingResponseType::setBestOfferList()
     * @uses GetMyeBayBuyingResponseType::setWonList()
     * @uses GetMyeBayBuyingResponseType::setLostList()
     * @uses GetMyeBayBuyingResponseType::setFavoriteSearches()
     * @uses GetMyeBayBuyingResponseType::setFavoriteSellers()
     * @uses GetMyeBayBuyingResponseType::setSecondChanceOffer()
     * @uses GetMyeBayBuyingResponseType::setBidAssistantList()
     * @uses GetMyeBayBuyingResponseType::setDeletedFromWonList()
     * @uses GetMyeBayBuyingResponseType::setDeletedFromLostList()
     * @uses GetMyeBayBuyingResponseType::setUserDefinedList()
     * @param \macropage\ebaysdk\trading\StructType\BuyingSummaryType $buyingSummary
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $watchList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bestOfferList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $wonList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $lostList
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @param \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType $bidAssistantList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromWonList
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromLostList
     * @param \macropage\ebaysdk\trading\StructType\UserDefinedListType[] $userDefinedList
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\BuyingSummaryType $buyingSummary = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $watchList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bestOfferList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $wonList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $lostList = null, ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null, ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null, array $secondChanceOffer = [], ?\macropage\ebaysdk\trading\ArrayType\BidGroupArrayType $bidAssistantList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromWonList = null, ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromLostList = null, array $userDefinedList = [])
    {
        $this
            ->setBuyingSummary($buyingSummary)
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
            ->setUserDefinedList($userDefinedList);
    }
    /**
     * Get BuyingSummary value
     * @return \macropage\ebaysdk\trading\StructType\BuyingSummaryType|null
     */
    public function getBuyingSummary(): ?\macropage\ebaysdk\trading\StructType\BuyingSummaryType
    {
        return $this->BuyingSummary;
    }
    /**
     * Set BuyingSummary value
     * @param \macropage\ebaysdk\trading\StructType\BuyingSummaryType $buyingSummary
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setBuyingSummary(?\macropage\ebaysdk\trading\StructType\BuyingSummaryType $buyingSummary = null): self
    {
        $this->BuyingSummary = $buyingSummary;
        
        return $this;
    }
    /**
     * Get WatchList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getWatchList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->WatchList;
    }
    /**
     * Set WatchList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $watchList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setWatchList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $watchList = null): self
    {
        $this->WatchList = $watchList;
        
        return $this;
    }
    /**
     * Get BidList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getBidList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->BidList;
    }
    /**
     * Set BidList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setBidList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bidList = null): self
    {
        $this->BidList = $bidList;
        
        return $this;
    }
    /**
     * Get BestOfferList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getBestOfferList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->BestOfferList;
    }
    /**
     * Set BestOfferList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bestOfferList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setBestOfferList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $bestOfferList = null): self
    {
        $this->BestOfferList = $bestOfferList;
        
        return $this;
    }
    /**
     * Get WonList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getWonList(): ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
    {
        return $this->WonList;
    }
    /**
     * Set WonList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $wonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setWonList(?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $wonList = null): self
    {
        $this->WonList = $wonList;
        
        return $this;
    }
    /**
     * Get LostList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getLostList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->LostList;
    }
    /**
     * Set LostList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $lostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setLostList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $lostList = null): self
    {
        $this->LostList = $lostList;
        
        return $this;
    }
    /**
     * Get FavoriteSearches value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType|null
     */
    public function getFavoriteSearches(): ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType
    {
        return $this->FavoriteSearches;
    }
    /**
     * Set FavoriteSearches value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSearches(?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSearchListType $favoriteSearches = null): self
    {
        $this->FavoriteSearches = $favoriteSearches;
        
        return $this;
    }
    /**
     * Get FavoriteSellers value
     * @return \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType|null
     */
    public function getFavoriteSellers(): ?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType
    {
        return $this->FavoriteSellers;
    }
    /**
     * Set FavoriteSellers value
     * @param \macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setFavoriteSellers(?\macropage\ebaysdk\trading\StructType\MyeBayFavoriteSellerListType $favoriteSellers = null): self
    {
        $this->FavoriteSellers = $favoriteSellers;
        
        return $this;
    }
    /**
     * Get SecondChanceOffer value
     * @return \macropage\ebaysdk\trading\StructType\ItemType[]
     */
    public function getSecondChanceOffer(): array
    {
        return $this->SecondChanceOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondChanceOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondChanceOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyeBayBuyingResponseTypeSecondChanceOfferItem) {
            // validation for constraint: itemType
            if (!$getMyeBayBuyingResponseTypeSecondChanceOfferItem instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
                $invalidValues[] = is_object($getMyeBayBuyingResponseTypeSecondChanceOfferItem) ? get_class($getMyeBayBuyingResponseTypeSecondChanceOfferItem) : sprintf('%s(%s)', gettype($getMyeBayBuyingResponseTypeSecondChanceOfferItem), var_export($getMyeBayBuyingResponseTypeSecondChanceOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SecondChanceOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SecondChanceOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType[] $secondChanceOffer
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setSecondChanceOffer(array $secondChanceOffer = []): self
    {
        // validation for constraint: array
        if ('' !== ($secondChanceOfferArrayErrorMessage = self::validateSecondChanceOfferForArrayConstraintsFromSetSecondChanceOffer($secondChanceOffer))) {
            throw new InvalidArgumentException($secondChanceOfferArrayErrorMessage, __LINE__);
        }
        $this->SecondChanceOffer = $secondChanceOffer;
        
        return $this;
    }
    /**
     * Add item to SecondChanceOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function addToSecondChanceOffer(\macropage\ebaysdk\trading\StructType\ItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemType) {
            throw new InvalidArgumentException(sprintf('The SecondChanceOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SecondChanceOffer[] = $item;
        
        return $this;
    }
    /**
     * Get BidAssistantList value
     * @return \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType|null
     */
    public function getBidAssistantList(): ?\macropage\ebaysdk\trading\ArrayType\BidGroupArrayType
    {
        return $this->BidAssistantList;
    }
    /**
     * Set BidAssistantList value
     * @param \macropage\ebaysdk\trading\ArrayType\BidGroupArrayType $bidAssistantList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setBidAssistantList(?\macropage\ebaysdk\trading\ArrayType\BidGroupArrayType $bidAssistantList = null): self
    {
        $this->BidAssistantList = $bidAssistantList;
        
        return $this;
    }
    /**
     * Get DeletedFromWonList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType|null
     */
    public function getDeletedFromWonList(): ?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
    {
        return $this->DeletedFromWonList;
    }
    /**
     * Set DeletedFromWonList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromWonList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromWonList(?\macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType $deletedFromWonList = null): self
    {
        $this->DeletedFromWonList = $deletedFromWonList;
        
        return $this;
    }
    /**
     * Get DeletedFromLostList value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType|null
     */
    public function getDeletedFromLostList(): ?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
    {
        return $this->DeletedFromLostList;
    }
    /**
     * Set DeletedFromLostList value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromLostList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setDeletedFromLostList(?\macropage\ebaysdk\trading\StructType\PaginatedItemArrayType $deletedFromLostList = null): self
    {
        $this->DeletedFromLostList = $deletedFromLostList;
        
        return $this;
    }
    /**
     * Get UserDefinedList value
     * @return \macropage\ebaysdk\trading\StructType\UserDefinedListType[]
     */
    public function getUserDefinedList(): array
    {
        return $this->UserDefinedList;
    }
    /**
     * This method is responsible for validating the values passed to the setUserDefinedList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserDefinedList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserDefinedListForArrayConstraintsFromSetUserDefinedList(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyeBayBuyingResponseTypeUserDefinedListItem) {
            // validation for constraint: itemType
            if (!$getMyeBayBuyingResponseTypeUserDefinedListItem instanceof \macropage\ebaysdk\trading\StructType\UserDefinedListType) {
                $invalidValues[] = is_object($getMyeBayBuyingResponseTypeUserDefinedListItem) ? get_class($getMyeBayBuyingResponseTypeUserDefinedListItem) : sprintf('%s(%s)', gettype($getMyeBayBuyingResponseTypeUserDefinedListItem), var_export($getMyeBayBuyingResponseTypeUserDefinedListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserDefinedList property can only contain items of type \macropage\ebaysdk\trading\StructType\UserDefinedListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserDefinedList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserDefinedListType[] $userDefinedList
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function setUserDefinedList(array $userDefinedList = []): self
    {
        // validation for constraint: array
        if ('' !== ($userDefinedListArrayErrorMessage = self::validateUserDefinedListForArrayConstraintsFromSetUserDefinedList($userDefinedList))) {
            throw new InvalidArgumentException($userDefinedListArrayErrorMessage, __LINE__);
        }
        $this->UserDefinedList = $userDefinedList;
        
        return $this;
    }
    /**
     * Add item to UserDefinedList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserDefinedListType $item
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayBuyingResponseType
     */
    public function addToUserDefinedList(\macropage\ebaysdk\trading\StructType\UserDefinedListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UserDefinedListType) {
            throw new InvalidArgumentException(sprintf('The UserDefinedList property can only contain items of type \macropage\ebaysdk\trading\StructType\UserDefinedListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserDefinedList[] = $item;
        
        return $this;
    }
}
