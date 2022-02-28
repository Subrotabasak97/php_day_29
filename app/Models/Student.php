<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riaz@gmail.com';
        $this->student->mobile = '256789';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
          0 => [
              'id' => 1,
              'name' => 'Shahbuddin',
              'email' => 'shahbuddin@gmail.com',
              'mobile'=> '0197874526'
          ],
            1 => [
                'id' => 2,
                'name' => 'Jahid',
                'email' => 'jahid@gmail.com',
                'mobile'=> '01977515104'
            ],
        ];
    }
}
