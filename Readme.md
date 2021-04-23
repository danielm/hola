# Dummy Composer Package
This only exists to test out composer install scripts.

## Install

    composer require danielm/hola

## Test

    <?php
    require 'vendor/autoload.php';
	
	use Danielm\Hola;

    $hola = new Hola("Jim Raynor");
    $hola->greet();