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

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
