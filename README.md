# PHP Type Juggling Bug
This repository demonstrates a common error in PHP: unexpected behavior caused by loose typing when performing numerical calculations. The `calculateSum` function is designed to add numbers; however, if a string is passed, PHP's type juggling will attempt to convert it to a number, potentially leading to errors.

## Bug
The `bug.php` file contains a function that calculates the sum of an array of numbers.  The issue arises when a string is included in the array. This string will be converted to a number, but may produce inaccurate results, or errors.

## Solution
The `bugSolution.php` file demonstrates a solution using type checking to prevent this issue.