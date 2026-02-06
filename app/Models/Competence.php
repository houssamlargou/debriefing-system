<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['code', 'label'];

    public function briefs()
    {
        return $this->belongsToMany(Brief::class, 'brief_competence');
    }

    public function evaluations()
    {
        return $this->hasMany(DebriefingEvaluation::class);
    }
}
