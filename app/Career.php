<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model {

    protected $table = 'careers';
    protected $fillable = ['name'];

    static $rules =[
        'name' =>'required',
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }
}
