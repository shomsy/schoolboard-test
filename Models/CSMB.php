<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CSMB extends Model
{
    protected $table = 'boards';
    protected $fillable = ['student_id', 'boardable_type', 'grade_average_value'];

    public function board()
    {
        return $this->morphOne(Board::class, 'boardable');
    }
}
