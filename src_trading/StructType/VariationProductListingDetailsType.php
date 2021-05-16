<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationProductListingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>VariationProductListingDetails</b> container that is used to specify a Global Trade Item Number (GTIN), such as an EAN, an ISBN, or a UPC value, to identify a specific product variation in a
 * multiple-variation listing. For a multiple-variation listing, the same GTIN type(s) must be used for all product variations within the same listing. For instance, if specify an ISBN value for one product variation within the listing, an ISBN value
 * (and not an EAN or UPC value) must be specified for all product variations within the listing.
 * @subpackage Structs
 */
class VariationProductListingDetailsType extends AbstractStructBase
{
    /**
     * The ISBN
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10
     * and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required
     * for a category. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects ISBN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the
     * <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a
     * <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ISBN = null;
    /**
     * The UPC
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different
     * products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category. <br/><br/> <span class="tablenote"><b>Note: </b> If the listing is being posted to a category that
     * expects UPC values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b>
     * container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UPC = null;
    /**
     * The EAN
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many
     * industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category. <br/><br/> <span class="tablenote"><b>Note:
     * </b> If the listing is being posted to a category that expects EAN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the
     * <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EAN = null;
    /**
     * The ProductReferenceID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> DO NOT USE.<br/><br/>Currently, sellers cannot associate an eBay catalog product with single variations within a multiple-variation listing for any eBay category. If the seller attempts to supply
     * an eBay Product Identifier (ePID) at the variation level, a warning will get returned in the response stating that, '<i>Specifying a product identifier on a variant is not allowed in this category.</i>'.<br/><br/>The <b>ProductReferenceID</b> field
     * was originally added as part of the Product-Based Shopping Experience (PBSE) mandate, and eBay was going to allow and even require ePIDs to be specified for some leaf categories. However, with the rollback of the PBSE mandate, this field is not
     * currently applicable or supported. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductReferenceID = null;
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
     * Constructor method for VariationProductListingDetailsType
     * @uses VariationProductListingDetailsType::setISBN()
     * @uses VariationProductListingDetailsType::setUPC()
     * @uses VariationProductListingDetailsType::setEAN()
     * @uses VariationProductListingDetailsType::setProductReferenceID()
     * @uses VariationProductListingDetailsType::setNameValueList()
     * @uses VariationProductListingDetailsType::setAny()
     * @param string $iSBN
     * @param string $uPC
     * @param string $eAN
     * @param string $productReferenceID
     * @param \macropage\ebaysdk\trading\StructType\NameValueListType[] $nameValueList
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $iSBN = null, ?string $uPC = null, ?string $eAN = null, ?string $productReferenceID = null, array $nameValueList = [], $any = null)
    {
        $this
            ->setISBN($iSBN)
            ->setUPC($uPC)
            ->setEAN($eAN)
            ->setProductReferenceID($productReferenceID)
            ->setNameValueList($nameValueList)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
        foreach ($values as $variationProductListingDetailsTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$variationProductListingDetailsTypeNameValueListItem instanceof \macropage\ebaysdk\trading\StructType\NameValueListType) {
                $invalidValues[] = is_object($variationProductListingDetailsTypeNameValueListItem) ? get_class($variationProductListingDetailsTypeNameValueListItem) : sprintf('%s(%s)', gettype($variationProductListingDetailsTypeNameValueListItem), var_export($variationProductListingDetailsTypeNameValueListItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationProductListingDetailsType
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
