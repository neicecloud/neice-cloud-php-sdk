# # DeviceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback** | **string** | 预定证书激活时可通过回调地址将证书推送到业务系统中，为空将不会回调 | [optional]
**name** | **string** | 当调用的预定证书激活时，激活通知短信将发送该名称，方便区分，允许为空值 | [optional]
**phone** | **string** | 预定手机:设备激活后发送可以安装APP的通知短信，当注册预定证书时，电话号码不能为空值 | [optional]
**quality** | **int** | 增加质保天数后台可能会增加计费 | [optional]
**refer** | **string** | 下游系统可以标记该设备的注册用户，上游系统将透传回去，非必要参数 | [optional]
**reserve** | **bool** | 证书预定参数开关如果卡设备，将在设备处于激活状态时通知用户安装 | [optional]
**udid** | **string** | iOS或iPad设备UDID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
