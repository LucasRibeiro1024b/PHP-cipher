<?php

$input = sodium_hex2bin($argv[1]);
$nonce = substr($input, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$cipher = substr($input, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$key = file_get_contents('key');

echo sodium_crypto_secretbox_open($cipher, $nonce, $key);

echo PHP_EOL;