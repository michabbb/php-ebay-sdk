<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountPriceInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: This container supplies information for an item that has a Strike-Through Pricing (STP) or Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK,
 * and DE sites while MAP is available only on the US site. <br><br> This feature is available to qualified sellers who participate in the Discount Pricing program. A seller can provide a discount price treatment for Non-MSKU and MSKU items in Clothing,
 * Shoes and Accessories (CDA), Motors, and Electronics (Home and Garden is expected to be supported in the future).
 * @subpackage Structs
 */
class DiscountPriceInfo extends AbstractStructBase
{
    /**
     * The originalRetailPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the price to which a discounted-price display treatment is to be applied (for example, a strikethrough price). The discounted price of an item (specified in the currentPrice field) is the BIN price and is less
     * than the originalRetailPrice of the item.
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $originalRetailPrice;
    /**
     * The minimumAdvertisedPriceExposure
     * Meta informations extracted from the WSDL
     * - documentation: If pricingTreatment is MAP, the item price cannot be displayed directly on the page containing the item. When listing a MAP item, the seller stipulates how they want the buyer to view the price of the item by setting this field to
     * either PreCheckout or DuringCheckout. <br /><br /> If this field is set to PreCheckout, the buyer must click a link (or button) to view the item price on a different page (such as in a pop-up window). If this field is set to DuringCheckout, the
     * currentPrice must be shown only when the buyer is driven to the eBay site, where the price is displayed in the checkout flow. <br /><br /> MAP items are supported only on the eBay US site.
     * - minOccurs: 0
     * @var string
     */
    public $minimumAdvertisedPriceExposure;
    /**
     * The pricingTreatment
     * Meta informations extracted from the WSDL
     * - documentation: This field denotes whether or not an item qualifies for a discount pricing treatment display. If a seller lists an item with DiscountPriceInfo values, the item response container will include a DiscountPriceInfo container, and this
     * field will be set to either STP, MAP, or None. If this field is set to MAP, you must abide by the rules for displaying MAP items, as described in minimumAdvertisedPriceExposure. <br /><br /> <span class="tablenote"><b>Important:</b> For listings that
     * return PricingTreatment set to MAP, you are legally required to follow the rules for displaying the price of the item to potential buyers. You are bound by the terms of the API License Agreement to follow these rules. Refer to the API License
     * Agreement for consequences of non-compliance. </span>
     * @var string
     */
    public $pricingTreatment;
    /**
     * The soldOnEbay
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as currentPrice) is the price for which the seller offered the same (or similar) item for sale on eBay within the previous 30
     * days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffEbay and soldOnEbay fields are set, soldOnEbay takes precedence.
     * - minOccurs: 0
     * @var bool
     */
    public $soldOnEbay;
    /**
     * The soldOffEbay
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as currentPrice) is the price for which the seller offered the same item for sale on a web site or offline store other than eBay
     * in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffEbay and soldOnEbay fields are set, soldOnEbay takes precedence.
     * - minOccurs: 0
     * @var bool
     */
    public $soldOffEbay;
    /**
     * Constructor method for DiscountPriceInfo
     * @uses DiscountPriceInfo::setOriginalRetailPrice()
     * @uses DiscountPriceInfo::setMinimumAdvertisedPriceExposure()
     * @uses DiscountPriceInfo::setPricingTreatment()
     * @uses DiscountPriceInfo::setSoldOnEbay()
     * @uses DiscountPriceInfo::setSoldOffEbay()
     * @param \macropage\ebaysdk\finding\StructType\Amount $originalRetailPrice
     * @param string $minimumAdvertisedPriceExposure
     * @param string $pricingTreatment
     * @param bool $soldOnEbay
     * @param bool $soldOffEbay
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\Amount $originalRetailPrice = null, $minimumAdvertisedPriceExposure = null, $pricingTreatment = null, $soldOnEbay = false, $soldOffEbay = false)
    {
        $this
            ->setOriginalRetailPrice($originalRetailPrice)
            ->setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure)
            ->setPricingTreatment($pricingTreatment)
            ->setSoldOnEbay($soldOnEbay)
            ->setSoldOffEbay($soldOffEbay);
    }
    /**
     * Get originalRetailPrice value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getOriginalRetailPrice()
    {
        return $this->originalRetailPrice;
    }
    /**
     * Set originalRetailPrice value
     * @param \macropage\ebaysdk\finding\StructType\Amount $originalRetailPrice
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public function setOriginalRetailPrice(\macropage\ebaysdk\finding\StructType\Amount $originalRetailPrice = null)
    {
        $this->originalRetailPrice = $originalRetailPrice;
        return $this;
    }
    /**
     * Get minimumAdvertisedPriceExposure value
     * @return string|null
     */
    public function getMinimumAdvertisedPriceExposure()
    {
        return $this->minimumAdvertisedPriceExposure;
    }
    /**
     * Set minimumAdvertisedPriceExposure value
     * @uses \macropage\ebaysdk\finding\EnumType\MapExposureEnum::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\MapExposureEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $minimumAdvertisedPriceExposure
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public function setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\MapExposureEnum::valueIsValid($minimumAdvertisedPriceExposure)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumAdvertisedPriceExposure, implode(', ', \macropage\ebaysdk\finding\EnumType\MapExposureEnum::getValidValues())), __LINE__);
        }
        $this->minimumAdvertisedPriceExposure = $minimumAdvertisedPriceExposure;
        return $this;
    }
    /**
     * Get pricingTreatment value
     * @return string|null
     */
    public function getPricingTreatment()
    {
        return $this->pricingTreatment;
    }
    /**
     * Set pricingTreatment value
     * @uses \macropage\ebaysdk\finding\EnumType\PriceTreatmentEnum::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\PriceTreatmentEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pricingTreatment
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public function setPricingTreatment($pricingTreatment = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\PriceTreatmentEnum::valueIsValid($pricingTreatment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pricingTreatment, implode(', ', \macropage\ebaysdk\finding\EnumType\PriceTreatmentEnum::getValidValues())), __LINE__);
        }
        $this->pricingTreatment = $pricingTreatment;
        return $this;
    }
    /**
     * Get soldOnEbay value
     * @return bool|null
     */
    public function getSoldOnEbay()
    {
        return $this->soldOnEbay;
    }
    /**
     * Set soldOnEbay value
     * @param bool $soldOnEbay
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public function setSoldOnEbay($soldOnEbay = false)
    {
        // validation for constraint: boolean
        if (!is_null($soldOnEbay) && !is_bool($soldOnEbay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($soldOnEbay)), __LINE__);
        }
        $this->soldOnEbay = $soldOnEbay;
        return $this;
    }
    /**
     * Get soldOffEbay value
     * @return bool|null
     */
    public function getSoldOffEbay()
    {
        return $this->soldOffEbay;
    }
    /**
     * Set soldOffEbay value
     * @param bool $soldOffEbay
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
     */
    public function setSoldOffEbay($soldOffEbay = false)
    {
        // validation for constraint: boolean
        if (!is_null($soldOffEbay) && !is_bool($soldOffEbay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($soldOffEbay)), __LINE__);
        }
        $this->soldOffEbay = $soldOffEbay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\DiscountPriceInfo
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
