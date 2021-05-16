<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemPolicyViolationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the details of policy violations if the item was administratively canceled. The details are the policy ID and the policy text.
 * @subpackage Structs
 */
class ItemPolicyViolationType extends AbstractStructBase
{
    /**
     * The PolicyID
     * Meta information extracted from the WSDL
     * - documentation: Policy ID of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PolicyID = null;
    /**
     * The PolicyText
     * Meta information extracted from the WSDL
     * - documentation: Brief information of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PolicyText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemPolicyViolationType
     * @uses ItemPolicyViolationType::setPolicyID()
     * @uses ItemPolicyViolationType::setPolicyText()
     * @uses ItemPolicyViolationType::setAny()
     * @param int $policyID
     * @param string $policyText
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $policyID = null, ?string $policyText = null, $any = null)
    {
        $this
            ->setPolicyID($policyID)
            ->setPolicyText($policyText)
            ->setAny($any);
    }
    /**
     * Get PolicyID value
     * @return int|null
     */
    public function getPolicyID(): ?int
    {
        return $this->PolicyID;
    }
    /**
     * Set PolicyID value
     * @param int $policyID
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
     */
    public function setPolicyID(?int $policyID = null): self
    {
        // validation for constraint: int
        if (!is_null($policyID) && !(is_int($policyID) || ctype_digit($policyID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($policyID, true), gettype($policyID)), __LINE__);
        }
        $this->PolicyID = $policyID;
        
        return $this;
    }
    /**
     * Get PolicyText value
     * @return string|null
     */
    public function getPolicyText(): ?string
    {
        return $this->PolicyText;
    }
    /**
     * Set PolicyText value
     * @param string $policyText
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
     */
    public function setPolicyText(?string $policyText = null): self
    {
        // validation for constraint: string
        if (!is_null($policyText) && !is_string($policyText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyText, true), gettype($policyText)), __LINE__);
        }
        $this->PolicyText = $policyText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
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
