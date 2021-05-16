<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureSetMemberType StructType
 * Meta information extracted from the WSDL
 * - documentation: URL and size information for each generated and stored picture. This data is provided for use in application previews of pictures. This data is used for display control for specific pictures in the generated imageset. This container
 * is supplied for all generated pictures.
 * @subpackage Structs
 */
class PictureSetMemberType extends AbstractStructBase
{
    /**
     * The MemberURL
     * Meta information extracted from the WSDL
     * - documentation: URL for the picture.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MemberURL = null;
    /**
     * The PictureHeight
     * Meta information extracted from the WSDL
     * - documentation: Height of the picture in pixels.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PictureHeight = null;
    /**
     * The PictureWidth
     * Meta information extracted from the WSDL
     * - documentation: Width of the picture in pixels.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PictureWidth = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictureSetMemberType
     * @uses PictureSetMemberType::setMemberURL()
     * @uses PictureSetMemberType::setPictureHeight()
     * @uses PictureSetMemberType::setPictureWidth()
     * @uses PictureSetMemberType::setAny()
     * @param string $memberURL
     * @param int $pictureHeight
     * @param int $pictureWidth
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $memberURL = null, ?int $pictureHeight = null, ?int $pictureWidth = null, $any = null)
    {
        $this
            ->setMemberURL($memberURL)
            ->setPictureHeight($pictureHeight)
            ->setPictureWidth($pictureWidth)
            ->setAny($any);
    }
    /**
     * Get MemberURL value
     * @return string|null
     */
    public function getMemberURL(): ?string
    {
        return $this->MemberURL;
    }
    /**
     * Set MemberURL value
     * @param string $memberURL
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setMemberURL(?string $memberURL = null): self
    {
        // validation for constraint: string
        if (!is_null($memberURL) && !is_string($memberURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberURL, true), gettype($memberURL)), __LINE__);
        }
        $this->MemberURL = $memberURL;
        
        return $this;
    }
    /**
     * Get PictureHeight value
     * @return int|null
     */
    public function getPictureHeight(): ?int
    {
        return $this->PictureHeight;
    }
    /**
     * Set PictureHeight value
     * @param int $pictureHeight
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setPictureHeight(?int $pictureHeight = null): self
    {
        // validation for constraint: int
        if (!is_null($pictureHeight) && !(is_int($pictureHeight) || ctype_digit($pictureHeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureHeight, true), gettype($pictureHeight)), __LINE__);
        }
        $this->PictureHeight = $pictureHeight;
        
        return $this;
    }
    /**
     * Get PictureWidth value
     * @return int|null
     */
    public function getPictureWidth(): ?int
    {
        return $this->PictureWidth;
    }
    /**
     * Set PictureWidth value
     * @param int $pictureWidth
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setPictureWidth(?int $pictureWidth = null): self
    {
        // validation for constraint: int
        if (!is_null($pictureWidth) && !(is_int($pictureWidth) || ctype_digit($pictureWidth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureWidth, true), gettype($pictureWidth)), __LINE__);
        }
        $this->PictureWidth = $pictureWidth;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
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
