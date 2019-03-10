<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for GetAllBiddersModeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type defines the values that can be used in the <b>CallMode</b> field of the <b>GetAllBidders</b> call request to control which type of auction bidders are returned in the response.
 * @subpackage Enumerations
 */
class GetAllBiddersModeCodeType
{
    /**
     * Constant for value 'ViewAll'
     * @return string 'ViewAll'
     */
    const VALUE_VIEW_ALL = 'ViewAll';
    /**
     * Constant for value 'EndedListing'
     * @return string 'EndedListing'
     */
    const VALUE_ENDED_LISTING = 'EndedListing';
    /**
     * Constant for value 'SecondChanceEligibleEndedListing'
     * @return string 'SecondChanceEligibleEndedListing'
     */
    const VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING = 'SecondChanceEligibleEndedListing';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_VIEW_ALL
     * @uses self::VALUE_ENDED_LISTING
     * @uses self::VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VIEW_ALL,
            self::VALUE_ENDED_LISTING,
            self::VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING,
            self::VALUE_CUSTOM_CODE,
        );
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
