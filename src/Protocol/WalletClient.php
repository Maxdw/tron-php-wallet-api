<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protocol;

/**
 */
class WalletClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Protocol\Account $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAccount(\Protocol\Account $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetAccount',
        $argument,
        ['\Protocol\Account', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\TransferContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateTransaction(\Protocol\TransferContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/CreateTransaction',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\Transaction $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BroadcastTransaction(\Protocol\Transaction $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/BroadcastTransaction',
        $argument,
        ['\Protocol\Return', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAccounts(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/ListAccounts',
        $argument,
        ['\Protocol\AccountList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\AccountUpdateContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateAccount(\Protocol\AccountUpdateContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/UpdateAccount',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\AccountCreateContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAccount(\Protocol\AccountCreateContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/CreateAccount',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\VoteWitnessContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VoteWitnessAccount(\Protocol\VoteWitnessContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/VoteWitnessAccount',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\AssetIssueContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateAssetIssue(\Protocol\AssetIssueContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/CreateAssetIssue',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListWitnesses(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/ListWitnesses',
        $argument,
        ['\Protocol\WitnessList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\WitnessUpdateContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateWitness(\Protocol\WitnessUpdateContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/UpdateWitness',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\WitnessCreateContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateWitness(\Protocol\WitnessCreateContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/CreateWitness',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\TransferAssetContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TransferAsset(\Protocol\TransferAssetContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/TransferAsset',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\ParticipateAssetIssueContract $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ParticipateAssetIssue(\Protocol\ParticipateAssetIssueContract $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/ParticipateAssetIssue',
        $argument,
        ['\Protocol\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListNodes(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/ListNodes',
        $argument,
        ['\Protocol\NodeList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAssetIssueList(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetAssetIssueList',
        $argument,
        ['\Protocol\AssetIssueList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\Account $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAssetIssueByAccount(\Protocol\Account $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetAssetIssueByAccount',
        $argument,
        ['\Protocol\AssetIssueList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\BytesMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAssetIssueByName(\Protocol\BytesMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetAssetIssueByName',
        $argument,
        ['\Protocol\AssetIssueContract', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNowBlock(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetNowBlock',
        $argument,
        ['\Protocol\Block', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\NumberMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBlockByNum(\Protocol\NumberMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetBlockByNum',
        $argument,
        ['\Protocol\Block', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TotalTransaction(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/TotalTransaction',
        $argument,
        ['\Protocol\NumberMessage', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Protocol\EmptyMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDynamicProperties(\Protocol\EmptyMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protocol.Wallet/GetDynamicProperties',
        $argument,
        ['\Protocol\DynamicProperties', 'decode'],
        $metadata, $options);
    }

}
