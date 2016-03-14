<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_Forum extends Model {

	protected $table = 'comment_forums';
    protected $fillable = ['comment','forum_id','user_id'];

    static $rules =[
        'comment' =>'required',
        'forum_id' =>'required',
        'user_id' =>'required',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }

}
