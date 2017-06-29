<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model {

    protected $table = 'langue';
    protected $guarded = [];



    public function getCreatedAtAttribute($value){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($value)));
    }
}
