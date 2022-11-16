<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InfoConsultant;

class ConsultantOffice extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $with = [
        'province',
        'city'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function infoConsultant()
    {
        return $this->hasMany(infoConsultant::class, 'office_id');
    }

    public function scopeDistance($query, $latitude, $longitude, $distance, $unit = "km")
    {
        $constant = $unit == "km" ? 6371 : 3959;
        $haversine = "(
            $constant * acos(
                cos(radians(" .$latitude. "))
                * cos(radians(`lat`))
                * cos(radians(`long`) - radians(" .$longitude. "))
                + sin(radians(" .$latitude. ")) * sin(radians(`lat`))
            )
        )";

        $query->select('*')->selectRaw("$haversine AS distance");
        // ->having("distance", "<=", $distance)
    }
}
