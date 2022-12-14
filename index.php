<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<P>Dhaka Polytechnic Institute</P>

<?php
// variable
/*
multi line comment
*/
$name = " Name = Shammi Akter Emu";
echo $name . "<br>";

$roll = " Roll = 147037";
echo $roll ."<br>";

$session = " Session = 18-19";
echo $session . "<br>";

$shift = " Shift = 1st";
echo $shift . "<br>";


// array
$student = array("Information");
var_dump($student);

// class
class won {
    public $name    = "Shammi Akter Emu";
    public $roll    = "147037";
    public $session ="18-19";
    public $shift   ="1st"; 
    public function getStudentInformation(){
        return  "name : " . $this->name . "roll : " . $this->roll  . "session : " . $this->session . "shift : " . $this->shift;
    }

}

?>

</body>
</html>