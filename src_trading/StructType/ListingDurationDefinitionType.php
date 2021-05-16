<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ListingDurations</b> container that is returned for each listing type supported for the eBay site. <b>ListingDurations</b> container shows the supported listing duration times for each listing type.
 * @subpackage Structs
 */
class ListingDurationDefinitionType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til
     * Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Duration = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The durationSetID
     * Meta information extracted from the WSDL
     * - documentation: The integer value in this attribute identifies the type of listing to which the set of durations applies. To match a <b>durationSetID</b> value to a specific listing type, see the <b>Category.ListingDuration</b> field in the call
     * response.
     * @var int|null
     */
    protected ?int $durationSetID = null;
    /**
     * Constructor method for ListingDurationDefinitionType
     * @uses ListingDurationDefinitionType::setDuration()
     * @uses ListingDurationDefinitionType::setAny()
     * @uses ListingDurationDefinitionType::setDurationSetID()
     * @param string[] $duration
     * @param \DOMDocument|string|null $any
     * @param int $durationSetID
     */
    public function __construct(array $duration = [], $any = null, ?int $durationSetID = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any)
            ->setDurationSetID($durationSetID);
    }
    /**
     * Get Duration value
     * @return string[]
     */
    public function getDuration(): array
    {
        return $this->Duration;
    }
    /**
     * This method is responsible for validating the values passed to the setDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDurationForArrayConstraintsFromSetDuration(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingDurationDefinitionTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($listingDurationDefinitionTypeDurationItem)) {
                $invalidValues[] = is_object($listingDurationDefinitionTypeDurationItem) ? get_class($listingDurationDefinitionTypeDurationItem) : sprintf('%s(%s)', gettype($listingDurationDefinitionTypeDurationItem), var_export($listingDurationDefinitionTypeDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Duration property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Duration value
     * @throws InvalidArgumentException
     * @param string[] $duration
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function setDuration(array $duration = []): self
    {
        // validation for constraint: array
        if ('' !== ($durationArrayErrorMessage = self::validateDurationForArrayConstraintsFromSetDuration($duration))) {
            throw new InvalidArgumentException($durationArrayErrorMessage, __LINE__);
        }
        $this->Duration = $duration;
        
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function addToDuration(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Duration property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Duration[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
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
     * Get durationSetID value
     * @return int|null
     */
    public function getDurationSetID(): ?int
    {
        return $this->durationSetID;
    }
    /**
     * Set durationSetID value
     * @param int $durationSetID
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function setDurationSetID(?int $durationSetID = null): self
    {
        // validation for constraint: int
        if (!is_null($durationSetID) && !(is_int($durationSetID) || ctype_digit($durationSetID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationSetID, true), gettype($durationSetID)), __LINE__);
        }
        $this->durationSetID = $durationSetID;
        
        return $this;
    }
}
