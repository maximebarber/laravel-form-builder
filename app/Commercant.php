<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commercant extends Model
{
    // Table Name
    protected $table = 'commercants';
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
        'email', 'nom', 'prenom'
    ];

    /**
     * The activités that belong to the commerçant.
     */
    public function activites()
    {
        return $this->belongsToMany('App\Activite');
    }
}
