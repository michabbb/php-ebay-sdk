<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicturesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide picture details for a multiple-variation listing. This type is used by the <b>Variations.Pictures</b> container that is returned for multiple-variation listings when the <b>IncludeSelector</b> field is
 * included in the call request and set to <code>Variations</code>. Typically, in a multiple-variation listing, the seller will provide different photos for each available variation based on one product aspect such as color.
 * @subpackage Structs
 */
class PicturesType extends AbstractStructBase
{
    /**
     * The VariationSpecificName
     * Meta information extracted from the WSDL
     * - documentation: This field defines the product aspect in which pictures in the listing will vary based on the individual variations. For example, if the product aspect in this field is <code>Color</code>, the picture URLs in each
     * <b>VariationSpecificPictureSet</b> container would point to one or more pictures of the corresponding variation (defined in the <b>VariationSpecificValue</b> field).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSpecificName = null;
    /**
     * The VariationSpecificPictureSet
     * Meta information extracted from the WSDL
     * - documentation: A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing. Pictures for
     * multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color),
     * but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[]
     */
    protected array $VariationSpecificPictureSet = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PicturesType
     * @uses PicturesType::setVariationSpecificName()
     * @uses PicturesType::setVariationSpecificPictureSet()
     * @uses PicturesType::setAny()
     * @param string $variationSpecificName
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $variationSpecificName = null, array $variationSpecificPictureSet = [], $any = null)
    {
        $this
            ->setVariationSpecificName($variationSpecificName)
            ->setVariationSpecificPictureSet($variationSpecificPictureSet)
            ->setAny($any);
    }
    /**
     * Get VariationSpecificName value
     * @return string|null
     */
    public function getVariationSpecificName(): ?string
    {
        return $this->VariationSpecificName;
    }
    /**
     * Set VariationSpecificName value
     * @param string $variationSpecificName
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
     */
    public function setVariationSpecificName(?string $variationSpecificName = null): self
    {
        // validation for constraint: string
        if (!is_null($variationSpecificName) && !is_string($variationSpecificName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationSpecificName, true), gettype($variationSpecificName)), __LINE__);
        }
        $this->VariationSpecificName = $variationSpecificName;
        
        return $this;
    }
    /**
     * Get VariationSpecificPictureSet value
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[]
     */
    public function getVariationSpecificPictureSet(): array
    {
        return $this->VariationSpecificPictureSet;
    }
    /**
     * This method is responsible for validating the values passed to the setVariationSpecificPictureSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariationSpecificPictureSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationSpecificPictureSetForArrayConstraintsFromSetVariationSpecificPictureSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $picturesTypeVariationSpecificPictureSetItem) {
            // validation for constraint: itemType
            if (!$picturesTypeVariationSpecificPictureSetItem instanceof \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType) {
                $invalidValues[] = is_object($picturesTypeVariationSpecificPictureSetItem) ? get_class($picturesTypeVariationSpecificPictureSetItem) : sprintf('%s(%s)', gettype($picturesTypeVariationSpecificPictureSetItem), var_export($picturesTypeVariationSpecificPictureSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariationSpecificPictureSet property can only contain items of type \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VariationSpecificPictureSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
     */
    public function setVariationSpecificPictureSet(array $variationSpecificPictureSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($variationSpecificPictureSetArrayErrorMessage = self::validateVariationSpecificPictureSetForArrayConstraintsFromSetVariationSpecificPictureSet($variationSpecificPictureSet))) {
            throw new InvalidArgumentException($variationSpecificPictureSetArrayErrorMessage, __LINE__);
        }
        $this->VariationSpecificPictureSet = $variationSpecificPictureSet;
        
        return $this;
    }
    /**
     * Add item to VariationSpecificPictureSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType $item
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
     */
    public function addToVariationSpecificPictureSet(\macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType) {
            throw new InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of type \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VariationSpecificPictureSet[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
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
