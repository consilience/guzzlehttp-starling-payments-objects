<?php

namespace Consilience\Starling\Payments\Response\Models;

/**
 *
 */

use Consilience\Starling\Payments\HydratableTrait;
use Consilience\Starling\Payments\ModelInterface;

class PaymentReturnDetails implements ModelInterface
{
    use HydratableTrait;

    /**
     * @var string UUID
     * UUID of the payment being returned if known.
     */
    protected $paymentBeingReturned;

    /**
     * @var string Length 0 to 8
     * Unique identifier of the reason for return.
     */
    protected $code;

    /**
     * @var string length 0 to 255
     * Human-readable description of the return reason.
     */
    protected $description;
}
