<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment2</title>
</head>
<body>
    <h3 style="color:red">1.Pass first name and last name with parameter and print out the names together in one string.</h3>
    <?php 
    
    function name($firstname,$surname,$lastname){

        $name ="$firstname $surname $lastname";
        echo "My name is"." ".$name;
    }
    name('Shimanta','Barua','Rimon');
    
    ?>
    <h3 style="color:red">2.Make 3 functions with 2 parameters each. Pass two numbers and print out SUM, MULTIPLICATION, SUBTRACTION by 3 separate functions.</h3>
    <?php 
    
    function sum($firstnum,$secondnum){
        $result = $firstnum + $secondnum;
        echo "SUM of two number is $result";
        echo "<br>";
        

    }
    sum('120','75');


    function mul($firstnum,$secondnum){
        $result = $firstnum*$secondnum;
        echo "MULTIPLICATION of two number is $result";
        echo "<br>";

    }
    mul('175','53');

    function sub($firstnum,$secondnum){
        $result = $firstnum-$secondnum;
        echo "SUBTRACTION of two number is $result";
        echo "<br>";

    }
    sub('230','115');
    
    ?>
    <h3 style="color:red">3.Print 20 to 10 reversely by for loop.</h3>

    <?php 

    for($i=20; $i>=10;$i--){
    echo $i;
    echo "<br>";

}

    ?>

   <h3 style="color:red">4. sum 1,2,3,4 using loop. Means 1+2+3+4 = ?.</h3>
   <?php 
   $i=0;
   $result=0;
   while($i<5){
       $result+=$i;
       $i++;
   }
   echo "1+2+3+4= $result";
   
    
   ?>

    <h3 style="color:red">5.Make multiplication table (নামাতা) for 40 to 45 using nested loop..</h3>
    <?php
    for($i=40; $i<=45; $i++)
    {
        for($j=1; $j<=10; $j++)
        {
            echo $i. "x".$j."=".($i*$j)."<br>";
        
        }
        echo "~~~~~~~~~~~~~~<br>";
    }
    ?>
    
    
    
    
  



    

</body>
</html>