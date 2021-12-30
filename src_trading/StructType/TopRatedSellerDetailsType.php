<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TopRatedSellerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Top-Rated Seller program information.
 * @subpackage Structs
 */
class TopRatedSellerDetailsType extends AbstractStructBase
{
    /**
     * The TopRatedProgram
     * Meta information extracted from the WSDL
     * - documentation: A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TopRatedProgram = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TopRatedSellerDetailsType
     * @uses TopRatedSellerDetailsType::setTopRatedProgram()
     * @uses TopRatedSellerDetailsType::setAny()
     * @param string[] $topRatedProgram
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $topRatedProgram = null, $any = null)
    {
        $this
            ->setTopRatedProgram($topRatedProgram)
            ->setAny($any);
    }
    /**
     * Get TopRatedProgram value
     * @return string[]
     */
    public function getTopRatedProgram(): ?array
    {
        return $this->TopRatedProgram;
    }
    /**
     * This method is responsible for validating the values passed to the setTopRatedProgram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTopRatedProgram method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTopRatedProgramForArrayConstraintsFromSetTopRatedProgram(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $topRatedSellerDetailsTypeTopRatedProgramItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid($topRatedSellerDetailsTypeTopRatedProgramItem)) {
                $invalidValues[] = is_object($topRatedSellerDetailsTypeTopRatedProgramItem) ? get_class($topRatedSellerDetailsTypeTopRatedProgramItem) : sprintf('%s(%s)', gettype($topRatedSellerDetailsTypeTopRatedProgramItem), var_export($topRatedSellerDetailsTypeTopRatedProgramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TopRatedProgram value
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $topRatedProgram
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
     */
    public function setTopRatedProgram(?array $topRatedProgram = null): self
    {
        // validation for constraint: array
        if ('' !== ($topRatedProgramArrayErrorMessage = self::validateTopRatedProgramForArrayConstraintsFromSetTopRatedProgram($topRatedProgram))) {
            throw new InvalidArgumentException($topRatedProgramArrayErrorMessage, __LINE__);
        }
        $this->TopRatedProgram = $topRatedProgram;
        
        return $this;
    }
    /**
     * Add item to TopRatedProgram value
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
     */
    public function addToTopRatedProgram(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues())), __LINE__);
        }
        $this->TopRatedProgram[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
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
