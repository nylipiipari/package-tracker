<?php
declare(strict_types=1);

namespace App\Domain\Carrier;

use App\Domain\DomainException\DomainRecordNotFoundException;

class CarrierNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The carrier you requested does not exist.';
}
