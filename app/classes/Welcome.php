<?php


namespace App\classes;
use App\classes\student;



class Welcome
{
    public $student, $students, $message,$singleStudent , $i, $data = [], $firstName, $lastName, $fastNumber, $secoundNumber, $result; // property

    public function __construct() // method or function
    {
        $this->message = "Welcome PHP";
    }

    public function index() // method
    {
        //include "view/home.php";
        //test();
        $this->student = new Student();
        $this->students = $this->student->getAllStudent();
        return view("home", ['students' => $this->students]);

    }

    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }

    public function detail($id){
        $this->student=new student();
        $this->singleStudent = $this->student->getStudentById($id);
        return view("detail", ['student' =>$this->singleStudent]);
    }

 public function makeFullName(){
        echo "hello";
 }
























//
//        $this->data = [
//            0 => [
//                'name' => 'Shagor',
//                'email' => 'shager@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => "408470409",
//                ],
//                'blood_group' => "a+"
//            ],
//            1 => [
//                'name' => 'zahir',
//                'email' => 'zahir@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => "408470409",
//                ],
//                'blood_group' => "b+"
//            ],
//            2 => [
//                'name' => 'mokbul',
//                'email' => 'mokbul@gmail.com',
//                'mobile' => [
//                    "personal" => "89383983",
//                    "parents" => "408470409",
//                ],
//                'blood_group' => "ab+"
//            ],
//
//        ];
//
////        echo "<pre>";
////        print_r($this->data);
//
//        foreach ($this->data as $item) {
//            foreach ($item as $value) {
//
//                if (is_array($value)) {
//                    foreach ($value as $v_valu) {
//                        echo $v_valu;
//                    }
//                } else {
//                    echo $value;
//                }
//            }
//            echo '<br/>';

        //=======================================================

//            echo $item["name"] . ' ' . $item["email"] . ' ' . $item["mobile"] . ' ' . '<br/>';

           // echo $this->data[2]['email'];





//==============================================================================
//        $this->data = [10, 20, 30, "Bitm", "PHP", 100.77, true];
//
//        foreach ($this->data as $value)
//        {
//            echo '<br/>';
//            echo $value. ' ';
//        }

        // echo $this->dara[4];
// ============================================================================
        // array ------------- special property or variable   ""$data = []""
// ===========================================================================
//        $this->i = 50;
//        do{
//            echo "hello PHP";
//            $this->i++;
//        }
//        while($this->i > 60);
//===============================================================
//        $this->i = 100;
//        While ($this->i < 105)
//        {
//            echo "hello World";
//            $this->i++;
//        }
//================================================================
//        for ($this->i = 70; $this->i >= 30; $this->i--)
//        {
//            echo $this->i," ";
//        }
// //==========================================
//        $this->fastNumber = 100;
//        $this->secoundNumber = 2;
//        $this->result = $this->fastNumber + $this->secoundNumber;


//        switch ($this->secoundNumber)
//        {
//            case 10:
//                echo "hello World";
//                break;
//            case 2:
//                echo "hello Dhaka";
//                break;
//            case 30:
//                echo "hello Bangladesh";
//                break;
//            default:
//                echo "hello Bitm";
//        }
////
//        switch ($this->fastNumber)
//        {
//            case 10:
//                echo "Hello World";
//                break;
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//            case 30:
//                echo "Hello Dhaka";
//                break;
//            default:
//                echo "Hello BITM";
//
//        }
////===========================================================
//        if ($this->fastNumber > $this->secoundNumber)
//        {
//            echo "Hello World";
//        }
//        elseif ($this->secoundNumber > $this->result)
//        {
//            echo "hello Bangladesh";
//        }
//        elseif ($this->result > $this->fastNumber)
//        {
//           echo "hello PHP";
//        }
//        else{
//           echo "hello Laravel";
//    }

//        if ($this->fastNumber > $this->secoundNumber)
//        {
//            echo $this->result;
//        }
//        else
//        {
//            echo "hello world";
//        }



//===========================================================================
        // git add .git add .
        //git commit -m "second comit"
        //git push
//============================================================================


//        echo !$this->result;

//
//        echo $this->fastNumber < $this->secoundNumber || $this->secoundNumber < $this->result;
//
//        echo '<br/>=================<br/>';
//        echo $this->fastNumber > $this->secoundNumber || $this->secoundNumber < $this->result;
//
//        echo '<br/>=================<br/>';
//        echo $this->fastNumber < $this->secoundNumber || $this->secoundNumber > $this->result;
//
//        echo '<br/>=================<br/>';
//        echo $this->fastNumber > $this->secoundNumber || $this->secoundNumber > $this->result;
//        echo '<br/>=================<br/>';

//        echo $this->fastNumber > $this->secoundNumber;

//        echo '<br/>';
//        echo $this->fastNumber += $this->se   ndNumber;
//
//        echo '<br/>';
//        echo $this->fastNumber -= $this->secoundNumber;
//
//        echo '<br/>';
//        echo $this->fastNumber *= $this->secoundNumber;
//
//        echo '<br/>';
//        echo $this->fastNumber /= $this->secoundNumber;
//
//        echo '<br/>';
//        echo $this->fastNumber %= $this->secoundNumber;
//
//        echo '<br/>';
//        echo $this->fastNumber .= $this->secoundNumber;
//

//        echo '<br/>';
//        echo ++$this->fastNumber;
//        echo '<br/>';
//        echo $this->fastNumber;
//        echo '<br/>';
//        echo $this->fastNumber;
//        echo '<br/>';
//        echo $this->fastNumber;



//        echo "<br>";
//        echo $this->fastNumber + $this->secoundNumber;
//
//        echo "<br>";
//        echo $this->fastNumber - $this->secoundNumber;
//
//        echo "<br>";
//        echo $this->fastNumber * $this->secoundNumber;
//
//        echo "<br>";
//        echo $this->fastNumber / $this->secoundNumber;
//
//        echo "<br>";
//        echo $this->fastNumber % $this->secoundNumber;
//        $this->firstName = 123.25;
//        $this->lastName = "BITM";
//
//        echo gettype($this->firstName);
//        echo $this->firstName. " ". $this->lastName;

}