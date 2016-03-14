<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Forum extends Model {

	//
    protected $table = 'categories_forum';
    protected $fillable = ['name','description'];

    static $rules =[
        'name' =>'required',
    ];

    public function forums()
    {
        return $this->hasMany('App\Forum');
    }


}
