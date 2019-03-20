<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    public function flightClass()
    {
      return $this->beLongsTo(FlightClass::class);
    }

    public function airplane()
    {
      return $this->beLongsTo(Airplane::class);
    }

    public function airport(){
    	return $this->beLongTo(airports::class);
    }
}
