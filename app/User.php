<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	use EntrustUserTrait; // add this trait to your user model

	protected $table = 'users';
	protected $fillable = ['name','code','birth','email', 'password','phone','mphone','department_id','image_path','image_name'];
	protected $hidden = ['password', 'remember_token'];


	public function publications()
	{
		return $this->hasMany('App\Publication');
	}

	public function comments_publications()
	{
		return $this->hasMany('App\Comment_Publication');
	}

	public function comments_forums()
	{
		return $this->hasMany('App\Comment_Forum');
	}

}
