<?php
// The serialized string from your database or file
$serialized_data = 'a:2:{i:1;a:6:{i:1;a:3:{s:5:\month\";s:1:\"8\";s:3:\"day\";s:1:\"6\";s:4:\"year\";s:4:\"1998\";}i:2;a:3:{s:5:\"month\";s:1:\"4\";s:3:\"day\";s:1:\"6\";s:4:\"year\";s:4:\"2003\";}i:3;s:27:\"Moi University Main Campus\";i:4;a:3:{s:5:\"month\";s:2:\"12\";s:3:\"day\";s:1:\"6\";s:4:\"year\";s:4:\"2003\";}i:5;s:48:\"Bachelor of Technology in Production Engineering\";i:6;s:32:\"2nd Class Honours Upper Division\";}i:2;a:6:{i:1;a:3:{s:5:\"month\";s:1:\"1\";s:3:\"day\";s:1:\"6\";s:4:\"year\";s:4:\"1993\";}i:2;a:3:{s:5:\"month\";s:2:\"11\";s:3:\"day\";s:2:\"30\";s:4:\"year\";s:4:\"1996\";}i:3;s:35:\"Katoloni Secondary School
';  // Example data


// Output the length and the data itself for debugging
// Check for any issues with the serialized data
if ($serialized_data) {
echo "Serialized string length: " . strlen($serialized_data) . "\n";
echo "Serialized data: " . $serialized_data . "\n";
} else {
    echo "Invalid serialized string.";
}
// Try to unserialize
$unserialized_data = unserialize(data: $serialized_data);

// Trim the string to remove any extra spaces or hidden characters
//$serialized_data = trim($serialized_data);

// Check the result
if ($unserialized_data === null) {
    echo "Error unserializing data.\n";
} else {
    print_r($unserialized_data);
}
?>
