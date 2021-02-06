<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Carrier;

use App\Domain\Carrier\Carrier;
use App\Domain\Carrier\CarrierNotFoundException;
use App\Domain\Carrier\CarrierRepository;

class InMemoryCarrierRepository implements CarrierRepository
{
    /**
     * @var Carrier[]
     */
    private $carriers;

    /**
     * InMemoryCarrierRepository constructor.
     *
     * @param array|null $carriers
     */
    public function __construct(array $carriers = null)
    {
        $this->carriers = $carriers ?? [
            1 => new Carrier(1, 'USPS'),
            2 => new Carrier(2, 'FedEx'),
            3 => new Carrier(3, 'UPS'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->carriers);
    }

    /**
     * {@inheritdoc}
     */
    public function findCarrierOfId(int $id): Carrier
    {
        if (!isset($this->carriers[$id])) {
            throw new CarrierNotFoundException();
        }

        return $this->carriers[$id];
    }
}
