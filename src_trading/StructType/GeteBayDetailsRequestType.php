<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayDetailsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type for the <b>GeteBayDetails</b> call. This call retrieves the latest eBay feature-related metadata values that are supported when listing items. This metadata includes country codes, currency codes, Item
 * Specifics thresholds, supported Return Policy values, available shipping carriers and shipping service options, and more. This call may be used to keep metadata up-to-date in your applications. <br><br> In some cases, the data returned in the
 * response will vary according to the eBay site that you use for the request.
 * @subpackage Structs
 */
class GeteBayDetailsRequestType extends AbstractRequestType
{
    /**
     * The DetailName
     * Meta informations extracted from the WSDL
     * - documentation: One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to
     * familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DetailName;
    /**
     * Constructor method for GeteBayDetailsRequestType
     * @uses GeteBayDetailsRequestType::setDetailName()
     * @param string[] $detailName
     */
    public function __construct(array $detailName = array())
    {
        $this
            ->setDetailName($detailName);
    }
    /**
     * Get DetailName value
     * @return string[]|null
     */
    public function getDetailName()
    {
        return $this->DetailName;
    }
    /**
     * Set DetailName value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $detailName
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType
     */
    public function setDetailName(array $detailName = array())
    {
        $invalidValues = array();
        foreach ($detailName as $geteBayDetailsRequestTypeDetailNameItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid($geteBayDetailsRequestTypeDetailNameItem)) {
                $invalidValues[] = var_export($geteBayDetailsRequestTypeDetailNameItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues())), __LINE__);
        }
        $this->DetailName = $detailName;
        return $this;
    }
    /**
     * Add item to DetailName value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType
     */
    public function addToDetailName($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues())), __LINE__);
        }
        $this->DetailName[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType
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
