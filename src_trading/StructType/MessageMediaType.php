<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageMediaType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the image file that is to be sent in a message, which lets sellers share photos in messages using the API. The photo must be uploaded by the seller or buyer to <a
 * href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a> using a separate API call or the web flow. After the image is on the eBay server, you can use <b>AddMemberMessage</b> calls
 * to pass the URL of the image in a message. The uploaded images will be available as part of the email as a thumbnail image. Clicking on the thumbnail, opens a larger version of the image in a filmstrip. The image name will be displayed on the title
 * of the filmstrip component. These uploaded images will also be returned as <b>MessageMediaType</b> arrays in the <b>GetMemberMessages</b> and <b>GetMyMessages</b> API response. It doesn't matter if an image was uploaded using the web flow or using
 * the API, it can be accessed using either the web flow or the API and web.
 * @subpackage Structs
 */
class MessageMediaType extends AbstractStructBase
{
    /**
     * The MediaURL
     * Meta informations extracted from the WSDL
     * - documentation: URL of an image to be included in a message. The image must be uploaded to <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a> using a separate API call or
     * the web flow. This URL will be validated and if it doesn't exist, the request will fail.
     * - minOccurs: 0
     * @var string
     */
    public $MediaURL;
    /**
     * The MediaName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the image. This will be displayed on the flimstrip.
     * - minOccurs: 0
     * @var string
     */
    public $MediaName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MessageMediaType
     * @uses MessageMediaType::setMediaURL()
     * @uses MessageMediaType::setMediaName()
     * @uses MessageMediaType::setAny()
     * @param string $mediaURL
     * @param string $mediaName
     * @param \DOMDocument $any
     */
    public function __construct($mediaURL = null, $mediaName = null, \DOMDocument $any = null)
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
    public function getMediaURL()
    {
        return $this->MediaURL;
    }
    /**
     * Set MediaURL value
     * @param string $mediaURL
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
     */
    public function setMediaURL($mediaURL = null)
    {
        // validation for constraint: string
        if (!is_null($mediaURL) && !is_string($mediaURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mediaURL)), __LINE__);
        }
        $this->MediaURL = $mediaURL;
        return $this;
    }
    /**
     * Get MediaName value
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->MediaName;
    }
    /**
     * Set MediaName value
     * @param string $mediaName
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
     */
    public function setMediaName($mediaName = null)
    {
        // validation for constraint: string
        if (!is_null($mediaName) && !is_string($mediaName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mediaName)), __LINE__);
        }
        $this->MediaName = $mediaName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MessageMediaType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
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
     * @return \macropage\ebaysdk\trading\StructType\MessageMediaType
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
