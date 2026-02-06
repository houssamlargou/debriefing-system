<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = [
        'sprint_id',
        'title',
        'description',
        'estimated_hours',
        'type',
        'order',
    ];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function competences()
    {
        return $this->belongsToMany(Competence::class, 'brief_competence');
    }

    public function debriefings()
    {
        return $this->hasMany(Debriefing::class);
    }
}
