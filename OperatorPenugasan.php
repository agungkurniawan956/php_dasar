<?php

// berikut adalah operator penugasan +=, -=, *=, /=, %=.
$total = 0;
$discount = 5000;

$rujak = 10000;
$salad = 25000;
$juice = 10000;

$total += $rujak;
$total += $salad;
$total += $juice;
$total -= $discount;

var_dump($total);
