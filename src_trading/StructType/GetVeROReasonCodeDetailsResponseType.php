<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReasonCodeDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <strong>GetVeROReasonCodeDetails</strong> call. This response will consists of one or more VeRO Program copyright/intellectual property infringement violation types.
 * @subpackage Structs
 */
class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
    /**
     * The VeROReasonCodeDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more VeRO Program copyright/intellectual property infringement violation types for one or more eBay sites.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $VeROReasonCodeDetails = null;
    /**
     * Constructor method for GetVeROReasonCodeDetailsResponseType
     * @uses GetVeROReasonCodeDetailsResponseType::setVeROReasonCodeDetails()
     * @param \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null)
    {
        $this
            ->setVeROReasonCodeDetails($veROReasonCodeDetails);
    }
    /**
     * Get VeROReasonCodeDetails value
     * @return \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType|null
     */
    public function getVeROReasonCodeDetails(): ?\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType
    {
        return $this->VeROReasonCodeDetails;
    }
    /**
     * Set VeROReasonCodeDetails value
     * @param \macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsResponseType
     */
    public function setVeROReasonCodeDetails(?\macropage\ebaysdk\trading\StructType\VeROReasonCodeDetailsType $veROReasonCodeDetails = null): self
    {
        $this->VeROReasonCodeDetails = $veROReasonCodeDetails;
        
        return $this;
    }
}
