<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {

	protected $table = 'Scores';
    protected $fillable = ['value', 'score','publication_id'];

    static $rules =[
        'value' =>'required',
        'score' =>'required',
        'publication_id' =>'required',
    ];

    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }
}
