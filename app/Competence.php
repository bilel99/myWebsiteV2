<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model {

    protected $table = 'competence';
    protected $guarded = [];

    public function group(){
        return $this->belongsTo('\App\Competence', 'group_id');
    }

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
