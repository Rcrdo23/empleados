<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory, SoftDeletes;
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombres',
        'apellidos',
        'identificacion',
        'direccion',
        'telefono',
        'ciudad_id',
        'activo',
    ];

        public function ciudad()
       {
           return $this->belongsTo(Ciudad::class);
       }

       public function cargos()
       {
           return $this->belongsToMany(Cargo::class, 'empleado_cargo');
       }

       public function jefe()
       {
           return $this->belongsToMany(Empleado::class, 'relaciones_empleados', 'colaborador_id', 'jefe_id');
       }

       public function colaboradores()
       {
           return $this->belongsToMany(Empleado::class, 'relaciones_empleados', 'jefe_id', 'colaborador_id');
       }
}
