<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mens';

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
    protected $fillable = ['name', 'parent_name', 'urlMain', 'urlMy'];

    
}
