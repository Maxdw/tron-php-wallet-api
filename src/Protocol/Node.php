<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gossip node
 *
 * Generated from protobuf message <code>protocol.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.Address address = 1;</code>
     */
    private $address = null;

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protocol.Address address = 1;</code>
     * @return \Protocol\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>.protocol.Address address = 1;</code>
     * @param \Protocol\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Protocol\Address::class);
        $this->address = $var;

        return $this;
    }

}

