<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceCostOverrideListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ShippingServiceCostOverrideList</b> container, which is used when the seller wants to override the flat shipping costs for all domestic and/or all international shipping services defined in the Business Policies
 * shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field of an Add/Revise/Relist call. <br/><br/> Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each
 * <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
 * @subpackage Structs
 */
class ShippingServiceCostOverrideListType extends AbstractStructBase
{
    /**
     * The ShippingServiceCostOverride
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service that is defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of
     * the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services. <br/><br/> Shipping service cost
     * overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
     * <br/><br/> To override the shipping costs for each domestic shipping service in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for each international
     * shipping service, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching
     * shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     * <br/><br/> If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetSellerList</b> and <b>GetSellingManagerTemplates</b> calls.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType[]
     */
    public $ShippingServiceCostOverride;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceCostOverrideListType
     * @uses ShippingServiceCostOverrideListType::setShippingServiceCostOverride()
     * @uses ShippingServiceCostOverrideListType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     * @param \DOMDocument $any
     */
    public function __construct(array $shippingServiceCostOverride = array(), \DOMDocument $any = null)
    {
        $this
            ->setShippingServiceCostOverride($shippingServiceCostOverride)
            ->setAny($any);
    }
    /**
     * Get ShippingServiceCostOverride value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType[]|null
     */
    public function getShippingServiceCostOverride()
    {
        return $this->ShippingServiceCostOverride;
    }
    /**
     * Set ShippingServiceCostOverride value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
     */
    public function setShippingServiceCostOverride(array $shippingServiceCostOverride = array())
    {
        foreach ($shippingServiceCostOverride as $shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) {
            // validation for constraint: itemType
            if (!$shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType) {
                throw new \InvalidArgumentException(sprintf('The ShippingServiceCostOverride property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType, "%s" given', is_object($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) ? get_class($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem) : gettype($shippingServiceCostOverrideListTypeShippingServiceCostOverrideItem)), __LINE__);
            }
        }
        $this->ShippingServiceCostOverride = $shippingServiceCostOverride;
        return $this;
    }
    /**
     * Add item to ShippingServiceCostOverride value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
     */
    public function addToShippingServiceCostOverride(\macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServiceCostOverride property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingServiceCostOverride[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceCostOverrideListType
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
