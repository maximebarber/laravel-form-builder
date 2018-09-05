<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    /**
     * The commerçants that belong to the activité.
     */
    public function commercants()
    {
        return $this->belongsToMany('App\Commercant');
    }
}
