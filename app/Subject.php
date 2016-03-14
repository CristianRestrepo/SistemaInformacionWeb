<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

    protected $table = 'subjects';
    protected $fillable = ['name'];

    static $rules =[
        'name' =>'required',
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }

    public function publications()
    {
        return $this->hasMany('App\Publication');
    }
}
