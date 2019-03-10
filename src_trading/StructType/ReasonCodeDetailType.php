<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReasonCodeDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for VeRO reason code details.
 * @subpackage Structs
 */
class ReasonCodeDetailType extends AbstractStructBase
{
    /**
     * The BriefText
     * Meta informations extracted from the WSDL
     * - documentation: The short description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string
     */
    public $BriefText;
    /**
     * The DetailedText
     * Meta informations extracted from the WSDL
     * - documentation: The long description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string
     */
    public $DetailedText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The codeID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier assigned to a reason code.
     * @var int
     */
    public $codeID;
    /**
     * Constructor method for ReasonCodeDetailType
     * @uses ReasonCodeDetailType::setBriefText()
     * @uses ReasonCodeDetailType::setDetailedText()
     * @uses ReasonCodeDetailType::setAny()
     * @uses ReasonCodeDetailType::setCodeID()
     * @param string $briefText
     * @param string $detailedText
     * @param \DOMDocument $any
     * @param int $codeID
     */
    public function __construct($briefText = null, $detailedText = null, \DOMDocument $any = null, $codeID = null)
    {
        $this
            ->setBriefText($briefText)
            ->setDetailedText($detailedText)
            ->setAny($any)
            ->setCodeID($codeID);
    }
    /**
     * Get BriefText value
     * @return string|null
     */
    public function getBriefText()
    {
        return $this->BriefText;
    }
    /**
     * Set BriefText value
     * @param string $briefText
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setBriefText($briefText = null)
    {
        // validation for constraint: string
        if (!is_null($briefText) && !is_string($briefText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($briefText)), __LINE__);
        }
        $this->BriefText = $briefText;
        return $this;
    }
    /**
     * Get DetailedText value
     * @return string|null
     */
    public function getDetailedText()
    {
        return $this->DetailedText;
    }
    /**
     * Set DetailedText value
     * @param string $detailedText
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setDetailedText($detailedText = null)
    {
        // validation for constraint: string
        if (!is_null($detailedText) && !is_string($detailedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailedText)), __LINE__);
        }
        $this->DetailedText = $detailedText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get codeID value
     * @return int|null
     */
    public function getCodeID()
    {
        return $this->codeID;
    }
    /**
     * Set codeID value
     * @param int $codeID
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setCodeID($codeID = null)
    {
        // validation for constraint: int
        if (!is_null($codeID) && !is_numeric($codeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($codeID)), __LINE__);
        }
        $this->codeID = $codeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
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
