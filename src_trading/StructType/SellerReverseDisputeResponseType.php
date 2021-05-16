<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response of a <b>SellerReverseDispute</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b>
 * container (if there were any errors and/or warnings).
 * @subpackage Structs
 */
class SellerReverseDisputeResponseType extends AbstractResponseType
{
}
