# PHP Logger

Logging is one of the most ubiquitous tasks encountered in PHP. We use logs to track error messages, record important events, and debug problems with our code this class exectly do this.

## Requirement

- PHP
- Composer

## install
run this command
``` composer require lablnet/logger ```

## usage

```php
<?php 
	use Lablnet\Logger;
	require '../vendor/autoload.php';
	$logger = new Logger;
	$logger->debug("Hi im log msg and im {field}" , ['field' => 'debug']);
	var_dump($logger->get());
```    

## Levels
- emergency => ```$logger->emergency(msg,[context])```
- alert => ```$logger->alert(msg,[context])```
- critical => ```$logger->emergency(msg,[critical])```
- error => ```$logger->error(msg,[context])```
- warning => ```$logger->warning(msg,[context])```
- notice => ```$logger->notice(msg,[context])```
- info => ```$logger->info(msg,[context])```
- debug => ```$logger->debug(msg,[context])```

#Note: .logs file will save in root of project directory 
