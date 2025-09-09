<?php

declare(strict_types=1);

namespace Sdn\IcecatService\Controller;

use JMS\Serializer\SerializerInterface;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OAT;
use Psr\Log\LoggerInterface;
use Sdn\IcecatService\Dto\Icecat\Data\DataDto;
use Sdn\IcecatService\Service\ProductService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends BaseApiController
{
    public function __construct(
        protected string $apiToken,
        protected LoggerInterface $logger,
        protected RequestStack $requestStack,
        private readonly ProductService $productService,
        private readonly SerializerInterface $serializer
    ) {
        parent::__construct(
            $this->apiToken,
            $this->logger,
            $this->requestStack
        );
    }

    #[Route('/api/icecat_product', name: 'sdn_icecat_product', methods: ['GET']) ]
    #[OAT\Get(
        path: '/api/icecat_product',
        summary: 'Fetches all product data as json from Icecat with the parameters language, brand and productCode',
        tags: ['Product'],
        parameters: [
            new OAT\QueryParameter(
                name: 'language',
                description: 'Language code',
                required: true,
                schema: new OAT\Schema(type: 'string')
            ),
            new OAT\QueryParameter(
                name: 'brand',
                description: 'Brand name',
                required: true,
                schema: new OAT\Schema(type: 'string')
            ),
            new OAT\QueryParameter(
                name: 'productCode',
                description: 'Product code',
                required: true,
                schema: new OAT\Schema(type: 'string')
            ),
        ],
    )]
    #[OAT\Response(response: 200, description: 'Fetches all product data as json from Icecat', content: new OAT\JsonContent(properties: [
        new OAT\Property(property: 'success', type: 'boolean', example: true),
        new OAT\Property(property: 'product', type: 'string', items: new OAT\Items(
            ref: new Model(type: JsonResponse::class, groups: ['all_product_data'])
        )
        ),
    ], type: 'object')
    )]
    #[OAT\Response(response: 400, description: 'Fehlender Parameter', content: new OAT\JsonContent(properties: [
        new OAT\Property(property: 'success', type: 'boolean', example: false),
        new OAT\Property(property: 'message', type: 'string', example: 'Missing parameters'),
    ], type: 'object')
    )]
    #[OAT\Response(response: 404, description: 'Produkt nicht gefunden', content: new OAT\JsonContent(properties: [
        new OAT\Property(property: 'success', type: 'boolean', example: false),
        new OAT\Property(property: 'message', type: 'string', example: 'Product not found'),
    ], type: 'object')
    )]
    public function getProductDataJson(Request $request): JsonResponse
    {
        $missingParameter = null;
        $language = (string) $request->query->get('language');
        $brand = (string) $request->query->get('brand');
        $productCode = (string) $request->query->get('productCode');

        // Validate parameters
        if (!$language) {
            $missingParameter = 'language';
        }
        if (!$brand) {
            $missingParameter = 'brand';
        }
        if (!$productCode) {
            $missingParameter = 'productCode';
        }

        if ($missingParameter !== null) {
            $error = sprintf(
                'The parameter %s is missing!',
                $missingParameter
            );

            return new JsonResponse(
                [
                    'error' => $error,
                ],
                400
            );
        }

        /** @var DataDto|null $product */
        $product = $this->productService
            ->getProductContent(
                $language,
                $brand,
                $productCode
            );

        return new JsonResponse(
            $this->serializer->serialize(
                $product, 'json'
            ),
            Response::HTTP_OK,
            [],
            true
        );
    }
}
