<?php

namespace App;

use Acacha\Stateful\Contracts\Stateful;
use Acacha\Stateful\Traits\StatefulTrait;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model implements Stateful
{
    use StatefulTrait;

    /*
     * Get the user record associated with the user
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /*
     * Get the person record associated with the person
     */
    public function person()
    {
        return $this->hasOne('App\Person');
    }

    /**
     * Enrollment States
     *
     * @var array
     */
    protected $states = [
        'step1' => ['inital' => true],
        'step2' => ['final' => true]
    ];
}
