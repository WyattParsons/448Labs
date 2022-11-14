<!-- include 'exersize2.html'; -->
<!-- this php program will check the answers from "exercise.html" -->
<head></head>
<body>
<?php

// create a variable to hold the number of correct answers
$correct = 0;

// restate the questions and answers
echo "Question 1: What is the output of the following code?<br>";
echo "echo 'Hello World';<br>";

echo "Your answer: " . $_POST["question1"] . "<br>";
echo "Correct answer: Hello World<br>";

// check to see if answers are correct
if ($_POST["question1"] == "Hello World") {
    $correct++;
}
echo "<br>";

echo "Question 2: What is the capitol of Kansas?<br>";
echo "Your answer: " . $_POST["question2"] . "<br>";
echo "Correct answer: Topeka<br>";

if ($_POST["question2"] == "Topeka") {
    $correct++;
}
echo "<br>";

echo "Question 3: Which number is the highest?<br>";
echo "Your answer: " . $_POST["question3"] . "<br>";
echo "Correct answer: 3<br>";

if ($_POST["question3"] == "4") {
    $correct++;
}
echo "<br>";

echo "Question 4: What is the largest planet in our solar system?<br>";
echo "Your answer: " . $_POST["question4"] . "<br>";
echo "Correct answer: Jupiter<br>";

if ($_POST["question4"] == "Jupiter") {
    $correct++;
}
echo "<br>";

echo "Question 5: What is the last letter in the alphabet?<br>";
echo "Your answer: " . $_POST["question5"] . "<br>";
echo "Correct answer: Z<br>";

if ($_POST["question5"] == "Z") {
    $correct++;
}
echo "<br>";

//calculate the percentage of correct answers
$percentage = ($correct / 5) * 100;
// tell the user their score
echo "You got " . $correct . " out of 5 correct.<br>";
echo "Your score is " . $percentage . "%<br>";

?>

</body>