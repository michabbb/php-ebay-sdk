<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCategoryDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>ShippingCategoryDetails</b> container. When the <b>DetailName</b> field is set to ShippingCategoryDetails in a <b>GeteBayDetails</b> request, one <b>ShippingCategoryDetails</b> container is returned for each
 * valid shipping category used on the eBay site. Besides being useful to view the list of valid shipping categories, this container is also useful to discover when the last update to shipping categories was made by eBay.
 * @subpackage Structs
 */
class ShippingCategoryDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCategory
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more
     * information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site. <br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186). </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCategory;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping categories in a more user-friendly format (such as in a drop-down list). This field is localized per site.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: The current version number for shipping categories. Sellers can compare this version number to their version number to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the time of the last version update.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingCategoryDetailsType
     * @uses ShippingCategoryDetailsType::setShippingCategory()
     * @uses ShippingCategoryDetailsType::setDescription()
     * @uses ShippingCategoryDetailsType::setDetailVersion()
     * @uses ShippingCategoryDetailsType::setUpdateTime()
     * @uses ShippingCategoryDetailsType::setAny()
     * @param string $shippingCategory
     * @param string $description
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($shippingCategory = null, $description = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingCategory($shippingCategory)
            ->setDescription($description)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get ShippingCategory value
     * @return string|null
     */
    public function getShippingCategory()
    {
        return $this->ShippingCategory;
    }
    /**
     * Set ShippingCategory value
     * @param string $shippingCategory
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setShippingCategory($shippingCategory = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCategory) && !is_string($shippingCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCategory)), __LINE__);
        }
        $this->ShippingCategory = $shippingCategory;
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
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
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
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
