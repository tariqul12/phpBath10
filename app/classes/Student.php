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
                'mobile' => '11223344',
                "image" => "assists/img/1.jpg"
            ],

            1=>[
                'id' =>2,
                'name'=>'abul kalam',
                'email'=>'kalam@gmail.com',
                'mobile' => '35346353',
                "image" => "assists/img/2.jpg"
            ],

            2=>[
                'id' =>3,
                'name'=>'sonia Rahaman islam',
                'email'=>'sonia@gmail.com',
                'mobile' => '11456644',
                "image" => "assists/img/3.jpg"
            ],

            3=>[
                'id' =>4,
                'name'=>'abdul mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                "image" => "assists/img/4.jpg"
            ],
            4=>[
                'id' =>4,
                'name'=>'abdul mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                "image" => "assists/img/5.jpg"
            ],
            5=>[
                'id' =>4,
                'name'=>'rohim mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                "image" => "assists/img/1.jpg"
            ],
        ];

    }

    public function getAllStudent()
    {
        return $this->students;

    }


}