<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table='productos';
    public $timestamps=false;
    protected $id;
    protected $atributes =['estado'=> 1];
    protected $attributes =['kit'=> 0];
    protected $barcode;
    protected $nombre;
    protected $presentacion;
    protected $descripcion;
    protected $attributtes =['kit'=> 0.00];
}