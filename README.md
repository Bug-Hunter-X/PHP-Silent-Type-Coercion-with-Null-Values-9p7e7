# PHP Silent Type Coercion with Null Values

This repository demonstrates a common, yet subtle bug in PHP related to silent type coercion when dealing with `null` values. The core issue stems from PHP's loose typing and how it implicitly converts `null` to other types in certain contexts, leading to unexpected results.

## The Bug
The `bug.php` file contains a simple example where a `null` value is passed to a function expecting a number. Due to PHP's silent type coercion, `null` is implicitly converted to an integer (0), leading to an incorrect output.

## The Solution
The `bugSolution.php` file provides a corrected version of the code.  It explicitly checks for `null` values before performing any arithmetic operations, ensuring correct behavior even when a `null` is passed.