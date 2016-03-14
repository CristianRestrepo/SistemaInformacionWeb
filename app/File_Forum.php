<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File_Forum extends Model {

    protected $table = 'file_forums';
    protected $fillable =['forum_id','name','path'];

    static $rules =[
        'name' => 'required',
        'path' => 'required',
        'forum_id'=> 'required'
        ];

    public function forum()
    {
        return $this->belongsTo('App\forum_id');
    }



}
