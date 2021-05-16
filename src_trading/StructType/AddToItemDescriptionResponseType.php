<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToItemDescriptionResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the response of the <b>AddToItemDescription</b> call. There are no call-specific fields in this response. The seller should look for an <b>Ack</b> value of <code>true</code> in the response, that will indicate that
 * the additional text in the item description was added successfully.
 * @subpackage Structs
 */
class AddToItemDescriptionResponseType extends AbstractResponseType
{
}
