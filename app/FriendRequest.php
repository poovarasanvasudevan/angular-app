<?php

namespace App;


use Moloquent;


class FriendRequest extends Moloquent
{
    //
    protected $collection = 'friend_request';

    function fromUser()
    {
        $this->belongsTo('App\User', 'from_id');
    }

    function toUser()
    {
        $this->belongsTo('App\User', 'to_id');
    }
}
