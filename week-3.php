
<?php
//BY OSAMA MOHAMED
//assignments week3
?>
=============================
#1
<?php $username = "Osama Mohamed"?>;
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $username?></title>
  </head>
  <body>
    <h1><?php echo $username?></h1>
    <p>Here In <?php echo $username?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username?></footer>
  </body>
</html>
===========================
#2
<?php
$name = "elzero";
$$name = "Web";
echo $$name;
echo "<br>";
echo $elzero ;
echo "<br>";
echo "web" ;
echo "<br>";
echo "${$name}";
echo "<br>";
echo "$elzero" ;

?>
========================
#3
<?php
$a = 200;
$b = &$a;
$a = 100;

echo $b; 
?>
=====================
#4
<!DOCTYPE html>
<html>
<body>

<?php  

echo $_SERVER['DOCUMENT_ROOT']; 
echo "<br>"; 
echo $_SERVER['SERVER_NAME']; 

echo "<br>"; 
echo $_SERVER['SystemRoot']; 

echo "<br>"; 
echo $_SERVER['OPENSSL_CONF']; 


?>  

</body>
</html>

================
#5
<?php
/*
while
throw
use
goto
var
try
__LINE__
()empty
()unset
()isset
const
clone
function
*/
?>

==============================
#6
<!DOCTYPE html>
<html>
<body>

<?php  

echo __LINE__ ;
echo "<br>" ;
echo __FILE__ ;
echo "<br>" ;
echo __DIR__ ;


?>  

</body>
</html>
