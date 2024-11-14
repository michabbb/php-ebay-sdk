<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingRateType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to specify domestic and international package handling costs if calculated shipping is being used.
 * @subpackage Structs
 */
class CalculatedShippingRateType extends AbstractStructBase
{
    /**
     * The PackagingHandlingCosts
     * Meta information extracted from the WSDL
     * - documentation: Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. <br/><br/> If domestic
     * and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international
     * packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise. <br/> <span
     * class="tablenote"><strong>Note:</strong> If the listing only has one domestic shipping service and it is free shipping, the domestic package handling cost will be ignored and will not be applied to the listing. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PackagingHandlingCosts = null;
    /**
     * The InternationalPackagingHandlingCosts
     * Meta information extracted from the WSDL
     * - documentation: This field shows any package handling cost applied to international shipping. This cost will be in addition to any shipping cost applicable to each international shipping service option. <br/><br/> For international calculated
     * shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InternationalPackagingHandlingCosts = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CalculatedShippingRateType
     * @uses CalculatedShippingRateType::setPackagingHandlingCosts()
     * @uses CalculatedShippingRateType::setInternationalPackagingHandlingCosts()
     * @uses CalculatedShippingRateType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts
     * @param \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null, ?\macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null, $any = null)
    {
        $this
            ->setPackagingHandlingCosts($packagingHandlingCosts)
            ->setInternationalPackagingHandlingCosts($internationalPackagingHandlingCosts)
            ->setAny($any);
    }
    /**
     * Get PackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPackagingHandlingCosts(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PackagingHandlingCosts;
    }
    /**
     * Set PackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setPackagingHandlingCosts(?\macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null): self
    {
        $this->PackagingHandlingCosts = $packagingHandlingCosts;
        
        return $this;
    }
    /**
     * Get InternationalPackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInternationalPackagingHandlingCosts(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InternationalPackagingHandlingCosts;
    }
    /**
     * Set InternationalPackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setInternationalPackagingHandlingCosts(?\macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null): self
    {
        $this->InternationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
