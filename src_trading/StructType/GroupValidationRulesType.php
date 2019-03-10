<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupValidationRulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to specify how many of the corresponding Product Identifier types are required to be specified at listing time.
 * @subpackage Structs
 */
class GroupValidationRulesType extends AbstractStructBase
{
    /**
     * The MinRequired
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the minimum number of the corresponding Product Identifiers are required to be specified at listing time. If two Product Identifier types are returned, and the <b>MinRequired</b> value is the <code>2</code>, the
     * seller will be required to use both Product Identifier types at listing time. If the <b>MinRequired</b> value was <code>1</code>, only one of the two Product Identifier types would be required, but the seller could use them both if they wanted. If
     * the <b>MinRequired</b> value was <code>0</code>, one or both of those Product Identifier types could be used, but they would not be required.
     * @var int
     */
    public $MinRequired;
    /**
     * Constructor method for GroupValidationRulesType
     * @uses GroupValidationRulesType::setMinRequired()
     * @param int $minRequired
     */
    public function __construct($minRequired = null)
    {
        $this
            ->setMinRequired($minRequired);
    }
    /**
     * Get MinRequired value
     * @return int|null
     */
    public function getMinRequired()
    {
        return $this->MinRequired;
    }
    /**
     * Set MinRequired value
     * @param int $minRequired
     * @return \macropage\ebaysdk\trading\StructType\GroupValidationRulesType
     */
    public function setMinRequired($minRequired = null)
    {
        // validation for constraint: int
        if (!is_null($minRequired) && !is_numeric($minRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minRequired)), __LINE__);
        }
        $this->MinRequired = $minRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GroupValidationRulesType
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
