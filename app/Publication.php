<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model {

	protected $table = 'publications';
    protected $fillable = ['name','subtitle','body','user_id','subject_id'];

    static $rules =[
        'name' => 'required',
        'subtitle' => 'required',
        'body'=> 'required',
        'user_id'=> 'required',
        'subject_id'=> 'required'
         ];


    public function file_publications()
    {
        return $this->hasMany('App\File_Publication');
    }

    public function comments_publications()
    {
        return $this->hasMany('App\Comment_Publication');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function scores()
    {
        return $this->hasMany('App\Score');
    }
}
