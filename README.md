[![Latest Version on Packagist](https://img.shields.io/packagist/v/kriosmane/wallet-explorer.svg?style=flat-square)](https://packagist.org/packages/kriosmane/wallet-explorer)
[![Total Downloads](https://img.shields.io/packagist/dt/kriosmane/wallet-explorer.svg?style=flat-square)](https://packagist.org/packages/kriosmane/wallet-explorer)

# Laravel Crypto Wallet Explorer
Simple package for interacting with commons crypto wallet explorer



## Installation

[PHP](https://php.net) 7.1+ and [Composer](https://getcomposer.org) are required.

To get the latest version simply run the code below in your project.

```
composer require kriosmane/wallet-explorer
```
Once is installed, you need to register the service provider: open up `config/app.php` and add the following to the `providers` key.

```php
'providers' => [
    ...
    KriosMane\WalletExplorer\Providers\WalletExplorerServiceProvider::class,
    ...
]
```
Also, register the facade like so:

```php
'aliases' => [
    ...
    'WalletExplorer' => KriosMane\WalletExplorer\Facades\WalletExplorer::class,
    ...
]
```

## Configuration

You can publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="KriosMane\WalletExplorer\Providers\WalletExplorerServiceProvider"
```

A configuration-file named `walletexpolorer.php` with default settings will be placed in your `config` directory

## Usage
Add the following line to your controller
```php

use \WalletExplorer;

$balance = WalletExplorer::getBalance('BTC', '3JZq4atUahhuA9rLhXLMhhTo133J9rF97j');

```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?
As a programmer i need coffee to be productive, don't let my [cup](https://www.buymeacoffee.com/kriosmane) get emtpy

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!


Thanks!
Krios Mane

## License

Please see [License File](LICENSE.md) for more information.

