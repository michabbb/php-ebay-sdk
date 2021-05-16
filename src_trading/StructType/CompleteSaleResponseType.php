<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteSaleResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the response of the <b>CompleteSale</b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <code>true</code> in the response, as this value will indicate
 * that the action(s) in the <b>CompleteSale</b> call were successful. If any other <b>Ack</b> value besides <code>true</code> is returned, the seller should look for any returned error messages or warnings.
 * @subpackage Structs
 */
class CompleteSaleResponseType extends AbstractResponseType
{
}
