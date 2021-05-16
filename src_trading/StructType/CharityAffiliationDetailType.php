<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CharityAffiliationDetail</b> container that is returned in the <b>GetUser</b> response. The <b>CharityAffiliationDetail</b> container consists of information on a nonprofit charity organization associated with
 * the seller's account. A separate <b>CharityAffiliationDetail</b> container is returned for each nonprofit charity organization associated with the seller's account.
 * @subpackage Structs
 */
class CharityAffiliationDetailType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: The eBay unique identifier of the nonprofit organization associated with the seller's account. Once a nonprofit organization comes aboard as an eBay for Charity organization, eBay creates and assigns this ID to the nonprofit
     * organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CharityID = null;
    /**
     * The AffiliationType
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned here indicates whether the eBay user is just selling on the behalf of the nonprofit organization, or if the eBay user is directly affiliated with/representing the nonprofit organization, or the eBay
     * user has been added as a Direct Seller by the nonprofit organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AffiliationType = null;
    /**
     * The LastUsedTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the eBay user last contributed to the nonprofit organization through the donated proceeds of an eBay sale.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastUsedTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharityAffiliationDetailType
     * @uses CharityAffiliationDetailType::setCharityID()
     * @uses CharityAffiliationDetailType::setAffiliationType()
     * @uses CharityAffiliationDetailType::setLastUsedTime()
     * @uses CharityAffiliationDetailType::setAny()
     * @param string $charityID
     * @param string $affiliationType
     * @param string $lastUsedTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $charityID = null, ?string $affiliationType = null, ?string $lastUsedTime = null, $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAffiliationType($affiliationType)
            ->setLastUsedTime($lastUsedTime)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID(): ?string
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setCharityID(?string $charityID = null): self
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityID, true), gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        
        return $this;
    }
    /**
     * Get AffiliationType value
     * @return string|null
     */
    public function getAffiliationType(): ?string
    {
        return $this->AffiliationType;
    }
    /**
     * Set AffiliationType value
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $affiliationType
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setAffiliationType(?string $affiliationType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid($affiliationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType', is_array($affiliationType) ? implode(', ', $affiliationType) : var_export($affiliationType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AffiliationType = $affiliationType;
        
        return $this;
    }
    /**
     * Get LastUsedTime value
     * @return string|null
     */
    public function getLastUsedTime(): ?string
    {
        return $this->LastUsedTime;
    }
    /**
     * Set LastUsedTime value
     * @param string $lastUsedTime
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setLastUsedTime(?string $lastUsedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUsedTime) && !is_string($lastUsedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsedTime, true), gettype($lastUsedTime)), __LINE__);
        }
        $this->LastUsedTime = $lastUsedTime;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
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
