<?php


namespace App\Services;


use App\Models\Student;

class StudentService
{
    /**
     * @var BoardService
     */
    private $boardService;
    /**
     * @var GradeService
     */
    private $gradeService;

    public function assignToAnBoard(Student $student)
    {
        (new BoardService())->registerStudentToAnBoard($student);

        return $student;
    }

    public function assignGradeToTheStudent(Student $student, $grade)
    {
        (new GradeService())->assignStudentToAnGrade($student->id, $grade);

        return $student;
    }
}
