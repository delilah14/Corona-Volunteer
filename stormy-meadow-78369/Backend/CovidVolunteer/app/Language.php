<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
    protected $keyType = 'uuid';
    protected $incrementing = false;
}
