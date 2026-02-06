<?php

namespace App\Models;

use App\Enums\MasteryLevel;
use Illuminate\Database\Eloquent\Model;

class DebriefingEvaluation extends Model
{
    protected $fillable = [
        'debriefing_id',
        'competence_id',
        'mastery_level',
        'comment',
    ];

    protected $casts = [
        'mastery_level' => MasteryLevel::class,
    ];

    public function debriefing()
    {
        return $this->belongsTo(Debriefing::class);
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }
}
