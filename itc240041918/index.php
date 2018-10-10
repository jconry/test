<?php
    //set default values for the vars
    //for inital page load
    if (!isset($investment)){ $investment = '';}
    if (!isset($interest_rate)){ $interest_rate = '';}
    if (!isset($years)){ $years = '';}    
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calc</title>title> 
    <link rel="stylesheet" type="text/css"
    href="main.css">      
        </head>
    <body>
        <h1>Future Value Calculator</h1>
        
        <?php 
        //if there is an error message style it and
        //print it
        if (!empty($error_message)){?>
            <p class="error"><?php echo
            htmlspecialchars($error_message); ?></p> 
        <?php } >

            
        <form action="display_results.php" method="post"> 
            <div id="data">
            <label> Investment Amount </label>
            <input type="text" name="investment"
            value="<?php echo 
            htmlspecialchars($investment); ?>">
                
            <br>
        
            <label> Yearly Interest Rate </label>
            <input type="text" name="interest_rate" 
                value="<?php echo 
                htmlspecialchars($interest_rate); ?>">
                
            <br>
                       
            <label> Number of Years </label>
            <input type="text" name="years"
                value="<?php echo 
                htmlspecialchars($investment); ?>">
                
            <br>
                
            </div>    
            
            <div id="buttons">
                <label> &nbsp;
        </form>
    </body>


</html>
