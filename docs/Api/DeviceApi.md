# OpenAPI\Client\DeviceApi

All URIs are relative to https://neice.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExchangeCode()**](DeviceApi.md#createExchangeCode) | **POST** /aas/api/v1/exchange/code | 创建iOS设备证书兑换码
[**getCertificate()**](DeviceApi.md#getCertificate) | **POST** /aas/api/v1/certificate | 获取iOS设备证书
[**getCertificates()**](DeviceApi.md#getCertificates) | **POST** /aas/api/v1/certificates | 获取iOS设备证书列表
[**getStatus()**](DeviceApi.md#getStatus) | **POST** /aas/api/v1/status | 获取证书支持类型
[**register()**](DeviceApi.md#register) | **POST** /aas/api/v1/register | iOS设备注册
[**registers()**](DeviceApi.md#registers) | **POST** /aas/api/v1/registers | iOS设备批量提交注册


## `createExchangeCode()`

```php
createExchangeCode($request): \OpenAPI\Client\Model\ResponseOfCertificateCode
```

创建iOS设备证书兑换码

创建iOS设备证书兑换码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \OpenAPI\Client\Model\CertificateCode(); // \OpenAPI\Client\Model\CertificateCode | request

try {
    $result = $apiInstance->createExchangeCode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->createExchangeCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\OpenAPI\Client\Model\CertificateCode**](../Model/CertificateCode.md)| request |

### Return type

[**\OpenAPI\Client\Model\ResponseOfCertificateCode**](../Model/ResponseOfCertificateCode.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificate()`

```php
getCertificate($udid): \OpenAPI\Client\Model\ResponseOfPersonalCertificate
```

获取iOS设备证书

获取iOS设备证书

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$udid = 'udid_example'; // string | udid

try {
    $result = $apiInstance->getCertificate($udid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **udid** | **string**| udid |

### Return type

[**\OpenAPI\Client\Model\ResponseOfPersonalCertificate**](../Model/ResponseOfPersonalCertificate.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificates()`

```php
getCertificates($limit, $page, $asc): \OpenAPI\Client\Model\ResponseOfListOfPersonalCertificate
```

获取iOS设备证书列表

获取iOS设备证书列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | limit
$page = 56; // int | page
$asc = True; // bool | asc

try {
    $result = $apiInstance->getCertificates($limit, $page, $asc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| limit |
 **page** | **int**| page |
 **asc** | **bool**| asc | [optional]

### Return type

[**\OpenAPI\Client\Model\ResponseOfListOfPersonalCertificate**](../Model/ResponseOfListOfPersonalCertificate.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatus()`

```php
getStatus(): \OpenAPI\Client\Model\ResponseOfStatus
```

获取证书支持类型

获取证书支持类型

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ResponseOfStatus**](../Model/ResponseOfStatus.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($request): \OpenAPI\Client\Model\ResponseOfPersonalCertificate
```

iOS设备注册

iOS设备注册

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \OpenAPI\Client\Model\DeviceRequest(); // \OpenAPI\Client\Model\DeviceRequest | request

try {
    $result = $apiInstance->register($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\OpenAPI\Client\Model\DeviceRequest**](../Model/DeviceRequest.md)| request |

### Return type

[**\OpenAPI\Client\Model\ResponseOfPersonalCertificate**](../Model/ResponseOfPersonalCertificate.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registers()`

```php
registers($device_requests): \OpenAPI\Client\Model\ResponseOfstring
```

iOS设备批量提交注册

请确保批量提交的数据的准性，提交后不可撤销，批量提交注册将不直接返回证书，请通过回调接口接收证书，如果没提供回调接口，可使用查询接口查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_requests = array(new \OpenAPI\Client\Model\DeviceRequest()); // \OpenAPI\Client\Model\DeviceRequest[] | deviceRequests

try {
    $result = $apiInstance->registers($device_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->registers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_requests** | [**\OpenAPI\Client\Model\DeviceRequest[]**](../Model/DeviceRequest.md)| deviceRequests |

### Return type

[**\OpenAPI\Client\Model\ResponseOfstring**](../Model/ResponseOfstring.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
