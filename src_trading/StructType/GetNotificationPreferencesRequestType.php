<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNotificationPreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the requesting application's notification preferences. Details are only returned for events for which a preference has been set. For example, if you enabled notification for the <b>EndOfAuction</b> event and later disabled
 * it, the <b>GetNotificationPreferences</b> response would cite the <b>EndOfAuction</b> event preference as <b>Disabled</b>. Otherwise, no details would be returned regarding <b>EndOfAuction</b>.
 * @subpackage Structs
 */
class GetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * The PreferenceLevel
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with an application, or with events. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PreferenceLevel = null;
    /**
     * Constructor method for GetNotificationPreferencesRequestType
     * @uses GetNotificationPreferencesRequestType::setPreferenceLevel()
     * @param string $preferenceLevel
     */
    public function __construct(?string $preferenceLevel = null)
    {
        $this
            ->setPreferenceLevel($preferenceLevel);
    }
    /**
     * Get PreferenceLevel value
     * @return string|null
     */
    public function getPreferenceLevel(): ?string
    {
        return $this->PreferenceLevel;
    }
    /**
     * Set PreferenceLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $preferenceLevel
     * @return \macropage\ebaysdk\trading\StructType\GetNotificationPreferencesRequestType
     */
    public function setPreferenceLevel(?string $preferenceLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::valueIsValid($preferenceLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType', is_array($preferenceLevel) ? implode(', ', $preferenceLevel) : var_export($preferenceLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\NotificationRoleCodeType::getValidValues())), __LINE__);
        }
        $this->PreferenceLevel = $preferenceLevel;
        
        return $this;
    }
}
