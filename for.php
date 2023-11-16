<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> using if --elseif</title>
  <style type="text/css">
    body{
      background: cyan;
    }
  </style>
</head>
<body ><h1>WHILE LOOPS</h1>
  <?php 
  echo "WELCOME TO LOOPS <br>";

$fact=1;
$n=1;
$i=7;
while ($n<=$i)
{ 
  $fact =$fact*$n;
  $n++;
}

 $age=array(40,30,40,80,60);
  foreach ($age as $value )
   {
    
    echo "$value<br>";

  }
  echo "  the sum is of arrray is ". array_sum($age)."<br>";
  echo "the avarage is " . array_sum($age)/5;

	?>

</body>
</html>