<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';
    protected $fillable = ['student_id', 'boardable_type', 'grade_average_value', 'pass'];


    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function getStudentBoardData()
    {
        return [
            'id' => $this->student->id,
            'name' => $this->student->name,
            'grades' => $this->student->grades->pluck('value'),
            'grade_average_degree' => $this->grade_average_value,
            'pass' => $this->pass ? 'pass' : 'fail',
        ];
    }
}
