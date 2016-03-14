<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File_Publication extends Model {

    protected $table = 'file_publications';
    protected $fillable =['publication_id','name','path'];

    static $rules =[
        'name' => 'required',
        'path' => 'required',
        'publication_id'=> 'required'
    ];

    public function publication()
    {
        return $this->belongsTo('App\publication_id');
    }

}
