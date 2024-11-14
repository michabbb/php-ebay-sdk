<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesResponseDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details relating to the response to a message.
 * @subpackage Structs
 */
class MyMessagesResponseDetailsType extends AbstractStructBase
{
    /**
     * The ResponseEnabled
     * Meta information extracted from the WSDL
     * - documentation: Whether a message can be responded to. To respond to a message, use the URL in ResponseURL. You may need to log into the eBay Web site to complete the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ResponseEnabled = null;
    /**
     * The ResponseURL
     * Meta information extracted from the WSDL
     * - documentation: A URL that the recipient must visit to respond to a message. Responding may require logging into the eBay Web site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResponseURL = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyMessagesResponseDetailsType
     * @uses MyMessagesResponseDetailsType::setResponseEnabled()
     * @uses MyMessagesResponseDetailsType::setResponseURL()
     * @uses MyMessagesResponseDetailsType::setAny()
     * @param bool $responseEnabled
     * @param string $responseURL
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $responseEnabled = null, ?string $responseURL = null, $any = null)
    {
        $this
            ->setResponseEnabled($responseEnabled)
            ->setResponseURL($responseURL)
            ->setAny($any);
    }
    /**
     * Get ResponseEnabled value
     * @return bool|null
     */
    public function getResponseEnabled(): ?bool
    {
        return $this->ResponseEnabled;
    }
    /**
     * Set ResponseEnabled value
     * @param bool $responseEnabled
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType
     */
    public function setResponseEnabled(?bool $responseEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($responseEnabled) && !is_bool($responseEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($responseEnabled, true), gettype($responseEnabled)), __LINE__);
        }
        $this->ResponseEnabled = $responseEnabled;
        
        return $this;
    }
    /**
     * Get ResponseURL value
     * @return string|null
     */
    public function getResponseURL(): ?string
    {
        return $this->ResponseURL;
    }
    /**
     * Set ResponseURL value
     * @param string $responseURL
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType
     */
    public function setResponseURL(?string $responseURL = null): self
    {
        // validation for constraint: string
        if (!is_null($responseURL) && !is_string($responseURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseURL, true), gettype($responseURL)), __LINE__);
        }
        $this->ResponseURL = $responseURL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesResponseDetailsType
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
