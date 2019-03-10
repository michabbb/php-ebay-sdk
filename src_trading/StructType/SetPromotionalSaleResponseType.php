<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>SetPromotionalSale</b> call. Contains the status of a promotional sale.
 * @subpackage Structs
 */
class SetPromotionalSaleResponseType extends AbstractResponseType
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The PromotionalSaleID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the new promotional sale, or in the case of a delete or modify action, the unique identifier of the existing promotional sale that was deleted or modified.
     * - minOccurs: 0
     * @var int
     */
    public $PromotionalSaleID;
    /**
     * Constructor method for SetPromotionalSaleResponseType
     * @uses SetPromotionalSaleResponseType::setStatus()
     * @uses SetPromotionalSaleResponseType::setPromotionalSaleID()
     * @param string $status
     * @param int $promotionalSaleID
     */
    public function __construct($status = null, $promotionalSaleID = null)
    {
        $this
            ->setStatus($status)
            ->setPromotionalSaleID($promotionalSaleID);
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
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get PromotionalSaleID value
     * @return int|null
     */
    public function getPromotionalSaleID()
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleResponseType
     */
    public function setPromotionalSaleID($promotionalSaleID = null)
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !is_numeric($promotionalSaleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetPromotionalSaleResponseType
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
