<?php 
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AggregatorFacades extends Facade {

  protected static function getFacadeAccessor() 
  {
    
    return 'Aggregator';
  }

}