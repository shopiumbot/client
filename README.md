Telegram client
===========

Installation
------------
After installing Composer, run the following command to install the [Composer Asset Plugin](https://github.com/fxpio/composer-asset-plugin)

#### First run
```
php composer global require "fxp/composer-asset-plugin:^1.2.0"
```

#### Either run for dev
```
php composer create-project shopium/client . "dev-master"
```

#### Either run for production
```
php composer create-project --prefer-dist --no-dev --stability=dev shopium/client . "dev-master"
```