<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureURLsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 * @subpackage Structs
 */
class PictureURLsType extends AbstractStructBase
{
    /**
     * The eBayPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call. <br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayPictureURL = null;
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of a seller's self-hosted image(s). <br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalPictureURL = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictureURLsType
     * @uses PictureURLsType::setEBayPictureURL()
     * @uses PictureURLsType::setExternalPictureURL()
     * @uses PictureURLsType::setAny()
     * @param string $eBayPictureURL
     * @param string $externalPictureURL
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eBayPictureURL = null, ?string $externalPictureURL = null, $any = null)
    {
        $this
            ->setEBayPictureURL($eBayPictureURL)
            ->setExternalPictureURL($externalPictureURL)
            ->setAny($any);
    }
    /**
     * Get eBayPictureURL value
     * @return string|null
     */
    public function getEBayPictureURL(): ?string
    {
        return $this->eBayPictureURL;
    }
    /**
     * Set eBayPictureURL value
     * @param string $eBayPictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
     */
    public function setEBayPictureURL(?string $eBayPictureURL = null): self
    {
        // validation for constraint: string
        if (!is_null($eBayPictureURL) && !is_string($eBayPictureURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayPictureURL, true), gettype($eBayPictureURL)), __LINE__);
        }
        $this->eBayPictureURL = $eBayPictureURL;
        
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string|null
     */
    public function getExternalPictureURL(): ?string
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @param string $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
     */
    public function setExternalPictureURL(?string $externalPictureURL = null): self
    {
        // validation for constraint: string
        if (!is_null($externalPictureURL) && !is_string($externalPictureURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalPictureURL, true), gettype($externalPictureURL)), __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
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
