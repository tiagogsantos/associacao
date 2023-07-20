<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
   protected $table = 'eventos';

   protected $primaryKey = 'id';

   protected $fillable = [
       'area_id',
       'name_event',
       'locale_event',
       'responsible_vent',
       'event_data',
       'event_time'
   ];

}
