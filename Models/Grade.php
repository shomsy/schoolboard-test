<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';
    protected $fillable = ['student_id', 'value'];

    public function students()
    {
        $this->belongsTo(Student::class);
    }
}
