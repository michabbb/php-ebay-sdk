<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: This complex type is used by each <b>Product</b> container that is returned in the response of the <b>FindProducts</b> call. Each <b>Product</b> container consists of information about an eBay catalog product.
 * @subpackage Structs
 */
class CatalogProductType extends AbstractStructBase
{
    /**
     * The DomainName
     * Meta information extracted from the WSDL
     * - documentation: The name of the eBay category-related domain most closely associated with the catalog product. If the catalog product is associated with multiple category-related domains, eBay returns the most applicable domain (as determined by
     * eBay). <br> <br> This field is only returned if a catalog product is associated with one or more category-related domains, and if eBay has this data available. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomainName = null;
    /**
     * The DetailsURL
     * Meta information extracted from the WSDL
     * - documentation: The fully-qualified URL to the Product Details section of the eBay catalog product page is displayed in this field. The user can grab this URL, paste it in a browser, and view the Product Details section of the eBay catalog product
     * page for the corresponding eBay marketplace site. Note that some catalog product pages will have active listings associated with them, and some will not. It is also possible that some catalog product may not contain stock photos. <br> <br>
     * Applications can include this URL as a link in product search results, so that end users can view additional descriptive details about the product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailsURL = null;
    /**
     * The DisplayStockPhotos
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, there is a stock photo associated with the catalog product, and the URL to this image file is shown in the <b>StockPhotoURL</b> field. If this field is returned as <code>false</code>,
     * there is no stock photo associated with the catalog product. <br> <br> Sellers should be aware that if no stock photo exists for a catalog product, the seller must add at least one of their own photos when creating a listing (based on that catalog
     * product), as all eBay listings must have at least one image. <br> <br> An application incorporating a graphical user interface can use this flag to determine when to hide customized stock photo widgets. <br> <br> This field is always returned in each
     * <b>Product</b> container.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DisplayStockPhotos = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are
     * also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     * if your application is comparing products across different sites. <br> <br> See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ProductIDType[]
     */
    protected ?array $ProductID = null;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any data on active listings associated with the retrieved catalog products.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemCount = null;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner. <br> <br> Scanning Item Specific
     * name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after
     * seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone
     * 8s that are gray and have 256 GB of storage capacity. <br> <br> <span class="tablenote"><b>Important:</b> Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not
     * have any Item Specifics defined. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $ItemSpecifics = null;
    /**
     * The ReviewCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of reviews that are available for the catalog product on the eBay Web site. Not all products will have reviews on an eBay marketplace, but if reviews are available for a catalog product,
     * product reviews should be accessible from the catalog product page (see corresponding <b>DetailsURL</b> field). <br> <br> This field is not returned at all if there are no product reviews available for the catalog product.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReviewCount = null;
    /**
     * The StockPhotoURL
     * Meta information extracted from the WSDL
     * - documentation: The fully-qualified URL to the catalog product's stock photo. This field is only returned if a stock photo exists for the eBay catalog product (<b>DisplayStockPhotos</b> should return as <code>true</code>. Generally, this is the
     * image that eBay displays in product-based search results.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StockPhotoURL = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: The title of the product, as it is defined in the catalog product record. This field is always returned with each <b>Product</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The ProductState
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field provides information on the current state of the catalog product record. This field is generally only returned if the catalog product record was recently updated, is due for an update, or if the
     * record is scheduled to be deleted.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductState = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $domainName = null, ?string $detailsURL = null, ?bool $displayStockPhotos = null, ?array $productID = null, ?int $itemCount = null, ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null, ?int $reviewCount = null, ?string $stockPhotoURL = null, ?string $title = null, ?string $productState = null, $any = null)
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
    public function getDomainName(): ?string
    {
        return $this->DomainName;
    }
    /**
     * Set DomainName value
     * @param string $domainName
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setDomainName(?string $domainName = null): self
    {
        // validation for constraint: string
        if (!is_null($domainName) && !is_string($domainName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domainName, true), gettype($domainName)), __LINE__);
        }
        $this->DomainName = $domainName;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos(): ?bool
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setDisplayStockPhotos(?bool $displayStockPhotos = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayStockPhotos, true), gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType[]
     */
    public function getProductID(): ?array
    {
        return $this->ProductID;
    }
    /**
     * This method is responsible for validating the values passed to the setProductID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductIDForArrayConstraintsFromSetProductID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $catalogProductTypeProductIDItem) {
            // validation for constraint: itemType
            if (!$catalogProductTypeProductIDItem instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
                $invalidValues[] = is_object($catalogProductTypeProductIDItem) ? get_class($catalogProductTypeProductIDItem) : sprintf('%s(%s)', gettype($catalogProductTypeProductIDItem), var_export($catalogProductTypeProductIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductID property can only contain items of type \macropage\ebaysdk\shopping\StructType\ProductIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType[] $productID
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setProductID(?array $productID = null): self
    {
        // validation for constraint: array
        if ('' !== ($productIDArrayErrorMessage = self::validateProductIDForArrayConstraintsFromSetProductID($productID))) {
            throw new InvalidArgumentException($productIDArrayErrorMessage, __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
    /**
     * Add item to ProductID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ProductIDType $item
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function addToProductID(\macropage\ebaysdk\shopping\StructType\ProductIDType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ProductIDType) {
            throw new InvalidArgumentException(sprintf('The ProductID property can only contain items of type \macropage\ebaysdk\shopping\StructType\ProductIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductID[] = $item;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount(): ?int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setItemCount(?int $itemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics(): ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setItemSpecifics(?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $itemSpecifics = null): self
    {
        $this->ItemSpecifics = $itemSpecifics;
        
        return $this;
    }
    /**
     * Get ReviewCount value
     * @return int|null
     */
    public function getReviewCount(): ?int
    {
        return $this->ReviewCount;
    }
    /**
     * Set ReviewCount value
     * @param int $reviewCount
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setReviewCount(?int $reviewCount = null): self
    {
        // validation for constraint: int
        if (!is_null($reviewCount) && !(is_int($reviewCount) || ctype_digit($reviewCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reviewCount, true), gettype($reviewCount)), __LINE__);
        }
        $this->ReviewCount = $reviewCount;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get ProductState value
     * @return string|null
     */
    public function getProductState(): ?string
    {
        return $this->ProductState;
    }
    /**
     * Set ProductState value
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productState
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
     */
    public function setProductState(?string $productState = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::valueIsValid($productState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType', is_array($productState) ? implode(', ', $productState) : var_export($productState, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\ProductStateCodeType::getValidValues())), __LINE__);
        }
        $this->ProductState = $productState;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType
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
