<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
        'name', 'email', 'password','rol','imagen','statu'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function productoU(){
        return $this->hasMany('\App\ProductoUser','id');
    }
    public function productoC(){
        return $this->hasMany('\App\ComprarUser','id');
    }
    public function posts(){
        return $this->hasMany('\App\Post','id');
    }
    private function checkIfUserHasRole($need_role){
        return (strtolower($need_role) == strtolower(Auth::User()->rol)) ? true : null;

    }
  

    public function hasRole($rol){
        if (is_array($rol)) {
            foreach ($rol as $need_role){
                if ($this->checkIfUserHasRole($need_role)){
                    return true;
                }
            }
        }else {
            return $this->checkIfUserHasRole($rol);
        }
        return false;
    }
}
