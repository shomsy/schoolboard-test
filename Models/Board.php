<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';
    protected $fillable = ['student_id', 'boardable_type', 'grade_average_value'];

    public function boardable()
    {
        return $this->morphTo();
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
