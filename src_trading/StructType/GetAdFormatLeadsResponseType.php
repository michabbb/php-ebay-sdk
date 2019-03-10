<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdFormatLeadsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns number of leads and contact and other information for each lead. One AdFormatLead node is returned for each lead.
 * @subpackage Structs
 */
class GetAdFormatLeadsResponseType extends AbstractResponseType
{
    /**
     * The AdFormatLead
     * Meta informations extracted from the WSDL
     * - documentation: Contains contact and other information for one lead. One node is returned for each lead. Only returned at a detail level of ReturnAll. At least one lead must be available for the specified item to return AdFormatLead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdFormatLeadType[]
     */
    public $AdFormatLead;
    /**
     * The AdFormatLeadCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of leads returned. Only returned if you do not specify a detail level.
     * - minOccurs: 0
     * @var int
     */
    public $AdFormatLeadCount;
    /**
     * Constructor method for GetAdFormatLeadsResponseType
     * @uses GetAdFormatLeadsResponseType::setAdFormatLead()
     * @uses GetAdFormatLeadsResponseType::setAdFormatLeadCount()
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType[] $adFormatLead
     * @param int $adFormatLeadCount
     */
    public function __construct(array $adFormatLead = array(), $adFormatLeadCount = null)
    {
        $this
            ->setAdFormatLead($adFormatLead)
            ->setAdFormatLeadCount($adFormatLeadCount);
    }
    /**
     * Get AdFormatLead value
     * @return \macropage\ebaysdk\trading\StructType\AdFormatLeadType[]|null
     */
    public function getAdFormatLead()
    {
        return $this->AdFormatLead;
    }
    /**
     * Set AdFormatLead value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType[] $adFormatLead
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLead(array $adFormatLead = array())
    {
        foreach ($adFormatLead as $getAdFormatLeadsResponseTypeAdFormatLeadItem) {
            // validation for constraint: itemType
            if (!$getAdFormatLeadsResponseTypeAdFormatLeadItem instanceof \macropage\ebaysdk\trading\StructType\AdFormatLeadType) {
                throw new \InvalidArgumentException(sprintf('The AdFormatLead property can only contain items of \macropage\ebaysdk\trading\StructType\AdFormatLeadType, "%s" given', is_object($getAdFormatLeadsResponseTypeAdFormatLeadItem) ? get_class($getAdFormatLeadsResponseTypeAdFormatLeadItem) : gettype($getAdFormatLeadsResponseTypeAdFormatLeadItem)), __LINE__);
            }
        }
        $this->AdFormatLead = $adFormatLead;
        return $this;
    }
    /**
     * Add item to AdFormatLead value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType $item
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function addToAdFormatLead(\macropage\ebaysdk\trading\StructType\AdFormatLeadType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AdFormatLeadType) {
            throw new \InvalidArgumentException(sprintf('The AdFormatLead property can only contain items of \macropage\ebaysdk\trading\StructType\AdFormatLeadType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdFormatLead[] = $item;
        return $this;
    }
    /**
     * Get AdFormatLeadCount value
     * @return int|null
     */
    public function getAdFormatLeadCount()
    {
        return $this->AdFormatLeadCount;
    }
    /**
     * Set AdFormatLeadCount value
     * @param int $adFormatLeadCount
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLeadCount($adFormatLeadCount = null)
    {
        // validation for constraint: int
        if (!is_null($adFormatLeadCount) && !is_numeric($adFormatLeadCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adFormatLeadCount)), __LINE__);
        }
        $this->AdFormatLeadCount = $adFormatLeadCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
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
