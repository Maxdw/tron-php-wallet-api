<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * update account name if the account has no name.
 *
 * Generated from protobuf message <code>protocol.AccountUpdateContract</code>
 */
class AccountUpdateContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes account_name = 1;</code>
     */
    private $account_name = '';
    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     */
    private $owner_address = '';

    public function __construct() {
        \GPBMetadata\Core\Contract::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes account_name = 1;</code>
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>bytes account_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, False);
        $this->account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

}
