<?php


namespace App\Services;


use App\Models\Grade;

class GradeService
{
    public function assignStudentToAnGrade($studentID, $grade)
    {
        $gradeToStudent = [
            'student_id' => $studentID,
            'value' => $grade
        ];

        Grade::create($gradeToStudent);
    }
}
