<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcludeShippingLocationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ExcludeShippingLocationDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. The values returned in the <b>ExcludeShippingLocationDetails.Location</b> fields are the values that can be
 * specified when specifying excluded shipping locations in an Add/Revise/Relist item call, or in a shipping business policy.
 * @subpackage Structs
 */
class ExcludeShippingLocationDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The localized location name.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: The location or region code to be used with the AddItem family of calls. These codes are also returned by GetItem. This code reflects the <a href=
     * "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> codes.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Region
     * Meta information extracted from the WSDL
     * - documentation: The region code to which the location belongs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Region = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the current version number of the ExcludeShippingLocation data. Use the version number to determine if you need to refresh your cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: The time in GMT that the feature flags for the details were last updated. Use this timestamp to determine if you need to refresh your cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ExcludeShippingLocationDetailsType
     * @uses ExcludeShippingLocationDetailsType::setDescription()
     * @uses ExcludeShippingLocationDetailsType::setLocation()
     * @uses ExcludeShippingLocationDetailsType::setRegion()
     * @uses ExcludeShippingLocationDetailsType::setDetailVersion()
     * @uses ExcludeShippingLocationDetailsType::setUpdateTime()
     * @uses ExcludeShippingLocationDetailsType::setAny()
     * @param string $description
     * @param string $location
     * @param string $region
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $description = null, ?string $location = null, ?string $region = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setDescription($description)
            ->setLocation($location)
            ->setRegion($region)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
     */
    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->Region = $region;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ExcludeShippingLocationDetailsType
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
