<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.DisconnectMessage</code>
 */
class DisconnectMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.ReasonCode reason = 1;</code>
     */
    private $reason = 0;

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protocol.ReasonCode reason = 1;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Generated from protobuf field <code>.protocol.ReasonCode reason = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Protocol\ReasonCode::class);
        $this->reason = $var;

        return $this;
    }

}

