<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;
use Moloquent;
use MongoModel;
use NotificationChannels\WebPush\HasPushSubscriptions;


/**
 * App\User
 *
 * @property-read mixed $id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @mixin \Eloquent
 */
class User extends Moloquent   implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    use Notifiable;
    use HasPushSubscriptions;


    protected $collection = "users";
    protected $dates = ['dob'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function locationId()
    {
        return $this->belongsTo("App\Location", "location");
    }

    public function friends()
    {
        return $this->hasMany('App\User', 'id');
    }

    public function requestReceived()
    {
        return $this->hasMany('App\FriendRequest', 'from_id');
    }

    public function requestSent()
    {
        return $this->hasMany('App\FriendRequest', 'to_id');
    }
}
