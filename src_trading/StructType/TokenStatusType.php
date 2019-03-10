<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns token status.
 * @subpackage Structs
 */
class TokenStatusType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Current token status.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The EIASToken
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the user to whom the token belongs.
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The ExpirationTime
     * Meta informations extracted from the WSDL
     * - documentation: Original expiration time for the token.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationTime;
    /**
     * The RevocationTime
     * Meta informations extracted from the WSDL
     * - documentation: Token revocation time, if the token has been revoked.
     * - minOccurs: 0
     * @var string
     */
    public $RevocationTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TokenStatusType
     * @uses TokenStatusType::setStatus()
     * @uses TokenStatusType::setEIASToken()
     * @uses TokenStatusType::setExpirationTime()
     * @uses TokenStatusType::setRevocationTime()
     * @uses TokenStatusType::setAny()
     * @param string $status
     * @param string $eIASToken
     * @param string $expirationTime
     * @param string $revocationTime
     * @param \DOMDocument $any
     */
    public function __construct($status = null, $eIASToken = null, $expirationTime = null, $revocationTime = null, \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setEIASToken($eIASToken)
            ->setExpirationTime($expirationTime)
            ->setRevocationTime($revocationTime)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setExpirationTime($expirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        return $this;
    }
    /**
     * Get RevocationTime value
     * @return string|null
     */
    public function getRevocationTime()
    {
        return $this->RevocationTime;
    }
    /**
     * Set RevocationTime value
     * @param string $revocationTime
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setRevocationTime($revocationTime = null)
    {
        // validation for constraint: string
        if (!is_null($revocationTime) && !is_string($revocationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($revocationTime)), __LINE__);
        }
        $this->RevocationTime = $revocationTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TokenStatusType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
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
