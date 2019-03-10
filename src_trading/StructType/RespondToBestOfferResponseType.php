<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToBestOfferResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>RespondToBestOffer</b> call. Along with the standard output fields for Trading API calls, this type contains a <b>RespondToBestOffer</b> container that indicates whether or not the action
 * specified in the call request (accept, decline, or counter offer) was successful.
 * @subpackage Structs
 */
class RespondToBestOfferResponseType extends AbstractResponseType
{
    /**
     * The RespondToBestOffer
     * Meta informations extracted from the WSDL
     * - documentation: The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only
     * be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be
     * <code>Success</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
     */
    public $RespondToBestOffer;
    /**
     * Constructor method for RespondToBestOfferResponseType
     * @uses RespondToBestOfferResponseType::setRespondToBestOffer()
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer = null)
    {
        $this
            ->setRespondToBestOffer($respondToBestOffer);
    }
    /**
     * Get RespondToBestOffer value
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    public function getRespondToBestOffer()
    {
        return $this->RespondToBestOffer;
    }
    /**
     * Set RespondToBestOffer value
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType
     */
    public function setRespondToBestOffer(\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer = null)
    {
        $this->RespondToBestOffer = $respondToBestOffer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType
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
