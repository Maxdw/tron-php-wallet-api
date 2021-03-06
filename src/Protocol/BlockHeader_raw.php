<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.BlockHeader.raw</code>
 */
class BlockHeader_raw extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     */
    private $timestamp = 0;
    /**
     * Generated from protobuf field <code>bytes txTrieRoot = 2;</code>
     */
    private $txTrieRoot = '';
    /**
     * Generated from protobuf field <code>bytes parentHash = 3;</code>
     */
    private $parentHash = '';
    /**
     *bytes nonce = 5;
     *bytes difficulty = 6;
     *
     * Generated from protobuf field <code>int64 number = 7;</code>
     */
    private $number = 0;
    /**
     * Generated from protobuf field <code>int64 witness_id = 8;</code>
     */
    private $witness_id = 0;
    /**
     * Generated from protobuf field <code>bytes witness_address = 9;</code>
     */
    private $witness_address = '';

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes txTrieRoot = 2;</code>
     * @return string
     */
    public function getTxTrieRoot()
    {
        return $this->txTrieRoot;
    }

    /**
     * Generated from protobuf field <code>bytes txTrieRoot = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTxTrieRoot($var)
    {
        GPBUtil::checkString($var, False);
        $this->txTrieRoot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes parentHash = 3;</code>
     * @return string
     */
    public function getParentHash()
    {
        return $this->parentHash;
    }

    /**
     * Generated from protobuf field <code>bytes parentHash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParentHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->parentHash = $var;

        return $this;
    }

    /**
     *bytes nonce = 5;
     *bytes difficulty = 6;
     *
     * Generated from protobuf field <code>int64 number = 7;</code>
     * @return int|string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     *bytes nonce = 5;
     *bytes difficulty = 6;
     *
     * Generated from protobuf field <code>int64 number = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 witness_id = 8;</code>
     * @return int|string
     */
    public function getWitnessId()
    {
        return $this->witness_id;
    }

    /**
     * Generated from protobuf field <code>int64 witness_id = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWitnessId($var)
    {
        GPBUtil::checkInt64($var);
        $this->witness_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes witness_address = 9;</code>
     * @return string
     */
    public function getWitnessAddress()
    {
        return $this->witness_address;
    }

    /**
     * Generated from protobuf field <code>bytes witness_address = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setWitnessAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->witness_address = $var;

        return $this;
    }

}

