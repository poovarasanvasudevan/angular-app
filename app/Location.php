<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Moloquent;


/**
 * App\Location
 *
 * @property-read mixed $id
 * @mixin \Eloquent
 */
class Location extends Moloquent
{

    protected $collection = "locations";

    public function users()
    {
        return $this->hasMany("App\User");
    }
}
