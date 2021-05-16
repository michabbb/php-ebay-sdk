<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCostPaidByDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>ShippingCostPaidBy</b> container that is returned in <b>GeteBayDetails</b> if <b>ReturnPolicyDetails</b> is set as a <b>DetailName</b> value (or if no value is included in the request). <br><br> <span
 * class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover
 * what return shipping 'payee' values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsShipmentPayeeValues</code> and/or <code>InternationalReturnsShipmentPayeeValues</code> as <b>FeatureID</b>
 * values to see the return shipping 'payee' values available for domestic and international returns, respectively. </span>
 * @subpackage Structs
 */
class ShippingCostPaidByDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: The party who pays the shipping cost for a returned item. This value can be passed in the Add/Revise/Relist calls.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCostPaidByOption = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the Add/Revise/Relist calls. (Use <b>ShippingCostPaidBy</b>
     * instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShippingCostPaidByDetailsType
     * @uses ShippingCostPaidByDetailsType::setShippingCostPaidByOption()
     * @uses ShippingCostPaidByDetailsType::setDescription()
     * @uses ShippingCostPaidByDetailsType::setAny()
     * @param string $shippingCostPaidByOption
     * @param string $description
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shippingCostPaidByOption = null, ?string $description = null, $any = null)
    {
        $this
            ->setShippingCostPaidByOption($shippingCostPaidByOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get ShippingCostPaidByOption value
     * @return string|null
     */
    public function getShippingCostPaidByOption(): ?string
    {
        return $this->ShippingCostPaidByOption;
    }
    /**
     * Set ShippingCostPaidByOption value
     * @param string $shippingCostPaidByOption
     * @return \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType
     */
    public function setShippingCostPaidByOption(?string $shippingCostPaidByOption = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidByOption) && !is_string($shippingCostPaidByOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidByOption, true), gettype($shippingCostPaidByOption)), __LINE__);
        }
        $this->ShippingCostPaidByOption = $shippingCostPaidByOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCostPaidByDetailsType
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
