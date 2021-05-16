<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated. Replaced by <b>CharityAffiliationDetailType</b>
 * @subpackage Structs
 */
class CharityAffiliationType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated. Replaced by the <b>CharityID</b> field of <b>CharityAffiliationDetailType</b>.
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated. Replaced by the <b>AffiliationType</b> field of <b>CharityAffiliationDetailType</b>.
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for CharityAffiliationType
     * @uses CharityAffiliationType::setAny()
     * @uses CharityAffiliationType::setId()
     * @uses CharityAffiliationType::setType()
     * @param \DOMDocument|string|null $any
     * @param string $id
     * @param string $type
     */
    public function __construct($any = null, ?string $id = null, ?string $type = null)
    {
        $this
            ->setAny($any)
            ->setId($id)
            ->setType($type);
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationType
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
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
