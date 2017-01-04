<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table='profiles';
    
    public function getUser() {
    	return $this->belongsTo('\App\User','userid');
    }

}
