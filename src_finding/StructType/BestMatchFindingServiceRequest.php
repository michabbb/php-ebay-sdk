<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestMatchFindingServiceRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request container for all Finding Service operations.
 * @subpackage Structs
 */
abstract class BestMatchFindingServiceRequest extends BaseServiceRequest
{
    /**
     * The paginationInput
     * Meta informations extracted from the WSDL
     * - documentation: Controls the pagination of the result set. Child elements specify the maximum number of item listings to return per call and the page of data to return. Controls the number of listings returned in the response, but does not specify
     * the details to return for each listing. <br><br> <span class="tablenote"><strong>Note:</strong> No more than 10,000 items can be retrieved for a given search, regardless of how many matches are found. This limit is enforced by the maximum page number
     * allowed (100) and the maximum entries per page allowed (100). </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\PaginationInput
     */
    public $paginationInput;
    /**
     * The buyerPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: The postal code of the buyer. This is used as the basis for proximity searches as well as local searches. <br><br> A proximity search requires <b class="con">buyerPostalCode</b> and a <b class="con">MaxDistance</b> item filter. A
     * local search requires <b class="con">buyerPostalCode</b> and item filters for <b class="con">MaxDistance</b> and <b class="con">LocalSearch</b>. <br><br>This is also <b>required</b> for any country that supports local shipping regions in order for
     * the correct shipping cost to be determined.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $buyerPostalCode;
    /**
     * The affiliate
     * Meta informations extracted from the WSDL
     * - documentation: Container for affiliate details. eBay uses the specified affiliate information to build a View Item URL and Product URL string with correctly formatted affiliate tracking information, which it returns in the response. You can publish
     * these URLs, and if a user clicks them to access eBay, the respective affiliate might get a commission, depending on the user's actions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public $affiliate;
    /**
     * Constructor method for BestMatchFindingServiceRequest
     * @uses BestMatchFindingServiceRequest::setPaginationInput()
     * @uses BestMatchFindingServiceRequest::setBuyerPostalCode()
     * @uses BestMatchFindingServiceRequest::setAffiliate()
     * @param \macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput
     * @param string $buyerPostalCode
     * @param \macropage\ebaysdk\finding\StructType\Affiliate $affiliate
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput = null, $buyerPostalCode = null, \macropage\ebaysdk\finding\StructType\Affiliate $affiliate = null)
    {
        $this
            ->setPaginationInput($paginationInput)
            ->setBuyerPostalCode($buyerPostalCode)
            ->setAffiliate($affiliate);
    }
    /**
     * Get paginationInput value
     * @return \macropage\ebaysdk\finding\StructType\PaginationInput|null
     */
    public function getPaginationInput()
    {
        return $this->paginationInput;
    }
    /**
     * Set paginationInput value
     * @param \macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput
     * @return \macropage\ebaysdk\finding\StructType\BestMatchFindingServiceRequest
     */
    public function setPaginationInput(\macropage\ebaysdk\finding\StructType\PaginationInput $paginationInput = null)
    {
        $this->paginationInput = $paginationInput;
        return $this;
    }
    /**
     * Get buyerPostalCode value
     * @return string|null
     */
    public function getBuyerPostalCode()
    {
        return $this->buyerPostalCode;
    }
    /**
     * Set buyerPostalCode value
     * @param string $buyerPostalCode
     * @return \macropage\ebaysdk\finding\StructType\BestMatchFindingServiceRequest
     */
    public function setBuyerPostalCode($buyerPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($buyerPostalCode) && !is_string($buyerPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerPostalCode)), __LINE__);
        }
        $this->buyerPostalCode = $buyerPostalCode;
        return $this;
    }
    /**
     * Get affiliate value
     * @return \macropage\ebaysdk\finding\StructType\Affiliate|null
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
    /**
     * Set affiliate value
     * @param \macropage\ebaysdk\finding\StructType\Affiliate $affiliate
     * @return \macropage\ebaysdk\finding\StructType\BestMatchFindingServiceRequest
     */
    public function setAffiliate(\macropage\ebaysdk\finding\StructType\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\BestMatchFindingServiceRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
