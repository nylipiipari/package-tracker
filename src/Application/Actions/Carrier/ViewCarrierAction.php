<?php
declare(strict_types=1);

namespace App\Application\Actions\Carrier;

use Psr\Http\Message\ResponseInterface as Response;

class ViewCarrierAction extends CarrierAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $carrierId = (int) $this->resolveArg('id');
        $carrier = $this->carrierRepository->findUserOfId($carrierId);

        $this->logger->info("Carrier of id `${carrierId}` was viewed.");

        return $this->respondWithData($carrier);
    }
}
