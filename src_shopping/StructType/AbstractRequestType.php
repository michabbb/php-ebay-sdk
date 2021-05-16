<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base type definition of the request payload, which can carry any type of payload content plus optional versioning information and detail level requirements. All concrete request types are derived from the abstract request type. The
 * naming convention we use for the concrete type names is the name of the service (the verb or call name) followed by "RequestType": VerbNameRequestType
 * @subpackage Structs
 */
abstract class AbstractRequestType extends AbstractStructBase
{
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: If you pass a value into the <b>MessageID</b> field in a request, the same value is returned in <b>CorrelationID</b> field in the response. If you're making a lot of calls, you can use this for tracking that a response is returned
     * for every request and to match particular responses to particular requests. (In this case, specify a different value for each request.) You can specify any value that is useful to you.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AbstractRequestType
     * @uses AbstractRequestType::setMessageID()
     * @uses AbstractRequestType::setAny()
     * @param string $messageID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $messageID = null, $any = null)
    {
        $this
            ->setMessageID($messageID)
            ->setAny($any);
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID(): ?string
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \macropage\ebaysdk\shopping\StructType\AbstractRequestType
     */
    public function setMessageID(?string $messageID = null): self
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AbstractRequestType
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
