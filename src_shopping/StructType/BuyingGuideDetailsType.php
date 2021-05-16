<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingGuideDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: <br/><br/> <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
 * @subpackage Structs
 */
class BuyingGuideDetailsType extends AbstractStructBase
{
    /**
     * The BuyingGuide
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\BuyingGuideType[]
     */
    protected array $BuyingGuide = [];
    /**
     * The BuyingGuideHub
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyingGuideHub = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BuyingGuideDetailsType
     * @uses BuyingGuideDetailsType::setBuyingGuide()
     * @uses BuyingGuideDetailsType::setBuyingGuideHub()
     * @uses BuyingGuideDetailsType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType[] $buyingGuide
     * @param string $buyingGuideHub
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $buyingGuide = [], ?string $buyingGuideHub = null, $any = null)
    {
        $this
            ->setBuyingGuide($buyingGuide)
            ->setBuyingGuideHub($buyingGuideHub)
            ->setAny($any);
    }
    /**
     * Get BuyingGuide value
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideType[]
     */
    public function getBuyingGuide(): array
    {
        return $this->BuyingGuide;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyingGuide method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyingGuide method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyingGuideForArrayConstraintsFromSetBuyingGuide(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyingGuideDetailsTypeBuyingGuideItem) {
            // validation for constraint: itemType
            if (!$buyingGuideDetailsTypeBuyingGuideItem instanceof \macropage\ebaysdk\shopping\StructType\BuyingGuideType) {
                $invalidValues[] = is_object($buyingGuideDetailsTypeBuyingGuideItem) ? get_class($buyingGuideDetailsTypeBuyingGuideItem) : sprintf('%s(%s)', gettype($buyingGuideDetailsTypeBuyingGuideItem), var_export($buyingGuideDetailsTypeBuyingGuideItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyingGuide property can only contain items of type \macropage\ebaysdk\shopping\StructType\BuyingGuideType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BuyingGuide value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType[] $buyingGuide
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuide(array $buyingGuide = []): self
    {
        // validation for constraint: array
        if ('' !== ($buyingGuideArrayErrorMessage = self::validateBuyingGuideForArrayConstraintsFromSetBuyingGuide($buyingGuide))) {
            throw new InvalidArgumentException($buyingGuideArrayErrorMessage, __LINE__);
        }
        $this->BuyingGuide = $buyingGuide;
        
        return $this;
    }
    /**
     * Add item to BuyingGuide value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType $item
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public function addToBuyingGuide(\macropage\ebaysdk\shopping\StructType\BuyingGuideType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\BuyingGuideType) {
            throw new InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of type \macropage\ebaysdk\shopping\StructType\BuyingGuideType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyingGuide[] = $item;
        
        return $this;
    }
    /**
     * Get BuyingGuideHub value
     * @return string|null
     */
    public function getBuyingGuideHub(): ?string
    {
        return $this->BuyingGuideHub;
    }
    /**
     * Set BuyingGuideHub value
     * @param string $buyingGuideHub
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuideHub(?string $buyingGuideHub = null): self
    {
        // validation for constraint: string
        if (!is_null($buyingGuideHub) && !is_string($buyingGuideHub)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyingGuideHub, true), gettype($buyingGuideHub)), __LINE__);
        }
        $this->BuyingGuideHub = $buyingGuideHub;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
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
