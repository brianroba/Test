<?php
// Create a simple array to test serialization and unserialization
//$test_data = ['month:11', 'day:20', 'year:2024'];
$serialized_data = 'i:5;s:41:\"Masters-Knowledge Management & Innovation\";i:6;s:3:\"N/A\";}i:2;a:6:{i:1;a:3:{s:5:\"month\";s:1:\"1\";s:3:\"day\";s:1:\"4\";s:4:\"year\";s:4:\"2013\";}'; // Serialize the array

//echo "Serialized data: " . $serialized_data . "\n";  // Outputs: a:2:{i:0;s:3:"Yes";i:1;s:2:"No";}

// Now try unserializing it
$unserialized_data = unserialize($serialized_data);

if ($unserialized_data === false) {
    echo "Error unserializing data.\n";
} else {
    print_r($unserialized_data);  // Should show the array
}
?>
