<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['menu_id',  'where', 'file'];

    
}
