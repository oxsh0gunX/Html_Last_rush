<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    <label>Enter your name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Enter units used:</label><br>
    <input type="number" name="unit" required><br><br>

    <input type="submit" name="submit" value="Calculate Bill">
</form>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $unit = $_POST['unit'];

    if (empty($unit)) {
        echo "<script>alert('Unit is required');</script>";
    } else {
        
        if ($unit <= 100) {
            $bill = $unit * 2.50;
        } elseif ($unit <= 200) {
            $bill = (100 * 2.50) + (($unit - 100) * 3.50);
        } else {
            $bill = (100 * 2.50) + (100 * 3.50) + (($unit - 200) * 5.00);
        }

        echo "<br><br>";
        echo "Name: $name<br>";
        echo "Units Used: $unit<br>";
        echo "Electricity Bill: $" . number_format($bill, 2);
    }
}
?>

</body>
</html>
