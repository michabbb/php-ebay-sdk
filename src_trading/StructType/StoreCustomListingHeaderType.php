<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Configuration of a Store custom listing header.
 * @subpackage Structs
 */
class StoreCustomListingHeaderType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta informations extracted from the WSDL
     * - documentation: Display type for the custom listing header.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayType;
    /**
     * The Logo
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the custom header has a logo.
     * - minOccurs: 0
     * @var bool
     */
    public $Logo;
    /**
     * The SearchBox
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the custom header has a search box.
     * - minOccurs: 0
     * @var bool
     */
    public $SearchBox;
    /**
     * The LinkToInclude
     * Meta informations extracted from the WSDL
     * - documentation: Link to include in the custom header.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[]
     */
    public $LinkToInclude;
    /**
     * The AddToFavoriteStores
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Add to Favorite Stores.
     * - minOccurs: 0
     * @var bool
     */
    public $AddToFavoriteStores;
    /**
     * The SignUpForStoreNewsletter
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the custom header has a link to Sign up for Store Newsletter.
     * - minOccurs: 0
     * @var bool
     */
    public $SignUpForStoreNewsletter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($displayType = null, $logo = null, $searchBox = null, array $linkToInclude = array(), $addToFavoriteStores = null, $signUpForStoreNewsletter = null, \DOMDocument $any = null)
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
    public function getDisplayType()
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayType
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setDisplayType($displayType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::valueIsValid($displayType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $displayType, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
        return $this;
    }
    /**
     * Get Logo value
     * @return bool|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param bool $logo
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setLogo($logo = null)
    {
        // validation for constraint: boolean
        if (!is_null($logo) && !is_bool($logo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($logo)), __LINE__);
        }
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Get SearchBox value
     * @return bool|null
     */
    public function getSearchBox()
    {
        return $this->SearchBox;
    }
    /**
     * Set SearchBox value
     * @param bool $searchBox
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setSearchBox($searchBox = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchBox) && !is_bool($searchBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($searchBox)), __LINE__);
        }
        $this->SearchBox = $searchBox;
        return $this;
    }
    /**
     * Get LinkToInclude value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[]|null
     */
    public function getLinkToInclude()
    {
        return $this->LinkToInclude;
    }
    /**
     * Set LinkToInclude value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setLinkToInclude(array $linkToInclude = array())
    {
        foreach ($linkToInclude as $storeCustomListingHeaderTypeLinkToIncludeItem) {
            // validation for constraint: itemType
            if (!$storeCustomListingHeaderTypeLinkToIncludeItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType) {
                throw new \InvalidArgumentException(sprintf('The LinkToInclude property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType, "%s" given', is_object($storeCustomListingHeaderTypeLinkToIncludeItem) ? get_class($storeCustomListingHeaderTypeLinkToIncludeItem) : gettype($storeCustomListingHeaderTypeLinkToIncludeItem)), __LINE__);
            }
        }
        $this->LinkToInclude = $linkToInclude;
        return $this;
    }
    /**
     * Add item to LinkToInclude value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function addToLinkToInclude(\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType) {
            throw new \InvalidArgumentException(sprintf('The LinkToInclude property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LinkToInclude[] = $item;
        return $this;
    }
    /**
     * Get AddToFavoriteStores value
     * @return bool|null
     */
    public function getAddToFavoriteStores()
    {
        return $this->AddToFavoriteStores;
    }
    /**
     * Set AddToFavoriteStores value
     * @param bool $addToFavoriteStores
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setAddToFavoriteStores($addToFavoriteStores = null)
    {
        // validation for constraint: boolean
        if (!is_null($addToFavoriteStores) && !is_bool($addToFavoriteStores)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addToFavoriteStores)), __LINE__);
        }
        $this->AddToFavoriteStores = $addToFavoriteStores;
        return $this;
    }
    /**
     * Get SignUpForStoreNewsletter value
     * @return bool|null
     */
    public function getSignUpForStoreNewsletter()
    {
        return $this->SignUpForStoreNewsletter;
    }
    /**
     * Set SignUpForStoreNewsletter value
     * @param bool $signUpForStoreNewsletter
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public function setSignUpForStoreNewsletter($signUpForStoreNewsletter = null)
    {
        // validation for constraint: boolean
        if (!is_null($signUpForStoreNewsletter) && !is_bool($signUpForStoreNewsletter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signUpForStoreNewsletter)), __LINE__);
        }
        $this->SignUpForStoreNewsletter = $signUpForStoreNewsletter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
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
