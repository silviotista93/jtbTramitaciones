<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    //FECHAS EN ESPAÑOL
    use \Seiler\EloquentDate\EloquentDate;
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at',
    ];

    protected $fillable = ['valor'];
}
