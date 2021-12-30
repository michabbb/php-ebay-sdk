<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageMediaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the image file that is to be sent in a message, which lets sellers share photos in messages using the API. The photo must be uploaded by the seller or buyer to <a
 * href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a> using a separate API call or the web flow. After the image is on the eBay server, you can use <b>AddMemberMessage</b>
 * calls to pass the URL of the image in a message. The uploaded images will be available as part of the email as a thumbnail image. Clicking on the thumbnail, opens a larger version of the image in a filmstrip. The image name will be displayed on the
 * title of the filmstrip component. These uploaded images will also be returned as <b>MessageMediaType</b> arrays in the <b>GetMemberMessages</b> and <b>GetMyMessages</b> API response. It doesn't matter if an image was uploaded using the web flow or
 * using the API, it can be accessed using either the web flow or the API and web.
 * @subpackage Structs
 */
class MessageMediaType extends AbstractStructBase
{
    /**
     * The MediaURL
     * Meta information extracted from the WSDL
     * - documentation: URL of an image to be included in a message. The image must be uploaded to <a href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a> using a separate API call
     * or the web flow. This URL will be validated and if it doesn't exist, the request will fail.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MediaURL = null;
    /**
     * The MediaName
     * Meta information extracted from the WSDL
     * - documentation: The name of the image. This will be displayed on the flimstrip.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MediaName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MessageMediaType
     * @uses MessageMediaType::setMediaURL()
     * @uses MessageMediaType::setMediaName()
     * @uses MessageMediaType::setAny()
     * @param string $mediaURL
     * @param string $mediaName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $mediaURL = null, ?string $mediaName = null, $any = null)
    {
        $this
            ->setMediaURL($mediaURL)
            ->setMediaName($mediaName)
            ->setAny($any);
    }
    /**
     * Get MediaURL value
     * @return string|null
     */
    public function getMediaURL(): ?string
    {
        return $this->MediaURL;
    }
    /**
     * Set MediaURL value
     * @param string $mediaURL
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
     */
    public function setMediaURL(?string $mediaURL = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaURL) && !is_string($mediaURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaURL, true), gettype($mediaURL)), __LINE__);
        }
        $this->MediaURL = $mediaURL;
        
        return $this;
    }
    /**
     * Get MediaName value
     * @return string|null
     */
    public function getMediaName(): ?string
    {
        return $this->MediaName;
    }
    /**
     * Set MediaName value
     * @param string $mediaName
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
     */
    public function setMediaName(?string $mediaName = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaName) && !is_string($mediaName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaName, true), gettype($mediaName)), __LINE__);
        }
        $this->MediaName = $mediaName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
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
