<?php


namespace App\Models;


use Spatie\ArrayToXml\ArrayToXml;


class CSMB extends Board
{
    protected $table = 'boards';
    protected $fillable = ['student_id', 'boardable_type', 'grade_average_value', 'pass'];

    public function getResult()
    {
        $data = $this->getStudentBoardData();
        $xml = ArrayToXml::convert($data);
        header("Content-Type: text/plain");
        return $xml;
    }
}
