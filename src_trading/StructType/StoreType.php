<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreType StructType
 * Meta information extracted from the WSDL
 * - documentation: The configuration of an eBay Store.
 * @subpackage Structs
 */
class StoreType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the eBay Store. The name is shown at the top of the Store page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The URLPath
     * Meta information extracted from the WSDL
     * - documentation: The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the
     * URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URLPath = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: For the <b>GetStore</b> call, the value returned in this field indicates the user's eBay Store subscription level. <br> <br> For the <b>SetStore</b> call, the user can only cancel the current eBay Store subscription (using the
     * <b>Close</b> enumeration value), and cannot change the subscription level. A seller will have to go to the Subscriptions area of My eBay to change their subscription level. Keep in mind that an early termination fee may apply if a user has a yearly
     * subscription, and then either cancels their subscription, or downgrades their subscription level.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SubscriptionLevel = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Store description (300 characters maximum).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: Store logo.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreLogoType $Logo = null;
    /**
     * The Theme
     * Meta information extracted from the WSDL
     * - documentation: Store theme.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreThemeType $Theme = null;
    /**
     * The HeaderStyle
     * Meta information extracted from the WSDL
     * - documentation: Style for the Store header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HeaderStyle = null;
    /**
     * The HomePage
     * Meta information extracted from the WSDL
     * - documentation: Page to use as the Store's homepage (default is 0). To change the homepage, specify the PageID of one of the Store's custom pages.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HomePage = null;
    /**
     * The ItemListLayout
     * Meta information extracted from the WSDL
     * - documentation: The default layout type to use for the Store items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemListLayout = null;
    /**
     * The ItemListSortOrder
     * Meta information extracted from the WSDL
     * - documentation: The default sort order to use for the items for sale in the Store.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemListSortOrder = null;
    /**
     * The CustomHeaderLayout
     * Meta information extracted from the WSDL
     * - documentation: Layout for the Store's custom header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomHeaderLayout = null;
    /**
     * The CustomHeader
     * Meta information extracted from the WSDL
     * - documentation: Custom header text for the Store.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomHeader = null;
    /**
     * The ExportListings
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to export the Store listings to comparison shopping websites.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExportListings = null;
    /**
     * The CustomCategories
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of one or more <b>CustomCategory</b> containers. Each <b>CustomCategory</b> container consists of details related to an eBay Store custom category. <br> <br> To modify an eBay Store's custom
     * categories, an eBay Store owner would use the <b>StoreCategories</b> container in the request of a <b>SetStoreCategories</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $CustomCategories = null;
    /**
     * The CustomListingHeader
     * Meta information extracted from the WSDL
     * - documentation: Custom listing header for the Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $CustomListingHeader = null;
    /**
     * The MerchDisplay
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MerchDisplay = null;
    /**
     * The LastOpenedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time the store was last opened or reopened.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastOpenedTime = null;
    /**
     * The TitleWithCompatibility
     * Meta information extracted from the WSDL
     * - documentation: A flag indicating if a Compatibility tab exists for the Store item listing. This field is only applicable to Parts & Accessories listings in eBay US Motors. The Compatibility tab will contain vehicles that are compatible with the
     * part in the listing. The seller specifies this information at listing time.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TitleWithCompatibility = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $uRLPath = null, ?string $uRL = null, ?string $subscriptionLevel = null, ?string $description = null, ?\macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null, ?\macropage\ebaysdk\trading\StructType\StoreThemeType $theme = null, ?string $headerStyle = null, ?int $homePage = null, ?string $itemListLayout = null, ?string $itemListSortOrder = null, ?string $customHeaderLayout = null, ?string $customHeader = null, ?bool $exportListings = null, ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null, ?\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader = null, ?string $merchDisplay = null, ?string $lastOpenedTime = null, ?bool $titleWithCompatibility = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath(): ?string
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setURLPath(?string $uRLPath = null): self
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRLPath, true), gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel(): ?string
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setSubscriptionLevel(?string $subscriptionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Logo value
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function getLogo(): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $logo
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLogo(?\macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null): self
    {
        $this->Logo = $logo;
        
        return $this;
    }
    /**
     * Get Theme value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType|null
     */
    public function getTheme(): ?\macropage\ebaysdk\trading\StructType\StoreThemeType
    {
        return $this->Theme;
    }
    /**
     * Set Theme value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType $theme
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setTheme(?\macropage\ebaysdk\trading\StructType\StoreThemeType $theme = null): self
    {
        $this->Theme = $theme;
        
        return $this;
    }
    /**
     * Get HeaderStyle value
     * @return string|null
     */
    public function getHeaderStyle(): ?string
    {
        return $this->HeaderStyle;
    }
    /**
     * Set HeaderStyle value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $headerStyle
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setHeaderStyle(?string $headerStyle = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::valueIsValid($headerStyle)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType', is_array($headerStyle) ? implode(', ', $headerStyle) : var_export($headerStyle, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreHeaderStyleCodeType::getValidValues())), __LINE__);
        }
        $this->HeaderStyle = $headerStyle;
        
        return $this;
    }
    /**
     * Get HomePage value
     * @return int|null
     */
    public function getHomePage(): ?int
    {
        return $this->HomePage;
    }
    /**
     * Set HomePage value
     * @param int $homePage
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setHomePage(?int $homePage = null): self
    {
        // validation for constraint: int
        if (!is_null($homePage) && !(is_int($homePage) || ctype_digit($homePage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($homePage, true), gettype($homePage)), __LINE__);
        }
        $this->HomePage = $homePage;
        
        return $this;
    }
    /**
     * Get ItemListLayout value
     * @return string|null
     */
    public function getItemListLayout(): ?string
    {
        return $this->ItemListLayout;
    }
    /**
     * Set ItemListLayout value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemListLayout
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setItemListLayout(?string $itemListLayout = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::valueIsValid($itemListLayout)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType', is_array($itemListLayout) ? implode(', ', $itemListLayout) : var_export($itemListLayout, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListLayout = $itemListLayout;
        
        return $this;
    }
    /**
     * Get ItemListSortOrder value
     * @return string|null
     */
    public function getItemListSortOrder(): ?string
    {
        return $this->ItemListSortOrder;
    }
    /**
     * Set ItemListSortOrder value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemListSortOrder
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setItemListSortOrder(?string $itemListSortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::valueIsValid($itemListSortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType', is_array($itemListSortOrder) ? implode(', ', $itemListSortOrder) : var_export($itemListSortOrder, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreItemListSortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->ItemListSortOrder = $itemListSortOrder;
        
        return $this;
    }
    /**
     * Get CustomHeaderLayout value
     * @return string|null
     */
    public function getCustomHeaderLayout(): ?string
    {
        return $this->CustomHeaderLayout;
    }
    /**
     * Set CustomHeaderLayout value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $customHeaderLayout
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomHeaderLayout(?string $customHeaderLayout = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::valueIsValid($customHeaderLayout)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType', is_array($customHeaderLayout) ? implode(', ', $customHeaderLayout) : var_export($customHeaderLayout, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomHeaderLayoutCodeType::getValidValues())), __LINE__);
        }
        $this->CustomHeaderLayout = $customHeaderLayout;
        
        return $this;
    }
    /**
     * Get CustomHeader value
     * @return string|null
     */
    public function getCustomHeader(): ?string
    {
        return $this->CustomHeader;
    }
    /**
     * Set CustomHeader value
     * @param string $customHeader
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomHeader(?string $customHeader = null): self
    {
        // validation for constraint: string
        if (!is_null($customHeader) && !is_string($customHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customHeader, true), gettype($customHeader)), __LINE__);
        }
        $this->CustomHeader = $customHeader;
        
        return $this;
    }
    /**
     * Get ExportListings value
     * @return bool|null
     */
    public function getExportListings(): ?bool
    {
        return $this->ExportListings;
    }
    /**
     * Set ExportListings value
     * @param bool $exportListings
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setExportListings(?bool $exportListings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportListings) && !is_bool($exportListings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportListings, true), gettype($exportListings)), __LINE__);
        }
        $this->ExportListings = $exportListings;
        
        return $this;
    }
    /**
     * Get CustomCategories value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategories(): ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
    {
        return $this->CustomCategories;
    }
    /**
     * Set CustomCategories value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomCategories(?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null): self
    {
        $this->CustomCategories = $customCategories;
        
        return $this;
    }
    /**
     * Get CustomListingHeader value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType|null
     */
    public function getCustomListingHeader(): ?\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType
    {
        return $this->CustomListingHeader;
    }
    /**
     * Set CustomListingHeader value
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomListingHeader(?\macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderType $customListingHeader = null): self
    {
        $this->CustomListingHeader = $customListingHeader;
        
        return $this;
    }
    /**
     * Get MerchDisplay value
     * @return string|null
     */
    public function getMerchDisplay(): ?string
    {
        return $this->MerchDisplay;
    }
    /**
     * Set MerchDisplay value
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $merchDisplay
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setMerchDisplay(?string $merchDisplay = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid($merchDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType', is_array($merchDisplay) ? implode(', ', $merchDisplay) : var_export($merchDisplay, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->MerchDisplay = $merchDisplay;
        
        return $this;
    }
    /**
     * Get LastOpenedTime value
     * @return string|null
     */
    public function getLastOpenedTime(): ?string
    {
        return $this->LastOpenedTime;
    }
    /**
     * Set LastOpenedTime value
     * @param string $lastOpenedTime
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLastOpenedTime(?string $lastOpenedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastOpenedTime) && !is_string($lastOpenedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOpenedTime, true), gettype($lastOpenedTime)), __LINE__);
        }
        $this->LastOpenedTime = $lastOpenedTime;
        
        return $this;
    }
    /**
     * Get TitleWithCompatibility value
     * @return bool|null
     */
    public function getTitleWithCompatibility(): ?bool
    {
        return $this->TitleWithCompatibility;
    }
    /**
     * Set TitleWithCompatibility value
     * @param bool $titleWithCompatibility
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setTitleWithCompatibility(?bool $titleWithCompatibility = null): self
    {
        // validation for constraint: boolean
        if (!is_null($titleWithCompatibility) && !is_bool($titleWithCompatibility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($titleWithCompatibility, true), gettype($titleWithCompatibility)), __LINE__);
        }
        $this->TitleWithCompatibility = $titleWithCompatibility;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
