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
echo "<br><br>.....................END.....................<br><br><br><br>";

?>

<?php
/*Hello, this is practical made by Atharva G. Deshpande from BCS Third Year

important note : output of code is written infront of them, 
as well as output copy is after code is finished.*/
#Numeric Function
echo "Practical 1.1 : String Functions<br><br>";

# 1. strlen()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'strlen()' function<br>";
echo "Number of characters in '$a' are : ".strlen($a);  # 32
echo "<br>======================================================================<br>";

# 2. str_word_count()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'str_word_count()' function<br>";
echo "Number of words in '$a' are : ".str_word_count($a);   # 5
echo "<br>======================================================================<br>";

# 3. strpos()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'strpos()' function<br>";
echo "Position of Atharva in '$a' is : ".strpos($a, "Atharva"); # 15
echo "<br>======================================================================<br>";

# 4. strtoupper()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'strtoupper()' function<br>";
echo "'$a' in capital form : ".strtoupper($a);  #  HELLO, THIS IS ATHARVA DESHPANDE
echo "<br>======================================================================<br>";

# 5. strtolower()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'strtolower()' function<br>";
echo "'$a' in lower format : ".strtolower($a);  # hello, this is atharva deshpande
echo "<br>======================================================================<br>";

# 6. str_replace()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'str_replace()' function<br>";
echo "Replacing Hello with Namaste in '$a' : ".str_replace("Hello", "Namaste", $a); # Namaste, this is Atharva Deshpande
echo "<br>======================================================================<br>";

# 7. strrev()
$a = "Hello, this is Atharva Deshpande";
echo "This is 'strrev()' function<br>";
echo "Reversing '$a' string : ".strrev($a); # ednaphseD avrahtA si siht ,olleH
echo "<br>======================================================================<br>";

# 8. trim()
$b = "  Hello, this is Atharva Deshpande  ";
echo "This is 'trim()' function<br>";
echo "Trimming whitespace from '$b' : ".trim($b);   # Hello, this is Atharva Deshpande
echo "<br><br>..................................END..................................<br><br><br><br>";

?>

<?php
/*Hello, this is practical made by Atharva G. Deshpande from BCS Third Year

important note : output of code is written infront of them, 
as well as output copy is attached after code is finished.*/
echo "Practical 1.3 : Date functions<br><br>";

# 1. date(d-m-y)
echo "This is 'date(\"d-m-y\")' function<br>";
echo "Today's date is : ".date("d-m-y");    # 28-08-24
echo "<br>=============================<br>";

# 2. date(d/m/y)
echo "This is 'date(\"d/m/y\")' function<br>";
echo "Today's date is : ".date("d/m/y");    # 28/08/24
echo "<br>=============================<br>";

# 3. date(h:i:sa)
echo "This is 'date(\"h:i:sa\")' function<br>";
echo "Today's time is : ".date("h:i:sa");    # 06:09:50pm
echo "<br>=============================<br>";

# 4. date(l)
echo "This is 'date(\"l\")' function<br>";
echo "Today's day is : ".date("l");    # Wednesday
echo "<br>=============================<br>";


# 5. date_default_timezone_set("Asia/Kolkata")
echo "This is 'date_default_timezone_set()' function<br>";
date_default_timezone_set("Asia/Kolkata");
echo "Today's date as per Asia/Kolkata timezone is : ".date("d-m-y");
echo "<br>=============================<br>";

# 6. mktime()
echo "This is 'date_default_timezone_set()' function<br>";
date_default_timezone_set("Asia/Kolkata");
echo "Today's date as per Asia/Kolkata timezone is : ".date("d-m-y");
echo "<br>=============================<br>";

# 7. mktime()
$timestamp = mktime(10, 30, 0, 10, 15, 2024);
$format = date("d-m-Y H:i:sa",$timestamp    );
echo "Date and Time : ".$format;
echo "<br>=============================<br>";

# 8. strtotime()
$timestamp = strtotime("next Wednesday");
echo "Next date of Wednesday is : ".date("d/m/Y",$timestamp);

echo "<br><br>.....................END.....................<br><br><br><br>";

?>
