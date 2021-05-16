<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreOptionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreOptions</b> call.
 * @subpackage Structs
 */
class GetStoreOptionsResponseType extends AbstractResponseType
{
    /**
     * The BasicThemeArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to
     * set/modify the theme for an eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $BasicThemeArray = null;
    /**
     * The AdvancedThemeArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b>
     * call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $AdvancedThemeArray = null;
    /**
     * The LogoArray
     * Meta information extracted from the WSDL
     * - documentation: An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $LogoArray = null;
    /**
     * The SubscriptionArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $SubscriptionArray = null;
    /**
     * The MaxCategories
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCategories = null;
    /**
     * The MaxCategoryLevels
     * Meta information extracted from the WSDL
     * - documentation: This is the maximum number of category levels that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCategoryLevels = null;
    /**
     * Constructor method for GetStoreOptionsResponseType
     * @uses GetStoreOptionsResponseType::setBasicThemeArray()
     * @uses GetStoreOptionsResponseType::setAdvancedThemeArray()
     * @uses GetStoreOptionsResponseType::setLogoArray()
     * @uses GetStoreOptionsResponseType::setSubscriptionArray()
     * @uses GetStoreOptionsResponseType::setMaxCategories()
     * @uses GetStoreOptionsResponseType::setMaxCategoryLevels()
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray
     * @param \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray
     * @param \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray
     * @param int $maxCategories
     * @param int $maxCategoryLevels
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray = null, ?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray = null, ?\macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray = null, ?\macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray = null, ?int $maxCategories = null, ?int $maxCategoryLevels = null)
    {
        $this
            ->setBasicThemeArray($basicThemeArray)
            ->setAdvancedThemeArray($advancedThemeArray)
            ->setLogoArray($logoArray)
            ->setSubscriptionArray($subscriptionArray)
            ->setMaxCategories($maxCategories)
            ->setMaxCategoryLevels($maxCategoryLevels);
    }
    /**
     * Get BasicThemeArray value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType|null
     */
    public function getBasicThemeArray(): ?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType
    {
        return $this->BasicThemeArray;
    }
    /**
     * Set BasicThemeArray value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setBasicThemeArray(?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray = null): self
    {
        $this->BasicThemeArray = $basicThemeArray;
        
        return $this;
    }
    /**
     * Get AdvancedThemeArray value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType|null
     */
    public function getAdvancedThemeArray(): ?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType
    {
        return $this->AdvancedThemeArray;
    }
    /**
     * Set AdvancedThemeArray value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setAdvancedThemeArray(?\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray = null): self
    {
        $this->AdvancedThemeArray = $advancedThemeArray;
        
        return $this;
    }
    /**
     * Get LogoArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType|null
     */
    public function getLogoArray(): ?\macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
    {
        return $this->LogoArray;
    }
    /**
     * Set LogoArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setLogoArray(?\macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray = null): self
    {
        $this->LogoArray = $logoArray;
        
        return $this;
    }
    /**
     * Get SubscriptionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType|null
     */
    public function getSubscriptionArray(): ?\macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
    {
        return $this->SubscriptionArray;
    }
    /**
     * Set SubscriptionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setSubscriptionArray(?\macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray = null): self
    {
        $this->SubscriptionArray = $subscriptionArray;
        
        return $this;
    }
    /**
     * Get MaxCategories value
     * @return int|null
     */
    public function getMaxCategories(): ?int
    {
        return $this->MaxCategories;
    }
    /**
     * Set MaxCategories value
     * @param int $maxCategories
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategories(?int $maxCategories = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCategories) && !(is_int($maxCategories) || ctype_digit($maxCategories))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCategories, true), gettype($maxCategories)), __LINE__);
        }
        $this->MaxCategories = $maxCategories;
        
        return $this;
    }
    /**
     * Get MaxCategoryLevels value
     * @return int|null
     */
    public function getMaxCategoryLevels(): ?int
    {
        return $this->MaxCategoryLevels;
    }
    /**
     * Set MaxCategoryLevels value
     * @param int $maxCategoryLevels
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategoryLevels(?int $maxCategoryLevels = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCategoryLevels) && !(is_int($maxCategoryLevels) || ctype_digit($maxCategoryLevels))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCategoryLevels, true), gettype($maxCategoryLevels)), __LINE__);
        }
        $this->MaxCategoryLevels = $maxCategoryLevels;
        
        return $this;
    }
}
