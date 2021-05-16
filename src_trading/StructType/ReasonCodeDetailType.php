<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReasonCodeDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for VeRO reason code details.
 * @subpackage Structs
 */
class ReasonCodeDetailType extends AbstractStructBase
{
    /**
     * The BriefText
     * Meta information extracted from the WSDL
     * - documentation: The short description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BriefText = null;
    /**
     * The DetailedText
     * Meta information extracted from the WSDL
     * - documentation: The long description of the infringement associated with the reason code ID.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailedText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The codeID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier assigned to a reason code.
     * @var int|null
     */
    protected ?int $codeID = null;
    /**
     * Constructor method for ReasonCodeDetailType
     * @uses ReasonCodeDetailType::setBriefText()
     * @uses ReasonCodeDetailType::setDetailedText()
     * @uses ReasonCodeDetailType::setAny()
     * @uses ReasonCodeDetailType::setCodeID()
     * @param string $briefText
     * @param string $detailedText
     * @param \DOMDocument|string|null $any
     * @param int $codeID
     */
    public function __construct(?string $briefText = null, ?string $detailedText = null, $any = null, ?int $codeID = null)
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
    public function getBriefText(): ?string
    {
        return $this->BriefText;
    }
    /**
     * Set BriefText value
     * @param string $briefText
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setBriefText(?string $briefText = null): self
    {
        // validation for constraint: string
        if (!is_null($briefText) && !is_string($briefText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($briefText, true), gettype($briefText)), __LINE__);
        }
        $this->BriefText = $briefText;
        
        return $this;
    }
    /**
     * Get DetailedText value
     * @return string|null
     */
    public function getDetailedText(): ?string
    {
        return $this->DetailedText;
    }
    /**
     * Set DetailedText value
     * @param string $detailedText
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setDetailedText(?string $detailedText = null): self
    {
        // validation for constraint: string
        if (!is_null($detailedText) && !is_string($detailedText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailedText, true), gettype($detailedText)), __LINE__);
        }
        $this->DetailedText = $detailedText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
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
    /**
     * Get codeID value
     * @return int|null
     */
    public function getCodeID(): ?int
    {
        return $this->codeID;
    }
    /**
     * Set codeID value
     * @param int $codeID
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType
     */
    public function setCodeID(?int $codeID = null): self
    {
        // validation for constraint: int
        if (!is_null($codeID) && !(is_int($codeID) || ctype_digit($codeID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeID, true), gettype($codeID)), __LINE__);
        }
        $this->codeID = $codeID;
        
        return $this;
    }
}
