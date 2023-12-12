<?php
/**
 * PersonalCertificate
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 内测云分发开发者API接口
 *
 * 内测云开发者服务平台应用程序接口文档
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: henryxm@163.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PersonalCertificate Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PersonalCertificate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PersonalCertificate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certificate' => 'string',
        'certificate_id' => 'string',
        'create_time' => 'string',
        'description' => 'string',
        'device_id' => 'string',
        'mobileprovision' => 'string',
        'name' => 'string',
        'password' => 'string',
        'phone' => 'string',
        'price' => 'float',
        'profile_id' => 'string',
        'quality' => 'int',
        'quality_time' => 'string',
        'refer' => 'string',
        'repair' => 'bool',
        'reserve' => 'bool',
        'udid' => 'string',
        'uuid' => 'string',
        'valid' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certificate' => null,
        'certificate_id' => null,
        'create_time' => null,
        'description' => null,
        'device_id' => null,
        'mobileprovision' => null,
        'name' => null,
        'password' => null,
        'phone' => null,
        'price' => null,
        'profile_id' => null,
        'quality' => 'int32',
        'quality_time' => null,
        'refer' => null,
        'repair' => null,
        'reserve' => null,
        'udid' => null,
        'uuid' => null,
        'valid' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'certificate' => 'certificate',
        'certificate_id' => 'certificateId',
        'create_time' => 'createTime',
        'description' => 'description',
        'device_id' => 'deviceId',
        'mobileprovision' => 'mobileprovision',
        'name' => 'name',
        'password' => 'password',
        'phone' => 'phone',
        'price' => 'price',
        'profile_id' => 'profileId',
        'quality' => 'quality',
        'quality_time' => 'qualityTime',
        'refer' => 'refer',
        'repair' => 'repair',
        'reserve' => 'reserve',
        'udid' => 'udid',
        'uuid' => 'uuid',
        'valid' => 'valid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate' => 'setCertificate',
        'certificate_id' => 'setCertificateId',
        'create_time' => 'setCreateTime',
        'description' => 'setDescription',
        'device_id' => 'setDeviceId',
        'mobileprovision' => 'setMobileprovision',
        'name' => 'setName',
        'password' => 'setPassword',
        'phone' => 'setPhone',
        'price' => 'setPrice',
        'profile_id' => 'setProfileId',
        'quality' => 'setQuality',
        'quality_time' => 'setQualityTime',
        'refer' => 'setRefer',
        'repair' => 'setRepair',
        'reserve' => 'setReserve',
        'udid' => 'setUdid',
        'uuid' => 'setUuid',
        'valid' => 'setValid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate' => 'getCertificate',
        'certificate_id' => 'getCertificateId',
        'create_time' => 'getCreateTime',
        'description' => 'getDescription',
        'device_id' => 'getDeviceId',
        'mobileprovision' => 'getMobileprovision',
        'name' => 'getName',
        'password' => 'getPassword',
        'phone' => 'getPhone',
        'price' => 'getPrice',
        'profile_id' => 'getProfileId',
        'quality' => 'getQuality',
        'quality_time' => 'getQualityTime',
        'refer' => 'getRefer',
        'repair' => 'getRepair',
        'reserve' => 'getReserve',
        'udid' => 'getUdid',
        'uuid' => 'getUuid',
        'valid' => 'getValid'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['certificate'] = $data['certificate'] ?? null;
        $this->container['certificate_id'] = $data['certificate_id'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['device_id'] = $data['device_id'] ?? null;
        $this->container['mobileprovision'] = $data['mobileprovision'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
        $this->container['quality'] = $data['quality'] ?? null;
        $this->container['quality_time'] = $data['quality_time'] ?? null;
        $this->container['refer'] = $data['refer'] ?? null;
        $this->container['repair'] = $data['repair'] ?? null;
        $this->container['reserve'] = $data['reserve'] ?? null;
        $this->container['udid'] = $data['udid'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['valid'] = $data['valid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate 设备证书P12
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets certificate_id
     *
     * @return string|null
     */
    public function getCertificateId()
    {
        return $this->container['certificate_id'];
    }

    /**
     * Sets certificate_id
     *
     * @param string|null $certificate_id 证书ID
     *
     * @return self
     */
    public function setCertificateId($certificate_id)
    {
        $this->container['certificate_id'] = $certificate_id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time 证书创建时间
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 证书描述信息
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string|null $device_id 设备ID
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets mobileprovision
     *
     * @return string|null
     */
    public function getMobileprovision()
    {
        return $this->container['mobileprovision'];
    }

    /**
     * Sets mobileprovision
     *
     * @param string|null $mobileprovision 设备的描述文件Mobileprovision
     *
     * @return self
     */
    public function setMobileprovision($mobileprovision)
    {
        $this->container['mobileprovision'] = $mobileprovision;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 证书名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password 设备证书密码
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 预定手机
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price 服务价格
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string|null $profile_id 描述文件ID
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets quality
     *
     * @return int|null
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     * @param int|null $quality 证书质保天数
     *
     * @return self
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }

    /**
     * Gets quality_time
     *
     * @return string|null
     */
    public function getQualityTime()
    {
        return $this->container['quality_time'];
    }

    /**
     * Sets quality_time
     *
     * @param string|null $quality_time 证书质保到期时间
     *
     * @return self
     */
    public function setQualityTime($quality_time)
    {
        $this->container['quality_time'] = $quality_time;

        return $this;
    }

    /**
     * Gets refer
     *
     * @return string|null
     */
    public function getRefer()
    {
        return $this->container['refer'];
    }

    /**
     * Sets refer
     *
     * @param string|null $refer 该设备的用户,后台自动透传该参数
     *
     * @return self
     */
    public function setRefer($refer)
    {
        $this->container['refer'] = $refer;

        return $this;
    }

    /**
     * Gets repair
     *
     * @return bool|null
     */
    public function getRepair()
    {
        return $this->container['repair'];
    }

    /**
     * Sets repair
     *
     * @param bool|null $repair 补偿证书:预定失败或质保期内掉签，后台重订的设备标记，一般免服务费
     *
     * @return self
     */
    public function setRepair($repair)
    {
        $this->container['repair'] = $repair;

        return $this;
    }

    /**
     * Gets reserve
     *
     * @return bool|null
     */
    public function getReserve()
    {
        return $this->container['reserve'];
    }

    /**
     * Sets reserve
     *
     * @param bool|null $reserve 预定证书
     *
     * @return self
     */
    public function setReserve($reserve)
    {
        $this->container['reserve'] = $reserve;

        return $this;
    }

    /**
     * Gets udid
     *
     * @return string|null
     */
    public function getUdid()
    {
        return $this->container['udid'];
    }

    /**
     * Sets udid
     *
     * @param string|null $udid 设备的UDID
     *
     * @return self
     */
    public function setUdid($udid)
    {
        $this->container['udid'] = $udid;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 单个设备证书UUID
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return bool|null
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool|null $valid 证书是否有效
     *
     * @return self
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


