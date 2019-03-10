<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCharitiesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetCharities</b> call. This call is used to search for eBay for Charity nonprofit organizations. A <b>Charity</b> container is returned for each nonprofit organization that matches the
 * criteria in the call request.
 * @subpackage Structs
 */
class GetCharitiesResponseType extends AbstractResponseType
{
    /**
     * The Charity
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>Charity</b> container consists of information about a specific nonprofit organization. Each nonprofit organization is identified by the <b>id</b> attribute of the container. If no nonprofit organization are found that match
     * the input criteria, no <b>Charity</b> containers are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityInfoType[]
     */
    public $Charity;
    /**
     * Constructor method for GetCharitiesResponseType
     * @uses GetCharitiesResponseType::setCharity()
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType[] $charity
     */
    public function __construct(array $charity = array())
    {
        $this
            ->setCharity($charity);
    }
    /**
     * Get Charity value
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType[]|null
     */
    public function getCharity()
    {
        return $this->Charity;
    }
    /**
     * Set Charity value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType[] $charity
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType
     */
    public function setCharity(array $charity = array())
    {
        foreach ($charity as $getCharitiesResponseTypeCharityItem) {
            // validation for constraint: itemType
            if (!$getCharitiesResponseTypeCharityItem instanceof \macropage\ebaysdk\trading\StructType\CharityInfoType) {
                throw new \InvalidArgumentException(sprintf('The Charity property can only contain items of \macropage\ebaysdk\trading\StructType\CharityInfoType, "%s" given', is_object($getCharitiesResponseTypeCharityItem) ? get_class($getCharitiesResponseTypeCharityItem) : gettype($getCharitiesResponseTypeCharityItem)), __LINE__);
            }
        }
        $this->Charity = $charity;
        return $this;
    }
    /**
     * Add item to Charity value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType
     */
    public function addToCharity(\macropage\ebaysdk\trading\StructType\CharityInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityInfoType) {
            throw new \InvalidArgumentException(sprintf('The Charity property can only contain items of \macropage\ebaysdk\trading\StructType\CharityInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType
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
