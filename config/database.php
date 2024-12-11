<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule=new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'magazin_sport',
    'username'=> 'root',
    'password'=> '',
    'chrest' => 'utf8',
    'collation' =>'utf8_unicode_ci',
    'prefix'=> '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();