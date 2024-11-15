<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sensor
 *
 * @property $id
 * @property $humedadAmbiente
 * @property $temperatura
 * @property $humedadSuelo
 * @property $presion
 * @property $co2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sensor extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['humedadAmbiente', 'temperatura', 'humedadSuelo', 'presion', 'co2'];


}
