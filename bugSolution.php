```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric input appropriately, e.g., throw an exception or skip
      //throw new InvalidArgumentException('Array element is not numeric.');
      echo "Warning: Non-numeric value encountered: " . $number . "\n";
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```