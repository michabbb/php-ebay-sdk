<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReasonCodeDetailsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReasonCodeDetails</strong> call. This response will consists of one or more VeRO Program copyright/intellectual property infringement violation types.
 * @subpackage Structs
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
    /**
     * The VeROReasonCodeDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType
     */
    public $VeROReasonCodeDetails;
    /**
     * Constructor method for GetVeROReasonCodeDetailsResponseType
     * @uses GetVeROReasonCodeDetailsResponseType::setVeROReasonCodeDetails()
     * @param \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null)
    {
        $this
            ->setVeROReasonCodeDetails($veROReasonCodeDetails);
    }
    /**
     * Get VeROReasonCodeDetails value
     * @return \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType|null
     */
    public function getVeROReasonCodeDetails()
    {
        return $this->VeROReasonCodeDetails;
    }
    /**
     * Set VeROReasonCodeDetails value
     * @param \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType
     */
    public function setVeROReasonCodeDetails(\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null)
    {
        $this->VeROReasonCodeDetails = $veROReasonCodeDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType
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
