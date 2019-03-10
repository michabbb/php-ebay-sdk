<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembershipDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>Membership</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs such as eBay Plus. <br/><br/> <span
 * class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany (DE), but this program is scheduled to come to the Austria and Australia marketplaces in the near future. </span>
 * @subpackage Structs
 */
class MembershipDetailsType extends AbstractStructBase
{
    /**
     * The Program
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership
     * expiration date.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MembershipDetailType[]
     */
    public $Program;
    /**
     * Constructor method for MembershipDetailsType
     * @uses MembershipDetailsType::setProgram()
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailType[] $program
     */
    public function __construct(array $program = array())
    {
        $this
            ->setProgram($program);
    }
    /**
     * Get Program value
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType[]|null
     */
    public function getProgram()
    {
        return $this->Program;
    }
    /**
     * Set Program value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailType[] $program
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailsType
     */
    public function setProgram(array $program = array())
    {
        foreach ($program as $membershipDetailsTypeProgramItem) {
            // validation for constraint: itemType
            if (!$membershipDetailsTypeProgramItem instanceof \macropage\ebaysdk\trading\StructType\MembershipDetailType) {
                throw new \InvalidArgumentException(sprintf('The Program property can only contain items of \macropage\ebaysdk\trading\StructType\MembershipDetailType, "%s" given', is_object($membershipDetailsTypeProgramItem) ? get_class($membershipDetailsTypeProgramItem) : gettype($membershipDetailsTypeProgramItem)), __LINE__);
            }
        }
        $this->Program = $program;
        return $this;
    }
    /**
     * Add item to Program value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MembershipDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailsType
     */
    public function addToProgram(\macropage\ebaysdk\trading\StructType\MembershipDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MembershipDetailType) {
            throw new \InvalidArgumentException(sprintf('The Program property can only contain items of \macropage\ebaysdk\trading\StructType\MembershipDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Program[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailsType
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
