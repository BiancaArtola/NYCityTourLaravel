<?php
namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
class Recorridos extends Eloquent {

	use HybridRelations;

    protected $connection = 'mongodb';
    protected $collection = 'recorridos';
}