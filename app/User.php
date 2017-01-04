<?php


namespace App;
use Illuminate\Contracts\Auth\Authenticatable;


use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
     public function getProfile(){
    	return $this->hasOne('\App\Profile','userid');
    }
}

