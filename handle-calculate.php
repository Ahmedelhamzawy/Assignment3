<?php
function calculate($num1,$num2,$operation){
    $ans;
    switch($operation){
        
        case 'add':
            $ans = $num1+$num2;
            break;
        case 'subtract':
            $ans = $num1-$num2;
            break;
        case 'multiply' :  
            $ans = $num1*$num2;
            break;
        case 'divide':
            $ans = $num1/$num2;
            break;
        default:
            echo 'operation not valid';

    }
    return $ans;
}

if(isset($_POST['submit'])){
   $result = calculate($_POST['first_number'],$_POST['second_number'],$_POST['oper']);
}else{
    header('location:calculate.php');
}
?>
<a href="calculate.php?result=<?php echo $result; ?>">return to show the answer</a>