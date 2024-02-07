<?php

//converts the entire string to lower case and trims the whitespace on either side
$input = trim(strtolower((string)readline("Would you like your text hashed to md5 or sha1?: ")));

//reads the users string in
$text = (string)readline("Enter the phrase to be hashed: ");

//if the text of $input is exactly md5, prints out an md5 hash of the string
if ((strcmp($input, "md5") == 0)){
    print("Your text hashed in md5: " . md5($input));
}
//otherwise prints out a sha1 hash of that file. 
else {
    print("Your text hashed in sha1: " . sha1($input)); 
}