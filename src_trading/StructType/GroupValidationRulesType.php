<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupValidationRulesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to specify how many of the corresponding Product Identifier types are required to be specified at listing time. <br/><br/> <span class="tablenote"><strong>Note:</strong> This type and the <b>ProductIdentifiers</b>
 * container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but <b>ProductIdentifiers</b> container was never wired on/returned in
 * <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
 * @subpackage Structs
 */
class GroupValidationRulesType extends AbstractStructBase
{
    /**
     * The MinRequired
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> <strong>GroupValidationRulesTypetype</strong> and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade
     * Item Numbers (GTINs) and other descriptive item specifics, but these schema elements were never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a
     * <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * @var int|null
     */
    protected ?int $MinRequired = null;
    /**
     * Constructor method for GroupValidationRulesType
     * @uses GroupValidationRulesType::setMinRequired()
     * @param int $minRequired
     */
    public function __construct(?int $minRequired = null)
    {
        $this
            ->setMinRequired($minRequired);
    }
    /**
     * Get MinRequired value
     * @return int|null
     */
    public function getMinRequired(): ?int
    {
        return $this->MinRequired;
    }
    /**
     * Set MinRequired value
     * @param int $minRequired
     * @return \macropage\ebaysdk\trading\StructType\GroupValidationRulesType
     */
    public function setMinRequired(?int $minRequired = null): self
    {
        // validation for constraint: int
        if (!is_null($minRequired) && !(is_int($minRequired) || ctype_digit($minRequired))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minRequired, true), gettype($minRequired)), __LINE__);
        }
        $this->MinRequired = $minRequired;
        
        return $this;
    }
}
