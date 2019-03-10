<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreOptionsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>GetStoreOptions</b> call.
 * @subpackage Structs
 */
class GetStoreOptionsResponseType extends AbstractResponseType
{
    /**
     * The BasicThemeArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to
     * set/modify the theme for an eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public $BasicThemeArray;
    /**
     * The AdvancedThemeArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b>
     * call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public $AdvancedThemeArray;
    /**
     * The LogoArray
     * Meta informations extracted from the WSDL
     * - documentation: An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType
     */
    public $LogoArray;
    /**
     * The SubscriptionArray
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
     */
    public $SubscriptionArray;
    /**
     * The MaxCategories
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCategories;
    /**
     * The MaxCategoryLevels
     * Meta informations extracted from the WSDL
     * - documentation: This is the maximum number of category levels that can be set up in an eBay Store.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCategoryLevels;
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
    public function __construct(\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray = null, \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray = null, \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray = null, \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray = null, $maxCategories = null, $maxCategoryLevels = null)
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
    public function getBasicThemeArray()
    {
        return $this->BasicThemeArray;
    }
    /**
     * Set BasicThemeArray value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setBasicThemeArray(\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $basicThemeArray = null)
    {
        $this->BasicThemeArray = $basicThemeArray;
        return $this;
    }
    /**
     * Get AdvancedThemeArray value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType|null
     */
    public function getAdvancedThemeArray()
    {
        return $this->AdvancedThemeArray;
    }
    /**
     * Set AdvancedThemeArray value
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setAdvancedThemeArray(\macropage\ebaysdk\trading\StructType\StoreThemeArrayType $advancedThemeArray = null)
    {
        $this->AdvancedThemeArray = $advancedThemeArray;
        return $this;
    }
    /**
     * Get LogoArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType|null
     */
    public function getLogoArray()
    {
        return $this->LogoArray;
    }
    /**
     * Set LogoArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setLogoArray(\macropage\ebaysdk\trading\ArrayType\StoreLogoArrayType $logoArray = null)
    {
        $this->LogoArray = $logoArray;
        return $this;
    }
    /**
     * Get SubscriptionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType|null
     */
    public function getSubscriptionArray()
    {
        return $this->SubscriptionArray;
    }
    /**
     * Set SubscriptionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setSubscriptionArray(\macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType $subscriptionArray = null)
    {
        $this->SubscriptionArray = $subscriptionArray;
        return $this;
    }
    /**
     * Get MaxCategories value
     * @return int|null
     */
    public function getMaxCategories()
    {
        return $this->MaxCategories;
    }
    /**
     * Set MaxCategories value
     * @param int $maxCategories
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategories($maxCategories = null)
    {
        // validation for constraint: int
        if (!is_null($maxCategories) && !is_numeric($maxCategories)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCategories)), __LINE__);
        }
        $this->MaxCategories = $maxCategories;
        return $this;
    }
    /**
     * Get MaxCategoryLevels value
     * @return int|null
     */
    public function getMaxCategoryLevels()
    {
        return $this->MaxCategoryLevels;
    }
    /**
     * Set MaxCategoryLevels value
     * @param int $maxCategoryLevels
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
     */
    public function setMaxCategoryLevels($maxCategoryLevels = null)
    {
        // validation for constraint: int
        if (!is_null($maxCategoryLevels) && !is_numeric($maxCategoryLevels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCategoryLevels)), __LINE__);
        }
        $this->MaxCategoryLevels = $maxCategoryLevels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStoreOptionsResponseType
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
