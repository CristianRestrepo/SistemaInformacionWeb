<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {

    protected $table = 'areas';
    protected $fillable = ['name'];

    static $rules =[
        'name' =>'required',
    ];

    public function careers()
    {
        return $this->belongsToMany('App\Career');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
