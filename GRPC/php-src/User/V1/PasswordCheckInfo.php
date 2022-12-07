<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/user/v1/user.proto

namespace User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>user.v1.PasswordCheckInfo</code>
 */
class PasswordCheckInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Mobile = 1;</code>
     */
    protected $Mobile = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Mobile
     *     @type string $password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api\User\V1\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Generated from protobuf field <code>string Mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->Mobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

