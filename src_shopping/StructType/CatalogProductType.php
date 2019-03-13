<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProductType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This complex type is used by each <b>Product</b> container that is returned Information about an eBay catalog product.
 * @subpackage Structs
 */
class CatalogProductType extends AbstractStructBase
{
    /**
     * The DomainName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the eBay category-related domain most closely associated with the catalog product. If the catalog product is associated with multiple category-related domains, eBay returns the most applicable domain (as determined by
     * eBay). <br> <br> This field is only returned if a catalog product is associated with one or more category-related domains, and if eBay has this data available. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DomainName;
    /**
     * The DetailsURL
     * Meta informations extracted from the WSDL
     * - documentation: The fully-qualified URL to the eBay product page is displayed in this field. The user can grab this URL, paste it in a browser, and view the product page on the eBay marketplace. Note that some product pages will have active listings
     * associated with them, and some will not. <br> <br> Applications can include this URL as a link in product search results, so that end users can view additional descriptive details about the product.
     * - minOccurs: 0
     * @var string
     */
    public $DetailsURL;
    /**
     * The DisplayStockPhotos
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, there is a stock photo associated with the catalog product, and the URL to this image file is shown in the <b>StockPhotoURL</b> field. If this field is returned as <code>false</code>,
     * there is no stock photo associated with the catalog product. <br> <br> Sellers should be aware that if no stock photo exists for a catalog product, the seller must add at least one of their own photos when creating a listing (based on that catalog
     * product), as all eBay listings must have at least one image. <br> <br> An application incorporating a graphical user interface can use this flag to determine when to hide customized stock photo widgets. <br> <br> This field is always returned in each
     * <b>Product</b> container.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The ProductID
     * Meta informations extracted from the WSDL
     * - documentation: At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are
     * also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     * if your application is comparing products across different sites. <br> <br> See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType[]
     */
    public $ProductID;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any data on active listings associated with the retrieved catalog products.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The ItemSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner. <br> <br> Scanning Item Specific
     * name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after
     * seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone
     * 8s that are gray and have 256 GB of storage capacity. <br> <br> <span class="tablenote"><b>Important:</b> Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not
     * have any Item Specifics. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public $ItemSpecifics;
    /**
     * The ReviewCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of reviews that are available for the catalog product on the eBay Web site. Not all products will have reviews on an eBay marketplace, but if reviews are available for a catalog product,
     * product reviews should be accessible from the catalog product page (see corresponding <b>DetailsURL</b> field).
     * - minOccurs: 0
     * @var int
     */
    public $ReviewCount;
    /**
     * The StockPhotoURL
     * Meta informations extracted from the WSDL
     * - documentation: The fully-qualified URL to the catalog product's stock photo. This field is only returned if a stock photo exists for the eBay catalog product. Generally, this is the image that eBay displays in product-based search results.
     * - minOccurs: 0
     * @var string
     */
    public $StockPhotoURL;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: The title of the product, as it is defined in the catalog product record. This field is always returned with each <b>Product</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ProductState
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value in this field provides information on the current state of the catalog product record. This field is generally only returned if the catalog product record was recently updated, is due for an update, or if the
     * record is scheduled to be deleted.
     * - minOccurs: 0
     * @var string
     */
    public $ProductState;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CatalogProductType
     * @uses CatalogProductType::setDomainName()
     * @uses CatalogProductType::setDetailsURL()
     * @uses CatalogProductType::setDisplayStockPhotos()
     * @uses CatalogProductType::setProductID()
     * @uses CatalogProductType::setItemCount()
     * @uses CatalogProductType::setItemSpecifics()
     * @uses CatalogProductType::setReviewCount()
     * @uses CatalogProductType::setStockPhotoURL()
     * @uses CatalogProductType::setTitle()
     * @uses CatalogProductType::setProductState()
     * @uses CatalogProductType::setAny()
     * @param string $domainName
     * @param string $detailsURL
     * @param bool $displayStockPhotos
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType[] $productID
     * @param int $itemCount
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @param int $reviewCount
     * @param string $stockPhotoURL
     * @param string $title
     * @param string $productState
     * @param \DOMDocument $any
     */
    public function __construct($domainName = null, $detailsURL = null, $displayStockPhotos = null, array $productID = array(), $itemCount = null, \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null, $reviewCount = null, $stockPhotoURL = null, $title = null, $productState = null, \DOMDocument $any = null)
    {
        $this
            ->setDomainName($domainName)
            ->setDetailsURL($detailsURL)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setProductID($productID)
            ->setItemCount($itemCount)
            ->setItemSpecifics($itemSpecifics)
            ->setReviewCount($reviewCount)
            ->setStockPhotoURL($stockPhotoURL)
            ->setTitle($title)
            ->setProductState($productState)
            ->setAny($any);
    }
    /**
     * Get DomainName value
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @param string $domainName
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setDomainName($domainName = null)
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainName)), __LINE__);
        }
        $this->DomainName = $domainName;
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos()
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setDisplayStockPhotos($displayStockPhotos = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType[]|null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType[] $productID
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setProductID(array $productID = array())
    {
        foreach ($productID as $catalogProductTypeProductIDItem) {
            // validation for constraint: itemType
            if (!$catalogProductTypeProductIDItem instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
                throw new \InvalidArgumentException(sprintf('The ProductID property can only contain items of \macropage\ebaysdk\shopping\StructType\ProductIDType, "%s" given', is_object($catalogProductTypeProductIDItem) ? get_class($catalogProductTypeProductIDItem) : gettype($catalogProductTypeProductIDItem)), __LINE__);
            }
        }
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Add item to ProductID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $item
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function addToProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
            throw new \InvalidArgumentException(sprintf('The ProductID property can only contain items of \macropage\ebaysdk\shopping\StructType\ProductIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductID[] = $item;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics()
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setItemSpecifics(\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null)
    {
        $this->ItemSpecifics = $itemSpecifics;
        return $this;
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setReviewCount($reviewCount = null)
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !is_numeric($reviewCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState()
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setProductState($productState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productState, implode(', ', \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\CatalogProductType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
