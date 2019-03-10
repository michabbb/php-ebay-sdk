<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceCostOverrideType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat shipping costs for each domestic and/or international shipping service that is defined in the
 * <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical
 * item, and any shipping surcharges applicable to domestic shipping services. A <strong>ShippingServiceCostOverride</strong> container is required for every domestic and/or international shipping service that is defined in the Business Policies
 * shipping profile. For example, you cannot override the shipping costs for one domestic shipping service but not the other domestic shipping services defined in the Business Policies shipping profile. The same rule applies to international shipping
 * services.
 * @subpackage Structs
 */
class ShippingServiceCostOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServicePriority
     * Meta informations extracted from the WSDL
     * - documentation: This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of
     * the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping
     * costs for domestic shipping services, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for international shipping services, the <strong>ShippingServiceType</strong> field should be set to
     * 'International'. <br/><br/> If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ShippingServiceType
     * Meta informations extracted from the WSDL
     * - documentation: This enumerated value indicates whether domestic or international shipping costs are being overridden. To override the shipping costs for each domestic shipping service in the Business Policies shipping profile, this field should be
     * set to 'Domestic', and to override the shipping costs for each international shipping service, this field should be set to 'International'.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong>
     * value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServiceAdditionalCost
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding
     * <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the
     * Business Policies shipping profile. <br/><br/> This field is only applicable to multi-quantity, fixed-price listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingSurcharge
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the shipping surcharge applicable to the domestic shipping service. If the shipping service costs override operation is successful, this value will override the corresponding
     * <strong>shippingSurcharge</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> container in the Business Policies shipping profile. <br/><br/> This field can only be used if the shipping surcharges are applicable for the
     * corresponding shipping service.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingSurcharge;
    /**
     * Constructor method for ShippingServiceCostOverrideType
     * @uses ShippingServiceCostOverrideType::setShippingServicePriority()
     * @uses ShippingServiceCostOverrideType::setShippingServiceType()
     * @uses ShippingServiceCostOverrideType::setAny()
     * @uses ShippingServiceCostOverrideType::setShippingServiceCost()
     * @uses ShippingServiceCostOverrideType::setShippingServiceAdditionalCost()
     * @uses ShippingServiceCostOverrideType::setShippingSurcharge()
     * @param int $shippingServicePriority
     * @param string $shippingServiceType
     * @param \DOMDocument $any
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge
     */
    public function __construct($shippingServicePriority = null, $shippingServiceType = null, \DOMDocument $any = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge = null)
    {
        $this
            ->setShippingServicePriority($shippingServicePriority)
            ->setShippingServiceType($shippingServiceType)
            ->setAny($any)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingSurcharge($shippingSurcharge);
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority()
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServicePriority($shippingServicePriority = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !is_numeric($shippingServicePriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        return $this;
    }
    /**
     * Get ShippingServiceType value
     * @return string|null
     */
    public function getShippingServiceType()
    {
        return $this->ShippingServiceType;
    }
    /**
     * Set ShippingServiceType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingServiceType
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceType($shippingServiceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingServiceType::valueIsValid($shippingServiceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingServiceType, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingServiceType::getValidValues())), __LINE__);
        }
        $this->ShippingServiceType = $shippingServiceType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceAdditionalCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingSurcharge value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingSurcharge()
    {
        return $this->ShippingSurcharge;
    }
    /**
     * Set ShippingSurcharge value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingSurcharge(\macropage\ebaysdk\trading\StructType\AmountType $shippingSurcharge = null)
    {
        $this->ShippingSurcharge = $shippingSurcharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
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
