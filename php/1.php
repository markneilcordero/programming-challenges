<?php
# Write a program that will display a joke.
# Don't display the punchline until the reader hits the enter key.
# Display the punchline in a different colour.

# Prior knowledge needed
# How to output information to the screen

$myArray = array(
    array("Why did the programmer quit his job?", "Because he didn't get array!"),
    array("Why don't scientists trust atoms?", "Because they make up everything!"),
    array("Why did the scarecrow win an award?", "Because he was outstanding in his field!"),
    array("What do you call cheese that isn't yours?", "Nacho cheese!"),
    array("Why couldn't the bicycle stand up by itself?", "Because it was two-tired!"),
    array("What did one hat say to the other hat?", "You stay here, I'll go on ahead!"),
    array("Why did the tomato turn red?", "Because it saw the salad dressing!"),
    array("How does a penguin build its house?", "Igloos it together!"),
    array("Why did the math book look sad?", "Because it had too many problems!"),
    array("What do you call fake spaghetti?", "An impasta!"),
    array("Why did the golfer bring two pairs of pants?", "In case he got a hole in one!"),
);

function printNewLine() {
    for ($x = 0; $x < 100; $x++) {
        echo "\n";
    }
}

$done = False;
$randomNumber = rand(0, count($myArray) - 1);
while (!($done)) {
    printNewLine();
    echo $myArray[$randomNumber][0];
    echo "\n";
    $userInput = readline("Press Enter:");
    echo $myArray[$randomNumber][1];
    return;
}
?>