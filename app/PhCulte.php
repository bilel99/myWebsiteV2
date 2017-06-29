<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PhCulte extends Model {

    protected $table = 'phculte';
    protected $guarded = [];


    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }


    public function getCreatedAtAttribute($value){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($value)));
    }
}
