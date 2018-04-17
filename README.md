# PHP TRON Wallet API

This is an implementation of the [TRON protocol](https://github.com/tronprotocol/protocol) in PHP using [GRPC](https://grpc.io).

## Documentation

If new to protocol buffers or GRPC start with the following documentation:

1. [Google Protocol Buffers documentation](https://developers.google.com/protocol-buffers/)
2. [GRPC PHP documentation](https://grpc.io/docs/tutorials/basic/php.html)

### Examples

##### List witnesses

```
$wallet = new \Protocol\WalletClient('47.91.216.69:50051', [
   'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$emptyMessage = new \Protocol\EmptyMessage();

/* @var \Protocol\WitnessList $witnesses */
list($witnesses, $options) = $wallet->ListWitnesses($emptyMessage)->wait();

$base58 = new Tuupola\Base58;

/* @var \Protocol\Witness $witness */
foreach ($witnesses->getWitnesses() as $witness) {
    var_dump($base58->encode($witness->getAddress()));
}
```

##### Scan the blockchain

```
$wallet = new \Protocol\WalletClient('47.91.216.69:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$n = 15523;
do {
    $numberMessage = new \Protocol\NumberMessage();
    $numberMessage->setNum($n--);
    list($block, $meta) = $wallet->GetBlockByNum($numberMessage)->wait();
    /* @var \Protocol\Block $block */
    $transactions = $block->getTransactions();
} while(!$transactions->count());

var_dump(sprintf('block #%d seems to have %d transactions!', $n, $transactions->count()));
```

## Development
To update PHP files according to the TRON protocol install protoc and run

`sudo bash ./genphp.sh`

### Issues

- Encoding and crypto utilities
- Unit tests
- Proper namespacing of protocol and metadata classes e.g. `Tron\Protocol\Account` instead of `Protocol\Account`
- Add proper `@return` tags and type hinting (this is a protoc issue? docblocks could be improved to remove the need for inline typehinting)