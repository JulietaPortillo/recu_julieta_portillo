<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Instructor extends Model
{
    use HasFactory;
    protected $table = 'instructor';
    protected $fillable = [
        'codigo', 
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'direccion',
        'observaciones',
        'curso_codigo'
    ];    

    protected $primaryKey = 'codigo';
    public $timestamps = false;

    public function curso() {
        return $this->belongsTo(Curso::class,'curso_codigo','codigo_curso');
    }
}

