<?php
require 'dbconnect.php';

//insert data into database table(Create)
/*
$sql = "INSERT INTO test (userid , password) VALUES('abc','abc123')";
$result = mysqli_query($conn, $sql);
if ($result === TRUE) {
    echo 'inserted succesfully';
} else {
    echo "error" . $conn->error;
}
*/

//select data from database table(READ)

/*
$sql = "SELECT sr, userid FROM test";
$result = mysqli_query($conn, $sql);

echo "<h2>sr- Userid</h2>";
// output data of each row
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["sr"] . " - " . $row["userid"] . "<br>";
}
*/

//Update data into database table(UPDATE)
/*

$sql = "UPDATE test SET userid='abc1' WHERE sr=1";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "updated succesfully";
}
else {
    echo "error" . $conn->error;
}
*/


//delete data into database table(DELETE)
/*
$sql = "DElETE FROM test WHERE sr=11";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'record deleted succesfully';
} else {
    echo "error" . $conn->error;
}
*/