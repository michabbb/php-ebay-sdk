<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to hold an array of one or more eBay for Charity organizations that are affiliated with the seller's account.
 * @subpackage Structs
 */
class CharityAffiliationDetailsType extends AbstractStructBase
{
    /**
     * The CharityAffiliationDetail
     * Meta informations extracted from the WSDL
     * - documentation: A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[]
     */
    public $CharityAffiliationDetail;
    /**
     * Constructor method for CharityAffiliationDetailsType
     * @uses CharityAffiliationDetailsType::setCharityAffiliationDetail()
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[] $charityAffiliationDetail
     */
    public function __construct(array $charityAffiliationDetail = array())
    {
        $this
            ->setCharityAffiliationDetail($charityAffiliationDetail);
    }
    /**
     * Get CharityAffiliationDetail value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[]|null
     */
    public function getCharityAffiliationDetail()
    {
        return $this->CharityAffiliationDetail;
    }
    /**
     * Set CharityAffiliationDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[] $charityAffiliationDetail
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
     */
    public function setCharityAffiliationDetail(array $charityAffiliationDetail = array())
    {
        foreach ($charityAffiliationDetail as $charityAffiliationDetailsTypeCharityAffiliationDetailItem) {
            // validation for constraint: itemType
            if (!$charityAffiliationDetailsTypeCharityAffiliationDetailItem instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType) {
                throw new \InvalidArgumentException(sprintf('The CharityAffiliationDetail property can only contain items of \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType, "%s" given', is_object($charityAffiliationDetailsTypeCharityAffiliationDetailItem) ? get_class($charityAffiliationDetailsTypeCharityAffiliationDetailItem) : gettype($charityAffiliationDetailsTypeCharityAffiliationDetailItem)), __LINE__);
            }
        }
        $this->CharityAffiliationDetail = $charityAffiliationDetail;
        return $this;
    }
    /**
     * Add item to CharityAffiliationDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
     */
    public function addToCharityAffiliationDetail(\macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType) {
            throw new \InvalidArgumentException(sprintf('The CharityAffiliationDetail property can only contain items of \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CharityAffiliationDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
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
