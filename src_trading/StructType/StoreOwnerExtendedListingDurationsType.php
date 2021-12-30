<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreOwnerExtendedListingDurationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to specify the additional listing durations that are available to sellers who have eBay Store subscriptions. The <b>StoreOwnerExtendedListingDurations</b> container is only returned under the <b>SiteDefaults</b>
 * node if the eBay marketplace supports additional listing durations for eBay Store owners, and this container is only returned under a <b>Category</b> node if this eBay category supports additional listing durations for eBay Store owners (other than
 * the durations that are already supported for the category).
 * @subpackage Structs
 */
class StoreOwnerExtendedListingDurationsType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Duration = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreOwnerExtendedListingDurationsType
     * @uses StoreOwnerExtendedListingDurationsType::setDuration()
     * @uses StoreOwnerExtendedListingDurationsType::setAny()
     * @param string[] $duration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $duration = null, $any = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any);
    }
    /**
     * Get Duration value
     * @return string[]
     */
    public function getDuration(): ?array
    {
        return $this->Duration;
    }
    /**
     * This method is responsible for validating the values passed to the setDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDurationForArrayConstraintsFromSetDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeOwnerExtendedListingDurationsTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($storeOwnerExtendedListingDurationsTypeDurationItem)) {
                $invalidValues[] = is_object($storeOwnerExtendedListingDurationsTypeDurationItem) ? get_class($storeOwnerExtendedListingDurationsTypeDurationItem) : sprintf('%s(%s)', gettype($storeOwnerExtendedListingDurationsTypeDurationItem), var_export($storeOwnerExtendedListingDurationsTypeDurationItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
     */
    public function setDuration(?array $duration = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
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
