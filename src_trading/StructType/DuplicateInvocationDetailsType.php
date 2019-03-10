<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateInvocationDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
 * @subpackage Structs
 */
class DuplicateInvocationDetailsType extends AbstractStructBase
{
    /**
     * The DuplicateInvocationID
     * Meta informations extracted from the WSDL
     * - documentation: This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request. | Specifies a universally unique identifier for an item. This is used to ensure that you only list a particular
     * item once, particularly if you are listing many items at once. The identifier can contain only digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 9CEBD9A6825644EC8D06C436D6CF494B.
     * - minOccurs: 0
     * @var string
     */
    public $DuplicateInvocationID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The InvocationTrackingID
     * Meta informations extracted from the WSDL
     * - documentation: This unique identifier identifies the business item the previous API invocation created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $InvocationTrackingID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DuplicateInvocationDetailsType
     * @uses DuplicateInvocationDetailsType::setDuplicateInvocationID()
     * @uses DuplicateInvocationDetailsType::setStatus()
     * @uses DuplicateInvocationDetailsType::setInvocationTrackingID()
     * @uses DuplicateInvocationDetailsType::setAny()
     * @param string $duplicateInvocationID
     * @param string $status
     * @param string $invocationTrackingID
     * @param \DOMDocument $any
     */
    public function __construct($duplicateInvocationID = null, $status = null, $invocationTrackingID = null, \DOMDocument $any = null)
    {
        $this
            ->setDuplicateInvocationID($duplicateInvocationID)
            ->setStatus($status)
            ->setInvocationTrackingID($invocationTrackingID)
            ->setAny($any);
    }
    /**
     * Get DuplicateInvocationID value
     * @return string|null
     */
    public function getDuplicateInvocationID()
    {
        return $this->DuplicateInvocationID;
    }
    /**
     * Set DuplicateInvocationID value
     * @param string $duplicateInvocationID
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setDuplicateInvocationID($duplicateInvocationID = null)
    {
        // validation for constraint: string
        if (!is_null($duplicateInvocationID) && !is_string($duplicateInvocationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duplicateInvocationID)), __LINE__);
        }
        $this->DuplicateInvocationID = $duplicateInvocationID;
        return $this;
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
     * @uses \macropage\ebaysdk\trading\EnumType\InvocationStatusType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InvocationStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InvocationStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\InvocationStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get InvocationTrackingID value
     * @return string|null
     */
    public function getInvocationTrackingID()
    {
        return $this->InvocationTrackingID;
    }
    /**
     * Set InvocationTrackingID value
     * @param string $invocationTrackingID
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setInvocationTrackingID($invocationTrackingID = null)
    {
        // validation for constraint: string
        if (!is_null($invocationTrackingID) && !is_string($invocationTrackingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invocationTrackingID)), __LINE__);
        }
        $this->InvocationTrackingID = $invocationTrackingID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
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
