<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Moi extends Model {

    protected $table = 'moi';
    protected $guarded = [];


    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }

    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function media(){
        return $this->belongsTo('\App\Media', 'media_id');
    }

    public function getCreatedAtAttribute($value){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($value)));
    }
}
