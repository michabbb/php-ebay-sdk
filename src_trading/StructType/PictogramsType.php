<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictogramsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Pictogram</b> container used at the listing level to provide pictograms for the listing.
 * @subpackage Structs
 */
class PictogramsType extends AbstractStructBase
{
    /**
     * The Pictogram
     * Meta information extracted from the WSDL
     * - documentation: This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are
     * stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety
     * pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram. <span
     * class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a
     * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>. <br> <br> For product safety pictograms, use the <a href =
     * "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported
     * values for a specific marketplace/site.</span>
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Pictogram = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictogramsType
     * @uses PictogramsType::setPictogram()
     * @uses PictogramsType::setAny()
     * @param string[] $pictogram
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $pictogram = null, $any = null)
    {
        $this
            ->setPictogram($pictogram)
            ->setAny($any);
    }
    /**
     * Get Pictogram value
     * @return string[]
     */
    public function getPictogram(): ?array
    {
        return $this->Pictogram;
    }
    /**
     * This method is responsible for validating the values passed to the setPictogram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictogram method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictogramForArrayConstraintsFromSetPictogram(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictogramsTypePictogramItem) {
            // validation for constraint: itemType
            if (!is_string($pictogramsTypePictogramItem)) {
                $invalidValues[] = is_object($pictogramsTypePictogramItem) ? get_class($pictogramsTypePictogramItem) : sprintf('%s(%s)', gettype($pictogramsTypePictogramItem), var_export($pictogramsTypePictogramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pictogram property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Pictogram value
     * @throws InvalidArgumentException
     * @param string[] $pictogram
     * @return \macropage\ebaysdk\trading\StructType\PictogramsType
     */
    public function setPictogram(?array $pictogram = null): self
    {
        // validation for constraint: array
        if ('' !== ($pictogramArrayErrorMessage = self::validatePictogramForArrayConstraintsFromSetPictogram($pictogram))) {
            throw new InvalidArgumentException($pictogramArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($pictogram) && count($pictogram) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($pictogram)), __LINE__);
        }
        $this->Pictogram = $pictogram;
        
        return $this;
    }
    /**
     * Add item to Pictogram value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\PictogramsType
     */
    public function addToPictogram(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Pictogram property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Pictogram) && count($this->Pictogram) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Pictogram)), __LINE__);
        }
        $this->Pictogram[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\PictogramsType
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
