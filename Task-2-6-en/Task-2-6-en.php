<?php
    print("Enter a number: "); 
    $n = intval(fgets(STDIN)); 
    $m = $n; // Initial value of the number's "root"
    while ($m > 9)  // Outer loop: repeat until the number becomes a single digit
    {
        $s = 0; // Sum of the digits of the entered number
        while ($m > 0)  // Inner loop: repeat while the number is greater than zero
        {
            $s = $s + $m % 10; // Calculate the sum of the digits. 
            $m = intdiv($m, 10); // Divide the number by 10.
        }
        $m = $s; // Intermediate value of the number's "root"
    }
    // Output the original number and its "root" to the screen
    print("The \"root\" of the number " . $n . " is " . $m . "\r\n");
?>