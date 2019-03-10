<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The configuration of an eBay Store.
 * @subpackage Structs
 */
class StoreType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name of the eBay Store. The name is shown at the top of the Store page.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URLPath
     * Meta informations extracted from the WSDL
     * - documentation: The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the
     * URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
     * - minOccurs: 0
     * @var string
     */
    public $URLPath;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The SubscriptionLevel
     * Meta informations extracted from the WSDL
     * - documentation: Subscription level (tier) for the user's eBay Store.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Store description (300 characters maximum).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Logo
     * Meta informations extracted from the WSDL
     * - documentation: Store logo.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public $Logo;
    /**
     * The Theme
     * Meta informations extracted from the WSDL
     * - documentation: Store theme.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeType
     */
    public $Theme;
    /**
     * The HeaderStyle
     * Meta informations extracted from the WSDL
     * - documentation: Style for the Store header.
     * - minOccurs: 0
     * @var string
     */
    public $HeaderStyle;
    /**
     * The HomePage
     * Meta informations extracted from the WSDL
     * - documentation: Page to use as the Store's homepage (default is 0). To change the homepage, specify the PageID of one of the Store's custom pages.
     * - minOccurs: 0
     * @var int
     */
    public $HomePage;
    /**
     * The ItemListLayout
     * Meta informations extracted from the WSDL
     * - documentation: The default layout type to use for the Store items.
     * - minOccurs: 0
     * @var string
     */
    public $ItemListLayout;
    /**
     * The ItemListSortOrder
     * Meta informations extracted from the WSDL
     * - documentation: The default sort order to use for the items for sale in the Store.
     * - minOccurs: 0
     * @var string
     */
    public $ItemListSortOrder;
    /**
     * The CustomHeaderLayout
     * Meta informations extracted from the WSDL
     * - documentation: Layout for the Store's custom header.
     * - minOccurs: 0
     * @var string
     */
    public $CustomHeaderLayout;
    /**
     * The CustomHeader
     * Meta informations extracted from the WSDL
     * - documentation: Custom header text for the Store.
     * - minOccurs: 0
     * @var string
     */
    public $CustomHeader;
    /**
     * The ExportListings
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether to export the Store listings to comparison shopping websites.
     * - minOccurs: 0
     * @var bool
     */
    public $ExportListings;
    /**
     * The CustomCategories
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of an array of one or more <b>CustomCategory</b> containers. Each <b>CustomCategory</b> container consists of details related to an eBay Store custom category. <br> <br> To modify an eBay Store's custom
     * categories, an eBay Store owner would use the <b>StoreCategories</b> container in the request of a <b>SetStoreCategories</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public $CustomCategories;
    /**
     * The CustomListingHeader
     * Meta informations extracted from the WSDL
     * - documentation: Custom listing header for the Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
     */
    public $CustomListingHeader;
    /**
     * The MerchDisplay
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $MerchDisplay;
    /**
     * The LastOpenedTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the time the store was last opened or reopened.
     * - minOccurs: 0
     * @var string
     */
    public $LastOpenedTime;
    /**
     * The TitleWithCompatibility
     * Meta informations extracted from the WSDL
     * - documentation: A flag indicating if a Compatibility tab exists for the Store item listing. This field is only applicable to Parts & Accessories listings in eBay US Motors. The Compatibility tab will contain vehicles that are compatible with the
     * part in the listing. The seller specifies this information at listing time.
     * - minOccurs: 0
     * @var bool
     */
    public $TitleWithCompatibility;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreType
     * @uses StoreType::setName()
     * @uses StoreType::setURLPath()
     * @uses StoreType::setURL()
     * @uses StoreType::setSubscriptionLevel()
     * @uses StoreType::setDescription()
     * @uses StoreType::setLogo()
     * @uses StoreType::setTheme()
     * @uses StoreType::setHeaderStyle()
     * @uses StoreType::setHomePage()
     * @uses StoreType::setItemListLayout()
     * @uses StoreType::setItemListSortOrder()
     * @uses StoreType::setCustomHeaderLayout()
     * @uses StoreType::setCustomHeader()
     * @uses StoreType::setExportListings()
     * @uses StoreType::setCustomCategories()
     * @uses StoreType::setCustomListingHeader()
     * @uses StoreType::setMerchDisplay()
     * @uses StoreType::setLastOpenedTime()
     * @uses StoreType::setTitleWithCompatibility()
     * @uses StoreType::setAny()
     * @param string $name
     * @param string $uRLPath
     * @param string $uRL
     * @param string $subscriptionLevel
     * @param string $description
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $logo
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType $theme
     * @param string $headerStyle
     * @param int $homePage
     * @param string $itemListLayout
     * @param string $itemListSortOrder
     * @param string $customHeaderLayout
     * @param string $customHeader
     * @param bool $exportListings
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader
     * @param string $merchDisplay
     * @param string $lastOpenedTime
     * @param bool $titleWithCompatibility
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $uRLPath = null, $uRL = null, $subscriptionLevel = null, $description = null, \macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null, \macropage\ebaysdk\trading\StructType\StoreThemeType $theme = null, $headerStyle = null, $homePage = null, $itemListLayout = null, $itemListSortOrder = null, $customHeaderLayout = null, $customHeader = null, $exportListings = null, \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null, \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader = null, $merchDisplay = null, $lastOpenedTime = null, $titleWithCompatibility = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setURLPath($uRLPath)
            ->setURL($uRL)
            ->setSubscriptionLevel($subscriptionLevel)
            ->setDescription($description)
            ->setLogo($logo)
            ->setTheme($theme)
            ->setHeaderStyle($headerStyle)
            ->setHomePage($homePage)
            ->setItemListLayout($itemListLayout)
            ->setItemListSortOrder($itemListSortOrder)
            ->setCustomHeaderLayout($customHeaderLayout)
            ->setCustomHeader($customHeader)
            ->setExportListings($exportListings)
            ->setCustomCategories($customCategories)
            ->setCustomListingHeader($customListingHeader)
            ->setMerchDisplay($merchDisplay)
            ->setLastOpenedTime($lastOpenedTime)
            ->setTitleWithCompatibility($titleWithCompatibility)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath()
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setURLPath($uRLPath = null)
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscriptionLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Logo value
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $logo
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLogo(\macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null)
    {
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Get Theme value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType|null
     */
    public function getTheme()
    {
        return $this->Theme;
    }
    /**
     * Set Theme value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType $theme
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setTheme(\macropage\ebaysdk\trading\StructType\StoreThemeType $theme = null)
    {
        $this->Theme = $theme;
        return $this;
    }
    /**
     * Get HeaderStyle value
     * @return string|null
     */
    public function getHeaderStyle()
    {
        return $this->HeaderStyle;
    }
    /**
     * Set HeaderStyle value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $headerStyle
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setHeaderStyle($headerStyle = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::valueIsValid($headerStyle)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $headerStyle, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::getValidValues())), __LINE__);
        }
        $this->HeaderStyle = $headerStyle;
        return $this;
    }
    /**
     * Get HomePage value
     * @return int|null
     */
    public function getHomePage()
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param int $homePage
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setHomePage($homePage = null)
    {
        // validation for constraint: int
        if (!is_null($homePage) && !is_numeric($homePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($homePage)), __LINE__);
        }
        $this->HomePage = $homePage;
        return $this;
    }
    /**
     * Get ItemListLayout value
     * @return string|null
     */
    public function getItemListLayout()
    {
        return $this->ItemListLayout;
    }
    /**
     * Set ItemListLayout value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemListLayout
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setItemListLayout($itemListLayout = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::valueIsValid($itemListLayout)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemListLayout, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListLayout = $itemListLayout;
        return $this;
    }
    /**
     * Get ItemListSortOrder value
     * @return string|null
     */
    public function getItemListSortOrder()
    {
        return $this->ItemListSortOrder;
    }
    /**
     * Set ItemListSortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemListSortOrder
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setItemListSortOrder($itemListSortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid($itemListSortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $itemListSortOrder, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListSortOrder = $itemListSortOrder;
        return $this;
    }
    /**
     * Get CustomHeaderLayout value
     * @return string|null
     */
    public function getCustomHeaderLayout()
    {
        return $this->CustomHeaderLayout;
    }
    /**
     * Set CustomHeaderLayout value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customHeaderLayout
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomHeaderLayout($customHeaderLayout = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid($customHeaderLayout)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customHeaderLayout, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->CustomHeaderLayout = $customHeaderLayout;
        return $this;
    }
    /**
     * Get CustomHeader value
     * @return string|null
     */
    public function getCustomHeader()
    {
        return $this->CustomHeader;
    }
    /**
     * Set CustomHeader value
     * @param string $customHeader
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomHeader($customHeader = null)
    {
        // validation for constraint: string
        if (!is_null($customHeader) && !is_string($customHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customHeader)), __LINE__);
        }
        $this->CustomHeader = $customHeader;
        return $this;
    }
    /**
     * Get ExportListings value
     * @return bool|null
     */
    public function getExportListings()
    {
        return $this->ExportListings;
    }
    /**
     * Set ExportListings value
     * @param bool $exportListings
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setExportListings($exportListings = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportListings) && !is_bool($exportListings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exportListings)), __LINE__);
        }
        $this->ExportListings = $exportListings;
        return $this;
    }
    /**
     * Get CustomCategories value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategories()
    {
        return $this->CustomCategories;
    }
    /**
     * Set CustomCategories value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomCategories(\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null)
    {
        $this->CustomCategories = $customCategories;
        return $this;
    }
    /**
     * Get CustomListingHeader value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType|null
     */
    public function getCustomListingHeader()
    {
        return $this->CustomListingHeader;
    }
    /**
     * Set CustomListingHeader value
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomListingHeader(\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader = null)
    {
        $this->CustomListingHeader = $customListingHeader;
        return $this;
    }
    /**
     * Get MerchDisplay value
     * @return string|null
     */
    public function getMerchDisplay()
    {
        return $this->MerchDisplay;
    }
    /**
     * Set MerchDisplay value
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $merchDisplay
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setMerchDisplay($merchDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid($merchDisplay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $merchDisplay, implode(', ', \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->MerchDisplay = $merchDisplay;
        return $this;
    }
    /**
     * Get LastOpenedTime value
     * @return string|null
     */
    public function getLastOpenedTime()
    {
        return $this->LastOpenedTime;
    }
    /**
     * Set LastOpenedTime value
     * @param string $lastOpenedTime
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLastOpenedTime($lastOpenedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastOpenedTime) && !is_string($lastOpenedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastOpenedTime)), __LINE__);
        }
        $this->LastOpenedTime = $lastOpenedTime;
        return $this;
    }
    /**
     * Get TitleWithCompatibility value
     * @return bool|null
     */
    public function getTitleWithCompatibility()
    {
        return $this->TitleWithCompatibility;
    }
    /**
     * Set TitleWithCompatibility value
     * @param bool $titleWithCompatibility
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setTitleWithCompatibility($titleWithCompatibility = null)
    {
        // validation for constraint: boolean
        if (!is_null($titleWithCompatibility) && !is_bool($titleWithCompatibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($titleWithCompatibility)), __LINE__);
        }
        $this->TitleWithCompatibility = $titleWithCompatibility;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
