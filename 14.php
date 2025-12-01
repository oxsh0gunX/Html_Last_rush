<!DOCTYPE html>
<html>
<head>
    <title>Sort Example</title>
</head>
<body>

<?php
$name = array("gopi", "arjun", "afsa", "jasil");

asort($name);
echo "<h3>Ascending Order (A → Z):</h3>";

foreach($name as $n){
    echo $n . "<br>";
}

echo "<br>";

arsort($name);
echo "<h3>Descending Order (Z → A):</h3>";

foreach($name as $n){
    echo $n . "<br>";
}
?>

</body>
</html>
