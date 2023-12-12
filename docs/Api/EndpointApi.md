# OpenAPI\Client\EndpointApi

All URIs are relative to https://neice.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEndpoint()**](EndpointApi.md#getEndpoint) | **POST** /endpoint/getEndpoint | 获取签名节点入口


## `getEndpoint()`

```php
getEndpoint($param): \OpenAPI\Client\Model\Endpoint[]
```

获取签名节点入口

获取签名节点入口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$param = array('key' => 'param_example'); // map[string,string] | param

try {
    $result = $apiInstance->getEndpoint($param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->getEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param** | [**map[string,string]**](../Model/string.md)| param |

### Return type

[**\OpenAPI\Client\Model\Endpoint[]**](../Model/Endpoint.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
