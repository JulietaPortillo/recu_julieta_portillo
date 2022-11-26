<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'curso';
    protected $fillable = [
        'codigo_curso', 
        'descripcion'
    ];  

    protected $primaryKey = 'codigo_curso';

    public $timestamps = false;
    
    public function instructor() {
        return $this->hasMany('Instructor');
    }
}
