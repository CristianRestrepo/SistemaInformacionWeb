<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table = 'departments';
    protected $fillable = ['name','description'];
    public $timestamps =false;

    static $rules =[
        'name' =>'required',

    ];
}
