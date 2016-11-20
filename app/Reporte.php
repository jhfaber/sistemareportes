<?php

namespace sistemareportes;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table='reporte';

    protected $primaryKey='idreporte';

    public $timestamps=false;


    protected $fillable =[
        
        'idreporte',
        'id_ciudad',
        'direccion',
        'correo',
        'descripcion',
        'estado'
        

    ];

    protected $guarded =[

    ];
}
