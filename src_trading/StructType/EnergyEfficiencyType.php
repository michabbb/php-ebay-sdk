<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnergyEfficiencyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ImageURL</b>, <b>ImageDescription</b>, and <b>ProductInformationsheet</b> regulatory fields that are used at the listing level to provide Energy Efficiency Label related information.<br>
 * @subpackage Structs
 */
class EnergyEfficiencyType extends AbstractStructBase
{
    /**
     * The ImageURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to the Energy Efficiency Label image that is applicable to an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures
     * to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageURL = null;
    /**
     * The ImageDescription
     * Meta information extracted from the WSDL
     * - documentation: A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br />For example, <em>On a scale of A to G the rating is E</em>.<br />As with all strings, you need to escape reserved characters such as
     * ampersand. This field is required if an Energy Efficiency Label is provided.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageDescription = null;
    /**
     * The ProductInformationsheet
     * Meta information extracted from the WSDL
     * - documentation: The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture
     * Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductInformationsheet = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for EnergyEfficiencyType
     * @uses EnergyEfficiencyType::setImageURL()
     * @uses EnergyEfficiencyType::setImageDescription()
     * @uses EnergyEfficiencyType::setProductInformationsheet()
     * @uses EnergyEfficiencyType::setAny()
     * @param string $imageURL
     * @param string $imageDescription
     * @param string $productInformationsheet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $imageURL = null, ?string $imageDescription = null, ?string $productInformationsheet = null, $any = null)
    {
        $this
            ->setImageURL($imageURL)
            ->setImageDescription($imageDescription)
            ->setProductInformationsheet($productInformationsheet)
            ->setAny($any);
    }
    /**
     * Get ImageURL value
     * @return string|null
     */
    public function getImageURL(): ?string
    {
        return $this->ImageURL;
    }
    /**
     * Set ImageURL value
     * @param string $imageURL
     * @return \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType
     */
    public function setImageURL(?string $imageURL = null): self
    {
        // validation for constraint: string
        if (!is_null($imageURL) && !is_string($imageURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageURL, true), gettype($imageURL)), __LINE__);
        }
        $this->ImageURL = $imageURL;
        
        return $this;
    }
    /**
     * Get ImageDescription value
     * @return string|null
     */
    public function getImageDescription(): ?string
    {
        return $this->ImageDescription;
    }
    /**
     * Set ImageDescription value
     * @param string $imageDescription
     * @return \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType
     */
    public function setImageDescription(?string $imageDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($imageDescription) && !is_string($imageDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageDescription, true), gettype($imageDescription)), __LINE__);
        }
        $this->ImageDescription = $imageDescription;
        
        return $this;
    }
    /**
     * Get ProductInformationsheet value
     * @return string|null
     */
    public function getProductInformationsheet(): ?string
    {
        return $this->ProductInformationsheet;
    }
    /**
     * Set ProductInformationsheet value
     * @param string $productInformationsheet
     * @return \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType
     */
    public function setProductInformationsheet(?string $productInformationsheet = null): self
    {
        // validation for constraint: string
        if (!is_null($productInformationsheet) && !is_string($productInformationsheet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productInformationsheet, true), gettype($productInformationsheet)), __LINE__);
        }
        $this->ProductInformationsheet = $productInformationsheet;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType
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
