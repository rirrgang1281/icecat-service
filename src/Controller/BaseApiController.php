<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class BaseApiController extends AbstractController
{
    public function __construct(
        protected string $apiToken,
        protected LoggerInterface $logger,
        protected RequestStack $requestStack
    ) {
        $token = $requestStack->getCurrentRequest()?->headers->get('X-AUTH-TOKEN');
        $this->checkApiToken($token);
    }

    protected function checkApiToken(?string $token): void
    {
        if (!$token) {
            $this->logger->info('API token not set');
            $this->unauthorizedResponse('API token not set');
        }

        if ($this->apiToken !== $token) {
            $this->logger->info('Invalid API token');
            $this->unauthorizedResponse('Invalid API token');
        }
    }

    private function unauthorizedResponse(string $message): void
    {
        $response = new JsonResponse(
            [
                'error' => $message,
            ],
            Response::HTTP_UNAUTHORIZED
        );
        $response->send();
        exit;
    }
}
