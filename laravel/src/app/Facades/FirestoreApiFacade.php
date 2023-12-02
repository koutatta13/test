<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class FirestoreApiFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'FirestoreApi';
  }
}