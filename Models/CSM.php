<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CSM extends Board
{
    protected $table = 'boards';
    protected $fillable = ['student_id', 'boardable_type', 'grade_average_value', 'pass'];

    public function getResult()
    {
        $data = $this->getStudentBoardData();
        header('Content-Type: application/json');
        return json_encode($data);
    }
}
