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

    public function formation(){
        return $this->belongsTo('\App\Formation', 'formation_id');
    }

    public function competence(){
        return $this->belongsTo('\App\Competence', 'competence_id');
    }

    public function experience(){
        return $this->belongsTo('\App\Experience', 'experience_id');
    }

    public function competenceLinguistique(){
        return $this->belongsTo('\App\CompetenceLinguistique', 'competenceLinguistique_id');
    }

    public function interetLoisir(){
        return $this->belongsTo('\App\InteretLoisir', 'interetLoisir_id');
    }

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
