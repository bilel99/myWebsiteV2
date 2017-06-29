<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    protected $table = 'media';
    protected $guarded = [];


    public function portfolio(){
        return $this->belongsTo('\App\Portfolio', 'portfolio_id');
    }

    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }


    public function getCreatedAtAttribute($value){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($value)));
    }
}
