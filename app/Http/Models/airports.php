<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class airports extends Model
{
  public function getById($id){
  	return $this->where('id')->get();
  }
}
