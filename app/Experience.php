<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

    protected $table = 'experience';
    protected $guarded = [];

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
