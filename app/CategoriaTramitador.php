<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaTramitador extends Model
{
    protected $fillable = ['id_categoria','id_usuario','porcentaje_curso','porcentaje_sincurso'];
    protected $table = 'categoria_tramitadors';

    public function tramitador_categorias(){
        return $this->hasMany(User::class);
    }
}
