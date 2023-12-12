<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = OpenAPI\Client\Configuration::getDefaultConfiguration();
$config->setHost("https://neice.cloud"); // host填写渠道的地址

$apiInstance = new OpenAPI\Client\Api\OauthApi(
    new GuzzleHttp\Client(),
    $config
);
$client_id = ''; // string | 渠道注册账号生成的AccessKeyId
$client_secret = ''; // string | 渠道注册账号生成的AccessKeySecret

try {
    $result = $apiInstance->getToken($client_id, $client_secret);
    print_r($result);
    $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken($result);
    $device = new OpenAPI\Client\Api\DeviceApi(
        new GuzzleHttp\Client(),
        $config
    );
    $udid = ''; // string | 设备udid
    try {
        $result = $device->getCertificate($udid);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling DeviceApi->getCertificate: ', $e->getMessage(), PHP_EOL;
    }

} catch (Exception $e) {
    echo 'Exception when calling OauthApi->getToken: ', $e->getMessage(), PHP_EOL;
}