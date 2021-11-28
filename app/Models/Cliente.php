<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   // use HasFactory;

   protected $table="cliente";
   protected $primarykey="codigo_cliente";
   protected $fillable = [
        'nit_ci','nombres','apellidos','email','direccion','celular'
   ];
}
