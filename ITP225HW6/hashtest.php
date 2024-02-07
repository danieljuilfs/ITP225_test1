<?php
$input = (string)readline("Would you like your text hashed to md5 or sha1?: ");
$text = (string)readline("Enter the phrase to be hashed: ");
if ((strcmp($input, "md5") == 0)){
    print("Your text hashed in md5: " . md5($input));
}
else {
    print("Your text hashed in sha1: " . sha1($input)); 
}