<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model {

    protected $table = 'cv';
    protected $guarded = [];

    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }


    public function user(){
        return $this->belongsTo('\App\User', 'user_id');
    }


    public function moi(){
        return $this->belongsTo('\App\Moi', 'moi_id');
    }


}
