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
                'roll' => '65',
                "image" => "assists/img/1.jpg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            1=>[
                'id' =>2,
                'name'=>'abul kalam',
                'email'=>'kalam@gmail.com',
                'mobile' => '35346353',
                'roll' => '33',
                "image" => "assists/img/2.jpg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            2=>[
                'id' =>3,
                'name'=>'sonia Rahaman islam',
                'email'=>'sonia@gmail.com',
                'mobile' => '11456644',
                'roll' => '12',
                "image" => "assists/img/3.jpg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],

            3=>[
                'id' =>4,
                'name'=>'abdul mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                'roll' => '34',
                "image" => "assists/img/4.jpg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
            4=>[
                'id' =>5,
                'name'=>'abdul mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                'roll' => '55',
                "image" => "assists/img/5.jpg",
                  "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
            5=>[
                'id' =>6,
                'name'=>'rohim mia',
                'email'=>'abdul@gmail.com',
                'mobile' => '54532346',
                'roll' => '54',
                "image" => "assists/img/1.jpg",
                "detail" =>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

",
            ],
        ];

    }

    public function getAllStudent()
    {
        return $this->students;

    }
    public function getStudentById($id){
        foreach ($this->students as $student)
        {
            if ($student["id"] == $id)
            {
                return $student;
            }
        }
    }


}