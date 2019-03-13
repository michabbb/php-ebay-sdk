<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalShippingServiceOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container consisting of shipping costs and other details related to an international shipping service that is available to ship an item to the shipping destination specified in the <b>GetShippingCosts</b> call request.
 * @subpackage Structs
 */
class InternationalShippingServiceOptionType extends AbstractStructBase
{
    /**
     * The ShippingInsuranceCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingInsuranceCost;
    /**
     * The ShippingServiceName
     * Meta informations extracted from the WSDL
     * - documentation: The name of an international shipping service option available to ship the item to specified international shipping destination. This field is always returned with each <b>InternationalShippingServiceOption</b> container. <br/><br/>
     * <span class="tablenote"><b>Note: </b> If the seller is using eBay's Global Shipping Program (GSP) to ship the item to the international location, the string value returned in this field is 'International Priority Shipping'. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceName;
    /**
     * The ShippingServiceAdditionalCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should
     * always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the
     * value set for <b>ShippingServiceCost</b>. <br/><br/> The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple
     * quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the
     * <b>QuantitySold</b> of the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingServiceAdditionalCost;
    /**
     * The ShippingServiceCost
     * Meta informations extracted from the WSDL
     * - documentation: The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping
     * service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to
     * <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item. <br/><br/> <span class="tablenote"><b>Note: </b> The seller
     * is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not
     * returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of
     * the call request. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ShippingServiceCost;
    /**
     * The ShippingServicePriority
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the seller-preferred presentation order of the international shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service
     * appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to five
     * international shipping service options (including the Global Shipping Program option). This field should always be returned with each <b>InternationalShippingServiceOption</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServicePriority;
    /**
     * The ShipsTo
     * Meta informations extracted from the WSDL
     * - documentation: An international location or region to which the item may be shipped via this particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled
     * through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other
     * countries that are serviced by this shipping service option (or GSP).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShipsTo;
    /**
     * The EstimatedDeliveryMinTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the earliest date/time that the item could possibly reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate
     * purchase of the item at checkout.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryMinTime;
    /**
     * The EstimatedDeliveryMaxTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the latest date/time that the item should reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of
     * the item at checkout.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryMaxTime;
    /**
     * The ImportCharge
     * Meta informations extracted from the WSDL
     * - documentation: The estimated cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This field is only applicable for international orders being handled through the Global Shipping Program;
     * otherwise, it will not be returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ImportCharge;
    /**
     * The ShippingServiceCutOffTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer applicable and should not be returned for any international shipping service option.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCutOffTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InternationalShippingServiceOptionType
     * @uses InternationalShippingServiceOptionType::setShippingInsuranceCost()
     * @uses InternationalShippingServiceOptionType::setShippingServiceName()
     * @uses InternationalShippingServiceOptionType::setShippingServiceAdditionalCost()
     * @uses InternationalShippingServiceOptionType::setShippingServiceCost()
     * @uses InternationalShippingServiceOptionType::setShippingServicePriority()
     * @uses InternationalShippingServiceOptionType::setShipsTo()
     * @uses InternationalShippingServiceOptionType::setEstimatedDeliveryMinTime()
     * @uses InternationalShippingServiceOptionType::setEstimatedDeliveryMaxTime()
     * @uses InternationalShippingServiceOptionType::setImportCharge()
     * @uses InternationalShippingServiceOptionType::setShippingServiceCutOffTime()
     * @uses InternationalShippingServiceOptionType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost
     * @param string $shippingServiceName
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @param int $shippingServicePriority
     * @param string[] $shipsTo
     * @param string $estimatedDeliveryMinTime
     * @param string $estimatedDeliveryMaxTime
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $importCharge
     * @param string $shippingServiceCutOffTime
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null, $shippingServiceName = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null, \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null, $shippingServicePriority = null, array $shipsTo = array(), $estimatedDeliveryMinTime = null, $estimatedDeliveryMaxTime = null, \macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null, $shippingServiceCutOffTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingInsuranceCost($shippingInsuranceCost)
            ->setShippingServiceName($shippingServiceName)
            ->setShippingServiceAdditionalCost($shippingServiceAdditionalCost)
            ->setShippingServiceCost($shippingServiceCost)
            ->setShippingServicePriority($shippingServicePriority)
            ->setShipsTo($shipsTo)
            ->setEstimatedDeliveryMinTime($estimatedDeliveryMinTime)
            ->setEstimatedDeliveryMaxTime($estimatedDeliveryMaxTime)
            ->setImportCharge($importCharge)
            ->setShippingServiceCutOffTime($shippingServiceCutOffTime)
            ->setAny($any);
    }
    /**
     * Get ShippingInsuranceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingInsuranceCost()
    {
        return $this->ShippingInsuranceCost;
    }
    /**
     * Set ShippingInsuranceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShippingInsuranceCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingInsuranceCost = null)
    {
        $this->ShippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }
    /**
     * Get ShippingServiceName value
     * @return string|null
     */
    public function getShippingServiceName()
    {
        return $this->ShippingServiceName;
    }
    /**
     * Set ShippingServiceName value
     * @param string $shippingServiceName
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShippingServiceName($shippingServiceName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceName) && !is_string($shippingServiceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceName)), __LINE__);
        }
        $this->ShippingServiceName = $shippingServiceName;
        return $this;
    }
    /**
     * Get ShippingServiceAdditionalCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->ShippingServiceAdditionalCost;
    }
    /**
     * Set ShippingServiceAdditionalCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShippingServiceAdditionalCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceAdditionalCost = null)
    {
        $this->ShippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }
    /**
     * Get ShippingServiceCost value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getShippingServiceCost()
    {
        return $this->ShippingServiceCost;
    }
    /**
     * Set ShippingServiceCost value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShippingServiceCost(\macropage\ebaysdk\shopping\StructType\AmountType $shippingServiceCost = null)
    {
        $this->ShippingServiceCost = $shippingServiceCost;
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
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
     * Get ShipsTo value
     * @return string[]|null
     */
    public function getShipsTo()
    {
        return $this->ShipsTo;
    }
    /**
     * Set ShipsTo value
     * @throws \InvalidArgumentException
     * @param string[] $shipsTo
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShipsTo(array $shipsTo = array())
    {
        foreach ($shipsTo as $internationalShippingServiceOptionTypeShipsToItem) {
            // validation for constraint: itemType
            if (!is_string($internationalShippingServiceOptionTypeShipsToItem)) {
                throw new \InvalidArgumentException(sprintf('The ShipsTo property can only contain items of string, "%s" given', is_object($internationalShippingServiceOptionTypeShipsToItem) ? get_class($internationalShippingServiceOptionTypeShipsToItem) : gettype($internationalShippingServiceOptionTypeShipsToItem)), __LINE__);
            }
        }
        $this->ShipsTo = $shipsTo;
        return $this;
    }
    /**
     * Add item to ShipsTo value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function addToShipsTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ShipsTo property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipsTo[] = $item;
        return $this;
    }
    /**
     * Get EstimatedDeliveryMinTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMinTime()
    {
        return $this->EstimatedDeliveryMinTime;
    }
    /**
     * Set EstimatedDeliveryMinTime value
     * @param string $estimatedDeliveryMinTime
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setEstimatedDeliveryMinTime($estimatedDeliveryMinTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMinTime) && !is_string($estimatedDeliveryMinTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryMinTime)), __LINE__);
        }
        $this->EstimatedDeliveryMinTime = $estimatedDeliveryMinTime;
        return $this;
    }
    /**
     * Get EstimatedDeliveryMaxTime value
     * @return string|null
     */
    public function getEstimatedDeliveryMaxTime()
    {
        return $this->EstimatedDeliveryMaxTime;
    }
    /**
     * Set EstimatedDeliveryMaxTime value
     * @param string $estimatedDeliveryMaxTime
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setEstimatedDeliveryMaxTime($estimatedDeliveryMaxTime = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryMaxTime) && !is_string($estimatedDeliveryMaxTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryMaxTime)), __LINE__);
        }
        $this->EstimatedDeliveryMaxTime = $estimatedDeliveryMaxTime;
        return $this;
    }
    /**
     * Get ImportCharge value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getImportCharge()
    {
        return $this->ImportCharge;
    }
    /**
     * Set ImportCharge value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $importCharge
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setImportCharge(\macropage\ebaysdk\shopping\StructType\AmountType $importCharge = null)
    {
        $this->ImportCharge = $importCharge;
        return $this;
    }
    /**
     * Get ShippingServiceCutOffTime value
     * @return string|null
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->ShippingServiceCutOffTime;
    }
    /**
     * Set ShippingServiceCutOffTime value
     * @param string $shippingServiceCutOffTime
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
     */
    public function setShippingServiceCutOffTime($shippingServiceCutOffTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceCutOffTime) && !is_string($shippingServiceCutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceCutOffTime)), __LINE__);
        }
        $this->ShippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
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
     * @return \macropage\ebaysdk\shopping\StructType\InternationalShippingServiceOptionType
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
