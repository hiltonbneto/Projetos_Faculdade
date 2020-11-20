<?php
//$mysqli = new mysqli("localhost", "my_user", "my_password", "world");
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 3";
$result = $conn->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);  

/* associative array */
$row = $result->fetch_array(MYSQLI_ASSOC);
//printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);  

/* associative and numeric array */
$row = $result->fetch_array(MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["CountryCode"]);  

/* free result set */
$result->close();

/* close connection */
$conn->close();
?>