<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;
    public function categoria()
    {
        return $this->hasMany(Categoria::class);
    }
    public function marca()
    {
        return $this->hasOne(Marca::class);
    }
    public function presentacione()
    {
        return $this->hasOne(Presentacione::class);
    }
    
        // Campos que se pueden asignar de forma masiva
        protected $fillable = ['nombre', 'descripcion'];
         
   
}
