<?php

# Match Expressions

$grade = 'grade 1';
$gradeCost = match ($grade) {
    'grade 1' => 100,
    'grade 2' => 150,
};

echo $gradeCost;
