<?php
declare(strict_types=1);

namespace App\Domain\Carrier;

interface CarrierRepository
{
    /**
     * @return Carrier[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return User
     * @throws CarrierNotFoundException
     */
    public function findCarrierOfId(int $id): Carrier;
}
