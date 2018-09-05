<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    // Table Name
    protected $table = 'activite_commercant';
    // Primary Key (not necessary)
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'nom'
    ];
    /**
     * The commerçants that belong to the activité.
     */
    public function commercants()
    {
        return $this->belongsToMany('App\Commercant');
    }
}
