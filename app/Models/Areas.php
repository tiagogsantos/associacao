<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'county',
        'earthlyvalue',
        'totalarea',
        'coordinator',
        'streetopening',
        'sewage',
        'light',
        'water'
    ];

    public function setEarthlyvalueAttribute($value)
    {
        if(empty($value)) {
            $this->attributes['earthlyvalue'] = null;
        } else {
            $this->attributes['earthlyvalue'] = floatval($this->convertStringToDouble($value));
        }
    }

    private function convertStringToDouble ($param)
    {
        // Na verificação abaixo estou convertendo de vario para nulo
        if (empty($param)) {
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }

    public function setStreetopeningAttribute($value)
    {
        $this->attributes['streetopening'] = (($value === true || $value === 'on') ? 1 : 0);
    }

    public function setSewageAttribute($value)
    {
        $this->attributes['sewage'] = (($value === true || $value === 'on') ? 1 : 0);
    }

    public function setLightAttribute($value)
    {
        $this->attributes['light'] = (($value === true || $value === 'on') ? 1 : 0);
    }

    public function setWaterAttribute($value)
    {
        $this->attributes['water'] = (($value === true || $value === 'on') ? 1 : 0);
    }




}
