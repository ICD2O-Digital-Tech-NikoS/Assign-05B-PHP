<?php

  // get user input for min
  $userMax = $_POST["userMax"];
  // get user input for max
  $userMin = $_POST["userMin"];
  // gets users number
  $userInt = $_POST["userInt"];
  // empty string for displaying numbers
  $displayMessage = "";
  // counter set to user min value
  $counter = $userMin;
  // initializes sum value
  $sum = 0;

  // Check if any input is empty
  if (empty($userMax) || empty($userMin) || empty($userInt)) {
    echo "Please fill all boxes";
    exit; // Stop further processing
  }

  // if the user minimum number for the addition table is greater than their maximum number, it dislays an error message because a minimum should not be greater than a maximum. 
  if ($userMin > $userMax) {
    // displays error message in the display div
    echo "Your minimum is greater than your maximum. Please try again.";
  } else {
    // while counter is not greater than the userMax, update the sum to equal the user number plus the counter, the display message to equal the sum, and the counter to equal the counter plus one. repeats until the counter is greater than the userMax
    while ($counter <= $userMax) {
      $sum =  $userInt + $counter;
      $displayMessage = $displayMessage . $counter . "+" . $userInt . "=" . $sum . "<br>";
      $counter++;
    }
    // display the display message
    echo $displayMessage;
  }

?>