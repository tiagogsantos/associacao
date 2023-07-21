<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuicao extends Model
{
    protected $table = 'contribuicao';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'maturity',
        'payment_verification',
        'area_id',
        'associado_id'
    ];

    public function setPaymentVerificationAttribute($value)
    {
        $this->attributes['payment_verification'] = (($value === true || $value === 'on') ? 1 : 0);
    }

    public function associados (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Associados::class);
    }

    public function areas (): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Areas::class);
    }



}
