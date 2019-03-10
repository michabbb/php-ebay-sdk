<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductListingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>ProductListingDetails</b> container, which is used by a seller in an add/revise/relist call to identify a product through a Global Trade Item Number (EAN, ISBN, or UPC) or an eBay Product ID (e.g. 'ePID'). If a
 * specified product identifier is matched to a product in the eBay catalog, some of the details for the product listing, such as listing category, product title, product description, product aspects, and stock photo are prefilled for the listing. <br>
 * <br> <span class="tablenote"><b>Note:</b> If a Brand/MPN pair is required for the product, these values must still be input through the <b>BrandMPN</b> container. </span>
 * @subpackage Structs
 */
class ProductListingDetailsType extends AbstractStructBase
{
    /**
     * The IncludeStockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If you will be using an eBay catalog product to list
     * your item, it is always advised to include the stock photo. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields. Seller photos are particularly recommended for used and modified products to give
     * prospective buyers a clear sense of exactly what they are purchasing. In <b>GetItem</b> and other 'Get' calls, the URL of the stock photo will be returned in the <b>StockPhotoURL</b> field. <br> <br> <span class="tablenote"><b>Note:</b> For
     * categories/product brands that are part of the Product-Based Shopping Experience mandate, setting this field to <code>false</code> may cause the call to fail. For more information on the Product-Based Shopping Experience mandate and the
     * categories/product brands affected, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html" target="_blank">Product-Based Shopping Experience Playbook</a>. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeStockPhotoURL;
    /**
     * The UseStockPhotoURLAsGallery
     * Meta informations extracted from the WSDL
     * - documentation: If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo as the Gallery thumbnail photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If this field is set to
     * <code>true</code>, the <b>IncludeStockPhotoURL</b> field must also be set to <code>true</code> or this field will have no effect. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields, but none of
     * these photos will be the Gallery thumbnail photo. <br> <br> <span class="tablenote"><b>Note:</b> For categories/product brands that are part of the Product-Based Shopping Experience mandate, setting this field to <code>false</code> may cause the call
     * to fail. For more information on the Product-Based Shopping Experience mandate and the categories/product brands affected by this project, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html"
     * target="_blank">Product-Based Shopping Experience Playbook</a>. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $UseStockPhotoURLAsGallery;
    /**
     * The StockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: The full URL for the eBay catalog product's stock photo. This field is only returned if the seller used an eBay catalog product to list the item, and the <b>IncludeStockPhotoURL</b> field was set to <code>true</code>.
     * - minOccurs: 0
     * @var string
     */
    public $StockPhotoURL;
    /**
     * The Copyright
     * Meta informations extracted from the WSDL
     * - documentation: Copyright statement indicating the source of the product information. This information will be included in the listing if the seller used an eBay catalog product to list the item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Copyright;
    /**
     * The ProductReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: In an Add/Revise/Relist call, this field is used to pass in the eBay Product ID (e.g. ePID), which is the unique identifier of an eBay Catalog product. Although an eBay catalog product match can be found using one or more GTIN
     * values, passing in an ePID value is the best way to try and discover the appropriate eBay Catalog product. For more information on finding a product in the eBay catalog, see the <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html" target="_blank">Product-Based Shopping Experience Playbook</a>. <br> <br> This field is also returned in <b>GetItem</b> if the listing is associated with a eBay
     * Catalog product. <br>
     * - minOccurs: 0
     * @var string
     */
    public $ProductReferenceID;
    /**
     * The DetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be used.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The ProductDetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be used.
     * - minOccurs: 0
     * @var string
     */
    public $ProductDetailsURL;
    /**
     * The ReturnSearchResultOnDuplicates
     * Meta informations extracted from the WSDL
     * - documentation: If the seller attempts to use <b>ProductListingDetails</b> in an Add/Revise/Relist call to find an eBay catalog product match, and multiple matches are found, the call will actually fail. This field can be included and set to
     * <code>true</code> if the seller wants to see the eBay catalog products that were found through error messages in the call response. This flag will not have an effect if only one catalog product matchi is found, or if the <b>UseFirstProduct</b> field
     * is used and set to <code>true</code> and a catalog product is found to create/revise the listing. <br> <br> If this field is omitted or set to <code>false</code>, and multiple catalog products are found, the call will fail and no information about
     * the matching catalog products will be returned. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnSearchResultOnDuplicates;
    /**
     * The ISBN
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When
     * specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category. <br/><br/> If the
     * <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the ISBN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product
     * details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers
     * will get picked up automatically by the listing if a matching catalog product is found. <br/><br/> This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an ISBN value, this
     * value should be passed into the <b>Variation.VariationProductListingDetails.ISBN</b> field instead. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for
     * the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the
     * <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ISBN;
    /**
     * The UPC
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using a UPC (Universal Product Code) value. A UPC is a commonly used identifer for many different products. The seller can use the
     * <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category. <br/><br/> If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the UPC
     * value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo.
     * If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found. <br/><br/> This field is
     * only applicable for single-variation listings. For multiple-variation listings, if the category/product requires a UPC value, this value should be passed into the <b>Variation.VariationProductListingDetails.UPC</b> field instead. <br/><br/> <span
     * class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must pass in the text that can be found in the
     * <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a
     * <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $UPC;
    /**
     * The EAN
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify a product using an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify
     * products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category. <br/><br/> If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to
     * <code>true</code>, eBay will use the EAN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product
     * description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog
     * product is found. <br/><br/> This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an EAN value, this value should be passed into the
     * <b>Variation.VariationProductListingDetails.EAN</b> field instead. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must pass in
     * the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response,
     * <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string
     */
    public $EAN;
    /**
     * The BrandMPN
     * Meta informations extracted from the WSDL
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
     * @var \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public $BrandMPN;
    /**
     * The TicketListingDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container is only applicable when a seller is creating/revising an event tickets listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
     */
    public $TicketListingDetails;
    /**
     * The UseFirstProduct
     * Meta informations extracted from the WSDL
     * - documentation: This field can be included and set to <code>true</code> if the seller wants to use the first eBay catalog product that is found to create/revise the listing. eBay will search for an eBay catalog product match if the seller provides
     * an ePID or one or more GTIN values. If this field is omitted, or included and set to <code>false</code>, the call will fail if more than one eBay catalog product is found. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $UseFirstProduct;
    /**
     * The IncludeeBayProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field controls whether or not an eBay catalog product is used to create or revise a listing. If an ePID or GTIN value is provided through the <b>ProductListingDetails</b> container when adding, revising, or relisting an
     * item, the default behavior is for eBay to try and find a match for the product in the eBay catalog, and then automatically create/revise the listing using the product title, product description, item specifics, and stock photo defined for the catalog
     * product. <br><br> If the seller wants to use an eBay catalog product to create/revise a listing, the seller can include this field and set its value to <code>true</code>, or just omit this field, as it default value is <code>true</code>. If a seller
     * doesn't want use an eBay catalog product to create/revise their listing, this field should be included and set to <code>false</code>. If the seller declines to use an eBay catalog product, they will be required to pass in their own listing title,
     * listing description, item specifics, a listing category, and at least one picture. <br><br> <span class="tablenote"><b>Note:</b> For categories/product brands that are part of the Product-Based Shopping Experience mandate, setting this field to
     * <code>false</code> will cause the call to fail, as a eBay catalog product is required for category/brands that are part of the mandate. For more information on the Product-Based Shopping Experience and the categories/product brands affected, see the
     * <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html" target="_blank">Product-Based Shopping Experience Playbook</a>. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeeBayProductDetails;
    /**
     * The NameValueList
     * Meta informations extracted from the WSDL
     * - documentation: This container is for future use. If it used, it will be ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($includeStockPhotoURL = null, $useStockPhotoURLAsGallery = null, $stockPhotoURL = null, array $copyright = array(), $productReferenceID = null, $detailsURL = null, $productDetailsURL = null, $returnSearchResultOnDuplicates = null, $iSBN = null, $uPC = null, $eAN = null, \macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN = null, \macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails = null, $useFirstProduct = null, $includeeBayProductDetails = null, array $nameValueList = array(), \DOMDocument $any = null)
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
    public function getIncludeStockPhotoURL()
    {
        return $this->IncludeStockPhotoURL;
    }
    /**
     * Set IncludeStockPhotoURL value
     * @param bool $includeStockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setIncludeStockPhotoURL($includeStockPhotoURL = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeStockPhotoURL) && !is_bool($includeStockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeStockPhotoURL)), __LINE__);
        }
        $this->IncludeStockPhotoURL = $includeStockPhotoURL;
        return $this;
    }
    /**
     * Get UseStockPhotoURLAsGallery value
     * @return bool|null
     */
    public function getUseStockPhotoURLAsGallery()
    {
        return $this->UseStockPhotoURLAsGallery;
    }
    /**
     * Set UseStockPhotoURLAsGallery value
     * @param bool $useStockPhotoURLAsGallery
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUseStockPhotoURLAsGallery($useStockPhotoURLAsGallery = null)
    {
        // validation for constraint: boolean
        if (!is_null($useStockPhotoURLAsGallery) && !is_bool($useStockPhotoURLAsGallery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useStockPhotoURLAsGallery)), __LINE__);
        }
        $this->UseStockPhotoURLAsGallery = $useStockPhotoURLAsGallery;
        return $this;
    }
    /**
     * Get StockPhotoURL value
     * @return string|null
     */
    public function getStockPhotoURL()
    {
        return $this->StockPhotoURL;
    }
    /**
     * Set StockPhotoURL value
     * @param string $stockPhotoURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setStockPhotoURL($stockPhotoURL = null)
    {
        // validation for constraint: string
        if (!is_null($stockPhotoURL) && !is_string($stockPhotoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stockPhotoURL)), __LINE__);
        }
        $this->StockPhotoURL = $stockPhotoURL;
        return $this;
    }
    /**
     * Get Copyright value
     * @return string[]|null
     */
    public function getCopyright()
    {
        return $this->Copyright;
    }
    /**
     * Set Copyright value
     * @throws \InvalidArgumentException
     * @param string[] $copyright
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setCopyright(array $copyright = array())
    {
        foreach ($copyright as $productListingDetailsTypeCopyrightItem) {
            // validation for constraint: itemType
            if (!is_string($productListingDetailsTypeCopyrightItem)) {
                throw new \InvalidArgumentException(sprintf('The Copyright property can only contain items of string, "%s" given', is_object($productListingDetailsTypeCopyrightItem) ? get_class($productListingDetailsTypeCopyrightItem) : gettype($productListingDetailsTypeCopyrightItem)), __LINE__);
            }
        }
        $this->Copyright = $copyright;
        return $this;
    }
    /**
     * Add item to Copyright value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function addToCopyright($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Copyright property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Copyright[] = $item;
        return $this;
    }
    /**
     * Get ProductReferenceID value
     * @return string|null
     */
    public function getProductReferenceID()
    {
        return $this->ProductReferenceID;
    }
    /**
     * Set ProductReferenceID value
     * @param string $productReferenceID
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setProductReferenceID($productReferenceID = null)
    {
        // validation for constraint: string
        if (!is_null($productReferenceID) && !is_string($productReferenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productReferenceID)), __LINE__);
        }
        $this->ProductReferenceID = $productReferenceID;
        return $this;
    }
    /**
     * Get DetailsURL value
     * @return string|null
     */
    public function getDetailsURL()
    {
        return $this->DetailsURL;
    }
    /**
     * Set DetailsURL value
     * @param string $detailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setDetailsURL($detailsURL = null)
    {
        // validation for constraint: string
        if (!is_null($detailsURL) && !is_string($detailsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailsURL)), __LINE__);
        }
        $this->DetailsURL = $detailsURL;
        return $this;
    }
    /**
     * Get ProductDetailsURL value
     * @return string|null
     */
    public function getProductDetailsURL()
    {
        return $this->ProductDetailsURL;
    }
    /**
     * Set ProductDetailsURL value
     * @param string $productDetailsURL
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setProductDetailsURL($productDetailsURL = null)
    {
        // validation for constraint: string
        if (!is_null($productDetailsURL) && !is_string($productDetailsURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productDetailsURL)), __LINE__);
        }
        $this->ProductDetailsURL = $productDetailsURL;
        return $this;
    }
    /**
     * Get ReturnSearchResultOnDuplicates value
     * @return bool|null
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->ReturnSearchResultOnDuplicates;
    }
    /**
     * Set ReturnSearchResultOnDuplicates value
     * @param bool $returnSearchResultOnDuplicates
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnSearchResultOnDuplicates) && !is_bool($returnSearchResultOnDuplicates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnSearchResultOnDuplicates)), __LINE__);
        }
        $this->ReturnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        return $this;
    }
    /**
     * Get ISBN value
     * @return string|null
     */
    public function getISBN()
    {
        return $this->ISBN;
    }
    /**
     * Set ISBN value
     * @param string $iSBN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setISBN($iSBN = null)
    {
        // validation for constraint: string
        if (!is_null($iSBN) && !is_string($iSBN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSBN)), __LINE__);
        }
        $this->ISBN = $iSBN;
        return $this;
    }
    /**
     * Get UPC value
     * @return string|null
     */
    public function getUPC()
    {
        return $this->UPC;
    }
    /**
     * Set UPC value
     * @param string $uPC
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUPC($uPC = null)
    {
        // validation for constraint: string
        if (!is_null($uPC) && !is_string($uPC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uPC)), __LINE__);
        }
        $this->UPC = $uPC;
        return $this;
    }
    /**
     * Get EAN value
     * @return string|null
     */
    public function getEAN()
    {
        return $this->EAN;
    }
    /**
     * Set EAN value
     * @param string $eAN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setEAN($eAN = null)
    {
        // validation for constraint: string
        if (!is_null($eAN) && !is_string($eAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eAN)), __LINE__);
        }
        $this->EAN = $eAN;
        return $this;
    }
    /**
     * Get BrandMPN value
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType|null
     */
    public function getBrandMPN()
    {
        return $this->BrandMPN;
    }
    /**
     * Set BrandMPN value
     * @param \macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setBrandMPN(\macropage\ebaysdk\trading\StructType\BrandMPNType $brandMPN = null)
    {
        $this->BrandMPN = $brandMPN;
        return $this;
    }
    /**
     * Get TicketListingDetails value
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType|null
     */
    public function getTicketListingDetails()
    {
        return $this->TicketListingDetails;
    }
    /**
     * Set TicketListingDetails value
     * @param \macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setTicketListingDetails(\macropage\ebaysdk\trading\StructType\TicketListingDetailsType $ticketListingDetails = null)
    {
        $this->TicketListingDetails = $ticketListingDetails;
        return $this;
    }
    /**
     * Get UseFirstProduct value
     * @return bool|null
     */
    public function getUseFirstProduct()
    {
        return $this->UseFirstProduct;
    }
    /**
     * Set UseFirstProduct value
     * @param bool $useFirstProduct
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setUseFirstProduct($useFirstProduct = null)
    {
        // validation for constraint: boolean
        if (!is_null($useFirstProduct) && !is_bool($useFirstProduct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useFirstProduct)), __LINE__);
        }
        $this->UseFirstProduct = $useFirstProduct;
        return $this;
    }
    /**
     * Get IncludeeBayProductDetails value
     * @return bool|null
     */
    public function getIncludeeBayProductDetails()
    {
        return $this->IncludeeBayProductDetails;
    }
    /**
     * Set IncludeeBayProductDetails value
     * @param bool $includeeBayProductDetails
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setIncludeeBayProductDetails($includeeBayProductDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeeBayProductDetails) && !is_bool($includeeBayProductDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeeBayProductDetails)), __LINE__);
        }
        $this->IncludeeBayProductDetails = $includeeBayProductDetails;
        return $this;
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        foreach ($nameValueList as $productListingDetailsTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$productListingDetailsTypeNameValueListItem instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
                throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($productListingDetailsTypeNameValueListItem) ? get_class($productListingDetailsTypeNameValueListItem) : gettype($productListingDetailsTypeNameValueListItem)), __LINE__);
            }
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function addToNameValueList(\macropage\ebaysdk\trading\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueListType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductListingDetailsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductListingDetailsType
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
