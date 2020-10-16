<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name'];

    public function grades()
    {
        return $this->hasMany(Grade::class, 'student_id', 'id');
    }

    public function board()
    {
        return $this->hasOne(Board::class, 'student_id', 'id');
    }

}
