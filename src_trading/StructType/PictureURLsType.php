<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureURLsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 * @subpackage Structs
 */
class PictureURLsType extends AbstractStructBase
{
    /**
     * The eBayPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of an eBay Picture Services (EPS) image. This image is created when a seller uploads a self-hosted image using the <b>UploadSiteHostedPictures</b>, <b>AddItem</b> or <b>AddFixedPriceItem</b> call.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $eBayPictureURL;
    /**
     * The ExternalPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of seller's self-hosted image.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalPictureURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureURLsType
     * @uses PictureURLsType::setEBayPictureURL()
     * @uses PictureURLsType::setExternalPictureURL()
     * @uses PictureURLsType::setAny()
     * @param string $eBayPictureURL
     * @param string $externalPictureURL
     * @param \DOMDocument $any
     */
    public function __construct($eBayPictureURL = null, $externalPictureURL = null, \DOMDocument $any = null)
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
    public function getEBayPictureURL()
    {
        return $this->eBayPictureURL;
    }
    /**
     * Set eBayPictureURL value
     * @param string $eBayPictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
     */
    public function setEBayPictureURL($eBayPictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($eBayPictureURL) && !is_string($eBayPictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayPictureURL)), __LINE__);
        }
        $this->eBayPictureURL = $eBayPictureURL;
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string|null
     */
    public function getExternalPictureURL()
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @param string $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
     */
    public function setExternalPictureURL($externalPictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($externalPictureURL) && !is_string($externalPictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalPictureURL)), __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureURLsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType
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
