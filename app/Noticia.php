<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table= 'noticia';
    protected $primaryKey = 'id';
	protected $fillable = ['titular', 'entrada', 'cuerpo', 'imagen', 'created_at', 'categoria_id','usuario_id',  'categoria_id'];
	protected $hidden = [
        'usuario_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User','usuario_id','id');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id','categoria_id');
    }
}
