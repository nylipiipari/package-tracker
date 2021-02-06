<?php
declare(strict_types=1);

namespace App\Application\Actions\Carrier;

use Psr\Http\Message\ResponseInterface as Response;

class ListCarriersAction extends CarrierAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $carriers = $this->carrierRepository->findAll();

        $this->logger->info("Carriers list was viewed.");
        # return [];
        return $this->respondWithData($carriers);
    }
}
