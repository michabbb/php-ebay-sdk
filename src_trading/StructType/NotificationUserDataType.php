<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationUserDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: User data related to notifications.
 * @subpackage Structs
 */
class NotificationUserDataType extends AbstractStructBase
{
    /**
     * The ExternalUserData
     * Meta information extracted from the WSDL
     * - documentation: An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned in the notification payload. The string can contain user-specific information to identify a
     * particular user. Any sensitive information should be passed with due caution and proper encryption.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalUserData = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NotificationUserDataType
     * @uses NotificationUserDataType::setExternalUserData()
     * @uses NotificationUserDataType::setAny()
     * @param string $externalUserData
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $externalUserData = null, $any = null)
    {
        $this
            ->setExternalUserData($externalUserData)
            ->setAny($any);
    }
    /**
     * Get ExternalUserData value
     * @return string|null
     */
    public function getExternalUserData(): ?string
    {
        return $this->ExternalUserData;
    }
    /**
     * Set ExternalUserData value
     * @param string $externalUserData
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setExternalUserData(?string $externalUserData = null): self
    {
        // validation for constraint: string
        if (!is_null($externalUserData) && !is_string($externalUserData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalUserData, true), gettype($externalUserData)), __LINE__);
        }
        $this->ExternalUserData = $externalUserData;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\NotificationUserDataType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
