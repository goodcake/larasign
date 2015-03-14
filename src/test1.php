<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/start.php';
ob_start(); $app->run(); ob_clean();

Car::observe(new Observers\PrinterObserver);

print "Finding car with id #1\n";
$car1 = Car::find(1);

print "Updating vin on car #1\n";
$car1->vin = Str::random(32);

print "Saving car #1 to database\n";
$car1->save();