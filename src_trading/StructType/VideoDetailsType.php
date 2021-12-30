<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the Add/Revise/Relist calls to add a video to a listing. All videos added to listings must be uploaded to eBay via the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>. See the <a
 * href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a> reference documentation for all of the necessary details to upload videos to eBay. <br/><br/> The <b>GetItem</b> call will return the <b>VideoDetails</b> container if the
 * listing contains a video, and the seller of the item is the one making the <b>GetItem</b> call.
 * @subpackage Structs
 */
class VideoDetailsType extends AbstractStructBase
{
    /**
     * The VideoID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo"
     * target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>. <br/><br/> In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video
     * can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a
     * href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the
     * response. <br/><br/> To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace
     * the existing video in the listing. <br/><br/> To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to
     * <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing. <br/><br/> <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that
     * the video belongs to, and was uploaded by the seller. </span> <br/> The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a
     * video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $VideoID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VideoDetailsType
     * @uses VideoDetailsType::setVideoID()
     * @uses VideoDetailsType::setAny()
     * @param string[] $videoID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $videoID = null, $any = null)
    {
        $this
            ->setVideoID($videoID)
            ->setAny($any);
    }
    /**
     * Get VideoID value
     * @return string[]
     */
    public function getVideoID(): ?array
    {
        return $this->VideoID;
    }
    /**
     * This method is responsible for validating the values passed to the setVideoID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVideoID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVideoIDForArrayConstraintsFromSetVideoID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $videoDetailsTypeVideoIDItem) {
            // validation for constraint: itemType
            if (!is_string($videoDetailsTypeVideoIDItem)) {
                $invalidValues[] = is_object($videoDetailsTypeVideoIDItem) ? get_class($videoDetailsTypeVideoIDItem) : sprintf('%s(%s)', gettype($videoDetailsTypeVideoIDItem), var_export($videoDetailsTypeVideoIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VideoID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VideoID value
     * @throws InvalidArgumentException
     * @param string[] $videoID
     * @return \macropage\ebaysdk\trading\StructType\VideoDetailsType
     */
    public function setVideoID(?array $videoID = null): self
    {
        // validation for constraint: array
        if ('' !== ($videoIDArrayErrorMessage = self::validateVideoIDForArrayConstraintsFromSetVideoID($videoID))) {
            throw new InvalidArgumentException($videoIDArrayErrorMessage, __LINE__);
        }
        $this->VideoID = $videoID;
        
        return $this;
    }
    /**
     * Add item to VideoID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VideoDetailsType
     */
    public function addToVideoID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The VideoID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VideoID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VideoDetailsType
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
