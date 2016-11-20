<?php

namespace sistemareportes;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='ciudad';

    protected $primaryKey='idciudad';

    public $timestamps=false;


    protected $fillable =[
        
        'idciudad',
        'ciudad'
        

    ];

    protected $guarded =[

    ];
}
