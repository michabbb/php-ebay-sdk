<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data indicating whether an item has been revised since the listing became active and, if so, which among a subset of properties have been changed by the revision.
 * @subpackage Structs
 */
class ReviseStatusType extends AbstractStructBase
{
    /**
     * The ItemRevised
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the original listing has been revised. This field is always returned with the <b>ReviseStatus</b> container.
     * @var bool|null
     */
    protected ?bool $ItemRevised = null;
    /**
     * The BuyItNowAdded
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if a Buy It Now price has been added to the auction listing. This field is only returned if the original auction listing did not have a Buy It Now price, but a revision to that original
     * listing included adding a Buy It Now price.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyItNowAdded = null;
    /**
     * The BuyItNowLowered
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Buy It Now price on the
     * original auction listing was lowered as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyItNowLowered = null;
    /**
     * The ReserveLowered
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original
     * auction listing was lowered as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReserveLowered = null;
    /**
     * The ReserveRemoved
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original
     * auction listing was removed as part of a revision to the original auction listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReserveRemoved = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ReviseStatusType
     * @uses ReviseStatusType::setItemRevised()
     * @uses ReviseStatusType::setBuyItNowAdded()
     * @uses ReviseStatusType::setBuyItNowLowered()
     * @uses ReviseStatusType::setReserveLowered()
     * @uses ReviseStatusType::setReserveRemoved()
     * @uses ReviseStatusType::setAny()
     * @param bool $itemRevised
     * @param bool $buyItNowAdded
     * @param bool $buyItNowLowered
     * @param bool $reserveLowered
     * @param bool $reserveRemoved
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $itemRevised = null, ?bool $buyItNowAdded = null, ?bool $buyItNowLowered = null, ?bool $reserveLowered = null, ?bool $reserveRemoved = null, $any = null)
    {
        $this
            ->setItemRevised($itemRevised)
            ->setBuyItNowAdded($buyItNowAdded)
            ->setBuyItNowLowered($buyItNowLowered)
            ->setReserveLowered($reserveLowered)
            ->setReserveRemoved($reserveRemoved)
            ->setAny($any);
    }
    /**
     * Get ItemRevised value
     * @return bool|null
     */
    public function getItemRevised(): ?bool
    {
        return $this->ItemRevised;
    }
    /**
     * Set ItemRevised value
     * @param bool $itemRevised
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public function setItemRevised(?bool $itemRevised = null): self
    {
        // validation for constraint: boolean
        if (!is_null($itemRevised) && !is_bool($itemRevised)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itemRevised, true), gettype($itemRevised)), __LINE__);
        }
        $this->ItemRevised = $itemRevised;
        
        return $this;
    }
    /**
     * Get BuyItNowAdded value
     * @return bool|null
     */
    public function getBuyItNowAdded(): ?bool
    {
        return $this->BuyItNowAdded;
    }
    /**
     * Set BuyItNowAdded value
     * @param bool $buyItNowAdded
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public function setBuyItNowAdded(?bool $buyItNowAdded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowAdded) && !is_bool($buyItNowAdded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowAdded, true), gettype($buyItNowAdded)), __LINE__);
        }
        $this->BuyItNowAdded = $buyItNowAdded;
        
        return $this;
    }
    /**
     * Get BuyItNowLowered value
     * @return bool|null
     */
    public function getBuyItNowLowered(): ?bool
    {
        return $this->BuyItNowLowered;
    }
    /**
     * Set BuyItNowLowered value
     * @param bool $buyItNowLowered
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public function setBuyItNowLowered(?bool $buyItNowLowered = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowLowered) && !is_bool($buyItNowLowered)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowLowered, true), gettype($buyItNowLowered)), __LINE__);
        }
        $this->BuyItNowLowered = $buyItNowLowered;
        
        return $this;
    }
    /**
     * Get ReserveLowered value
     * @return bool|null
     */
    public function getReserveLowered(): ?bool
    {
        return $this->ReserveLowered;
    }
    /**
     * Set ReserveLowered value
     * @param bool $reserveLowered
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public function setReserveLowered(?bool $reserveLowered = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reserveLowered) && !is_bool($reserveLowered)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveLowered, true), gettype($reserveLowered)), __LINE__);
        }
        $this->ReserveLowered = $reserveLowered;
        
        return $this;
    }
    /**
     * Get ReserveRemoved value
     * @return bool|null
     */
    public function getReserveRemoved(): ?bool
    {
        return $this->ReserveRemoved;
    }
    /**
     * Set ReserveRemoved value
     * @param bool $reserveRemoved
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
     */
    public function setReserveRemoved(?bool $reserveRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reserveRemoved) && !is_bool($reserveRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveRemoved, true), gettype($reserveRemoved)), __LINE__);
        }
        $this->ReserveRemoved = $reserveRemoved;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ReviseStatusType
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
