<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToBestOfferResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>RespondToBestOffer</b> call. Along with the standard output fields for Trading API calls, this type contains a <b>RespondToBestOffer</b> container that indicates whether or not the action
 * specified in the call request (accept, decline, or counter offer) was successful.
 * @subpackage Structs
 */
class RespondToBestOfferResponseType extends AbstractResponseType
{
    /**
     * The RespondToBestOffer
     * Meta information extracted from the WSDL
     * - documentation: The <b>BestOffer.CallStatus</b> value returned in this container will indicate whether or not the action specified in the call request (accept, decline, or counter offer) was successful. The accept and counter offer actions can only
     * be applied toward a single Best Offer. However, multiple Best Offers on a listing can be declined with one call. All Best Offers must be successfully declined with the <b>RespondToBestOffer</b> call for the <b> BestOffer.CallStatus</b> value to be
     * <code>Success</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $RespondToBestOffer = null;
    /**
     * Constructor method for RespondToBestOfferResponseType
     * @uses RespondToBestOfferResponseType::setRespondToBestOffer()
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer = null)
    {
        $this
            ->setRespondToBestOffer($respondToBestOffer);
    }
    /**
     * Get RespondToBestOffer value
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    public function getRespondToBestOffer(): ?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
    {
        return $this->RespondToBestOffer;
    }
    /**
     * Set RespondToBestOffer value
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferResponseType
     */
    public function setRespondToBestOffer(?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $respondToBestOffer = null): self
    {
        $this->RespondToBestOffer = $respondToBestOffer;
        
        return $this;
    }
}
