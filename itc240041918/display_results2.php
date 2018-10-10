<?php
//get the data from the form
$investment = filter_input (INPUT_POST, 'investment',                          FILTER_VALIDATE_FLOAT);

$interest_rate = filter_input (INPUT_POST, 'interest_rate',                          FILTER_VALIDATE_FLOAT);

$years = filter_input (INPUT_POST, 'years', FILTER_VALIDATE_INT);

//validate the variables
//validated investment
if($investment === FALSE){
  $error_message = 'Investment must be a valid number';  
} else if ($investment <=0){
    $error_message = 'Investment must be greater than zero'; 
    //validate interest rate
} else if ($interest_rate == FALSE){
    $error_message = 'Interest rate must be a valid number'; 
} else if ($interest_rate <=0){
    $error_message = 'Interest rate must be greater than zero'; 
} else if ($years == FALSE){
    $error_message = 'Years must be a valid whole number';     
} else if ($years <=0){
    $error_message = 'Years must be greater than zero'; 
} else {
    $error_message ='';
}

//if there is an error
if($error_message !='') {
    include('index.php');
    exit();
}

//calculate the future value
$future_value = $investment;
for($i = 1; $i<= $years; $i++){
    $future_value =
        future_value + ($future_value * $interest_rate * .01);
}

//format the results
$investment_f = '$'.number_format($investment, 2);
$yearly_rate_f = $interest_rate.'%';
$future_value_f = '$'.number_format($future_value, 2);

?>

<!DOCTYPE html>
<html>
  <head>Future Value Calculator
    <link rel="stylesheet" type="tex/css" href="main.css">
   </head>
<body>
   <main>
    
       <h1>Future Value Calculator</h1>
       
       <label>Investment Amount:</label>
       <span><?php echo $investment_f; ?></span> <br>
       
       <label>Yearly Interest Rate:</label>
       <span><?php echo $investment_f; ?></span> <br>
       
       <label>Number of Years:</label>
       <span><?php echo $years_f; ?></span> <br>
       
       <label>Future Value:</label>
       <span><?php echo $future_value_f; ?></span> <br>
       
    </main> 
</body>
    
    
    
</html>