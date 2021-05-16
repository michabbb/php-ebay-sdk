<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesForwardDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class MyMessagesForwardDetailsType extends AbstractStructBase
{
    /**
     * The UserForwardDate
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserForwardDate = null;
    /**
     * The ForwardMessageEncoding
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ForwardMessageEncoding = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyMessagesForwardDetailsType
     * @uses MyMessagesForwardDetailsType::setUserForwardDate()
     * @uses MyMessagesForwardDetailsType::setForwardMessageEncoding()
     * @uses MyMessagesForwardDetailsType::setAny()
     * @param string $userForwardDate
     * @param string $forwardMessageEncoding
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $userForwardDate = null, ?string $forwardMessageEncoding = null, $any = null)
    {
        $this
            ->setUserForwardDate($userForwardDate)
            ->setForwardMessageEncoding($forwardMessageEncoding)
            ->setAny($any);
    }
    /**
     * Get UserForwardDate value
     * @return string|null
     */
    public function getUserForwardDate(): ?string
    {
        return $this->UserForwardDate;
    }
    /**
     * Set UserForwardDate value
     * @param string $userForwardDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
     */
    public function setUserForwardDate(?string $userForwardDate = null): self
    {
        // validation for constraint: string
        if (!is_null($userForwardDate) && !is_string($userForwardDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userForwardDate, true), gettype($userForwardDate)), __LINE__);
        }
        $this->UserForwardDate = $userForwardDate;
        
        return $this;
    }
    /**
     * Get ForwardMessageEncoding value
     * @return string|null
     */
    public function getForwardMessageEncoding(): ?string
    {
        return $this->ForwardMessageEncoding;
    }
    /**
     * Set ForwardMessageEncoding value
     * @param string $forwardMessageEncoding
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
     */
    public function setForwardMessageEncoding(?string $forwardMessageEncoding = null): self
    {
        // validation for constraint: string
        if (!is_null($forwardMessageEncoding) && !is_string($forwardMessageEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardMessageEncoding, true), gettype($forwardMessageEncoding)), __LINE__);
        }
        $this->ForwardMessageEncoding = $forwardMessageEncoding;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
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
