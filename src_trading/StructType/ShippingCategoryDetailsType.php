<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCategoryDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>ShippingCategoryDetails</b> container. When the <b>DetailName</b> field is set to ShippingCategoryDetails in a <b>GeteBayDetails</b> request, one <b>ShippingCategoryDetails</b> container is returned for each
 * valid shipping category used on the eBay site. Besides being useful to view the list of valid shipping categories, this container is also useful to discover when the last update to shipping categories was made by eBay.
 * @subpackage Structs
 */
class ShippingCategoryDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCategory
     * Meta information extracted from the WSDL
     * - documentation: Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more
     * information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site. <br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186). </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCategory = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping categories in a more user-friendly format (such as in a drop-down list). This field is localized per site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: The current version number for shipping categories. Sellers can compare this version number to their version number to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time of the last version update.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shippingCategory = null, ?string $description = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
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
    public function getShippingCategory(): ?string
    {
        return $this->ShippingCategory;
    }
    /**
     * Set ShippingCategory value
     * @param string $shippingCategory
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setShippingCategory(?string $shippingCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCategory) && !is_string($shippingCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCategory, true), gettype($shippingCategory)), __LINE__);
        }
        $this->ShippingCategory = $shippingCategory;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
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
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCategoryDetailsType
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
