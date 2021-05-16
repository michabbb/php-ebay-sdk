<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductListingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ProductListingDetails</b> container, which is used by a seller in an add/revise/relist call to identify a product through a Global Trade Item Number (EAN, ISBN, or UPC) or an eBay Product ID (e.g. 'ePID'). If a
 * specified product identifier is matched to a product in the eBay catalog, some of the details for the product listing, such as listing category, product title, product description, product aspects, and stock photo are prefilled for the listing. <br>
 * <br> <span class="tablenote"><b>Note:</b> If a Brand/MPN pair is required for the product, these values must still be input through the <b>BrandMPN</b> container. </span>
 * @subpackage Structs
 */
class ProductListingDetailsType extends AbstractStructBase
{
    /**
     * The IncludeStockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If you will be using an eBay catalog product to list
     * your item, it is always advised to include the stock photo. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields. Seller photos are particularly recommended for used and modified products to give
     * prospective buyers a clear sense of exactly what they are purchasing. In <b>GetItem</b> and other 'Get' calls, the URL of the stock photo will be returned in the <b>StockPhotoURL</b> field. <br/>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeStockPhotoURL = null;
    /**
     * The UseStockPhotoURLAsGallery
     * Meta information extracted from the WSDL
     * - documentation: If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo as the Gallery thumbnail photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If this field is set to
     * <code>true</code>, the <b>IncludeStockPhotoURL</b> field must also be set to <code>true</code> or this field will have no effect. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields, but none of
     * these photos will be the Gallery thumbnail photo. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseStockPhotoURLAsGallery = null;
    /**
     * The StockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: The full URL for the eBay catalog product's stock photo. This field is only returned if the seller used an eBay catalog product to list the item, and the <b>IncludeStockPhotoURL</b> field was set to <code>true</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StockPhotoURL = null;
    /**
     * The Copyright
     * Meta information extracted from the WSDL
     * - documentation: Copyright statement indicating the source of the product information. This information will be included in the listing if the seller used an eBay catalog product to list the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Copyright = [];
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: In an Add/Revise/Relist call, this field is used to pass in the eBay Product ID (e.g. ePID), which is the unique identifier of an eBay catalog product. Although an eBay catalog product match can be found using one or more GTIN
     * values, passing in an ePID value is the best way to try and discover the appropriate eBay catalog product. <br> <br> This field is also returned in <b>GetItem</b> if the listing is associated with a eBay catalog product. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductReferenceID = null;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailsURL = null;
    /**
     * The ProductDetailsURL
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductDetailsURL = null;
    /**
     * The ReturnSearchResultOnDuplicates
     * Meta information extracted from the WSDL
     * - documentation: If the seller attempts to use <b>ProductListingDetails</b> in an Add/Revise/Relist call to find an eBay catalog product match, and multiple matches are found, the call will actually fail. This field can be included and set to
     * <code>true</code> if the seller wants to see the eBay catalog products that were found through error messages in the call response. This flag will not have an effect if only one catalog product matchi is found, or if the <b>UseFirstProduct</b> field
     * is used and set to <code>true</code> and a catalog product is found to create/revise the listing. <br> <br> If this field is omitted or set to <code>false</code>, and multiple catalog products are found, the call will fail and no information about
     * the matching catalog products will be returned. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnSearchResultOnDuplicates = null;
    /**
     * The ISBN
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When
     * specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category. <br/><br/> If the
     * <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the ISBN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product
     * details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers
     * will get picked up automatically by the listing if a matching catalog product is found. <br/><br/> This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an ISBN value, this
     * value should be passed into the <b>Variation.VariationProductListingDetails.ISBN</b> field instead. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for
     * the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the
     * <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ISBN = null;
    /**
     * The UPC
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using a UPC (Universal Product Code) value. A UPC is a commonly used identifer for many different products. The seller can use the
     * <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category. <br/><br/> <span class="tablenote"><b>Note: </b> The <b>UPC</b> (and UPC values) are typically only applicable to US products listed
     * on US eBay marketplace. If a European seller is selling a European-based product (with an EAN value) on the US site, instead of using the <b>EAN</b> field, the seller will use the <b>UPC</b> field to pass in the EAN value. </span> <br/> If the
     * <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the UPC value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product
     * details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers
     * will get picked up automatically by the listing if a matching catalog product is found. <br/><br/> This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires a UPC value, this value
     * should be passed into the <b>Variation.VariationProductListingDetails.UPC</b> field instead. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the
     * product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b>
     * response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UPC = null;
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify
     * products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category. <br/><br/> <span class="tablenote"><b>Note: </b> The <b>EAN</b> (and EAN values) are typically
     * only applicable to European products listed on European eBay marketplaces. If a US seller is selling a US-based product (with a UPC value) on a European site (such as eBay UK), instead of using the <b>UPC</b> field, the seller will use the <b>EAN</b>
     * field to pass in the UPC value. </span> <br/> If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the EAN value passed into this field to try and find a matching eBay catalog product. If a
     * match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field,
     * this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found. <br/><br/> This field is only applicable for single-variation listings. For multiple-variation listings, if
     * the category/product requires an EAN value, this value should be passed into the <b>Variation.VariationProductListingDetails.EAN</b> field instead. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that
     * expects an EAN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the
     * <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EAN = null;
    /**
     * The BrandMPN
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller wants to, or is required to identify a product using an Brand/Manufacturer Part Number (MPN) pair. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if
     * a Brand/MPN pair is supported/required for a category. Both the <b>Brand</b> and <b>MPN</b> fields are required if the category/product requires an MPN value. <br/><br/> If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to
     * <code>true</code>, eBay will use the Brand/MPN pair to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item
     * specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers associated with the catalog product will get picked up automatically by the listing if a
     * matching catalog product is found. <br/><br/> This container is only applicable for single-variation listings. For multiple-variation listings, if the category requires Brand/MPN pairs, the product brand (shared by all variations in this listing) is
     * passed in through the item-level item specifics (<b>Item.ItemSpecifics.NameValueList</b>), and the MPN value for each variation in the listing is passed in through the variation-level item specifics
     * (<b>Variation.VariationSpecifics.NameValueList</b>). <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that requires or recommends a Brand and MPN value, the Brand and MPN values for the product should
     * always be passed in through separate <b>ItemSpecifics.NameValueList</b> containers since the Brand and MPN values passed in through the <b>ProductListingDetails.BrandMPN</b> will not get picked up by the generated/revised listing unless the the
     * Brand/MPN pair is successfully matched to an eBay catalog product. If an MPN doesn't exist for a product, or the seller does not have it available, the seller must pass in the text that can be found in the
     * <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a
     * <b>DetailName</b> value in the call request. </span> <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BrandMPNType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BrandMPNType $BrandMPN = null;
    /**
     * The TicketListingDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is only applicable when a seller is creating/revising an event tickets listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TicketListingDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TicketListingDetailsType $TicketListingDetails = null;
    /**
     * The UseFirstProduct
     * Meta information extracted from the WSDL
     * - documentation: This field can be included and set to <code>true</code> if the seller wants to use the first eBay catalog product that is found to create/revise the listing. eBay will search for an eBay catalog product match if the seller provides
     * an ePID or one or more GTIN values. If this field is omitted, or included and set to <code>false</code>, the call will fail if more than one eBay catalog product is found. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseFirstProduct = null;
    /**
     * The IncludeeBayProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This boolean field controls whether or not an eBay catalog product is used to create or revise a listing. If an ePID or GTIN value is provided through the <b>ProductListingDetails</b> container when adding, revising, or relisting an
     * item, the default behavior is for eBay to try and find a match for the product in the eBay catalog, and then automatically create/revise the listing using the product title, product description, item specifics, and stock photo defined for the catalog
     * product. <br><br> If the seller wants to use an eBay catalog product to create/revise a listing, the seller can include this field and set its value to <code>true</code>, or just omit this field, as its default value is <code>true</code>. If a seller
     * doesn't want use an eBay catalog product to create/revise their listing, this field should be included and set to <code>false</code>. If the seller declines to use an eBay catalog product, they will be required to pass in their own listing title,
     * listing description, item specifics, a listing category, and at least one picture. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeeBayProductDetails = null;
    /**
     * The NameValueList
     * Meta information extracted from the WSDL
     * - documentation: This container is for future use. If it used, it will be ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueListType[]
     */
    protected array $NameValueList = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductListingDetailsType
     * @uses ProductListingDetailsType::setIncludeStockPhotoURL()
     * @uses ProductListingDetailsType::setUseStockPhotoURLAsGallery()
     * @uses ProductListingDetailsType::setStockPhotoURL()
     * @uses ProductListingDetailsType::setCopyright()
     * @uses ProductListingDetailsType::setProductReferenceID()
     * @uses ProductListingDetailsType::setDetailsURL()
     * @uses ProductListingDetailsType::setProductDetailsURL()
     * @uses ProductListingDetailsType::setReturnSearchResultOnDuplicates()
     * @uses ProductListingDetailsType::setISBN()
     * @uses ProductListingDetailsType::setUPC()
     * @uses ProductListingDetailsType::setEAN()
     * @uses ProductListingDetailsType::setBrandMPN()
     * @uses ProductListingDetailsType::setTicketListingDetails()
     * @uses ProductListingDetailsType::setUseFirstProduct()
     * @uses ProductListingDetailsType::setIncludeeBayProductDetails()
     * @uses ProductListingDetailsType::setNameValueList()
     * @uses ProductListingDetailsType::setAny()
     * @param bool $includeStockPhotoURL
     * @param bool $useStockPhotoURLAsGallery
     * @param string $stockPhotoURL
     * @param string[] $copyright
     * @param string $productReferenceID
     * @param string $detailsURL
     * @param string $productDetailsURL
     * @param bool $returnSearchResultOnDuplicates
     * @param string $iSBN
     * @param string $uPC
     * @param string $eAN
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN
     * @param \macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails
     * @param bool $useFirstProduct
     * @param bool $includeeBayProductDetails
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $includeStockPhotoURL = null, ?bool $useStockPhotoURLAsGallery = null, ?string $stockPhotoURL = null, array $copyright = [], ?string $productReferenceID = null, ?string $detailsURL = null, ?string $productDetailsURL = null, ?bool $returnSearchResultOnDuplicates = null, ?string $iSBN = null, ?string $uPC = null, ?string $eAN = null, ?\macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN = null, ?\macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails = null, ?bool $useFirstProduct = null, ?bool $includeeBayProductDetails = null, array $nameValueList = [], $any = null)
    {
        $this
            ->setIncludeStockPhotoURL($includeStockPhotoURL)
            ->setUseStockPhotoURLAsGallery($useStockPhotoURLAsGallery)
            ->setStockPhotoURL($stockPhotoURL)
            ->setCopyright($copyright)
            ->setProductReferenceID($productReferenceID)
            ->setDetailsURL($detailsURL)
            ->setProductDetailsURL($productDetailsURL)
            ->setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates)
            ->setISBN($iSBN)
            ->setUPC($uPC)
            ->setEAN($eAN)
            ->setBrandMPN($brandMPN)
            ->setTicketListingDetails($ticketListingDetails)
            ->setUseFirstProduct($useFirstProduct)
            ->setIncludeeBayProductDetails($includeeBayProductDetails)
            ->setNameValueList($nameValueList)
            ->setAny($any);
    }
    /**
     * Get IncludeStockPhotoURL value
     * @return bool|null
     */
    public function getIncludeStockPhotoURL(): ?bool
    {
        return $this->IncludeStockPhotoURL;
    }
    /**
     * Set IncludeStockPhotoURL value
     * @param bool $includeStockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setIncludeStockPhotoURL(?bool $includeStockPhotoURL = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeStockPhotoURL) && !is_bool($includeStockPhotoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeStockPhotoURL, true), gettype($includeStockPhotoURL)), __LINE__);
        }
        $this->IncludeStockPhotoURL = $includeStockPhotoURL;
        
        return $this;
    }
    /**
     * Get UseStockPhotoURLAsGallery value
     * @return bool|null
     */
    public function getUseStockPhotoURLAsGallery(): ?bool
    {
        return $this->UseStockPhotoURLAsGallery;
    }
    /**
     * Set UseStockPhotoURLAsGallery value
     * @param bool $useStockPhotoURLAsGallery
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUseStockPhotoURLAsGallery(?bool $useStockPhotoURLAsGallery = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useStockPhotoURLAsGallery) && !is_bool($useStockPhotoURLAsGallery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useStockPhotoURLAsGallery, true), gettype($useStockPhotoURLAsGallery)), __LINE__);
        }
        $this->UseStockPhotoURLAsGallery = $useStockPhotoURLAsGallery;
        
        return $this;
    }
    /**
     * Get StockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL(): ?string
    {
        return $this->StockPhotoURL;
    }
    /**
     * Set StockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setStockPhotoURL(?string $stockPhotoURL = null): self
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stockPhotoURL, true), gettype($stockPhotoURL)), __LINE__);
        }
        $this->StockPhotoURL = $stockPhotoURL;
        
        return $this;
    }
    /**
     * Get Copyright value
     * @return string[]
     */
    public function getCopyright(): array
    {
        return $this->Copyright;
    }
    /**
     * This method is responsible for validating the values passed to the setCopyright method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCopyright method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCopyrightForArrayConstraintsFromSetCopyright(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productListingDetailsTypeCopyrightItem) {
            // validation for constraint: itemType
            if (!is_string($productListingDetailsTypeCopyrightItem)) {
                $invalidValues[] = is_object($productListingDetailsTypeCopyrightItem) ? get_class($productListingDetailsTypeCopyrightItem) : sprintf('%s(%s)', gettype($productListingDetailsTypeCopyrightItem), var_export($productListingDetailsTypeCopyrightItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Copyright property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Copyright value
     * @throws InvalidArgumentException
     * @param string[] $copyright
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setCopyright(array $copyright = []): self
    {
        // validation for constraint: array
        if ('' !== ($copyrightArrayErrorMessage = self::validateCopyrightForArrayConstraintsFromSetCopyright($copyright))) {
            throw new InvalidArgumentException($copyrightArrayErrorMessage, __LINE__);
        }
        $this->Copyright = $copyright;
        
        return $this;
    }
    /**
     * Add item to Copyright value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function addToCopyright(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Copyright property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Copyright[] = $item;
        
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID(): ?string
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setProductReferenceID(?string $productReferenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productReferenceID, true), gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        
        return $this;
    }
    /**
     * Get DetailsURL value
     * @return string|null
     */
    public function getDetailsURL(): ?string
    {
        return $this->DetailsURL;
    }
    /**
     * Set DetailsURL value
     * @param string $detailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setDetailsURL(?string $detailsURL = null): self
    {
        // validation for constraint: string
        if (!is_null($detailsURL) && !is_string($detailsURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailsURL, true), gettype($detailsURL)), __LINE__);
        }
        $this->DetailsURL = $detailsURL;
        
        return $this;
    }
    /**
     * Get ProductDetailsURL value
     * @return string|null
     */
    public function getProductDetailsURL(): ?string
    {
        return $this->ProductDetailsURL;
    }
    /**
     * Set ProductDetailsURL value
     * @param string $productDetailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setProductDetailsURL(?string $productDetailsURL = null): self
    {
        // validation for constraint: string
        if (!is_null($productDetailsURL) && !is_string($productDetailsURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDetailsURL, true), gettype($productDetailsURL)), __LINE__);
        }
        $this->ProductDetailsURL = $productDetailsURL;
        
        return $this;
    }
    /**
     * Get ReturnSearchResultOnDuplicates value
     * @return bool|null
     */
    public function getReturnSearchResultOnDuplicates(): ?bool
    {
        return $this->ReturnSearchResultOnDuplicates;
    }
    /**
     * Set ReturnSearchResultOnDuplicates value
     * @param bool $returnSearchResultOnDuplicates
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setReturnSearchResultOnDuplicates(?bool $returnSearchResultOnDuplicates = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnSearchResultOnDuplicates) && !is_bool($returnSearchResultOnDuplicates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnSearchResultOnDuplicates, true), gettype($returnSearchResultOnDuplicates)), __LINE__);
        }
        $this->ReturnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        
        return $this;
    }
    /**
     * Get ISBN value
     * @return string|null
     */
    public function getISBN(): ?string
    {
        return $this->ISBN;
    }
    /**
     * Set ISBN value
     * @param string $iSBN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setISBN(?string $iSBN = null): self
    {
        // validation for constraint: string
        if (!is_null($iSBN) && !is_string($iSBN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSBN, true), gettype($iSBN)), __LINE__);
        }
        $this->ISBN = $iSBN;
        
        return $this;
    }
    /**
     * Get UPC value
     * @return string|null
     */
    public function getUPC(): ?string
    {
        return $this->UPC;
    }
    /**
     * Set UPC value
     * @param string $uPC
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUPC(?string $uPC = null): self
    {
        // validation for constraint: string
        if (!is_null($uPC) && !is_string($uPC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uPC, true), gettype($uPC)), __LINE__);
        }
        $this->UPC = $uPC;
        
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN(): ?string
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setEAN(?string $eAN = null): self
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eAN, true), gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        
        return $this;
    }
    /**
     * Get BrandMPN value
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType|null
     */
    public function getBrandMPN(): ?\macropage\ebaysdk\trading\StructType\BrandMPNType
    {
        return $this->BrandMPN;
    }
    /**
     * Set BrandMPN value
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setBrandMPN(?\macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN = null): self
    {
        $this->BrandMPN = $brandMPN;
        
        return $this;
    }
    /**
     * Get TicketListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType|null
     */
    public function getTicketListingDetails(): ?\macropage\ebaysdk\trading\StructType\TicketListingDetailsType
    {
        return $this->TicketListingDetails;
    }
    /**
     * Set TicketListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setTicketListingDetails(?\macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails = null): self
    {
        $this->TicketListingDetails = $ticketListingDetails;
        
        return $this;
    }
    /**
     * Get UseFirstProduct value
     * @return bool|null
     */
    public function getUseFirstProduct(): ?bool
    {
        return $this->UseFirstProduct;
    }
    /**
     * Set UseFirstProduct value
     * @param bool $useFirstProduct
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUseFirstProduct(?bool $useFirstProduct = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useFirstProduct) && !is_bool($useFirstProduct)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useFirstProduct, true), gettype($useFirstProduct)), __LINE__);
        }
        $this->UseFirstProduct = $useFirstProduct;
        
        return $this;
    }
    /**
     * Get IncludeeBayProductDetails value
     * @return bool|null
     */
    public function getIncludeeBayProductDetails(): ?bool
    {
        return $this->IncludeeBayProductDetails;
    }
    /**
     * Set IncludeeBayProductDetails value
     * @param bool $includeeBayProductDetails
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setIncludeeBayProductDetails(?bool $includeeBayProductDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeeBayProductDetails) && !is_bool($includeeBayProductDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeeBayProductDetails, true), gettype($includeeBayProductDetails)), __LINE__);
        }
        $this->IncludeeBayProductDetails = $includeeBayProductDetails;
        
        return $this;
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType[]
     */
    public function getNameValueList(): array
    {
        return $this->NameValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setNameValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameValueListForArrayConstraintsFromSetNameValueList(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productListingDetailsTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$productListingDetailsTypeNameValueListItem instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
                $invalidValues[] = is_object($productListingDetailsTypeNameValueListItem) ? get_class($productListingDetailsTypeNameValueListItem) : sprintf('%s(%s)', gettype($productListingDetailsTypeNameValueListItem), var_export($productListingDetailsTypeNameValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\trading\StructType\NameValueListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setNameValueList(array $nameValueList = []): self
    {
        // validation for constraint: array
        if ('' !== ($nameValueListArrayErrorMessage = self::validateNameValueListForArrayConstraintsFromSetNameValueList($nameValueList))) {
            throw new InvalidArgumentException($nameValueListArrayErrorMessage, __LINE__);
        }
        $this->NameValueList = $nameValueList;
        
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function addToNameValueList(\macropage\ebaysdk\trading\StructType\NameValueListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
            throw new InvalidArgumentException(sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\trading\StructType\NameValueListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameValueList[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
