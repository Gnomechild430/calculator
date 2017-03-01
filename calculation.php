<?php
if(isset($_POST)){
$firstNumber = $_POST['firstNumber'];
$calcFunc = $_POST['calcFunc'];
$secondNumber = $_POST['secondNumber'];

function calculate($value1, $calcFunc, $value2){
            if($calcFunc == "+"){
				$result = (parseFloat(firstNumber) + parseFloat(secondNumber));
				return $result;
				}
			if($calcFunc == "-"){
				$result = $firstNumber - $secondNumber;
				return $result;
				$firstNumber = $result; 
			}
			if(calcFunc == "*"){
				if(!secondNumber){
					$result = $firstNumber * $firstNumber;
					return $result;
				}
				else{
				$result = $firstNumber * $secondNumber; 
				return $result;
				}
			}
			if($calcFunc == "/"){
				if($secondNumber == 0){
					echo("Invalid result, please enter a number that is not 0.");
				}
				else{
                $result = $firstNumber / $secondNumber;
				return $result;
			}
			}
		};
echo $result;
}
unset($_POST);
?>