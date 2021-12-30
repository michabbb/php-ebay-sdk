<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROSiteDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>VeROSiteDetailType</b> container, which is returned in <b>GetVeROReasonCodeDetails</b>. Each <b>VeROSiteDetailType</b> container will contain one or more reasons how an eBay listing could possibly infringe upon
 * the intellectual property rights of a product owner.
 * @subpackage Structs
 */
class VeROSiteDetailType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay site for which reason code details are returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Site = null;
    /**
     * The ReasonCodeDetail
     * Meta information extracted from the WSDL
     * - documentation: This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container
     * also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[]
     */
    protected ?array $ReasonCodeDetail = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VeROSiteDetailType
     * @uses VeROSiteDetailType::setSite()
     * @uses VeROSiteDetailType::setReasonCodeDetail()
     * @uses VeROSiteDetailType::setAny()
     * @param string $site
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $site = null, ?array $reasonCodeDetail = null, $any = null)
    {
        $this
            ->setSite($site)
            ->setReasonCodeDetail($reasonCodeDetail)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function setSite(?string $site = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Get ReasonCodeDetail value
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[]
     */
    public function getReasonCodeDetail(): ?array
    {
        return $this->ReasonCodeDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setReasonCodeDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReasonCodeDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonCodeDetailForArrayConstraintsFromSetReasonCodeDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $veROSiteDetailTypeReasonCodeDetailItem) {
            // validation for constraint: itemType
            if (!$veROSiteDetailTypeReasonCodeDetailItem instanceof \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType) {
                $invalidValues[] = is_object($veROSiteDetailTypeReasonCodeDetailItem) ? get_class($veROSiteDetailTypeReasonCodeDetailItem) : sprintf('%s(%s)', gettype($veROSiteDetailTypeReasonCodeDetailItem), var_export($veROSiteDetailTypeReasonCodeDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReasonCodeDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReasonCodeDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function setReasonCodeDetail(?array $reasonCodeDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($reasonCodeDetailArrayErrorMessage = self::validateReasonCodeDetailForArrayConstraintsFromSetReasonCodeDetail($reasonCodeDetail))) {
            throw new InvalidArgumentException($reasonCodeDetailArrayErrorMessage, __LINE__);
        }
        $this->ReasonCodeDetail = $reasonCodeDetail;
        
        return $this;
    }
    /**
     * Add item to ReasonCodeDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function addToReasonCodeDetail(\macropage\ebaysdk\trading\StructType\ReasonCodeDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType) {
            throw new InvalidArgumentException(sprintf('The ReasonCodeDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReasonCodeDetail[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
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
