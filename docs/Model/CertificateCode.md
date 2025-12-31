# # CertificateCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 证书兑换码 | [optional]
**domain** | **string** | 证书兑换系统的域名，请先在网站配置域名及其对应的API地址 | [optional]
**exchange** | [**\DateTime**](\DateTime.md) | 兑换码完成兑换的时间 | [optional]
**model** | **string** | 设备型号:iPhone,iPad,iPod | [optional]
**quality** | **int** | 默认为0:不质保,最大不能超过365天，该值仅作为参考，不作为依据，具体以上游系统为准 | [optional]
**query** | **string** | 证书查询码 | [optional]
**reserve** | **bool** | 表示该兑换码是否是兑换的预定证书，该值仅作为参考，不作为依据，具体以上游系统为准 | [optional]
**token** | **string** | 请求鉴权令牌 |
**udid** | **string** | 绑定设备的UDID，兑换时绑定 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
