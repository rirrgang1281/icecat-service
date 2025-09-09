# Icecat Service
This Icecat service can be used in all Symfony projects to retrieve product data via the Icecat API.
For this purpose, there is already an API endpoint in the service that retrieves the data from Icecat and returns it in a data object.

## Requirements:
- PHP >= 8.3.*
- Symfony >= 7.1.*

## Installation
```bash
composer require sdn/icecat-service
```

## Configuration:

### Environment variables:
```
# .env
...
###> Icecat Service ###
ICECAT_SERVICE_API_TOKEN=
ICECAT_BASE_URL=https://live.icecat.biz/api
ICECAT_USER=user
ICECAT_SERVICE_ENABLED=true
###< Icecat Service ###
...
```

### Service definition:
```yaml
# config/packages/icecat_service.yaml
...
services:
    sdn.icecat_service.client.ice_cat_service_client:
        class: Sdn\IcecatService\Client\IceCatServiceClient
        arguments:
            $client: '@guzzle.client'
            $logger: '@logger'
            $icecatBaseUrl: '%env(ICECAT_BASE_URL)%'
            $icecatUser: '%env(ICECAT_USER)%'
            $isIcecatServiceEnabled: '%env(bool:ICECAT_SERVICE_ENABLED)%'
...
```

## Usage
Use the API endpoint:<br>
Example call:
`host:port/api/icecat_product?language=de&brand=hp&productCode=RJ459AV`

Response:
```
// 20240910153604
// host:port/api/icecat_product?language=de&brand=hp&productCode=RJ459AV

{
  "GeneralInfo": {
    "IcecatId": 1198270,
    "ReleaseDate": "",
    "EndOfLifeDate": "",
    "Title": "HP Compaq 6710b Base Model Notebook PC",
    "TitleInfo": {
      "GeneratedIntTitle": "HP Compaq 6710b Base Model Notebook PC",
      "GeneratedLocalTitle": {
        "Value": "HP Compaq 6710b Base Model Notebook PC",
        "Language": "DE"
      },
      "BrandLocalTitle": {
        "Value": "",
        "Language": "DE"
      }
    },
    "Brand": "HP",
    "BrandID": "1",
    "BrandLogo": "https://images.icecat.biz/img/brand/thumb/1_cf8603f6de7b4c4d8ac4f5f0ef439a05.jpg",
    "BrandInfo": {
      "BrandName": "HP",
      "BrandLocalName": "",
      "BrandLogo": "https://images.icecat.biz/img/brand/thumb/1_cf8603f6de7b4c4d8ac4f5f0ef439a05.jpg"
    },
    "ProductName": "Compaq 6710b Base Model Notebook PC",
    "ProductNameInfo": {
      "ProductIntName": "Compaq 6710b Base Model Notebook PC",
      "ProductLocalName": {
        "Value": "",
        "Language": "DE"
      }
    },
    "BrandPartCode": "RJ459AV",
...
}
```


