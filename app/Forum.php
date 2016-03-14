<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model {

    protected $table = 'forums';
    protected $fillable = ['name','body','category_id','user_id'];

    static $rules =[
        'name' => 'required',
        'body' => 'required',
        'category_id'=> 'required',
        'user_id' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category_Forum');
    }

    public function file_forums()
    {
        return $this->hasMany('App\File_Forum');
    }
}
