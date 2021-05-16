<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupType extends AbstractStructBase
{
    /**
     * The BidGroupItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidGroupItemType[]
     */
    protected array $BidGroupItem = [];
    /**
     * The BidGroupID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidGroupID = null;
    /**
     * The BidGroupName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BidGroupName = null;
    /**
     * The BidGroupStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BidGroupStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BidGroupType
     * @uses BidGroupType::setBidGroupItem()
     * @uses BidGroupType::setBidGroupID()
     * @uses BidGroupType::setBidGroupName()
     * @uses BidGroupType::setBidGroupStatus()
     * @uses BidGroupType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType[] $bidGroupItem
     * @param int $bidGroupID
     * @param string $bidGroupName
     * @param string $bidGroupStatus
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $bidGroupItem = [], ?int $bidGroupID = null, ?string $bidGroupName = null, ?string $bidGroupStatus = null, $any = null)
    {
        $this
            ->setBidGroupItem($bidGroupItem)
            ->setBidGroupID($bidGroupID)
            ->setBidGroupName($bidGroupName)
            ->setBidGroupStatus($bidGroupStatus)
            ->setAny($any);
    }
    /**
     * Get BidGroupItem value
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType[]
     */
    public function getBidGroupItem(): array
    {
        return $this->BidGroupItem;
    }
    /**
     * This method is responsible for validating the values passed to the setBidGroupItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBidGroupItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBidGroupItemForArrayConstraintsFromSetBidGroupItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bidGroupTypeBidGroupItemItem) {
            // validation for constraint: itemType
            if (!$bidGroupTypeBidGroupItemItem instanceof \macropage\ebaysdk\trading\StructType\BidGroupItemType) {
                $invalidValues[] = is_object($bidGroupTypeBidGroupItemItem) ? get_class($bidGroupTypeBidGroupItemItem) : sprintf('%s(%s)', gettype($bidGroupTypeBidGroupItemItem), var_export($bidGroupTypeBidGroupItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BidGroupItem property can only contain items of type \macropage\ebaysdk\trading\StructType\BidGroupItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BidGroupItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType[] $bidGroupItem
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupItem(array $bidGroupItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($bidGroupItemArrayErrorMessage = self::validateBidGroupItemForArrayConstraintsFromSetBidGroupItem($bidGroupItem))) {
            throw new InvalidArgumentException($bidGroupItemArrayErrorMessage, __LINE__);
        }
        $this->BidGroupItem = $bidGroupItem;
        
        return $this;
    }
    /**
     * Add item to BidGroupItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType $item
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function addToBidGroupItem(\macropage\ebaysdk\trading\StructType\BidGroupItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidGroupItemType) {
            throw new InvalidArgumentException(sprintf('The BidGroupItem property can only contain items of type \macropage\ebaysdk\trading\StructType\BidGroupItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BidGroupItem[] = $item;
        
        return $this;
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID(): ?int
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupID(?int $bidGroupID = null): self
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !(is_int($bidGroupID) || ctype_digit($bidGroupID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidGroupID, true), gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        
        return $this;
    }
    /**
     * Get BidGroupName value
     * @return string|null
     */
    public function getBidGroupName(): ?string
    {
        return $this->BidGroupName;
    }
    /**
     * Set BidGroupName value
     * @param string $bidGroupName
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupName(?string $bidGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($bidGroupName) && !is_string($bidGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bidGroupName, true), gettype($bidGroupName)), __LINE__);
        }
        $this->BidGroupName = $bidGroupName;
        
        return $this;
    }
    /**
     * Get BidGroupStatus value
     * @return string|null
     */
    public function getBidGroupStatus(): ?string
    {
        return $this->BidGroupStatus;
    }
    /**
     * Set BidGroupStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bidGroupStatus
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupStatus(?string $bidGroupStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::valueIsValid($bidGroupStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType', is_array($bidGroupStatus) ? implode(', ', $bidGroupStatus) : var_export($bidGroupStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupStatus = $bidGroupStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
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
