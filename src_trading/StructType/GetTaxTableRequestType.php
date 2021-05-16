<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaxTableRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request type of the <b>GetTaxTable</b> call, which retrieves information on the seller's Sales Tax Table. This information includes all of the site's tax jurisdictions, a boolean field to indicate if sales tax is applied to
 * shipping and handling charges, and the sales tax rate for each jurisdiction (if a sales tax rate is set for that jurisdiction). <br/><br/> Sales tax tables are only supported on the eBay US and Candada marketplaces.
 * @subpackage Structs
 */
class GetTaxTableRequestType extends AbstractRequestType
{
}
