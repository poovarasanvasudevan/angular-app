<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

/**
 * App\Location
 *
 * @property-read mixed $id
 * @mixin \Eloquent
 */
class Location extends Model
{

    protected $collection = "locations";

    public function users()
    {
        return $this->hasMany("App\User");
    }
}
