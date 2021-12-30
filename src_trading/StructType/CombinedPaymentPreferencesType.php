<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CombinedPaymentPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to indicate if the seller supports <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a> orders, and if so, defines whether the
 * seller specifies any shipping discount before or after purchase. <br/><br/> <span class="tablenote"><b>Note:</b> In the past, this type was also used to indicate more settings related to Combined Invoice discounts, including the number of days that
 * buyers have to combine line items into a Combined Invoice, and detailed information on Calculated and Flat-Rate shipping discount profiles. However, these settings are now set through the <b>SetShippingDiscountProfiles</b> call (or through Shipping
 * Preferences in My eBay), and retrieved with the <b>GetShippingDiscountProfiles</b> call. </span>
 * @subpackage Structs
 */
class CombinedPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The CalculatedShippingPreferences
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Calculated Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $CalculatedShippingPreferences = null;
    /**
     * The CombinedPaymentOption
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not a seller wants to allow buyers to combine single order line items into a Combined Invoice order. A Combined Invoice order can be created by the buyer or seller if multiple unpaid order line items exist
     * between the same buyer and seller. Often, a Combined Invoice order can reduce shipping and handling expenses for the buyer and seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CombinedPaymentOption = null;
    /**
     * The CombinedPaymentPeriod
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS FIELD. As an alternative, use the <b>CombinedDuration</b> field in <b>SetShippingDiscountProfiles</b> to specify the time period in which to allow buyers to combine order line items into a Combined Invoice order, and
     * use <b>GetShippingDiscountProfiles</b> to retrieve the <b>CombinedDuration</b> value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CombinedPaymentPeriod = null;
    /**
     * The FlatShippingPreferences
     * Meta information extracted from the WSDL
     * - documentation: DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Flat Rate Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $FlatShippingPreferences = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CombinedPaymentPreferencesType
     * @uses CombinedPaymentPreferencesType::setCalculatedShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentOption()
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentPeriod()
     * @uses CombinedPaymentPreferencesType::setFlatShippingPreferences()
     * @uses CombinedPaymentPreferencesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @param string $combinedPaymentOption
     * @param string $combinedPaymentPeriod
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null, ?string $combinedPaymentOption = null, ?string $combinedPaymentPeriod = null, ?\macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences = null, $any = null)
    {
        $this
            ->setCalculatedShippingPreferences($calculatedShippingPreferences)
            ->setCombinedPaymentOption($combinedPaymentOption)
            ->setCombinedPaymentPeriod($combinedPaymentPeriod)
            ->setFlatShippingPreferences($flatShippingPreferences)
            ->setAny($any);
    }
    /**
     * Get CalculatedShippingPreferences value
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType|null
     */
    public function getCalculatedShippingPreferences(): ?\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType
    {
        return $this->CalculatedShippingPreferences;
    }
    /**
     * Set CalculatedShippingPreferences value
     * @param \macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCalculatedShippingPreferences(?\macropage\ebaysdk\trading\StructType\CalculatedShippingPreferencesType $calculatedShippingPreferences = null): self
    {
        $this->CalculatedShippingPreferences = $calculatedShippingPreferences;
        
        return $this;
    }
    /**
     * Get CombinedPaymentOption value
     * @return string|null
     */
    public function getCombinedPaymentOption(): ?string
    {
        return $this->CombinedPaymentOption;
    }
    /**
     * Set CombinedPaymentOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $combinedPaymentOption
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentOption(?string $combinedPaymentOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid($combinedPaymentOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType', is_array($combinedPaymentOption) ? implode(', ', $combinedPaymentOption) : var_export($combinedPaymentOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentOption = $combinedPaymentOption;
        
        return $this;
    }
    /**
     * Get CombinedPaymentPeriod value
     * @return string|null
     */
    public function getCombinedPaymentPeriod(): ?string
    {
        return $this->CombinedPaymentPeriod;
    }
    /**
     * Set CombinedPaymentPeriod value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $combinedPaymentPeriod
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentPeriod(?string $combinedPaymentPeriod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::valueIsValid($combinedPaymentPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType', is_array($combinedPaymentPeriod) ? implode(', ', $combinedPaymentPeriod) : var_export($combinedPaymentPeriod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentPeriod = $combinedPaymentPeriod;
        
        return $this;
    }
    /**
     * Get FlatShippingPreferences value
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType|null
     */
    public function getFlatShippingPreferences(): ?\macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType
    {
        return $this->FlatShippingPreferences;
    }
    /**
     * Set FlatShippingPreferences value
     * @param \macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setFlatShippingPreferences(?\macropage\ebaysdk\trading\StructType\FlatShippingPreferencesType $flatShippingPreferences = null): self
    {
        $this->FlatShippingPreferences = $flatShippingPreferences;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
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
