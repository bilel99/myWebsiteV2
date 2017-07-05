<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgu extends Model {

    protected $table = 'cgu';
    protected $guarded = [];

    public function langue(){
        return $this->belongsTo('\App\Langue', 'langue_id');
    }

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
