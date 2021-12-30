<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of a Store custom listing header.
 * @subpackage Structs
 */
class StoreCustomListingHeaderType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta information extracted from the WSDL
     * - documentation: Display type for the custom listing header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayType = null;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a logo.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Logo = null;
    /**
     * The SearchBox
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a search box.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SearchBox = null;
    /**
     * The LinkToInclude
     * Meta information extracted from the WSDL
     * - documentation: Link to include in the custom header.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[]
     */
    protected ?array $LinkToInclude = null;
    /**
     * The AddToFavoriteStores
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Add to Favorite Stores.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AddToFavoriteStores = null;
    /**
     * The SignUpForStoreNewsletter
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Sign up for Store Newsletter.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SignUpForStoreNewsletter = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreCustomListingHeaderType
     * @uses StoreCustomListingHeaderType::setDisplayType()
     * @uses StoreCustomListingHeaderType::setLogo()
     * @uses StoreCustomListingHeaderType::setSearchBox()
     * @uses StoreCustomListingHeaderType::setLinkToInclude()
     * @uses StoreCustomListingHeaderType::setAddToFavoriteStores()
     * @uses StoreCustomListingHeaderType::setSignUpForStoreNewsletter()
     * @uses StoreCustomListingHeaderType::setAny()
     * @param string $displayType
     * @param bool $logo
     * @param bool $searchBox
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @param bool $addToFavoriteStores
     * @param bool $signUpForStoreNewsletter
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $displayType = null, ?bool $logo = null, ?bool $searchBox = null, ?array $linkToInclude = null, ?bool $addToFavoriteStores = null, ?bool $signUpForStoreNewsletter = null, $any = null)
    {
        $this
            ->setDisplayType($displayType)
            ->setLogo($logo)
            ->setSearchBox($searchBox)
            ->setLinkToInclude($linkToInclude)
            ->setAddToFavoriteStores($addToFavoriteStores)
            ->setSignUpForStoreNewsletter($signUpForStoreNewsletter)
            ->setAny($any);
    }
    /**
     * Get DisplayType value
     * @return string|null
     */
    public function getDisplayType(): ?string
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $displayType
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setDisplayType(?string $displayType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid($displayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType', is_array($displayType) ? implode(', ', $displayType) : var_export($displayType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
        
        return $this;
    }
    /**
     * Get Logo value
     * @return bool|null
     */
    public function getLogo(): ?bool
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param bool $logo
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setLogo(?bool $logo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($logo) && !is_bool($logo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logo, true), gettype($logo)), __LINE__);
        }
        $this->Logo = $logo;
        
        return $this;
    }
    /**
     * Get SearchBox value
     * @return bool|null
     */
    public function getSearchBox(): ?bool
    {
        return $this->SearchBox;
    }
    /**
     * Set SearchBox value
     * @param bool $searchBox
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setSearchBox(?bool $searchBox = null): self
    {
        // validation for constraint: boolean
        if (!is_null($searchBox) && !is_bool($searchBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchBox, true), gettype($searchBox)), __LINE__);
        }
        $this->SearchBox = $searchBox;
        
        return $this;
    }
    /**
     * Get LinkToInclude value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[]
     */
    public function getLinkToInclude(): ?array
    {
        return $this->LinkToInclude;
    }
    /**
     * This method is responsible for validating the values passed to the setLinkToInclude method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkToInclude method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLinkToIncludeForArrayConstraintsFromSetLinkToInclude(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomListingHeaderTypeLinkToIncludeItem) {
            // validation for constraint: itemType
            if (!$storeCustomListingHeaderTypeLinkToIncludeItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType) {
                $invalidValues[] = is_object($storeCustomListingHeaderTypeLinkToIncludeItem) ? get_class($storeCustomListingHeaderTypeLinkToIncludeItem) : sprintf('%s(%s)', gettype($storeCustomListingHeaderTypeLinkToIncludeItem), var_export($storeCustomListingHeaderTypeLinkToIncludeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkToInclude property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LinkToInclude value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setLinkToInclude(?array $linkToInclude = null): self
    {
        // validation for constraint: array
        if ('' !== ($linkToIncludeArrayErrorMessage = self::validateLinkToIncludeForArrayConstraintsFromSetLinkToInclude($linkToInclude))) {
            throw new InvalidArgumentException($linkToIncludeArrayErrorMessage, __LINE__);
        }
        $this->LinkToInclude = $linkToInclude;
        
        return $this;
    }
    /**
     * Add item to LinkToInclude value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function addToLinkToInclude(\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType) {
            throw new InvalidArgumentException(sprintf('The LinkToInclude property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LinkToInclude[] = $item;
        
        return $this;
    }
    /**
     * Get AddToFavoriteStores value
     * @return bool|null
     */
    public function getAddToFavoriteStores(): ?bool
    {
        return $this->AddToFavoriteStores;
    }
    /**
     * Set AddToFavoriteStores value
     * @param bool $addToFavoriteStores
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setAddToFavoriteStores(?bool $addToFavoriteStores = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addToFavoriteStores) && !is_bool($addToFavoriteStores)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addToFavoriteStores, true), gettype($addToFavoriteStores)), __LINE__);
        }
        $this->AddToFavoriteStores = $addToFavoriteStores;
        
        return $this;
    }
    /**
     * Get SignUpForStoreNewsletter value
     * @return bool|null
     */
    public function getSignUpForStoreNewsletter(): ?bool
    {
        return $this->SignUpForStoreNewsletter;
    }
    /**
     * Set SignUpForStoreNewsletter value
     * @param bool $signUpForStoreNewsletter
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setSignUpForStoreNewsletter(?bool $signUpForStoreNewsletter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($signUpForStoreNewsletter) && !is_bool($signUpForStoreNewsletter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signUpForStoreNewsletter, true), gettype($signUpForStoreNewsletter)), __LINE__);
        }
        $this->SignUpForStoreNewsletter = $signUpForStoreNewsletter;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
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
