<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerAccountDashboardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerAccount</b> container returned in the <b>GetSellerDashboard</b> response.
 * @subpackage Structs
 */
class SellerAccountDashboardType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the status of your seller's account. Specifically, you'll find out if your account is current and active, or if your account has a past due balance or is on hold. For more details about your account, you can go
     * to your Seller Account page on the eBay site (login to My eBay), or you can call <b>GetAccount</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - documentation: The <b>SellerAccount.Alert</b> container is only returned if eBay has posted one or more informational or warning messages to the seller's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]
     */
    public $Alert;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerAccountDashboardType
     * @uses SellerAccountDashboardType::setStatus()
     * @uses SellerAccountDashboardType::setAlert()
     * @uses SellerAccountDashboardType::setAny()
     * @param string $status
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @param \DOMDocument $any
     */
    public function __construct($status = null, array $alert = array(), \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function setAlert(array $alert = array())
    {
        foreach ($alert as $sellerAccountDashboardTypeAlertItem) {
            // validation for constraint: itemType
            if (!$sellerAccountDashboardTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
                throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, "%s" given', is_object($sellerAccountDashboardTypeAlertItem) ? get_class($sellerAccountDashboardTypeAlertItem) : gettype($sellerAccountDashboardTypeAlertItem)), __LINE__);
            }
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Alert[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
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
