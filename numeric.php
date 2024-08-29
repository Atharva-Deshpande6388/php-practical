<?php
/*Hello, this is practical made by Atharva G. Deshpande from BCS Third Year

important note : output of code is written infront of them, 
as well as output copy is attached after code is finished.*/
#Numeric Function
echo "Practical 1.1 : Numeric Functions<br><br>";

# 1. var_dump()
$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'var_dump' function<br><br>";
echo var_dump($a)."<br>";       #op = int(10)
echo var_dump($b)."<br>";       #op = float(3.14)
echo var_dump($c)."<br>";       #op = string(22) "Hello, this is Atharva"
echo var_dump($c)."<br>";       #op = string(22) "Hello, this is Atharva"
echo "==================================<br>";

# 2. is_int()
$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'is_int()' function<br>";
echo var_dump(is_int($a))."<br>";   #bool(true)
echo var_dump(is_int($b))."<br>";   #bool(false)
echo var_dump(is_int($c))."<br>";   #bool(false)
echo "==================================<br>";

# 3. is_integer()

$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'is_integer()' function<br><br>";
echo var_dump(is_integer($a))."<br>";   #bool(true)
echo var_dump(is_integer($b))."<br>";   #bool(false)
echo var_dump(is_integer($c))."<br>";   #bool(false)
echo "==================================<br>";

# 4. is_long()

$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'is_long()' function<br><br>";
echo var_dump(is_long($a))."<br>";   #bool(true)
echo var_dump(is_long($b))."<br>";   #bool(false)
echo var_dump(is_long($c))."<br>";   #bool(false)
echo "==================================<br>";

# 5. is_double()

$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'is_double()' function<br><br>";
echo var_dump(is_double($a))."<br>";   #bool(false)
echo var_dump(is_double($b))."<br>";   #bool(true)
echo var_dump(is_double($c))."<br>";   #bool(false)
echo "==================================<br>";

# 6. is_numeric()

$a = 10;
$b = 3.14;
$c = "Hello, this is Atharva";

echo "This is 'is_numeric()' function<br><br>";
echo var_dump(is_numeric($a))."<br>";   #bool(true)
echo var_dump(is_numeric($b))."<br>";   #bool(true)
echo var_dump(is_numeric($c))."<br>";   #bool(false)
echo "==================================<br>";

# 7. min()

echo "This is 'min()' function<br><br>";
echo(min(2, 90, 4, 965, 63, 1, 150, 9, 250))."<br>";   # 1
echo "==================================<br>";

# 8. max()

echo "This is 'max()' function<br><br>";
echo(max(2, 90, 4, 965, 63, 0, 150, 9, 250))."<br>";    # 965
echo "==================================<br>";

# 9. sqrt()

echo "This is 'sqrt()' function<br><br>";
echo sqrt(64);     # 8
echo "<br><br>END";

?>