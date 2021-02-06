<?php
declare(strict_types=1);

namespace App\Application\Actions\Carrier;

use App\Application\Actions\Action;
use App\Domain\Carrier\CarrierRepository;
use Psr\Log\LoggerInterface;

abstract class CarrierAction extends Action
{
    /**
     * @var CarrierRepository
     */
    protected $carrierRepository;

    /**
     * @param LoggerInterface $logger
     * @param CarrierRepository  $carrierRepository
     */
    public function __construct(LoggerInterface $logger, CarrierRepository $carrierRepository)
    {
        parent::__construct($logger);
        $this->carrierRepository = $carrierRepository;
    }
}
