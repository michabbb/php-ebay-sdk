<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToFeedbackResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response for the <b>RespondToFeedback</b>. This response will indicate the success or failure of the attempt to reply to Feedback that has been left for a user, or to post a follow-up comment to a Feedback comment a user has
 * left for someone else. This response has no call-specific output fields.
 * @subpackage Structs
 */
class RespondToFeedbackResponseType extends AbstractResponseType
{
    /**
     * Constructor method for RespondToFeedbackResponseType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RespondToFeedbackResponseType
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
