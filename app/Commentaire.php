<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model {

    protected $table = 'commentaire';
    protected $guarded = [];


    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }


    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }


    public function portfolio(){
        return $this->belongsTo('\App\Portfolio', 'portfolio_id');
    }




    public function getCreatedAtAttribute($value){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($value)));
    }
}
