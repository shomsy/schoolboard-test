<?php

namespace App\ValueObjects;

use App\Models\Student;

class BoardTypes
{
    private $grades;
    private $student;
    const CSM_BOARD_TYPE = 'App\Models\CSM';
    const CSMB_BOARD_TYPE = 'App\Models\CSMB';

    public function __construct(Student $student)
    {
        $this->student = $student;
        $this->grades = $student->grades ?? null;
    }

    public function getAverageGrade()
    {
        return $this->grades->avg('value');
    }

    public function getBiggestGrade()
    {
        return $this->grades->max('value');
    }

    public function studentHasMoreThanTwoGrades()
    {
        return $this->grades->count() > 2;
    }

    public function isCSMBType()
    {
        return $this->studentHasMoreThanTwoGrades() && $this->getBiggestGrade() > 8;
    }

    public function isCSMType()
    {
        return $this->getAverageGrade() >= 7;
    }

    public function getType()
    {
        if ($this->isCSMType()) {
            return [
                'class' => self::CSM_BOARD_TYPE
            ];
        }

        if ($this->isCSMBType()) {
            return [
                'class' => self::CSMB_BOARD_TYPE
            ];
        }

        return [];
    }

}
