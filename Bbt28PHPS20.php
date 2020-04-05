<!DOCTYPE html>

<!--
    name: Brad Boutaugh
    pawprint: BBT28
    date: 4/3/20
    Challenge PHP S20
-->

<html lang="en-US">

<head>
    <title>Bbt28PHPS20</title>
    <meta charset="UTF-8">
</head>

<body>
    <!--PHP FUNCTIONS-->
    <?php
    
    function greetings_func($fname, $lname)
    {
        echo "Hello $fname $lname!";
    }
    
    function factorial_func($num)
    {
        $fact = 1;
        for($i = 1; $i<=$num;$i++)
        {
            $fact *= $i;
        }
        echo "The factorial of $num is $fact";
    }
    
    function reverse_func($word)
    {
	$reverse = strrev($word);
        echo "The reverse of $word is $reverse!";
    }
    
    function squared($n)
    {
        $n = $n * $n;
        return $n;
    }
    
    function sum_of_squares($num1, $num2)
    {
        $sum = 0;
        for($i = $num1; $i<=$num2; $i++)
        {
            $sum += squared($i);
        }
        
        echo "The sum of squares from $num1 to $num2 squares is $sum.";
    }


    //PHP FORM HANDLING
    if(isset($_POST["greeting_submit"]))
    {
        $fname_param = trim($_POST["fname_input"]);
        $lname_param = trim($_POST["lname_input"]);
	
        if(empty($fname_param) || empty($lname_param))
        {
            echo "No empty entries allowed.";
        }
        else if(!(is_string($fname_param)) || !(is_string($lname_param)))
        {
            echo "Only alpha characters allowed.";
        }
        else
        {
          greetings_func($fname_param, $lname_param);  
        }
    }


    else if(isset($_POST["factorial_submit"]))
    {
        $factorial_param = trim($_POST["factorial_input"]);
        if(empty($factorial_param))
        {
            echo "No empty entries allowed.";
        }
        else if(!(is_numeric($factorial_param)))
        {
            echo "Only numeric values.";
        }
        else if($factorial_param < 1)
        {
            echo "Input needs to be 1 or greater.";
        }
        else
           {
            factorial_func($factorial_param);   
           } 
    }

    else if(isset($_POST["reverse_submit"]))
    {
        $reverse_param = trim($_POST["reverse_input"]);
        if($reverse_param == "")
        {
            echo "No empty entries allowed.";
        }
        else if(is_string($reverse_param) == false)
        {
            echo "Only alpha characters allowed.";
        }
        else
        {
         reverse_func($reverse_param);   
        }  
    }
   
    else if(isset($_POST["squares_submit"]))
    {
        $squares1_param = trim($_POST["squares1_input"]);
        $squares2_param = trim($_POST["squares2_input"]);
        
         if(empty($squares1_param) || empty($squares2_param))
        {
            echo "No empty entries allowed.";
        }
        else if(is_numeric($squares1_param) == false || is_numeric($squares2_param)==false)
        {
            echo "Only numeric values.";
        }
        else if($squares1_param < 1 || $squares1_param > $squares2_param || $squares2_param < 1)
        {
            echo "Improper number input. Must be greater than 1 and number1 must be less than number2.";
        }
        else
        {
        sum_of_squares($squares1_param, $squares2_param);
        }
    }
   
    ?>
    
</body>

</html>