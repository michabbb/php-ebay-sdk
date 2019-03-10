<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerAlertsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the call-specific response fields for the <b>GetSellingManagerAlerts</b> call.
 * @subpackage Structs
 */
class GetSellingManagerAlertsResponseType extends AbstractResponseType
{
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, PaisaPay (India only), item sold, and a general alert.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[]
     */
    public $Alert;
    /**
     * Constructor method for GetSellingManagerAlertsResponseType
     * @uses GetSellingManagerAlertsResponseType::setAlert()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[] $alert
     */
    public function __construct(array $alert = array())
    {
        $this
            ->setAlert($alert);
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[] $alert
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType
     */
    public function setAlert(array $alert = array())
    {
        foreach ($alert as $getSellingManagerAlertsResponseTypeAlertItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerAlertsResponseTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerAlertType) {
                throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerAlertType, "%s" given', is_object($getSellingManagerAlertsResponseTypeAlertItem) ? get_class($getSellingManagerAlertsResponseTypeAlertItem) : gettype($getSellingManagerAlertsResponseTypeAlertItem)), __LINE__);
            }
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\SellingManagerAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerAlertType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Alert[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType
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
