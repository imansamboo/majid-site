<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contents';

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
    protected $fillable = [
        'men_id' ,
        'content_src' ,
        'content_header' ,
        'content_partstock' ,
        'content_li' ,
        'content_spec' ,
    ];

    
}
