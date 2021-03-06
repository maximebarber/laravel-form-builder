<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercant extends Model
{
    protected $fillable =
    [
        'email'
    ];
    /**
     * The activités that belong to the commerçant.
     */
    public function activites()
    {
        return $this->belongsToMany('App\Activite');
    }
}
