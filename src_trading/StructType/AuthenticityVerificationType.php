<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticityVerificationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AuthenticityVerification</b> container, which gives status on whether the order line item has passed or failed the authenticity inspection, or if the test is still pending. The following table describes
 * the relationship between the <b>Status</b> and <b>OutcomeReason</b> fields. <table> <col /> <col /> <col /> <thead> <tr> <th> <p>Status</p> </th> <th> <p>OutcomeReason</p> </th> <th> <p>Description</p> </th> </tr> </thead> <tbody> <tr>
 * <td>PENDING</td> <td>Not applicable</td> <td>Authenticity checks have not completed (the authentication status is pending). The order's authenticity is still unknown</td> </tr> <tr> <td>PASSED</td> <td>Not applicable</td> <td>The authentication has
 * been accepted. The order is authentic. The authentication partner sends the order line item to the buyer with the message that the item is authentic</td> </tr> <tr> <td rowspan="2">PASSED_WITH_EXCEPTION <br />There may be legal reasons or
 * requirements such that the item cannot be labeled authentic. </td> <td>CUSTOMIZED</td> <td>The order line item has been altered or customized, and cannot be labeled as authentic but will be sent to the buyer</td> </tr> <tr> <td>MISCATEGORIZED</td>
 * <td>The order line item was in the wrong eBay category and cannot be labeled as authentic but will be sent to the buyer</td> </tr> <tr> <td rowspan="3">FAILED</td> <td>NOT_AUTHENTIC</td> <td>The order could not be authenticated. The authentication
 * partner returns the order line item to the seller; refunds the buyer</td> </tr> <tr> <td>NOT_AS_DESCRIBED</td> <td>The order is not as described. The authentication partner returns the order line item to the seller; refunds the buyer</td> </tr> <tr>
 * <td>NOT_AUTHENTIC_NO_RETURN</td> <td>This enumeration value indicates that the order line item was found as counterfeit and cannot be returned to the seller because of legal constraints; refunds the buyer</td> </tr> </tbody> </table>
 * @subpackage Structs
 */
class AuthenticityVerificationType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The value in this field indicates whether the order line item has passed or failed the authenticity inspection, or if the test and/or results are still pending. The possible values returned here are <code>PENDING</code>,
     * <code>PASSED</code>, <code>PASSED_WITH_EXCEPTION</code>, or <code>FAILED</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The OutcomeReason
     * Meta information extracted from the WSDL
     * - documentation: This field is returned after the third-party authenticator has performed the authentication inspection on the order line item. <br/><br/> Different values will be returned based on whether the item passed or failed the authentication
     * inspection. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>,
     * <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OutcomeReason = null;
    /**
     * The ServiceCost
     * Meta information extracted from the WSDL
     * - documentation: This container shows service cost to the buyer for an item that will go through the Authenticity Guarantee process.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ServiceCostType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ServiceCostType $ServiceCost = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AuthenticityVerificationType
     * @uses AuthenticityVerificationType::setStatus()
     * @uses AuthenticityVerificationType::setOutcomeReason()
     * @uses AuthenticityVerificationType::setServiceCost()
     * @uses AuthenticityVerificationType::setAny()
     * @param string $status
     * @param string $outcomeReason
     * @param \macropage\ebaysdk\trading\StructType\ServiceCostType $serviceCost
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $status = null, ?string $outcomeReason = null, ?\macropage\ebaysdk\trading\StructType\ServiceCostType $serviceCost = null, $any = null)
    {
        $this
            ->setStatus($status)
            ->setOutcomeReason($outcomeReason)
            ->setServiceCost($serviceCost)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get OutcomeReason value
     * @return string|null
     */
    public function getOutcomeReason(): ?string
    {
        return $this->OutcomeReason;
    }
    /**
     * Set OutcomeReason value
     * @param string $outcomeReason
     * @return \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType
     */
    public function setOutcomeReason(?string $outcomeReason = null): self
    {
        // validation for constraint: string
        if (!is_null($outcomeReason) && !is_string($outcomeReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outcomeReason, true), gettype($outcomeReason)), __LINE__);
        }
        $this->OutcomeReason = $outcomeReason;
        
        return $this;
    }
    /**
     * Get ServiceCost value
     * @return \macropage\ebaysdk\trading\StructType\ServiceCostType|null
     */
    public function getServiceCost(): ?\macropage\ebaysdk\trading\StructType\ServiceCostType
    {
        return $this->ServiceCost;
    }
    /**
     * Set ServiceCost value
     * @param \macropage\ebaysdk\trading\StructType\ServiceCostType $serviceCost
     * @return \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType
     */
    public function setServiceCost(?\macropage\ebaysdk\trading\StructType\ServiceCostType $serviceCost = null): self
    {
        $this->ServiceCost = $serviceCost;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType
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
