<?php
$handle = curl_init();

$url = "http://api.krisinformation.se/v1/links?format=json";

// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

echo "Data retrived from API";
echo "<br/>";
echo "<br/>";
echo "<br/";
$output = curl_exec($handle);

curl_close($handle);

$output = json_decode($output, true);

if (! empty($output)) {
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    // Select Database
    $select_db = mysqli_select_db($conn, 'apicall') or die(mysqli_error());
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        echo "<br/";
        exit();
    } else {
        echo "<br/>";
        echo "<br/>";
        echo "Data Connection Successful!";
        if (is_array($output)) {
            $i = 1;
            $j = 1;
            foreach ($output as $key => $value) {
                // Code to insert data into table
                $sql = "INSERT INTO `apicall` ( `Id`, `LinkName`, `LinkUrl`, `Location`, `Category`) VALUES
						( '{$value["Id"]}', '{$value["LinkName"]}', '{$value["LinkUrl"]}', '{$value["Location"]}', '{$value["Category"]}' )";
                if (mysqli_query($conn, $sql)) {} else { //
                    $j ++; // Count Failed Records
                    continue;
                }
                $i ++; // Count Successful Insertion
            }
        }
    }
}
$i = $i - 1;
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Total " . $i . " number of records inserted successfully.";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Total " . $j . " number of records Skipped. Either Due to errors or they existed from before .";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "Follow the steps mentioned in Readme.md to Launch Node.js app to view the results."?>
