<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = 0;
    $reversedString = strrev($string);
    $array = ["a", "e", "i", "o", "u"];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = strtolower($string[$i]);
        if (in_array($char, $array)) {
            $vowelCount++;
        }
    }
    echo "Original String: " . $string . ", Vowel Count: " . $vowelCount . ", Reversed String: " . $reversedString . "\n";
}