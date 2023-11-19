<?php


namespace App\classes;


class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students =[
            0=>[
                'id' =>1,
                'name'=>'robiul islam',
                'email'=>'robiul@gmail.com',
                'mobile' => '11223344'
            ],

            1=>[
                'id' =>2,
                'name'=>'abul kalam',
                'email'=>'kalam@gmail.com',
                'mobile' => '11223344'
            ],

            2=>[
                'id' =>3,
                'name'=>'sonia Rahaman islam',
                'email'=>'sonia@gmail.com',
                'mobile' => '11223344'
            ],

            3=>[
                'id' =>4,
                'name'=>'abdul mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '11223344'
            ],
        ];

    }

    public function getAllStudent()
    {
        return $this->students;

    }


}