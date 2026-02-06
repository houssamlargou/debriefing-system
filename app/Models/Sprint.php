<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    protected $fillable = [
        'class_id', 'name', 'order', 'start_date', 'end_date'
    ];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function briefs()
    {
        return $this->hasMany(Brief::class);
    }
}
