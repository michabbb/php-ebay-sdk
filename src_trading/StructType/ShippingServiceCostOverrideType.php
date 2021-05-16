<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceCostOverrideType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat shipping costs for a domestic and/or international shipping service option that is defined in the
 * <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical
 * item, and any shipping surcharges applicable to domestic shipping services. A <strong>ShippingServiceCostOverride</strong> container is required for each domestic and/or international shipping service option whose costs the seller wishes to override.
 * @subpackage Structs
 */
class ShippingServiceCostOverrideType extends AbstractStructBase
{
    /**
     * The ShippingServicePriority
     * Meta information extracted from the WSDL
     * - documentation: This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of
     * the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping
     * costs for a domestic shipping service, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for an international shipping service, the <strong>ShippingServiceType</strong> field should be set
     * to 'International'. <br/><br/> If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingServicePriority = null;
    /**
     * The ShippingServiceType
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value indicates whether the shipping costs of a domestic or an international shipping costs are being overridden. To override the shipping costs for any domestic shipping service in the Business Policies shipping
     * profile, this field should be set to 'Domestic', and to override the shipping costs for any international shipping service, this field should be set to 'International'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The ShippingServiceCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong>
     * value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingServiceCost = null;
    /**
     * The ShippingServiceAdditionalCost
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding
     * <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the
     * Business Policies shipping profile. <br/><br/> This field is only applicable to multi-quantity, fixed-price listings.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingServiceAdditionalCost = null;
    /**
     * Constructor method for ShippingServiceCostOverrideType
     * @uses ShippingServiceCostOverrideType::setShippingServicePriority()
     * @uses ShippingServiceCostOverrideType::setShippingServiceType()
     * @uses ShippingServiceCostOverrideType::setAny()
     * @uses ShippingServiceCostOverrideType::setShippingServiceCost()
     * @uses ShippingServiceCostOverrideType::setShippingServiceAdditionalCost()
     * @param int $shippingServicePriority
     * @param string $shippingServiceType
     * @param \DOMDocument|string|null $any
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     */
    public function __construct(?int $shippingServicePriority = null, ?string $shippingServiceType = null, $any = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this
            ->setShippingServicePriority($shippingServicePriority)
            ->setShippingServiceType($shippingServiceType)
            ->setAny($any)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost);
    }
    /**
     * Get ShippingServicePriority value
     * @return int|null
     */
    public function getShippingServicePriority(): ?int
    {
        return $this->ShippingServicePriority;
    }
    /**
     * Set ShippingServicePriority value
     * @param int $shippingServicePriority
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServicePriority(?int $shippingServicePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingServicePriority) && !(is_int($shippingServicePriority) || ctype_digit($shippingServicePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingServicePriority, true), gettype($shippingServicePriority)), __LINE__);
        }
        $this->ShippingServicePriority = $shippingServicePriority;
        
        return $this;
    }
    /**
     * Get ShippingServiceType value
     * @return string|null
     */
    public function getShippingServiceType(): ?string
    {
        return $this->ShippingServiceType;
    }
    /**
     * Set ShippingServiceType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingServiceType
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceType(?string $shippingServiceType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingServiceType::valueIsValid($shippingServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingServiceType', is_array($shippingServiceType) ? implode(', ', $shippingServiceType) : var_export($shippingServiceType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingServiceType::getValidValues())), __LINE__);
        }
        $this->ShippingServiceType = $shippingServiceType;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
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
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceCost = null): self
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType
     */
    public function setShippingServiceAdditionalCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingServiceAdditionalCost = null): self
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        
        return $this;
    }
}
