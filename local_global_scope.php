<?php
echo "Welcome to scope and local/global vars in php<br>";
$a = 98; // Global Variable
$b = 9;

function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a; 
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>




<?php
$var1 = 80;
function local_variables()
{   
    // This $var1 is local to this function the variable $var1 outside this function is a completely different variable
    $var1 = 40;
    echo "local = $var1 \n";
}
local_variable();
// $num outside local_variable() is a different Variable than that of inside function
echo "Variable num outside local_variable() is $var1 \n";
?>



<?php
$num = 20;
function global_variable()
{
    // we have to use global keyword to get access to the $num variable
    global $num;
    echo "num variable inside function : $num \n";
}
global_var();
echo "num variable outside function : $num \n";
?>