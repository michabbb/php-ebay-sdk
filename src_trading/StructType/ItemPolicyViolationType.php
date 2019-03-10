<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemPolicyViolationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details of policy violations if the item was administratively canceled. The details are the policy ID and the policy text.
 * @subpackage Structs
 */
class ItemPolicyViolationType extends AbstractStructBase
{
    /**
     * The PolicyID
     * Meta informations extracted from the WSDL
     * - documentation: Policy ID of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var int
     */
    public $PolicyID;
    /**
     * The PolicyText
     * Meta informations extracted from the WSDL
     * - documentation: Brief information of the violated policy which resulted in item being administratively canceled.
     * - minOccurs: 0
     * @var string
     */
    public $PolicyText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemPolicyViolationType
     * @uses ItemPolicyViolationType::setPolicyID()
     * @uses ItemPolicyViolationType::setPolicyText()
     * @uses ItemPolicyViolationType::setAny()
     * @param int $policyID
     * @param string $policyText
     * @param \DOMDocument $any
     */
    public function __construct($policyID = null, $policyText = null, \DOMDocument $any = null)
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
    public function getPolicyID()
    {
        return $this->PolicyID;
    }
    /**
     * Set PolicyID value
     * @param int $policyID
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
     */
    public function setPolicyID($policyID = null)
    {
        // validation for constraint: int
        if (!is_null($policyID) && !is_numeric($policyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyID)), __LINE__);
        }
        $this->PolicyID = $policyID;
        return $this;
    }
    /**
     * Get PolicyText value
     * @return string|null
     */
    public function getPolicyText()
    {
        return $this->PolicyText;
    }
    /**
     * Set PolicyText value
     * @param string $policyText
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
     */
    public function setPolicyText($policyText = null)
    {
        // validation for constraint: string
        if (!is_null($policyText) && !is_string($policyText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyText)), __LINE__);
        }
        $this->PolicyText = $policyText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemPolicyViolationType
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
