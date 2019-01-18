# Laravel Wallet Explorer
Simple package for interacting with commons crypto wallet explorer


## Installation

[PHP](https://php.net) 7.1+ and [Composer](https://getcomposer.org) are required.

To get the latest version simply run the code below in your project.

```
"composer require krios-mane/wallet-explorer"
```
Once is installed, You need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `KriosMane\WalletExplorer\app\Providers\WalletExplorerServiceProvider::class`

Also, register the Facade like so:

```php
'aliases' => [
    ...
    'WalletExplorer' => KriosMane\WalletExplorer\app\Facades\WalletExplorer::class,
    ...
]
```

## Configuration

You can publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="KriosMane\WalletExplorer\app\Providers\WalletExplorerServiceProvider"
```

A configuration-file named `walletexpolorer.php` with default settings will be placed in your `config` directory:


## Usage


## USING PACKAGE 
```
Add the following line to your controller

use \WalletExplorer;

...
$balance = WalletExplorer::getBalance('BTC', '3JZq4atUahhuA9rLhXLMhhTo133J9rF97j');
...

```

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!


Thanks!
Krios Mane

## License

Please see [License File](LICENSE.md) for more information.

