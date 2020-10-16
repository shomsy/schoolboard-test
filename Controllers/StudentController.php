<?php


namespace App\Controllers;


use App\Models\Student;


class StudentController
{
    public function show(int $id)
    {
        $student = Student::find($id);

        if (empty($student) || empty($student_board = $student->board)) {
            return 'Not found';
        }
        $boardClass = $student_board->boardable_type;
        $board = $boardClass::where('student_id', $id)->first();

        return $board->getResult();
    }
}
