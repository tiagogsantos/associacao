<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associados extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'associados';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf',
        'rg',
        'marital_status',
        'cep',
        'road',
        'number',
        'city',
        'state',
        'country',
        'birthday',
        'company'
    ];

    public function areas ()
    {
       return $this->hasMany(Areas::class);
    }

}
