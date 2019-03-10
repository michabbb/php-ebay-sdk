<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationPreferencesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves the requesting application's notification preferences. Details are only returned for events for which a preference has been set. For example, if you enabled notification for the <b>EndOfAuction</b> event and later disabled
 * it, the <b>GetNotificationPreferences</b> response would cite the <b>EndOfAuction</b> event preference as <b>Disabled</b>. Otherwise, no details would be returned regarding <b>EndOfAuction</b>.
 * @subpackage Structs
 */
class GetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * The PreferenceLevel
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with an application, or with events. <br>
     * - minOccurs: 0
     * @var string
     */
    public $PreferenceLevel;
    /**
     * Constructor method for GetNotificationPreferencesRequestType
     * @uses GetNotificationPreferencesRequestType::setPreferenceLevel()
     * @param string $preferenceLevel
     */
    public function __construct($preferenceLevel = null)
    {
        $this
            ->setPreferenceLevel($preferenceLevel);
    }
    /**
     * Get PreferenceLevel value
     * @return string|null
     */
    public function getPreferenceLevel()
    {
        return $this->PreferenceLevel;
    }
    /**
     * Set PreferenceLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preferenceLevel
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType
     */
    public function setPreferenceLevel($preferenceLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::valueIsValid($preferenceLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $preferenceLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::getValidValues())), __LINE__);
        }
        $this->PreferenceLevel = $preferenceLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType
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
