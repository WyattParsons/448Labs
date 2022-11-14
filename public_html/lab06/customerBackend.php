<head>
    <!-- include style.css -->
    <link rel="stylesheet"href="style.css">
</head>
<body>
<div class = "container">
<div class = "item">
<?php
$cost = 0;
// print a welcome message

echo "Welcome!<br>";
// print user password
echo "Your uswername is: " . $_POST["username"] . "<br>";
echo "Your password is: " . $_POST["password"] . "<br>";
echo "<br>";

// add the value of "lamboADD" and the value of "shipping"
$cost = $_POST["lamboADD"] + $_POST["teslaADD"] + $_POST["bugattiADD"] + $_POST["shipping1"] + $_POST["shipping2"] + $_POST["shipping3"];
echo "Your total cost is $" . $cost . "<br>";

// prints a recept of user's purchases
// ! LAMBO
echo "You purchased:<br>";
echo "<br>";
if ($_POST["lamboADD"] == 500000) {
    echo "Lamborghini<br>";
    echo "Price: $500,000<br>";
}
// check shipping prices
if ($_POST["shipping1"] == 0) {
    echo "Shipping: Free<br>";
} else if ($_POST["shipping1"] == 50) {
    echo "Shipping: $50<br>";
} else if ($_POST["shipping1"] == 5) {
    echo "Shipping: $5<br>";
}
echo "<br>";

// ! TESLA
if ($_POST["teslaADD"] == 100000) {
    echo "Tesla<br>";
    echo "Price: $100,000<br>";
}
// check shipping prices
if ($_POST["shipping2"] == 0) {
    echo "Shipping: Free<br>";
} else if ($_POST["shipping2"] == 50) {
    echo "Shipping: $50<br>";
} else if ($_POST["shipping2"] == 5) {
    echo "Shipping: $5<br>";
}
echo "<br>";

// ! BUGATTI
if ($_POST["bugattiADD"] == 1000000) {
    echo "Bugatti<br>";
    echo "Price: $1,000,000<br>";
}
// check shipping prices
if ($_POST["shipping3"] == 0) {
    echo "Shipping: Free<br>";
} else if ($_POST["shipping3"] == 50) {
    echo "Shipping: $50<br>";
} else if ($_POST["shipping3"] == 5) {
    echo "Shipping: $5<br>";
}
echo "<br>";

?>
</div>
</div>
</body>
