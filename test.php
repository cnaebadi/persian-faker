<?php

require 'vendor/autoload.php';

use Cnaebadi\PersianFaker\Faker\PersianFaker;
use Faker\Factory as FakerFactory;

// ساخت یک شیء از کلاس Faker
$faker = FakerFactory::create();

// ساخت یک شیء از کلاس PersianFaker
$persianFaker = new PersianFaker($faker);

// فراخوانی متد randomFullName
echo $persianFaker->randomFullName() . "\n";


