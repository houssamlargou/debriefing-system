<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debriefing extends Model
{
    protected $fillable = [
        'brief_id',
        'teacher_id',
        'student_id',
        'comment',
        'debriefed_at',
    ];

    protected $casts = [
        'debriefed_at' => 'datetime',
    ];

    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function evaluations()
    {
        return $this->hasMany(DebriefingEvaluation::class);
    }
}
