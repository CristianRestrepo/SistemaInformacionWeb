<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_Publication extends Model {

	protected $table = 'comment_publications';
    protected $fillable = ['comment','publication_id','user_id'];

    static $rules =[
        'comment' =>'required',
        'publication_id' =>'required',
        'user_id' =>'required',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }

}
