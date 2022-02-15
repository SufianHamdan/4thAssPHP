<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php 
    function sumOfInts($number){
      $sum = 0;
      for ($i=1; $i <= $number; $i++) { 
        $sum += $i;
      }
      echo 'Answer ===> The sum of numbers btween 0 and ' . $number . " is ==> " . $sum;
    }

    echo "Question number 1" . "<br> <br>";
    // you can change the number in the function argument
    sumOfInts(30);
    echo "<br> <br>";
?>
<hr>
<?php 
 
    function drowTriangle(){
    
      for ($row=1; $row < 6; $row++) {
        echo "* " . "<br>"; 
        for($column=1; $column <= $row; $column++){
          echo "*";
        }
      }
      echo "*";
      
    }

    echo '<br>' . "Question number 2" . "<br>";
    echo "<br>" . 'Answer ===> The Triangle of stars:' . '<br> <br>';

    drowTriangle();

?>
<hr>
  
<?php 
    function numberFact($number){
      $fact = 1;
      for ($i=1; $i <= $number; $i++) { 
        $fact *= $i;
      }
      echo 'Answer ===> The factorial of ' . $number . " is ==> " . $fact;
    }

    echo '<br> <br>' . "Question number 3" . "<br> <br>";
    // you can change the number in the function argument
    numberFact(4);
?>
<hr>
<?php 

  function multiplicationTable(){
    echo "<table>";
    for($column=1; $column <= 5; $column++){
      echo "<tr>";
      for($row=1; $row <= 6; $row++){
        echo '<td class="pillers">' .$row . ' * ' . $column . ' = ' . $row*$column . '</td>';
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  echo '<br> <br>' . "Question number 4" . "<br> <br>";
  echo 'Answer ===> Multiplication Table: ';
  multiplicationTable();
?>
</body>
</html>