<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.NumberMessage</code>
 */
class NumberMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     */
    private $num = 0;

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     * @return int|string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->num = $var;

        return $this;
    }

}
