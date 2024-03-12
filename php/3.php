<?php
/*
 * Write a program to work out the areas of a rectangle.
 * Collect the width and height of the rectangle from the keyboard
 * Calculate the area 
 * display the result.
 * 
 * Extension
 * display the volume of a cuboid.
 * See what happens when you don't type in numbers!
 * Try to explain what has happened and why
 * 
 * Prior knowledge needed
 * How to create variables
 * How to input data into a variable
 * How to display variables
 * How to perform basic mathematical calculations
 */

function calculateRectangleArea($width, $height) {
    return $width * $height;
}

function calculateCuboidVolume($width, $height, $depth) {
    return $width * $height * $depth;
}

function validateInput($input) {
    return is_numeric($input) ? $input : 0;
}

echo "Enter the width of the rectangle: ";
$width = validateInput(trim(fgets(STDIN)));

echo "Enter the height of the rectangle: ";
$height = validateInput(trim(fgets(STDIN)));

$area = calculateRectangleArea($width, $height);
echo "The area of the rectangle is: " . $area . "\n";

echo "Enter the depth of the cuboid: ";
$depth = validateInput(trim(fgets(STDIN)));

$volume = calculateCuboidVolume($width, $height, $depth);
echo "The volume of the cuboid is: " . $volume . "\n";
?>