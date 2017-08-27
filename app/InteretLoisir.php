<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InteretLoisir extends Model {

    protected $table = 'interetLoisir';
    protected $guarded = [];

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
