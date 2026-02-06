<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name', 'code'];

    public function students()
    {
        return $this->hasMany(User::class, 'class_id')
            ->where('role', 'student');
    }

    public function teachers()
    {
        return $this->belongsToMany(
            User::class,
            'class_teacher',
            'class_id',
            'teacher_id'
        );
    }

    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }
}
