<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'area_id',
        'name_event',
        'locale_event',
        'responsible_vent',
        'event_data',
        'event_time'
    ];

    public static function associados()
    {
    }

    public function areas()
    {
        return $this->belongsTo(Areas::class, 'area_id'); // Substitua 'area_id' pelo nome correto da chave estrangeira na tabela "Eventos" que faz referência à tabela "Areas".
    }

}
