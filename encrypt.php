<?php
//Read arguments via terminal
$message = $argv[1];

if(!file_exists('key')){
    file_put_contents('key', sodium_crypto_secretbox_keygen());
}

$key = file_get_contents('key');

$iv = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);


# $iv = Initialization Vector
# We need to store the Initialization Vector in order to decrypt our message.
echo sodium_bin2hex($iv . sodium_crypto_secretbox($message, $iv, $key));

echo PHP_EOL;