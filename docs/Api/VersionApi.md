# OpenAPI\Client\VersionApi

All URIs are relative to https://neice.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVersion()**](VersionApi.md#getVersion) | **POST** /aas/api/v1/version | 获取接口系统版本


## `getVersion()`

```php
getVersion(): \OpenAPI\Client\Model\OutResponseOfVersion
```

获取接口系统版本

获取接口系统版本

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\VersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionApi->getVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OutResponseOfVersion**](../Model/OutResponseOfVersion.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
